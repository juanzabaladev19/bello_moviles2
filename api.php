<?php
//echo $_SERVER['REQUEST_METHOD'];
//print_r($_GET,['pass']);
if($_SERVER['REQUEST_METHOD'] == "PUT"){
    $data = json_decode(file_get_contents('php://input'),true);
// consulta a la db
    $response = array("identification"=>"12345", "status"=>"ok");
    echo json_encode($response);
}
else{
    echo "Mijo no se puede";
}

