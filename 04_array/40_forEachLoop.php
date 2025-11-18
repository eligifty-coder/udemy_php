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
        $categories = [
            'programming', 
            'business', 
            'art & drawing', 
            'self improvement', 
            'history'
        ];

        foreach($categories AS $category){
            var_dump($category);
            echo "\n";
            if($category === 'business'){
                echo "$\n";
                echo 'BUSINESS';
            }
        }
        ?>
    </pre>
    <ul>
        <?php foreach($categories AS $category) : ?>
            <?php echo "<li style=\" display:inline; background-color: gray; border-right:1px solid black; \" >$category </li>"; ?>
            <?php endforeach; ?>
    </ul>
</body>
</html>     