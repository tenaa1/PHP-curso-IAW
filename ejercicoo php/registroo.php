<?php




session_start();
$usuario = $_POST['usuario'];
$password = $_POST['password'];



if (isset($_SESSION['usuarios'][$usuario])) {



    echo "Usuario existente";
} else {
    $_SESSION['usuarios'][$usuario] = $password;
    echo "usuario creado";
}
?>
