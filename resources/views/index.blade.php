<?php
$title = "Welcome";
$pcClass = "";
?>
@extends('layout')


@section('title',"Welcome")


@section('includes')
<link rel="preload" as="image" href="images/Amsive-Hero-02.jpg.webp"   media="(min-width:768px)">
<link rel="preload" as="image" href="images/Amsive-Hero-02-mobile.jpg.webp" media="(max-width:767.98px)">
@stop

@section('bodyClass',"page-home-page noawesome hashero-video hashero")

@section('content')
@include('banner')

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
								<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" class="mb-3" alt="{{$s['title']}}" data-lazy-src="{{$s['img']}}" />
								<noscript><img src="{{$s['img']}}" class="mb-3" alt="{{$s['title']}}" /></noscript>												
							</div>
							<div class="col-xl-10 col-md-9">										
								<div class="h4 mb-3 text-primary">{{$s['title']}}</div>
								<div class="small-font text-base">{{$s['text']}}</div>
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
														<div class="col-md-4 link-box detailed-what text-start mb-md-0 mb-3 ww-active">
																	<a class="long-arrow" href="https://www.amsivedigital.com/services/paid-media/" target="_self">
																									<div class="ser-box h-100 px-md-5 px-3 pt-md-4 pb-md-5 py-3 text-start has-bg-color background-ffffff position-relative">
																						<div class="h4 text-start titillium-web">Paid Media</div> 
																																		<div class="mt-2 text-base small-font">Craft campaigns — built just for your business — to ensure real and quantifiable ROI.</div> 
																						
																						
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
														<div class="col-md-4 link-box detailed-what text-start mb-md-0 mb-3 ">
																	<a class="long-arrow" href="https://www.amsivedigital.com/services/seo/" target="_self">
																									<div class="ser-box h-100 px-md-5 px-3 pt-md-4 pb-md-5 py-3 text-start has-bg-color background-ffffff position-relative">
																						<div class="h4 text-start titillium-web">SEO</div> 
																																		<div class="mt-2 text-base small-font">Gain and maintain your best spot on the search results page, so you can find new customers and re-engage loyal ones. </div> 
																						
																						
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
														<div class="col-md-4 link-box detailed-what text-start mb-md-0 mb-3 ">
																	<a class="long-arrow" href="https://www.amsivedigital.com/services/social/" target="_self">
																									<div class="ser-box h-100 px-md-5 px-3 pt-md-4 pb-md-5 py-3 text-start has-bg-color background-ffffff position-relative">
																						<div class="h4 text-start titillium-web">Social</div> 
																																		<div class="mt-2 text-base small-font">Drive discovery, build your digital community, and increase ROAS with scalable paid, organic, and influencer strategies. </div> 
																						
																						
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
														<div class="col-md-4 link-box detailed-what text-start mb-md-0 mb-3 ">
																	<a class="long-arrow" href="https://www.amsivedigital.com/services/performance-creative/" target="_self">
																									<div class="ser-box h-100 px-md-5 px-3 pt-md-4 pb-md-5 py-3 text-start has-bg-color background-ffffff position-relative">
																						<div class="h4 text-start titillium-web">Performance Creative</div> 
																																		<div class="mt-2 text-base small-font">Blend art and science to build high-impact creative campaigns that are tailor-made for your target audience — and achieve the best results.</div> 
																						
																						
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
														<div class="col-md-4 link-box detailed-what text-start mb-md-0 mb-3 ">
																	<a class="long-arrow" href="https://www.amsivedigital.com/services/data-solutions/" target="_self">
																									<div class="ser-box h-100 px-md-5 px-3 pt-md-4 pb-md-5 py-3 text-start has-bg-color background-ffffff position-relative">
																						<div class="h4 text-start titillium-web">Data + Analytics Solutions</div> 
																																		<div class="mt-2 text-base small-font">Leverage the power of leading consumer data providers and analytics technologies for confident, strategic decision-making.</div> 
																						
																						
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
														<div class="col-md-4 link-box detailed-what text-start mb-md-0 mb-3 ">
																	<a class="long-arrow" href="https://www.amsivedigital.com/services/strategy/" target="_self">
																									<div class="ser-box h-100 px-md-5 px-3 pt-md-4 pb-md-5 py-3 text-start has-bg-color background-ffffff position-relative">
																						<div class="h4 text-start titillium-web">Strategy</div> 
																																		<div class="mt-2 text-base small-font">Build comprehensive go-to-market strategies for performance brands with clear-sighted digital KPIs.</div> 
																						
																						
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

@stop
