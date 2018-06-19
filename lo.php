<?php
	$two = [];
	$three = [];
	$five = [];
	for ($i=1 ; $i < 100 ; $i++); {
		if ($i % 2 == 0) {
			$two[] = $i;
		};
		echo "Кратные двум <br />";
		print_r($two);
		if ($i % 3 == 0) {
			$three[] = $i;
		};
		echo "Кратные трем <br />";
		print_r($three);
		if ($i % 5 == 0) {
			$five[] = $i;
		};
		echo "Кратные пяти <br />";
		print_r($five);
?>