<?php
echo ("<h1>Hello world<h1>");
$ten = "Phan Gia Khanh";
echo ($ten."  ahihi". "<br>");

echo (5 + "5" . "<br>");
echo ("5" + 5);
print "<br>" . $ten ."<br>";

define ("GREETING", "Welcome to W3Schools.com",true);// name of the constant, value of constant,ko phan biet chu hoa chu thuong
echo GREETINg."<br>"; 
define("cars", ["Alfa Romeo","BMW","Toyota"],true);
echo cars[2]."<br>";

define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETING;
}
 
myTest();

// if else
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}