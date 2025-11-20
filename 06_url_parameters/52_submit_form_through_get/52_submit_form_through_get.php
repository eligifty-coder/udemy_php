<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/simple.css" />
    <link rel="stylesheet" href="../styles/custom.css" />
    <title>Document</title>
<body>
    <pre>
        <?php
        var_dump($_GET);
        ?>
    </pre>
    <?php if(!empty($_GET['book'])) :?>
        <h1><?php var_dump($_GET) ;echo $_GET['book'] ;?> </h1>
        <?php endif;?>
</body>
</html>     