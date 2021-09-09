<?php
$title = "Not Found";
$pe = [];
$plugins = [];
$signals = ['okays' => []];
$user = null;
$banners = [];
$services = [];
if(Auth::check()) $user = Auth::user();
?>
@extends('layout')

@section('title',"Not Found")

@section('content')
<style>
		.not_f .display-1 {
			color: #1A7175;
			font-size:60px;
			font-weight:bold;
		}
		.not_f .display-3 {
			color: #7C0F81;
			font-size:32px;
		}
		@media only screen and (max-width: 768px) {
			.not_f .display-1 {
				font-size:44px;
			}
			.not_f .display-3 {
				font-size:28px;
			}
		}
	</style>
	
		<div class="row py-5 align-items-center not_f flex-md-row-reverse">
							<div class="col-md-5 py-md-0 py-4 text-center">
					<picture class="">
<source type="image/webp" srcset="images/404.webp"/>
<img src="images/404.webp" alt=""/>
</picture>

				</div>
						<div class="col-md-7">
									<h1 class="display-1 mt-md-5">This page seems to be misplaced.</h1>
													<h2 class="display-3 mt-4 mb-3">We can't find it right now, but don't worry - our SEO teams are all over it.</h2>
													<div class="mt-4"><p>If you&#8217;ve landed here, you may be looking for a page that no longer exists. It could be because that link is broken or you missspelled it. Either way, we suggest you start from the top.</p>
</div>
													<div class="mt-5">
												<a class="btn btn-primary me-sm-3 me-0 mb-3 d-block d-sm-inline-block" href="{{url('/')}}" target="_self">About</a>
												<a class="btn btn-primary me-sm-3 me-0 mb-3 d-block d-sm-inline-block" href="{{url('services')}}" target="_self">Services</a>
										</div>
							</div>			
		</div>
@stop
