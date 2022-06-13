<?php


// SELECT * FROM recervacion, usuario WHERE recervacion.rec_idUsuario = usuario.usu_id GROUP BY usuario.usu_id HAVING usuario.usu_edad BETWEEN 1 AND 23

// function usuariosA()
// {


//     include("../conexion/conexion.php");

//     $consultaUsuario = mysqli_query($link, "SELECT * FROM recervacion, usuario WHERE rec_idUsuario = usu_id GROUP BY usu_id HAVING usu_edad BETWEEN 31 AND 50");
//     while ($respuesta = mysqli_fetch_array($consultaUsuario)) {

//         $usu_nombre = $respuesta['usu_nombre'];
//         $usu_correo = $respuesta['usu_correo'];
//         $usu_edad   = $respuesta['usu_edad'];
//         $usu_telefono = $respuesta['usu_telefono'];
//         echo '
//     <tr>
//     <td>' . $usu_nombre . '</td>
//     <td>' . $usu_correo . '</td>
//     <td>' . $usu_edad . '</td>
//     <td>' . $usu_telefono . '</td>
//     <td>2011/04/25</td>
//     <td>$320,800</td>
// </tr>
//     ';
//     }
// }


// function usuariosJ()
// {


//     include("../conexion/conexion.php");

//     $consultaUsuario = mysqli_query($link, "SELECT * FROM recervacion, usuario WHERE rec_idUsuario = usu_id GROUP BY usu_id HAVING usu_edad BETWEEN 1 AND 30");
//     while ($respuesta = mysqli_fetch_array($consultaUsuario)) {

//         $usu_nombre = $respuesta['usu_nombre'];
//         $usu_correo = $respuesta['usu_correo'];
//         $usu_edad   = $respuesta['usu_edad'];
//         $usu_telefono = $respuesta['usu_telefono'];
//         echo '
//     <tr>
//     <td>' . $usu_nombre . '</td>
//     <td>' . $usu_correo . '</td>
//     <td>' . $usu_edad . '</td>
//     <td>' . $usu_telefono . '</td>
//     <td>2011/04/25</td>
//     <td>$320,800</td>
// </tr>
//     ';
//     }
// }

// function usuariosM()
// {


//     include("../conexion/conexion.php");

//     $consultaUsuario = mysqli_query($link, "SELECT * FROM recervacion, usuario WHERE rec_idUsuario = usu_id GROUP BY usu_id HAVING usu_edad BETWEEN 50 AND 100");
//     while ($respuesta = mysqli_fetch_array($consultaUsuario)) {

//         $usu_nombre = $respuesta['usu_nombre'];
//         $usu_correo = $respuesta['usu_correo'];
//         $usu_edad   = $respuesta['usu_edad'];
//         $usu_telefono = $respuesta['usu_telefono'];
//         echo '
//     <tr>
//     <td>' . $usu_nombre . '</td>
//     <td>' . $usu_correo . '</td>
//     <td>' . $usu_edad . '</td>
//     <td>' . $usu_telefono . '</td>
//     <td>2011/04/25</td>
//     <td>$320,800</td>
// </tr>
//     ';
//     }
// }

function porcentajeGenero()
{


    include("../conexion/conexion.php");

    $consultaUsuario = mysqli_query($link, "SELECT COUNT(*) as cont,usu_nombre,usu_edad,usu_sexo,usu_tipo,usu_telefono, usu_correo,usu_fechaRegistro FROM usuario GROUP BY usu_sexo ");
    while ($respuesta = mysqli_fetch_array($consultaUsuario)) {

        $usu_sexo = $respuesta['usu_sexo'];
        $conteo = $respuesta['cont'];
        // $usu_edad   = $respuesta['usu_edad'];
        // $usu_telefono = $respuesta['usu_telefono'];
        echo '
    <tr>
    <td>' . $conteo . '</td>
    <td>' . $usu_sexo . '</td>

    <td>2011/04/25</td>
    <td>$320,800</td>
</tr>
    ';
    }
}


function ganacias()
{


    include("../conexion/conexion.php");

    $consultaUsuario = mysqli_query($link, "SELECT* FROM recervacion, producto WHERE pro_id = rec_idProducto AND rec_status=2 ");
    while ($respuesta = mysqli_fetch_array($consultaUsuario)) {

        $pro_nombre = $respuesta['pro_nombre'];
        $pro_precio = $respuesta['pro_precio'];
        $rec_fecha   = $respuesta['rec_fechaPedido'];
        // $usu_telefono = $respuesta['usu_telefono'];
        echo '
    <tr>
    <td>' . $pro_nombre . '</td>
    <td>'.$rec_fecha.'</td>
    <td>' .  $pro_precio . '</td>
    </tr>
    ';
    }
}


function productosProceso()
{


    include("../conexion/conexion.php");

    $consultaUsuario = mysqli_query($link, "SELECT * FROM recervacion, producto,usuario WHERE pro_id = rec_idProducto AND usu_id = rec_idUsuario AND rec_status =  '1'");
    while ($respuesta = mysqli_fetch_array($consultaUsuario)) {

        $pro_nombre = $respuesta['pro_nombre'];
        $pro_precio = $respuesta['pro_precio'];
        $pro_fecha = $respuesta['rec_fechaPedido'];
        $usu_nombre = $respuesta['usu_nombre'];
        $rec_id = $respuesta['rec_id'];
        $usu_edad = $respuesta['usu_edad'];




        // $usu_edad   = $respuesta['usu_edad'];
        // $usu_telefono = $respuesta['usu_telefono'];
        echo '
    <tr>
    <td>' . $pro_nombre . '</td>
    <td>' .  $pro_precio . '</td>
    <td>' . $usu_nombre . '</td>
    <td>' . $usu_edad . '</td>
    <td>' . $pro_fecha . '</td>
    <td>
    <a href="" onclick="modRecervacion(' . $rec_id . ');">Aceptar</a>
    <a href="" onclick="delRecervacion(' . $rec_id . ');">Eliminar</a>
    </td>
</tr>
    ';
    }
}



function vendidos(){


    include("../conexion/conexion.php");

    $consultaMasVendido = mysqli_query($link, "SELECT * FROM vw_vendidos WHERE MONTH(rec_fechaPedido) = $mes ORDER BY cont DESC  LIMIT 1  ");
    while ($respuesta = mysqli_fetch_array($consultaMasVendido)) {

        $pro_nombre = $respuesta['pro_nombre'];
        $pro_precio = $respuesta['pro_precio'];
        $conteo   = $respuesta['cont'];
        echo '
        <tr>
        <td>' . $pro_nombre . '</td>
        <td>' .  $pro_precio . '</td>
        <td>' . $conteo . '</td>
        <td>2011/04/25</td>
        <td>2011/04/25</td>
        <td>MAS VENDIDO</td>
        </tr>
    ';
    }
    $consultaMenosVendido = mysqli_query($link, "SELECT * FROM vw_vendidos  WHERE MONTH(rec_fechaPedido) = $mes ORDER BY cont ASC  LIMIT 1  ");
    while ($respuesta = mysqli_fetch_array($consultaMenosVendido)) {

        $pro_nombre = $respuesta['pro_nombre'];
        $pro_precio = $respuesta['pro_precio'];
        $conteo   = $respuesta['cont'];
        echo '
    <tr>
    <td>' . $pro_nombre . '</td>
    <td>' .  $pro_precio . '</td>
    <td>' . $conteo . '</td>
    <td>2011/04/25</td>
    <td>2011/04/25</td>
    <td>MENOS VENDIDO</td>
    </tr>
    ';
    }
}
