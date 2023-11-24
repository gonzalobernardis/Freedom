<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles.css">
    <title>Document</title>
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
        <form method="post" action="comentarios.php" class="form-register">
            <label for="nombre" >Nombre:</label>
            <input type="text" class="controls"  name="nombre" placeholder="Escribe tu nombre">

            <label for="comentario" >Comentario:</label>
            <textarea name="comentario" class="controls"  placeholder="Deja tu comentario" maxlength="500"></textarea>

            <button type="submit" class="botons">Agregar Comentario</button>
        </form>
    </div>

<div class="form-register">
    <h1 >Comentarios</h1>
<?php
    $conexion = mysqli_connect("127.0.0.1", "root", "", "serviciodevuelos") or
        die("Problemas con la conexión");


    mysqli_query($conexion, "insert into comentarios(nombre, comentario) values 
                       ('$_REQUEST[nombre]','$_REQUEST[comentario]')")
        or die("Problemas en el select" . mysqli_error($conexion));
        
        $registros = mysqli_query($conexion, "select * from comentarios ") or
       die("Problemas en el select:" . mysqli_error($conexion));
    
    
    
      while ($reg = mysqli_fetch_array($registros)) {
        echo "nombre:" . $reg['nombre'] . "<br>";
        echo "comentario:" . $reg['comentario'] . "<br>";
        echo "<br>";
      }

    mysqli_close($conexion);

?>

</div>

</main>

<footer>
        <div class="containerFooter">
            <p>&copy; <?php echo date("Y"); ?> Freedom. Todos los derechos reservados.</p>
        </div>
</footer>

</body>
</html>
