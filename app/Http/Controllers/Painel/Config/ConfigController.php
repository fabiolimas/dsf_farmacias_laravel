<?php

namespace App\Http\Controllers\Painel\Config;

use App\Models\User;
use App\Models\Cliente;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    public function index()
    {
        $farmacia=Cliente::find(auth()->user()->cliente_id);
        if(auth()->user()->profile == "admin"){
            $colaboradores = User::latest()->get();

        }else{
            $colaboradores = User::where('cliente_id', auth()->user()->cliente_id)
            ->whereNot('profile','admin')
            ->latest()->get();
        }

        $cargos = DB::table('roles')->latest()->get();
        return view('pages.painel.config.index', compact('farmacia','colaboradores', 'cargos'));
    }

    public function updateProfile(Request $request)
    {


        $user = User::find(auth()->user()->id);
        $cliente=Cliente::find( $user->cliente_id);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', "unique:users,email,{$user->id}"],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $user->name = $request->name;
        $cliente->update(['razao_social'=>$request->name]);
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if ($request->img_profile != null && $request->img_profile != ''){
            $user->img_perfil = $this->imgBase64ToFileUpload($request->img_profile);
            $cliente->update(['logo'=>$this->imgBase64ToFileUpload($request->img_profile)]);

        }


        $user->save();


        return redirect()->back()->withSuccess('Sua conta foi atualizada com sucesso!');
    }

    public function imgBase64ToFileUpload($base64Image)
    {
        // Separar a parte dos dados da imagem
        list($type, $data) = explode(';', $base64Image);
        list(, $data)      = explode(',', $data);

        // Decodificar os dados base64
        $imageData = base64_decode($data);

        // Caminho onde você deseja salvar a imagem
        $namePath = Str::random(20) . date('YmdHis');
        $filePath = storage_path() . "/app/public/perfil/$namePath.jpg";

        // Salvar a imagem no arquivo
        file_put_contents($filePath, $imageData);

        return "/storage/perfil/$namePath.jpg";
    }

    public function pesquisaColaboradorJson(Request $request)
    {
        $colaboradores = User::where('name', 'like', "%{$request->name}%")
            ->get();
        $colaboradoresArr = [];
        foreach ($colaboradores as $key => $value) {
            $dados = $value->toArray();
            $dados['cargo'] = $value->getRoleNames()->first() ?? 'Sem cargo';
            $colaboradoresArr[] = $dados;
        }

        return $colaboradoresArr;
    }

    public function pesquisaCargosJson(Request $request)
    {
        $cargos = DB::table('roles')->where('name', 'like', "%{$request->name}%")->latest()->get();
        return $cargos;
    }
}
