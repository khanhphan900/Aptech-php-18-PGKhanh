@extends('layouts.master')

@section('content')
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-8 text-center">
                <h1>{{$user->name}}</h1>
            </div>
        </div>
    </main>
@endsection