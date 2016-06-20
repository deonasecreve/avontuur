<?php

class Location {
    public $id;
    public $x;
    public $y;
    public $title;
    public $description;
    public $image_url;

    public $tile_filename;
    public $cleared;

    /*
     * Parameters:
     * $mysqli = an open mysqli connection
     * $x = the x of the location that you want to load from DB
     * $y = the y of the location that you want to load from DB
     *
     * Result:
     * true = loading worked
     * false = loading failed
    */
    function LoadFromDb($mysqli, $x, $y) {

        $sql = "SELECT * FROM locations WHERE x=" . $x . " AND y=" . $y . ";";
        $results = $mysqli->query($sql);

        if ( $results->num_rows == 1) {
            $record = $results->fetch_assoc();
            $this->id = $record['id'];
            $this->title = $record['title'];
            $this->image_url = $record['image'];
            $this->description = $record['description'];
            return true;
        }

        return false;
    }
}

