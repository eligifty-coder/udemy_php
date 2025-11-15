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
        $categories = array('programming', 'business', 'art & drawing', 'self improvement', 'history');
        
        $categories = ['programming', 'business', 'art & drawing', 'self improvement', 'history'];

        // echo $categories;
        var_dump($categories);
        echo ($categories[0]) . "\n \n";
        echo ($categories[3]) . "\n";

        $firstCategory = $categories[2] ;
        echo $firstCategory
        ?>
    </pre>
</body>
</html>     