<?php

$hostname_landier = "localhost";
$database_landier = "landierm_landierdb";
$username_landier = "landierm_read";
$password_landier = "TgT-mex-bPL-pV2"; 

$landier = mysqli_connect("127.0.0.1",$username_landier,$password_landier,$database_landier);


$query_usuarios = "INSERT INTO registro (nombre, email, telefono, mensaje ) VALUES ('".$_POST['nombre']."', '".$_POST['email']."', '".$_POST['telefono']."', '".$_POST['mensaje']."') ";
$usuariorecord = mysqli_query($landier, $query_usuarios) ;

$headers = "From: registro@landeiermexico.com \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";


$email = "javier@landiermexico.com";
$msg = "
<html>
<body>
<h3>Registro desde sitio web </h3>

<p>Nombre:".$_POST['nombre']."</p>
<p>Email:".$_POST['email']."</p>
<p>Teléfono:".$_POST['telefono']."</p>
<p>Mensaje:".$_POST['mensaje']."</p>
<p>Ya esta el registro en la base de datos del servidor.</p>



</table>
</body>
</html>
";

//echo $msg;
//echo $email."<br>";
mail($email,"Registro desde pagina web",$msg,$headers);


$go = "../confirma.html#002";
header(sprintf("Location: %s", $go));


?>