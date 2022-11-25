<?php
const PRECIO_BASE = 200;
// Vamos a usar la variable $poliza para almacenar los conceptos
$poliza["BASE"] = PRECIO_BASE;

// Extraigo del $_POST los valores que necesito del formulario.
$tomador = $_POST['tomador'];
$anoCarnet = $_POST['anoCarnet'];
$antiguedadCarnet = date("Y") - $anoCarnet;
$sexo = $_POST['sexo'];
$matricula = $_POST['matricula'];
$anoMatriculacion = $_POST['anoMatriculacion'];
$antiguedadMatriculacion = date("Y") - $anoMatriculacion;

// Con switch cambiamos los valores devueltos del formulario.
switch ($_POST['combustible']) {
	case 'E':
		$combustible = 'ELECTRICO';
		break;
	case 'G':
		$combustible = 'GASOLINA';
		break;
	case 'D':
		$combustible = 'DIESEL';
		break;
	case 'L':
		$combustible = 'GAS LICUADO';
		break;
}
switch ($_POST['modalidad']) {
	case 'B':
		$modalidad = 'BASICO';
		break;
	case 'I':
		$modalidad = 'INTERMEDIO';
		break;
	case 'T':
		$modalidad = 'TODO RIESGO';
		break;
}

// Fijamos el precio inicial.
$precio = PRECIO_BASE;

// Si el carnet tiene menos de 10 años.
if ($antiguedadCarnet < 10) {
	$poliza["Mas repetido que unos callos por la mañana"] = $precio;
	$precio = $precio * 2;
}

// Si es mujer descuento 10%.
if ($sexo == 'M') {
	$poliza["Mujer al volante, peligro constante"] = $precio;
	$precio = $precio * 0.90;
}

// Si tiene más de 10 años suma 100€.
if ($antiguedadMatriculacion > 10) {
	$poliza["Coche to hecho peazos"] = $precio;
	$precio = $precio + 100;
}

// Segun el tipo de combustible - Electrico 30% des - Diesel 30% mas.
if ($combustible == 'ELECTRICO') {
	$poliza["Amigo de Greta"] = $precio;
	$precio = $precio * 0.70;
}
if ($combustible == 'DIESEL') {
	$poliza["Enemigo publico de Greta"] = $precio;
	$precio = $precio * 1.30;
}

// Segun la modalidad del contrato - Intermedio +200€ - Todo riesgo el doble.
if ($modalidad == 'INTERMEDIO') {
	$poliza["Medio cutre"] = $precio;
	$precio = $precio + 200;
}
if ($modalidad == 'TODO RIESGO') {
	$poliza["A tutiplen"] = $precio;
	$precio = $precio * 2;
}
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tus Datos</title>
</head>
<body>

<?php
// Mostramos todos los datos de las variables anteriores generando el impreso.
echo "DATOS DE LA POLIZA";
echo "</br></br>DATOS DEL TOMADOR";
echo "</br>Tomador: " . $tomador;
echo "</br>Año de obtención del carnet: " . $anoCarnet 
	. " (antigüedad de " . $antiguedadCarnet . " años)";
echo "</br>SEXO: " . $sexo;
echo "</br></br>DATOS DEL VEHICULO";
echo "</br>Matrícula: " . $matricula;
echo "</br>Año de matriculación: " . $anoMatriculacion 
	. " (antigüedad de " . $antiguedadMatriculacion . " años)";
echo "</br>COMBUSTIBLE: " . $combustible;
echo "</br></br>MODALIDAD: " . $modalidad;
echo "</br></br><strong>" . $tomador . " el seguro para tu vehículo "
	. $matricula . " vale " . $precio . "€</strong></br></br>";
?>
	<button onclick="history.back()">OTRO SEGURO</button>



</body>
</html>