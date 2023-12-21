<?php
if(isset($_POST['nombre'])){
        echo "ok";
        $nombre = $_POST['nombre'];
        $identificacion = $_POST['identificacion'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $json = '{
            "nombre":"'.$nombre.'",
            "identificacion":"'.$identificacion.'",
            "direccion":"'.$direccion.'",
            "telefono":"'.$telefono.'",
            "email":"'.$email.'",
        }';
        file_put_contents("db/".date('U').".json",$json);
    }
?>