<?php 

define('BD_SERVIDOR', 'localhost');

define('BD_USUARIO', 'root');

define('BD_PASSWORD', '');

define('BD', 'maby');

define('BD_CHARSET', 'utf8');

 $conn=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    $conn->set_charset('utf8');

    if(!$conn){
        die("imposible conectarse: ".mysqli_error($conn));
    }
    if (mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }

 ?>