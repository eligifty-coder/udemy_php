<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="css/type" href="/styles/simple.css">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        require_once '../inc/xss.inc.php';
        // $courses = [
        //     'German for Beginners',
        //     'French for Beginners',
        //     'Spanish for Beginners'
        // ];

        // $coursesDesc = [
        //     'Learn basic German vocabulary, grammar, and everyday phrases.',
        //     'Master fundamental French skills including basic vocabulary and conversational techniques.',
        //     'Acquire essential Spanish vocabulary and gain proficiency in daily conversations.'
        // ];
        
        // $coursesFlags = [
        //     '🇩🇪',
        //     '🇫🇷',
        //     '🇪🇸'
        // ];
        $courses = [
            [
                'title' =>'German for Beginners',
                'desc' => 'Learn basic German vocabulary, grammar, and everyday phrases.',
                'flag' => '🇩🇪',
            ],
            
            [
                'title' => 'French for Beginners',
                'desc' => 'Master fundamental French skills including basic vocabulary and conversational techniques.',
                'flag' => '🇫🇷',
            ],

            [
                'title' => 'Spanish for Beginners',
                'desc' => 'Acquire essential Spanish vocabulary and gain proficiency in daily conversations.',
                'flag' => '🇪🇸'
            ],
        ];
        foreach($courses AS $course){
            var_dump($course['title']);
            var_dump($course['desc']);
            var_dump($course['flag']);
            echo '<br>';
        };
        foreach($courses[2] AS $value){
            var_dump($value);
            echo '<br>';
        }
        ?>
    </pre>
    <?php foreach($courses AS $course): ?>
        <details>
            <summary><?php echo e($course['flag'])?>; <summary><?php echo e($course['title'])?>; <summary> </summary>
            <p><?php echo e($course['desc'])?></p>
        </details>
    <?php endforeach;?>
</body>
</html>