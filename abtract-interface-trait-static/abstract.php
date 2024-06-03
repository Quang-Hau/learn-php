<?php
    abstract class cauca {
        public function chuanbimoi(){
            echo __FUNCTION__ . PHP_EOL;
        }
        public function chuanbicancau(){
            echo __FUNCTION__ . PHP_EOL;
        }
        abstract public function cauca();
    }

    class user1 extends cauca {
        //class con kế thừa từ abstract phải định nghĩa hàm đấy ra
        public function cauca(){
            echo "cách câu cá của user1" . PHP_EOL;
        }   
    }
    class user2 extends cauca {
        //class con kế thừa từ abstract phải định nghĩa hàm đấy ra
        public function cauca(){
            echo "cách câu cá của user1" . PHP_EOL;
        }   
    }

?>