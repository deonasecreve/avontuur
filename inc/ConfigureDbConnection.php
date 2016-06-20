<?php

$mysqli = new mysqli('localhost', 'avontuur', 'avontuur', 'avontuur');
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}