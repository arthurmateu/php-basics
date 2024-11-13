<?php

require 'directoryreader.php';

$images = directoryreader('images');

if (!$images) {
	die('Could not load files!');
}

var_dump($images);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>
<body>
    <?php foreach($images as $image): ?>
        <img src="<?php echo $image?>">
    <?php endforeach; ?>
</body>
</html>
