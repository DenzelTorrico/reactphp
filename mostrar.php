<?php
    header('Access-Control-Allow-Origin: *'); 
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    require_once("./inyeccion.php");
    header('Content-Type: application/json;charset=utf-8');
    $show = new Conectar();
    echo $show->GetData();
    

?>