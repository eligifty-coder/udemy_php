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
            // if($category !== 'business'){
            //     if($category !== 'art & drawing'){
            //         echo $category;
            //         echo "\n";
            //     }
            // }
            // this can be written with the AND logic operator
            // if($category !== 'business' && $category !== 'art & drawing'){
            //     echo "\n";
            //     echo $category;
            //         echo "\n";
            // }

            // or written this way
            if($category === 'business') continue;
            if($category === 'art & drawing') continue;

            if($category === 'self improvement') break;
            var_dump($category) ;
        }
        ?>
    </pre>
</body>
</html>     