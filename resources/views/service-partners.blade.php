<div><div class="container-fluid mw-xl">

</div></div>
<section id="block_607cdec42033e" class="content-block  alignfull logo-block py-5 has-font-color text-default">
	<style>
		#block_607cdec42033e .logos-row .logo-item {			
						flex: 1 0 33.333333333333%;
			max-width:33.333333333333%;
						
		}
	</style>	

			<script type="rocketlazyloadscript">
			function block_607cdec42033e_logoToggle() {
				var parent_b = document.getElementById("block_607cdec42033e"); 
				var logos = parent_b.getElementsByClassName("rest-select");
				var btn = document.getElementById("block_607cdec42033e-logo-toggle"); 
				
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
									<div class="label">PARTNERS</div>
													<h2 class="display-2">Trusted  partners.</h2>						
													<p class="pt-3 text-base">We pair expertise with global power-house partners, like Google and Oracle, to keep your brand ahead of the curve and even further in front of your competition. </p>
							</div>
		</div>
			
				<div class="row  pt-5">
			<div class="col mb-md-3">
							<div class="row logos-row g-2  nodesc">
														
									 <?php
									 $partners = [
									 'images/PowerBI_200x60_Black-–-4.svg',
									 'images/Tableau_200x60_Black-–-5.svg',
									 'images/GTM_200x60_Black-–-1.svg',
									 'images/GoogleAnalytics_200x60_Black-–-3.svg',
									 'images/Optimize_200x60_Black-–-2.svg',
									 ];
									 
			                 foreach($partners as $p)
				             {
			                 ?>		
                            <div class="logo-item text-center first-selection my-auto  flexed">									 
							  <div class="mx-auto logo-holder" >
								<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" class="d-inline-block mb-3" alt="PowerBI_200x60_Black – 4" data-lazy-src="{{$p}}" />
								<noscript><img src="{{$p}}" class="d-inline-block mb-3" alt="PowerBI_200x60_Black – 4" /></noscript>			
							  </div>
							</div>
							<?php
			                 }
			                ?>
							
						 </div>
						<div class="row d-md-none d-flex">
						<div class="col-12 py-5 text-center">
							<a class="btn btn-primary logo-toggle" id="block_607cdec42033e-logo-toggle" href="javascript:void(0)" >View More +</a>
						</div>
					   </div>
				</div>
		</div>
			</div>

</section>