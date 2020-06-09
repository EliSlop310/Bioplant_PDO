<?php
//puede ser require o include_once para mandar a llamar a as paginas 
require RUTA_APP.'/vistas/vc/heatP.html';
//echo RUTA_APP;
//echo RUTA_URL;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro Usuario</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>css/buscador.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo RUTA_URL?>js/validaciones.js"></script>
    <script type="text/javascript" src="<?php echo RUTA_URL?>js/municipios.js"></script>
    <script type="text/javascript" src="<?php echo RUTA_URL?>js/select_estados.js"></script>
</head>
<body bgcolor=#45B39D> 
    <br><br><br><br>
    <CENTER>
<h2>REGISTRO USUARIO</h2></CENTER>
	<br><br><br><br><br><br>
    <div class="form">

		<form id="regis" onsubmit="return valCliente()" action="<?php echo RUTA_URL;?>/registrar" method="POST" >

		<h4>DATOS GENERALES</h4>
            <br><br><br>
		<p>Nombre<br>
		<input type="text" id="nom" name="nombre" placeholder="Nombre" ></p><br><br>

		<p>Apellido Paterno<br>
		<input type="text" id="pat" name="ApePat" placeholder="ApePat" ></p><br><br>

		<p>Apellido Materno<br>
		<input type="text" id="mat" name="ApeMat" placeholder="ApeMat" ></p><br><br>

		<p>Nombre de Usuario<br>
		<input type="text" id="usu" name="user" placeholder="usu_1234" ></p><br><br>

		<p>Fecha de Nacimiento<br>
		<input type="date" id="nac" name="FechaNac" placeholder="FechaNac"></p><br><br>
                    
		<p>Contraseña<br>
		<input type="password" id="pas1" name="Password" placeholder="Password"></p><br><br>
		<p>Confirmar Contraseña<br>
		<input type="password" id="pas2" name="Password" placeholder="Password"></p><br><br>

		<p>E-mail<br>
		<input type="email" id="ema" name="correo" placeholder="alguien@algo.com" ></p><br><br>

		<p>Telefono<br>
		<input type="text" id="tel" name="Telefono" placeholder="Telefono" ></p><br><br>
<br><br><br>
		<h4>DIRECCIÓN</h4><br><br><br>
		<p>C.P</p><br>
		<input type="text" id="cp" name="CP" placeholder=CP ><br><br>
       	<p>Estado</p><br>
            <select id="estado" id="est" name="estado"></select><br><br>
        <p>Municipio</p><br>
            <select id="municipio" id="mun" name="municipio"></select><br><br>
        <p>Calle</p><br>
		<input type="text" id="cal" name="calle" placeholder=calle ><br><br>
		<p>Numero</p><br>
		<input type="text" id="nc" name="numero" placeholder=numero ><br><br>
<br><br><br>
		<h4>INFORMACIÓN DE LA TARJETA </h4><br><br><br>
		<p>Numero de Tarjeta</p><br>
		<input type="text" id="nta" name="Numeracion" placeholder=NumerodeTarjeta ><br><br>

		<p>CVV</p><br>
		<input type="text" id="cvv" name="CVV" placeholder="CVV" ><br><br>
		 
		<p> Fecha de vencimiento</p><br>
        <input id="FechaVenc" name="FechaVenc" placeholder=**/** ><br><br>
		<br><br>
		<input type="submit" value="Registrar"><br><br><br>
		¿ya tienes una cuenta? <a href = "<?php echo RUTA_URL?>iniciar" >iniciar sesion </a>
	</form>

</div>
</body>
</html>