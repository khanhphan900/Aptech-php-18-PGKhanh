@extends('layout.app')
@section('content')
    <main class="container">
        <div id="carouselExampleInterval" class="carousel slide " data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="3000">
                    <img src="./img/1.jpg" class="d-block w-100 rounded" alt="1" style="width:100%;height:300px">
                </div>
                <div class="carousel-item" data-interval="3000">
                    <img src="./img/2.jpg" class="d-block w-100 rounded" alt="2" style="width:100%;height:300px">
                </div>
                <div class="carousel-item" data-interval="3000">
                    <img src="./img/3.jpg" class="d-block w-100 rounded" alt="3" style="width:100%;height:300px">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        @foreach($articles as $art)
            <div class="card my-3">
                <div class="card-header">
                    
                @foreach($art->categories as $cat)
                <span class=" badge badge-success">{{$cat->name}}</span> &nbsp;
                @endforeach
                </div>
                <div class="row">
                    <div class="col-6 card-body px-5">
                        <h5 class="card-title">{{$art->id}} - {{$art->title}}</h5>
                        <p class="card-text">{{$art->description}}</p>
                        <a href="articles/{{$art->slug}}" class="btn btn-outline-primary">Continue Reading ...</a>
                    </div>
                    <div class="col-6">
                        <img src="{{asset('./img/1.jpg')}}" class="card-img-right" alt="..." height="100%" width="100%">
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <div class="row">
                        <div class="col-6">{{$art->created_at}} </div>
                        <div class="col-6 text-right"> {{$art->view}}  viewed </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center">{{$articles->links()}}</div>
        
    </main>
@endsection