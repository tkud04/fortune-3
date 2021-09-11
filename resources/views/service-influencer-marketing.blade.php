<?php
$pcClass = "";
?>
@extends('layout')


@section('title',"Influencer Marketing")



@section('bodyClass',"page-paid-media noawesome hashero-color hashero")

@section('content')
<?php
$sh = [
  'subtitle' => "INFLUENCER MARKETING",
  'title' => "Authentic storytelling from trusted influencers.",
  'copy' => "Build trust and drive action with vetted influencers delivering reliable information, advice, and inspiration across social."
];

$sl = [
  'title_1' => "what we do",
  'title_2' => "Develop campaigns that grow brand loyalty, share highly credible content, and deliver actual results.",
  'title_3' => "",
  'list' => [
  ['title' => "Customized Content Programs + Creative Storytelling",'copy' => "Meet, inspire, and engage customers in their natural social ecosystem with personalized and memorable storytelling."],
  ['title' => "Data-Driven Influencer Selection Process",'copy' => "Utilize fully vetted influencers who align with your brand values, have a depth of knowledge, and an army of loyal followers."],
  ['title' => "Performance-Focused Media Amplification",'copy' => "Amplify the best-performing organic content straight from influencers’ accounts to your curated audiences."],
  ['title' => "Turnkey Program Execution",'copy' => "Gain real-time access and insights into campaign results with our white glove implementation process."],
  ['title' => "Performance Analysis + Optimization",'copy' => "Receive in-depth insights and next-step recommendations to optimize every facet of your campaign further."],
  ]
];

$sc = [
'subtitle' => "OUR SPECIALIZATION",
  'title' => "Pharma + wellness expertise.",
  'copy' => "<p>Partner with influencers who share your brand’s commitment to pharma, medical and wellness. We have a depth of vertical-specific expertise and access  — second to none.</p><ul><li>200+ profiles in our in-house influencer + content creator database</li><li>Years of experience + expertise in pivotal digital ecosystems</li><li>Influence and digital footprints across all social platforms</li><li>Pharma, nutrition, fitness, health, wellness, healthcare, and more</li></ul>"
];

$scl = [
  'img' => "images/dangote.jpg",
  'title' => "Dangote Sugar Refinery Limited",
  'num' => "+6.7x",
  'subtitle' => "Website traffic",
  'copy' => "We redesigned the company's corporate website to maximize the overall user experience. We optimized the website load speeds to the most minimum to enable visits even with sub-par network coverage. The design direction maintained a sleek, cleanly designed corporate website with superior minimalist graphics."
];

$sp = [
  'title' => "We know the right people.",
  'subtitle' => "OUR PARTNERS",
  'copy' => "We’ve built elite partnerships and strong relationships with leading SEO institutions. These partnerships grant us enterprise-level technology and insights to know more, pivot faster and create original, effective solutions sooner.",
  'images' => [
    'images/Conductor_200x603.svg',
    'images/Brightedge_200x601.svg',
    'images/Botify_200x60.svg',
    'images/GoogleSearchConsole_200x605.svg',
    'images/DeepCrawl_200x604.svg',
    'images/RioSEO_200x606.svg',
    'images/BrightLocal_200x602.svg',
    'images/GoogleAnalytics_200x60_Black3.svg',
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
									<div data-bg="images/sif-1.jpg" class="image-background h-100 rocket-lazyload" 
						aria-hidden="true" 
						style="">
					</div>
							</div>
			<div class="col-lg-5 text-box  py-md-5 py-4">
				<div class="py-4 px-md-4 mx-1 d-flex h-100 align-items-center">
					<div>
											<div class="label">SCALABLE SUCCESS</div>
																							<h2 class="display-2 mb-4">Organic + paid are better together.</h2>
																											<div class="mb-4">
																											<p>Our campaigns create highly credible organic content that trusted influencers share with their loyal followers.</p>
																											<p>But social platforms don’t make it easy for influencers to achieve optimal reach organically.</p>
																											<p>So, we add paid media to scale influence and reach your best audience — right when it matters most.</p>
																											
</div>
															</div>
				</div>
			</div>		
		</div>		
	</div>
</section>

<div><div class="container-fluid mw-xl">

									<style>		
																#block_60b01ac04c3d1 .text-box * {
							color: #000000 !important;
						}
							
				</style>
						
	
</div></div><section id="block_60b01ac04c3d1" class="content-block  alignfull image-desc my-0 has-font-color text-default">	<div class="container-fluid mw-xl">
		<div class="row flex-row-reverse align-items-stretch h-100">
			<div class="col-lg-7 color-box align-self-stretch px-0">
									<div data-bg="images/sif-2.jpg" class="image-background h-100 rocket-lazyload" 
						aria-hidden="true" 
						style="">
					</div>
							</div>
			<div class="col-lg-5 text-box  py-md-5 py-4">
				<div class="py-4 px-md-4 mx-1 d-flex h-100 align-items-center">
					<div>
											<div class="label">EXCEPTIONAL ROI</div>
																							<h2 class="display-2 mb-4">Capture your audience with high-quality content.</h2>
																											<div class="mb-4">
																											<p>Great storytelling is at the heart of successful marketing. Influencer campaigns harness the most powerful stories and content to move the needle for your business.</p>
																											<p>Armed with impactful and engaging content, influencers can be online leaders building a social movement for your brand.</p>
</div>
															</div>
				</div>
			</div>		
		</div>		
	</div>
</section>

@include('service-footer',['services' => $services])
@stop
