@extends('layouts.master')

@section('content')
<form action="{{route('Articles.update', $user->slug)}}" method="post">
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}">  --}}
    <input type="hidden" name="_method" value="put"> {{csrf_field()}} 
   
    {{-- {{ method_field('PUT') }}
  <input type="hidden" name="_token" value="{{ csrf_token() }}">  --}}
    <div class="container w-50 my-3">
    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{$user->title}}">
        </div>
        <div class="form-group">
          <label for="slug">Slug</label>
          <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug" value="{{str_replace('-',' ',$user->slug)}}">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="{{$user->description}}">
        </div>
        <div class="form-group">
          <label for="image_path">Image Path</label>
          <input type="text" class="form-control" name="image_path" id="image_path" placeholder="Image Path" value="{{$user->image_path}}">
        </div>
        <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
        <script src="{{asset('ckfinder/ckfinder.js')}}"></script>

        <textarea name="content" id="editor">{{$user->content}}</textarea>

        <script>
            CKEDITOR.replace('editor', {
            filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
            filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"});
        </script>
        <button type="submit" class="btn btn-primary btn-block mt-3">Edit</button>
      </div>
    </div>
  </div>

</form>
@endsection