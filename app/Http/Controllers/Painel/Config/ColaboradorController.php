<?php

namespace App\Http\Controllers\Painel\Config;

use App\Models\User;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ColaboradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $farmacia=Cliente::find(auth()->user()->cliente_id);
        $rolesAdmin = DB::table('roles')->orderBy('name')->get();
        return view('pages.painel.config.colaboradores.create', compact('farmacia','rolesAdmin'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', "unique:users"],
            'password' => ['required', 'string', 'min:8'],
            'cargo' => ['required', 'exists:roles,name']
        ]);

        $user = (new User)->fill($request->all());
        $user->password = bcrypt($request->password);
        $user->cliente_id=auth()->user()->cliente_id;

        // atualizar permissões/roles
        $user->assignRole($request->cargo);

        if ($request->img_profile != null && $request->img_profile != '') :
            $configController = new ConfigController;
            $user->img_perfil = $configController->imgBase64ToFileUpload($request->img_profile);
        endif;

        $user->save();

        return redirect()->route('painel.config.index')->withSuccess('Colaborador adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $farmacia=Cliente::find(auth()->user()->cliente_id);
        if ($user->profile == 'admin')
            abort(403);

        $rolesAdmin = DB::table('roles')->orderBy('name')->get();
        return view('pages.painel.config.colaboradores.edit', compact('farmacia','user', 'rolesAdmin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        if ($user->profile == 'admin')
            abort(403);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', "unique:users,email,{$user->id}"],
            'password' => ['required', 'string', 'min:8'],
            'cargo' => ['required', 'exists:roles,name']
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        // remover permissões/roles
        foreach ($user->getRoleNames() as $key => $value) :
            $user->removeRole($value);
        endforeach;

        // atualizar permissões/roles
        $user->assignRole($request->cargo);

        if ($request->img_profile != null && $request->img_profile != '') :
            $configController = new ConfigController;
            $user->img_perfil = $configController->imgBase64ToFileUpload($request->img_profile);
        endif;

        $user->save();

        return redirect()->back()->withSuccess('Colaborador editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
