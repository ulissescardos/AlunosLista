<?php

$current_dir = getcwd();

echo "<p> $current_dir </p>";

foreach($_POST as $key => $value){

    $val = htmlspecialchars($value);

    echo "<p> $key => $val </p>";

}

echo `whoami`;
echo "<div><div>";

$path = dirname(__FILE__) . "/" . "lista.txt";

if(!file_exists($path)){
    touch($path);
}

$f = fopen($path, "a+") or die("Não foi possível abrir o arquivo! :(");

foreach($_POST as $key => $value){

    $val = htmlspecialchars($value);

    fwrite($f, "$key: $val ");
}

fclose($f);



