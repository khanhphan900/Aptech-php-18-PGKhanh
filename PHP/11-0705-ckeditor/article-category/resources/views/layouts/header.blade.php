<header class="container">
    <div class="row justify-content-around mt-3">
        <div class="col-4 text-center">
            <form action="{{route('Articles.index')}}" method="get">
            <button class="btn btn-secondary">HOME</button>
            </form>
        </div>
        <div class="col-4 text-center">
            <form action="{{route('Articles.create')}}" method="get">
                <button class="btn btn-primary">CREATA NEW</button>
            </form>
        </div>
    </div>
</header>