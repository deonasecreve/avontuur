<?php

require_once 'Location.class.php';

class MapRenderer {

    public $map;
    public $pointsofinterest;
    public $currentx;
    public $currenty;

    // settings
    public $color_poi;
    public $color_currentpos;
    public $color_cleared;

    /*
     * $map = array of Location objects;
     * $imagefolder = folder where images can be found.
     */

    function __construct($map, $imagefolder, $pointofinterest, $currentx, $currenty) {

    }

    function MinimapHTML() {
        $minimap = '';

        // todo: create minimap html

        return '<div class="minimap">' . $minimap . '</div>';
    }


    function BigmapHTML() {
        $minimap = '';

        // todo: create minimap html

        return '<div class="minimap">' . $minimap . '</div>';
    }

}