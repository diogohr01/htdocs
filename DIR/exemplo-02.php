<?php
$images = scandir("Images");

$data = array();


foreach($images as $img){
    if(!in_array($img, array(".",".."))){

        $filename = "Images" . DIRECTORY_SEPARATOR . $img;
        $info = pathinfo($filename);

        $info["size"] =  filesize($filename);
        $info["modified"] = date("Y-m-d H:i:s", filemtime($filename));
        
        $info["url"] = "http://localhost/DIR/" . str_replace("\\", "", $filename);     
      // $info["url"] = preg_replace('#\\\\+#', '', $info["url"]);
        //$info["url"] = stripslashes($info["url"]);
        $json_info = json_encode($info, JSON_UNESCAPED_SLASHES);        
        array_push($data, $info);
        
    }
}

echo json_encode($data);
?>