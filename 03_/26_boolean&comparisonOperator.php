<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <title>Document</title>
<body>
    <pre>
        <?php 
        $value = true;
        var_dump($value);
        echo "----\n";
        var_dump(true);
        var_dump(false);
        // comparison operator
        $meaning = 42;
        var_dump($meaning < 13);
        var_dump(13 <= 13);
        echo "----\n";
        $name = "Jannis";
        var_dump($name === "Jannis");
        echo "----\n ";
        var_dump($name !== "Jannis");

        // comparing types and values
        $age = '30';
        var_dump($age === 30);
        ?>
    </pre>
</body>
</html>     