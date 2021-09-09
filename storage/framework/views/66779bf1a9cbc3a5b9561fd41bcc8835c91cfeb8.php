<div><div class="container-fluid mw-xl">
	<style>
		#block_607cddfe20335 {
						background: #f9f9f9;
					}
	</style>
</div></div>
<section id="block_607cddfe20335" class="content-block py-5  alignfull what-we-do bg-f9f9f9 has-font-color text-default">
	<div class="container-fluid mw-xl">
		<div class="row">
			<div class="mb-lg-3 text-center col-12">
			  <div class="label"><?php echo e($title_1); ?></div>
			  <h2 class="h2"><?php echo e($title_2); ?></h2>
			  <p class="text-base"><?php echo e($title_3); ?> </p>					
			</div>			
		</div>
		<div class="row py-md-4 mb-md-0 mt-md-0 mt-4">
		  <div class="col-12 mb-3">
			<div class="row link-box-wrap g-md-4 g-2" id="link-box-wrap">
			   <?php
			    foreach($list as $l)
				{
			   ?>
				<div class="col-md-4 link-box detailed-what text-start mb-md-0 mb-3 ww-active">
				  <div class="ser-box h-100 px-md-5 px-3 pt-md-4 pb-md-5 py-3 text-start has-bg-color background-ffffff position-relative">
					<div class="h4 text-start titillium-web"><?php echo e($l['title']); ?></div> 
					<div class="mt-2 text-base small-font"><?php echo e($l['copy']); ?></div>	
				  </div>												
				</div>
				<?php
			    }
			   ?>
			</div>
		 </div>
	  </div>
								
			</div>
	<script type="rocketlazyloadscript">
		var actContainer = document.getElementById("block_607cddfe20335");
		var btns = actContainer.getElementsByClassName("link-box");

			for (var i = 0; i < btns.length; i++) {
				btns[i].addEventListener("mouseover", function() {
					var current = document.getElementsByClassName("ww-active");
					current[0].classList.remove("ww-active");
					this.classList.add("ww-active");
				});
			}
	</script>
</section><?php /**PATH C:\bkupp\lokl\repo\fortune-3\resources\views/service-list.blade.php ENDPATH**/ ?>