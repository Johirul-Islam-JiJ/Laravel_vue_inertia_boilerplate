<?php

namespace App\Http\Controllers;

use App\Mail\AccountCreationMail;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return inertia('Users/Index', [
            'users' => User::withTrashed()
                ->with('roles')
                ->when($request->search, function ($query, $search) {
                    $query->where('name', 'LIKE', "%{$search}%")
                        ->orWhere('email', 'LIKE', "%{$search}%")
                        ->orWhere('phone', 'LIKE', "%{$search}%")
                        ->orWhere('address', 'LIKE', "%{$search}%");
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
        $roles = Role::orderBy('name')->get();

        return inertia('Users/Form', ['roles' => $roles]);
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|string|email|max:20|unique:users',
            'phone' => 'required|starts_with:01|digits:11|unique:users',
            'address' => 'nullable|string|max:255',
            'roles' => 'required|array|min:1'
        ]);

        $password = Str::uuid()->toString();

        $user = User::create([
            'name' => $valid['name'],
            'email' => $valid['email'],
            'phone' => $valid['phone'],
            'address' => $valid['address'],
            'password' => bcrypt($password),
        ]);

        if ($user)
        {
            if ($user->roles()->sync($request->input('roles')))
            {
                Mail::to($user->email)->send(new AccountCreationMail($user, $password));
                return redirect()->route('users.index')->with('success', 'Created Successfully');
            }
            else
                $user->delete();
        }

        return back()->with('error', 'Something Went Wrong');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        return inertia('Users/Form', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $valid = $request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|string|email|max:20|unique:users,email,' . $user->id,
            'phone' => 'required|starts_with:01|digits:11|unique:users,phone,' . $user->id,
            'address' => 'nullable|string|max:255',
        ]);

        if ($user->update($valid))
            return redirect()->route('users.index')->with('success', 'Updated Successfully');

        return back()->with('error', 'Something Went Wrong');
    }

    public function destroy(User $user)
    {
        if (auth()->user()->id == $user->id)
            return back()->with('error', 'You are logged in');

        if ($user->delete())
            return back()->with('success', 'Record Deleted');

        return back()->with('error', 'Something Went Wrong');
    }

    public function restore($user)
    {
        if (User::onlyTrashed()->find($user)->restore())
            return back()->with('success', 'Record Restored');

        return back()->with('error', 'Something Went Wrong');
    }

    public function forceDelete($user)
    {
        if (User::onlyTrashed()->find($user)->forceDelete())
            return back()->with('success', 'Record Permanently Deleted');

        return back()->with('error', 'Something Went Wrong');
    }

    public function assignRolesForm(User $user)
    {
        $roles = Role::all();

        return inertia('Users/AssignRole', [
            'user' => $user,
            'roles' => $roles,
            'assigned' => $user->roles
        ]);
    }

    public function assignRoles(Request $request, User $user)
    {
        $roles = $request->input('roles');

        $user->roles()->detach();

        foreach ($roles as $key => $role)
        {
            if (!$user->roles()->sync($roles[$key], false))
                return back()->with('error', 'Something Went Wrong');
        }

        return redirect()->route('users.index')->with('success', 'Roles Assigned');
    }
}
