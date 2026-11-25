<?php
$dictionary=array(
'ANDROID_TV_REMOTE_ENDPOINT'=>'Адреса API',
'ANDROID_TV_REMOTE_METHOD'=>'HTTP-метод',
'ANDROID_TV_REMOTE_TOKEN'=>'Токен доступу',
'ANDROID_TV_REMOTE_REGION'=>'Регіон / маршрут',
'ANDROID_TV_REMOTE_TRACKING'=>'Номер відправлення',
'ANDROID_TV_REMOTE_PAYLOAD'=>'Шаблон POST-запиту',
'ANDROID_TV_REMOTE_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'ANDROID_TV_REMOTE_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}