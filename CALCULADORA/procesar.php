<html>
<tittle>
</tittle>
<body style="background: #CAD154">
<?php
$Numero1=$_POST['NumeroUno'];
$Numero2=$_POST['NumeroDos'];

$Suma=$Numero1+$Numero2;
echo "<div align='center'> SUMA=$Suma </div><br>";

$Resta=$Numero1-$Numero2;
echo "<div align='center'> RESTA=$Resta </div><br>";

$Multiplicacion=$Numero1*$Numero2;
echo "<div align='center'> MULTIPLICACION=$Multiplicacion </div><br>";

$Division=$Numero1/$Numero2;
echo "<div align='center'> DIVISION=$Division </div><br>";
?>
</body>
</html>