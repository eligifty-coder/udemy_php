<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/simple.css">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        $name =  @ (string) ($_GET['name']?? '...'); //type casting

        var_dump($name);
        ?>
        <a href="./66_type_casting.php?<?php echo http_build_query(['name' => ['Jannis', 'Olivia']]); ?>">Link</a>
    </pre>
</body>
</html>