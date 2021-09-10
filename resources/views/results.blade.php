<?php
$pcClass = "";
$r1 = "images/r1.webp";
$r2 = "images/r2.webp";
?>
@extends('layout')


@section('title',"Results")



@section('bodyClass',"page-about noawesome hashero-image hashero")

@section('content')
<div class="container-fluid mw-xl">
			<div class="main-content home-page">
					<style>	
		#block_607ceaf274787 .image-background {
			background-position: center center;
		}
	</style>
</div></div>
<section id="block_607ceaf274787" class="content-block d-flex  alignfull adtheme-hero align-items-end mob-stack color-as-herotype height-def has-background background-000000 has-background image-as-background has-font-color text-default">			
			<div class="image-background  background-000000 d-none d-sm-block">
				<picture class="skip-lazy object-cover object-center w-100 h-100" aria-hidden="true" loading="eager">
<source type="image/webp" srcset="{{$r1}} 1920w, {{$r1}} 1151w, {{$r1}} 1871w, {{$r1}} 576w, {{$r1}} 768w, {{$r1}} 1536w" sizes="(max-width: 1920px) 100vw, 1920px"/>
<img width="1920" height="667" src="{{$r1}}" alt="services_hero_opt" aria-hidden="true" loading="eager" srcset="{{$r1}} 1920w, {{$r1}} 1151w, {{$r1}} 1871w, {{$r1}} 576w, {{$r1}} 768w, {{$r1}} 1536w" sizes="(max-width: 1920px) 100vw, 1920px"/>
</picture>
			</div>
			
						<div class="image-background skip-lazy  background-000000 d-block d-sm-none">
				<picture class="skip-lazy object-cover object-center w-100 h-100" aria-hidden="true" loading="eager">
<source type="image/webp" srcset="{{$r2}} 530w, {{$r2}} 424w, {{$r2}} 212w" sizes="(max-width: 530px) 100vw, 530px"/>
<img width="530" height="500" src="{{$r2}}" alt="services_hero_image_mob" aria-hidden="true" loading="eager" srcset="{{$r2}} 530w, {{$r2}} 424w, {{$r2}} 212w" sizes="(max-width: 530px) 100vw, 530px"/>
</picture>
			</div>
						
			
	<div class="container-fluid mw-xl hero-block-content pt-sm-5 mt-sm-5">
		<div class="row h-100">
			<div class="col-md-7 text-start my-sm-3 my-4 text-white pb-md-5">
																	<div class="label">Our Work</div>
												<h1 class="hero-title display-1">We achieve the big wins.  </h1>						
				<div class="d-none d-sm-block">
											<div class="hero-block-description py-3 h5">Our client-first approach, deep technical knowledge, and performance focus fuel our clients’ successes — and grow their brands. </div>
														
				</div>
			</div>
					</div>		
	</div>
</section>
<div class="d-sm-none d-block has-bg-color background-000000 text-white hbc-second">
		<div class="container-fluid mw-xl hero-block-content py-4">
					
							<div class="h5">
					Our client-first approach, deep technical knowledge, and performance focus fuel our clients’ successes — and grow their brands. 				</div>
								</div>
	</div>
<div><div class="container-fluid mw-xl">

</div></div>
<div><div class="container-fluid mw-xl">

</div></div>
<section id="block_607cec6274788" class="content-block  alignfull info-block py-md-5 py-4 has-font-color text-default">	<div class="container-fluid mw-xl">
		<div class="row py-md-2 ">
			<div class="col-md-6 py-md-4">
				<div class="me-md-5 pe-md-5">
									<div class="label">Our Results</div>
													<h2 class="cta-title h2 mb-0">Show. Not just tell.</h2>						
												
				</div>
			</div>
			<div class="col-md-6 py-md-4">
									<div class="label d-none d-md-block">&nbsp;</div>
													<div class="mb-0 px-md-2 py-md-0 py-4 text-base"><p>Numbers don&#8217;t lie — and the results are in. We deliver for our clients. With data, determination, and the latest insights and tools, we work across teams to exceed business outcomes. Here are just a few of our successes.</p>
</div>
											</div>
		</div>		
	</div>
</section>
<div><div class="container-fluid mw-xl">
<section id="block_607cee9074790" class="content-block  alignwide content-grid py-md-5 py-4 has-font-color text-default">
<?php
$pairs = [
  [
   ['href' => "javascript:void(0)",'img' => "images/phamatex.jpg",'name' => "Phamatex Industries",'num' => "5x Brand Awareness + Sales Leads",'services' => "Paid Search, Paid Social, SEO"],
   ['href' => "javascript:void(0)",'img' => "images/ups.jpg",'name' => "UPS",'num' => "+15% Click-through via WhatsApp targeting",'services' => "Creative, Digital Media, Performance Content"],
 ],
 [
   ['href' => "javascript:void(0)",'img' => "images/dangote.jpg",'name' => "Dangote Sugar Refinery Limited",'num' => "+6.7 Website traffic",'services' => "Website Development, SEO, Performance Creative"],
   ['href' => "javascript:void(0)",'img' => "images/activa.jpg",'name' => "Activa Oil",'num' => "+75% Lead Volume",'services' => "Paid Social, Organic Social, Digital Media, Performance Creative"],
 ],
 [
   ['href' => "javascript:void(0)",'img' => "images/boneflex.jpg",'name' => "Boneflex by Geneith Pharma",'num' => "+87% Brand Awareness",'services' => "Paid Social, Organic Social, Digital Media, Performance Creative"],
   ['href' => "javascript:void(0)",'img' => "images/ra-thermoseal.jpg",'name' => "RA Thermoseal by Healthline Limited",'num' => "+40% Brand Awareness",'services' => "Performance Creative, Digital Media, Traditional Media, Paid Social"],
 ],
];
foreach($pairs as $pair)
{
?>
 <div class="row mb-0 grid-line mx-0">
 	<?php
     foreach($pair as $p)
     {
     ?>
     	<div class="col-md-6 single-grid g-type-2 mb-0 p-0">
	<div class="grid-in  withtext islinked" >
		<a href="{{$p['href']}}" class="grid-link" ><span class="visually-hidden">{{$p['name']}}</span></a>		
		  <div class="image-background" aria-hidden="true">
			 <picture class="zoom-img">
                <source type="image/webp" data-lazy-srcset="{{$p['img']}} 463w, {{$p['img']}} 410w, {{$p['img']}} 205w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20463%20452&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 463px) 100vw, 463px"/>
                <img width="463" height="452" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20463%20452&#039;%3E%3C/svg%3E" alt="thesak" data-lazy-srcset="{{$p['img']}} 463w, {{$p['img']}} 410w, {{$p['img']}} 205w" data-lazy-sizes="(max-width: 463px) 100vw, 463px" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/05/thesak.jpg"/>
             </picture>
             <noscript><picture class="zoom-img">
               <source type="image/webp" srcset="{{$p['img']}} 463w, {{$p['img']}} 410w, {{$p['img']}} 205w" sizes="(max-width: 463px) 100vw, 463px"/>
                <img width="463" height="452" src="{{$p['img']}}" alt="{{$p['name']}}" srcset="{{$p['img']}} 463w, {{$p['img']}} 410w, {{$p['img']}} 205w" sizes="(max-width: 463px) 100vw, 463px"/>
                </picture>
             </noscript>		
       	</div>
		   <div class="text-start text-white grid-over">	
			 <div class="p-3 copy-holder">
				<p class="gr-t mb-lg-4 mb-3 titillium-web font-weight-normal">{{$p['name']}}</p>
				<div class="gr-sub display-2 text-white mb-lg-4 mb-3">{{$p['num']}}</div>
				<p class="gr-cat text-start grid-cat pe-lg-5 me-lg-5">{{$p['services']}}</p>
			 </div>	
		   </div>		
	</div>
</div>	
     <?php
     }
     ?>
 </div>
<?php
}
?>
</section>

	<style>		
					#block_607cee9b74791 {
				background: #1a7175;
			}
							#block_607cee9b74791 .text-box {
				color: #ffffff;
			}
				
</style>
</div></div>
<section id="block_607cee9b74791" class="content-block  alignfull testimonial-block testim_type-text my-4 py-5 background-1a7175 has-font-color text-default">
	<div class="container-fluid mw-xl">
		<div class="row  align-items-stretch testim-row">
			 
			<div class="col-md-10 offset-md-1 text-box py-md-5 py-4 my-auto">
				<div class="row add-bord">
					<div class="col-md-2 text-md-end text-start">
						<svg version="1.1" class="mt-2 mb-3"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
							 y="0px" width="68.22px" height="55px" viewBox="0 0 108 86" enable-background="new 0 0 108 86" xml:space="preserve">
						<g>
							<g>
								<path fill="#FFFFFF" d="M0,86c15.665,0,31.335,0,47,0c0-10.666,0-21.334,0-32c-8.333,0-16.667,0-25,0
								c3.475-12.479,12.054-23.731,17-35c2.726-6.211,3.802-12.401,8-17c0-0.667,0-1.333,0-2C31.335,0,15.665,0,0,0
								C0,28.664,0,57.336,0,86z M108,2c0-0.667,0-1.333,0-2C92.335,0,76.665,0,61,0c0,28.664,0,57.336,0,86c15.665,0,31.335,0,47,0
								c0-10.666,0-21.334,0-32c-8.333,0-16.667,0-25,0c3.475-12.479,12.054-23.731,17-35C102.726,12.789,103.802,6.599,108,2z"/>
							</g>
						</g>
						</svg>
					</div>
					<div class="col-md-10">
						<div class="h3">It is clear that Gorals understands our needs and industry the best. Their transparency and willingness to educate clients on what/why/how they’re handling your marketing efforts is refreshing.</div>
													<div class="pt-4">
								<div class="pb-2"><b>Priya Hariharan</b></div>
								<div class="">Product Manager, Healthline Limited</div>
							</div>
							
					</div>
				</div>
			</div>
			 
		</div>		
	</div>
</section>
@stop
