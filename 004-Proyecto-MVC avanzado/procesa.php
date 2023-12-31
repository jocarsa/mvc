<?php
if(isset($_POST['nombre'])){
        $json = json_encode($_POST,JSON_PRETTY_PRINT);
        file_put_contents("db/".date('U').".json",$json);
    }
?>