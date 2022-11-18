<?php

class Student{

    public $name;
    public $age;
    public $ra;
    public $sex;
    public $phone;
    public $address;
    public $email;
}

$student = new Student();


foreach($_POST as $key => $value){

    $val = htmlspecialchars($value);

    $student->$key = $val;
}
