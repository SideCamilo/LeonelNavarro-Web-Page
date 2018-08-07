<?php

$hostname_landier = "localhost";
$database_landier = "landierm_landierdb";
$username_landier = "landierm_read";
$password_landier = "TgT-mex-bPL-pV2"; 

$landier = mysqli_connect("127.0.0.1",$username_landier,$password_landier,$database_landier);
mysqli_set_charset($landier,"utf8");

/////////////////////////LEE CLIENTES
if ($_POST['id'] == 0) {
	$buscar = 'SELECT p . * , e.estado AS nombre_estado, z.zona AS nombre_zona FROM propiedades p, estados e, zonas z WHERE p.zona = z.id AND p.estado = e.id AND p.zona = z.id and publica = "S" ORDER BY p.descripcion ASC ';

}else{
$buscar = 'SELECT p.*, e.estado as nombre_estado, z.zona as nombre_zona FROM propiedades p, estados e, zonas z where p.zona = '.$_POST['id'].' and p.estado = e.id and p.zona = z.id and publica = "S" order by p.descripcion ASC';}
$sql_buscar = mysqli_query($landier, $buscar);
$row_sql_buscar = mysqli_fetch_assoc($sql_buscar);
$totalRows_sql_buscar = mysqli_num_rows($sql_buscar);

/////////////////////////AREA VISIBLE
$output_string='<div class="container">
					<div class = "row" style = "margin-right: 3px; margin-left: 3px;">
					';
$ap = "'";

do{
	$output_string .='
		<div class = "col-md-4" style = "padding: 0px;">
			<div id="mycarousel" class="carousel slide" data-ride="carousel" style = "cursor:pointer;">
				<div class="carousel-inner">
					<div class="item active">
						<img style = "width:100%; height: 300px;" id = "" src = "../img/prop/'.$row_sql_buscar['imagen'].'" alt = "'.$row_sql_buscar['nombre'].'" onclick="prop('.$row_sql_buscar['id'].')"/>
						    <div class="carousel-caption" style = "width: 290px; padding-bottom: 0; left: 5px; bottom: 0px;">
						    <b><h1 style = " text-align: left; font-size: 15px; margin-left: 10px; margin-bottom: 0; margin-top: 0; color: #ffffff; float: left;">'.$row_sql_buscar['codigo'].'/'.$row_sql_buscar['nombre_zona'].'/'.$row_sql_buscar['colonia'].'/'.$row_sql_buscar['valor_venta'].'</h1></b>
			            </div>
					</div>
				</div>
			</div>
		</div>';

}while ($row_sql_buscar=mysqli_fetch_assoc($sql_buscar)); 
$output_string .= '
	</div>
</div>'; 
print (json_encode("".$output_string.""));
?>
