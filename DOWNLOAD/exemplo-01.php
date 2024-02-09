<?php
//$link = "https://drupal.ianfunghk.com/themes/bartik/logo.png";

if(isset($_POST['url'])) {
    // Obtém a URL inserida no formulário
    $link = $_POST['url'];


$content = file_get_contents($link);

//var_dump($content);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);  
}


?>
<!-- Formulário para inserir a URL da imagem -->
<form method="post" action="">
    <label for="url">Insira a URL da imagem:</label><br>
    <input type="text" id="url" name="url"><br>
    <input type="submit" value="Download">
</form>



<img src="<?=$basename?>" alt="">   

