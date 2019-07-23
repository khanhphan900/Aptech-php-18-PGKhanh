<header class="container">
    <div class="row mt-3">
        <div class="col">
            <form action="users" method="get">
                <button class="btn btn-primary">Home</button>
            </form>
        </div>
        <div class="col text-center">
            <h1 class="text-secondary"> Users Table</h1>
        </div>
        <div class="col text-right">
            <form action="{{route('users.create')}}" method="get">
                <button class="btn btn-success">Create</button>
            </form>
        </div>
    </div>    
</header>