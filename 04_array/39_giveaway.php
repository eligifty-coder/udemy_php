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
            'williams miller'
        ];
        $num = count($names);
        $choice = rand(0, $num - 1);
        var_dump($names[$choice]);
        ?>
    </pre>
</body>
</html>     