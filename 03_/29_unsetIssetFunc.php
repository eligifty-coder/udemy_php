<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <title>Document</title>
    <style>
        h2{
            width: 30rem;
            height: 10rem;
            background: red ;
        }
    </style>
</head>
<body>
    <pre>
        <?php 
        $pageTitle = 'PHP is amazing!!';
        // $pageTitle = '0';
        echo isset($pageTitle). "\n";
        var_dump(isset($pageTitle));
        if(isset($pageTitle)){
            echo "<h2>{$pageTitle}</h2>";
        }
        var_dump(empty($pageTitle));
        if(!empty($pageTitle)){
            echo "<h2>Hello PHP again</h2>";
        }
        unset($pageTitle);
        echo "<h2>{$pageTitle}</h2>";
        ?>
        <!-- unset completely remove variable -->
    </pre>
</body>
</html>     