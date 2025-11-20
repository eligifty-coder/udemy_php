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
        var_dump($_POST);
        ?>
    </pre>


    <form action="./53_submit_form_through_post.php" method="POST">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" value="Login!">
    </form>
</body>
</html>     