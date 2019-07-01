<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index(){
        $users = DB::table('users_1')->get();
        return view('users.index', [
            'users' => $users
        ]);
    }

    function show($id){
        $user = DB::table('users_1')->where('id', $id)->get();
        return view('users.show', [
            'user' => $user[0]
        ]);
    }
}
