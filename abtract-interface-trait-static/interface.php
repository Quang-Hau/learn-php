<?php

    interface caucaa{

        public function chuanbimoi();
        public function chuanbicancau();
        public function cauca();
    }

    
    class user1 implements caucaa{
        //Các lớp triển khai interface phải định nghĩa lại tất cả các phương thức trong interface.
        public function chuanbimoi(){
            echo 'cach cau ca cua user1' . PHP_EOL;    
        }

        public function chuanbicancau(){
            echo 'cach cau ca cua user1' . PHP_EOL;    
        }

        public function cauca(){
            echo 'cach cau ca cua user1' . PHP_EOL;    
        }

    }


    class user2 implements caucaa{
        //Các lớp triển khai interface phải định nghĩa lại tất cả các phương thức trong interface.
        public function chuanbimoi(){
            echo __FUNCTION__ . PHP_EOL;    
        }

        public function chuanbicancau(){
            echo __FUNCTION__ . PHP_EOL;    
        }

        public function cauca(){
            echo __FUNCTION__ . PHP_EOL;    
        }

    }

?>