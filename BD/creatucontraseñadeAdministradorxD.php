<!--Aqui podras crear tus contraseñas para usuario administrador-->
<?php
echo"<body>";
$str="9am3rTU%";//AQUI va la contraseña que quieres
echo($str);
echo "<br/><br/><br/><br/>";
$oregano = md5(uniqid(rand(), true));
$mix = hash('sha512', $oregano.$str);
// Guardar en base de datos el $mix y $oregano, $mix se guarda en password y oregano en oregano xD
print_r($mix);
echo "</br>";
echo "</br>";
print_r($oregano);
echo "</br>";
echo "</br>";


$password="9am3rTU%"; //simula un inicio de sesion, comprobando que cuando metas la misma cadena, funcione
if ($mix === hash('sha512', $oregano.$password))
{
	echo"Contraseña correcta";
}
else
	echo"Contraseña incorrecta";

echo"</body>";
?>

<!--Contraseñas:
1.kc5Ld@rT oregano: ae8d325f65f1c08831608fa6ab8536d8    mix: 2f80d1a9ee5050b4d0457e956323208aa74d4cce0d5d1c2c23c17f2f713135285e29c015e5bf5ae3dc3f62690f016ace9d547931510c6ce327bf5cb8542bfb7a
Esta contraseña es del usuario "administrador".
-->