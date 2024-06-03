<?php 
    //static giúp chúng ta truy xuất các phương thức , 
    //thuộc tính mà không cân khởi tao đối tượng

    class A {
        public static $name = 'Quang Bao';

        public function geta() {
                   // self đại diện cho class A
            return self::$name;
        }

        public static function showName() {
            echo self::$name ;
        }
    }

    // echo A::$name;  truy xuất thuộc tính không cần khởi tạo dối tượng

    //$name = new A();

    //echo $name->geta();

    //truy xuất phương thức mà không cân khởi tao đối tượng
    A::showName();

?>