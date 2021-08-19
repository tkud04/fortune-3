
<!DOCTYPE html>
<html id="sitetop" lang="en-US" class="attop webp">
<head><script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>class RocketLazyLoadScripts{constructor(e){this.triggerEvents=e,this.eventOptions={passive:!0},this.userEventListener=this.triggerListener.bind(this),this.delayedScripts={normal:[],async:[],defer:[]},this.allJQueries=[]}_addUserInteractionListener(e){this.triggerEvents.forEach((t=>window.addEventListener(t,e.userEventListener,e.eventOptions)))}_removeUserInteractionListener(e){this.triggerEvents.forEach((t=>window.removeEventListener(t,e.userEventListener,e.eventOptions)))}triggerListener(){this._removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this._loadEverythingNow.bind(this)):this._loadEverythingNow()}async _loadEverythingNow(){this._delayEventListeners(),this._delayJQueryReady(this),this._handleDocumentWrite(),this._registerAllDelayedScripts(),this._preloadAllScripts(),await this._loadScriptsFromList(this.delayedScripts.normal),await this._loadScriptsFromList(this.delayedScripts.defer),await this._loadScriptsFromList(this.delayedScripts.async),await this._triggerDOMContentLoaded(),await this._triggerWindowLoad(),window.dispatchEvent(new Event("rocket-allScriptsLoaded"))}_registerAllDelayedScripts(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((e=>{e.hasAttribute("src")?e.hasAttribute("async")&&!1!==e.async?this.delayedScripts.async.push(e):e.hasAttribute("defer")&&!1!==e.defer||"module"===e.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(e):this.delayedScripts.normal.push(e):this.delayedScripts.normal.push(e)}))}async _transformScript(e){return await this._requestAnimFrame(),new Promise((t=>{const n=document.createElement("script");let r;[...e.attributes].forEach((e=>{let t=e.nodeName;"type"!==t&&("data-rocket-type"===t&&(t="type",r=e.nodeValue),n.setAttribute(t,e.nodeValue))})),e.hasAttribute("src")?(n.addEventListener("load",t),n.addEventListener("error",t)):(n.text=e.text,t()),e.parentNode.replaceChild(n,e)}))}async _loadScriptsFromList(e){const t=e.shift();return t?(await this._transformScript(t),this._loadScriptsFromList(e)):Promise.resolve()}_preloadAllScripts(){var e=document.createDocumentFragment();[...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async].forEach((t=>{const n=t.getAttribute("src");if(n){const t=document.createElement("link");t.href=n,t.rel="preload",t.as="script",e.appendChild(t)}})),document.head.appendChild(e)}_delayEventListeners(){let e={};function t(t,n){!function(t){function n(n){return e[t].eventsToRewrite.indexOf(n)>=0?"rocket-"+n:n}e[t]||(e[t]={originalFunctions:{add:t.addEventListener,remove:t.removeEventListener},eventsToRewrite:[]},t.addEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.add.apply(t,arguments)},t.removeEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.remove.apply(t,arguments)})}(t),e[t].eventsToRewrite.push(n)}function n(e,t){let n=e[t];Object.defineProperty(e,t,{get:()=>n||function(){},set(r){e["rocket"+t]=n=r}})}t(document,"DOMContentLoaded"),t(window,"DOMContentLoaded"),t(window,"load"),t(window,"pageshow"),t(document,"readystatechange"),n(document,"onreadystatechange"),n(window,"onload"),n(window,"onpageshow")}_delayJQueryReady(e){let t=window.jQuery;Object.defineProperty(window,"jQuery",{get:()=>t,set(n){if(n&&n.fn&&!e.allJQueries.includes(n)){n.fn.ready=n.fn.init.prototype.ready=function(t){e.domReadyFired?t.bind(document)(n):document.addEventListener("rocket-DOMContentLoaded",(()=>t.bind(document)(n)))};const t=n.fn.on;n.fn.on=n.fn.init.prototype.on=function(){if(this[0]===window){function e(e){return e.split(" ").map((e=>"load"===e||0===e.indexOf("load.")?"rocket-jquery-load":e)).join(" ")}"string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=e(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{delete Object.assign(arguments[0],{[e(t)]:arguments[0][t]})[t]}))}return t.apply(this,arguments),this},e.allJQueries.push(n)}t=n}})}async _triggerDOMContentLoaded(){this.domReadyFired=!0,await this._requestAnimFrame(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._requestAnimFrame(),window.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._requestAnimFrame(),document.dispatchEvent(new Event("rocket-readystatechange")),await this._requestAnimFrame(),document.rocketonreadystatechange&&document.rocketonreadystatechange()}async _triggerWindowLoad(){await this._requestAnimFrame(),window.dispatchEvent(new Event("rocket-load")),await this._requestAnimFrame(),window.rocketonload&&window.rocketonload(),await this._requestAnimFrame(),this.allJQueries.forEach((e=>e(window).trigger("rocket-jquery-load"))),window.dispatchEvent(new Event("rocket-pageshow")),await this._requestAnimFrame(),window.rocketonpageshow&&window.rocketonpageshow()}_handleDocumentWrite(){const e=new Map;document.write=document.writeln=function(t){const n=document.currentScript,r=document.createRange(),i=n.parentElement;let o=e.get(n);void 0===o&&(o=n.nextSibling,e.set(n,o));const a=document.createDocumentFragment();r.setStart(a,0),a.appendChild(r.createContextualFragment(t)),i.insertBefore(a,o)}}async _requestAnimFrame(){return new Promise((e=>requestAnimationFrame(e)))}static run(){const e=new RocketLazyLoadScripts(["keydown","mousemove","touchmove","touchstart","touchend","wheel"]);e._addUserInteractionListener(e)}}RocketLazyLoadScripts.run();
</script>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chome=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="text/javascript">
if(!gform){document.addEventListener("gform_main_scripts_loaded",function(){gform.scriptsLoaded=!0}),window.addEventListener("DOMContentLoaded",function(){gform.domLoaded=!0});var gform={domLoaded:!1,scriptsLoaded:!1,initializeOnLoaded:function(o){gform.domLoaded&&gform.scriptsLoaded?o():!gform.domLoaded&&gform.scriptsLoaded?window.addEventListener("DOMContentLoaded",o):document.addEventListener("gform_main_scripts_loaded",o)},hooks:{action:{},filter:{}},addAction:function(o,n,r,t){gform.addHook("action",o,n,r,t)},addFilter:function(o,n,r,t){gform.addHook("filter",o,n,r,t)},doAction:function(o){gform.doHook("action",o,arguments)},applyFilters:function(o){return gform.doHook("filter",o,arguments)},removeAction:function(o,n){gform.removeHook("action",o,n)},removeFilter:function(o,n,r){gform.removeHook("filter",o,n,r)},addHook:function(o,n,r,t,i){null==gform.hooks[o][n]&&(gform.hooks[o][n]=[]);var e=gform.hooks[o][n];null==i&&(i=n+"_"+e.length),null==t&&(t=10),gform.hooks[o][n].push({tag:i,callable:r,priority:t})},doHook:function(o,n,r){if(r=Array.prototype.slice.call(r,1),null!=gform.hooks[o][n]){var t,i=gform.hooks[o][n];i.sort(function(o,n){return o.priority-n.priority});for(var e=0;e<i.length;e++)"function"!=typeof(t=i[e].callable)&&(t=window[t]),"action"==o?t.apply(null,r):r[0]=t.apply(null,r)}if("filter"==o)return r[0]},removeHook:function(o,n,r,t){if(null!=gform.hooks[o][n])for(var i=gform.hooks[o][n],e=i.length-1;0<=e;e--)null!=t&&t!=i[e].tag||null!=r&&r!=i[e].priority||i.splice(e,1)}}}
</script>

    <meta name="viewport" content="width=device-width,initial-scale=1">	
	
	<link rel="apple-touch-icon" sizes="180x180" href="https://www.amsivedigital.com/apple-touch-icon.png?v=1.1">
	<link rel="icon" type="image/png" sizes="32x32" href="https://www.amsivedigital.com/favicon-32x32.png?v=1.1">
	<link rel="icon" type="image/png" sizes="16x16" href="https://www.amsivedigital.com/favicon-16x16.png?v=1.1">
	<link rel="manifest" href="https://www.amsivedigital.com/site.webmanifest?v=1.1">
	<link rel="mask-icon" href="https://www.amsivedigital.com/safari-pinned-tab.svg?v=1.1" color="#7c0f81">
	<meta name="msapplication-TileColor" content="#7c0f81">
	<meta name="theme-color" content="#ffffff">
	<script>
         const webp = new Image();
         webp.src = "data:image/webp;base64,UklGRhoAAABXRUJQVlA4TA0AAAAvAAAAEAcQERGIiP4HAA==";
			webp.onerror = function () { 
				document.documentElement.classList.remove("webp"); 
			}
    </script>
	<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
		<link rel="preload" href="https://www.amsivedigital.com/wp-content/themes/ad-theme/assets/fonts/titillium-web-light.woff2" as="font" type="font/woff2" crossorigin="anonymous">
		<link rel="preload" href="https://www.amsivedigital.com/wp-content/themes/ad-theme/assets/fonts/titillium-web-regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
		<link rel="preload" href="https://www.amsivedigital.com/wp-content/themes/ad-theme/assets/fonts/roboto-regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
		
		<link rel="preload" as="image" href="https://www.amsivedigital.com/wp-content/uploads/2021/05/Amsive-Hero-02.jpg.webp"   media="(min-width:768px)">
<link rel="preload" as="image" href="https://www.amsivedigital.com/wp-content/uploads/2021/05/Amsive-Hero-02-mobile.jpg.webp" imagesrcset="https://www.amsivedigital.com/wp-content/uploads/2021/05/Amsive-Hero-02-mobile.jpg.webp 414w, https://www.amsivedigital.com/wp-content/uploads/2021/05/Amsive-Hero-02-mobile-331x400.jpg.webp 331w, https://www.amsivedigital.com/wp-content/uploads/2021/05/Amsive-Hero-02-mobile-166x200.jpg.webp 166w" imagesizes="(max-width: 414px) 100vw, 414px" media="(max-width:767.98px)">

	<!-- This site is optimized with the Yoast SEO Premium plugin v16.9 (Yoast SEO v16.9) - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Amsive Digital, Formerly Path Interactive | Digital Performance Marketing Agency</title>
	<meta name="description" content="Amplifying results with data-centric digital marketing services for businesses of all sizes. We think strategically, work collectively, and pivot quickly. Formerly Path Interactive." />
	<link rel="canonical" href="https://www.amsivedigital.com/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Amsive Digital" />
	<meta property="og:description" content="Amplifying results with data-centric digital marketing services for businesses of all sizes. We think strategically, work collectively, and pivot quickly. Formerly Path Interactive." />
	<meta property="og:url" content="https://www.amsivedigital.com/" />
	<meta property="og:site_name" content="Amsive Digital" />
	<meta property="article:publisher" content="https://www.facebook.com/amsivedigital" />
	<meta property="article:modified_time" content="2021-08-10T14:30:36+00:00" />
	<meta property="og:image" content="https://www.amsivedigital.com/wp-content/uploads/2021/06/Amsive_social.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="628" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Amsive Digital" />
	<meta name="twitter:image" content="https://www.amsivedigital.com/wp-content/uploads/2021/06/Amsive_social.jpg" />
	<meta name="twitter:site" content="@amsive_digital" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://www.amsivedigital.com/#organization","name":"Amsive Digital, Inc.","url":"https://www.amsivedigital.com/","sameAs":["https://www.facebook.com/amsivedigital","https://www.instagram.com/amsivedigital/","https://www.linkedin.com/company/amsivedigital/","https://twitter.com/amsive_digital"],"logo":{"@type":"ImageObject","@id":"https://www.amsivedigital.com/#logo","inLanguage":"en-US","url":"https://www.amsivedigital.com/wp-content/uploads/2021/04/amsivedigitallogo.png","contentUrl":"https://www.amsivedigital.com/wp-content/uploads/2021/04/amsivedigitallogo.png","width":1400,"height":515,"caption":"Amsive Digital, Inc."},"image":{"@id":"https://www.amsivedigital.com/#logo"}},{"@type":"WebSite","@id":"https://www.amsivedigital.com/#website","url":"https://www.amsivedigital.com/","name":"Amsive Digital","description":"","publisher":{"@id":"https://www.amsivedigital.com/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.amsivedigital.com/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"ImageObject","@id":"https://www.amsivedigital.com/#primaryimage","inLanguage":"en-US","url":"https://www.amsivedigital.com/wp-content/uploads/2021/06/Amsive_social.jpg","contentUrl":"https://www.amsivedigital.com/wp-content/uploads/2021/06/Amsive_social.jpg","width":1200,"height":628},{"@type":"WebPage","@id":"https://www.amsivedigital.com/#webpage","url":"https://www.amsivedigital.com/","name":"Amsive Digital, Formerly Path Interactive | Digital Performance Marketing Agency","isPartOf":{"@id":"https://www.amsivedigital.com/#website"},"about":{"@id":"https://www.amsivedigital.com/#organization"},"datePublished":"2021-02-21T19:27:39+00:00","dateModified":"2021-08-10T14:30:36+00:00","description":"Amplifying results with data-centric digital marketing services for businesses of all sizes. We think strategically, work collectively, and pivot quickly. Formerly Path Interactive.","breadcrumb":{"@id":"https://www.amsivedigital.com/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://www.amsivedigital.com/"]}]},{"@type":"BreadcrumbList","@id":"https://www.amsivedigital.com/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]}]}</script>
	<!-- / Yoast SEO Premium plugin. -->



<link rel="alternate" type="application/rss+xml" title="Amsive Digital &raquo; Feed" href="https://www.amsivedigital.com/feed/" />
<link rel='stylesheet' id='bootstrap-css'  href='https://www.amsivedigital.com/wp-content/themes/ad-theme/bootstrap-custom/make/bootstrap-cust.min.css?ver=1624397687' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='styles-css'  href='https://www.amsivedigital.com/wp-content/cache/min/1/wp-content/themes/ad-theme/dist/css/styles.min.css?ver=1628889607' type='text/css' media='all' />
<link rel="https://api.w.org/" href="https://www.amsivedigital.com/wp-json/" /><link rel="alternate" type="application/json" href="https://www.amsivedigital.com/wp-json/wp/v2/pages/2" /><link rel='shortlink' href='https://www.amsivedigital.com/' />
<script type="rocketlazyloadscript">var WarningBrowserPath = {"pathwarning_title":"Your browser is no longer supported.","pathwarning_sub":"A modern browser is required for security, performance, and reliability.","pathwarning_logo":"https://www.amsivedigital.com/wp-content/uploads/2021/03/Amsive-Digital-Logo-White.svg"};</script>
<style>#ie_over {background-color: rgba(124, 15, 129, 1);} .ieisold #ie_over .container-fluid h1 {color:#ffffff !important; } .ieisold #ie_over .container-fluid h2 {color:#ffffff !important; } .ieisold #ie_over .content-table a ins {color:#ffffff !important; } .ieisold #ie_over svg path {fill:#ffffff !important;} </style><script type="rocketlazyloadscript" data-minify='0' >
						!function( d ) {
							if( document.documentMode ){
								var s = d.createElement('script');
									s.src = 'https://www.amsivedigital.com/wp-content/plugins/amsive-IE11-warning-master/assets/js/iewarn.js';
									d.head.appendChild(s);
								var c = d.createElement('link');
									c.href = 'https://www.amsivedigital.com/wp-content/plugins/amsive-IE11-warning-master/assets/css/iewarn.css';
									c.setAttribute('rel', 'stylesheet');
									c.setAttribute('type', 'text/css');
									d.head.appendChild(c);	
							}
						}(document)
						</script><noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript><!-- Google Tag Manager -->
<script type="rocketlazyloadscript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
 new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
 j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
 })(window,document,'script','dataLayer','GTM-M7Z2VVX');</script>
<!-- End Google Tag Manager -->
</head>

<body class="home page--home-template page-home-page noawesome hashero-video hashero">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7Z2VVX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="site-header" id="main-header">
							<div id="top-bar" class="bg-primary-2 py-2">
						<div class="container-fluid mw-xl text-center text-white">
							<div class="py-1"><p><a href="/insights/news/say-hello-to-amsive-digital/">PATH INTERACTIVE IS NOW AMSIVE DIGITAL.</a></p>
</div>
						</div>
					</div>
				        <nav id="header-nav-container" class="header-nav navbar-expand-md navbar py-0" role="navigation">			
            <div class="container-fluid mw-xl align-items-stretch">
				<div class="navbar-header d-flex justify-content-between py-lg-4 py-3">
					<div class="logo-wrap">
												<a class="logo" href="https://www.amsivedigital.com/" id="site-logo"
						   title="Amsive Digital" rel="home">
							<div class="svg-logo"><canvas id="iesvg"></canvas><svg id="Amsive_Digital_-_Logo_Multi" data-name="Amsive Digital - Logo Multi" xmlns="http://www.w3.org/2000/svg" width="199" height="81" viewBox="0 0 415.703 169.939">
  <g id="Group_61" data-name="Group 61" transform="translate(0 0)">
    <path id="Path_57" data-name="Path 57" d="M1667.22,460.163,1643.4,384.9h16.753l17.979,63.707,17.979-63.707h16.732l-23.82,75.263Z" transform="translate(-1364.172 -383.32)" fill="#7C0080"/>
    <rect id="Rectangle_107" data-name="Rectangle 107" width="15.63" height="75.263" transform="translate(253.371 1.58)" fill="#7C0080"/>
    <path id="Path_58" data-name="Path 58" d="M2032.532,455.722a69.1,69.1,0,0,0,22.822-4.032l2.141-15.8s-10,5.279-25.316,5.279c-16.483,0-17.46-8.335-17.46-13.614V422.82h17.958c15.007,0,29.6-4.614,29.6-22.261,0-12.8-11.141-23.259-30.575-23.259-16.773,0-31.8,6.111-31.8,26.522v25.5C1999.879,449.882,2016.091,455.722,2032.532,455.722Zm-17.834-52.9c0-8.231,7.815-11.723,16.711-11.723,7.192,0,16.171,2.536,16.171,9.665,0,7.524-6.4,9.5-16.67,9.5H2014.7Z" transform="translate(-1646.573 -377.3)" fill="#7C0080"/>
    <path id="Path_59" data-name="Path 59" d="M329.744,377.3a69.1,69.1,0,0,0-22.822,4.032l-2.141,15.8s10-5.279,25.316-5.279c16.483,0,17.46,8.335,17.46,13.614V410.2H329.6c-15.007,0-29.6,4.614-29.6,22.261,0,12.8,11.141,23.259,30.575,23.259,16.774,0,31.8-6.111,31.8-26.522V403.7C362.4,383.161,346.185,377.3,329.744,377.3Zm17.834,52.9c0,8.231-7.815,11.723-16.711,11.723-7.192,0-16.171-2.536-16.171-9.665,0-7.524,6.4-9.5,16.67-9.5h16.212Z" transform="translate(-300 -377.3)" fill="#7C0080"/>
    <path id="Path_60" data-name="Path 60" d="M1184.45,400.974c0-7.607,8.854-9.416,16.483-9.416a48.876,48.876,0,0,1,23.176,5.778l2.016-14.861s-8.667-5.176-25.94-5.176c-15.818,0-30.284,6.527-30.284,23.03,0,31.219,45.956,17.169,45.956,32.217,0,6.547-8.418,8.813-17.958,8.813a51.756,51.756,0,0,1-25.9-7.129l-2.1,15.485s10.58,6.007,28.164,6.007c21.18,0,32.466-8.834,32.466-22.739C1230.53,401.681,1184.45,416.5,1184.45,400.974Z" transform="translate(-989.09 -377.3)" fill="#7C0080"/>
    <path id="Path_61" data-name="Path 61" d="M734.884,460.163,720.148,384.9h-20.39l-16.815,63.707L666.127,384.9h-20.39L631,460.163h16.337l8.834-54.062,15.88,54.062h21.783l15.88-54.062,8.834,54.062Z" transform="translate(-562.201 -383.32)" fill="#7C0080"/>
  </g>
  <g id="Group_62" data-name="Group 62" transform="translate(189.976 117.644)">
    <path id="Path_62" data-name="Path 62" d="M1214,997.62V946.8h18.146c14.757,0,18.79,10.289,18.79,24.672,0,14.549-3.825,26.148-18.79,26.148Zm18.146-45.811h-12.492v40.822h12.492c10.579,0,12.991-10.143,12.991-21.159S1242.725,951.809,1232.146,951.809Z" transform="translate(-1214 -946.073)" fill="#8C8C8C"/>
    <path id="Path_63" data-name="Path 63" d="M1432.1,946.8h5.654v50.82H1432.1Z" transform="translate(-1386.767 -946.073)" fill="#8C8C8C"/>
    <path id="Path_64" data-name="Path 64" d="M1522.178,968.866h14.03v24.963a123.779,123.779,0,0,1-16.524,1.767c-15.568,0-19.684-9.541-19.684-26,0-16.9,4.261-26.293,19.538-26.293a94.463,94.463,0,0,1,16.669,1.912l-.229,4.7a116.783,116.783,0,0,0-15.8-1.538c-11.744,0-14.321,6.838-14.321,21.222,0,14.093,2.494,20.993,14.238,20.993a70.02,70.02,0,0,0,10.5-1.019V973.917h-8.439v-5.051Z" transform="translate(-1440.554 -943.3)" fill="#8C8C8C"/>
    <path id="Path_65" data-name="Path 65" d="M1718.6,946.8h5.654v50.82H1718.6Z" transform="translate(-1613.718 -946.073)" fill="#8C8C8C"/>
    <path id="Path_66" data-name="Path 66" d="M1775.2,946.8h36.706v5.072h-15.485V997.62h-5.57V951.872H1775.2Z" transform="translate(-1658.554 -946.073)" fill="#8C8C8C"/>
    <path id="Path_67" data-name="Path 67" d="M1953.589,946.8h12.347l13.947,50.82h-5.591l-3.679-13.074H1948.87l-3.679,13.074H1939.6Zm-3.45,32.7h19.247l-7.711-27.831h-3.825Z" transform="translate(-1788.783 -946.073)" fill="#8C8C8C"/>
    <path id="Path_68" data-name="Path 68" d="M2165.3,997.62V946.8h5.653v45.748h22.323v5.072Z" transform="translate(-1967.571 -946.073)" fill="#8C8C8C"/>
  </g>
</svg>
</div>														</a>
					</div>
					<button id="togglemobh" class="hamburger hamburger--spin navbar-toggler" type="button"  data-bs-toggle="collapse" data-bs-target="#mobile-nav" aria-controls="mobile-nav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>
				<div class="menu-container px-0 py-lg-4 py-3 d-none d-md-block"><ul id="header-nav" class="m-0 h-100"><li class=" menu-item nav-item firstline" ><a href="https://www.amsivedigital.com/about/" class="nav-link "><span>About</span></a></li>
<li class=" menu-item nav-item has-sub-menu dropdown firstline" data-toggle-dropdown="closed"><a title="See All Services" href="https://www.amsivedigital.com/services/" class="nav-link  gotosub"><span>Services</span><svg height="16" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="angle-down" class="svg-inline--fa fa-angle-down fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M119.5 326.9L3.5 209.1c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0L128 287.3l100.4-102.2c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L136.5 327c-4.7 4.6-12.3 4.6-17-.1z"></path></svg></a><div class="sub-menu-wrap three-col"><div class="container-fluid mw-xl"><div class="row text-start py-4"><div class="promo text-start col-lg-4 offset-xl-1"><div class="p-3 text-start"><h3 class="mb-lg-4 d-inline-block d-lg-block"> We help brands grow.</h3><a class="text-primary small-font font-weight-600 titillium-web second-link px-0 pb-2 ms-3 ms-lg-0" href="https://www.amsivedigital.com/services/" target="_self">See All Services</a></div></div><div class="py-3 px-4 col-xl-7 col-lg-8">
<ul class="sub-menu list-unstyled row"  role="menu">
	<li class=" menu-item nav-item col-lg-6 col-4 text-start mb-3" ><a href="https://www.amsivedigital.com/services/paid-media/" class="nav-link h6 text-primary px-0 pt-0 pb-2 mb-0 d-inline-block"><span>Paid Media</span></a><div class="sub-desc small-font titillium-web">Develop the best full-funnel media mix.</div></li>
	<li class=" menu-item nav-item col-lg-6 col-4 text-start mb-3" ><a href="https://www.amsivedigital.com/services/social/" class="nav-link h6 text-primary px-0 pt-0 pb-2 mb-0 d-inline-block"><span>Social</span></a><div class="sub-desc small-font titillium-web">Build an authentic, action-oriented community.</div></li>
	<li class=" menu-item nav-item col-lg-6 col-4 text-start mb-3" ><a href="https://www.amsivedigital.com/services/data-solutions/" class="nav-link h6 text-primary px-0 pt-0 pb-2 mb-0 d-inline-block"><span>Data + Analytics Solutions</span></a><div class="sub-desc small-font titillium-web">Grow with actionable data and analytics.</div></li>
	<li class=" menu-item nav-item col-lg-6 col-4 text-start mb-3" ><a href="https://www.amsivedigital.com/services/seo/" class="nav-link h6 text-primary px-0 pt-0 pb-2 mb-0 d-inline-block"><span>SEO</span></a><div class="sub-desc small-font titillium-web">Optimize and advance a modern search strategy.</div></li>
	<li class=" menu-item nav-item col-lg-6 col-4 text-start mb-3" ><a href="https://www.amsivedigital.com/services/performance-creative/" class="nav-link h6 text-primary px-0 pt-0 pb-2 mb-0 d-inline-block"><span>Performance Creative</span></a><div class="sub-desc small-font titillium-web">Power brand creative with valuable data and insights.</div></li>
	<li class=" menu-item nav-item col-lg-6 col-4 text-start mb-3" ><a href="https://www.amsivedigital.com/services/strategy/" class="nav-link h6 text-primary px-0 pt-0 pb-2 mb-0 d-inline-block"><span>Strategy</span></a><div class="sub-desc small-font titillium-web">Amplify business outcomes with top-tier thinking.</div></li>
</ul>
</li>
<li class=" menu-item nav-item firstline" ><a href="https://www.amsivedigital.com/clients/" class="nav-link "><span>Results</span></a></li>
<li class=" menu-item nav-item firstline" ><a href="https://www.amsivedigital.com/insights/" class="nav-link "><span>Insights</span></a></li>
<li class="boxed menu-item nav-item firstline" ><a href="https://www.amsivedigital.com/contact/" class="nav-link "><span>Contact</span></a></li>
</ul></div><div class="mob-holder menu-container p-0 d-md-none"><ul id="mobile-nav" class="list-unstyled collapse"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-13916" class="menu-item nav-item"><a title="About" href="https://www.amsivedigital.com/about/" class="nav-link">About</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-14023" class="menu-item dropdown nav-item"><a title="See All Services" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-14023">Services</a>
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-14023" role="menu">
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item nav-item duplicated"><a title="Services" href="https://www.amsivedigital.com/services/" class="dropdown-item">Services</a></li>	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-16100" class="menu-item nav-item"><a title="Paid Media" href="https://www.amsivedigital.com/services/paid-media/" class="dropdown-item">Paid Media</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-16098" class="menu-item nav-item"><a title="Social" href="https://www.amsivedigital.com/services/social/" class="dropdown-item">Social</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-16096" class="menu-item nav-item"><a title="Data + Analytics Solutions" href="https://www.amsivedigital.com/services/data-solutions/" class="dropdown-item">Data + Analytics Solutions</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-16099" class="menu-item nav-item"><a title="SEO" href="https://www.amsivedigital.com/services/seo/" class="dropdown-item">SEO</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-16097" class="menu-item nav-item"><a title="Performance Creative" href="https://www.amsivedigital.com/services/performance-creative/" class="dropdown-item">Performance Creative</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-16095" class="menu-item nav-item"><a title="Strategy" href="https://www.amsivedigital.com/services/strategy/" class="dropdown-item">Strategy</a></li>
</ul>
</li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-16105" class="menu-item nav-item"><a title="Results" href="https://www.amsivedigital.com/clients/" class="nav-link">Results</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-14808" class="menu-item nav-item"><a title="Insights" href="https://www.amsivedigital.com/insights/" class="nav-link">Insights</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-14119" class="boxed menu-item nav-item"><a title="Contact" href="https://www.amsivedigital.com/contact/" class="nav-link">Contact</a></li>
</ul></div>            </div>
        </nav><!-- end .navbar-->
</header>
<div id="page-content-container">
	<div class="container-fluid mw-xl">
        <div class="main-content home-page">
            	<style>	
		#block_60399ede58603 .image-background {
			background-position: center center;
		}
	</style>
</div></div><section id="block_60399ede58603" class="content-block d-flex  alignfull adtheme-hero align-items-sm-center align-items-end mob-stack color-as-herotype height-full has-background background-000000 has-background video-as-background has-font-color text-default">							<video class="video-background skip-lazy d-none d-md-block" autoplay muted  playsinline preload="auto" aria-hidden="true" poster="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
						
												<source src="https://www.amsivedigital.com/wp-content/uploads/2021/05/Amsive-Hero-02_optimized.mp4" type="video/mp4">
										</video>
					<div class="image-background skip-lazy d-none d-md-block">
												<picture class="skip-lazy object-cover object-center w-100 h-100" aria-hidden="true" loading="eager">
<source type="image/webp" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/05/Amsive-Hero-02.jpg.webp"/>
<img width="1920" height="1080" src="https://www.amsivedigital.com/wp-content/uploads/2021/05/Amsive-Hero-02.jpg" aria-hidden="true" loading="eager"/>
</picture>

					</div>
				
				
				
					<div class="image-background skip-lazy d-block d-md-none">
						<picture class="skip-lazy object-cover object-center w-100 h-100" aria-hidden="true" loading="eager">
<source type="image/webp" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/05/Amsive-Hero-02-mobile.jpg.webp 414w, https://www.amsivedigital.com/wp-content/uploads/2021/05/Amsive-Hero-02-mobile-331x400.jpg.webp 331w, https://www.amsivedigital.com/wp-content/uploads/2021/05/Amsive-Hero-02-mobile-166x200.jpg.webp 166w" sizes="(max-width: 414px) 100vw, 414px"/>
<img width="414" height="500" src="https://www.amsivedigital.com/wp-content/uploads/2021/05/Amsive-Hero-02-mobile.jpg" alt="Amsive Hero Mobile" aria-hidden="true" loading="eager" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/05/Amsive-Hero-02-mobile.jpg 414w, https://www.amsivedigital.com/wp-content/uploads/2021/05/Amsive-Hero-02-mobile-331x400.jpg 331w, https://www.amsivedigital.com/wp-content/uploads/2021/05/Amsive-Hero-02-mobile-166x200.jpg 166w" sizes="(max-width: 414px) 100vw, 414px"/>
</picture>
					</div>
							
						
				<button class="video-toggle"><span class="screen-reader-text">Toggle video playback</span></button>
			
	<div class="container-fluid mw-xl hero-block-content pt-sm-5 mt-sm-5">
		<div class="row h-100">
			<div class="col-md-7 text-start my-sm-3 my-4 text-white ">
																<h1 class="hero-title display-1">We’re your data-driven brand growth engine.</h1>						
				<div class="d-none d-sm-block">
											<div class="hero-block-description py-3 h5">Amplify your business with our data-centric, performance-driven digital marketing solutions.</div>
																<a class="btn btn-secondary" href="/services/" target="_self">Explore</a>
									
				</div>
			</div>
		</div>		
	</div>
</section>
	<div class="d-sm-none d-block has-bg-color background-000000 text-white ">
		<div class="container-fluid mw-xl hero-block-content py-4">
					
							<div class="h5">
					Amplify your business with our data-centric, performance-driven digital marketing solutions.				</div>
										<a class="btn btn-secondary mt-3" href="/services/" target="_self">Explore</a>
					</div>
	</div>
<div><div class="container-fluid mw-xl">

</div></div><section id="block_605b0968f7c58" class="content-block py-5  alignfull three-featured has-font-color text-default">	<div class="container-fluid mw-xl">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-lg-6 mb-lg-3">
					
													<div class="label">WHAT WE DO</div>
												
													<h2 class="display-2 mb-4">We solve digital challenges.</h2>
												
													<p class="pe-xl-5 me-xl-4 mb-4 text-base">Together, we help our clients achieve tangible, measurable results. Focused on business outcomes — we bring a unique set of expertise and skills to the party.</p>
							
						
												
					</div>
					<div class="col-lg-6">
														<div class="row link-box-wrap py-3">
									<div class="col-xl-2 col-md-3">
																						
											<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" class="mb-3" alt="homepage_icons_audience" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/04/homepage_icons_audience.svg" /><noscript><img src="https://www.amsivedigital.com/wp-content/uploads/2021/04/homepage_icons_audience.svg" class="mb-3" alt="homepage_icons_audience" /></noscript>												
																			</div>
									<div class="col-xl-10 col-md-9">										
																					<div class="h4 mb-3 text-primary">Better audiences.</div>
																															<div class="small-font text-base">Our proprietary XactAudience solution leverages an in-house database of 260M+ customers and 2,000+ custom variables to build custom predictive models to drive business growth — from only the best customers.</div>
																			</div>
								</div>
															<div class="row link-box-wrap py-3">
									<div class="col-xl-2 col-md-3">
																						
											<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" class="mb-3" alt="homepage_icons_persona" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/04/homepage_icons_persona.svg" /><noscript><img src="https://www.amsivedigital.com/wp-content/uploads/2021/04/homepage_icons_persona.svg" class="mb-3" alt="homepage_icons_persona" /></noscript>												
																			</div>
									<div class="col-xl-10 col-md-9">										
																					<div class="h4 mb-3 text-primary">Better analytics.</div>
																															<div class="small-font text-base">We think beyond just data reporting to deliver real-time insights with enterprise toolsets to turn data points into actionable opportunities.</div>
																			</div>
								</div>
															<div class="row link-box-wrap py-3">
									<div class="col-xl-2 col-md-3">
																						
											<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" class="mb-3" alt="homepage_icons_strategy" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/04/homepage_icons_strategy.svg" /><noscript><img src="https://www.amsivedigital.com/wp-content/uploads/2021/04/homepage_icons_strategy.svg" class="mb-3" alt="homepage_icons_strategy" /></noscript>												
																			</div>
									<div class="col-xl-10 col-md-9">										
																					<div class="h4 mb-3 text-primary">Better outcomes.</div>
																															<div class="small-font text-base">We drive successful results — and then amplify them with holistic strategy, robust tactical solutions, and performance-driven creative.</div>
																			</div>
								</div>
																		</div>
				</div>
			</div>			
		</div>				
			</div>
</section>
	
<div><div class="container-fluid mw-xl">

	

	<style>
		#block_6039a30e274c4 {
						background: #420045;
					}
	</style>

</div></div><section id="block_6039a30e274c4" class="content-block py-5  alignfull mb-md-0 what-we-do bg-420045 dark-mode has-font-color text-default">	<div class="container-fluid mw-xl">
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
<div><div class="container-fluid mw-xl">

</div></div><section id="block_603bea155a384" class="content-block  alignfull logo-block py-5 has-font-color text-default">	<style>
		#block_603bea155a384 .logos-row .logo-item {			
						flex: 1 0 25%;
			max-width:25%;
						
		}
	</style>	

			<script type="rocketlazyloadscript">
			function block_603bea155a384_logoToggle() {
				var parent_b = document.getElementById("block_603bea155a384"); 
				var logos = parent_b.getElementsByClassName("rest-select");
				var btn = document.getElementById("block_603bea155a384-logo-toggle"); 
				
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
													<h2 class="display-2">A partner, not a vendor.</h2>						
													<p class="pt-3 text-base">We develop deep, long-term relationships with our clients, whether they’re a major national brand or a local start-up. Bring us your business challenges — and we’ll roll up our sleeves and get to work.</p>
							</div>
		</div>
			
				<div class="row  pt-5">
			<div class="col mb-md-3">
							<div class="row logos-row g-2  nodesc">
										<div class="logo-item text-center first-selection my-auto  flexed">						
													
							<div class="mx-auto logo-holder" >
								<picture class="d-inline-block mb-3">
<source type="image/webp" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/hello_logo_2.png.webp 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/hello_logo_2-400x119.png.webp 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/hello_logo_2-150x45.png.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 546px) 100vw, 546px"/>
<img width="546" height="163" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" alt="hello_logo_2" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/hello_logo_2.png 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/hello_logo_2-400x119.png 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/hello_logo_2-150x45.png 150w" data-lazy-sizes="(max-width: 546px) 100vw, 546px" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/03/hello_logo_2.png"/>
</picture>
<noscript><picture class="d-inline-block mb-3">
<source type="image/webp" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/hello_logo_2.png.webp 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/hello_logo_2-400x119.png.webp 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/hello_logo_2-150x45.png.webp 150w" sizes="(max-width: 546px) 100vw, 546px"/>
<img width="546" height="163" src="https://www.amsivedigital.com/wp-content/uploads/2021/03/hello_logo_2.png" alt="hello_logo_2" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/hello_logo_2.png 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/hello_logo_2-400x119.png 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/hello_logo_2-150x45.png 150w" sizes="(max-width: 546px) 100vw, 546px"/>
</picture>
</noscript>							</div>
																	</div>
										<div class="logo-item text-center first-selection my-auto  flexed">						
													
							<div class="mx-auto logo-holder" >
								<picture class="d-inline-block mb-3">
<source type="image/webp" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/noggin_logo_2.png.webp 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/noggin_logo_2-400x119.png.webp 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/noggin_logo_2-150x45.png.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 546px) 100vw, 546px"/>
<img width="546" height="163" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" alt="Noggin | Amsive Digital" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/noggin_logo_2.png 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/noggin_logo_2-400x119.png 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/noggin_logo_2-150x45.png 150w" data-lazy-sizes="(max-width: 546px) 100vw, 546px" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/03/noggin_logo_2.png"/>
</picture>
<noscript><picture class="d-inline-block mb-3">
<source type="image/webp" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/noggin_logo_2.png.webp 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/noggin_logo_2-400x119.png.webp 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/noggin_logo_2-150x45.png.webp 150w" sizes="(max-width: 546px) 100vw, 546px"/>
<img width="546" height="163" src="https://www.amsivedigital.com/wp-content/uploads/2021/03/noggin_logo_2.png" alt="Noggin | Amsive Digital" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/noggin_logo_2.png 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/noggin_logo_2-400x119.png 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/noggin_logo_2-150x45.png 150w" sizes="(max-width: 546px) 100vw, 546px"/>
</picture>
</noscript>							</div>
																	</div>
										<div class="logo-item text-center first-selection my-auto  flexed">						
													
							<div class="mx-auto logo-holder" >
								<picture class="d-inline-block mb-3">
<source type="image/webp" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/bet_logo_2.png.webp 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/bet_logo_2-400x119.png.webp 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/bet_logo_2-150x45.png.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 546px) 100vw, 546px"/>
<img width="546" height="163" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" alt="bet_logo_2" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/bet_logo_2.png 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/bet_logo_2-400x119.png 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/bet_logo_2-150x45.png 150w" data-lazy-sizes="(max-width: 546px) 100vw, 546px" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/03/bet_logo_2.png"/>
</picture>
<noscript><picture class="d-inline-block mb-3">
<source type="image/webp" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/bet_logo_2.png.webp 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/bet_logo_2-400x119.png.webp 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/bet_logo_2-150x45.png.webp 150w" sizes="(max-width: 546px) 100vw, 546px"/>
<img width="546" height="163" src="https://www.amsivedigital.com/wp-content/uploads/2021/03/bet_logo_2.png" alt="bet_logo_2" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/bet_logo_2.png 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/bet_logo_2-400x119.png 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/bet_logo_2-150x45.png 150w" sizes="(max-width: 546px) 100vw, 546px"/>
</picture>
</noscript>							</div>
																	</div>
										<div class="logo-item text-center first-selection my-auto  flexed">						
													
							<div class="mx-auto logo-holder" >
								<picture class="d-inline-block mb-3">
<source type="image/webp" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/citymd_logo_2.png.webp 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/citymd_logo_2-400x119.png.webp 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/citymd_logo_2-150x45.png.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 546px) 100vw, 546px"/>
<img width="546" height="163" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" alt="citymd_logo_2" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/citymd_logo_2.png 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/citymd_logo_2-400x119.png 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/citymd_logo_2-150x45.png 150w" data-lazy-sizes="(max-width: 546px) 100vw, 546px" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/03/citymd_logo_2.png"/>
</picture>
<noscript><picture class="d-inline-block mb-3">
<source type="image/webp" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/citymd_logo_2.png.webp 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/citymd_logo_2-400x119.png.webp 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/citymd_logo_2-150x45.png.webp 150w" sizes="(max-width: 546px) 100vw, 546px"/>
<img width="546" height="163" src="https://www.amsivedigital.com/wp-content/uploads/2021/03/citymd_logo_2.png" alt="citymd_logo_2" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/citymd_logo_2.png 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/citymd_logo_2-400x119.png 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/citymd_logo_2-150x45.png 150w" sizes="(max-width: 546px) 100vw, 546px"/>
</picture>
</noscript>							</div>
																	</div>
										<div class="logo-item text-center rest-select my-auto  flexed">						
													
							<div class="mx-auto logo-holder" >
								<picture class="d-inline-block mb-3">
<source type="image/webp" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/birchboc_logo_2.png.webp 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/birchboc_logo_2-400x119.png.webp 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/birchboc_logo_2-150x45.png.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 546px) 100vw, 546px"/>
<img width="546" height="163" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" alt="birchboc_logo_2" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/birchboc_logo_2.png 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/birchboc_logo_2-400x119.png 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/birchboc_logo_2-150x45.png 150w" data-lazy-sizes="(max-width: 546px) 100vw, 546px" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/03/birchboc_logo_2.png"/>
</picture>
<noscript><picture class="d-inline-block mb-3">
<source type="image/webp" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/birchboc_logo_2.png.webp 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/birchboc_logo_2-400x119.png.webp 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/birchboc_logo_2-150x45.png.webp 150w" sizes="(max-width: 546px) 100vw, 546px"/>
<img width="546" height="163" src="https://www.amsivedigital.com/wp-content/uploads/2021/03/birchboc_logo_2.png" alt="birchboc_logo_2" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/birchboc_logo_2.png 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/birchboc_logo_2-400x119.png 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/birchboc_logo_2-150x45.png 150w" sizes="(max-width: 546px) 100vw, 546px"/>
</picture>
</noscript>							</div>
																	</div>
										<div class="logo-item text-center rest-select my-auto  flexed">						
													
							<div class="mx-auto logo-holder" >
								<picture class="d-inline-block mb-3">
<source type="image/webp" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/clover_logo_2.png.webp 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/clover_logo_2-400x119.png.webp 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/clover_logo_2-150x45.png.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 546px) 100vw, 546px"/>
<img width="546" height="163" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" alt="clover_logo_2" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/clover_logo_2.png 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/clover_logo_2-400x119.png 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/clover_logo_2-150x45.png 150w" data-lazy-sizes="(max-width: 546px) 100vw, 546px" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/03/clover_logo_2.png"/>
</picture>
<noscript><picture class="d-inline-block mb-3">
<source type="image/webp" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/clover_logo_2.png.webp 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/clover_logo_2-400x119.png.webp 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/clover_logo_2-150x45.png.webp 150w" sizes="(max-width: 546px) 100vw, 546px"/>
<img width="546" height="163" src="https://www.amsivedigital.com/wp-content/uploads/2021/03/clover_logo_2.png" alt="clover_logo_2" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/clover_logo_2.png 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/clover_logo_2-400x119.png 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/clover_logo_2-150x45.png 150w" sizes="(max-width: 546px) 100vw, 546px"/>
</picture>
</noscript>							</div>
																	</div>
										<div class="logo-item text-center rest-select my-auto  flexed">						
													
							<div class="mx-auto logo-holder" >
								<picture class="d-inline-block mb-3">
<source type="image/webp" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/jh_logo_2.png.webp 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/jh_logo_2-400x119.png.webp 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/jh_logo_2-150x45.png.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 546px) 100vw, 546px"/>
<img width="546" height="163" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" alt="Jackson Hewitt | Amsive Digital" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/jh_logo_2.png 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/jh_logo_2-400x119.png 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/jh_logo_2-150x45.png 150w" data-lazy-sizes="(max-width: 546px) 100vw, 546px" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/03/jh_logo_2.png"/>
</picture>
<noscript><picture class="d-inline-block mb-3">
<source type="image/webp" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/jh_logo_2.png.webp 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/jh_logo_2-400x119.png.webp 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/jh_logo_2-150x45.png.webp 150w" sizes="(max-width: 546px) 100vw, 546px"/>
<img width="546" height="163" src="https://www.amsivedigital.com/wp-content/uploads/2021/03/jh_logo_2.png" alt="Jackson Hewitt | Amsive Digital" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/jh_logo_2.png 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/jh_logo_2-400x119.png 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/jh_logo_2-150x45.png 150w" sizes="(max-width: 546px) 100vw, 546px"/>
</picture>
</noscript>							</div>
																	</div>
										<div class="logo-item text-center rest-select my-auto  flexed">						
													
							<div class="mx-auto logo-holder" >
								<picture class="d-inline-block mb-3">
<source type="image/webp" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/ufc_logo_2.png.webp 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/ufc_logo_2-400x119.png.webp 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/ufc_logo_2-150x45.png.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 546px) 100vw, 546px"/>
<img width="546" height="163" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20546%20163&#039;%3E%3C/svg%3E" alt="UFC | Amsive Digital" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/ufc_logo_2.png 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/ufc_logo_2-400x119.png 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/ufc_logo_2-150x45.png 150w" data-lazy-sizes="(max-width: 546px) 100vw, 546px" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/03/ufc_logo_2.png"/>
</picture>
<noscript><picture class="d-inline-block mb-3">
<source type="image/webp" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/ufc_logo_2.png.webp 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/ufc_logo_2-400x119.png.webp 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/ufc_logo_2-150x45.png.webp 150w" sizes="(max-width: 546px) 100vw, 546px"/>
<img width="546" height="163" src="https://www.amsivedigital.com/wp-content/uploads/2021/03/ufc_logo_2.png" alt="UFC | Amsive Digital" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/03/ufc_logo_2.png 546w, https://www.amsivedigital.com/wp-content/uploads/2021/03/ufc_logo_2-400x119.png 400w, https://www.amsivedigital.com/wp-content/uploads/2021/03/ufc_logo_2-150x45.png 150w" sizes="(max-width: 546px) 100vw, 546px"/>
</picture>
</noscript>							</div>
																	</div>
									</div>
									<div class="row d-md-none d-flex">
						<div class="col-12 py-5 text-center">
							<a class="btn btn-primary logo-toggle" id="block_603bea155a384-logo-toggle" onclick="block_603bea155a384_logoToggle()" >View More +</a>
						</div>
					</div>
							</div>
		</div>
			</div>

</section>
<div><div class="container-fluid mw-xl">

									<style>		
											#block_60e6159db9926 {
							background: #1a7175;
						}
																#block_60e6159db9926 .text-box * {
							color: #ffffff !important;
						}
							
				</style>
						
	
</div></div><section id="block_60e6159db9926" class="content-block  alignfull image-desc my-0 slim has-font-color text-default">	<div class="container-fluid mw-xl">
		<div class="row flex-row-reverse align-items-stretch h-100">
			<div class="col-lg-7 color-box align-self-stretch px-0">
									<div data-bg="https://www.amsivedigital.com/wp-content/uploads/2021/07/Screen-Shot-2021-05-18-at-9.53.25-AM.jpg" class="image-background h-100 rocket-lazyload" 
						aria-hidden="true" 
						style="">
					</div>
							</div>
			<div class="col-lg-5 text-box  py-md-5 py-4">
				<div class="py-4 px-md-4 mx-1 d-flex h-100 align-items-center">
					<div>
																							<h2 class="display-2 mb-4">Build your brand&#039;s social influence. </h2>
																											<div class="mb-4"><p>Drive action and deepen brand trust with vetted influencers delivering reliable information and inspiration.</p>
</div>
																	<a class="small-font font-weight-600" href="https://www.amsivedigital.com/services/influencer-marketing/" target="_self">Explore our influencer services.</a>
											</div>
				</div>
			</div>		
		</div>		
	</div>
</section>
<div><div class="container-fluid mw-xl">


<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>


</div></div><section id="block_6101ca3947903" class="content-block  alignfull logo-block py-5 has-font-color text-default">	<style>
		#block_6101ca3947903 .logos-row .logo-item {			
						flex: 1 0 12.5%;
			max-width:12.5%;
						
		}
	</style>	

		<div class="container-fluid mw-xl">
		<div class="row">
			<div class="col-12 mb-3 mx-auto text-center">
													<h2 class="display-2">Our work drives businesses forward.</h2>						
													<p class="pt-3 text-base">We fuel brand growth and have the numbers to prove it. Here's just a few of our superior results. </p>
							</div>
		</div>
			
			</div>

</section>
<div><div class="container-fluid mw-xl">

</div></div><section id="block_603c3f13c5660" class="content-block  alignfull content-grid py-0 my-0 has-font-color text-default">
					<div class="row mb-0 grid-line mx-0">
															<div class="col-lg-4 col-sm-6 single-grid g-type-3 mb-0 p-0">
											<div class="grid-in  withtext islinked" >
		<a href="https://www.amsivedigital.com/clients/clover-health/" class="grid-link" ><span class="visually-hidden">Clover Health</span></a>		
					<div class="image-background" aria-hidden="true">
				<picture class="zoom-img">
<source type="image/webp" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/05/Clover.jpg.webp 461w, https://www.amsivedigital.com/wp-content/uploads/2021/05/Clover-408x400.jpg.webp 408w, https://www.amsivedigital.com/wp-content/uploads/2021/05/Clover-204x200.jpg.webp 204w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20461%20452&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 461px) 100vw, 461px"/>
<img width="461" height="452" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20461%20452&#039;%3E%3C/svg%3E" alt="Clover" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/05/Clover.jpg 461w, https://www.amsivedigital.com/wp-content/uploads/2021/05/Clover-408x400.jpg 408w, https://www.amsivedigital.com/wp-content/uploads/2021/05/Clover-204x200.jpg 204w" data-lazy-sizes="(max-width: 461px) 100vw, 461px" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/05/Clover.jpg"/>
</picture>
<noscript><picture class="zoom-img">
<source type="image/webp" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/05/Clover.jpg.webp 461w, https://www.amsivedigital.com/wp-content/uploads/2021/05/Clover-408x400.jpg.webp 408w, https://www.amsivedigital.com/wp-content/uploads/2021/05/Clover-204x200.jpg.webp 204w" sizes="(max-width: 461px) 100vw, 461px"/>
<img width="461" height="452" src="https://www.amsivedigital.com/wp-content/uploads/2021/05/Clover.jpg" alt="Clover" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/05/Clover.jpg 461w, https://www.amsivedigital.com/wp-content/uploads/2021/05/Clover-408x400.jpg 408w, https://www.amsivedigital.com/wp-content/uploads/2021/05/Clover-204x200.jpg 204w" sizes="(max-width: 461px) 100vw, 461px"/>
</picture>
</noscript>			</div>
			
			
		<div class="text-start text-white grid-over">	
			<div class="p-3 copy-holder">
									<p class="gr-t mb-lg-4 mb-3 titillium-web font-weight-normal">Clover Health</p>
													<div class="gr-sub display-2 text-white mb-lg-4 mb-3">3x Member Acquisition + Enrollment</div>
													<p class="gr-cat text-start grid-cat pe-lg-5 me-lg-5">Creative, Video, Digital Media, SEO</p>
											</div>	
		</div>		
	</div>
												</div>		
																<div class="col-lg-4 col-sm-6 single-grid g-type-3 mb-0 p-0">
											<div class="grid-in  withtext islinked" >
		<a href="https://www.amsivedigital.com/clients/recovery-center/" class="grid-link" ><span class="visually-hidden">Recovery Center</span></a>		
					<div class="image-background" aria-hidden="true">
				<picture class="zoom-img">
<source type="image/webp" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy-691x650.jpg.webp 691w, https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy-425x400.jpg.webp 425w, https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy-213x200.jpg.webp 213w, https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy-768x723.jpg.webp 768w, https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy.jpg.webp 850w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20691%20650&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 691px) 100vw, 691px"/>
<img width="691" height="650" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20691%20650&#039;%3E%3C/svg%3E" alt="SEO_CaseStudy-Block_RecoveryVillage3 copy" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy-691x650.jpg 691w, https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy-425x400.jpg 425w, https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy-213x200.jpg 213w, https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy-768x723.jpg 768w, https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy.jpg 850w" data-lazy-sizes="(max-width: 691px) 100vw, 691px" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy-691x650.jpg"/>
</picture>
<noscript><picture class="zoom-img">
<source type="image/webp" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy-691x650.jpg.webp 691w, https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy-425x400.jpg.webp 425w, https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy-213x200.jpg.webp 213w, https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy-768x723.jpg.webp 768w, https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy.jpg.webp 850w" sizes="(max-width: 691px) 100vw, 691px"/>
<img width="691" height="650" src="https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy-691x650.jpg" alt="SEO_CaseStudy-Block_RecoveryVillage3 copy" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy-691x650.jpg 691w, https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy-425x400.jpg 425w, https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy-213x200.jpg 213w, https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy-768x723.jpg 768w, https://www.amsivedigital.com/wp-content/uploads/2021/05/SEO_CaseStudy-Block_RecoveryVillage3-copy.jpg 850w" sizes="(max-width: 691px) 100vw, 691px"/>
</picture>
</noscript>			</div>
			
			
		<div class="text-start text-white grid-over">	
			<div class="p-3 copy-holder">
									<p class="gr-t mb-lg-4 mb-3 titillium-web font-weight-normal">Recovery Center</p>
													<div class="gr-sub display-2 text-white mb-lg-4 mb-3">+155% KPI Site-wide Phone Clicks</div>
													<p class="gr-cat text-start grid-cat pe-lg-5 me-lg-5">SEO, UX Design, Performance Content</p>
											</div>	
		</div>		
	</div>
												</div>		
																<div class="col-lg-4 col-sm-12 spec-case single-grid g-type-3 mb-0 p-0">
											<div class="grid-in  withtext islinked" >
		<a href="https://www.amsivedigital.com/clients/the-sak/" class="grid-link" ><span class="visually-hidden">The Sak</span></a>		
					<div class="image-background" aria-hidden="true">
				<picture class="zoom-img">
<source type="image/webp" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x-650x650.png.webp 650w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x-400x400.png.webp 400w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x-200x200.png.webp 200w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x-768x768.png.webp 768w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x.png.webp 1000w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20650%20650&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 650px) 100vw, 650px"/>
<img width="650" height="650" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20650%20650&#039;%3E%3C/svg%3E" alt="TheSak_CS_1x1@2x" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x-650x650.png 650w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x-400x400.png 400w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x-200x200.png 200w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x-768x768.png 768w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x.png 1000w" data-lazy-sizes="(max-width: 650px) 100vw, 650px" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x-650x650.png"/>
</picture>
<noscript><picture class="zoom-img">
<source type="image/webp" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x-650x650.png.webp 650w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x-400x400.png.webp 400w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x-200x200.png.webp 200w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x-768x768.png.webp 768w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x.png.webp 1000w" sizes="(max-width: 650px) 100vw, 650px"/>
<img width="650" height="650" src="https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x-650x650.png" alt="TheSak_CS_1x1@2x" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x-650x650.png 650w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x-400x400.png 400w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x-200x200.png 200w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x-768x768.png 768w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_1x1@2x.png 1000w" sizes="(max-width: 650px) 100vw, 650px"/>
</picture>
</noscript>			</div>
			
			
		<div class="text-start text-white grid-over">	
			<div class="p-3 copy-holder">
									<p class="gr-t mb-lg-4 mb-3 titillium-web font-weight-normal">The Sak</p>
													<div class="gr-sub display-2 text-white mb-lg-4 mb-3">+40% Ecommerce Growth</div>
													<p class="gr-cat text-start grid-cat pe-lg-5 me-lg-5">Paid Search, Paid Social, SEO</p>
											</div>	
		</div>		
	</div>
												</div>		
																
													
					</div>	
			</section>
<div><div class="container-fluid mw-xl">        </div>
		
	
		
				<style>
				#blog_cta {
					background-color: #fff;
				}
				#blog_cta h2 {
					color: #7c0f81!important;
				}
			</style>
				</div>
		<section id="blog_cta" class="content-block  alignwide adtheme-cta py-md-5 py-0 has-font-color text-default background-custom">
			<div class="container-fluid mw-xl">
								<div class="row py-md-2 py-5 px-md-0 px-3">
					<div class="col-xl-7 col-md-6 py-md-4">
													<h2 class="cta-title display-2 w-xl-75 me-5 me-md-0">Find out what we can do for your bottom line.</h2>
																	<p class="cta-text mb-0 mt-4 px-md-2">Our flexible solutions will help you meet (and exceed) your business goals.</p>
																										<a href="https://www.amsivedigital.com/contact/" target="_self" class="btn btn-primary mt-4" target="_self">
							Let&#039;s Talk						</a>
											</div>				
				</div>		
			</div>
		</section>
		<div class="container-fluid mw-xl">
		</div><!-- end .container-fluid -->
</div><!-- end #page-content-container -->

<!-- FOOTER -->

<footer id="footer" class="has-bg-color background-262626 text-white">

    <div class="container-fluid mw-xl">
					<svg width="150px" height="75px" id="footer-arrow" viewBox="0 0 150 75" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g id="Assets-/-0-Generic-/-amsive_graphic_motif_ramp_flipped" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<polygon id="Fill-1" fill="#ffffff" transform="translate(75.000000, 37.500000) scale(1, -1) translate(-75.000000, -37.500000) " points="0 0 0 75 150 75"></polygon>
				</g>
			</svg>
				
		<div class="row pt-5 pb-3">
			<div class="col-12 col-lg-2 pb-md-5 pb-4 pb-lg-0">
				<div class="row flex-lg-column justify-content-between h-100">
					<div class="col-lg-12 col-md-6 col-12 text-lg-start text-md-center text-start">
														<a class="footer-logo d-inline-block" href="https://www.amsivedigital.com/" 
								   title="Amsive Digital" rel="home">
									<img class="footer-logo" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20145%2059'%3E%3C/svg%3E" alt="Amsive Digital" width="145" height="59" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/03/Amsive-Digital-Logo-White.svg" /><noscript><img class="footer-logo" src="https://www.amsivedigital.com/wp-content/uploads/2021/03/Amsive-Digital-Logo-White.svg" alt="Amsive Digital" width="145" height="59" /></noscript>
								</a>
											</div>
											
					<div class="col-lg-12 col-md-6 col-12 text-start pt-3 social-foot">
													<a href="https://www.facebook.com/amsivedigital" target="_blank" rel="noopener">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><title>Visit Amsive Digital on Facebook</title><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/></svg>
							</a>
																			<a href="https://www.instagram.com/amsivedigital/" target="_blank" rel="noopener">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><title>Visit Amsive Digital on Instagram</title><path d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"/></svg>
							</a>
																			<a href="https://www.linkedin.com/company/amsivedigital/" target="_blank" rel="noopener">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><title>Visit Amsive Digital on LinkedIn</title><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
							</a>
																			<a href="https://twitter.com/amsive_digital" target="_blank" rel="noopener">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><title>Visit Amsive Digital on Twitter</title><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-82.3 364.2c-8.5 9.1-31.2 19.8-60.9 19.8-75.5 0-91.9-55.5-91.9-87.9v-90h-29.7c-3.4 0-6.2-2.8-6.2-6.2v-42.5c0-4.5 2.8-8.5 7.1-10 38.8-13.7 50.9-47.5 52.7-73.2.5-6.9 4.1-10.2 10-10.2h44.3c3.4 0 6.2 2.8 6.2 6.2v72h51.9c3.4 0 6.2 2.8 6.2 6.2v51.1c0 3.4-2.8 6.2-6.2 6.2h-52.1V321c0 21.4 14.8 33.5 42.5 22.4 3-1.2 5.6-2 8-1.4 2.2.5 3.6 2.1 4.6 4.9l13.8 40.2c1 3.2 2 6.7-.3 9.1z"/></svg>
							</a>
											</div>
				</div>
			</div>
			<div class="col-12 col-lg-5 col-md-6 offset-lg-1">
				<div class="row flex-column justify-content-between h-100">
					<div class="col-12 text-start small-font pb-4">
						<p>Amsive Digital (formerly Path Interactive) is an NYC-born digital marketing agency with a national presence, providing data-driven SEO, digital media, paid and managed social, analytics, creative, influencer marketing and web design and development services that help brands grow.</p>
					</div>
					<div class="col-12 text-start pt-md-5">
						<div class="widget gform_widget gform_widget-3"><link data-minify="1" rel='stylesheet' id='gform_basic-css'  href='https://www.amsivedigital.com/wp-content/cache/min/1/wp-content/plugins/gravityforms/css/basic.min.css?ver=1628889607' type='text/css' media='all' />
<link rel='stylesheet' id='gform_theme_ie11-css'  href='https://www.amsivedigital.com/wp-content/plugins/gravityforms/css/theme-ie11.min.css?ver=2.5.9' type='text/css' media='all' />
<link rel='stylesheet' id='gform_theme-css'  href='https://www.amsivedigital.com/wp-content/plugins/gravityforms/css/theme.min.css?ver=2.5.9' type='text/css' media='all' />
<script type="rocketlazyloadscript" data-rocket-type="text/javascript"></script>
                <div class='gf_browser_chrome gform_wrapper gravity-theme fake-submit-form_wrapper' id='gform_wrapper_13' >
                        <div class='gform_heading'>
                            <span class='gform_description'>Subscribe to our newsletter</span>
                        </div><form method='post' enctype='multipart/form-data'  id='gform_13' class='fake-submit-form' action='/' novalidate>
                        <div class='gform_body gform-body'><div id='gform_fields_13' class='gform_fields top_label form_sublabel_below description_below'><div id="field_13_1" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible" ><label class='gfield_label' for='input_13_1' >Email<span class="gfield_required"><span class="gfield_required gfield_required_text">(Required)</span></span></label><div class='ginput_container ginput_container_email'>
                            <input name='input_1' id='input_13_1' type='email' value='' class='large'   placeholder='Enter Your Email' aria-required="true" aria-invalid="false"  />
                        </div></div><div id="field_13_4" class="gfield gfield--width-full gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_visible" ><button  id="foot-fake" class="btn btn-primary">Submit</button></div><div id="field_13_5" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible" ><div class='ginput_container ginput_container_text'><input name='input_5' id='input_13_5' type='hidden' class='gform_hidden'  aria-invalid="false" value='Email Subscription' /></div></div><div id="field_13_6" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible" ><div class='ginput_container ginput_container_text'><input name='input_6' id='input_13_6' type='hidden' class='gform_hidden'  aria-invalid="false" value='https://www.amsivedigital.com/' /></div></div><div id="field_13_7" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible" ><div class='ginput_container ginput_container_text'><input name='input_7' id='input_13_7' type='hidden' class='gform_hidden'  aria-invalid="false" value='' /></div></div><div id="field_13_8" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible" ><div class='ginput_container ginput_container_text'><input name='input_8' id='input_13_8' type='hidden' class='gform_hidden'  aria-invalid="false" value='' /></div></div><div id="field_13_9" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible" ><div class='ginput_container ginput_container_text'><input name='input_9' id='input_13_9' type='hidden' class='gform_hidden'  aria-invalid="false" value='' /></div></div><div id="field_13_10" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible" ><div class='ginput_container ginput_container_text'><input name='input_10' id='input_13_10' type='hidden' class='gform_hidden'  aria-invalid="false" value='' /></div></div><div id="field_13_11" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible" ><div class='ginput_container ginput_container_text'><input name='input_11' id='input_13_11' type='hidden' class='gform_hidden'  aria-invalid="false" value='' /></div></div><div id="field_13_12" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible" ><div class='ginput_container ginput_container_text'><input name='input_12' id='input_13_12' type='hidden' class='gform_hidden'  aria-invalid="false" value='1' /></div></div><div id="field_13_13" class="gfield gform_validation_container field_sublabel_below field_description_below gfield_visibility_visible" ><label class='gfield_label' for='input_13_13' >Comments</label><div class='ginput_container'><input name='input_13' id='input_13_13' type='text' value='' autocomplete='new-password'/></div><div class='gfield_description' id='gfield_description_13_13'>This field is for validation purposes and should be left unchanged.</div></div></div></div>
        <div class='gform_footer top_label'> <input type='submit' id='gform_submit_button_13' class='gform_button button' value='Submit'  onclick='if(window["gf_submitting_13"]){return false;}  if( !jQuery("#gform_13")[0].checkValidity || jQuery("#gform_13")[0].checkValidity()){window["gf_submitting_13"]=true;}  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_13"]){return false;} if( !jQuery("#gform_13")[0].checkValidity || jQuery("#gform_13")[0].checkValidity()){window["gf_submitting_13"]=true;}  jQuery("#gform_13").trigger("submit",[true]); }' /> 
            <input type='hidden' class='gform_hidden' name='is_submit_13' value='1' />
            <input type='hidden' class='gform_hidden' name='gform_submit' value='13' />
            
            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
            <input type='hidden' class='gform_hidden' name='state_13' value='WyJbXSIsIjdlMDRkNmI0MWYzNzkwNDY5ZmM0MDBiZjZhZWRjYzYzIl0=' />
            <input type='hidden' class='gform_hidden' name='gform_target_page_number_13' id='gform_target_page_number_13' value='0' />
            <input type='hidden' class='gform_hidden' name='gform_source_page_number_13' id='gform_source_page_number_13' value='1' />
            <input type='hidden' name='gform_field_values' value='' />
            
        </div>
                        </form>
                        </div>

</div>					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-md-6 pt-5 pt-md-0 titillium-web">
				<div class="row">
					<div class="col-6">
						<div class="widget widget_nav_menu nav_menu-8"><div class="menu-footer-menu-container"><ul id="menu-footer-menu" class="menu"><li id="menu-item-14488" class="menu-item"><a href="https://www.amsivedigital.com/about/">About</a></li>
<li id="menu-item-14489" class="menu-item"><a href="https://www.amsivedigital.com/services/">Services</a></li>
<li id="menu-item-15263" class="menu-item"><a href="https://www.amsivedigital.com/insights/">Insights</a></li>
<li id="menu-item-15439" class="menu-item"><a href="https://www.amsivedigital.com/insights/news/say-hello-to-amsive-digital/">Announcement</a></li>
<li id="menu-item-14487" class="menu-item"><a href="https://www.amsivedigital.com/contact/">Contact Us</a></li>
<li id="menu-item-15785" class="menu-item"><a target="_blank" rel="noopener" href="https://amsivedigital.applytojob.com/">Careers</a></li>
</ul></div></div>					</div>
					<div class="col-6">
						<div class="widget widget_nav_menu nav_menu-9"><div class="menu-footer-sub-services-container"><ul id="menu-footer-sub-services" class="menu"><li id="menu-item-15340" class="menu-item"><a href="https://www.amsivedigital.com/services/paid-media/">Paid Media</a></li>
<li id="menu-item-15339" class="menu-item"><a href="https://www.amsivedigital.com/services/seo/">SEO</a></li>
<li id="menu-item-15338" class="menu-item"><a href="https://www.amsivedigital.com/services/social/">Social</a></li>
<li id="menu-item-15337" class="menu-item"><a href="https://www.amsivedigital.com/services/performance-creative/">Performance Creative</a></li>
<li id="menu-item-15336" class="menu-item"><a href="https://www.amsivedigital.com/services/data-solutions/">Data + Analytics</a></li>
<li id="menu-item-15335" class="menu-item"><a href="https://www.amsivedigital.com/services/strategy/">Strategy</a></li>
</ul></div></div>					</div>
				</div>
			</div>
		</div>
		
		<div class="row copyright titillium-web py-3 mt-2">
			<div class="col-12 col-md-6 text-center text-md-start my-auto">
				<p>© 2021 Amsive Digital. All rights reserved.</p>
			</div>
			<div class="col-12 col-md-6 text-center text-md-end  my-auto">
				<div class="widget widget_nav_menu nav_menu-6"><div class="menu-copyright-menu-container"><ul id="menu-copyright-menu" class="menu"><li id="menu-item-15341" class="menu-item menu-item-privacy-policy"><a href="https://www.amsivedigital.com/privacy-policy/">Privacy Policy</a></li>
<li id="menu-item-15342" class="menu-item"><a href="https://www.amsivedigital.com/sitemap/">Sitemap</a></li>
</ul></div></div>				
			</div>
		</div>

    </div>


</footer> <!-- end #footer -->

<a id="back-top" href="#sitetop" style="display: inline-block;" title="Back to top">
	<svg height="30" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="angle-up" class="svg-inline--fa fa-angle-up fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><title>Back to top</title><path fill="currentColor" d="M136.5 185.1l116 117.8c4.7 4.7 4.7 12.3 0 17l-7.1 7.1c-4.7 4.7-12.3 4.7-17 0L128 224.7 27.6 326.9c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17l116-117.8c4.7-4.6 12.3-4.6 17 .1z"></path></svg>
</a>

	
	

	<script type="rocketlazyloadscript">
		var fake = document.getElementById("foot-fake");
		var forma = document.getElementById("gform_13");
		
		fake.addEventListener('click', function(event){
			event.preventDefault();
			newsletterPrecheck();
		});
		
		function newsletterPrecheck() {
		
			var f = document.getElementById("gform_wrapper_13"),
				inpObj = document.getElementById("input_13_1");
			var m = document.getElementById("news-err-w");
				if (m) {
					m.remove();	
				}
				
				var inpVal = inpObj.value;
				
				
				var d = document.createElement("div"),
						w = document.createElement("h2"),
						p = document.createElement("span"),
						b = document.createElement("span");
						d.classList.add("gform_validation_errors"),
						w.classList.add("gform_submission_error", "hide_summary"),
						p.classList.add("gform-icon", "gform-icon--close"),
						d.id = "news-err-w",
						b.id = "news-err",
						d.appendChild(w),
						w.appendChild(p),
						w.appendChild(b);
						
						f.prepend(d);						
			
				if (!inpObj.checkValidity()) {						
						b.innerHTML = inpObj.validationMessage;
				} else if(inpVal == ""){
						b.innerHTML = "Please provide your email";
				} else {	
						document.getElementById("foot-fake").remove();
						b.innerHTML = "Processing...";
							if (window.google_tag_manager && window.ga && ga.create) {
								window.dataLayer = window.dataLayer || [];
								window.dataLayer.push({
									'event' : 'NewsletterSubmit', 
									'eventCallback' : function() {
										forma.submit();
									},
									'eventTimeout' : 2000
								});
							} else {
								forma.submit();
							}
				} 
		}
		
		window.addEventListener('keydown', function(event) {
			pressedEnter = false;

			if (event.keyCode == 13)
				pressedEnter = true;

			setTimeout(function() {
				pressedEnter = false;
			}, 100)

		})
		
		
		
		forma.addEventListener('submit', function(e) {
			if (pressedEnter == true) {
				e.preventDefault();
					fake.click();
				return false;
			}
		})
		
		function runGTMevent($url) {
				if (window.google_tag_manager && window.ga && ga.create) {
					window.dataLayer = window.dataLayer || [];
					window.dataLayer.push({
						'event' : 'ContactSubmit', 
						'eventCallback' : function() {
							window.location.replace($url);
						},
						'eventTimeout' : 2000
					});
				} else {
					window.location.replace($url);
				}
		}
		
		
		

	</script>


			<script>
		cookieLaw = {
			dId:"gdpr_bar",
			wId:"gdpr_bar__wrap",
			bId:"gdpr_bar-buttons",
			cId:"gdpr_bar-cookie",
				show:function(e){
					if(localStorage.getItem(cookieLaw.cId))
						return!1;
						
						var d=document.createElement("div"),
						w=document.createElement("div"),
						p=document.createElement("p"),
						b=document.createElement("div"),
						i=document.createElement("a");
						d.classList.add("fixed-bottom"),
						d.classList.add("bg-primary"),
						w.id=cookieLaw.wId,
						i.classList.add("dismiss_btn"),
						i.href="#",
						p.innerHTML=e.msg,
						b.id=cookieLaw.bId,
						i.innerHTML=e.ok,
						d.id=cookieLaw.dId,
						d.appendChild(w),
						w.appendChild(p),
						w.appendChild(b),
						b.appendChild(i);
							if(e.llabel!=""&&e.lurl!=""){
								var l=document.createElement("a");
								l.innerHTML=e.llabel,
								l.classList.add("text-white"),
								l.classList.add("small-link"),
								l.href=e.lurl,
								b.appendChild(l);
							}
						document.body.classList.add("askforcookie"),
						document.body.insertBefore(d,document.body.lastChild),
						i.addEventListener("click",cookieLaw.hide,!1)
				},
				hide:function(e){
					e.preventDefault();
					document.getElementById(cookieLaw.dId).outerHTML="",
					document.body.classList.remove("askforcookie"),
					localStorage.setItem(cookieLaw.cId,"1")
				}
		},
		cookieLaw.show({msg:"By using this website, you agree to our use of cookies. We use cookies to provide you with a great experience and to help our website run effectively. For more information, please read our <a href=\"https://www.amsivedigital.com/privacy-policy/\">Privacy Policy</a>.",ok:"OK",llabel:"",lurl:""});</script>
	<script type="rocketlazyloadscript" data-rocket-type="text/javascript">/* <![CDATA[ */!function(e,n){var r={"selectors":{"block":"pre.EnlighterJSRAW","inline":"code.EnlighterJSRAW"},"options":{"indent":2,"ampersandCleanup":true,"linehover":false,"rawcodeDbclick":false,"textOverflow":"break","linenumbers":true,"theme":"beyond","language":"html","retainCssClasses":false,"collapse":false,"toolbarOuter":"","toolbarTop":"{BTN_RAW}{BTN_COPY}{BTN_WINDOW}{BTN_WEBSITE}","toolbarBottom":""},"resources":["https:\/\/www.amsivedigital.com\/wp-content\/plugins\/enlighter\/cache\/enlighterjs.min.css?qgfwVbVlB17rq5Q","https:\/\/www.amsivedigital.com\/wp-content\/plugins\/enlighter\/resources\/enlighterjs\/enlighterjs.min.js"]},o=document.getElementsByTagName("head")[0],t=n&&(n.error||n.log)||function(){};e.EnlighterJSINIT=function(){!function(e,n){var r=0,l=null;function c(o){l=o,++r==e.length&&(!0,n(l))}e.forEach(function(e){switch(e.match(/\.([a-z]+)(?:[#?].*)?$/)[1]){case"js":var n=document.createElement("script");n.onload=function(){c(null)},n.onerror=c,n.src=e,n.async=!0,o.appendChild(n);break;case"css":var r=document.createElement("link");r.onload=function(){c(null)},r.onerror=c,r.rel="stylesheet",r.type="text/css",r.href=e,r.media="all",o.appendChild(r);break;default:t("Error: invalid file extension",e)}})}(r.resources,function(e){e?t("Error: failed to dynamically load EnlighterJS resources!",e):"undefined"!=typeof EnlighterJS?EnlighterJS.init(r.selectors.block,r.selectors.inline,r.options):t("Error: EnlighterJS resources not loaded yet!")})},(document.querySelector(r.selectors.block)||document.querySelector(r.selectors.inline))&&e.EnlighterJSINIT()}(window,console); /* ]]> */</script><script type='text/javascript' data-cfasync="false" src='https://www.amsivedigital.com/wp-content/themes/ad-theme/assets/js/vendor/bootstrap-5.0.1.min.js?ver=5.0.1' id='bootstrap-js' defer></script>
<script data-minify="1" type='text/javascript' src='https://www.amsivedigital.com/wp-content/cache/min/1/wp-content/themes/ad-theme/dist/js/nojq-bundle.js?ver=1628889610' id='scripts-js' defer></script>
<script>window.lazyLoadOptions={elements_selector:"img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}};window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async src="https://www.amsivedigital.com/wp-content/plugins/wp-rocket/assets/js/lazyload/16.1/lazyload.min.js"></script>


<script async type="text/javascript" src="/_Incapsula_Resource?SWJIYLWA=719d34d31c8e3a6e6fffd425f7e032f3&ns=1&cb=1795428550"></script>
</body>
</html>

<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me -->