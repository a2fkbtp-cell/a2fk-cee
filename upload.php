<?php

$uploadDir = "uploads/";

if(!file_exists($uploadDir)){
    mkdir($uploadDir,0755,true);
}

$links=[];

foreach($_FILES['documents']['tmp_name'] as $key=>$tmp){

$name = basename($_FILES['documents']['name'][$key]);

$file = $uploadDir.time()."_".$name;

move_uploaded_file($tmp,$file);

$links[]="https://a2fk.fr/".$file;

}

$message="Nouveau dossier client\n\n";

$message.="Nom : ".$_POST['nom']."\n";
$message.="Email : ".$_POST['email']."\n";
$message.="Tel : ".$_POST['tel']."\n";
$message.="Société : ".$_POST['company']."\n";
$message.="SIRET : ".$_POST['siret']."\n\n";

$message.="Documents :\n";

foreach($links as $l){
$message.=$l."\n";
}

mail(
"contact@a2fk.fr",
"Nouveau dossier client",
$message
);

echo "OK";
