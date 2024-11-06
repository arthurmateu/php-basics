<?php

// functions. in this case, anonymous functions that can be assigned to variables.
// you can already imagine how regular functions work btw
$cool_func = function (string $first, $last = null, $separator = '_') { // also type hinting
	if ($last === null) {
		return $first;
	}
	return "{$first}{$separator}{$last}";
};

echo $cool_func('John') . '<br>';

// multiple args
$res = 0;
function addition() {
	global $res; // bring global variable into scope
	foreach (func_get_args() as $n) {
		if (!is_numeric($n)) {
			continue;
		}
		$res += $n;
	}
	return $res;
};

echo addition(1, 4, 21) . '<br>';
echo $res . '<br>'; // it will affect the global variable
echo array_sum([1, 4, 2]) . '<br>'; // sum() equivalent

?>
