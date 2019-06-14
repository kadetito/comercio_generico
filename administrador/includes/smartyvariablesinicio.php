<?php
date_default_timezone_set('Europe/Madrid');
$smarty = new Smarty;
$smarty->force_compile = true;//fuerza eliminar cache(comentar esta linea al acabar)
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
