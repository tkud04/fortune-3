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
					  $s1 = [
					   ['img' => "images/homepage_icons_audience.svg",'title' => "Data-driven research",'text' => "We build brands through research! Goral specializes in data-centric research for advertising, branding and content marketing initiatives (PR)"],
					   ['img' => "images/homepage_icons_persona.svg",'title' => "We solve marketing challenges.",'text' => "We think beyond just data reporting to deliver real-time insights with enterprise toolsets to turn data points into actionable opportunities."],
					   ['img' => "images/homepage_icons_strategy.svg",'title' => "Better outcomes.",'text' => "We drive successful results — and then amplify them with holistic strategy, robust tactical solutions, and performance-driven creative."],
					  ];
					  
					  foreach($s1 as $s)
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

<div>
  <div class="container-fluid mw-xl">
    <style>
		#block_6039a30e274c4 {
		  background: #420045;
		}
	</style>
  </div>
</div>

<section id="block_6039a30e274c4" class="content-block py-5  alignfull mb-md-0 what-we-do bg-420045 dark-mode has-font-color text-default">	
  <div class="container-fluid mw-xl">
		<div class="row">
			<div class="mb-lg-3 col-lg-8">
			  <div class="label">OUR CAPABILITIES</div>
			  <h2 class="h2">Data-driven, customer-centric digital services.</h2>								
			</div>			
		</div>
		<div class="row py-md-4 mb-md-0 mt-md-0 mt-4">
			<div class="col-12 mb-3">
			  <div class="row link-box-wrap g-md-4 g-2" id="link-box-wrap">
			  <?php
					  $s2 = [
					   ['href' => "javascript:void(0)",'title' => "Paid Media",'text' => "Craft campaigns — built just for your business — to ensure real and quantifiable ROI."],
					   ['href' => "javascript:void(0)",'title' => "SEO",'text' => "Gain and maintain your best spot on the search results page, so you can find new customers and re-engage loyal ones."],
					   ['href' => "javascript:void(0)",'title' => "Social",'text' => "Drive discovery, build your digital community, and increase ROAS with scalable paid, organic, and influencer strategies."],
					   ['href' => "javascript:void(0)",'title' => "Performance Creative",'text' => "Blend art and science to build high-impact creative campaigns that are tailor-made for your target audience — and achieve the best results."],
					   ['href' => "javascript:void(0)",'title' => "Data + Analytics Solutions",'text' => "Leverage the power of leading consumer data providers and analytics technologies for confident, strategic decision-making."],
					   ['href' => "javascript:void(0)",'title' => "Strategy",'text' => "Build comprehensive go-to-market strategies for performance brands with clear-sighted digital KPIs."],
					   ];
					  
					  foreach($s2 as $s)
					  {
					 ?>
				<div class="col-md-4 link-box detailed-what text-start mb-md-0 mb-3 ww-active">
					<a class="long-arrow" href="<?php echo e($s['href']); ?>" target="_self">
																									<div class="ser-box h-100 px-md-5 px-3 pt-md-4 pb-md-5 py-3 text-start has-bg-color background-ffffff position-relative">
																						<div class="h4 text-start titillium-web"><?php echo e($s['title']); ?></div> 
																																		<div class="mt-2 text-base small-font"><?php echo e($s['text']); ?></div> 
																						
																						
											<div class="see-me"><span class="svg-circle"><svg width="36px" height="36px" viewBox="0 0 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
												<defs>
													<polygon id="path-1" points="18 12.6666667 17.06 13.6066667 20.78 17.3333333 12.6666667 17.3333333 12.6666667 18.6666667 20.78 18.6666667 17.06 22.3933333 18 23.3333333 23.3333333 18"></polygon>
												</defs>
												<g id="Assets-/-0-Generic-/-icon_generic_circle_arrow_off" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<mask class="mask-2" fill="white">
														<use xlink:href="#path-1"></use>
													</mask>
													<use class="s-arrow" fill="#7C0080" xlink:href="#path-1"></use>
												</g>
											</svg></span></div>									</div>
																									</a>
									
							</div>
					<?php
					  }
					?>
													
		   </div>
		</div>
	  </div>							
  </div>
  <script type="rocketlazyloadscript">
		var actContainer = document.getElementById("block_6039a30e274c4");
		var btns = actContainer.getElementsByClassName("link-box");

			for (var i = 0; i < btns.length; i++) {
				btns[i].addEventListener("mouseover", function() {
					var current = document.getElementsByClassName("ww-active");
					current[0].classList.remove("ww-active");
					this.classList.add("ww-active");
				});
			}
  </script>
</section>

<div>
  <div class="container-fluid mw-xl"></div>
</div>

<section id="block_603bea155a384" class="content-block  alignfull logo-block py-5 has-font-color text-default">	
<style>
#block_603bea155a384 .logos-row .logo-item {			
    flex: 1 0 25%;
	max-width:25%;				
}
</style>	

			<script type="rocketlazyloadscript">
			function block_603bea155a384_logoToggle() {
				var parent_b = document.getElementById("block_603bea155a384"); 
				var logos = parent_b.getElementsByClassName("rest-select");
				var btn = document.getElementById("block_603bea155a384-logo-toggle"); 
				
					for (var i = 0; i < logos.length; i++) {
						logos.item(i).classList.toggle("active");
					}
					if(btn.innerHTML == 'View More +'){
						btn.innerHTML = 'View Less -';
					} else {
						btn.innerHTML = 'View More +';
					}
			}
		</script>
		
		<div class="container-fluid mw-xl">
		<div class="row">
			<div class="col-12 mb-3 mx-auto text-center">
													<h2 class="display-2">A partner, not a vendor.</h2>						
													<p class="pt-3 text-base">We develop deep, long-term relationships with our clients, whether they’re a major national brand or a local start-up. Bring us your business challenges — and we’ll roll up our sleeves and get to work.</p>
							</div>
		</div>
			
				<div class="row  pt-5">
			<div class="col mb-md-3">
							<div class="row logos-row g-2  nodesc">
							<?php
							  $partners = [];
							  for($i = 1; $i < 18; $i++)
							  {
								array_push($partners, "images/client-".$i.".jpg");
							  }
							  foreach($partners as $p)
							  {
							?>
								  <div class="logo-item text-center first-selection my-auto  flexed">						
													
							<div class="mx-auto logo-holder" >
								<picture class="d-inline-block mb-3">
<source type="image/webp" data-lazy-srcset="<?php echo e($p); ?> 546w, <?php echo e($p); ?> 400w, <?php echo e($p); ?> 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 546px) 100vw, 546px"/>
<img width="546" height="163" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" alt="" data-lazy-srcset="<?php echo e($p); ?> 546w, <?php echo e($p); ?> 400w,<?php echo e($p); ?> 150w" data-lazy-sizes="(max-width: 546px) 100vw, 546px" data-lazy-src="<?php echo e($p); ?>"/>
</picture>
<noscript>
<picture class="d-inline-block mb-3">
<source type="image/webp" srcset="<source type="image/webp" data-lazy-srcset="<?php echo e($p); ?> 546w, <?php echo e($p); ?> 400w, <?php echo e($p); ?> 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 546px) 100vw, 546px"/>
<img width="546" height="163" src="<?php echo e($p); ?>" alt="" srcset="<?php echo e($p); ?> 546w, <?php echo e($p); ?> 400w,<?php echo e($p); ?> 150w" sizes="(max-width: 546px) 100vw, 546px"/>
</picture>
</noscript>							</div>
								</div>
							<?php
							  }
							?>
										
									</div>
									<div class="row d-md-none d-flex">
						<div class="col-12 py-5 text-center">
							<a class="btn btn-primary logo-toggle" id="block_603bea155a384-logo-toggle" href="javascript:void(0)" >View More +</a>
						</div>
					</div>
							</div>
		</div>
			</div>

</section>

<div>
<div class="container-fluid mw-xl">
<style>		
#block_60e6159db9926 {
	background: #1a7175;
}
#block_60e6159db9926 .text-box * {
	color: #ffffff !important;
}
</style>	
</div>
</div>
<section id="block_60e6159db9926" class="content-block  alignfull image-desc my-0 slim has-font-color text-default">	<div class="container-fluid mw-xl">
		<div class="row flex-row-reverse align-items-stretch h-100">
			<div class="col-lg-7 color-box align-self-stretch px-0">
									<div data-bg="images/w1.jpg" class="image-background h-100 rocket-lazyload" 
						aria-hidden="true" 
						style="">
					</div>
							</div>
			<div class="col-lg-5 text-box  py-md-5 py-4">
				<div class="py-4 px-md-4 mx-1 d-flex h-100 align-items-center">
					<div>
																							<h2 class="display-2 mb-4">Build your brand&#039;s social influence. </h2>
																											<div class="mb-4"><p>Drive action and deepen brand trust with vetted influencers delivering reliable information and inspiration.</p>
</div>
																	<a class="small-font font-weight-600" href="javascript:void(0)" target="_self">Explore our influencer services.</a>
											</div>
				</div>
			</div>		
		</div>		
	</div>
</section>

<div><div class="container-fluid mw-xl">


<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>


</div></div>

<section id="block_6101ca3947903" class="content-block  alignfull logo-block py-5 has-font-color text-default">	<style>
		#block_6101ca3947903 .logos-row .logo-item {			
						flex: 1 0 12.5%;
			max-width:12.5%;
						
		}
	</style>	

		<div class="container-fluid mw-xl">
		<div class="row">
			<div class="col-12 mb-3 mx-auto text-center">
													<h2 class="display-2">Our work drives businesses forward.</h2>						
													<p class="pt-3 text-base">We fuel brand growth and have the numbers to prove it. Here's just a few of our superior results. </p>
							</div>
		</div>
			
			</div>

</section>

<div><div class="container-fluid mw-xl">

</div></div>

<section id="block_603c3f13c5660" class="content-block  alignfull content-grid py-0 my-0 has-font-color text-default">
					<div class="row mb-0 grid-line mx-0">
					<?php
					 $works = [
					   ['img' => "images/phamatex.jpg",'href' => "javascript:void(0)",'title' => "Phamatex Industries",'big_caption' => "5x Brand Awareness + Sales Leads",'small_caption' => "Creative, Video, Digital Media, SEO"],
					   ['img' => "images/ups.jpg",'href' => "javascript:void(0)",'title' => "UPS",'big_caption' => "+15% Clickthrough + Whatsapp Marketing",'small_caption' => "Creative, Digital Media, Performance Content"],
					   ['img' => "images/whippy.jpg",'href' => "javascript:void(0)",'title' => "Whippy Mayo'",'big_caption' => "+200% Brand Awareness",'small_caption' => "Creative, Paid Social, Performance Content, SEO"],
					 ];
							  
							  foreach($works as $w)
							  {
							?>
															<div class="col-lg-4 col-sm-6 single-grid g-type-3 mb-0 p-0">
											<div class="grid-in  withtext islinked" >
		<a href="<?php echo e($w['href']); ?>" class="grid-link" ><span class="visually-hidden"><?php echo e($w['title']); ?></span></a>		
					<div class="image-background" aria-hidden="true">
				<picture class="zoom-img">
<source type="image/webp" data-lazy-srcset="<?php echo e($w['img']); ?> 461w, <?php echo e($w['img']); ?> 408w, <?php echo e($w['img']); ?> 204w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20461%20452&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 461px) 100vw, 461px"/>
<img width="461" height="452" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20461%20452&#039;%3E%3C/svg%3E" alt="<?php echo e($w['title']); ?>" data-lazy-srcset="<?php echo e($w['img']); ?> 461w, <?php echo e($w['img']); ?> 408w, <?php echo e($w['img']); ?> 204w" data-lazy-sizes="(max-width: 461px) 100vw, 461px" data-lazy-src="<?php echo e($w['img']); ?>"/>
</picture>
<noscript><picture class="zoom-img">
<source type="image/webp" srcset="<?php echo e($w['img']); ?> 461w, <?php echo e($w['img']); ?> 408w, <?php echo e($w['img']); ?> 204w" sizes="(max-width: 461px) 100vw, 461px"/>
<img width="461" height="452" src="" alt="<?php echo e($w['title']); ?>" srcset="<?php echo e($w['img']); ?> 461w, <?php echo e($w['img']); ?> 408w, <?php echo e($w['img']); ?> 204w" sizes="(max-width: 461px) 100vw, 461px"/>
</picture>
</noscript>			</div>
			
			
		<div class="text-start text-white grid-over">	
			<div class="p-3 copy-holder">
									<p class="gr-t mb-lg-4 mb-3 titillium-web font-weight-normal"><?php echo e($w['title']); ?></p>
													<div class="gr-sub display-2 text-white mb-lg-4 mb-3"><?php echo e($w['big_caption']); ?></div>
													<p class="gr-cat text-start grid-cat pe-lg-5 me-lg-5"><?php echo e($w['small_caption']); ?></p>
											</div>	
		</div>		
	</div>
												</div>	
                        <?php
							}
					     ?>										
					</div>	
			</section>


<div>
<div class="container-fluid mw-xl"></div>
<style>
				#blog_cta {
					background-color: #fff;
				}
				#blog_cta h2 {
					color: #7c0f81!important;
				}
</style>
</div>


<section id="blog_cta" class="content-block  alignwide adtheme-cta py-md-5 py-0 has-font-color text-default background-custom">
			<div class="container-fluid mw-xl">
								<div class="row py-md-2 py-5 px-md-0 px-3">
					<div class="col-xl-7 col-md-6 py-md-4">
													<h2 class="cta-title display-2 w-xl-75 me-5 me-md-0">Find out what we can do for your bottom line.</h2>
																	<p class="cta-text mb-0 mt-4 px-md-2">Our flexible solutions will help you meet (and exceed) your business goals.</p>
																										<a href="<?php echo e(url('contact')); ?>" target="_self" class="btn btn-primary mt-4" target="_self">
							Let&#039;s Talk						</a>
											</div>				
				</div>		
			</div>
		</section>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\fortune-3\resources\views/index.blade.php ENDPATH**/ ?>