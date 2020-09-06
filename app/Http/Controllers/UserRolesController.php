<?php

namespace App\Http\Controllers;
use App\User;
use App\StoreOnlinePermission\Models\Role;

use Illuminate\Http\Request;

class UserRolesController extends Controller
{
    public function index(){
        return view('role_user',
        ['alluser'=>User::get()],
        ['role'=>Role::get()]);

    }
}
