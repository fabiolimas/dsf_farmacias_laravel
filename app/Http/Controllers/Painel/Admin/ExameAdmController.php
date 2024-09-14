<?php

namespace App\Http\Controllers\Painel\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exame;
use Illuminate\Http\Request;

class ExameAdmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exames = Exame::latest()->paginate(10);
        return view('pages.painel.admin.exames.index', compact('exames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.painel.admin.exames.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nome' => ['required', 'max:255'],
            'laboratorio' => ['required', 'max:255'],
            'registro_ms' => ['required', 'max:255'],
        ]);

        $exame = (new Exame)->fill($request->all());
        $exame->save();

        return redirect()->route('painel.admin.exames.create-2', $exame->id);
    }

    public function create2(Exame $exame)
    {
        return view('pages.painel.admin.exames.create_2', compact('exame'));
    }

    public function store2(Request $request, Exame $exame)
    {

        // dd($request->all());

        $request->validate([
            'nome' => ['required', 'max:255'],
            'laboratorio' => ['required', 'max:255'],
            'registro_ms' => ['required', 'max:255'],
            'perguntas' => ['required', 'array'],
        ]);

        $exame->nome = $request->nome;
        $exame->laboratorio = $request->laboratorio;
        $exame->registro_ms = $request->registro_ms;
        $exame->perguntas = $this->setObrigatorioOuNao($request->perguntas);
      $exame->bibliografia=$request->bibliografia;
        $exame->save();

        return redirect()->route('painel.admin.exames.index')->withSuccess('Exame cadastrado com sucesso!');
    }

    public function setObrigatorioOuNao($perguntas)
    {
        foreach ($perguntas as $key => $pergunta) :
            if (isset($pergunta['obrigatorio'])) :
                $perguntas[$key]['obrigatorio'] = true;
            else :
                $perguntas[$key]['obrigatorio'] = false;
            endif;
        endforeach;
        return $perguntas;
    }

    /**
     * Display the specified resource.
     */
    public function show(Exame $exame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exame $exame)
    {
        return view('pages.painel.admin.exames.edit', compact('exame'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exame $exame)
    {

        $request->validate([
            'nome' => ['required', 'max:255'],
            'laboratorio' => ['required', 'max:255'],
            'registro_ms' => ['required', 'max:255'],
            'perguntas' => ['required', 'array'],
        ]);

        $exame->nome = $request->nome;
        $exame->laboratorio = $request->laboratorio;
        $exame->registro_ms = $request->registro_ms;
        $exame->perguntas = $this->setObrigatorioOuNao($request->perguntas);
       $exame->bibliografia=$request->bibliografia;
        $exame->save();

        return redirect()->back()->withSuccess('Exame editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exame $exame)
    {
        $exame->delete();
        return redirect()->route('painel.admin.exames.index')->withSuccess('Exame removido com sucesso!');
    }
}
