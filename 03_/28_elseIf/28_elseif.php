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
        include './vars.php';
        // $serverStatus = 'ok';
        $loyaltyPoints = 7000;

        if($loyaltyPoints < 3000){
            echo '"You have fewer than 3000 Loyalty Points. No discount is available."';
        }elseif ($loyaltyPoints < 6000) {
        echo '"You can spend 3000 Loyalty Points for a discount of 5%."';
        }else{
            echo '"You can spend 6000 Loyalty Points for a discount of 15%."';
        }
        if($serverStatus === 'ok'){
            echo 'Welcome to our website! Browse and enjoy our content';
        }
        elseif($serverStatus == 'error'){
            echo 'We got a serious error right now. Please call us at +1 (234) 5678';
        }
        else{
            echo 'We\'re currently undergoing maintenance. Please check back later';
        }

        
        ?>
        
    </pre>
</body>
</html>     