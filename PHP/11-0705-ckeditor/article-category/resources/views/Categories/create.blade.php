@extends('layouts.master')

@section('content')
    <main class="container bg-light">
        <h1 class="text-center">>>> NEWS <<<</h1> 
        <hr>
        <form action="{{route('Articles.store')}}" method="post">
            <input type="hidden" name="_method" value="post"> {{csrf_field()}}
        
            <div class="form-group">
            <label for="name"><h6>Name</h6></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="name...">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"> Create </button>
            </div>
        </form>
        
    </main>
@endsection