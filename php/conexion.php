<?php
    //$conexion = mysqli_connect("localhost", "KenderWebos", "", "planetario"); //Messi123@password
    //------------Variables para conexion---------
    $equipo= "localhost";
    $namebd= "KenderExpress";//userpassword
    $puerto= "5432"; //ingresar el puerto correcto;
    $usuario= "postgres"; //ingresar usuario correcta
    $clave= "admin2021"; //ingresar password correcto

    //------------Aqui la conexion----------------
    $conexion = pg_connect("host= $equipo
                            dbname= $namebd
                            port= $puerto
                            user= $usuario
                            password= $clave
                            ");

    if  (!$conexion) {
        echo "Error en la conexion";
    } else {
        echo "Conexion exitosa";
    }                       
?>