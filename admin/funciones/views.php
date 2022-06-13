<?php

$error = '<hr><h1>La página no existe</h1><script>alert("dfdfdsjf");</script>';

$id=$_REQUEST['id'];

    // if ($id==""){ include('views/perfilInicio.php');}
    if ($id==""){ include('views/pedidos.php');}
    if ($id=="2"){ include('views/estadisiticaEdadesA.php');}
    if ($id=="1"){ include('views/estadisiticaEdadesJ.php');}
    if ($id=="3"){ include('views/estadisiticaEdadesM.php');}
    if ($id=="4"){ include('views/estadisticaGenero.php');}
    if ($id=="5"){ include('views/ganancias.php');}
    if ($id=="6"){ include('views/masVendidos.php');}
    if ($id=="7"){ include('views/pedidos.php');}
    // if ($id=="8"){ include('views/tablas.html');}







    // if ($id=="2"){ include('views/perfilContenido.php');}
    // if ($id=="3"){ include('views/perfilContenido2.php');}
    // if ($id=="4"){ include('views/perfilDatosUsuario.php');}
    // if ($id=="5"){ include('views/perfilMembresia.php');}
    // if ($id=="7"){ include('views/perfilMetodoPago.php');}
