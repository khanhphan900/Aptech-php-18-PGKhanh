@extends('layout.master') 
@section('content')

<main class="container border border-danger rounded bg-light">
  <div class="row justify-content-center mt-3">
    <div class="col-3 text-right">
      <h6>ID :</h6>
      <h6>Name :</h6>
      <h6>Email :</h6>
      <h6>Password :</h6>
    </div>
    <div class="col-8">
      {{$user->id}} <br>
      {{$user->name}} <br>
      {{$user->email}} <br>
      {{$user->password}}
    </div>
  <div class="row mt-4 mb-5 justify-content-center">
    <div class="col-3">
      <form action="{{route('users.edit',$user->id)}}" method="get">
        <button class="btn btn-warning form-control">
            Edit
        </button>
      </form>
    </div>
    <div class="col-3">
      <form action="{{route('users.destroy',$user->id)}}" method="post">
        <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
        <button class="btn btn-danger form-control">
          Delete
        </button>
      </form>
    </div>
  </div>
</main>

@endsection
