@extends('layout.app')
@section('content')
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h3 class="text-center mt-3">Edit</h3>
                {{-- UPDATE -- POST --}}
                <form action="{{route('users.update', $user->id)}}" method="post">
                    <input type="hidden" name="_method" value="put"> {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name..." aria-describedby="helpId" value="{{$user->name}}">
                      <small id="helpId" class="text-muted">Edit Name</small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Email..." value="{{$user->email}}">
                        <small id="emailHelpId" class="form-text text-muted">Edit email</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="{{$user->password}}">
                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection