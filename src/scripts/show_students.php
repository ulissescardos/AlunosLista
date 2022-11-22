<?php

include "./student.php";

$path = dirname(__FILE__) . "/students.txt";

$students = array();

try {
    
    $file = fopen($path, "r");

    while(!feof($file)){

        $line = fgets($file);

        echo "<pre></pre>";

        $s = preg_replace('/\s+/', ' ', trim($line));

        var_dump($s);

        $students[] = unserialize($s);
    }

} catch (Exception $e) {
    //throw $th;
}


echo "<pre></pre>";

var_dump($students);
