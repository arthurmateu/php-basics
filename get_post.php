<?php

// $_GET basically a global hashmap, with key/values being found on the url
// Ex: ?search=burger&page=2
//
$page = $_GET['page'];
if (isset($_GET['search'])) { // done just to show that this is the correct way to handle this kind of variable
	$searchTerm = $_GET['search'];
}
$pageLimit = 10;

echo "<h3>Searching for: {$searchTerm}</h3>";
echo "<p>You're on page {$page}</p>";

for ($i=1; $i <= $pageLimit; $i++) {
	echo "<a href=\"?search={$searchTerm}&page={$i}\">{$i}</a> ";
}



// $POST works similarly, getting the values when the user makes a HTTP POST request.
// You access them similarly: as a hashmap with key/values


?>
