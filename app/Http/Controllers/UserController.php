<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Dotenv\Regex\Success;

class UserController extends Controller
{
    public function createUser()
    {
        $roles = Role::whereIn('id', [Role::TRAINER_ROLE, Role::STAFF_ROLE])->get();
        // dd($roles->toArray());
        return view('admins.create-user', compact('roles'));
    }
    public function storeUser(Request $request)
    {
        $data = $request->only('email', 'password', 'role_id');
        //$data['role_id']=(int)$request->input('role_id');
        $data['name'] = '12345';
        $data['password'] = bcrypt('password');
        //dd($data);
        User::create($data);
        return 'success';
    }
    public function listUser()
    {
        $users = User::select('id', 'name', 'email')->get();
        //dd($users->toArray());
        return view('admins.list-user', compact('users'));
    }

    public function editUser($id)
    {
        $user = User::select('id', 'email', 'name')->find($id);
        //dd($user->toArray());
        $roles = Role::whereIn('id', [Role::STAFF_ROLE, Role::TRAINER_ROLE])->get();
        return view('admins.edit-user', compact(['user', 'roles']));
    }
    public function updateUser(Request $request, $id)
    {
        //($request->only('email', 'name', 'role_id'));
        $user = User::where('id', $id)
            ->update($request->only('email', 'name', 'role_id'));
        return redirect()->back()->with(["success" => "create success"]);
    }
    public function deleteUser($id)
    {
        $user = User::where('id', $id)->delete();
        return redirect()->back()->with(["success" => "delete success"]);
    }
}
