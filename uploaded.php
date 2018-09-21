<<?php
$target_dir="C:/ФОТО/";
$image = $_POST["image"];
$dir = $_POST["key"];
$i = $_POST["iter"];

if(!file_exists($target_dir.$dir)){
  mkdir($target_dir.$dir,0777,true);
}
$target_dir=$target_dir.$dir."/".date("d.m.Y")."_".time()."_".$i."."."jpg";

if(file_put_contents($target_dir,base64_decode($image)))
{
  echo $target_dir;
}
else {
  echo "sorry";
}


 ?>
