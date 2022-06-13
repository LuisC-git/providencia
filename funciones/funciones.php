<?php


// add => insertar datos
// mod => actualizar datos
// del => eliminar datos
// con => sosultar datos




$tipo  = $_GET['tipo'];


if ($tipo == "addCliente") {
  addCliente();
} elseif ($tipo == "addOrden") {
  addOrden();
} elseif ($tipo == "modOrden") {
  modOrden();
} elseif ($tipo == "delRecervacion") {
  delRecervacion();
} elseif ($tipo == "conFecha") {
  conFecha();
} elseif ($tipo == "conGanancia") {
  conGanancia();
} elseif ($tipo == "conGenero") {
  conGenero();
} elseif ($tipo == "conEdadesA") {
  usuariosA();
} elseif ($tipo == "conEdadesJ") {
  usuariosJ();
} elseif ($tipo == "conEdadesM") {
  usuariosM();
}



function addCliente()
{
  include("../conexion/conexion.php");

  $user = ($_POST['nombre']);
  $email = ($_POST['correo']);
  $telefono = ($_POST['telefono']);
  $sexo = ($_POST['sexo']);
  $edad = ($_POST['edad']);
  $password = ($_POST['password3']);

  $noVacio = (isset($email) && !empty($email)) &&
    (isset($user) && !empty($user)) &&
    (isset($telefono) && !empty($telefono)) &&
    (isset($edad) && !empty($edad)) &&
    (isset($sexo) && !empty($sexo)) &&
    (isset($_POST['password2']) && !empty($_POST['password2'])) &&
    (isset($_POST['password3']) && !empty($_POST['password3']));

  $consulta1 = mysqli_query($link, "SELECT * FROM usuario WHERE usu_correo='$email'");

  if (mysqli_num_rows($consulta1) == 0) {

    if ($noVacio && $_POST['password3'] == $_POST['password2']) {

      // date_default_timezone_get("America/Los_Angeles");
      $fecha = date('Y-m-d');

      $consulta = "INSERT INTO usuario (usu_nombre,usu_correo,usu_password,usu_edad,usu_sexo,usu_tipo,usu_telefono,usu_fechaRegistro) 
    VALUES ('" . $user .  "','" . $email .  "','" . $password .  "','" . $edad .  "','" . $sexo . "','" . '1' .  "','" . $telefono . "','" . $fecha .   "')";
      if (mysqli_query($link, $consulta)) {
      }
      echo json_encode(1);
    } else {
      echo json_encode(3);
    }
  } else {
    echo json_encode(2);
  }
}

function addOrden()
{
  include("../conexion/conexion.php");

  $Idusuario = $_GET["idUsuario"];
  $idPaquete = $_GET["idOrden"];
  $fecha = date('Y-m-d');

  $insert = "INSERT INTO recervacion (rec_idUsuario,rec_idProducto,rec_status,rec_fechaPedido) 
  VALUES ('" . $Idusuario .  "','" . $idPaquete .  "','" . '1' . "','" . $fecha . "')";

  if (mysqli_query($link, $insert)) {
    echo json_encode(1);
  } else {
    echo json_encode(2);
  }
}

function modOrden()
{
  // echo json_encode(1);

  include("../conexion/conexion.php");

  // $Idusuario = $_GET["idUsuario"];
  $idPaquete = $_GET["idOrden"];

  $insert = "UPDATE recervacion SET rec_status='2' WHERE rec_id ='$idPaquete' ";

  if (mysqli_query($link, $insert)) {
    echo json_encode(1);
  } else {
    echo json_encode(2);
  }
}


function delRecervacion()
{
  // echo json_encode(1);

  include("../conexion/conexion.php");

  // $Idusuario = $_GET["idUsuario"];
  $idPaquete = $_GET["idOrden"];

  $delete = "DELETE FROM recervacion   WHERE rec_id ='$idPaquete' ";

  if (mysqli_query($link, $delete)) {
    echo json_encode(1);
  } else {
    echo json_encode(2);
  }
}

function conFecha()
{
  $mes = $_GET["mes"];


  include("../conexion/conexion.php");

  $consultaMasVendido = mysqli_query($link, " SELECT COUNT(*) AS cont, pro_nombre,  pro_precio, rec_fechaPedido FROM recervacion, producto WHERE pro_id = rec_idProducto AND MONTH(rec_fechaPedido) = $mes GROUP BY pro_id  ORDER BY cont DESC LIMIT 1");
  while ($respuesta = mysqli_fetch_array($consultaMasVendido)) {

    $pro_nombre = $respuesta['pro_nombre'];
    $pro_precio = $respuesta['pro_precio'];
    $conteo   = $respuesta['cont'];
    $fecha   = $respuesta['rec_fechaPedido'];

    echo '
  <tr>
  <td>' . $pro_nombre . '</td>
  <td>' .  $pro_precio . '</td>
  <td>' . $conteo . '</td>
  <td>' . $fecha . '</td>
  <td>MAS VENDIDO</td>
  </tr>
  ';
  }
  $consultaMenosVendido = mysqli_query($link, "SELECT COUNT(*) AS cont, pro_nombre,  pro_precio, rec_fechaPedido FROM recervacion, producto WHERE pro_id = rec_idProducto AND MONTH(rec_fechaPedido) = $mes GROUP BY pro_id  ORDER BY cont ASC LIMIT 1 ");
  while ($respuesta = mysqli_fetch_array($consultaMenosVendido)) {

    $pro_nombre = $respuesta['pro_nombre'];
    $pro_precio = $respuesta['pro_precio'];
    $conteo   = $respuesta['cont'];
    $fecha   = $respuesta['rec_fechaPedido'];

    echo '
  <tr>
  <td>' . $pro_nombre . '</td>
  <td>' .  $pro_precio . '</td>
  <td >' . $conteo . '</td>
  <td>' . $fecha . '</td>
  <td>MENOS VENDIDO</td>
  </tr>
  ';
  }
}



function conGanancia()
{
  include("../conexion/conexion.php");

  $fecha = $_POST["fecha2"];
  // SELECT *,sum(pro_precio) AS suma FROM recervacion, producto WHERE pro_id = rec_idProducto and rec_status=2 AND recervacion.rec_fechaPedido = "2022-6-21"
  $consultaMenosVendido = mysqli_query($link, "SELECT *,sum(pro_precio) AS suma FROM recervacion, producto WHERE pro_id = rec_idProducto and rec_status=2 AND rec_fechaPedido = '$fecha'");
  while ($respuesta = mysqli_fetch_array($consultaMenosVendido)) {

    $suma = $respuesta['suma'];

    echo $suma;
  }
}

function conGenero()
{



  $mes = $_GET["mes"];


  include("../conexion/conexion.php");


  $consultaMasVendido = mysqli_query($link, "SELECT COUNT(*) as cont,usu_nombre,usu_edad,usu_sexo,usu_tipo,usu_telefono, usu_correo,usu_fechaRegistro FROM usuario WHERE MONTH(usu_fechaRegistro) = $mes GROUP BY usu_sexo");
  while ($respuesta = mysqli_fetch_array($consultaMasVendido)) {

    $genero = $respuesta['usu_sexo'];
    $fecha = $respuesta['usu_fechaRegistro'];
    $conteo   = $respuesta['cont'];
    if ($genero == 1) {
      $genero = "HOMBRE";
    } elseif ($genero == 2) {
      $genero = "MUJER";
    }
    echo '
  <tr>
  <td>' . $genero . '</td>
  <td>' .  $fecha . '</td>
  <td id="'.$genero.'">' . $conteo . '</td>
  </tr>
  ';
  }
}

function usuariosA()
{


  include("../conexion/conexion.php");

  $mes = $_GET["mes"];



  $consultaUsuario = mysqli_query($link, "SELECT * FROM  usuario WHERE  MONTH(usu_fechaRegistro) = $mes HAVING usu_edad BETWEEN 31 AND 50");
  while ($respuesta = mysqli_fetch_array($consultaUsuario)) {

    $usu_nombre = $respuesta['usu_nombre'];
    $usu_correo = $respuesta['usu_correo'];
    $usu_edad   = $respuesta['usu_edad'];
    $usu_telefono = $respuesta['usu_telefono'];
    $genero = $respuesta['usu_sexo'];
    $fecha = $respuesta['usu_fechaRegistro'];

    if ($genero == 1) {
      $genero = "HOMBRE";
    } elseif ($genero == 2) {
      $genero = "MUJER";
    }
    echo '
    <tr>
    <td>' . $usu_nombre . '</td>
    <td>' . $usu_correo . '</td>
    <td>' . $usu_edad . '</td>
    <td>' . $usu_telefono . '</td>
    <td>' . $genero . '</td>
    <td>' . $fecha . '</td>
</tr>
    ';
  }
}


function usuariosJ()
{


  include("../conexion/conexion.php");

  $mes = $_GET["mes"];

  $consultaUsuario = mysqli_query($link, "SELECT * FROM  usuario WHERE  MONTH(usu_fechaRegistro) = $mes HAVING usu_edad BETWEEN 1 AND 30");
  while ($respuesta = mysqli_fetch_array($consultaUsuario)) {

    $usu_nombre = $respuesta['usu_nombre'];
    $usu_correo = $respuesta['usu_correo'];
    $usu_edad   = $respuesta['usu_edad'];
    $usu_telefono = $respuesta['usu_telefono'];
    $genero = $respuesta['usu_sexo'];
    $fecha = $respuesta['usu_fechaRegistro'];

    if ($genero == 1) {
      $genero = "HOMBRE";
    } elseif ($genero == 2) {
      $genero = "MUJER";
    }
    echo '
    <tr>
    <td>' . $usu_nombre . '</td>
    <td>' . $usu_correo . '</td>
    <td>' . $usu_edad . '</td>
    <td>' . $usu_telefono . '</td>
    <td>' . $genero . '</td>
    <td>' . $fecha . '</td>

</tr>
    ';
  }
}

function usuariosM()
{


  include("../conexion/conexion.php");
  $mes = $_GET["mes"];

  $consultaUsuario = mysqli_query($link, "SELECT * FROM  usuario WHERE  MONTH(usu_fechaRegistro) = $mes HAVING usu_edad BETWEEN 50 AND 400");
  while ($respuesta = mysqli_fetch_array($consultaUsuario)) {

    $usu_nombre = $respuesta['usu_nombre'];
    $usu_correo = $respuesta['usu_correo'];
    $usu_edad   = $respuesta['usu_edad'];
    $usu_telefono = $respuesta['usu_telefono'];
    $genero = $respuesta['usu_sexo'];
    $fecha = $respuesta['usu_fechaRegistro'];

    if ($genero == 1) {
      $genero = "HOMBRE";
    } elseif ($genero == 2) {
      $genero = "MUJER";
    }
    echo '
    <tr>
    <td>' . $usu_nombre . '</td>
    <td>' . $usu_correo . '</td>
    <td>' . $usu_edad . '</td>
    <td>' . $usu_telefono . '</td>
    <td>' . $genero . '</td>
    <td>' . $fecha . '</td>

</tr>
    ';
  }
}
