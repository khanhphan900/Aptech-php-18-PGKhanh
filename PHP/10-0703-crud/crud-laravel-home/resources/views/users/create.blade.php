@extends('layout.master')

@section('content')
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-6 bg-light rounded">
                <h3 class="text-center my-4">LOGIN IN</h3>
                {{-- STORE -- POST --}}
                <form action="{{route('users.store')}}" method="POST">
                    <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-danger px-5">confirm
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection