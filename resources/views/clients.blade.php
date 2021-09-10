<?php
$pcClass = "";
$r1 = "images/r1.jpg";
$r2 = "images/r2.jpg";
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
@stop
