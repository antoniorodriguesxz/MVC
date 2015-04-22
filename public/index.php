<?php
require_once '../app/init.php';

/* *
Error Report - https://github.com/filp/whoops */
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
/* */



/* Init APP*/
$app = new App();

