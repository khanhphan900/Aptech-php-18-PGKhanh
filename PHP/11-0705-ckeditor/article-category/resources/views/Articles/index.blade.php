@extends('layouts.master')

@section('content')
    <main class="container-fluid">
        <table class="table table-bordered table-dark table-hover table-striped text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>        
            @foreach ($Ausers as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->title}}</td>
                    <td>{{$user->slug}}</td>
                    <td>{{$user->description}}</td>
                    <td>{{$user->image_path}}</td>
                    <td>{{$user->content}}</td>
                    <td class="d-flex">
                        <form action="{{route('Articles.show', $user->slug)}}" method="get">
                            <button class="btn btn-info">Show</button>
                        </form>
                        <form action="{{route('Articles.edit', $user->slug)}}" method="get">
                            <button class="btn btn-warning mx-4"> Edit</button>
                        </form>
                        <form action="{{route('Articles.destroy', $user->id)}}" method="post">
                            <input type="hidden" name="_method" value="delete"> {{csrf_field()}}
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
        {{$Ausers->links()}}
        </div>
    </main>
@endsection

