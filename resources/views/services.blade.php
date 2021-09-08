<?php
$pcClass = "";
?>
@extends('layout')


@section('title',"Services")



@section('bodyClass',"page-paid-media noawesome hashero-color hashero")

@section('content')
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
					<a class="long-arrow" href="{{$s['href']}}" target="_self">
					<div class="ser-box h-100 px-md-5 px-3 pt-md-4 pb-md-4 py-3 text-start border-bottom position-relative">
						<div class="h3 text-start titillium-web">{{$s['title']}}</div> 
					    <div class="mt-2 text-base small-font">{{$s['copy']}} </div> 
				        <div class="detailed-in-lines pt-4 d-none d-md-block">
						   <div class="row">
							 <?php
                                foreach($ll as $l)
                                {
                              ?>
							  <div class="col-md-6 col-12 mb-2 small-font text-base">
								<div class="as-list">{{$l}}</div>
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
</section>
@stop
