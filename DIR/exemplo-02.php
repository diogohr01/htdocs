<?php
$images = scandir("Images");

$data = array();
foreach($images as $img){
    if(!in_array($img, array(".",".."))){

        $filename = "Images" . DIRECTORY_SEPARATOR . $img;
        $info = pathinfo($filename);

        array_push($data, $info);
    }
}


echo json_encode($data);
?>