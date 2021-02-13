<html>


<head><title>CALCULO DEL AREA DE UN OCTAGONO REGULAR</title></head>



<body>


<?php
 if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {
$lado = $_POST['lados'];
$apotema = $_POST['apotema'];
$areaa = null;
 if(!empty($lado) or !empty($apotema)) {
 echo "<h2 align='center'>CALCULO DEL AREA DEL OCTAGONO</h2>";
 $areaa = 4*($lado)*($apotema);

 echo "<center><br><h3>Lado: " . $lado . " centimetros";
 echo "<br>Apotema: " . $apotema . " centimetros";
 echo "<br/>";
 echo "<br>Area: " . $areaa . " centimetros cuadrados</h3></center>";
 echo "<br/><br/>";
 echo "<a href='datos.html'>Regresar</a>";
 }
 }
?>
</body>



</html>