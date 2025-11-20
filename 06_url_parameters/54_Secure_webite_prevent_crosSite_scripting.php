<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/simple.css" />
    <link rel="stylesheet" href="../styles/custom.css" />
    <title>Document</title>
<body>
    <?php include '../inc/xss.inc.php'?>
    <pre>
        
    </pre>

        
        <h1> <?php if(!empty($_POST['firstname'])) echo  e($_POST['firstname']); ?> </h1>
    <form action="./54_Secure_webite_prevent_crosSite_scripting.php" method="POST">
        <input type="text" name="firstname" value="<?php if(!empty($_POST['firstname'])) echo e($_POST['firstname']); ?>">
        <input type="submit" value="Submit!">
    </form>
</body>
</html>     