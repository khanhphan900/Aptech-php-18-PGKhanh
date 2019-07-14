@extends('layouts.master')

@section('content')
    <main class="container bg-light">
        <h1 class="text-center">>>> NEWS <<<</h1> 
        <hr>
        <form action="{{route('Articles.store')}}" method="post">
            <input type="hidden" name="_method" value="post"> {{csrf_field()}}
        
            <div class="form-group">
            <label for="title"><h6>Title</h6></label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title...">
            </div>
            <div class="form-group">
            <label for="slug"><h6>Slug</h6></label>
            <input type="text" class="form-control" name="slug" id="slug" placeholder="slug...">
            </div>
            <div class="form-group">
            <label for="description"><h6>Description</h6></label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Description...">
            </div>
            <div class="form-group">
            <label for="content"><h6>Content</h6></label>
            @component('layouts.ckeditor') @endcomponent
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"> Create </button>
            </div>
        </form>
        
    </main>
@endsection