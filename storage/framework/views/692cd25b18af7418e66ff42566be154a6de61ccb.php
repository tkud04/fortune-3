<?php
$pcClass = "";
?>



<?php $__env->startSection('title',"Services"); ?>



<?php $__env->startSection('bodyClass',"page-paid-media noawesome hashero-color hashero"); ?>

<?php $__env->startSection('content'); ?>
<section id="block_60458b644b028" class="content-block d-flex  alignfull adtheme-hero align-items-end mob-stack color-as-herotype height-def has-background background-000000 has-background image-as-background has-overlay has-font-color text-default">			
<div class="image-background  hero-overlay background-000000 d-none d-sm-block">
				<picture class="skip-lazy object-cover object-center w-100 h-100" aria-hidden="true" loading="eager">
<source type="image/webp" srcset="images/services.jpg 1900w, images/services.jpg 1057w, images/services.jpg 1718w, images/services.jpg 529w, images/services.jpg 768w, images/services.jpg 1536w" sizes="(max-width: 1900px) 100vw, 1900px"/>
<img width="1900" height="719" src="images/services.jpg" alt="Services" aria-hidden="true" loading="eager" srcset="images/services.jpg 1900w, images/services.jpg 1057w, images/services.jpg 1718w, images/services.jpg 529w, images/services.jpg 768w, images/services.jpg 1536w" sizes="(max-width: 1900px) 100vw, 1900px"/>
</picture>
			</div>
<div class="image-background skip-lazy hero-overlay background-000000 d-none d-sm-block">
				<picture class="skip-lazy object-cover object-center w-100 h-100" aria-hidden="true" loading="eager">
<source type="image/webp" srcset="images/services.jpg 1900w, images/services.jpg 1057w, images/services.jpg 1718w, images/services.jpg 529w, images/services.jpg 768w, images/services.jpg 1536w" sizes="(max-width: 1900px) 100vw, 1900px"/>
<img width="1900" height="719" src="images/services.jpg" alt="Services" aria-hidden="true" loading="eager" srcset="images/services.jpg 1900w, images/services.jpg 1057w, images/services.jpg 1718w, images/services.jpg 529w, images/services.jpg 768w, images/services.jpg 1536w" sizes="(max-width: 1900px) 100vw, 1900px"/>
</picture>
			</div>
<div class="container-fluid mw-xl hero-block-content pt-sm-5 mt-sm-5">
		<div class="row h-100">
			<div class="col-md-7 text-start my-sm-3 my-4 text-white pb-md-5">
																	<div class="label">Services</div>
												<h1 class="hero-title display-1">We help brands grow.</h1>						
				<div class="d-none d-sm-block">
											<div class="hero-block-description py-3 h5">We drive business growth with hard-hitting digital solutions that help you win in hyper-competitive marketplaces with complex customer journeys.</div>
														
				</div>
			</div>
					</div>		
	</div>
</section>
<div class="d-sm-none d-block has-bg-color background-000000 text-white hbc-second">
		<div class="container-fluid mw-xl hero-block-content py-4">
					
							<div class="h5">
					We drive business growth with hard-hitting digital solutions that help you win in hyper-competitive marketplaces with complex customer journeys.				</div>
								</div>
	</div>
	
<section id="block_6039a30e274c4" class="content-block py-5  alignwide what-we-do has-font-color text-default">	<div class="container-fluid mw-xl">
<div class="container-fluid mw-xl">
  <div class="row">
	<div class="mb-lg-3 col-lg-8">
		<p class="text-base">Whether you need help building brand awareness, driving leads, or building ecommerce revenue, our team of specialists accelerates your growth.</p>
	 </div>			
  </div>
  <div class="row py-md-4 mb-md-0 mt-md-0 mt-4">
  	<div class="col-12 mb-3">
  	  <div class="row link-box-wrap g-md-4 g-2" id="link-box-wrap">
  	    <?php
                   
            foreach($services as $s)
            {
            	$ll = $s['list'];
           ?>
           	<div class="col-md-6 link-box detailed-what text-start mb-md-0 mb-3 ww-active">
					<a class="long-arrow" href="<?php echo e($s['href']); ?>" target="_self">
					<div class="ser-box h-100 px-md-5 px-3 pt-md-4 pb-md-4 py-3 text-start border-bottom position-relative">
						<div class="h3 text-start titillium-web"><?php echo e($s['title']); ?></div> 
					    <div class="mt-2 text-base small-font"><?php echo e($s['copy']); ?> </div> 
				        <div class="detailed-in-lines pt-4 d-none d-md-block">
						   <div class="row">
							 <?php
                                foreach($ll as $l)
                                {
                              ?>
							  <div class="col-md-6 col-12 mb-2 small-font text-base">
								<div class="as-list"><?php echo e($l); ?></div>
							  </div>
							  <?php
                                }
                               ?>
							 
							</div>
                          </div>
						  <div class="see-me">
                            <span class="svg-circle"><svg width="36px" height="36px" viewBox="0 0 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
												<defs>
													<polygon id="path-1" points="18 12.6666667 17.06 13.6066667 20.78 17.3333333 12.6666667 17.3333333 12.6666667 18.6666667 20.78 18.6666667 17.06 22.3933333 18 23.3333333 23.3333333 18"></polygon>
												</defs>
												<g id="Assets-/-0-Generic-/-icon_generic_circle_arrow_off" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<mask class="mask-2" fill="white">
														<use xlink:href="#path-1"></use>
													</mask>
													<use class="s-arrow" fill="#7C0080" xlink:href="#path-1"></use>
												</g>
											</svg>
                              </span>
                              </div>
							</a>
						</div>
            </div>		
          <?php
           }
           ?>
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

<style>
				#block_607ce454636b8 {
										background: #404040;
															color: #ffffff;
									}
				#block_607ce454636b8 svg * {
										fill: #ffffff;
									}
			</style>
		</div></div>

<section id="block_607ce454636b8" class="content-block  alignfull background-404040 py-md-5 py-4 adtheme-cta has-font-color text-default">			
  <div class="container-fluid mw-xl">
	<div class="row py-md-2 px-md-0 px-3">
	  <div class="col-md-10 offset-md-1 text-center py-md-4">
			<h2 class="cta-title display-2">Custom solutions for unique business challenges.</h2>
		    <p class="cta-text mb-0 mt-4 px-md-2">One-size-fits-all solutions don&#039;t work. We build holistic strategies for your brand. And we customize our approach for each client we serve.</p>
	  </div>
	</div>		
   </div>
</section>

<div>
  <div class="container-fluid mw-xl">
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
   </div>
</div>

<section id="block_60b058f083816" class="content-block  alignfull content-grid py-0 my-0 has-font-color text-default">
  <div class="row mb-0 grid-line mx-0">
    <div class="col-12 single-grid g-type-1 text-center mb-0 p-0">
	  <div class="grid-in  withtext islinked custom-grid force-img h-100" >
		<a href="javascript:void(0)" class="grid-link" ><span class="visually-hidden">Phamatex Industries</span></a>		
					<div class="image-background" aria-hidden="true">
				<picture class="zoom-img">
                 <source type="image/webp" data-lazy-srcset="images/phamatex.jpg 1950w, images/phamatex.jpg 1200w, images/phamatex.jpg 600w, images/phamatex.jpg 768w, images/phamatex.jpg 1536w, images/phamatex.jpg 2048w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201170%20390&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1170px) 100vw, 1170px"/>
                 <img width="1170" height="390" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201170%20390&#039;%3E%3C/svg%3E" alt="Phamatex" data-lazy-srcset="images/phamatex.jpg 1950w, images/phamatex.jpg 1200w, images/phamatex.jpg 600w, images/phamatex.jpg 768w, images/phamatex.jpg 1536w, images/phamatex.jpg 2048w" data-lazy-sizes="(max-width: 1170px) 100vw, 1170px" data-lazy-src="images/phamatex.jpg"/>
                </picture>
<noscript><picture class="zoom-img">
<source type="image/webp" srcset="images/phamatex.jpg 1950w, images/phamatex.jpg 1200w, images/phamatex.jpg 600w, images/phamatex.jpg 768w, images/phamatex.jpg 1536w, images/phamatex.jpg 2048w" sizes="(max-width: 1170px) 100vw, 1170px"/>
<img width="1170" height="390" src="images/phamatex.jpg" alt="Phamatex" srcset="images/phamatex.jpg 1950w, images/phamatex.jpg 1200w, images/phamatex.jpg 600w, images/phamatex.jpg 768w, images/phamatex.jpg 1536w, images/phamatex.jpg 2048w" sizes="(max-width: 1170px) 100vw, 1170px"/>
</picture>
</noscript>			</div>
			
			
		<div class="text-start text-white row mx-md-4 text-top h-100 mx-0">	
			<div class="col-lg-4 col-md-6 col-10 offset-1 offset-md-0 py-5 my-auto">
									<p class="gr-t mb-lg-4 mb-3 titillium-web font-weight-normal">Phamatex Industries</p>
													<div class="gr-sub display-2 text-white mb-lg-4 mb-3">5x Brand Awareness + Sales Leads</div>
													<p class="gr-cat text-start grid-cat pe-lg-5 me-lg-5">Creative, Video, Digital Media, SEO</p>
													<div class="text-start small-font"></div>
							</div>	
		</div>		
	</div>
																
				</div>
					</div>	
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\fortune-3\resources\views/services.blade.php ENDPATH**/ ?>