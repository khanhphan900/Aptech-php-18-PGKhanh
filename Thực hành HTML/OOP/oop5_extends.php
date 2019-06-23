<?php 
    class SieuNhan{
        public $ten;
        public $sucManh;
    }

    class SieuNhanMy extends SieuNhan {
        // public $ten;
        // public $sucManh;
        public $passport;
    }

    class NhanVienKhoaPham extends SieuNhanMy {
        public $skill;
    }

    class SieuNhanNhat extends SieuNhan {
        // public $ten;
        // public $sucManh;
        public $chieuCao;
    }
    
    $Nam = new SieuNhan(); // ten, sucManh
    $Dao = new SieuNhanNhat(); // ten, sucManh, chieuCao
    $Viet = new NhanVienKhoaPham(); // ten, sucManh, passort, skill
?>