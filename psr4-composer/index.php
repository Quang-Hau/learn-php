<?php


    require_once './vendor/autoload.php';
    //Students
    use Admin\Psr4Composer\controllers\StudentController;
    use Admin\Psr4Composer\Student;
    
    //Teacher
    use Admin\Psr4Composer\Teacher;
    use Admin\Psr4Composer\controllers\TeacherController;
    

    //Students
    $student1 = new Student('Quang Hau');

    $student1->pay();

    $student1->hoatdongngoaikhoa('da bong');

    $student1->showName();


    echo "<pre>";

    print_r($student1);

    $student2 = new StudentController();

    echo "<pre>";

    print_r($student2);

    unset($student1);
    //Teacher

    $Teacher1 = new Teacher('Quang Bao', 'toan', 22);

    $Teacher1->getName();

    $Teacher1->subjects() ;

    $Teacher1->getAge();

    print_r($Teacher1);

    $Teacher2 = new TeacherController();

    print_r($Teacher2);

?>