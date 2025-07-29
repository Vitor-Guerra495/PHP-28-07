<?php
    $pi = pi();

    $raio = $_POST['raio'];

    $calculo = $pi * ($raio * $raio);
    echo $calculo;
?>