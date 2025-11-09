<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/simple.css" />
    <title>Document</title>
</head>
<body>
    <pre>
        <?php 
        $greeting = "I'm learning PHP!";
        $name = 'Jannis';
        $subject = 'PHP';
        echo "$greeting!";
        echo "{$greeting}! <br>";
        echo "I'm {$name} and I'm learning {$subject} <br>";
        echo 'I\'m {$name} and I\'m learning {$subject}';
        echo "\n";
        echo "\t";
        echo "--";
    ?></pre>
    <p>First line of text. <?php echo '<br>';?> A second line of text</p>
    <p>First line of text. <?php echo "\n";?>A second line of text</p>
    <p>First line of text. <?php echo "\t";?>A second line of text</p>
</body>
</html>