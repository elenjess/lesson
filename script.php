<?php
	$mysqli = new  mysqli('local', 'root', '', 'family');
		if( $mysqli->connect_errno ) {
	  	$error =  "Не удалось подключиться к MySQL: " . $mysqli->connect_error;
}
//получаем результат запроса
	$res = $mysqli->query('SELECT * FROM member');
	if( $musqli->errno) {
		$error = $mysqli->error;
	}

	$member_table = [];
	while ( $row = $res->fetch_assoc() ) {
	$member_table[] = $row;
}
	$first_record = current( $member_table );
	$member_table_columns = array_keys( $first_record );

echo json_encode($member_table);