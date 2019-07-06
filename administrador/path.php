<?php
/**
 * DEFINE la ruta de includes y archivado
 * @var unknown
 */
define('BASE_URL', 'http://localhost/comercio_generico/administrador');
define('ROOT_DIR', dirname(__FILE__));
define('ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR))));
$ruta = 'http://localhost/comercio_generico/administrador';
 