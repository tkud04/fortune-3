<?php
$pcClass = "";
?>
@extends('layout')


@section('title',"SEO")



@section('bodyClass',"page-paid-media noawesome hashero-color hashero")

@section('content')
<?php
$sh = [
  'subtitle' => "Social",
  'title' => "Pioneering search engine optimization.",
  'copy' => "Gain and maintain your place at the top of SERPs with our expertise on all leading SEO platforms and licensing to top-tier tools."
];

$sl = [
  'title_1' => "what we do",
  'title_2' => "Full funnel. Full force. Intelligent audience targeting and expert technical know-how to drive long-term growth.",
  'title_3' => "",
  'list' => [
  ['title' => "Technical SEO",'copy' => "Ensure search engines can effectively crawl, index, and render your web content by improving efficiency, eliminating technical roadblocks, and optimizing performance and usability."],
  ['title' => "Performance Content",'copy' => "Establish authority and relevance through impactful content and intent-based optimizations that speak directly to your customer."],
  ['title' => "ECommerce",'copy' => "Boost visibility and sales with unique and relevant product information and eCommerce platform customization."],
  ['title' => "Local SEO",'copy' => "Help neighborhood customers easily find your business with a targeted local content strategy, including listing and review management."],
  ['title' => "Algorithm Recovery",'copy' => "With our finger on the pulse of future updates, we help you navigate changes and support renewed traffic growth."],
  ]
];

$sc = [
'subtitle' => "OUR APPROACH",
  'title' => "Website redesign, relaunch + replatforming.",
  'copy' => "<p>We use the latest SEO and digital marketing best practices to boost your brand. Our team supports yours, as much as is needed, throughout the entire process. </p><ul><li>Risk Analysis + Research</li><li>Sitemap + Wireframe + HTML Evaluation</li><li>Performance Content + Design</li><li>Optimization + Review</li><li>Website Development + Maintenance</li></ul>"
];

$scl = [
  'img' => "images/phamatex-2.jpg",
  'title' => "Phamatex Industries",
  'num' => "+675%",
  'subtitle' => "KPI social-wide click-throughs",
  'copy' => "By utilizing Google SEO, we deployed Keyword Search for word strings closely matching popular search options of profiles of customers within target audience demographic. Conersions to social campaigns to generate MQLs grew by +65% during campaign period."
];

$sp = [
  'title' => "We know the right people.",
  'subtitle' => "OUR PARTNERS",
  'copy' => "We’ve built elite partnerships and strong relationships with leading SEO institutions. These partnerships grant us enterprise-level technology and insights to know more, pivot faster and create original, effective solutions sooner.",
  'images' => [
    'images/Conductor_200x60-–-3.svg',
    'images/Brightedge_200x60-–-1.svg',
    'images/Botify_200x60.svg',
    'images/GoogleSearchConsole_200x60-–-5.svg',
    'images/DeepCrawl_200x60-–-4.svg',
    'images/RioSEO_200x60-–-6.svg',
    'images/BrightLocal_200x60-–-2.svg',
    'images/GoogleAnalytics_200x60_Black-–-3.svg',
  ]
];

$st = [
  'name' => "Simeon O.",
  'position' => "Product Manager, Phamatex Industries Limited",
  'copy' => "There's no other company that does it better. Goral's professionalism, partnership and expertise was invaluable. They were a true extension of our team!"
];


?>
@include('service-header',$sh)
@include('service-list',$sl)



@include('service-cta',$sc)

@include('service-partners',$sp)

<div><div class="container-fluid mw-xl">

									<style>		
																#block_60b01ac04c3d1 .text-box * {
							color: #000000 !important;
						}
							
				</style>
						
	
</div></div><section id="block_60b01ac04c3d1" class="content-block  alignfull image-desc my-0 has-font-color text-default">	<div class="container-fluid mw-xl">
		<div class="row flex-row-reverse align-items-stretch h-100">
			<div class="col-lg-7 color-box align-self-stretch px-0">
									<div data-bg="images/se-1.jpg" class="image-background h-100 rocket-lazyload" 
						aria-hidden="true" 
						style="">
					</div>
							</div>
			<div class="col-lg-5 text-box  py-md-5 py-4">
				<div class="py-4 px-md-4 mx-1 d-flex h-100 align-items-center">
					<div>
											<div class="label">SEO AUTHORITY</div>
																							<h2 class="display-2 mb-4">For us, it’s personal.</h2>
																											<div class="mb-4"><p>We’re a leading SEO authority. Our SEO leaders frequently speak and teach at established SEO conferences, boot camps, and training sessions, and have even been cited by Google. It’s not our nature to drop recommendations and disappear. We educate, empower, and work alongside your internal team.</p>
</div>
															</div>
				</div>
			</div>		
		</div>		
	</div>
</section>


<div><div class="container-fluid mw-xl">


<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>


									<style>		
																#block_60b015bf4c3d0 .text-box * {
							color: #000000 !important;
						}
							
				</style>
						
	
</div></div><section id="block_60b015bf4c3d0" class="content-block  alignfull image-desc my-0 has-font-color text-default">	<div class="container-fluid mw-xl">
		<div class="row  align-items-stretch h-100">
			<div class="col-lg-7 color-box align-self-stretch px-0">
									<div data-bg="images/se-2.jpg" class="image-background h-100 rocket-lazyload" 
						aria-hidden="true" 
						style="">
					</div>
							</div>
			<div class="col-lg-5 text-box  py-md-5 py-4">
				<div class="py-4 px-md-4 mx-1 d-flex h-100 align-items-center">
					<div>
											<div class="label">GOOGLE EXPERTISE</div>
																							<h2 class="display-2 mb-4">Expert E-A-T insights.</h2>
																											<div class="mb-4"><p>As one of the first agencies to interpret Google’s E-A-T (expertise, authority, trust), our conclusions helped create industry-leading insights and principles. And we continue to increase our E-A-T authority through forward-thinking research and education.</p>
</div>
															</div>
				</div>
			</div>		
		</div>		
	</div>
</section>


@include('service-client',$scl)
@include('service-testimonial',$st)
@include('service-footer',['services' => $services])
@stop
