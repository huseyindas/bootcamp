<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function showUsers(){
        $users = User::all();
        return view("tables.users", compact("users"));
    }
}
