<?php

$hostname_landier = "localhost";
$database_landier = "landierm_landierdb";
$username_landier = "landierm_read";
$password_landier = "TgT-mex-bPL-pV2"; 

$landier = mysqli_connect("127.0.0.1",$username_landier,$password_landier,$database_landier);
mysqli_set_charset($landier,"utf8");

/////////////////////////LEE CLIENTES
$buscar = 'SELECT p.*, e.estado as nombre_estado, z.zona as nombre_zona FROM propiedades p, estados e, zonas z where p.id = '.$_POST['id'].' and p.estado = e.id and p.zona = z.id order by p.descripcion ASC';
$sql_buscar = mysqli_query($landier, $buscar);
$row_sql_buscar = mysqli_fetch_assoc($sql_buscar);
$totalRows_sql_buscar = mysqli_num_rows($sql_buscar);

$imagen1 = $row_sql_buscar['imagen1'];
$imagen2 = $row_sql_buscar['imagen2'];
$imagen3 = $row_sql_buscar['imagen3'];
$imagen4 = $row_sql_buscar['imagen4'];
$imagen5 = $row_sql_buscar['imagen5'];
$imagen6 = $row_sql_buscar['imagen6'];
$imagen7 = $row_sql_buscar['imagen7'];
$imagen8 = $row_sql_buscar['imagen8'];
$imagen9 = $row_sql_buscar['imagen9'];
$imagen10 = $row_sql_buscar['imagen10'];
$imagen11 = $row_sql_buscar['imagen11'];
$imagen12 = $row_sql_buscar['imagen12'];
$imagen13 = $row_sql_buscar['imagen13'];
$imagen14 = $row_sql_buscar['imagen14'];
$imagen15 = $row_sql_buscar['imagen15'];
/////////////////////////AREA VISIBLE
$output_string='';
$ap = "'";
do{
$output_string .='
	<div class="container " style="height:600px; width: 100%; overflow:scroll;">
		<br /><div class = "container">
			<div class="row" >
				<div class = "col-md-4"></div>
				<div class = "col-md-4"></div>
				<div class = "col-md-2"></div>
				<div class = "col-md-2">
					<img src = "img/close.png" id="cerrarventana" class="fa fa-times-circle" aria-hidden="true" onclick="cerrarm()" style = "width: 25px; height: 25px; cursor:pointer; position:relative; left:97%;"  />
				</div>
			</div>
		</div><br />
	
	<div class = "container">
				<div class = "row">
					<div class = "col-md-1" style = "height: 490px; overflow: scroll;">';
						if($imagen1 != ""){
							$output_string .='<a href = "../img/prop/'.$row_sql_buscar['imagen1'].'" data-lightbox = "galeria"><img src = "../img/prop/'.$row_sql_buscar['imagen1'].'" style = "width: 70px; height: 70px;"></a>';
						}
						if($imagen2 != ""){
							$output_string .='<a href = "../img/prop/'.$row_sql_buscar['imagen2'].'" data-lightbox = "galeria"><img src = "../img/prop/'.$row_sql_buscar['imagen2'].'" style = "width: 70px; height: 70px;"></a>';
						}
						if($imagen3 != ""){
							$output_string .='<a href = "../img/prop/'.$row_sql_buscar['imagen3'].'" data-lightbox = "galeria"><img src = "../img/prop/'.$row_sql_buscar['imagen3'].'" style = "width: 70px; height: 70px;"></a>';
						}
						if($imagen4 != ""){
							$output_string .='<a href = "../img/prop/'.$row_sql_buscar['imagen4'].'" data-lightbox = "galeria"><img src = "../img/prop/'.$row_sql_buscar['imagen4'].'" style = "width: 70px; height: 70px;"></a>';
						}
						if($imagen5 != ""){
							$output_string .='<a href = "../img/prop/'.$row_sql_buscar['imagen5'].'" data-lightbox = "galeria"><img src = "../img/prop/'.$row_sql_buscar['imagen5'].'" style = "width: 70px; height: 70px;"></a>';
						}
						if($imagen6 != ""){
							$output_string .='<a href = "../img/prop/'.$row_sql_buscar['imagen6'].'" data-lightbox = "galeria"><img src = "../img/prop/'.$row_sql_buscar['imagen6'].'" style = "width: 70px; height: 70px;"></a>';
						}
						if($imagen7 != ""){
							$output_string .='<a href = "../img/prop/'.$row_sql_buscar['imagen7'].'" data-lightbox = "galeria"><img src = "../img/prop/'.$row_sql_buscar['imagen7'].'" style = "width: 70px; height: 70px;"></a>';
						}
						if($imagen8 != ""){
							$output_string .='<a href = "../img/prop/'.$row_sql_buscar['imagen8'].'" data-lightbox = "galeria"><img src = "../img/prop/'.$row_sql_buscar['imagen8'].'" style = "width: 70px; height: 70px;"></a>';
						}
						if($imagen9 != ""){
							$output_string .='<a href = "../img/prop/'.$row_sql_buscar['imagen9'].'" data-lightbox = "galeria"><img src = "../img/prop/'.$row_sql_buscar['imagen9'].'" style = "width: 70px; height: 70px;"></a>';
						}
						if($imagen10 != ""){
							$output_string .='<a href = "../img/prop/'.$row_sql_buscar['imagen10'].'" data-lightbox = "galeria"><img src = "../img/prop/'.$row_sql_buscar['imagen10'].'" style = "width: 70px; height: 70px;"></a>';
						}
						if($imagen11 != ""){
							$output_string .='<a href = "../img/prop/'.$row_sql_buscar['imagen11'].'" data-lightbox = "galeria"><img src = "../img/prop/'.$row_sql_buscar['imagen11'].'" style = "width: 70px; height: 70px;"></a>';
						}
						if($imagen12 != ""){
							$output_string .='<a href = "../img/prop/'.$row_sql_buscar['imagen12'].'" data-lightbox = "galeria"><img src = "../img/prop/'.$row_sql_buscar['imagen12'].'" style = "width: 70px; height: 70px;"></a>';
						}
						if($imagen13 != ""){	
							$output_string .='<a href = "../img/prop/'.$row_sql_buscar['imagen13'].'" data-lightbox = "galeria"><img src = "../img/prop/'.$row_sql_buscar['imagen13'].'" style = "width: 70px; height: 70px;"></a>';
						}
						if($imagen14 != ""){	
							$output_string .='<a href = "../img/prop/'.$row_sql_buscar['imagen14'].'" data-lightbox = "galeria"><img src = "../img/prop/'.$row_sql_buscar['imagen14'].'" style = "width: 70px; height: 70px;"></a>';
						}
						if($imagen15 != ""){
							$output_string .='<a href = "../img/prop/'.$row_sql_buscar['imagen15'].'" data-lightbox = "galeria"><img src = "../img/prop/'.$row_sql_buscar['imagen15'].'" style = "width: 70px; height: 70px;"></a>';
						}
				$output_string .= '</div>
					<div class = "col-md-7">
						<img src = "../img/prop/'.$row_sql_buscar['imagen'].'"  style = "width: 100%; height: 500px;"/>
					</div>
					<div class = "col-md-4" style = "height: 500px; color: white; border:solid  #ffffff; border-width: 2px;">
						<div style = "height: 490px; overflow: scroll;">
							<h1> <b>Codigo:</b>'.$row_sql_buscar['codigo'].'</h1>
							<h1> <b>Valor:</b>'.$row_sql_buscar['valor_venta'].'</h1>
							<h1> <b>Terreno:</b>'.$row_sql_buscar['terreno'].'</h1>
							<h1> <b>Construcción:</b>'.$row_sql_buscar['construccion'].'</h1>
							<h1> <b>Baños:</b>'.$row_sql_buscar['banos'].'</h1>
							<h1> <b>Medios Baños:</b>'.$row_sql_buscar['medbanos'].'</h1>
							<h1> <b>Plantas:</b>'.$row_sql_buscar['plantas'].'</h1>
							<h1> <b>Recámaras:</b>'.$row_sql_buscar['recamaras'].'</h1>
							<h1> <b>Zona:</b>'.$row_sql_buscar['nombre_zona'].'</h1>
							<h1> <b>Ciudad:</b>'.$row_sql_buscar['colonia'].'</h1>
							<h1> <b>Estado:</b>'.$row_sql_buscar['nombre_estado'].'</h1>
							<h1> <b>Teléfono:</b>'.$row_sql_buscar['telefono'].'</h1>
							<h1> <b>Descripción:</b>'.$row_sql_buscar['descripcion'].'</h1>
						</div>
					</div>
				</div>
			</div>
</div>'; 

}while ($row_sql_buscar=mysqli_fetch_assoc($sql_buscar)); 
print (json_encode("".$output_string.""));
?>
