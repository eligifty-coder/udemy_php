<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/simple.css">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        $str = 'PHP';
        $number = 15;
        var_dump($str);
        var_dump(is_bool($number));
        var_dump(is_string($str));
        var_dump(is_int($number));
        var_dump(is_float($number));
        var_dump(is_numeric($number));


        $entries = [
            ['title' => 'The most famous band'],
            'A classical concert',
        ];
        foreach($entries AS $entry){
            if(is_array($entry)){
                var_dump($entry['title']);
            }else{
                var_dump($entry);
            }
        }
        ?>
    </pre>
</body>
</html>