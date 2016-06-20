<!doctype html>
<html>
<head>
    <title>Grid example</title>
    <link href="css/grid.css" rel="stylesheet" type="text/css">
</head>
<body>


<?php

require_once 'inc/Location.class.php';


function HasLocation($locations, $x, $y) {
    $found = false;

    foreach ($locations as $location) {
        if ( $location->x == $x & $location->y == $y ) $found = true;
    }

    return $found;
}

// maak een array
$locations = [];

// maak een nieuwe location en bewaar deze in de array
$l1 = new Location();
$l1->x = 5;
$l1->y = 3;
array_push($locations, $l1);

// maak nog een nieuwe location en bewaar deze in de array
$l2 = new Location();
$l2->x = 8;
$l2->y = 13;
array_push($locations, $l2);


// for:  $variabele = beginwaarde ;  doorgaan-zolang ; ophoog-actie
for ($rij = 1; $rij <= 18; $rij++) {
    echo '<div class="row">' . PHP_EOL;
    for ($x = 1; $x <= 18; $x++) {
        $active_class = "";
        if ( HasLocation($locations, $rij, $x) == true) $active_class=" active";
        echo '<div class="cell' . $active_class . '">' . $x . '</div>' . PHP_EOL;
    }
    echo '</div>' . PHP_EOL;
}
?>

</body>
</html>
