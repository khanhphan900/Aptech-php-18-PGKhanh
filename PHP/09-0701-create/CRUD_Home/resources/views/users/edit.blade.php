<!doctype html>
<html lang="en">
  <head>
    <title>Edit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center ">
                        <h4>Edit</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{asset('users/'.$user->id)}}" method="POST">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                                <input type="text" class="form-control my-2" name="name" placeholder="Name..." value="{{$user->name}}">
                                <input type="text" class="form-control my-2" name="email" placeholder="Email..." value="{{$user->email}}">
                                <input type="text" class="form-control my-2" name="address" placeholder="Address..." value="{{$user->address}}">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-3" style="width:70%"> Submit </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>