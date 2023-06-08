<?php 
$bad_word = $_GET['bad_word'] ?? '';
$text = $_GET['text'] ?? '';
$censored_text = str_replace($bad_word, '***', $text);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>RESULT</h1>
    <p>
        <?= $censored_text ?>
    </p>
    <h4>
        <?= $bad_word ?>
    </h4>
</body>
</html>