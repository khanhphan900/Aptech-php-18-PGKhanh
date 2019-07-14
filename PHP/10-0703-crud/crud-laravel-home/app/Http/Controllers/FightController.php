<?php

namespace App\Http\Controllers;

use App\Fight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = Fight::all(); hiển thị tất cả trong bảng Fight
        // DD($users);
        $users = Fight::paginate(5);
        return view('users.index', ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Fight();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fight  $fight
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Fight::find($id);

        return view('users.show', ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fight  $fight
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Fight::find($id);

        return view('users.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fight  $fight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Fight::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('users.show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fight  $fight
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Fight::find($id);
        $user -> delete();

        return redirect()->route('users.index');
    }
}
