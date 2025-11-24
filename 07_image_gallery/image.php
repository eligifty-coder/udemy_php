<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>
<!-- <?php ?> -->
<!-- <?php ?> -->
<div>
<?php
// imageDescriptions
if(!empty($_GET['image']) && !empty($imageDescriptions[$_GET['image']])) $img = $_GET['image'];
?>
<img src="./images/<?php echo $img ?>" alt="<?php echo rawurlencode($img); ?>">
<p>
    <?php
    if(!empty($_GET['image']) && !empty($imageDescriptions[$_GET['image']]))  echo e($imageDescriptions[$img])   ;
    ?>
    
</p>
</div>

<?php include './views/footer.php'; ?>
