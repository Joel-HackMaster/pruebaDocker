<html>
<head>
<title>Sistema de números aleatorios</title>
</head>
<body>
<h1>Sistema de números aleatorios</h1>
<p>Ingresa un número de registro y presiona el botón para generar un número al azar entre 1 y 1000 y mostrar su información.</p>
<form method="post">
<input type="submit" value="Generar">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = random_int(1, 1000);
    
}

if ($numero % 2 == 0) {
  $divisible_por_2 = "SI";
} else {
  $divisible_por_2 = "NO";
}

if ($numero % 3 == 0) {
  $divisible_por_3 = "SI";
} else {
  $divisible_por_3 = "NO";
}

function sumar_digitos($numero) {
  $suma = 0;
  $cadena = strval($numero);
  for ($i = 0; $i < strlen($cadena); $i++) {
    $digito = intval($cadena[$i]);
    $suma += $digito;
  }
  return $suma;
}

$suma_digitos = sumar_digitos($numero);

$cantidad_digitos = strlen(strval($numero));

echo "<table border=\"1\">";
echo "<tr>";
echo "<th>N°</th>";
echo "<th>NÚMERO</th>";
echo "<th>DIVISIBLE POR 2</th>";
echo "<th>DIVISIBLE POR 3</th>";
echo "<th>SUMA DE DÍGITOS</th>";
echo "<th>CANTIDAD DE DÍGITOS</th>";
echo "</tr>";
echo "<tr>";
echo "<td>"."1"."</td>";
echo "<td>".$numero."</td>";
echo "<td>".$divisible_por_2."</td>";
echo "<td>".$divisible_por_3."</td>";
echo "<td>".$suma_digitos."</td>";
echo "<td>".$cantidad_digitos."</td>";
echo "</tr>";
echo "</table>";
echo "<h1 style='color: Red; text_alight: center;'>Profesor este taller y el avance lo realice solo FFF por mis compañeros.</h1>";
?>
</body>
</html>
