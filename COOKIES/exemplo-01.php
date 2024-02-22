<?php

$data = array(

    "name" => "Diogo"
);

setcookie("NOME_DO_COOKIE",json_encode($data), time() + 3600); 

echo "Ok";


?>