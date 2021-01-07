<?php
include("conexion.php");
try {
    $cnx = DBcnx();
    $sql = "SELECT * FROM usuarios WHERE usuario = :usuario and contrasenia = :contrasenia";
    $result = $cnx->prepare($sql);
    $usuario = htmlentities(addslashes($_POST["usuario"]));
    $contrasenia = htmlentities(addslashes($_POST["contrasenia"]));
    $result->bindvalue(":usuario", $usuario);
    $result->bindvalue(":contrasenia", $contrasenia);
    $result->execute();

    $usuario_existe = $result->rowCount();

    if ($usuario_existe != 0) {
        session_start();
        $_SESSION["usuario"] = $_POST["usuario"];
        header("location:Form.php");
    } else {
        header("location:login_form.php");
    }
} catch (Exception $e) {
    die('Error al conectar a la base de datos: ' . $e->getMessage());
}
