<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\{CreateRoleRequest, EditRoleRequest};
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = Role::filter($request->input('filter'));

        if ($request->has('search')) {
            $roles = $roles->search($request->input('search'));
        }

        $roles = $roles->sort($request->input('sort'));
        $roles = $roles->simplePaginate($request->input('per_page') ?? 15);

        return view('admin.roles.index', compact('roles'))
            ->with('active', Role::count())
            ->with('deleted', Role::onlyTrashed()->count())
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = new Role;
        $permissions = Permission::all();

        return view('admin.roles.create', compact('role', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CreateRoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRoleRequest $request)
    {
        if (Role::create($request->all())->wasRecentlyCreated) {
            return back()->with('notice', 'Role was successfully created.');
        }

        return back()->with('alert', 'Error occurred. Role was not created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $role_id)
    {
        return $role_id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('admin.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRoleRequest $request, Role $role)
    {
        $role->fill($request->all())->save();

        return back()->with('notice', 'Role was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $role_id)
    {
        $role = Role::withTrashed()->findOrFail($role_id);

        if ($role->forceDelete()) {
            return redirect()->route('admin.role.index', ['filter' => 'deleted'])
                ->with('notice', 'The role is being deleted.');
        }

        return back()->with('alert', 'Error occurred. Role was not deleted.');
    }

    public function delete(Role $role)
    {
        if ($role->delete()) {
            return back()->with('notice', 'The role is being deleted.');
        }

        return back()->with('alert', 'Error occurred. Role was not deleted.');
    }

    public function restore($role_id)
    {
        $role = Role::withTrashed()->findOrFail($role_id);

        if ($role->trashed()) {
            $role->restore();

            return back()->with('notice', 'The role restored.');
        }

        return back()->with('alert', 'Error occurred. Role was not restored.');
    }
}
