<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Multiplied By 5</title>
</head>
<body>
	<?php
		function multiply($array_of_numbers, $multiplier){
			foreach ($array_of_numbers as $key => $value) {
				$value *= $multiplier;
				$new_array_of_numbers[$key] = $value;
			}
			return $new_array_of_numbers;
		}

		$numbers = [10,20,50,80];

		$new_numbers = multiply($numbers, 5);

		var_dump($new_numbers);

	?>
</body>
</html>