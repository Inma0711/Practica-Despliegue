<?php
    $_servidor ='localhost'; // Esto es para almacenar la ip
    $_usuario = 'root';
    $_contrasena = 'Inma12345';
    $_base_de_datos = 'db_login';

    $conexion = new Mysqli($_servidor, $_usuario, $_contrasena, $_base_de_datos)
        or die("Error de conexión");


?>