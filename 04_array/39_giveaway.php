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
        $names = [
            'emily johnson',
            'michael smith',
            'sarah williams',
            'james brown',
            'jennifer davis',
            'williams miller',
            'williams miller',
            'williams miller',
        ];
        // array_unique creates a new array
        $names = array_unique($names);
        sort($names);
        var_dump($names);

        ?>
    </pre>
</body>
</html>     