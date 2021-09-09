<?php
$pcClass = "";
?>
@extends('layout')


@section('title',"Research + Analytics Solutions")



@section('bodyClass',"page-paid-media noawesome hashero-color hashero")

@section('content')
<?php
$sh = [
  'subtitle' => "Research + Analytics Solutions",
  'title' => "Market Research + Analytics",
  'copy' => "Great business decisions demand accurate data. Our proprietary first-party database and predictive modeling solutions can future-proof your business — cookie-free."
];

$sl = [
  'title_1' => "Market Research + Analytics Solutions",
  'title_2' => "Be first to the future.",
  'title_3' => "Adopt what’s next with industry expertise, qualitative & quantitative research, data integrity assurance, and consumer-centric analytics. ",
  'list' => [
  ['title' => "Customer Modeling + Audience Development",'copy' => "Our market research solution enhances segmentation — down to single households — while our team uses data-centric strategies to custom-build a “no cookie needed” audience from first-party data."],
  ['title' => "Conversion Rate Optimization (CRO)",'copy' => "Increase ad cost-effectiveness and the percentage of visitors who convert. We work alongside your marketing and development teams to ideate, implement, and report on-page tests that increase CRO."],
  ['title' => "Tagging + Tracking",'copy' => "Trust all your data sources. We ensure all tags are correctly installed, and all ad engines are accurately tracking conversions. In tandem, our analytics and media teams work with yours to confirm all media uses uniform campaign names and URL parameters."],
  ['title' => "Dashboard Reporting",'copy' => "Ensure data integrity with highly detailed data reporting. Our custom dashboards offer precise reporting and guarantee your analytics package attributes conversions to the correct channels."],
  ['title' => "Attribution",'copy' => "Go far, far beyond Google Analytics. Use incrementality measurement to have better confidence in your media mix. Measure holistic performance across channels and total web performance. We use the latest geospatial technology for customer match reports and customer match backs to help advance insights and business goals further."],
  ['title' => "Data Integration",'copy' => "Optimize your ad account for what matters most. If your customer acquisition process starts online but finishes offline, our team works with your Marketing, Sales, CRM, and Development teams to integrate offline data into ad accounts, allowing us to bid and optimize for actual customers, not just leads."],
  ]
];

$sc = [
'subtitle' => "OUR APPROACH",
  'title' => "Premier tracking + testing.",
  'copy' => "<p>More granular than Google or Adobe Analytics, we first conduct tracking audits, understand sales cycles, implement pixels, test models, customize dashboards, and create ongoing reports — then we test. We offer complete quality assurance to ensure pixel firing, determine data accuracy, implement additional A/B testing, and update based on continual findings.</p>"
];
?>
@include('service-header',$sh)
@include('service-list',$sl)
@include('service-cta',$sc)
@include('service-partners')
@include('service-footer',['services' => $services])
@stop
