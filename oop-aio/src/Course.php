<?php 

    namespace Admin\Psr4Composer;

    use Admin\Psr4Composer\Employee\Teacher;

    class Course {
        
        public function __construct(

            private string $courseName,

            private string $courseCode,
                            //$teacher là đối tượng của Teacher
            private Teacher $teacher,

        )
        {}
        
        //get Tên khóa học
        public function getCourseName(){
            return $this->courseName;
        }

        //get mã khóa học
        public function getCourseCode(){
            return $this->courseCode;
        }

        //get Giáo viên phụ trách
        public function getTeacher(){
            return $this->teacher;
        }

        //get Thông tin khóa học
        public function getDetails(){
            echo 'Name: '. $this->courseName. PHP_EOL;

            echo 'Code: '. $this->courseCode. PHP_EOL;

            echo 'Teacher: '. $this->teacher->getName(). PHP_EOL;
        }
    }
?>