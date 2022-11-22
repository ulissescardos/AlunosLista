<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
    <!--
        Foi usada a biblioteca css Bulma, para usar alguns dos estilos
        site: https://bulma.io
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="../style.css">
    <script>

        function refresh(){
            window.location.reload()
        }
    
        document.getElementById("#refresh").addEventListener("click", refresh)
    
    </script>
</head>
<body>

    <nav class="navbar">
        <ul>
            <li class="navbar-brand">
                <a href="../index.html">
                    <h2> SI401B </h2>
                </a>
            </li>

            <li>
                <a href="show_students.php">
                    Alunos Cadastrados
                </a>
            </li>

            <li>
                <a href="../index.html" id="refresh">
                    Cadastrar novo aluno
                </a>
            </li>

        </ul>
    </nav>

    <?php

include "./student.php";

$path = dirname(__FILE__) . "/students.txt";

$students = array();

try {
    
    $file = fopen($path, "r");

    while(!feof($file)){

        $line = fgets($file);

        $s = preg_replace('/\s+/', ' ', trim($line));

        $students[] = unserialize($s);
    }

} catch (Exception $e) {
    //throw $th;
}


foreach($students as $key => $value){

    if($students[$key] == false){

        unset($students[$key]);
    }

}

usort($students, [Student::class, 'sort_instances']);
?>

    <table class="table">
        <thead>
        <tr>
            <th>RA </th>
            <th>Nome </th>
            <th>idade </th>
            <th>sexo </th>
            <th>telefone </th>
            <th>endereço </th>
            <th>email </th>
        </tr>
        </thead>
        <tbody>

        <?php

            foreach($students as $key => $val){

                echo '<tr>';

                echo "<td> $val->ra </td>";
                echo "<td> $val->name </td>";
                echo "<td> $val->age </td>";
                echo "<td> $val->sex </td>";
                echo "<td> $val->phone </td>";
                echo "<td> $val->address </td>";
                echo "<td> $val->email </td>";

                echo '</tr>';

            }


        ?>
        </tbody>
    </table>

    
</body>
</html>

