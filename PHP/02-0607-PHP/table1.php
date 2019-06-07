<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table, th, td{
        border: 2px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    table{
        width: 50%;
    }

    </style>
</head>
<body>

    <?php
$products = [ ["iphone",999],["note9",899],["huawei",30] ];
echo ("
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td><td>".$products[0][0]."</td><td>".$products[0][1]."$</td>
        </tr>
        <tr>
            <td>2</td><td>".$products[1][0]."</td><td>".$products[1][1]."$</td>
        </tr>
        <tr>
            <td>3</td><td>".$products[2][0]."</td><td>".$products[2][1]."$</td>
        </tr>
    </tbody>
</table>");?>

</body>
</html>

