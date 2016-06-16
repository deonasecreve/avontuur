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
        $res = $mysqli->query($sql);
    
        $statement->execute();

        //bind result variables
        $statement->bind_result($id, $x, $y, $title, $image, $description, $mod_health);

        // hopefully we found exactly 1 row
        if ($statement->num_rows <> 1 ) return false;

        while ($statement->fetch()) {
            $this->id = $id;
            $this->title = $title;
            $this->image_url = $image;
            $this->description = $description;
        }

        $statement->close();

        return true;
    }
}

