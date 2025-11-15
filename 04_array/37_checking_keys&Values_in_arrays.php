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
        var_dump($categories[3]) ;
        var_dump(empty($categories[1])) ;
        var_dump(isset($categories[1]));
        var_dump(in_array('programming', $categories));
        var_dump(in_array('german book', $categories));
        var_dump(count($categories));
        ?>
    </pre>
</body>
</html>     