<?php // hướng đối tượng có tính bảo mật, co giãn tốt

    // Manager : sức mạnh > 0
    class SupperMan{
        public $name;
        private $strong; // bảo mật dữ liệu private (ko nhập và ko gọi ra được)và function
        // tạo hàm đảm bảo sức mạnh >0
        function setSucManh($s){
            if($s > 0){
                $this->strong = $s;
            } else {
                $this->strong = 0;
            }
        }

        function getSucManh($mayDoSM){
            if($mayDoSM==1){
                return $this->strong;
            } else {
                return "mù tịt";
            }
            
        }
    }

    $ironMan = new SupperMan();
    $ironMan->name = "Người Sắt";
    // $ironMan->strong = 78; dùng private thì không dùng code này
    $ironMan->setSucManh(80);

    echo $ironMan ->name . "<hr>";
    // echo $ironMan ->strong ; private ko gọi ra được
    echo $ironMan ->getSucManh(0);

    // Bảo mật trong PHP dùng private (ko nhập và gọi ra được phải tạo set get) ràn buộc dữ liệu
    // public ko cần set get vì có thể gọi ra được -- ko ràn buộc dữ liệu
?>