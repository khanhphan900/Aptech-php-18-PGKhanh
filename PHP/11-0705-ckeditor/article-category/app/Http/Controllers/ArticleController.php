<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ausers = Article::paginate(5);
        // DD($Ausers);
        return view('Articles.index', ['Ausers'=>$Ausers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Article();
        $user->title = $request->title;
        $user->slug = $request->slug;
        $user->description = $request->description;
        $user->content = $request->content;
        $user->save();
        return redirect()->route('Articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Article::find($id);
        // dd($user);
        return view('Articles.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Article::find($id);
        return view('Articles.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Article::find($id);
        $user->title = $request->title;
        $user->slug = $request->slug;
        $user->description = $request->description;
        $user->content = $request->content;
        $user->save();
        return redirect()->route('Articles.show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Article::find($id);
        $user -> delete();
        return redirect()->route('Articles.index');
    }
}
