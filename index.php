<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <div class="blue-box">
        Text = Hello World
    </div>

    <?php
        $text = "Hello World";
    ?>

    <div class="content">
        <p>lenght : <?php echo strlen($text); ?></p>
        <p>No. of Words : <?php echo str_word_count($text); ?></p>
        <p>Reverse : <?php echo strrev($text); ?></p>
        <p>Position of World : <?php echo strpos($text, "World"); ?></p>
        <p>Replace World to Sina: <?php echo str_replace("World", "Sina", $text); ?></p>
    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
