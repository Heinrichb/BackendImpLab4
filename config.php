<?php
header("Cache-Control: private, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Sat, 14 Jan 1995 05:00:00 GMT");
//{{{ Defining constant directories
define('DIR_WEB', dirname(__FILE__));
define('DIR_SYS', DIR_WEB.'/System');
define('DIR_CTRL', DIR_WEB.'/Controllers');
define('DIR_FUNC', DIR_WEB.'/Functions');
define('DIR_TMPL', DIR_WEB.'/Templates');
define('DIR_VIEW', DIR_WEB.'/Views');
define('DIR_ASSETS', '/Assets');
define('DIR_STYLES', DIR_ASSETS.'/Styles');
define('DIR_SCRIPTS', DIR_ASSETS.'/Scripts');
define('DIR_JSON', DIR_WEB.DIR_ASSETS.'/JSON');
define('DIR_IMAGES', DIR_ASSETS.'/Images');
//}}}
//{{{ Defining constants for SQL database connection
define('DB_HOST', '');
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASSWORD', '');
//}}}
//{{{ Defining mongoDB Connection
$m = new MongoClient();
$db = $m -> selectDB("lab4");
$userCol = $db -> users;
//}}}