<?php
$valor = $_GET["v"];

for($c = 0; $c <= 10; $c++){
    $res = $valor * $c;
    echo "$valor X $c = $res <br/>" ;
}
?>