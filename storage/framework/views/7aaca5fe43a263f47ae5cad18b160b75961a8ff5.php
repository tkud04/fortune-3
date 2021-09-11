<?php
$pcClass = "";
?>



<?php $__env->startSection('title',"Research + Analytics Solutions"); ?>



<?php $__env->startSection('bodyClass',"page-paid-media noawesome hashero-color hashero"); ?>

<?php $__env->startSection('content'); ?>
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

$sp = [
  'title' => "Trusted partners.",
  'subtitle' => "PARTNERS",
  'copy' => "We pair expertise with global power-house partners, like Google and Oracle, to keep your brand ahead of the curve and even further in front of your competition.",
  'images' => [
									 'images/PowerBI_200x60_Black4.svg',
									 'images/Tableau_200x60_Black5.svg',
									 'images/GTM_200x60_Black1.svg',
									 'images/GoogleAnalytics_200x60_Black3.svg',
									 'images/Optimize_200x60_Black2.svg',
									 ]
];
?>
<?php echo $__env->make('service-header',$sh, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('service-list',$sl, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('service-cta',$sc, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('service-partners',$sp, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('service-footer',['services' => $services], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\fortune-3\resources\views/service-research-analytics-solutions.blade.php ENDPATH**/ ?>