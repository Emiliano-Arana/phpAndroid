<?php

$conexion =mysqli_connect('us-cdbr-east-04.cleardb.com','b3536c0cd563b4','a038bf91','heroku_a5616534128b5ae');
if(!$conexion){
    echo "error en conexion";
}

$result =array();
$result['datos'] =array();
$query = "SELECT escenariosprofesores.tipo,escenariosusuarios.calificacion FROM escenariosusuarios INNER JOIN escenariosprofesores ON escenariosusuarios.id_escenario = escenariosprofesores.id_escenario WHERE escenariosusuarios.id_usuario = 455";
$responce = mysqli_query($conexion,$query);

while($row = mysqli_fetch_array($responce)){

    $index['tipo'] =$row['0'];
    $index['calificacion'] =$row['1'];

    array_push($result['datos'],$index);
}
$result["exito"] ="1";
echo json_encode($result);

?>