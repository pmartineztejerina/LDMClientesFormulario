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

<?php
    $ENCUENTRAERROR=0; 
     $NOMBREERR = $APELLIDO_1ERR = $SEXOERR = $DIRECCIONERR = $CORREOERR = $TELEFONOERR = $FECHA_NACIMIENTOERR = $POBLACIONERR = $PROVINCIAERR = $CONTRASENAERR = $DNIERR="";
     $NOMBRE = $APELLIDO_1 = $SEXO = $DIRECCION = $CORREO = $TELEFONO = $FECHA_NACIMIENTO = $POBLACION = $PROVINCIA = $CONTRASENA = $DNI="";
     if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
      if (empty($_POST["NOMBRE"])) {
        $NOMBREERR="Nombre es un campo obligatorio";
        $ENCUENTRAERROR=1;
      }
      else {
        if (strlen($NOMBRE)>50) {
          $NOMBREERR="Nombre no puede tener mas de 50 caracteres";
          $ENCUENTRAERROR=1;
        }
        else {
          $NOMBRE = test_input($_POST["NOMBRE"]);
        }
      }
      if (empty($_POST['APELLIDO_1'])) {
        $APELLIDO_1ERR="El primer apellido es un campo obligatorio";
        $ENCUENTRAERROR=1;
      }
      else {
        if (strlen($APELLIDO_1)>50) {
          $APELLIDO_1ERR="El primer apellido no puede tener mas de 50 caracteres";
          $ENCUENTRAERROR=1;
        }
        else {
          $APELLIDO_1 = test_input($_POST['APELLIDO_1']);
        } 
      }
      $APELLIDO_2 = test_input($_POST['APELLIDO_2']);
      if (empty($_POST['SEXO'])) {
        $SEXOERR="Sexo es un campo obligatorio";
        $ENCUENTRAERROR=1;
      }
      else {
        $SEXO = test_input($_POST['SEXO']);
      }
      if (empty($_POST['DIRECCION'])) {
        $DIRECCIONERR="Direccion es un campo obligatorio";
        $ENCUENTRAERROR=1;
      }
      else {
        $DIRECCION = test_input($_POST['DIRECCION']);
      }
      if (empty($_POST['CORREO'])) {
        $CORREOERR="Correo es un campo obligatorio";
        $ENCUENTRAERROR=1;
      }
      else {
          $CORREO = test_input($_POST['CORREO']);
      }
      if (empty($_POST['TELEFONO'])) {
        $TELEFONOERR="Telefono es un campo obligatorio";
        $ENCUENTRAERROR=1;
      }
      else {
        if (strlen($TELEFONO)>9) {
          $TELEFONOERR="El telefono no puede tener mas de 9 digitos";
          $ENCUENTRAERROR=1;
        }
        else {
          $TELEFONO = test_input($_POST['TELEFONO']);
        } 
      }
      if (empty($_POST['FECHA_NACIMIENTO'])) {
        $FECHA_NACIMIENTOERR="Fecha de nacimiento es un campo obligatorio";
        $ENCUENTRAERROR=1;
      }
      else {
        $FECHA_NACIMIENTO = test_input($_POST['FECHA_NACIMIENTO']);
      }
      if (empty($_POST['POBLACION'])) {
        $POBLACIONERR="Poblacion es un campo obligatorio";
        $ENCUENTRAERROR=1;
      }
      else {
        if (strlen($POBLACION)>50) {
          $POBLACIONERR="La poblacion no puede tener mas de 50 caracteres";
          $ENCUENTRAERROR=1;
        }
        else {
          $POBLACION = test_input($_POST['POBLACION']);
        } 
      }
      if (empty($_POST['PROVINCIA'])) {
        $PROVINCIAERR="Provincia es un campo obligatorio";
        $ENCUENTRAERROR=1;
      }
      else {
        if (strlen($PROVINCIA)>25) {
          $PROVINCIAERR="La provincia no puede tener mas de 25 caracteres";
          $ENCUENTRAERROR=1;
        }
        else {
          $PROVINCIA = test_input($_POST['PROVINCIA']);
        } 
      }
      if (empty($_POST['CONTRASENA'])) {
        $CONTRASENAERR="Contraseña es un campo obligatorio";
        $ENCUENTRAERROR=1;
      }
      else {
        if (strlen($CONTRASENA)>15) {
          $CONTRASENAERR="La contraseña no puede tener mas de 15 caracteres";
          $ENCUENTRAERROR=1;
        }
        else {
          $CONTRASENA = test_input($_POST['CONTRASENA']);
        } 
      }
      if (empty($_POST['DNI'])) {
        $DNIERR="DNI es un campo obligatorio";
        $ENCUENTRAERROR=1;
      }
      else {
        
        if (strlen($DNI)>9) {
          $DNIERR="El DNI no puede tener mas de 9 caracteres";
          $ENCUENTRAERROR=1;
        }
        else {
          $DNI = test_input($_POST['DNI']);
        } 
      }
      $TWITTER = test_input($_POST['TWITTER']);
     }
     function test_input($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
     }

      function mostrardatos()
      {
        $con = mysqli_connect("localhost", "root", "", "registroclientes") or die("Problemas con la conexion");
        //servername,username,password,bddname
        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          exit();
        }
        $sql = "SELECT * FROM clientes";

        $result = mysqli_query($con, $sql) or
          die("Problemas en el select:" . mysqli_error($con));

        if (mysqli_num_rows($result) > 0) {
          echo "<table class='tabla'>
          <tr>
          <th> NOMBRE </th>
          <th> APELLIDO_1 </th>
          <th> APELLIDO_2 </th>
          <th> SEXO </th>
          <th> DIRECCION </th>
          <th> CORREO </th>
          <th> TELEFONO </th>
          <th> FECHA_NACIMIENTO </th>
          <th> POBLACION </th>
          <th> PROVINCIA </th>
          <th> CONTRASENA </th>
          <th> DNI </th>
          <th> TWITTER </th>
          </tr>";

          while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>
            <td> " . $row["NOMBRE"] . "</td>
            <td> " . $row["APELLIDO_1"] . "</td>
            <td> " . $row["APELLIDO_2"] . "</td>
            <td> " . $row["SEXO"] . "</td>
            <td> " . $row["DIRECCION"] . "</td>
            <td> " . $row["CORREO"] . "</td>
            <td> " . $row["TELEFONO"] . "</td>
            <td> " . $row["FECHA_NACIMIENTO"] . "</td>
            <td> " . $row["POBLACION"] . "</td>   
            <td> " . $row["PROVINCIA"] . "</td>  
            <td> " . $row["CONTRASENA"] . "</td>  
            <td> " . $row["DNI"] . "</td>  
            <td> " . $row["TWITTER"] . "</td>    
            </tr>";
          }
        } else {
          echo "0 results";
        }
        echo "</table>";
        mysqli_close($con);
      }
      //aqui se cierra la funcion mostrardatos

      //ahora nos conectamos a la base de datos
      //comprobamos si ha encontrado algun error
     if ($ENCUENTRAERROR==1) {
      echo $NOMBREERR;
      echo $APELLIDO_1ERR;
      echo $SEXOERR;
      echo $DIRECCIONERR;
      echo $CORREOERR;
      echo $TELEFONOERR;
      echo $FECHA_NACIMIENTOERR;
      echo $POBLACIONERR;
      echo $PROVINCIAERR;
      echo $CONTRASENAERR;
      echo $DNIERR;
     }
     else {
            
      $con = mysqli_connect("localhost", "root", "", "registroclientes") or die("Problemas con la conexión");

      if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
      }
      
      $NOMBRE = $_POST['NOMBRE'];
      $APELLIDO_1 = $_POST['APELLIDO_1'];
      $APELLIDO_2 = $_POST['APELLIDO_2'];
      $SEXO = $_POST['SEXO'];
      $DIRECCION = $_POST['DIRECCION'];
      $CORREO = $_POST['CORREO'];
      $TELEFONO = $_POST['TELEFONO'];
      $FECHA_NACIMIENTO = $_POST['FECHA_NACIMIENTO'];
      $POBLACION = $_POST['POBLACION'];
      $PROVINCIA = $_POST['PROVINCIA'];
      $CONTRASENA = $_POST['CONTRASENA'];
      $DNI = $_POST['DNI'];
      $TWITTER = $_POST['TWITTER'];

      $sql = "INSERT INTO clientes (NOMBRE,APELLIDO_1,APELLIDO_2,SEXO,DIRECCION,CORREO,TELEFONO,FECHA_NACIMIENTO,POBLACION,PROVINCIA,CONTRASENA,DNI,TWITTER) 
      VALUES ('$NOMBRE', '$APELLIDO_1', '$APELLIDO_2', '$SEXO' , '$DIRECCION' ,'$CORREO','$TELEFONO','$FECHA_NACIMIENTO','$POBLACION','$PROVINCIA','$CONTRASENA','$DNI','$TWITTER')";

      if (mysqli_query($con, $sql)) {
        echo ""; //"<h4>Nuevo registro creado correctamente</h4>";
        
      } else {
        echo "Error al dar de alta al cliente: " . $sql . "<br>" . mysqli_error($con);
       
      }
      mysqli_close($con);
      //ahora llamamos a la funcion de mostrar datos, tras habernos conectado a nuestra bdd
      mostrardatos();
    }
      ?>
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