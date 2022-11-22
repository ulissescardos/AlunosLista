<?php

class Student{

    public static function sort_instances($st1, $st2)
    {
        $atribute_name = "ra";

        if($st1->$atribute_name == $st2->$atribute_name){ return 0 ; }

        return ($st1->$atribute_name < $st2->$atribute_name) ? -1 : 1;
    }

    public $name;
    public $age;
    public $ra;
    public $sex;
    public $phone;
    public $address;
    public $email;


    function __construct(){}

}
