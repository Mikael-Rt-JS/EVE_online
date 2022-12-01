<?php
$zip=new ZipArchive();
$zipFile="04.zip";
$zip->open($zipFile);
//извлечь в папку
$zip->extractTo('./unzip');
$zip->close();
echo '0o0?!';
?>
<h1>Открываем(разорхивируем) Zip в PHP</h1>