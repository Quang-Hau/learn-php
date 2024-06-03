<?php 

    trait Helper {
        public function Helper1() {
            print_r($this);
            echo __FUNCTION__ ;
        }
        public function Helper2() {
            print_r($this);
            echo __FUNCTION__ ;
        }
    }

    class A {

        public function Helper3() {
            print_r($this);
            echo __FUNCTION__ ;
        }

    }

    class B extends A {
        //trait hổ trợ đa kế thừa
        use Helper ;
    }

    $b = new B();

    $b->Helper1();

    $b->Helper2();

    $b->Helper3();
?>