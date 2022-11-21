<?php

try {
    

    $file = fopen($path, "r");

    while(!feof($file)){

        $line = fgets($file);

        var_dump(explode("\n", $line));
    }




} catch (Exception $e) {
    //throw $th;
}
