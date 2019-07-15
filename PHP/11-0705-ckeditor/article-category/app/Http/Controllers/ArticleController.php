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
    public function show($slug)
    {
        $user = Article::where('slug', $slug)->get();
        // dd($user);
        return view('Articles.show', ['user' => $user[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $user = Article::where('slug', $slug)->get();
        // dd($user);
        return view('Articles.edit', ['user' => $user[0]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $title = $request->title;
        $slug = $request->slug;
        $description = $request->description;
        $content = $request->content;
        $image_path = $request->image_path;
        Article::where('slug',$slug)->update([
            'title'=>$title,
            'slug'=>$slug,
            'description'=>$description,
            'content'=>$content,
            'image_path'=>$image_path
        ]);
        return redirect()->route('Articles.show', $slug);
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
