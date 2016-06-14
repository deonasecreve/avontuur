<?php

require_once ('inc/MapRenderer.class.php');
require_once ('inc/Location.class.php');

// necessary for Smarty: two lines below, and inc/Autoloader.php, inc/Smarty.class.php, inc/plugins, inc/sysplugins
date_default_timezone_set('Europe/Amsterdam');
require_once ('inc/smarty/Smarty.class.php');

$current_x = 3;
$current_y = 5;
$points = [];
$map = [];

$renderer = new MapRenderer($map, 'img', $points, $current_x, $current_y);
//echo $renderer->MinimapHTML();


$smarty = new Smarty;
$smarty->assign('pagetitle', 'Avontuur');
$smarty->display('tpl/_layout.tpl');