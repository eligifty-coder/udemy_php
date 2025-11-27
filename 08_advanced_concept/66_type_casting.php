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
        if(isset($_GET['price'])){
            $price = (int) $_GET['price']; // type casting. converting any value we get from the $_GET into an integer
            var_dump($price);
            var_dump($price * 1.19);
        }
        if(isset($_GET['name'])){
            $name =  (string) $_GET['name'] ;
            var_dump($name . '!!!');
        }
        var_dump($_GET['name']);
        ?>
        <a href="./66_type_casting.php?<?php echo http_build_query(['name' => ['Jannis', 'Olivia']]); ?>">Link</a>
    </pre>
</body>
</html>