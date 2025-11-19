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
        var_dump(array_search('business', $categories));
        var_dump(array_slice($categories, 1,3));
        $numbers = [1,5,8,10];
        var_dump(min($numbers));
        var_dump(max($numbers));
        var_dump(array_sum($numbers));
        echo(array_sum($numbers)/count($numbers));

        $topic = ['courses', 'books'];
        $topic2 = ['tv', 'travel'];
        $out = array_merge($topic, $topic2);
        var_dump($out);
        var_dump([...$topic, ...$topic2, 'groceries']);
        $number = [10.23,2];
        echo round(...$number);
    
        ?>
    </pre>
</body>
</html>     