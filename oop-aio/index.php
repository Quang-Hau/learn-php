<?php


    require_once 'vendor/autoload.php' ;

    use Admin\Psr4Composer\Course;
    use Admin\Psr4Composer\Employee\Teacher;
    use Admin\Psr4Composer\Employee\Student;

    echo'<b>======================Giáo viên phụ trách=================</b>'. PHP_EOL;
    $teacherPT = new Teacher('Admin Teacher', 55 ,'GVPT8888', 5000000);
    $teacherPT->getInfo();

    echo'<b>======================Khóa học OOP=================</b>'. PHP_EOL;
    $course1 = new Course('Khóa học OOP','OOP_001', $teacherPT);
    $course1->getDetails();

    echo'<b>======================Khóa học MVC=================</b>'. PHP_EOL;
    $course2 = new Course('Khóa học MVC','MVC_001', $teacherPT);
    $course2->getDetails();

    echo'<b>======================SV A=================</b>'. PHP_EOL;
    $student1 = new Student('SV A', 22 ,'PH_001', [$course1]);
    $student1->enrollCourse($course2);
    $student1->getInfo();

    echo'<b>======================SV A=================</b>'. PHP_EOL;
    $student2 = new Student('SV A', 22 ,'PH_002', [$course2]);
    $student2->enrollCourse($course1);
    $student2->getInfo();

    echo'<b>======================Giáo viên A=================</b>'. PHP_EOL;
    $teacher1 = new Teacher('Nguyen Van A', 32 ,'NV-A', 5000000,[$course1]);
    $teacher1->addCourse($course2);
    $teacher1->getInfo();

    echo'<b>======================Giáo viên B=================</b>'. PHP_EOL;
    $teacher2 = new Teacher('Nguyen Van B', 30 ,'NV-B', 5500000,[$course2]);
    $teacher2->addCourse($course1);
    $teacher2->getInfo();


?>