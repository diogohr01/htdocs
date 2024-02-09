<?php
//fopen - cria arquivos
$file = fopen("log.txt", "a+");

$file_content = file_get_contents("log.txt");

if($file_content){
    chmod($file_content, 0777);
}

//fwrite - escreve nos arquivos
fwrite($file, date("Y-m-d H:i:s")."\r\n");



//sempre que criar precisa ser fechado
fclose($file); 

echo "arquivo criado com sucesso";


?>