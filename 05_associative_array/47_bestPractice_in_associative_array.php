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
            'alice in wonderland' => 'lewis carroll',
            0 => "This is book #0",
            "another book",
        ];

        var_dump($books);
        var_dump($books['0']);
        $books['0'] = "overwritten book";
        var_dump([...$books]);
        /** Don't mix associative array and normal array
        
         */
        
        ?>
    </pre>
</body>
</html>     