<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index() {
        $roles = \Spatie\Permission\Models\Role::all();

        return view('admin.role.index', ['roles' => $roles]);
    }

    public function add() {

        $permissions = \Spatie\Permission\Models\Permission::all();
        return view('admin.role.add', ['permissions' => $permissions]);
    }

    public function createRole(Request $request) {
        $request->validate([
            'name' => 'required',
            'permission' => 'required|array|min:1'
        ]);
        try {
            $role = Role::create(['name' => $request->name]);

            foreach($request->permission as $perm) {
                $role->givePermissionTo($perm);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->route('admin.roles')->with('success', 'Role created');
    }
}
