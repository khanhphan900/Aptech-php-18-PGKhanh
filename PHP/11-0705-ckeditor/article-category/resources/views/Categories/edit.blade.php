@extends('layouts.master')

@section('content')
<form action="{{route('categories.update', $category->id)}}" method="post">
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}">  --}}
    <input type="hidden" name="_method" value="put"> {{csrf_field()}} 
   
    {{-- {{ method_field('PUT') }}
  <input type="hidden" name="_token" value="{{ csrf_token() }}">  --}}
    <div class="container w-50 my-3">
    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <label for="name">name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{$category->name}}">
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-3">Edit</button>
      </div>
    </div>
  </div>

</form>
@endsection