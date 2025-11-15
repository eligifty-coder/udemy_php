<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <title>Culinary Cove  <?php   if(!empty($pageTitle)): ?>
        &bull;
        <?php  echo $pageTitle ?>
        <?php endif ?>
</title>
</head>
<body>
    <header class="header-with-background" style="background-image: url( <?php if(!empty($headerImg)): ?> 
    <?php echo $headerImg;?>
    <?php else: ?>
        <?php echo './images/pexels-julia-volk-5273044.jpg';?>
    <?php endif; ?> ); ">
        <h1>Culinary Cove</h1>
        <p>Your sanctuary for exceptional flavors</p>
        <nav>
        <a <?php if(!empty($pageKey)  && $pageKey==='mission'): ?> class="active " <?php endif; ?>    href="our-mission.php">Our mission</a>
        <a  class=" <?php if(!empty($pageKey)  && $pageKey==='ingredients'):  ?>  active <?php endif ;?> " href="ingredients.php">Ingredients</a>
        <a  <?php if(!empty($pageKey) && $pageKey === 'menu'):  ?>    class= "active"  <?php endif; ?> href="menu.php">Our Menu</a>
        </nav>
    </header>
    <main>