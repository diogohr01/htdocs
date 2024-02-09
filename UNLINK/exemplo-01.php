<?php


$file = fopen("teste.txt", "a+");

$file_content = file_get_contents("teste.txt");


fwrite($file, "Diogo loco 2024");
fclose($file);

 unlink("teste.txt");

if(file_exists("teste.txt")){

    echo "arquivo criado com sucesso";
}else{
    echo "arquivo excluido com sucesso";
}
?>
