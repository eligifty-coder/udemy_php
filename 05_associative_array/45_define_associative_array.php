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
        $books = [
            'harry potter' => 'j.k rowling',
            'lord of the rings' => 'j.r.r tolkien',
            'the little prince' => 'antoine de saint-exupery',
            'don quixote' => 'miguel de cervantes',
            'alice in wonderland' => 'lewis carroll'
        ];

        var_dump($books);
        var_dump(isset($books['harry potter']));
        var_dump(empty($books['harry potter']));
        $key = 'lord of the rings';
        var_dump($books[$key]);
        ?>
    </pre>
</body>
</html>     