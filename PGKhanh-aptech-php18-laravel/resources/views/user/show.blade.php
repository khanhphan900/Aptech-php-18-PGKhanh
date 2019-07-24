@extends('layout.app')
@section('content')
    <main class="container border rounded-pill bg-light">
        <div class="row justify-content-center mt-3">
            <div class="col-8">
                <div class="row h5">
                    <div class="col-3 text-right">
                        <p>ID :</p>
                        <p>Name :</p>
                        <p>Email :</p>  
                        <p>Password :</p>
                        <p>Create data :</p>
                        <p>Update data :</p>
                    </div>
                    <div class="col-9">
                        <p>{{$user->id}}</p> 
                        <p>{{$user->name}} </p>
                        <p>{{$user->email}}</p> 
                        <p>{{$user->password}}</p>
                        <p>{{$user->created_at}} </p>
                        <p>{{$user->updated_at}} </p>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-center mb-4">                                        
                    {{-- Edit -- GET --}}
                    <form action="{{route('users.edit',$user->id)}}" method="GET">
                        <button class="btn btn-warning mx-4">Edit</button>
                    </form>
                    {{-- Delete -- POST --hidden --}}
                    <form action="{{route('users.destroy', $user->id)}}" method="POST">
                        <input type="hidden" name="_method" value="delete"> {{csrf_field()}}
                        <button class="btn btn-danger">Delete</button>
                    </form>      
                </div>
            </div>
        </div>
    </main>
@endsection