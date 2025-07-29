<?php
    $pi = pi();

    $raio = $_GET['raio'];

    $calculo = $pi * ($raio * $raio);
    echo $calculo;
?>