<?php

define('DEBUG', true);
define('ROOT', dirname(__DIR__)); /* корень нашего приложения */
define('WWW', ROOT . "/public"); /* путь к публичной папке */
define('APP', ROOT . "/app"); /* путь к папке приложения APP */
define('CORE', ROOT . "/vendor/wfm"); /* путь к ядру приложения */
define('HELPERS', ROOT . "/vendor/wfm/helpers"); /* путь к помощникам */
define('CACHE', ROOT . "/tmp/cache"); /* путь к кэшу  */
define('LOGS', ROOT . "/tmp/logs"); /* путь к логам  */
define('CONFIG', __DIR__); /* путь к онфигурации приложения  */
define('LAYOUT', 'ishop'); /* имя шаблона сайта по-умолчанию  */
define('PATH', 'http://ishop.loc'); /* адрес сайта  */
define('ADMIN', 'http://ishop.loc/admin'); /* адрес админ-панели сайта  */
define('NO_IMAGE', 'uploads/no_image.jpeg'); /* путь к картинке, если картинка товара не назначена  */


require_once ROOT . "/vendor/autoload.php";

?>



