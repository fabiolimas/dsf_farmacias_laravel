<?php

namespace App\Http\Controllers\Painel\Admin;

use App\Models\User;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.painel.admin.clientes.index');
    }



    public function lista()
    {
        return view('pages.painel.admin.clientes.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.painel.admin.clientes.create');
    }

    public function createEndereco(User $user)
    {
        return view('pages.painel.admin.clientes.create_endereco', compact('user'));
    }

    public function createPagamento(User $user)
    {
        return view('pages.painel.admin.clientes.create_pagamento', compact('user'));
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
            'telefone' => ['required', 'max:255'],
            'cnpj' => ['required', 'max:255'],
            'classe' => ['required', 'max:255'],
        ]);

        $user = (new User)->fill($request->all());
        $user->password = bcrypt($request->password);
        $user->profile = 'farmaceutico';
        $user->save();

        $cliente = (new Cliente)->fill($request->all());
        $cliente->user_id = $user->id;
        $cliente->razao_social=$user->name;
        $cliente->save();

        return redirect()
            ->route('painel.admin.clientes.create-2', ['user' => $user->id])
            ->withSuccess('Preencha os dados de endereço.');
    }

    public function storeEndereco(Request $request, User $user)
    {
        // dd($request->all());

        $request->validate([
            "cep" => ['required', 'max:255'],
            "estado" => ['required', 'max:255'],
            "cidade" => ['required', 'max:255'],
            "logradouro" => ['required', 'max:255'],
            "num_endereco" => ['nullable', 'max:255'],
        ]);

        $cliente = $user->cliente;
        $cliente->fill($request->all());
        $cliente->sem_numero_end = $request->sem_numero_end ?? 0;
        $cliente->save();

        if ($request->has('editar')) :
            return redirect()
                ->back()
                ->withSuccess('Endereço editado com sucesso.');
        endif;

        return redirect()->route('painel.admin.clientes.pagamento', ['user' => $user->id])
            ->withSuccess('Preencha os dados de pagamento para finalizar o cadastro.');
    }

    public function storePagamento(Request $request, User $user)
    {
        $request->validate([
            "nome_cartao" =>  ['required', 'max:255'],
            "numero_cartao" =>  ['required', 'max:255'],
            "validade_cartao" =>  ['required', 'max:255'],
            "cvv" =>  ['required', 'max:255'],
            "cnpj_cpf_cartao" =>  ['required', 'max:255'],
        ]);

        $cliente = $user->cliente;
        $cliente->fill($request->all());
        $cliente->save();

        if ($request->has('editar')) :
            return redirect()
                ->back()
                ->withSuccess('Pagamento editado com sucesso.');
        endif;

        return redirect()
            ->route('painel.admin.clientes.index')
            ->withSuccess('Cadastro realizado com sucesso.');
    }

    public function updateUsuario(Request $request, User $user)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', "unique:users,email," . $user->id],
            'password' => ['nullable', 'string', 'min:8'],
            'telefone' => ['required', 'max:255'],
            'cnpj' => ['required', 'max:255'],
            'classe' => ['required', 'max:255'],
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        $user->cliente->telefone = $request->telefone;
        $user->cliente->cnpj = $request->cnpj;
        $user->cliente->razao_social = $request->name;
    
        $user->cliente->classe = $request->classe;
        if ($request->has('password') && $request->password != '') :
            $user->password = bcrypt($request->password);
        endif;
        $user->cliente->save();
        $user->save();

        $cliente = $user->cliente->fill($request->all());
        $cliente->user_id = $user->id;
    
        $cliente->save();

        $farmacia=Cliente::where('user_id',$user->id)->first();
        $farmacia->update(['razao_social'=>$user->name]);

        return redirect()
            ->back()
            ->withSuccess('Usuário editado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('pages.painel.admin.clientes.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('pages.painel.admin.clientes.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }


    public function getClienteJson($user)
    {
        $user = User::with('cliente')->find($user);
        return $user;
    }

    public function getClientesJson(Request $request)
    {
        $users = User::with('cliente')
            ->where('profile', 'farmaceutico')
            ->where('name', 'like', "%{$request->nome}%")
            ->latest()
            ->get();

        return $users;
    }
}
