@extends('layouts.master')

@section('content')
<form action="{{route('Articles.update', $user->id)}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
  <div class="container w-50 my-3">
    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <label for="">Title</label>
          <input type="text" class="form-control" name="title" id="" placeholder="Title" value="{{$user->title}}">
        </div>
        <div class="form-group">
          <label for="">Slug</label>
          <input type="text" class="form-control" name="slug" id="" placeholder="Slug" value="{{str_replace('-',' ',$user->slug)}}">
        </div>
        <div class="form-group">
          <label for="">Description</label>
          <input type="text" class="form-control" name="description" id="" placeholder="Description" value="{{$user->description}}">
        </div>
        <div class="form-group">
          <label for="">Image Path</label>
          <input type="text" class="form-control" name="image_path" id="" placeholder="Image Path" value="{{$user->image_path}}">
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