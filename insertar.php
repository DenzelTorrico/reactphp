<?php
     header('Access-Control-Allow-Origin: *'); 
     header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    require_once("./inyeccion.php");
 
    $ingresar = new Conectar();
    header('Content-Type: application/json;charset=utf-8');
    $json = file_get_contents('php://input');
    $params = json_decode($json);
    /*$name = array(
        "titulo"=>$params->titulo,
        "descripcion"=>$params->descripcion,
        "instructor"=>$params->instructor,
        "imagen"=>$params->imagen,
        "precio"=>$precio
    );
    echo $json;
    */
    //$parametros = json_encode($params);
    echo $ingresar->AddData($params);
    

?>