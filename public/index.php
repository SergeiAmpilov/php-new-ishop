<?php




if (PHP_MAJOR_VERSION) {
    die('Версия PHP не подходит. Требуется PHP 8+. Текущая используемая версия = ' . phpversion() );
}

require_once dirname(__DIR__) . "/config/init.php";

?>

<h1>Привет мир</h1>
<pre>
    <?= print_r($_GET, true) ?>
    <?= print_r(HELPERS, true) ?>
</pre>