<?php

$order=$_POST["number"];
$directory ="C:/ФОТО/".$order."/";
$allowed_types=array("jpeg","png","gif");
$file_parts=array();
$ext="";
$title="";
$i=0;
$dir_handle=@opendir($directory) or die("Ошибка при открытие Файла");
while ($file=readdir($dir_handle)) {
  if($file =="." || $file == "..") continue;
  $file_parts=explode(".",$file);
  $ext = strtolower(array_pop($file_parts));

  if(in_array($ext,$allowed_types))
  {
    $data = file_get_contents($directory.$file);
    echo base64_encode($data);
    echo "-------------------";
    $i++;
  }
}
closedir($dir_handle);


 ?>
