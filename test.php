<?php
if( isset( $_POST['name'] ) ) {	
	$name = $_POST['name'];
	$text = 'Hi,' . $name;
	$array = ['message' => $text ];
	$array = json_encode($array);
	echo $array;
} else {
	$text = 'Paste name, please,';
	$array = ['message' => $text ];
	$array = json_encode($array);
	echo $array;
}
