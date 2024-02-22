<?php

$pasta = "arquivos";


if(!is_dir($pasta)) mkdir($pasta, 775, true);

echo "diretorio criado com sucesso";


?>