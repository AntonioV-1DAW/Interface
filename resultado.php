<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["profesor"])){
        $asignatura = $_GET["asignatura"];
        $profesor = $_GET["profesor"];
        $horas = $_GET["horas"];
        $informacion = $_GET["informacion"];

        echo "Asignatura: " . $asignatura . "<br>";
        echo "Profesor: " . $profesor . "<br>";
        echo "Horas: " . $horas . "<br>";
        echo "Informacion: " . $informacion . "<br>";
    }
?>