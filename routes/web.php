<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Painel\HomeController;
use App\Http\Controllers\Painel\GraficosController;
use App\Http\Controllers\Painel\Config\CargoController;
use App\Http\Controllers\Painel\Admin\ClienteController;
use App\Http\Controllers\Painel\Config\ConfigController;
use App\Http\Controllers\Painel\Admin\ExameAdmController;
use App\Http\Controllers\Painel\Admin\PagamentoController;
use App\Http\Controllers\Painel\Config\ColaboradorController;
use App\Http\Controllers\Painel\Farmacia\GraficosFarmaciaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

/* Admin */
Route::prefix('/')->group(function () {

    /* Clientes */
    Route::get('clientes/', [ClienteController::class, 'index'])->name('painel.admin.clientes.index');
    Route::get('clientes/lista-de-clientes', [ClienteController::class, 'lista'])->name('painel.admin.clientes.list');
    // cadastro cliente
    Route::get('clientes/cadastro', [ClienteController::class, 'create'])->name('painel.admin.clientes.create');
    Route::get('clientes/cliente-json/{user}', [ClienteController::class, 'getClienteJson'])->name('painel.admin.clientes.cliente-json');
    Route::get('clientes/pesquiser-cliente', [ClienteController::class, 'getClientesJson'])->name('painel.admin.clientes.pesquisar');
    Route::post('clientes/cadastro', [ClienteController::class, 'store'])->name('painel.admin.clientes.store');
    Route::get('clientes/cadastro/{user}/endereco', [ClienteController::class, 'createEndereco'])->name('painel.admin.clientes.create-2');
    Route::post('clientes/cadastro/{user}/endereco', [ClienteController::class, 'storeEndereco'])->name('painel.admin.clientes.store-endereco');
    Route::get('clientes/cadastro/{user}/pagamento', [ClienteController::class, 'createPagamento'])->name('painel.admin.clientes.pagamento');
    Route::post('clientes/cadastro/{user}/pagamento', [ClienteController::class, 'storePagamento'])->name('painel.admin.clientes.store-pagamento');

    Route::get('clientes/show/{user}', [ClienteController::class, 'show'])->name('painel.admin.clientes.show');
    Route::get('clientes/{user}/edit', [ClienteController::class, 'edit'])->name('painel.admin.clientes.edit');

    Route::put('clientes/edit-usuario/{user}', [ClienteController::class, 'updateUsuario'])->name('painel.admin.clientes.edit-usuario');

    Route::get('clientes/pagamento', [PagamentoController::class, 'index'])->name('painel.admin.clientes.pagamento.index');
    Route::get('clientes/pagamento/atualizar/{user}', [PagamentoController::class, 'atualizarAssinatura'])->name('painel.admin.clientes.pagamento.atualizar');
    Route::get('clientes/pagamento/ativar/{user}', [PagamentoController::class, 'ativarConta'])->name('painel.admin.clientes.pagamento.ativar');
    Route::get('clientes/pagamento/inativar/{user}', [PagamentoController::class, 'inativarConta'])->name('painel.admin.clientes.pagamento.inativar');
    Route::get('clientes/pagamento/ultimas-assinaturas', [PagamentoController::class, 'ultimasAssinaturasJson'])
        ->name('painel.admin.clientes.pagamento.ultimas-assinaturas');


    /* Exames */


    // Route::get('/', function () {
    //     return view('pages.painel.admin.exames.index');
    // })->name('painel.admin.exames.index');

    // Route::get('/create', function () {
    //     return view('pages.painel.admin.exames.create');
    // })->name('painel.admin.exames.create');

    // Route::get('/edit/{id}', function () {
    //     return view('pages.painel.admin.exames.edit');
    // })->name('painel.admin.exames.edit');

    Route::get('exames/{exame}/create-2', [ExameAdmController::class, 'create2'])->name('painel.admin.exames.create-2');
    Route::post('exames/{exame}/create-2', [ExameAdmController::class, 'store2'])->name('painel.admin.exames.store-2');
    Route::resource('/exames', ExameAdmController::class, ['as' => 'painel.admin']);

    Route::get('/graficos', [GraficosController::class, 'index'])->name('painel.admin.graficos.index');
});


/* Configurações */
Route::prefix('ajustes')->group(function () {

    Route::get('/', [ConfigController::class, 'index'])->name('painel.config.index');
    Route::put('/atualizar-perfil', [ConfigController::class, 'updateProfile'])->name('painel.config.atualizar-perfil');
    Route::get('/pesquisar-colaboradores', [ConfigController::class, 'pesquisaColaboradorJson'])
        ->name('painel.config.pesquisar-colaboradores');
    Route::get('/pesquisar-cagos', [ConfigController::class, 'pesquisaCargosJson'])
        ->name('painel.config.pesquisar-cargos');

    /* Colaborador */
    Route::resource('/colaboradores', ColaboradorController::class, ['as' => 'painel.config'])
        ->parameter('colaboradores', 'user');

    /* Cargos */
    // pesquisa colaborador
    Route::get('/cargos/pesquisa-colaborador', [CargoController::class, 'pesquisaColaboradorJson'])
        ->name('painel.config.cargos.pesquisa-colaborador');
    // resource cargos
    Route::resource('/cargos', CargoController::class, ['as' => 'painel.config'])
        ->parameter('cargos', 'cargo');
});


/* Farmacêutico */
Route::prefix('/fm')->group(function () {
    /* Clietes */
    Route::prefix('/clientes')->group(function () {

        Route::get('/', function () {
            return view('pages.painel.farmacia.clientes.index');
        })->name('painel.farmacia.clientes.index');

        Route::get('/create', function () {
            return view('pages.painel.farmacia.clientes.create');
        })->name('painel.farmacia.clientes.create');

        Route::get('/edit/{id}', function () {
            return view('pages.painel.farmacia.clientes.edit');
        })->name('painel.farmacia.clientes.edit');
    });

    /* agenda */
    Route::prefix('agenda')->group(function () {

        Route::get('/', function () {
            return view('pages.painel.farmacia.agenda.index');
        })->name('painel.farmacia.agenda.index');

        Route::get('/create', function () {
            return view('pages.painel.farmacia.agenda.create');
        })->name('painel.farmacia.agenda.create');
    });


    /* Exames */
    Route::prefix('/exames')->group(function () {

        Route::get('/', function () {
            return view('pages.painel.farmacia.exames.index');
        })->name('painel.farmacia.exames.index');

        Route::get('/atendimento', function () {
            return view('pages.painel.farmacia.exames.atendimento');
        })->name('painel.farmacia.exames.atendimento');

        Route::get('/show/{id}', function () {
            return view('pages.painel.farmacia.exames.show');
        })->name('painel.farmacia.exames.show');

        Route::get('/lista', function () {
            return view('pages.painel.farmacia.exames.list');
        })->name('painel.farmacia.exames.lista');

        Route::get('/create', function () {
            return view('pages.painel.farmacia.exames.create');
        })->name('painel.farmacia.exames.create');
    });

    Route::get('/graficos', [GraficosFarmaciaController::class, 'index'])->name('painel.farmacia.graficos.index');
});
