<?php
$mysqli = new mysqli("local", "root", "", "Inc");

$query = "SELECT id, name, function FROM Inc";

if ($result = $mysqli->query($query)) {

    /* извлечение ассоциативного массива */
    while ($row = $result->fetch_assoc()) {
        printf ("%s (%s)\n", $row["id"], $row["name"], $row["function"]);
    }

if( isset( $_POST['Worker'] ) ) {	
	$name = $_POST['Worker'];
	$array = json_encode($array);
	echo $array;
}