<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cnpj' => '69.662.546/0001-04',
            'classe' => 'ME',
            'telefone' => '(100) ' . rand(10000, 99999) . '-' . rand(1000, 9999),

            'cep' => rand(10000, 99999) . '-000',
            'estado' => "SP",
            'cidade' => "SAO PAULO",
            'logradouro' => 'log',
            'num_endereco' => rand(10000, 99999),
            'sem_numero_end' => 0,

            'nome_cartao' => fake()->name(),
            'numero_cartao' => rand(1000, 9999) . ' ' . rand(1000, 9999) . ' ' . rand(1000, 9999) . ' ' . rand(1000, 9999),
            'validade_cartao' => '2024-05',
            'cvv' => rand(100, 999),
            'cnpj_cpf_cartao' => '69.662.546/0001-04',
            'dt_pagamento' => date('Y-m-d', strtotime(' - ' . rand(-1, 5) . ' months'))
            // 'user_id',
        ];
    }
}
