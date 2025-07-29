<?php
    $cap = $_GET['cap'];
    $taxa = $_GET['taxa'];
    $tempo = $_GET['tempo'];
    $total = $cap * $taxa * $tempo;
    echo "Juros: $total";
?>