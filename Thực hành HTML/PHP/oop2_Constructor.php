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
        // Constructor (hàm đặc biệt tự động chạy khi khởi tạo đối tượng) tên hàm trùng tên lớp
        function SupperMan($n, $s){
            $this->name = $n;
            $this->strong = $s;
        }
    }
    // $ironMan = new SupperMan();
    // $ironMan->name = "Người Sắt";
    // $ironMan->strong = 78;
    $ironMan = new SupperMan("Người Sắt", 80);

    echo $ironMan ->name . "<br>";
    echo $ironMan ->strong . "<hr>";
    echo $ironMan -> sayHi() . "<hr>";
    echo $ironMan -> WhoAmI() . "<br>";
?>