@extends('layouts.master')

@section('content')
    <main class="container bg-light">
        <h1 class="text-center">>>> NEWS <<<</h1> 
        <hr>
        <form action="{{route('Articles.store')}}" method="post">
            <input type="hidden" name="_method" value="post"> {{csrf_field()}}
        
            <div class="form-group">
                <label for="title"><h6>Title</h6></label>
                <input type="text" class="form-control" name="title" id="title" placeholder="title...">
            </div>
            <div class="form-group">
                <label for="slug"><h6>Slug</h6></label>
                <input type="text" class="form-control" name="slug" id="slug" placeholder="slug..." >
            </div>
            <div class="form-group">
                <label for="description"><h6>Description</h6></label>
                <input type="text" class="form-control" name="description" id="description" placeholder="description...">
            </div>
            <div class="form-group">
                <label for="image_path"><h6>Image</h6></label>
                <input type="text" class="form-control" name="image_path" id="image_path" placeholder="image_path...">
            </div>
            {{-- <div class="form-group">
                <label for="name"><h6>Author</h6></label>
                <input type="text" class="form-control" name="name" id="name" placeholder="name..." value="{{$C->content}}">
            </div> --}}
            <div class="form-group">
                <label for="category_id"><h6>Category</h6></label>
                <input type="text" class="form-control" name="category_id" id="category_id" placeholder="category_id...">
            </div>
            <div class="form-group">
                <label for="content"><h6>Content</h6></label>
                
                @component('layouts.ckeditor') index page @endcomponent 
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"> Create </button>
            </div>
        </form>
        
    </main>
@endsection