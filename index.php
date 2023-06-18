<?php 
  $nombre = "UTU Solymar"; 
  $edad = 13;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombre $edad?></title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>

<?php
    

   echo "
    <h1>Estamos en Debian!!</h1>
    <h2>Nuestro primer proyecto con Debian y Git</h2>
    <h3>Bienvenidos a $nombre</h3>

    <ul>
        <b><li>Instalamos GIT</li></b>
        <li>Configuramos el nombre del usuario</li>
        <li>Configuramos el correo del usuario</li> <br><br>
        <input type='button' value='Apretame!'>
        
    </ul>";

?>


</body>
</html>
