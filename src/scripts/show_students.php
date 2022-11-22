<?php

$path = dirname(__FILE__) . "/students.txt";

$students = array();

try {
    
    $file = fopen($path, "r");

    while(!feof($file)){

        $line = fgets($file);

        echo "<pre></pre>";

        $s = explode("\n", $line);

        var_dump($s);

        $students[] = unserialize($s[0]);
    }

} catch (Exception $e) {
    //throw $th;
}


echo "<pre></pre>";

var_dump($students);

for($i = 0; $i < count($students); $i++){

    echo "<p>${gettype($students[$i])}</p>";

}

