<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href="../../styles/simple.css">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        $text = 'PHP is amazing!';
        $texts = (__DIR__ . '/70_file_inclusion/inc/function.inc.php');
        readfile(__DIR__ . '/70_file_inclusion/inc/function.inc.php')
        // readfile, file_get_contents will not display php file to the browser
        ?>
        
    </pre>
    <h1><?php echo file_get_contents(__DIR__ . '/file.php'); //renders the php file as comments, which will not be displayed?></h1>
</body>
</html>