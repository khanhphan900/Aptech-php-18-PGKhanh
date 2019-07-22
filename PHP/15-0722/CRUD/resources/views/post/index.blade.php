@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card-group rounded">
                @foreach ($posts as $post)
                    <div class="card">
                  <img src="{!!$post->image_path!!}" class="card-img-top" alt="..." width="100%" height="150px">
                  <div class="card-body">
                    <h5 class="card-title">{{$post->id}} - {{$post->title}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                    <p class="card-text">{{$post->content}}</p>
                    <p class="card-text"><small class="text-muted">{{$post->created_at}}</small></p>
                  </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    
    <div class="d-flex justify-content-center">{{$posts->links()}}</div>
@endsection