<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index()
    {
        $users = DB::table('users')->get();
        return view('users.index', [
            'users' => $users
        ]);
    }
    function show($id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        return view('users.show', [
            'user' => $user[0]
        ]);
    }
}
