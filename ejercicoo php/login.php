<?php
$usuarios = array(
    'vicente' => 'contraseña',
    'usuario' => 'password',
);

$usuario = $_POST['usuario'];
$password = $_POST['password'];
if (isset($usuarios[$usuario]) && $usuarios[$usuario] == $password) {
    echo "Acceso permitido";


    
} else {




    echo "Acceso denegado";
}
?>
