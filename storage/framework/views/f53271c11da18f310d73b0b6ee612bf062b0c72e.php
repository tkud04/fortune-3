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

<div>
<div class="container-fluid mw-xl"></div>
</div>

<section id="block_605b0968f7c58" class="content-block py-5  alignfull three-featured has-font-color text-default">
	<div class="container-fluid mw-xl">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-lg-6 mb-lg-3">
						<div class="label">WHAT WE DO</div>
							<h2 class="display-2 mb-4">We solve digital challenges.</h2>
							<p class="pe-xl-5 me-xl-4 mb-4 text-base">Together, we help our clients achieve tangible, measurable results. Focused on business outcomes — we bring a unique set of expertise and skills to the party.</p>						
					</div>
					<div class="col-lg-6">
					 <?php
					  $services = [
					   ['img' => "images/homepage_icons_audience.svg",'title' => "Better audiences.",'text' => "Our proprietary XactAudience solution leverages an in-house database of 260M+ customers and 2,000+ custom variables to build custom predictive models to drive business growth — from only the best customers."],
					   ['img' => "images/homepage_icons_persona.svg",'title' => "Better analytics.",'text' => "We think beyond just data reporting to deliver real-time insights with enterprise toolsets to turn data points into actionable opportunities."],
					   ['img' => "images/homepage_icons_strategy.svg",'title' => "Better outcomes.",'text' => "We drive successful results — and then amplify them with holistic strategy, robust tactical solutions, and performance-driven creative."],
					  ];
					  
					  foreach($services as $s)
					  {
					 ?>
						<div class="row link-box-wrap py-3">
							<div class="col-xl-2 col-md-3">
								<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" class="mb-3" alt="<?php echo e($s['title']); ?>" data-lazy-src="<?php echo e($s['img']); ?>" />
								<noscript><img src="<?php echo e($s['img']); ?>" class="mb-3" alt="<?php echo e($s['title']); ?>" /></noscript>												
							</div>
							<div class="col-xl-10 col-md-9">										
								<div class="h4 mb-3 text-primary"><?php echo e($s['title']); ?></div>
								<div class="small-font text-base"><?php echo e($s['text']); ?></div>
							</div>
						</div>
					  <?php
					  }
					  ?>
					</div>
				</div>
			</div>			
		</div>				
 	</div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\fortune-3\resources\views/index.blade.php ENDPATH**/ ?>