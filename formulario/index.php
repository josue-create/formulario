<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularios y estructuras de datos en PHP</title>
  </head>
  <body>
<h1>Formulario</h1>
  <form method="POST">
    <h2 class = "form-signin-heading"><?php echo $msg; ?></h2>
	   <label for="nombre">Nombre:</label>
	   <input  type="text" name="nombre" placeholder="Nombre y Apellido" />
	   <label for="correo">Email:</label>
	   <input  type="email" name="correo" placeholder="ejemplo @correo.com"/>
	   <label for="Quejas">Quejas:</label>
	   <textarea name="Quejas" placeholder="Quejas..."></textarea>
	   <input type="submit" name="submit" value="Enviar" />
     <br>
     <br>
	</form>
<h2>Datos del servidor</h2>
  <?php
  $msg = '';

  foreach($nombre=>$correo)
  {
  $_POST['nombre']=$nombre;
   $_POST['correo']=$correo;
   $_POST['quejas']=$quejas;

    $preferencias=ray();
    $preferencias["nombre: "]=$nombre ;
  $preferencias["correo:"]=$correo;
    $preferencias["Quejas: " ]=$Quejas;

    $preferencias = array();
    $preferencias['nombre'] = $nombre;
    $preferencias['correo'] = $correo;
    $preferencias["Quejas: " ]=$Quejas;
    // codificamos en json
    $json = json_encode($preferencias);

    // guardamos en un archivo
    $archivo = "preferencias.js";
    file_put_contents($archivo, $json);
  ?>
  </body>
</html>
