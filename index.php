<?php
// Turns on output buffering
ob_start();
//if ($_SERVER['HTTP_HOST'] === INSERT_URL_NAME) {
//    $url = "http://www." . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//    header("Location: $url");
//}
include('config.php');
//{{{ Dissecting the URI
$ru = &$_SERVER['REQUEST_URI'];
$qmp = strpos($ru, '?');
list($path, $params) = $qmp === FALSE
    ? array($ru, NULL)
    : array(substr($ru, 0, $qmp), substr($ru, $qmp + 1));
$parts = explode('/', $path);
$i = 0;
foreach ($parts as $part) {
    if (strlen($part) && $part !== '..' && $part !== '.') {
        define('URI_PART_'.$i++, $part);
    }
}
define('URI_PARAM', isset($params) ? '' : $params);
define('URI_PARTS', $i);
define('URI_PATH', $path);
define('URI_REQUEST', $_SERVER['REQUEST_URI']);
//}}}
//{{{ Routing and other init
if(session_status() == PHP_SESSION_NONE) { session_start(); }
include DIR_SYS . '/router.php';
include DIR_SYS . '/config.routes.php';

if ($ctrl = Router::controller()) { include $ctrl; }
else { include('404.php'); }
//}}}