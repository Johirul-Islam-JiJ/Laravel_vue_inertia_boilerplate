<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        return inertia('Roles/Index', [
            'roles' => Role::withTrashed()
                ->with('permissions')
                ->when($request->search, function ($query, $search) {
                    $query->where('name', 'LIKE', "%{$search}%");
                })
                ->orderBy($request->sortBy ?? 'id', $request->boolean('sortDesc') ? 'desc' : 'asc')
                ->paginate($request->perPage)
                ->withQueryString(),
            'filters' => [
                'search' => $request->search,
                'sortBy' => $request->sortBy,
                'sortDesc' => $request->sortDesc,
                'perPage' => $request->perPage,
            ]
        ]);
    }

    public function create()
    {
        $permissions = Permission::orderBy('name')->get();

        return inertia('Roles/Form', ['permissions' => $permissions]);
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => ['required', 'min:4', 'unique:roles'],
            'permissions' => ['required', 'array', 'min:1']
        ]);

        $role = Role::create([
            'name' => $valid['name']
        ]);

        if ($role)
        {
            if ($role->permissions()->sync($request->input('permissions')))
                return redirect()->route('roles.index')->with('success', 'Role Created');
            else
                $role->delete();
        }

        return back()->with('error', 'Something Went Wrong');
    }

    public function edit(Role $role)
    {
        return inertia('Roles/Form', ['role' => $role]);
    }

    public function update(Request $request, Role $role)
    {
        $valid = $request->validate([
            'name' => ['required', 'min:4', 'unique:roles,name,' . $role->id]
        ]);

        if (!auth()->user()->hasRole($role))
        {
            if ($role->update($valid))
                return redirect()->route('roles.index')->with('success', 'Role Updated');
        }
        else
            return back()->with('error', "Can't edit your Role");

        return back()->with('error', 'Something Went Wrong');
    }

    public function destroy(Role $role)
    {
        if (!auth()->user()->hasRole($role))
        {
            if ($role->delete())
                return redirect()->route('roles.index')->with('success', 'Role Deleted');
        }
        else
            return back()->with('error', "Can't delete your Role");

        return back()->with('error', 'Something Went Wrong');
    }

    public function restore($role)
    {
        if (Role::onlyTrashed()->find($role)->restore())
            return back()->with('success', 'Record Restored');

        return back()->with('error', 'Something Went Wrong');
    }

    public function forceDelete($role)
    {
        if (Role::onlyTrashed()->find($role)->forceDelete())
            return back()->with('success', 'Record Permanently Deleted');

        return back()->with('error', 'Something Went Wrong');
    }

    public function assignPermissionsForm(Role $role)
    {
        $permissions = Permission::all();

        return inertia('Roles/AssignPermission', [
            'role' => $role,
            'permissions' => $permissions,
            'assigned' => $role->permissions
        ]);
    }

    public function assignPermissions(Request $request, Role $role)
    {
        $permissions = $request->input('permissions');

        $role->permissions()->detach();

        foreach ($permissions as $key => $permission)
        {
            if (!$role->permissions()->sync($permissions[$key], false))
                return back()->with('error', 'Something Went Wrong');
        }

        return redirect()->route('roles.index')->with('success', 'Permissions Assigned');
    }
}
