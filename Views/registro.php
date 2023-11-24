<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles.css">
    <title>Registro</title>
</head>
<body>
<header>
        <div class="containerIndex">
            <img src="logo.png" alt="Logo" height="50" width="50" style="margin-right: 10px;">
            <h1>Freedom</h1>
            <nav>
                <ul>
                    <li><a href="../Index.php">Inicio</a></li>
                    <li><a href="comentarios.php">Comentarios</a></li>
                    <li><a href="registro.php">Registro</a></li>
                    <li><a href="sugerenciasVuelos.php">Sugerencias de Vuelos</a></li>
                    <li><a href="vuelos.php">Tus Vuelos</a></li>
                </ul>
            </nav>
        </div>
</header>
<main >
<div class="caja-comment">
        <h1>Registrarse</h1>
        <form class="form-register" action="registro.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="controls" required>
            <label for="apellidos">Apellido:</label>
            <input type="text" id="apellidos" name="apellidos" class="controls">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="controls" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" class="controls" required>
            <label for="fechanacimiento">Fecha de nacimiento:</label>
            <input type="date" id="fechanacimiento" name="fechanacimiento"class="controls">
            <label for="telefono">Telefono:</label>
            <input type="tel" id="telefono" name="telefono"class="controls">
            <label for="nacionalidad">Nacionalidad:</label>
            <select name="nacionalidad" id="nacionalidad"class="controls">
                <option value="Argentina">Argentina</option>
                <option value="Brasil">Brasil</option>
                <option value="Uruguay">Uruguay</option>
            </select>
            <input type="submit" class="botons" value="Registrarse">
        </form>
    </div>
    <?php
    $conexion = mysqli_connect("127.0.0.1", "root", "", "serviciodevuelos") or
        die("Problemas con la conexión");
         if (isset($_REQUEST["aerolinea"])){  

              mysqli_query($conexion, "insert into registro(nombre,apellido,email,usuario,contraseña,direccion,fechadenacimiento,telefono,nacionalidad) values 
                            ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[email]','$_REQUEST[usuario]','$_REQUEST[contraseña]','$_REQUEST[direccion]','$_REQUEST[fechadenacimiento]','$_REQUEST[telefono]','$_REQUEST[nacionalidad]')")
          or die("Problemas en el select" . mysqli_error($conexion));
         }
        $registros = mysqli_query($conexion, "select * from registro ") or
       die("Problemas en el select:" . mysqli_error($conexion));
    
    

    mysqli_close($conexion);

?>

</main>
<footer>
        <div class="containerFooter">
            <p>&copy; <?php echo date("Y"); ?> Freedom. Todos los derechos reservados.</p>
        </div>
</footer>
    <title>Freedom - Registrarse</title>
    <link rel="stylesheet" href="../Styles.css">
</head>
</html>
