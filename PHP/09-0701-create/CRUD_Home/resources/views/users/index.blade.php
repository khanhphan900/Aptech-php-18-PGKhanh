<!doctype html>
<html lang="en">
  <head>
    <title>Show Users</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <?php 
        $array = ['ID', 'Name', 'Email', 'Password'];
      ?>
      <table class="table table-dark table-hover table-striped table-bordered text-center">
        <thead>
            <tr>
                <?php 
                    for($i=0; $i<count($array); $i++){
                        echo "<th>". $array[$i] . "</th>";
                    }
                ?>   
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <div class="d-flex justify-content-around">
                            <form action="{{asset('users/'.$user->id)}}" method="get">
                                <button type="submit" class="btn btn-success">Show</button>
                            </form>
                            <form action="{{asset('users/'.$user->id.'/edit')}}" method="GET">  
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                            <form action="{{asset('users/'.$user->id)}}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                                <button type="submit" class="btn btn-warning">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      <form action="{{asset('/users/create')}}" method="GET">
          <button type="submit" class="btn btn-success">Add User</button>
        </form>
  </body>
</html>