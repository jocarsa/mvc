<?php

    /*
        modelo de datos de cliente:
        -nombre
        -identificacion
        -direccion
        -telefono
        -email
    */

    echo '
        <form action="?" method="POST">
            <input type="text" name="nombre">
            <input type="text" name="identificacion">
            <input type="text" name="direccion">
            <input type="text" name="telefono">
            <input type="text" name="email">
            <input type="submit">
        </form>
    ';
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