<?php

//require_once('inc/MapRenderer.class.php');
require_once('inc/Location.class.php');
require_once('inc/LoadSmarty.php');
require_once('inc/ConfigureDbConnection.php');

// hold errors
$errors = [];

// make minimap
/*    $current_x = 3;
    $current_y = 5;
    $points = [];
    $map = [];
    $renderer = new MapRenderer($map, 'img', $points, $current_x, $current_y);
    //echo $renderer->MinimapHTML();
*/

// find current location in database
    //  get current location from URL
    // (example: http://localhost/index.php?locationx=3&locationy=5)
    // using short notation: $var = ( condition : value-if-true ? value-if-false );
    $location_id = (isset($_GET['location_id']) ? $_GET['location_id'] : 1);
    $loc = new Location();
    $load_location = $loc->LoadFromDb($mysqli, $location_id);
    if ($load_location == false) {
        array_push($errors, "This location does not exist in the database");
    }

// now fill smarty template and return it to browser
    $smarty->assign('pagetitle', 'Avontuur');
    $smarty->assign('errors', $errors);
    $smarty->assign('location_object', $loc);
    $smarty->display('tpl/_layout.tpl');