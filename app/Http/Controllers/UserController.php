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
        $roles = Role::all();
        return view('admins.create-user',compact('roles'));
    }
    public function storeUser(Request $request)
    {
        $data = $request->only('email', 'password', 'role_id');
        //$data['role_id']=(int)$request->input('role_id');
        $data['name']= '12345';
        $data['password']=bcrypt('password');
        //dd($data);
        User::create($data);
        return 'sucses';
    }
}
