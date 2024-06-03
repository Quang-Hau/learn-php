<?php

    namespace Admin\Psr4Composer;

    class Teacher {
        public function __construct(
            public string $name,
            public string $subjects,
            public int $age,
        ){}

        public function getName() {
            echo " thay ten la ".$this->name . PHP_EOL;
        }

        public function subjects() {
            echo " thay day mon ".$this->subjects  . PHP_EOL;
        }

        public function getAge() {
            echo " thay ".$this->age ." tuoi". PHP_EOL;
        }

        public function __destruct() {
            echo " destruct ".PHP_EOL;
        }

    }

?>