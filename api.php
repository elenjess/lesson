<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://dog.ceo/api/breeds/list/all");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

$list = json_decode(curl_exec($curl), TRUE);

curl_setopt($curl, CURLOPT_URL, "https://dog.ceo/api/breeds/image/random");
?>
	<ul>
		
		<? foreach ($list['message'] as $breed => $subbreeds) {
			echo "<li>$breed</li>";
			$image = json_decode(curl_exec($curl), TRUE);
				echo "<li>".$image['message']."</li>";

		};?>


	</ul>



