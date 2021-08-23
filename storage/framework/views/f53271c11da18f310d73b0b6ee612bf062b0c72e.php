<?php
$title = "Welcome";
$pcClass = "";
?>



<?php $__env->startSection('title',"Welcome"); ?>


<?php $__env->startSection('includes'); ?>
<link rel="preload" as="image" href="images/Amsive-Hero-02.jpg.webp"   media="(min-width:768px)">
<link rel="preload" as="image" href="images/Amsive-Hero-02-mobile.jpg.webp" media="(max-width:767.98px)">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bodyClass',"page-home-page noawesome hashero-video hashero"); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\fortune-3\resources\views/index.blade.php ENDPATH**/ ?>