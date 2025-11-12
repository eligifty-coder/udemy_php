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
        include './vars.php';
        // $serverStatus = 'ok';
        
        if($serverStatus === 'ok'){
            echo 'Welcome to our website! Browse and enjoy our content';
        }
        if($serverStatus === 'maintenance'){
            echo 'We\'re currently undergoing maintenance. Please check back later';
        }
        ?>
    </pre>
</body>
</html>     