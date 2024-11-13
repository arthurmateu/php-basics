<?php

$quotes = [
    [
        'author' => 'Kanye West',
        'text' => 'George Bush doesn\'t care about black people. '
    ],

    [
        'author' => 'DJ Khaled',
        'text' => 'Tell \'em to bring out the lobster '
    ],

    [
        'author' => 'Fivio Foreign',
        'text' => 'Shittin\', poopin\''
    ],

    [
        'author' => 'Lil Wayne',
        'text' => 'My bitch got an apple bottom and she swallow my seeds'
    ],

    [
        'author' => 'Doechii',
        'text' => 'I\'ll air this bitch out like a queef'
    ]
];


// $quote = $quotes[rand(0, count($quotes)-1)];
$quote = $quotes[array_rand($quotes)];

$quoteText = $quote['text'];
$quoteAuthor = $quote['author'];

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>random quotes</title>
</head>
<body>
    <blockquote>
        <h2>&ldquo;<?php echo $quoteText; ?>&rdquo;</h2>
        <strong>- <?php echo $quoteAuthor ?></strong>
    </blockquote>
</body>
</html>
