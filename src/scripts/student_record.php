<?php

include "./student.php";

$student = new Student();

foreach($_POST as $key => $value){

    $val = htmlspecialchars($value);

    $student->$key = $val;
}

$path = dirname(__FILE__) . "/students.txt";

try {
    
    $file = fopen($path, "a+");

    $serialized_student = serialize($student);

    fwrite($file, $serialized_student . "\n");

    fclose($file);

    echo "
    <!DOCTYPE html>
    <html lang='pt-BR'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Lista de Alunos</title>
        <!--
            Foi usada a biblioteca css Bulma, para usar alguns dos estilos
            site: https://bulma.io
        -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css'>
        <link rel='stylesheet' href='../style.css'>
    </head>
    <body>

        <nav class='navbar'>
            <ul>
                <li class='navbar-brand'>
                    <a href='../index.html'>
                        <h2> SI401B </h2>
                    </a>
                </li>

                <li>
                    <a href='scripts/show_students.php'>
                        Alunos Cadastrados
                    </a>
                </li>

                <li>
                    <a href='../index.html'>
                        Cadastrar novo aluno
                    </a>
                </li>

            </ul>
        </nav>

        <main>

            <h1> Aluno Cadastrado com sucesso! </h1>

        </main>
        
    </body>
    </html>
    ";

    var_dump($student);
    var_dump($serialized_student);

} catch (Exception $e) {

    echo "
    <!DOCTYPE html>
    <html lang='pt-BR'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Lista de Alunos</title>
        <!--
            Foi usada a biblioteca css Bulma, para usar alguns dos estilos
            site: https://bulma.io
        -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css'>
        <link rel='stylesheet' href='../style.css'>
    </head>
    <body>

        <nav class='navbar'>
            <ul>
                <li class='navbar-brand'>
                    <a href='../index.html'>
                        <h2> SI401B </h2>
                    </a>
                </li>

                <li>
                    <a href='scripts/show_students.php'>
                        Alunos Cadastrados
                    </a>
                </li>

                <li>
                    <a href='../index.html'>
                        Cadastrar novo aluno
                    </a>
                </li>

            </ul>
        </nav>

        <main>

            <h1> Não possível cadastrar o aluno! Tente novamente! </h1>

        </main>
        
    </body>
    </html>
    ";

    var_dump($student);


}
