@extends('layout.master')

@section('content')
<main class="container-fluid">
    <table class="table table-bordered table-dark table-hover table-striped text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td class="d-flex align-items-center justify-content-center">
                        {{-- Show -- GET --}}
                        <form action="{{route('users.show',$user->id)}}" method="GET">
                            <button class="btn btn-info">Show</button>
                        </form>
                        {{-- Edit -- GET --}}
                        <form action="{{route('users.edit',$user->id)}}" method="GET"><button class="btn btn-warning mx-4">Edit</button></form>
                        {{-- Delete -- POST --hidden --}}
                        <form action="{{route('users.destroy', $user->id)}}" method="POST">
                            <input type="hidden" name="_method" value="delete"> {{csrf_field()}}
                            <button class="btn btn-danger">Delete</button>
                        </form>      
                    </td>
                </tr>
            @endforeach   
            
        </tbody>    
    </table>
    <div class="d-flex justify-content-center">
        {{$users->links()}}
    </div>
</main>

@endsection
