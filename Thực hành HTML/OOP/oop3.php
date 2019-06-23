<?php 
    class HinhVuong{
        // thuộc tính
        public $chieuDai;

        //hành động
        function HinhVuong($x){
            $this->chieuDai = $x;
        }

        function TinhChuVi(){
            return $this->chieuDai * 4;
        }

        function TinhDienTich(){
            return $this->chieuDai * $this->chieuDai;
        }
    }
    $canh = new HinhVuong(30);

    echo "Chu vi hình chữ nhật là : " . $canh->TinhChuVi() . "<hr>";
    echo "Diện tích hình chữ nhật là : " . $canh->TinhDienTich();
?>