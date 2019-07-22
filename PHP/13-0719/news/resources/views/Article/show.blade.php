@extends('layout.app')

@section('content')
    <main class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{$article->id}} - {{$article->title}}</h2>
                <p> @foreach($article->categories as $cat)
                   <span class=" badge badge-success">{{$cat->name}}</span> &nbsp;
                   @endforeach</p>
                <p class="text-secondary">Create : {{$article->created_at}} <br>
                   Update : {{$article->updated_at}}</p>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p class="h4 text-secondary">{{$article->description}}</p>
                    <hr>
                    <p>{{$article->content}}</p>
                    <footer>
                        <div class="row">
                            <div class="col blockquote-footer">
                                Someone famous in <cite title="Source Title">Source Title</cite></div>
                            <div class="col text-right text-secondary small">{{$article->view}} viewed</div>
                        </div>
                    </footer>
                </blockquote>
            </div>
        </div>
    </main>
@endsection