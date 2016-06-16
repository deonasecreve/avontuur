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

// get current location from URL    (example: http://localhost/index.php?locationx=3&locationy=5)
if (isset($_GET['locationx'])) {
    $x = $_GET['locationx'];
}
else {
    $x = 1;
}

if (isset($_GET['locationy'])) {
    $y = $_GET['locationy'];
}
else {
    $y = 1;
}

// try to load the given location from the database
$mysqli = new mysqli('localhost', 'avontuur', 'avontuur', 'avontuur');
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$loc = new Location();
$was_loading_succesful = $loc->LoadFromDb($mysqli, $x, $y);

if ($was_loading_succesful == false) {
    $message = "This location does not exist in the database";
}else {
    $message = "Loading succesfull";
}

$smarty->assign('pagetitle', 'Avontuur');
$smarty->assign('message', $message);
$smarty->assign('location_object', $loc);
$smarty->display('tpl/_layout.tpl');