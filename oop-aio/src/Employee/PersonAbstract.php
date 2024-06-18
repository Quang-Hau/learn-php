<?php
                                //subNamespace
    namespace Admin\Psr4Composer\Employee;

    // lớp cha trừu tượng

    abstract class PersonAbstract {

        // phương thức khởi tạo , có tính đóng gói
        public function __construct(
             protected string $name ,

             protected int $age 
        )
        {}

        //get , set gán giá và lấy trị  phương thức khởi tạo
        public function setName($value){
            $this->name = $value;
        }
        public function getName(){
            return $this->name;
        }

        public function setAge($value){
            $this->age = $value;
        }
        public function getAge(){
            return $this->age;
        }

        //phương thức trừu tượng để lấy thông tin

        abstract public function getInfo();
    }

?>