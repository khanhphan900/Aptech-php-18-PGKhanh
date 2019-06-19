<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container   form-signin">
        <div class="row justify-content-center h-100 m-auto">
            <div class="col-4 bg-warning">
                <h3 class="text-center my-5">Please Sign In</h3>
                <form action="connect_HTML_MySQL.php" method="POST">
                    <input class="form-control my-4" type="text" name="name" placeholder="Your name...">
                    <input class="form-control my-4" type="text" name="email" placeholder="Your Email...">
                    <input class="form-control my-4" type="password" name="password" placeholder="Your Password">
                    <button type="submit" class="btn btn-primary form-control my-5">Sign In</button>
                </form>
            </div>
        </div>
    </div>


   
</body>

</html>