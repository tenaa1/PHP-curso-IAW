<!DOCTYPE html>
<html>

<head>
    <title>Página de Inicio</title>
</head>

<body>
    <h1>Página de Inicio</h1>
    <?php
    session_start();
    if (isset($_SESSION['message'])) {
        echo "<p>{$_SESSION['message']}</p>";
        unset($_SESSION['message']);
    }
    ?>
    <form action="validar.php" method="post">
        Password: <input type="password" name="password">
        <input type="submit" value="Ingresar">
    </form>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Resultado del Login</title>
</head>

<body>
    <h1>Resultado del Login</h1>
    <?php
    session_start();
    if (isset($_SESSION['message'])) {
        echo "<p>{$_SESSION['message']}</p>";
        unset($_SESSION['message']);
    }

    if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'Administrador') {
        echo "<p>Autorizado para modificar datos</p>";
        echo "<a href='data.php'>Ir a la página de Datos</a>";
    } elseif (isset($_SESSION['rol']) && $_SESSION['rol'] == 'Usuario') {
        echo "<p>Solo visualización de datos</p>";
        echo "<a href='data.php'>Ir a la página de Datos</a>";
    } else {
        echo "<p>Acceso denegado</p>";
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Página de Datos</title>
</head>

<body>
    <h1>Página de Datos</h1>
    <?php
    session_start();
    if (isset($_SESSION['message'])) {
        echo "<p>{$_SESSION['message']}</p>";
        unset($_SESSION['message']);
    }

    if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'Administrador') {
        echo "<p>Autorizado para modificar datos</p>";
    } elseif (isset($_SESSION['rol']) && $_SESSION['rol'] == 'Usuario') {
        echo "<p>Solo visualización de datos</p>";
    } else {
        echo "<p>Acceso denegado</p>";
    }
    ?>
</body>

</html>
<?php
session_start();

// Validar la contraseña
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password == 'tu_contraseña') {
        $_SESSION['message'] = "Contraseña correcta.";
        header('Location: resultado-login.php');
        exit();
    } else {
        $_SESSION['message'] = "Contraseña incorrecta. Acceso denegado.";
        header('Location: inicio.php');
        exit();
    }
}

// Validar el rol
if (isset($_GET['rol'])) {
    $rol = $_GET['rol'];
    if ($rol == 'Administrador' || $rol == 'Usuario') {
        $_SESSION['rol'] = $rol;
        header('Location: resultado-login.php');
        exit();
    } else {
        $_SESSION['message'] = "Rol no válido. Acceso denegado.";
        header('Location: resultado-login.php');
        exit();
    }
}

// Si no hay datos enviados, redireccionar a la página de inicio
header('Location: inicio.php');
exit();
?>