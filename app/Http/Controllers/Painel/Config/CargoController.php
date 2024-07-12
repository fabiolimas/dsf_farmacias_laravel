<?php

namespace App\Http\Controllers\Painel\Config;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class CargoController extends Controller
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
        return view('pages.painel.config.cargos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'titulo' => ['required', 'max:255', 'unique:roles,name']
            ],
            [],
            ['titulo' => 'título']
        );


        $role = Role::create(['name' => $request->titulo])
            ->givePermissionTo($request->permissoes ?? []);

        /* obter todos os roles */
        $getAllRolesObj = DB::table('roles')->get('name');
        $getAllRolesArray = [];
        foreach ($getAllRolesObj as $key => $value) :
            $getAllRolesArray[] = $value->name;
        endforeach;

        if ($request->has('colaboradores')) :


            // Remover roles de colaboradores e adicionar novo role ao os colaboradores permitidos
            $users = User::whereIn('id', $request->colaboradores)->get();
            foreach ($users as $key => $user) :

                if ($user->profile == 'admin')
                    continue;

                foreach ($getAllRolesArray as $value) :
                    $user->removeRole($value);
                endforeach;
                // $user->syncRoles($getAllRolesArray);
                $user->assignRole($request->titulo);
            endforeach;


            // Remover o role criado/editado agora dos outros colaboradores q não estão permitidos
            $users = User::whereNotIn('id', $request->colaboradores)->get();
            foreach ($users as $key => $user) :

                if ($user->profile == 'admin')
                    continue;

                $user->removeRole($request->titulo);
            endforeach;

        endif;

        return redirect()->route('painel.config.index')->withSuccess('Cargo adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $cargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $cargo)
    {
        $cargo = DB::table('roles')->find($cargo);
        if (is_null($cargo))
            abort(404, 'Item não encontrado');

        if ($cargo->name == "Administrador")
            abort(403);

        $relacaoRolePermission = DB::table('role_has_permissions')->where('role_id', $cargo->id)->get();
        $whereIn = [];
        foreach ($relacaoRolePermission as $key => $value) :
            $whereIn[] = $value->permission_id;
        endforeach;

        $permissoes = DB::table('permissions')->whereIn('id', $whereIn)->get();
        $nomePermissoes = [];
        foreach ($permissoes as $key => $value) :
            $nomePermissoes[] = $value->name;
        endforeach;


        /* colaboradores com permissões */
        $role = Role::where('id', $cargo->id)->first();
        $colaboradores = $role->users()->get();

        return view('pages.painel.config.cargos.edit', compact('cargo', 'nomePermissoes', 'colaboradores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $cargo)
    {

        $cargo = DB::table('roles')->find($cargo);
        if (is_null($cargo))
            abort(404, 'Item não encontrado');

        if ($cargo->name == "Administrador")
            abort(403);


        $request->validate(
            [
                'titulo' => ['required', 'max:255', 'unique:roles,name,' . $cargo->id]
            ],
            [],
            ['titulo' => 'título']
        );

        DB::table('roles')->where('id', $cargo->id)->update([
            'name' => $request->titulo
        ]);

        $role = Role::findById($cargo->id);
        $role->revokePermissionTo('agenda');
        $role->revokePermissionTo('clientes');
        $role->revokePermissionTo('exames');
        $role->revokePermissionTo('graficos');
        $role->revokePermissionTo('ajustes');

        $role->givePermissionTo($request->permissoes ?? []);

        /* obter todos os roles */
        $getAllRolesObj = DB::table('roles')->get('name');
        $getAllRolesArray = [];
        foreach ($getAllRolesObj as $key => $value) :
            $getAllRolesArray[] = $value->name;
        endforeach;


        // Remover roles de colaboradores e adicionar novo role ao os colaboradores permitidos
        $users = User::whereIn('id', $request->colaboradores ?? [])->get();
        foreach ($users as $key => $user) :

            if ($user->profile == 'admin')
                continue;

            foreach ($getAllRolesArray as $value) :
                $user->removeRole($value);
            endforeach;
            // $user->syncRoles($getAllRolesArray);
            $user->assignRole($request->titulo);
        endforeach;


        // Remover o role criado/editado agora dos outros colaboradores q não estão permitidos
        $users = User::whereNotIn('id', $request->colaboradores ?? [])->get();
        foreach ($users as $key => $user) :

            if ($user->profile == 'admin')
                continue;

            $user->removeRole($request->titulo);
        endforeach;

        return redirect()->back()->withSuccess('Cargo editado com sucesso!');
    }

    public function pesquisaColaboradorJson(Request $request)
    {
        $colaboradores = User::where('profile', '!=', 'admin')
            ->where('name', 'like', "%{$request->name}%")
            ->get();
            
        return $colaboradores;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $cargo)
    {
        //
    }
}
