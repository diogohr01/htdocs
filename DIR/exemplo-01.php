<?php

$name = "Images";

if (!is_dir($name)) {
    mkdir($name, 0777, true);
    echo "Diretório $name criado com sucesso";
} else {
    
    echo "Já existe diretório";
}

if (dir($name)) {

chmod($name, 0777);
}
?>