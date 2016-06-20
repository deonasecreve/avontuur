<?php

require_once('inc/MapRenderer.class.php');
require_once('inc/Location.class.php');
require_once('inc/LoadSmarty.php');
require_once('inc/ConfigureDbConnection.php');

// make minimap
    $current_x = 3;
    $current_y = 5;
    $points = [];
    $map = [];
    $renderer = new MapRenderer($map, 'img', $points, $current_x, $current_y);
    //echo $renderer->MinimapHTML();

// find current location in database
    //  get current location from URL
    // (example: http://localhost/index.php?locationx=3&locationy=5)
    // using short notation: $var = ( condition : value-if-true ? value-if-false );
    $x = (isset($_GET['locationx']) ? $_GET['locationx'] : 1);
    $y = (isset($_GET['locationy']) ? $_GET['locationy'] : 1);
    $loc = new Location();
    $load_location = $loc->LoadFromDb($mysqli, $x, $y);
    if ($load_location == false) {
        $message = "This location does not exist in the database";
    }else {
        $message = "Loading succesfull";
    }

// now fill smarty template and return it to browser
    $smarty->assign('pagetitle', 'Avontuur');
    $smarty->assign('message', $message);
    $smarty->assign('location_object', $loc);
    $smarty->display('tpl/_layout.tpl');