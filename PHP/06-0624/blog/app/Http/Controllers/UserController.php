<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
       $users = DB::table('users')->get();
    //    dd($users);
        return view(
            'welcome',
            ['nguoi_dung' => $users] // gán dữ liệu vào biến người dùng
        );
    }
}
