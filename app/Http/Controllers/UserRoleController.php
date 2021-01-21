<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserRoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:Add User Roles', ['only' => ['index','store', 'create']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $permissions = Permission::all()->groupBy('group')->toArray();
        $users = User::all()->pluck('name', 'id')->toArray();
        $roles = Role::all()->pluck('name', 'id')->toArray();

        return view('user_roles.index', compact(
            [
                //'data',
                'permissions',
                'users',
                'roles'
            ]
        ));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'user' => 'required',
            'role' => 'required',
        ]);

        $user = User::find($request->user);

        if ($user) {
            $user->syncRoles($request->role);
        }

        return redirect()->route('user-roles.index')
            ->with('success', 'The user has been added role successful');
    }

    public function edit(Request $request, $id)
    {
        $permissions = Permission::all()->groupBy('group')->toArray();
        $users = User::all()->pluck('name', 'id')->toArray();
        $roles = Role::all()->pluck('name', 'id')->toArray();

        $user = User::find($id);
        $userRole = $user->roles()->first();
        $userPermission = $user->getAllPermissions()->pluck('id')->toArray();

        return view('user_roles.edit', compact(
            [
                // 'data',
                'permissions',
                'user',
                'users',
                'roles',
                'userRole',
                'userPermission'
            ]
        ));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'user' => 'required',
            'role' => 'required',
        ]);

        $user = User::find($request->user);

        if ($user) {
            $user->syncRoles($request->role);
        }

        return redirect()->route('user-roles.edit', $request->user)
            ->with('success', 'The user has been added role successful');
    }
}
