<?php

$conexion =mysqli_connect('us-cdbr-east-04.cleardb.com','b3536c0cd563b4','a038bf91','heroku_a5616534128b5ae');
if(!$conexion){
    echo "error en conexion";
}
$id =$_POST['id_usuario'];
$nombre =$_POST['nombre'];
$app =$_POST['app'];
$apm =$_POST['apm'];
$email =$_POST['email'];

$query = "UPDATE usuarios SET nombre = '$nombre', app = '$app', apm = '$apm', email = '$email' WHERE id_usuario = '$id_usuario'";
$resultado = mysqli_query($conexion,$query);

if($resultado){
    echo "datos actualizados";
}else{
    echo "error en actualizacion";
}

mysqli_close($conexion);

?>