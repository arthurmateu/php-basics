<?php

$name = $_POST['name'] ?? null;

if (empty(trim($name))){
	header('Location: http://localhost/basics/projects/forms/index.php');
}

echo "Hello, {$name}!";

?>
