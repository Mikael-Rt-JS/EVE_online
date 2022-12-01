<?php
echo 'дерево документа\директория: '.$_SERVER['DOUCMENT_ROOT'].'<br>';
echo '???data_используется для парсинга: '.$_SERVER['HTTP_ACCEPT'].'<br>';
echo 'язык\предпочтительный клиента касательно клиента язык: '.$_SERVER['HTTP_ACCEPT_LANGUAGE'].'<br>';
echo 'получение хоста: '.$_SERVER['HTTP_HOST'].'<br>';
echo 'реферер\адресс с которого к нам пришёл посетитель: '.$_SERVER['HTTP_REFERER'].'<br>';
echo 'данные о браузере и ОС(операционай системы) клиента: '.$_SERVER['HTTP_USER_AGENT'].'<br>';

echo 'IP adress клиента: '.$_SERVER['REMOTE_ADDR'].'<br>';
echo 'прямой(абсолютный) путь к нашему файлу: '.$_SERVER['SCRIPT_FILENAME'].'<br>';
echo 'хранится имя сервера\ домен: '.$_SERVER['SERVER_NAME'].'<br>';
echo 'запросы\метод запроса: '.$_SERVER['REQUEST_METHOD'].'<br>';

echo 'получение данных с запроса: '.$_SERVER['QUERY_STRING'].'<br>';
echo 'содержит имя скрипта включая параметры: '.$_SERVER['REQUEST_URI'].'<br>';

echo "<hr>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

?>