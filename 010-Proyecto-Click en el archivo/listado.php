<?php
$directoryPath = $_GET['coleccion'];

$contents = scandir("db/".$directoryPath."/");

if ($contents === false) {
    echo "Error";
} else {
    $cadena = "[";
    foreach ($contents as $file) {
        $cadena .= '"'.$file . '",';
    }
    $cadena = substr($cadena, 0, -1);
    $cadena .= "]";
    echo $cadena;
}
?>