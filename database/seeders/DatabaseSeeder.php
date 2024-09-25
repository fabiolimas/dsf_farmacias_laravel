<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        /* Permissões cargos terema cesso */
        /* Em 'config' será criado roles que será os cargos, esses roles vão receber essas permissões */
        // $role = Role::create(['name' => 'writer']);
        Permission::create(['name' => 'agenda']);
        Permission::create(['name' => 'clientes']);
        Permission::create(['name' => 'exames']);
        Permission::create(['name' => 'graficos']);
        Permission::create(['name' => 'ajustes']);
        //
        $roleAdmin = Role::create(['name' => 'Administrador','profile'=>'adminFarmacia']);
        $roleAdmin->givePermissionTo(Permission::all());
        Role::create(['name' => 'Farmacêutico', 'profile'=>'farmaceutico']);

        // for ($i = 0; $i < 20; $i++) :
        //     Role::create(['name' => 'Cargo' . $i + 1]);
        // endfor;

 /* clientes farmaceuticos */
 $arr = [
    'Raia Drogasil',
    'Drogarias DPSP',
    'PagueMenos',
    'Panvel',
    'Drogaria Araújo',
    'Clamed',
    'Extrafarma',
    'Nissei',
];



    \App\Models\Cliente::factory()->create([

    ]);



        /* Usuários */

        \App\Models\User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'adm@email.com',
            'profile' => 'admin',
            'status' => 'ativo'
        ])->assignRole('Administrador');


        \App\Models\User::factory()->create([
            'name' => 'Test Colaborador',
            'email' => 'colaborador@email.com',
            'profile' => 'colaborador',
            'status' => 'ativo'
        ])->assignRole('Financeiro');

        \App\Models\User::factory()->create([
            'name' => 'Test Farmácia',
            'email' => 'farmacia@email.com',
            'profile' => 'farmaceutico',
            'status' => 'ativo',
            'cliente_id'=>1
        ]);


        // \App\Models\User::factory(20)->create([
        //     'profile' => 'colaborador'
        // ]);

        // \App\Models\User::factory(20)->create([
        //     'profile' => 'colaborador'
        // ]);

        // for ($i = 0; $i < 20; $i++) {
        //     \App\Models\User::factory(1)->create([
        //         'name' => fake()->randomElement($arr),
        //         'profile' => 'farmaceutico',

        //     ]);
        // }


    }
}
