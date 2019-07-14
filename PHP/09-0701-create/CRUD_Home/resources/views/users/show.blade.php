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
        <div class="row justify-content-center">
            <div class="col-6">
              <div class="card mt-5">
                <div class="card-header text-center">
                    <h6>ID : {{$user->id}} </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 text-right">
                        <h6>Name :</h6>
                        <h6>Email :</h6>
                        <h6>Address :</h6> 
                        </div>
                        <div class="col-8">
                            {{$user->name}} <br>
                            {{$user->email}} <br>
                            {{$user->address}}
                        </div>
                    </div>
                </div>
              </div>  
            </div>
        </div>
      </div>
  </body>
</html>