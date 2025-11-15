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
        $categories = ['programming', 'business', 'art & drawing', 'self improvement', 'history'];

        // unset($categories[3]);
        $categories[] =  'nature books';

        var_dump($categories);
        ?>
    </pre>
</body>
</html>     