<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
$total = 0;
$totaltax = 0;
$products = [ ["iphone",999],["note9",899],["huawei",30] ];
$table = "<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
            <th>tax</th>
        </tr>
    </thead>
    <tbody>";
for($i = 0; $i < count($products); $i++){
    $table .=  "<tr><td>" . ($i+1). "</td>";
    for($j = 0; $j < count($products[$i]); $j++){
        $table .= "<td>". $products[$i][$j];
        if ($j === 1){
            $total = $total +  $products[$i][$j]; 
            $table .= "$</td>";
            if($products[$i][$j] > 600) {
                $tax = $products[$i][$j] + $products[$i][$j]/10;
                $table .= "<td>" .$tax.  "</td>";
            }
            else {
                $table .= "<td>" .$products[$i][$j].  "</td>";
            }
            $totaltax += $tax;
        }
        else {
            $table .= "</td>";
        }
    }
    $table .=  "</tr>";
}
$table .= "<tr><th>Total</th><th></th><th>".$total."</th><th>".$totaltax."</th></tr></tbody></table>";
echo $table;
?>

</body>
</html>

