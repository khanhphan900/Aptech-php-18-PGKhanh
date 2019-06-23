<?php 
    class SupperMan{
        // Nếu khai bái $name thì mặc định là public
        public $name;
        public $strong;

        function sayHi(){
            // return "I am sieu nhan";
            return "I am $this->name";
            // return "I am $name"; lỗi 
        }

        function WhoAmI(){
            $s = $this->name;
            $s .= " >> ";
            $s .= $this->strong;
            return $s;
        }
        
    }

    $ironMan = new SupperMan();
    $ironMan->name = "Người Sắt";
    $ironMan->strong = 78;
    echo $ironMan ->name . "<br>";
    echo $ironMan ->strong . "<hr>";
    echo $ironMan -> sayHi() . "<hr>";
    echo $ironMan -> WhoAmI() . "<br>";
?>