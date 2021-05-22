<!DOCTYPE html>
<html>
<title>FORMULARIO PILI</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/fontawesome.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-black">
    <img src="imagenes/home.png" width="45 px" height="35 px">
    <p>HOME</p>
  </a>
  <a href="mostrarClientes.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <img src="imagenes/users.png" width="45 px" height="35 px">
    <p>LISTA CLIENTES</p>
  </a>
  <a href="altaCliente.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <img src="imagenes/add-user.png" width="45 px" height="35 px">
    <p>ALTA CLIENTE</p>
  </a>
  <a href="consulta.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <img src="imagenes/search-user.png" width="45 px" height="35 px">
    <p>CONSULTA</p>
  </a>
  <a href="modificado.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <img src="imagenes/edit-user.png" width="45 px" height="35 px">
    <p>MODIFICAR</p>
  </a>
  <a href="borrado.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <img src="imagenes/delete-user.png" width="45 px" height="35 px">
    <p>BORRAR</p>
  </a>
</nav>
<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
<div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
  <a href="index.html" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
      <a href="mostrarClientes.php" class="w3-bar-item w3-button" style="width:25% !important">LISTA CLIENTES</a>
      <a href="altaCliente.html"  class="w3-bar-item w3-button" style="width:25% !important">ALTA CLIENTE</a>
      <a href="consulta.html" class="w3-bar-item w3-button" style="width:25% !important">CONSULTA</a>
      <a href="modificado.html" class="w3-bar-item w3-button" style="width:25% !important">MODIFICAR</a>
      <a href="borrado.html" class="w3-bar-item w3-button" style="width:25% !important">BORRAR</a>
</div>
</div>
<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">FORMULARIO</span> PILI</h1>
    <img src="imagenes/img.jpg" alt="" class="w3-image" width="992" height="1108">
  </header>
<!----FORMULARIO---->

<div class="w3-card-4">
  <?php
     $con = mysqli_connect("localhost", "root", "", "registroclientes") or die("Problemas con la conexion");
    //servername,username,password,bddname
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    $sql = "SELECT * FROM clientes where CORREO='$_REQUEST[CORREO]'";

    $result = mysqli_query($con, $sql) or
        die("Problemas en el select:" . mysqli_error($con));

    if ($reg = mysqli_fetch_array($result)) {
    ?>
    <div class="w3-card-4">
  <div class="w3-container w3-black" >
    <h2>ALTA DE CLIENTES</h2>
  </div>
  <form action="modificadoCliente2.php" method="post">  
    <p>      
    <label class="w3-text-white"><b>Ingrese nuevo nombre: *</b></label>               
    <input class="w3-input w3-border w3-sand" type="text" name="NOMBRENUEVO" requiered maxlength="50" pattern="^([A-Z]{1}[a-z]+[ ]?){1,2}$" value="<?php echo $reg['NOMBRE'] ?>">
    <input class="w3-input w3-border w3-sand" type="hidden" name="NOMBREVIEJO" requiered maxlength="50" pattern="^([A-Z]{1}[a-z]+[ ]?){1,2}$" value="<?php echo $reg['NOMBRE'] ?>">
    </p>
    <p>      
    <label class="w3-text-white"><b>Ingrese nuevo primer apellido: *</b></label>
    <input class="w3-input w3-border w3-sand" type="text" name="APELLIDO_1NUEVO" required maxlength="50" pattern="^([A-Z]{1}[a-z]+[ ]?){1,2}$" value="<?php echo $reg['APELLIDO_1'] ?>">
    <input class="w3-input w3-border w3-sand" type="hidden" name="APELLIDO_1VIEJO" required maxlength="50" pattern="^([A-Z]{1}[a-z]+[ ]?){1,2}$" value="<?php echo $reg['APELLIDO_1'] ?>">
    </p>
    <p>      
    <label class="w3-text-white"><b>Ingrese nuevo segundo apellido: </b></label>
    <input class="w3-input w3-border w3-sand" type="text" name="APELLIDO_2NUEVO" maxlength="50" pattern="^([A-Z]{1}[a-z]+[ ]?){1,2}$" value="<?php echo $reg['APELLIDO_2'] ?>">
    <input class="w3-input w3-border w3-sand" type="hidden" name="APELLIDO_2VIEJO" maxlength="50" pattern="^([A-Z]{1}[a-z]+[ ]?){1,2}$" value="<?php echo $reg['APELLIDO_2'] ?>">
    </p>
    <p>
    <label class="w3-text-white"><b>Ingrese nuevo sexo: *</b></label>
    <select class="w3-input w3-border w3-sand" name="SEXONUEVO" required value="<?php echo $reg['SEXO'] ?>">
    <option value="Femenino">Femenino</option>
	<option value="Masculino">Masculino</option>
    <option value="Otro">Otro</option>
	</select>
    </p>  
    <label class="w3-text-white"><b>Ingrese nueva direccion: *</b></label>
    <input class="w3-input w3-border w3-sand" type="text" name="DIRECCIONNUEVO" required maxlength="100" value="<?php echo $reg['DIRECCION'] ?>">
    <input class="w3-input w3-border w3-sand" type="hidden" name="DIRECCIONVIEJO" required maxlength="100" value="<?php echo $reg['DIRECCION'] ?>">
    </p>
    <p>      
    <label class="w3-text-white"><b>Ingrese nuevo correo *: </b></label>
    <input class="w3-input w3-border w3-sand" type="email" name="CORREONUEVO" required maxlength="100" value="<?php echo $reg['CORREO'] ?>">
    <input class="w3-input w3-border w3-sand" type="hidden" name="CORREOVIEJO" required maxlength="100" value="<?php echo $reg['CORREO'] ?>">
    </p>
    <p>      
    <label class="w3-text-white"><b>Ingrese nuevo telefono *: </b></label>
    <input class="w3-input w3-border w3-sand" type="tel" name="TELEFONONUEVO" required minlength="9" maxlength="9" value="<?php echo $reg['TELEFONO'] ?>">
    <input class="w3-input w3-border w3-sand" type="hidden" name="TELEFONOVIEJO" required minlength="9" maxlength="9" value="<?php echo $reg['TELEFONO'] ?>">
    </p>
    <p>      
    <label class="w3-text-white"><b>Ingrese nueva fecha de nacimiento *: </b></label>
    <input class="w3-input w3-border w3-sand" type="date" name="FECHA_NACIMIENTONUEVO" required value="<?php echo $reg['FECHA_NACIMIENTO'] ?>">
    <input class="w3-input w3-border w3-sand" type="hidden" name="FECHA_NACIMIENTOVIEJO" required value="<?php echo $reg['FECHA_NACIMIENTO'] ?>">
    </p>
    <p>      
    <label class="w3-text-white"><b>Ingrese nueva poblacion: *</b></label>
    <input class="w3-input w3-border w3-sand" type="text" name="POBLACIONNUEVO" required maxlength="50" value="<?php echo $reg['POBLACION'] ?>">
    <input class="w3-input w3-border w3-sand" type="hidden" name="POBLACIONVIEJO" required maxlength="50" value="<?php echo $reg['POBLACION'] ?>">
    </p>
    <p>        
    <label class="w3-text-white"><b>Provincia: *</b></label>
    <input class="w3-input w3-border w3-sand" type="text" name="PROVINCIANUEVO" required maxlength="25" value="<?php echo $reg['PROVINCIA'] ?>">
    <input class="w3-input w3-border w3-sand" type="hidden" name="PROVINCIAVIEJO" required maxlength="25" value="<?php echo $reg['PROVINCIA'] ?>">
    </p>
    <p>        
    <label class="w3-text-white"><b>Contraseña: *</b></label>
    <input class="w3-input w3-border w3-sand" type="password" name="CONTRASENANUEVO" required maxlength="15" value="<?php echo $reg['CONTRASENA'] ?>">
    <input class="w3-input w3-border w3-sand" type="hidden" name="CONTRASENAVIEJO" required maxlength="15" value="<?php echo $reg['CONTRASENA'] ?>">
    </p>
    <p>        
    <label class="w3-text-white"><b>Dni: *</b></label>
    <input class="w3-input w3-border w3-sand" type="text" name="DNINUEVO" required minlength="9" maxlength="9" pattern="^[0-9]{8}[T|R|W|A|G|M|Y|F|P|D|X|B|N|J|Z|S|Q|V|H|L|C|K|E]$" value="<?php echo $reg['DNI'] ?>">
    <input class="w3-input w3-border w3-sand" type="hidden" name="DNIVIEJO" required minlength="9" maxlength="9" pattern="^[0-9]{8}[T|R|W|A|G|M|Y|F|P|D|X|B|N|J|Z|S|Q|V|H|L|C|K|E]$" value="<?php echo $reg['DNI'] ?>">
    </p>
    <p>        
    <label class="w3-text-white"><b>Twitter: *</b></label>
    <input class="w3-input w3-border w3-sand" type="text" name="TWITTERNUEVO" maxlength="15" pattern="^@([A-Za-z0-9_]{1,15})$" value="<?php echo $reg['TWITTER'] ?>">
    <input class="w3-input w3-border w3-sand" type="hidden" name="TWITTERVIEJO" maxlength="15" pattern="^@([A-Za-z0-9_]{1,15})$" value="<?php echo $reg['TWITTER'] ?>">    
    </p>

    <button class="w3-btn w3-black">MODIFICAR</button>
  </form>
</div>
<?php
}
else{
    echo "No existe cliente con dicho mail";
}
?>           
</div>
<!-- Footer -->
<footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
  <a href="https://github.com/pmartineztejerina">
  <img src="imagenes/github.png" width="30 px" height="30 px">
  </a>
  <a href="https://linkedin.com/in/pilarmartineztejerina">
    <img src="imagenes/linkedin.png" width="30 px" height="30 px">
  </a>
  <a href="https://facebook.com">
    <img src="imagenes/facebook.png" width="30 px" height="30 px">
  </a>
  <a href="https://instagram.com">
    <img src="imagenes/instagram.png" width="30 px" height="30 px">
  </a>
  <a href="https://twitter.com">
    <img src="imagenes/twitter.png" width="30 px" height="30 px">
  </a>
<p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
<!-- End footer -->
</footer>
<!-- END PAGE CONTENT -->
</div>

</body>
</html> 
