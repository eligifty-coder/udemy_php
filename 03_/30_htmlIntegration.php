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
        if(!empty($pageTitle)){
            echo "<h2>Hello PHP again</h2>";
        }
        ?>
        <?php if(!empty($pageTitle)): ?>
            <h1> <span>  <?php echo $pageTitle; ?>hello </span></h1>

            <?php else: ?>
                
            <?php endif?>
    </pre>
</body>
</html>     