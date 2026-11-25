<?php
$dictionary=array(
'ANDROID_TV_REMOTE_ENDPOINT'=>'Адрес API',
'ANDROID_TV_REMOTE_METHOD'=>'HTTP-метод',
'ANDROID_TV_REMOTE_TOKEN'=>'Токен доступа',
'ANDROID_TV_REMOTE_REGION'=>'Регион / маршрут',
'ANDROID_TV_REMOTE_TRACKING'=>'Номер отправления',
'ANDROID_TV_REMOTE_PAYLOAD'=>'Шаблон POST-запроса',
'ANDROID_TV_REMOTE_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'ANDROID_TV_REMOTE_LAST'=>'Последний результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}