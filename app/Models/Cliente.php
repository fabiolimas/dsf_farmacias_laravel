<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'cnpj',
        'classe',
        'telefone',

        'cep',
        'estado',
        'cidade',
        'logradouro',
        'num_endereco',
        'sem_numero_end',
        'complemento',

        'nome_cartao',
        'numero_cartao',
        'validade_cartao',
        'cvv',
        'cnpj_cpf_cartao',
        'user_id',

        'dt_pagamento',
        'logo',
        'razao_social',
        'hospital_proximo',
        'end_hospital'

    ];

    protected $appends = [
        'status_pagamento',
        'dt_pagamento_ultimo',
        'dt_pagamento_vencimento',

        'url_atualizar_ass',
        'url_desativar_conta',
        'url_ativar_conta',
        'tempo_assinatura',
    ];

    public function getTempoAssinaturaAttribute()
    {
        // Suponha que você tenha uma data armazenada em uma variável $data
        $data = Carbon::parse($this->dt_pagamento);

        // Obtém o tempo decorrido em formato amigável
        $tempoDecorrido = $data->diffForHumans();

        return str_replace(['há ', ' minutos', ' minuto', ' horas', ' segundos'], ['', 'min', 'min', 'h', 'seg'], $tempoDecorrido);
    }

    public function getUrlAtualizarAssAttribute()
    {
        return route('painel.admin.clientes.pagamento.atualizar', $this->user->id);
    }

    public function getUrlDesativarContaAttribute()
    {
        return route('painel.admin.clientes.pagamento.inativar', $this->user->id);
    }

    public function getUrlAtivarContaAttribute()
    {
        return route('painel.admin.clientes.pagamento.ativar', $this->user->id);
    }

    public function getDtPagamentoUltimoAttribute()
    {

        if (is_null($this->dt_pagamento))
            return '----';

        return date('d/m/Y', strtotime($this->dt_pagamento));
    }

    public function getDtPagamentoVencimentoAttribute()
    {

        if (is_null($this->dt_pagamento))
            return '----';

        return date('d/m/Y', strtotime($this->dt_pagamento . "+ 1 months"));
    }

    public function getStatusPagamentoAttribute()
    {
        if (is_null($this->dt_pagamento))
            return "Sem pagamento";

        $dtAss = $this->dt_pagamento;
        $dtVencimento = date('Y-m-d', strtotime("$dtAss + 1 months"));

        // dd($dtAss, $dtVencimento);

        if (strtotime(date('Y-m-d')) > strtotime($dtVencimento)) :
            return 'Atrasado';
        else :
            return 'Ativo';
        endif;
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
