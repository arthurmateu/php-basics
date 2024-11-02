<?php

// just the basics
$day_of_week = 1;

$days_of_week = [
	1 => "Monday",
	2 => "Tuesday",
	3 => "Wednesday",
];

if (in_array($day_of_week, array_keys($days_of_week))) {
	echo $days_of_week[$day_of_week];
}
echo "<br>";

// and, or
if (true && (true || false)) {
	echo "ok you get the drill i dont need to do every single one of them";
}
echo "<br>";

// basic arithmetic skipped
// loops
for ($i = 0; $i < 10; $i++) {
	if ($i > 3 && $i < 7) {
		continue;
	}
	echo "$i <br>"; 
}

echo "--- <br>";

$start = 10;
while ($start > 0) { // theres also do while but you can guess how they work
	echo "$start <br>";
	$start--;
	if ($start == 2) {
		echo "STOP!!! <br>";
		break;
	}
}

echo "--- <br>";

foreach (array_values($days_of_week) as $date) {
	echo "$date <br>";
}

?>
