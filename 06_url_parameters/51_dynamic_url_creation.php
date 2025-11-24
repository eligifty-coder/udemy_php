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
        <!-- <a href="51_dynamic_url_creation.php?book=Harry Potter"> Harry Potter</a>
        <a href="51_dynamic_url_creation.php?book=Beauty & the Beast"> Beauty & the Beast</a> -->
        <a href="51_dynamic_url_creation.php?<?php echo http_build_query(['book'=> 'harry potter']);?>" class="gallery-item"> Harry Potter</a>
        <a href="51_dynamic_url_creation.php?<?php echo http_build_query(['book'=> 'beauty & the beast']);?>"> Harry Potter</a>
    </pre>
</body>
</html>     