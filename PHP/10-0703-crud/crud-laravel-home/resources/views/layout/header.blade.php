<header class="container">
    <div class="row justify-content-around m-3">
        <div class="col-2">
            <form action="{{route('users.index')}}" method="GET">
                <button class="btn btn-primary form-control">HOME</button>
            </form>
            
        </div>
        
        <div class="col-2">
            <form action="{{route('users.create')}}" method="GET">
                <button class="btn btn-success form-control">Create</button>
            </form>
        </div>
    </div>
</header>