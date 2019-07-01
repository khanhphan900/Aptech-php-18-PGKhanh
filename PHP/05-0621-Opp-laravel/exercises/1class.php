<?php 
    echo "<a href=\"./\">Back<a>";
    // ten bai
    echo "<h1>------- 1. CLASS --------</h1>";

    class hero {
        protected $name; 
        function helloWord(){
            echo ">>>> Welcome to exercises PHP :D <<<< "
        }
        // xây dựng
        function __construct($name = "undefined"){
            echo "Begin of class <hr>";
            $this->name = $name;
        }
        // nhập vào
        function setName($name){
            $this->name = $name;
            return $this;
        }
        // lấy ra
        function getName($name){
            return $this->name;
        }
        // phá hủy
        function __destruct(){
            echo "<br>End of class";
        }
    }

    hero::helloWord();
    $name 
?>