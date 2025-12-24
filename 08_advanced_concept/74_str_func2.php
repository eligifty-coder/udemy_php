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
        require_once './70_file_inclusion/inc/function.inc.php';

        $text = "PHP, short for \"Hypertext Preprocessor\", PHP is a server-side scripting language first introduced in 1994 by Rasmus Lerdorf. Distributed under a permissive license, PHP is open-source, allowing both personal and commercial use at no cost. It's a cross-platform language, compatible with various server operating systems like Linux, Windows, and macOS, making it highly versatile. The language boasts a large and supportive community, offering an extensive range of libraries, frameworks, and online resources, which has made it a staple for developing dynamic websites and web applications. One of its significant advantages is its seamless integration with relational databases such as MySQL.\nPHP is designed with a syntax that many find user-friendly, although the ease of learning can be subjective and vary from person to person. The language allows for efficient coding; tasks like outputting text can be performed with simple commands like echo. Variables are easily declared, and PHP offers a comprehensive set of control structures, including conditional statements and loops, providing a balance between simplicity and functionality.\nWhile PHP is most commonly used for server-side web development, its capabilities extend beyond that scope. The language has evolved to include command-line scripting and even the creation of desktop applications. However, its primary utility remains in server-side scripting, making it a robust and flexible choice for everything from small websites to complex web-based applications. \n";
        var_dump(str_replace('?', '!', 'Hello World??'));
        var_dump(str_replace(['?','World'],['!','Mars'],'Hello World??'));


        $emailTemplate = "Dear [NAME],\n\nWe're excited to share with you this week's featured article:\n\n[ARTICLE]\n\nUpcoming Events:\n[EVENTS]\n\nBest regards,\nYour Friendly Team";
        $recipient = ['name' => 'Alice', 'segment' => 'Tech Enthusiast', 'email' => 'alice@example.com'];

        $segmentContent = [
            'Tech Enthusiast' => "The Latest in Tech: Top Gadgets",
            'Health Guru' => "Transform Your Lifestyle: The Best of Health and Fitness",
        ];
        $events = [
            "Webinar on Future Tech Trends", 
            "Photography Workshop", 
            "Health and Wellness Retreat"
        ];
        $eventLists = implode("\n-", $events);
        $props = $recipient['segment'];

        $personalizedEmail = str_replace("[NAME]", $recipient['name'], $emailTemplate);
        $personalizedEmail = str_replace('[ARTICLE]', $segmentContent[$props],$personalizedEmail);
        $personalizedEmail = str_replace('[EVENTS]', $eventLists, $personalizedEmail);
        echo   $personalizedEmail;
        ?>
    </pre>
    <p><?php echo nl2br(e("PHP\n is amazing !"))?> </p>
    <!-- <p> <?php echo nl2br(e($text))?> </p> -->
    <!-- <p><?php echo str_replace("\n","</p><p>", e($text))?></p> -->
    

</body>
</html>