<?php
include ('conexion.php');
$cnx = DBCnx();

$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$link = $_POST['link'];
$etiqueta = $_POST['etiqueta'];

$nombreArchivo = $_FILES['imagen']['name'];
$imagenSubida = $_FILES['imagen']['tmp_name'];
$ruta = 'image/img-blog';

$ruta = $ruta."/".$nombreArchivo;
move_uploaded_file($imagenSubida,$ruta);

try{

   
    $sql = "INSERT INTO `card`(`titulo`, `contenido`, `link`, `etiqueta`, `ruta`)
    VALUES (:titulo,:contenido,:link,:etiqueta,:ruta)";
    $result = $cnx->prepare($sql);
    $result->bindValue(":titulo",$titulo);
    $result->bindValue(":contenido",$contenido);
    $result->bindValue(":link",$link);
    $result->bindValue(":etiqueta",$etiqueta);
    $result->bindValue(":ruta",$ruta);
    $result->execute();

    if($result){
        header("location:index.php");
    }
    else{
        header("location:Form.php");
    }

}catch(Exception $ex){
    echo"error".$ex;
}
