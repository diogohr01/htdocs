<?php
$count = 1;

if (!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) {
    if (!in_array($item, array(".", ".."))) {
        //APAGA OS ARQUIVOS DENTRO DO DIRETORIO
        //unlink("images/".$item);
        $filePath =  "images/" . $item;
        if (is_file($filePath)) {
            echo $count .".". "images/" . $item . ": arquivo tá ai" . "<br>";
            $count++;
        } else {
            echo $count."." . "arquivo apagado com sucesso"."<br>";
            $count++;
        }
    }




    /*$files_remaining = array_diff(scandir("images"), array(".", ".."));
foreach($files_remaining as $file){
    $filePath = "images/" . $item;
if (is_file($filePath)) {
   
        
        echo $count . ". " . "arquivo criado com sucesso" . "<br>";
        $count++;
    
} else {
    echo $count . ". " . "Todos os arquivos foram apagados com sucesso." . "<br>";
    $count++;
}
}
*/
}
