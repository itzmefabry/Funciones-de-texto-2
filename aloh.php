<?php
require_once("cadenas.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Aloh</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<h2>Ingresa</h2>
<form method="POST" action="">
<link rel="stylesheet" href="class.css">
<h3>Ingresa:</h3>
NOmbre: <input type="text" name="a" id="a" style="width: 300px" required>
Fecha de nacimiento (formato AAAA-MM-DD): <input type="text" name="b" id="b" style="width: 300px" required>
<br>
<br>
<button type="submit" name="calcular">Calcular</button>

</form>


<?php
if (isset($_POST['calcular'])) {
$txt = $_POST['a'];
$fecha= $_POST['b'];





}
?>
</body>
</html>



