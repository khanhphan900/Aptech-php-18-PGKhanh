@extends('layouts.master')

@section('content')
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-8 text-center">
                <h1>{{$user->title}}</h1>
                <h4>{{$user->description}}</h4>
                <img src="{{$user->image_path}}" alt="This is a picture">
                <p>{{$user->content}}</p>
                <p>{{$user->created_at}}</p>
                <p>{{$user->updated_at}}</p>
                
            </div>
        </div>
    </main>
@endsection