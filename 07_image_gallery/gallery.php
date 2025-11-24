<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<!-- $imageTitles = [
    'IMG_4709.jpg' => 'Breathtaking Canyon Sunset',
    'IMG_1834.jpg' => 'Desert Dunes at Sunset',
    '1B1A9657.jpg' => 'Snowy Mountain Range',
    'IMG_0219.jpg' => 'Serene River and Hillside Castle',
    'IMG_0929.jpg' => 'Autumn Mountain Landscape',
    'IMG_2384.jpg' => 'Beachfront House Oasis',
]; -->

<?php include './views/header.php'; ?>

<div class="gallery_container">
<?php
$fileName = './image.php';
foreach($imageTitles AS $src => $value ):?>
<a href="<?php echo $fileName.'?'; echo http_build_query(['image' => $src]);?>" class="gallery-item">
<h3> <?php  echo e($value)?> </h3>
<img src="./images/<?php echo rawurlencode($src)?>" alt="<?php  echo $value?>">
</a>
<?php endforeach;?>
</div>








<?php include './views/footer.php'; ?>
