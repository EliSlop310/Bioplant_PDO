<?php
//Realiza la validacion de si esta iniciada una sesion y si no lo manda a la pagina de inicio 
$var=$_SESSION['usuario'];
if($var==null || $var=''){
  echo "<script>alert('USted no tiene autorizacion');</script>";
  header("location:  ".RUTA_URL."paginas/inicio.php");
}
?>
<!---pagina encargada de buscar los productos en el buscador----->

<head><meta charset="utf-8"/>    
<meta name="keywords" content="HTML5, CSS3, JavaScript">
<!-- <meta http‐equiv="refresh" content="20; URL=index.php" >-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title>BIOPLANT</title>
  
    
    <link href="<?php echo RUTA_URL?>css/buscador.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo RUTA_URL?>css/PanelC.css" rel="stylesheet" type="text/css"/>
   
     
</head>
<body><main>
    
       <div id="panelbus" class="panelpro"> 
<?php 

        $busqueda = strtolower($_REQUEST['busqueda']);
           if(empty($busqueda)){
               header("location: Catalogo.php");
        }   
?>


 <div id="cabeza"> 
           <table><tr><td>
			<figure>
				<img  src="<?php echo RUTA_URL?>img/LogoBioPlant.jpg" height="100px" width="150px"/>
            </figure></td>
            <td><h1>BioPlant.</h1></td>
               <td>
                   <a href="<?php echo RUTA_URL?>cliente/MostrarCarrito"><img  id="carrito" src="<?php echo RUTA_URL?>img/carrito.jpg" height="30px" width="30px"/></a>
                   <form action="<?php echo RUTA_URL?>cliente/buscar" method="POST" class="form_search">
    <input type="text" name="busqueda" id="busqueda" placeholder="Buscar..." value="busqueda">
    <input type="submit" value="Buscar" class="btn_search">
</form>    </td>  
     </tr>
     </table>
     
     
     
     
     <div id="vmenu"  class="vertical-menu">
                  <a href="<?php echo RUTA_URL?>cliente/MostrarCat/Ofertas">Ofertas.</a>
                  <a href="<?php echo RUTA_URL?>cliente/MostrarCat/Flores">Flores.</a>
                  <a href="<?php echo RUTA_URL?>cliente/MostrarCat/Cactus">Cactus.</a>
                  <a href="<?php echo RUTA_URL?>cliente/MostrarCat/Orquideas">Orquideas</a>
                  <a href="<?php echo RUTA_URL?>cliente/MostrarCat/Sombra">De sombra.</a>
                  <a href="<?php echo RUTA_URL?>cliente/MostrarCat/Jardineria">Jardineria.</a>
                </div>

    <div id="botones">
              <a href="<?php echo RUTA_URL?>cliente/mostrarU">Cuenta</a>
         <a href=<?php echo RUTA_URL?>Cerrar>Logout</a>  
   
     </div>
 
     
    <div id="interno">
        <h3>Productos</h3>
            
  <?php      

   
               
      //        $query="SELECT * FROM Productos";
    //          $resultado=mysqli_query($conexion,$query);
          
                // while($row=$datos->fetch_assoc())
  foreach ($datos['Dato'] as $a) : 
    # code...
 // echo "hola estelita";
        
    ?>             <div id="prod">
                 <center><br><?php echo $a->nombrepro; ?><br><br>
                        <img height="150px" width="150px"
                       src="data:image/jpg;base64,<?php echo base64_encode($a->foto); ?>"/><br>
                       
                Precio: $ <?php echo $a->preciou; ?> <br/><br><a id="verpro" href="<?php echo RUTA_URL?>Cliente/Mostrar/<?php echo $a->idproducto; ?>">Detalles</a>
                      </center>  
                  </div>
              
    <?php 
             
             endforeach;
              
    ?>    
              
        
</div>
<?php

require RUTA_APP.'/vistas/vc/aside.html';
require RUTA_APP.'/vistas/vc/minifoot.html'; 

?>