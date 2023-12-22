<?php
if(isset($_POST)){
    echo "db/".$_POST['coleccion'];
    @mkdir("db/".$_POST['coleccion']."/");
    $json = json_encode($_POST,JSON_PRETTY_PRINT);
    file_put_contents("db/".$_POST['coleccion']."/".date('U').".json",$json);
    }
echo "ok";
?>