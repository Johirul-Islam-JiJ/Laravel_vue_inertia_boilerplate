<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(Request $request)
    {
        return inertia('Permissions/Index', [
            'permissions' => Permission::withTrashed()
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
        return inertia('Permissions/Form');
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => ['required', 'min:4', 'unique:permissions']
        ]);

        if (Permission::create($valid))
            return redirect()->route('permissions.index')->with('success', 'Permission Created');

        return back()->with('error', 'Something Went Wrong');
    }

    public function edit(Permission $permission)
    {
        return inertia('Permissions/Form', ['permission' => $permission]);
    }

    public function update(Request $request, Permission $permission)
    {
        $valid = $request->validate([
            'name' => ['required', 'min:4', 'unique:permissions,name,' . $permission->id]
        ]);

        if ($permission->update($valid))
            return redirect()->route('permissions.index')->with('success', 'Permission Updated');

        return back()->with('error', 'Something Went Wrong');
    }

    public function destroy(Permission $permission)
    {
        if ($permission->delete())
            return back()->with('success', 'Permission Deleted');

        return back()->with('error', 'Something Went Wrong');
    }

    public function restore($permission)
    {
        if (Permission::onlyTrashed()->find($permission)->restore())
            return back()->with('success', 'Record Restored');

        return back()->with('error', 'Something Went Wrong');
    }

    public function forceDelete($permission)
    {
        if (Permission::onlyTrashed()->find($permission)->forceDelete())
            return back()->with('success', 'Record Permanently Deleted');

        return back()->with('error', 'Something Went Wrong');
    }
}
