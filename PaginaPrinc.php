<?php
$conexion=mysqli_connect('localhost','root','','torneo');
$consulta="select codCharacter, nombre from characters";
$tabla=mysqli_query($conexion,$consulta) or die (mysql_error());
echo "<table>";
while ($fila=mysqli_fetch_array($consulta)) 
{
    echo "<tr>".$fila[1] . " " . $fila[2]."</tr>". "</br>";
}
echo "</table>";
?>
