<?php

require_once ('inc/MapRenderer.class.php');
require_once ('inc/Location.class.php');
require_once ('inc/LoadSmarty.php');


$current_x = 3;
$current_y = 5;
$points = [];
$map = [];

$renderer = new MapRenderer($map, 'img', $points, $current_x, $current_y);
//echo $renderer->MinimapHTML();



$smarty->assign('pagetitle', 'Avontuur');
$smarty->display('tpl/_layout.tpl');