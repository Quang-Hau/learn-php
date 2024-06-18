<?php
    
    namespace Admin\Psr4Composer\Employee;

    class Teacher extends PersonAbstract { 

        public function __construct(
            $name,
            $age,
            private string $teacherID,

            private int $salary,

            private array $courses = []
        ) 
        {// parent::__construct(); trong PHP được sử dụng để gọi hàm khởi tạo (constructor) của lớp cha từ bên trong lớp con.
         //parent::__construct($name, $age); được sử dụng để gọi hàm khởi tạo của lớp ParentClass. Điều này đảm bảo rằng các thuộc tính $name và $age được khởi tạo đúng cách theo logic của lớp cha.
            parent::__construct($name,$age);
        }

        
        //Thêm khóa học giảng dạy
        //$course là 1 đối tượng
        public function addCourse($course)
        {
            $this->courses[] = $course;
        }

        //vì PersonAbstract là hàm trừu tượng nên Teacher phải định nghĩa lại hàm getInfo();
        //getInfo() ghi đè lại phương thức để lấy thông tin giáo viên
        public function getInfo()
        {   
            echo 'Name: ' . $this->name.PHP_EOL;
            echo 'Age: ' . $this->age.PHP_EOL;
            echo 'Teacher ID: ' . $this->teacherID.PHP_EOL;
            echo 'salary: ' . $this->salary.PHP_EOL;

            echo '<ul>';
            foreach ($this->courses as $course) {
                echo '<li>';
                $course->getDetails();
                echo '</li>'; 
            }
            
        }
    }


?>