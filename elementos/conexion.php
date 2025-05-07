<?php

function ConectarBD()
{
  $host = "mysql";
  $usuario = "root";
  $password = "1234";
  $base = "videojuegos";

  try {
    return $conn = new PDO("mysql:host=$host;dbname=$base", $usuario, $password);
    
  }
  catch(PDOException $e) {
    echo "<p style='border:2px solid red; padding: 10px; margin-top: 10px'>Error al conectarse a la base de datos</p>";
  }
}

function EscribirDatos($datos)
{
  while($registro = $datos -> fetch())
  {
    echo "<article>
      <div>" . $registro['id'] . "</div>
      <div>" . $registro['titulo'] . "</div>
      <div>" . $registro['descripcion'] . "</div>
      <div>" . $registro['categoria'] . "</div>
      <div>" . $registro['precio'] . "</div>
      <div>" . $registro['imagen'] . "</div>
    </article>";
  }
}

function LeerUnJuego($bd, $id)
{
  try
  {
    $consulta = $bd->prepare("SELECT * FROM JUEGOS WHERE id = $id");
    $consulta->execute();
    return $consulta;
  }catch(PDOException $e){
    echo "<p style='border:2px solid red; padding: 10px; margin-top: 10px'>Error al leer datos de la base de datos</p>";
  }
}

function AnyadirJuego($bd, $values)
{
  try
  {
    $sql = "INSERT INTO JUEGOS(titulo, descripcion, categoria, precio, imagen)
    VALUES ('" . $values["titulo"] . "','".$values["descripcion"]."','".$values["categoria"]."','".$values["precio"]."','".$values["imagen"]."')";
    $bd->exec($sql);
  }catch(PDOException $e){
    echo "<p style='border:2px solid red; padding: 10px; margin-top: 10px'>Error al escribir en la base de datos</p>";
    echo "$e";
  }
}

function BuscarJuegos($bd, $datos)
{
  try
  {
    $consulta = $bd->prepare("SELECT * FROM JUEGOS WHERE titulo 
    LIKE '%" .  $datos['titulo'] . "%' AND categoria LIKE '%" .  $datos['categoria'] . "%'
    ORDER BY titulo");
    $consulta->execute();
    return $consulta;
  }catch(PDOException $e){
    echo "<p style='border:2px solid red; padding: 10px; margin-top: 10px'>Error al leer datos de la base de datos</p>";
    echo $e;
  }
}
?>
