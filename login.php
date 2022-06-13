<?php

if (empty($email) && isset($email) || empty($password) && isset($password)) {
    echo json_encode('4');
    //exit();
} else {
    //Si entra éste script, se redirecciona con JAVASCRIPT
    //conecxion a la base de datos
    include("conexion/conexion.php");
    $email       = $_REQUEST['email'];
    $password    = $_REQUEST['password'];
    //$recordar    = $_REQUEST['recordar'];
    $consulta = mysqli_query($link, "SELECT * FROM usuario WHERE usu_correo='$email'");
    //echo json_encode('2');

    //verificamos si el user exite con un condicional
    if (mysqli_num_rows($consulta) == 0) {
        // mysql_num_rows <- esta funcion me imprime el numero de registro que encontro 
        // si el numero es igual a 0 es porque el registro no exite, en otras palabras ese user no esta en la tabla miembro por lo tanto se puede registrar

        echo json_encode('3');
    } else {
        //caso contario (else) es porque ese user ya esta registrado
        if ($row = mysqli_fetch_array($consulta)) {
            $usu_id          = $row['usu_id'];
            $usu_rol         =  $row['usu_tipo'];
            $usu_nombre      =  $row['usu_nombre'];
            $usu_apellidos   =  $row['usu_apellidos'];
            $usu_telefono    =  $row['usu_telefono'];
            $usu_pais        =  $row['usu_pais'];
            $usu_imgPortada  =  $row['usu_imgPortada'];
            $usu_imgPerfil   =  $row['usu_img_perfil'];
            $usu_email       =  $row['usu_correo'];
            $usu_password    =  $row['usu_password'];

            if ($row['usu_password'] == $password  && $usu_rol==1) {

                //if(!isset($recordar)){
                session_start();
                //session_destroy();
                $_SESSION['id']         = $usu_id;
                $_SESSION['rol']        = $usu_rol;
                $_SESSION['nombre']     = $usu_nombre;
                $_SESSION['email']      = $usu_email;
                $_SESSION['password']   = $usu_password;
                $_SESSION['apellidos']  = $usu_apellidos;
                $_SESSION['telefono']   = $usu_telefono;

                echo json_encode('1');
            } elseif($row['usu_password'] == $password  && $usu_rol==2) {
                session_start();
                //session_destroy();
                $_SESSION['id']         = $usu_id;
                $_SESSION['rol']        = $usu_rol;
                $_SESSION['nombre']     = $usu_nombre;
                $_SESSION['email']      = $usu_email;
                $_SESSION['password']   = $usu_password;
                $_SESSION['apellidos']  = $usu_apellidos;
                $_SESSION['telefono']   = $usu_telefono;
                echo json_encode('2');
            }else {
                echo json_encode('3');
            }
        } 
    }
}
