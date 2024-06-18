<?php
    namespace Admin\Psr4Composer;
    
    class Student {
        public function __construct(
            public string $name ,
            public int $age = 0 ,
            public int $marks = 0
        ){}

        public function pay() {
            echo " nop tien hoc phi". PHP_EOL;
        }

        public function hoatdongngoaikhoa($tenhoatdong) {
            echo " tham gia hoat dong". $tenhoatdong . PHP_EOL;
        }

        public function showName() {
            echo " ten " . $this->name . PHP_EOL;
        }
        
        public function __destruct() {
            echo " destruct ".PHP_EOL;
        }
    }





?>


<!-- Package name (<vendor>/<name>): admin/psr4-composer
Description: Sample project for PSR-4 autoloading
Author: Quang-Hau <lenguyenquanghau@gmail.com>
Minimum Stability: stable
Package Type: library
License: MIT
Define your dependencies: no
Define your dev dependencies: no
Add PSR-4 autoload mapping: src/ -->