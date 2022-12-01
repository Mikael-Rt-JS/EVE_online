<?php
$zip=new ZipArchive();
$zipFile="04.zip";

if($zip->open($zipFile,ZipArchive::CREATE) !== true){
  exit('Lol =_=');
}
$zip->addFile('./zip_data/data.txt');
echo $zip->filename.'<br>';//название файла зип
echo $zip->numFiles.'<br>';//количество файлов
$zip->close();
?>
<h1>Создаем Zip в PHP</h1>