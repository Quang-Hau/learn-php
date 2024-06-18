<?php

    namespace Admin\Psr4Composer\Employee;

    class Student extends PersonAbstract{

        public function __construct(
            $name,
            $age,
            private string $studentID,
            private array $courses = [],
        )
        {
            parent::__construct($name, $age);
        }

        public function getInfo()
        {
            echo 'Name: '.$this->name .PHP_EOL;
            
            echo 'Age: '.$this->age .PHP_EOL;

            echo 'Student ID: '.$this->studentID .PHP_EOL;

            echo '<ul>';
            foreach ($this->courses as $course) {
                echo '<li>';
                $course->getDetails();
                echo '</li>'; 
            } 
            echo '</ul>';
        }

        public function enrollCourse ($course){
            $this->courses[] = $course;
        }   
    }
?>