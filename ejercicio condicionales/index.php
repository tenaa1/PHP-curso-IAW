<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio php</title>
</head>
<body>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso PHP</title>
</head>
<body>
    <h1>Primer uso de php</h1>

    <!-- CONDICIONALES-->
    <h2>Condicional if - else</h2>
        <?php
        $password = 'cone';
        
        //sintaxis de comparacion <=, <, >, >=, ==
        if($password == 'cone'){
            echo '<h3 style="color:green">contraseña correcta <a href="resultado-login.php">Siguiente página</a></h3>';
        }
        else{
            echo '<h3 style="color:red">contraseña incorrecta</h3>';
        }
        ?>

</body>
</html>