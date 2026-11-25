<?php
$dictionary=array(
'ANDROID_TV_REMOTE_ENDPOINT'=>'API endpoint',
'ANDROID_TV_REMOTE_METHOD'=>'HTTP method',
'ANDROID_TV_REMOTE_TOKEN'=>'Access token',
'ANDROID_TV_REMOTE_REGION'=>'Region / route',
'ANDROID_TV_REMOTE_TRACKING'=>'Tracking number',
'ANDROID_TV_REMOTE_PAYLOAD'=>'POST payload template',
'ANDROID_TV_REMOTE_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'ANDROID_TV_REMOTE_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}