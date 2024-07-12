<?php

namespace App\Http\Controllers\Painel\Admin;

use App\Models\User;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagamentoController extends Controller
{
    public function index()
    {
        return view('pages.painel.admin.clientes.pagamento.index');
    }

    public function atualizarAssinatura(User $user)
    {
        $user->cliente->dt_pagamento = date('Y-m-d H:i:s');
        $user->cliente->save();

        return redirect()->back()->withSuccess("Assinatura atualizada com sucesso para  {$user->name}.");
    }

    public function ativarConta(User $user)
    {
        $user->status = 'ativo';
        $user->save();

        return redirect()->back()->withSuccess("Conta ativada com sucesso para {$user->name}.");
    }

    public function inativarConta(User $user)
    {
        $user->status = 'inativo';
        $user->save();

        return redirect()->back()->withSuccess("Conta desativada com sucesso para {$user->name}.");
    }

    public function ultimasAssinaturasJson(Request $request)
    {
        $assinaturas = Cliente::where('dt_pagamento', '!=', null)
            ->orderBy('dt_pagamento', 'desc');

        if ($request->has('nome')) :
            $assinaturas->whereHas('user', function ($q) use ($request) {
                return $q->where('name', 'like', "%{$request->nome}%");
            });
        endif;

        $totalHoje = Cliente::where('dt_pagamento', '!=', null)
            ->whereDate('dt_pagamento', date('Y-m-d'))
            ->orderBy('dt_pagamento', 'desc')
            ->count();

        return [
            'totalHoje' => $totalHoje,
            'assinaturas' => $assinaturas->get()
        ];
    }
}
