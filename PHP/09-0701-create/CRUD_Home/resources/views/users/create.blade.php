<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     <div class="container">
        <div class="row justify-content-center vh-100 align-items-center rounded-pill border border-primary bg-info">
            <div class="col-6 border border-primary bg-light rounded">
                <h2 class="text-center">Registration</h2>
                <form action="{{asset('users/')}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <input type="text" class="form-control my-2" name="name" placeholder="Name"> 
                        <input type="email" class="form-control my-2" name="email" placeholder="Email address">
                        <input type="text" class="form-control my-2" name="address" placeholder="Address">
                        <input type="password" class="form-control my-2" name="password" 
                        placeholder="Password">
                        <button class="btn btn-lg btn-primary my-2" type="submit" style="width:100%;">Create User</button>
                </form>
                
            </div>
        </div>
     </div>
  </body>
</html>