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


foreach($students as $key => $value){

    if($students[$key] == false){

        echo "<pre></pre>";

        var_dump($students[$key]);

        unset($students[$key]);
    }

}

echo "<h3> Before sort </h3>";

echo "<pre></pre>";

var_dump($students);

usort($students, [Student::class, 'sort_instances']);

echo "<h3> After sort </h3>";

echo "<pre></pre>";

var_dump($students);
