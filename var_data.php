<?php
// note: im using xampp

$cool_number = 21; // int
$cool_word = "hamburger"; // string

echo $text = "I like " . $cool_word . "s and find the number " . $cool_number . " cool!";
echo "<br>"; // \n equivalent (since its being rendered into a web server)

$cool_bool = true; // bool
$cool_array = ["ice cream", "cake", "pretzel"]; // array

$cool_array[] = "fish"; // appending to array

echo $cool_array[1]; // accessing element in array
echo "<br>";

$cooler_array = [
	[
		"fish" => "salmon", // works as dicts in python, with k>v
		"name" => "john"
	],
	["fish" => "tuna"],
];

echo "<pre>", var_dump($cooler_array), "</pre>"; // neatly formats values inside "dict"
echo "<br>";

foreach ($cooler_array as $cur_fish) { // yup its pretty ugly
	var_dump($cur_fish);
	echo "<br><br>";
}

$cooler_array[] = [ // append dict also
	"fish" => "octopus, actually",
	"name" => "jack"
];

$cooler_array[2]["name"] = "jackson"; // modifying values

echo "<pre>", var_dump($cooler_array), "</pre>";

unset($cooler_array); // turn to null

echo "I'd like to order $cool_number {$cool_word}s"// fstrings. note how you don't need the curly braces, but its better to include them.

?>
