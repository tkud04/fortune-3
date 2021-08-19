
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
		
		
	<!-- This site is optimized with the Yoast SEO Premium plugin v16.9 (Yoast SEO v16.9) - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Paid Media | Amsive Digital</title>
	<meta name="description" content="Develop a customized media mix to amplify ad dollars with paid search, paid social, display, shopping, video, OTT, and others. Learn more." />
	<link rel="canonical" href="https://www.amsivedigital.com/services/paid-media/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Paid Media | Amsive Digital" />
	<meta property="og:description" content="Develop a customized media mix to amplify ad dollars with paid search, paid social, display, shopping, video, OTT, and others. Learn more." />
	<meta property="og:url" content="https://www.amsivedigital.com/services/paid-media/" />
	<meta property="og:site_name" content="Amsive Digital" />
	<meta property="article:publisher" content="https://www.facebook.com/amsivedigital" />
	<meta property="article:modified_time" content="2021-08-07T01:01:27+00:00" />
	<meta property="og:image" content="https://www.amsivedigital.com/wp-content/uploads/2021/06/Amsive_social.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="628" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@amsive_digital" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://www.amsivedigital.com/#organization","name":"Amsive Digital, Inc.","url":"https://www.amsivedigital.com/","sameAs":["https://www.facebook.com/amsivedigital","https://www.instagram.com/amsivedigital/","https://www.linkedin.com/company/amsivedigital/","https://twitter.com/amsive_digital"],"logo":{"@type":"ImageObject","@id":"https://www.amsivedigital.com/#logo","inLanguage":"en-US","url":"https://www.amsivedigital.com/wp-content/uploads/2021/04/amsivedigitallogo.png","contentUrl":"https://www.amsivedigital.com/wp-content/uploads/2021/04/amsivedigitallogo.png","width":1400,"height":515,"caption":"Amsive Digital, Inc."},"image":{"@id":"https://www.amsivedigital.com/#logo"}},{"@type":"WebSite","@id":"https://www.amsivedigital.com/#website","url":"https://www.amsivedigital.com/","name":"Amsive Digital","description":"","publisher":{"@id":"https://www.amsivedigital.com/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.amsivedigital.com/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"WebPage","@id":"https://www.amsivedigital.com/services/paid-media/#webpage","url":"https://www.amsivedigital.com/services/paid-media/","name":"Paid Media | Amsive Digital","isPartOf":{"@id":"https://www.amsivedigital.com/#website"},"datePublished":"2021-04-19T01:40:50+00:00","dateModified":"2021-08-07T01:01:27+00:00","description":"Develop a customized media mix to amplify ad dollars with paid search, paid social, display, shopping, video, OTT, and others. Learn more.","breadcrumb":{"@id":"https://www.amsivedigital.com/services/paid-media/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://www.amsivedigital.com/services/paid-media/"]}]},{"@type":"BreadcrumbList","@id":"https://www.amsivedigital.com/services/paid-media/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.amsivedigital.com/"},{"@type":"ListItem","position":2,"name":"Services","item":"https://www.amsivedigital.com/services/"},{"@type":"ListItem","position":3,"name":"Paid Media"}]}]}</script>
	<!-- / Yoast SEO Premium plugin. -->



<link rel="alternate" type="application/rss+xml" title="Amsive Digital &raquo; Feed" href="https://www.amsivedigital.com/feed/" />
<link rel='stylesheet' id='bootstrap-css'  href='https://www.amsivedigital.com/wp-content/themes/ad-theme/bootstrap-custom/make/bootstrap-cust.min.css?ver=1624397687' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='styles-css'  href='https://www.amsivedigital.com/wp-content/cache/min/1/wp-content/themes/ad-theme/dist/css/styles.min.css?ver=1628889607' type='text/css' media='all' />
<link rel="https://api.w.org/" href="https://www.amsivedigital.com/wp-json/" /><link rel="alternate" type="application/json" href="https://www.amsivedigital.com/wp-json/wp/v2/pages/15085" /><link rel='shortlink' href='https://www.amsivedigital.com/?p=15085' />
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

<body class="page page--home-template page-paid-media noawesome hashero-color hashero">
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
<li class=" menu-item current-menu-ancestor current-menu-parent nav-item has-sub-menu dropdown firstline" data-toggle-dropdown="closed"><a title="See All Services" href="https://www.amsivedigital.com/services/" class="nav-link  gotosub current "><span>Services</span><svg height="16" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="angle-down" class="svg-inline--fa fa-angle-down fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M119.5 326.9L3.5 209.1c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0L128 287.3l100.4-102.2c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L136.5 327c-4.7 4.6-12.3 4.6-17-.1z"></path></svg></a><div class="sub-menu-wrap three-col"><div class="container-fluid mw-xl"><div class="row text-start py-4"><div class="promo text-start col-lg-4 offset-xl-1"><div class="p-3 text-start"><h3 class="mb-lg-4 d-inline-block d-lg-block"> We help brands grow.</h3><a class="text-primary small-font font-weight-600 titillium-web second-link px-0 pb-2 ms-3 ms-lg-0" href="https://www.amsivedigital.com/services/" target="_self">See All Services</a></div></div><div class="py-3 px-4 col-xl-7 col-lg-8">
<ul class="sub-menu list-unstyled row"  role="menu">
	<li class=" menu-item active nav-item col-lg-6 col-4 text-start mb-3" ><a href="https://www.amsivedigital.com/services/paid-media/" class="nav-link h6 text-primary px-0 pt-0 pb-2 mb-0 d-inline-block"><span>Paid Media</span></a><div class="sub-desc small-font titillium-web">Develop the best full-funnel media mix.</div></li>
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
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-14023" class="menu-item current-menu-ancestor current-menu-parent dropdown active nav-item"><a title="See All Services" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-14023">Services</a>
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-14023" role="menu">
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item nav-item duplicated"><a title="Services" href="https://www.amsivedigital.com/services/" class="dropdown-item">Services</a></li>	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-16100" class="menu-item current-menu-item active nav-item"><a title="Paid Media" href="https://www.amsivedigital.com/services/paid-media/" class="dropdown-item">Paid Media</a></li>
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
		#block_607cddc420334 .image-background {
			background-position: center center;
		}
	</style>
<section id="block_607cddc420334" class="content-block d-flex  alignwide adtheme-hero align-items-end mob-stack color-as-herotype height-def has-background background-ffffff has-font-color text-default">
	<div class="container-fluid mw-xl hero-block-content pb-sm-4">
		<div class="row h-100">
			<div class="col-md-7 text-start my-sm-3 my-4 text-white ">
																	<div class="label">PAID MEDIA</div>
												<h1 class="hero-title display-1">Outperform with paid media. </h1>						
				<div class="d-none d-sm-block">
											<div class="hero-block-description py-3 h5">Our holistic digital strategies, proprietary insights, XactAudience® platform, and granular targeting accelerate growth and outmaneuver your competition.</div>
														
				</div>
			</div>
		</div>		
	</div>
</section>
	<div class="d-sm-none d-block has-bg-color background-ffffff ">
		<div class="container-fluid mw-xl hero-block-content py-4">
					
							<div class="h5">
					Our holistic digital strategies, proprietary insights, XactAudience® platform, and granular targeting accelerate growth and outmaneuver your competition.				</div>
								</div>
	</div>


	

	<style>
		#block_607cddfe20335 {
						background: #f9f9f9;
					}
	</style>

</div></div><section id="block_607cddfe20335" class="content-block py-5  alignfull what-we-do bg-f9f9f9 has-font-color text-default">	<div class="container-fluid mw-xl">
		<div class="row">
			<div class="mb-lg-3 text-center col-12">
									<div class="label">WHAT WE DO</div>
													<h2 class="h2">Develop a customized, full-funnel media mix to amplify ad dollars and outperform in your market.</h2>
												
			</div>			
		</div>
									<div class="row py-md-4 mb-md-0 mt-md-0 mt-4">
					<div class="col-12 mb-3">
						<div class="row link-box-wrap g-md-4 g-2" id="link-box-wrap">
														<div class="col-md-4 link-box detailed-what text-start mb-md-0 mb-3 ww-active">
																	<a class="long-arrow" href="https://www.amsivedigital.com/services/paid-search/" target="_self">
																									<div class="ser-box h-100 px-md-5 px-3 pt-md-4 pb-md-5 py-3 text-start has-bg-color background-ffffff position-relative">
																						<div class="h4 text-start titillium-web">Paid Search</div> 
																																		<div class="mt-2 text-base small-font">Reach brand-aware consumers at the right moment with targeted and actionable advertising. Engage prospects or increase brand loyalty with exact audience targeting — down to just one household.</div> 
																						
																						
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
																									<div class="ser-box h-100 px-md-5 px-3 pt-md-4 pb-md-5 py-3 text-start has-bg-color background-ffffff position-relative">
																						<div class="h4 text-start titillium-web">Paid Social</div> 
																																		<div class="mt-2 text-base small-font">Build and nurture a relationship between your brand and best customers using surround-sound social media strategies and top-performing organic creative.</div> 
																						
																						
																				</div>
																	
							</div>
														<div class="col-md-4 link-box detailed-what text-start mb-md-0 mb-3 ">
																									<div class="ser-box h-100 px-md-5 px-3 pt-md-4 pb-md-5 py-3 text-start has-bg-color background-ffffff position-relative">
																						<div class="h4 text-start titillium-web">Shopping</div> 
																																		<div class="mt-2 text-base small-font">Reach loyal and new customers through holistic product campaigns and integrated strategies at every decision touchpoint.</div> 
																						
																						
																				</div>
																	
							</div>
														<div class="col-md-4 link-box detailed-what text-start mb-md-0 mb-3 ">
																									<div class="ser-box h-100 px-md-5 px-3 pt-md-4 pb-md-5 py-3 text-start has-bg-color background-ffffff position-relative">
																						<div class="h4 text-start titillium-web">Amazon + Retail</div> 
																																		<div class="mt-2 text-base small-font">Be first in line to meet your ideal customers with our expert team and enterprise-level data partnerships.</div> 
																						
																						
																				</div>
																	
							</div>
														<div class="col-md-4 link-box detailed-what text-start mb-md-0 mb-3 ">
																									<div class="ser-box h-100 px-md-5 px-3 pt-md-4 pb-md-5 py-3 text-start has-bg-color background-ffffff position-relative">
																						<div class="h4 text-start titillium-web">Video + OTT</div> 
																																		<div class="mt-2 text-base small-font">Gain brand awareness with new audiences and develop transparent, performance-driven advertising.</div> 
																						
																						
																				</div>
																	
							</div>
													</div>
					</div>
				</div>
								
			</div>
	<script type="rocketlazyloadscript">
		var actContainer = document.getElementById("block_607cddfe20335");
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

	

	<style>
					#block_607cde952033d {			
				background: #404040;					
			}	
			
					#block_607cde952033d * {
				color: #ffffff;
			}
				</style>

</div></div><section id="block_607cde952033d" class="content-block  alignfull info-block py-md-5 py-4 background-404040 has-font-color text-default">	<div class="container-fluid mw-xl">
		<div class="row py-md-2 ">
			<div class="col-md-6 py-md-4">
				<div class="me-md-5 pe-md-5">
									<div class="label">OUR APPROACH</div>
													<h2 class="cta-title h2 mb-0">Holistic + transparent approach to maximize returns. </h2>						
												
				</div>
			</div>
			<div class="col-md-6 py-md-4">
									<div class="label d-none d-md-block">&nbsp;</div>
													<div class="mb-0 px-md-2 py-md-0 py-4 text-base"><p><span class="TextRun SCXW220665373 BCX0" lang="EN-US" xml:lang="EN-US" data-contrast="auto"><span class="NormalTextRun SCXW220665373 BCX0">From </span></span><span class="TextRun SCXW220665373 BCX0" lang="EN-US" xml:lang="EN-US" data-contrast="auto"><span class="NormalTextRun SCXW220665373 BCX0">identifying</span></span><span class="TextRun SCXW220665373 BCX0" lang="EN-US" xml:lang="EN-US" data-contrast="auto"><span class="NormalTextRun SCXW220665373 BCX0"> business goals to retargeting performance, our expert team communicates directly with yours. We proactively adapt to any changes in goals and strategies, campaign results, the marketplace. Our team, while always growing, is dedicated and close-knit so you can work with the same people year after year.</span></span></p>
</div>
											</div>
		</div>		
	</div>
</section>
<div><div class="container-fluid mw-xl">

	

	<style>
					#block_60b015a84c3cf {			
				background: #f9f9f9;					
			}	
			
					#block_60b015a84c3cf * {
				color: #000000;
			}
				</style>

</div></div><section id="block_60b015a84c3cf" class="content-block  alignfull info-block py-md-5 py-4 background-f9f9f9 has-font-color text-default">	<div class="container-fluid mw-xl">
		<div class="row py-md-2 ">
			<div class="col-md-6 py-md-4">
				<div class="me-md-5 pe-md-5">
													<h2 class="cta-title h2 mb-0">XactAudience® predictive modeling + audience targeting.</h2>						
												
				</div>
			</div>
			<div class="col-md-6 py-md-4">
													<div class="mb-0 px-md-2 py-md-0 py-4 text-base"><p>We target down to a single household. Leverage our in-house database of 260M+ customer profiles and 2,000+ customer variables to identify your exact customers at every stage of their consumer journey.</p>
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
									<div data-bg="https://www.amsivedigital.com/wp-content/uploads/2021/05/700x600-_0001_Layer-13.jpg" class="image-background h-100 rocket-lazyload" 
						aria-hidden="true" 
						style="">
					</div>
							</div>
			<div class="col-lg-5 text-box  py-md-5 py-4">
				<div class="py-4 px-md-4 mx-1 d-flex h-100 align-items-center">
					<div>
											<div class="label">AWARENESS</div>
																							<h2 class="display-2 mb-4">Build brand awareness for products and services.</h2>
																											<div class="mb-4"><p>Introduce your brand with social, native, video, and display advertising. From TikTok to YouTube and LinkedIn to Google’s display network, meet your ideal consumer from every digital angle.</p>
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
									<div data-bg="https://www.amsivedigital.com/wp-content/uploads/2021/05/700x600-_0037_Layer-1.jpg" class="image-background h-100 rocket-lazyload" 
						aria-hidden="true" 
						style="">
					</div>
							</div>
			<div class="col-lg-5 text-box  py-md-5 py-4">
				<div class="py-4 px-md-4 mx-1 d-flex h-100 align-items-center">
					<div>
											<div class="label">CONSIDERATION</div>
																							<h2 class="display-2 mb-4">Reach hand-raisers and in-market consumers.</h2>
																											<div class="mb-4"><p>Nurture interest and engagement with strategic retargeting through consumers’ favorite platforms, whether it’s a podcast or OOT advertising on their favorite viewing platform. Create a holistic search user experience. When your target audience is ready to learn more — your brand has all the answers.</p>
</div>
															</div>
				</div>
			</div>		
		</div>		
	</div>
</section>
<div><div class="container-fluid mw-xl">

									<style>		
																#block_60b01afc4c3d3 .text-box * {
							color: #000000 !important;
						}
							
				</style>
						
	
</div></div><section id="block_60b01afc4c3d3" class="content-block  alignfull image-desc my-0 has-font-color text-default">	<div class="container-fluid mw-xl">
		<div class="row  align-items-stretch h-100">
			<div class="col-lg-7 color-box align-self-stretch px-0">
									<div data-bg="https://www.amsivedigital.com/wp-content/uploads/2021/05/700x600-_0002_Layer-12-1.jpg" class="image-background h-100 rocket-lazyload" 
						aria-hidden="true" 
						style="">
					</div>
							</div>
			<div class="col-lg-5 text-box  py-md-5 py-4">
				<div class="py-4 px-md-4 mx-1 d-flex h-100 align-items-center">
					<div>
											<div class="label">CONVERSION</div>
																							<h2 class="display-2 mb-4">Encourage action from your most valuable prospects.</h2>
																											<div class="mb-4"><p>We achieve optimal conversions through strategic retargeting through all capable channels. From shopping to search to social, we create a clear moment of action for your customer.</p>
</div>
															</div>
				</div>
			</div>		
		</div>		
	</div>
</section>
<div><div class="container-fluid mw-xl">

									<style>		
											#block_60b01ae84c3d2 {
							background: #7c0f81;
						}
																#block_60b01ae84c3d2 .text-box * {
							color: #ffffff !important;
						}
							
				</style>
						
	
</div></div><section id="block_60b01ae84c3d2" class="content-block  alignfull image-desc my-0 has-font-color text-default">	<div class="container-fluid mw-xl">
		<div class="row flex-row-reverse align-items-stretch h-100">
			<div class="col-lg-7 color-box align-self-stretch px-0">
									<div data-bg="https://www.amsivedigital.com/wp-content/uploads/2021/05/700x600-_0027_GettyImages-115004722.jpg" class="image-background h-100 rocket-lazyload" 
						aria-hidden="true" 
						style="">
					</div>
							</div>
			<div class="col-lg-5 text-box  py-md-5 py-4">
				<div class="py-4 px-md-4 mx-1 d-flex h-100 align-items-center">
					<div>
											<div class="label">TESTING + OPTIMIZATION</div>
																							<h2 class="display-2 mb-4">We don’t do guesswork.</h2>
																											<div class="mb-4"><p>Experimentation is necessary — but we’ve got it down to a science. Using the latest analytics tools, we test and iterate to pinpoint insights, optimize best-performing content, and maximize your ROI.</p>
<ul>
<li>Defining Outcomes</li>
<li>Auditing Existing Content</li>
<li>Identifying Opportunities</li>
<li>Concepting Creative</li>
<li>Mapping + Production</li>
<li>Analyzing Performance</li>
<li>Optimizing Amplification</li>
</ul>
</div>
															</div>
				</div>
			</div>		
		</div>		
	</div>
</section>
<div><div class="container-fluid mw-xl">


<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>


</div></div><section id="block_60b072f4850f5" class="content-block  alignfull content-grid py-0 my-0 has-font-color text-default">
					<div class="row mb-0 grid-line mx-0">
							<div class="col-12 single-grid g-type-1 text-center mb-0 p-0">
						
									<div class="grid-in  withtext islinked custom-grid force-img h-100 uselarge" >
		<a href="https://www.amsivedigital.com/clients/the-sak/" class="grid-link" ><span class="visually-hidden">The Sak</span></a>		
					<div class="image-background" aria-hidden="true">
				<picture class="zoom-img">
<source type="image/webp" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-1950x650.png.webp 1950w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-1200x400.png.webp 1200w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-600x200.png.webp 600w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-768x256.png.webp 768w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-1536x512.png.webp 1536w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-2048x683.png.webp 2048w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201170%20390&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1170px) 100vw, 1170px"/>
<img width="1170" height="390" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201170%20390&#039;%3E%3C/svg%3E" alt="TheSak_CS_3x1@2x" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-1950x650.png 1950w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-1200x400.png 1200w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-600x200.png 600w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-768x256.png 768w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-1536x512.png 1536w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-2048x683.png 2048w" data-lazy-sizes="(max-width: 1170px) 100vw, 1170px" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-1950x650.png"/>
</picture>
<noscript><picture class="zoom-img">
<source type="image/webp" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-1950x650.png.webp 1950w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-1200x400.png.webp 1200w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-600x200.png.webp 600w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-768x256.png.webp 768w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-1536x512.png.webp 1536w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-2048x683.png.webp 2048w" sizes="(max-width: 1170px) 100vw, 1170px"/>
<img width="1170" height="390" src="https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-1950x650.png" alt="TheSak_CS_3x1@2x" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-1950x650.png 1950w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-1200x400.png 1200w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-600x200.png 600w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-768x256.png 768w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-1536x512.png 1536w, https://www.amsivedigital.com/wp-content/uploads/2021/04/TheSak_CS_3x1@2x-2048x683.png 2048w" sizes="(max-width: 1170px) 100vw, 1170px"/>
</picture>
</noscript>			</div>
			
			
		<div class="text-start text-white row mx-md-4 text-top h-100 mx-0">	
			<div class="col-lg-4 col-md-6 col-10 offset-1 offset-md-0 py-5 my-auto">
									<p class="gr-t mb-lg-4 mb-3 titillium-web font-weight-normal">The Sak</p>
													<div class="gr-sub display-2 text-white mb-lg-4 mb-3">10x</div>
													<p class="gr-cat text-start grid-cat pe-lg-5 me-lg-5">Ecommerce Growth</p>
													<div class="text-start small-font">Driven by both established and new customers, we created a strategy that supported moving unsold merchandise while creating an entirely new level of brand demand. </div>
							</div>	
		</div>		
	</div>
																
				</div>
					</div>	
			</section>
<div><div class="container-fluid mw-xl">

</div></div><section id="block_607ce0322034f" class="content-block  alignfull py-md-5 py-4 recent-posts has-font-color text-default">	<div class="container-fluid mw-xl">
		<div class="row py-3 mb-4 ">
					<div class="col-md-8 pt-md-4">
													<h2 class="h4 mb-1">Learn more paid media insights.</h2>						
							</div>
			<div class="col-md-4 pt-md-4 pt-3 text-end mb-2 blog-list d-none d-md-block">
									<a href="https://www.amsivedigital.com/insights/category/paid-media/" class="animate-arrow to-categ pe-5 d-inline-block color-primary titillium-web">See all</a>
							</div>	
			
		</div>	
									<div class="blog-list">
							<div class="row align-items-stretch">
								
<article id="post-16735" class="categ-blog col-md-4 mb-3 mb-md-5 post-16735 post type-post status-publish format-standard has-post-thumbnail hentry category-paid-media">

    <div class="post-entry-inner h-100 bg-white">

					<div class="post-entry-media">
                <a href="https://www.amsivedigital.com/insights/paid-media/the-complete-podcast-advertising-guide/" title="The Complete Podcast Advertising Guide" tabindex="-1">
	                <div class="image-background">
						<picture class="zoom-img">
<source type="image/webp" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-976x650.jpg.webp 976w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-601x400.jpg.webp 601w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-300x200.jpg.webp 300w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-768x511.jpg.webp 768w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-1536x1023.jpg.webp 1536w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-2048x1364.jpg.webp 2048w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20976%20650&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 976px) 100vw, 976px"/>
<img width="976" height="650" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20976%20650&#039;%3E%3C/svg%3E" alt="GettyImages-157678123-blog-min" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-976x650.jpg 976w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-601x400.jpg 601w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-300x200.jpg 300w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-768x511.jpg 768w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-1536x1023.jpg 1536w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-2048x1364.jpg 2048w" data-lazy-sizes="(max-width: 976px) 100vw, 976px" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-976x650.jpg"/>
</picture>
<noscript><picture class="zoom-img">
<source type="image/webp" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-976x650.jpg.webp 976w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-601x400.jpg.webp 601w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-300x200.jpg.webp 300w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-768x511.jpg.webp 768w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-1536x1023.jpg.webp 1536w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-2048x1364.jpg.webp 2048w" sizes="(max-width: 976px) 100vw, 976px"/>
<img width="976" height="650" src="https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-976x650.jpg" alt="GettyImages-157678123-blog-min" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-976x650.jpg 976w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-601x400.jpg 601w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-300x200.jpg 300w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-768x511.jpg 768w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-1536x1023.jpg 1536w, https://www.amsivedigital.com/wp-content/uploads/2021/07/GettyImages-157678123-blog-min-2048x1364.jpg 2048w" sizes="(max-width: 976px) 100vw, 976px"/>
</picture>
</noscript>					</div>					
                </a>
            </div>
		

        <div class="post-entry-details py-3 px-4" onclick="boxAsLink(16735)">
		
			<div class="post-info small-font text-light-2 titillium-web mb-3">July 8, 2021</div>
            <div class="entry-header">
                <h2 class="entry-title h5 titillium-web mb-3">
                    <a href="https://www.amsivedigital.com/insights/paid-media/the-complete-podcast-advertising-guide/" title="The Complete Podcast Advertising Guide" class="post-permalink"
                       rel="bookmark">The Complete Podcast Advertising Guide</a>
                </h2>
            </div>

        </div><!-- end post-entry-meta -->

    </div><!--end post-entry -->

</article>


<article id="post-16385" class="categ-blog col-md-4 mb-3 mb-md-5 post-16385 post type-post status-publish format-standard has-post-thumbnail hentry category-paid-media">

    <div class="post-entry-inner h-100 bg-white">

					<div class="post-entry-media">
                <a href="https://www.amsivedigital.com/insights/paid-media/amazon-prime-day-preparations-how-to-strategize-and-amplify-visibility-and-sales/" title="Amazon Prime Day Preparations: How To Amplify Visibility + Sales" tabindex="-1">
	                <div class="image-background">
						<picture class="zoom-img">
<source type="image/webp" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-975x650.jpg.webp 975w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-600x400.jpg.webp 600w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-300x200.jpg.webp 300w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-768x512.jpg.webp 768w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-1536x1024.jpg.webp 1536w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-2048x1366.jpg.webp 2048w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20975%20650&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 975px) 100vw, 975px"/>
<img width="975" height="650" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20975%20650&#039;%3E%3C/svg%3E" alt="GettyImages-1272562578-min" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-975x650.jpg 975w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-600x400.jpg 600w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-300x200.jpg 300w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-768x512.jpg 768w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-1536x1024.jpg 1536w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-2048x1366.jpg 2048w" data-lazy-sizes="(max-width: 975px) 100vw, 975px" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-975x650.jpg"/>
</picture>
<noscript><picture class="zoom-img">
<source type="image/webp" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-975x650.jpg.webp 975w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-600x400.jpg.webp 600w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-300x200.jpg.webp 300w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-768x512.jpg.webp 768w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-1536x1024.jpg.webp 1536w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-2048x1366.jpg.webp 2048w" sizes="(max-width: 975px) 100vw, 975px"/>
<img width="975" height="650" src="https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-975x650.jpg" alt="GettyImages-1272562578-min" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-975x650.jpg 975w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-600x400.jpg 600w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-300x200.jpg 300w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-768x512.jpg 768w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-1536x1024.jpg 1536w, https://www.amsivedigital.com/wp-content/uploads/2021/06/GettyImages-1272562578-min-2048x1366.jpg 2048w" sizes="(max-width: 975px) 100vw, 975px"/>
</picture>
</noscript>					</div>					
                </a>
            </div>
		

        <div class="post-entry-details py-3 px-4" onclick="boxAsLink(16385)">
		
			<div class="post-info small-font text-light-2 titillium-web mb-3">June 8, 2021</div>
            <div class="entry-header">
                <h2 class="entry-title h5 titillium-web mb-3">
                    <a href="https://www.amsivedigital.com/insights/paid-media/amazon-prime-day-preparations-how-to-strategize-and-amplify-visibility-and-sales/" title="Amazon Prime Day Preparations: How To Amplify Visibility + Sales" class="post-permalink"
                       rel="bookmark">Amazon Prime Day Preparations: How To Amplify Visibility + Sales</a>
                </h2>
            </div>

        </div><!-- end post-entry-meta -->

    </div><!--end post-entry -->

</article>


<article id="post-15942" class="categ-blog col-md-4 mb-3 mb-md-5 post-15942 post type-post status-publish format-standard has-post-thumbnail hentry category-paid-media">

    <div class="post-entry-inner h-100 bg-white">

					<div class="post-entry-media">
                <a href="https://www.amsivedigital.com/insights/paid-media/google-discovery-ads-optimize-campaigns-save-time-with-the-modern-search-journey/" title="Google Discovery Ads: Optimize Campaigns + Save Time with the Modern Search Journey" tabindex="-1">
	                <div class="image-background">
						<picture class="zoom-img">
<source type="image/webp" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-975x650.jpg.webp 975w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-600x400.jpg.webp 600w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-300x200.jpg.webp 300w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-768x512.jpg.webp 768w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-1536x1024.jpg.webp 1536w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-2048x1365.jpg.webp 2048w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20975%20650&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 975px) 100vw, 975px"/>
<img width="975" height="650" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20975%20650&#039;%3E%3C/svg%3E" alt="GettyImages-1093929748-min" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-975x650.jpg 975w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-600x400.jpg 600w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-300x200.jpg 300w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-768x512.jpg 768w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-1536x1024.jpg 1536w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-2048x1365.jpg 2048w" data-lazy-sizes="(max-width: 975px) 100vw, 975px" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-975x650.jpg"/>
</picture>
<noscript><picture class="zoom-img">
<source type="image/webp" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-975x650.jpg.webp 975w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-600x400.jpg.webp 600w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-300x200.jpg.webp 300w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-768x512.jpg.webp 768w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-1536x1024.jpg.webp 1536w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-2048x1365.jpg.webp 2048w" sizes="(max-width: 975px) 100vw, 975px"/>
<img width="975" height="650" src="https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-975x650.jpg" alt="GettyImages-1093929748-min" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-975x650.jpg 975w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-600x400.jpg 600w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-300x200.jpg 300w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-768x512.jpg 768w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-1536x1024.jpg 1536w, https://www.amsivedigital.com/wp-content/uploads/2021/05/GettyImages-1093929748-min-2048x1365.jpg 2048w" sizes="(max-width: 975px) 100vw, 975px"/>
</picture>
</noscript>					</div>					
                </a>
            </div>
		

        <div class="post-entry-details py-3 px-4" onclick="boxAsLink(15942)">
		
			<div class="post-info small-font text-light-2 titillium-web mb-3">May 26, 2021</div>
            <div class="entry-header">
                <h2 class="entry-title h5 titillium-web mb-3">
                    <a href="https://www.amsivedigital.com/insights/paid-media/google-discovery-ads-optimize-campaigns-save-time-with-the-modern-search-journey/" title="Google Discovery Ads: Optimize Campaigns + Save Time with the Modern Search Journey" class="post-permalink"
                       rel="bookmark">Google Discovery Ads: Optimize Campaigns + Save Time with the Modern Search Journey</a>
                </h2>
            </div>

        </div><!-- end post-entry-meta -->

    </div><!--end post-entry -->

</article>

								
							</div>
																					<div class="py-2 text-end d-block d-md-none blog-list">
									<a href="https://www.amsivedigital.com/insights/category/paid-media/" class="animate-arrow pe-5 d-inline-block color-primary titillium-web">See all from Paid Media </a>								
								</div>
																			</div>
									
	</div>
</section>
<div><div class="container-fluid mw-xl">


			
			<style>
				#block_607ce06520350 {
										background-color: #000000;
															color: #ffffff;
															background-image: url(https://www.amsivedigital.com/wp-content/uploads/2021/04/contact_CTA_photo_opt.jpg);
					background-repeat:no-repeat;
													background-position: center center;
							background-size:cover;
															}				
			</style>
					</div></div><section id="block_607ce06520350" class="content-block adtheme-cta py-md-5 py-0 has-font-color text-default background-custom  alignfull background-000000 adtheme-cta has-font-color text-default">				<div class="container-fluid mw-xl">
										<div class="d-block d-md-none">
						<picture class="d-block m-0 p-0 w-100">
<source type="image/webp" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/04/cta-mob.jpg.webp 751w, https://www.amsivedigital.com/wp-content/uploads/2021/04/cta-mob-602x400.jpg.webp 602w, https://www.amsivedigital.com/wp-content/uploads/2021/04/cta-mob-301x200.jpg.webp 301w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20751%20499&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 751px) 100vw, 751px"/>
<img width="751" height="499" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20751%20499&#039;%3E%3C/svg%3E" alt="cta-mob" data-lazy-srcset="https://www.amsivedigital.com/wp-content/uploads/2021/04/cta-mob.jpg 751w, https://www.amsivedigital.com/wp-content/uploads/2021/04/cta-mob-602x400.jpg 602w, https://www.amsivedigital.com/wp-content/uploads/2021/04/cta-mob-301x200.jpg 301w" data-lazy-sizes="(max-width: 751px) 100vw, 751px" data-lazy-src="https://www.amsivedigital.com/wp-content/uploads/2021/04/cta-mob.jpg"/>
</picture>
<noscript><picture class="d-block m-0 p-0 w-100">
<source type="image/webp" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/04/cta-mob.jpg.webp 751w, https://www.amsivedigital.com/wp-content/uploads/2021/04/cta-mob-602x400.jpg.webp 602w, https://www.amsivedigital.com/wp-content/uploads/2021/04/cta-mob-301x200.jpg.webp 301w" sizes="(max-width: 751px) 100vw, 751px"/>
<img width="751" height="499" src="https://www.amsivedigital.com/wp-content/uploads/2021/04/cta-mob.jpg" alt="cta-mob" srcset="https://www.amsivedigital.com/wp-content/uploads/2021/04/cta-mob.jpg 751w, https://www.amsivedigital.com/wp-content/uploads/2021/04/cta-mob-602x400.jpg 602w, https://www.amsivedigital.com/wp-content/uploads/2021/04/cta-mob-301x200.jpg 301w" sizes="(max-width: 751px) 100vw, 751px"/>
</picture>
</noscript>					</div>
										<div class="row py-md-2 py-5 px-md-0 px-3">
											<div class="col-xl-5 col-md-6 py-md-4">
																				<h2 class="cta-title display-2 w-xl-75 me-5 me-md-0">Work with us.</h2>
																			<p class="cta-text mb-0 mt-4 px-md-2">We love to be challenged. Bring us your problems — and we’ll create data-driven solutions.</p>
																														<a href="https://www.amsivedigital.com/contact/" target="_self" class="btn btn-primary mt-4" target="_self" >
								LET&#039;S TALK							</a>
																					</div>				
					</div>		
				</div>
			</section>
<div><div class="container-fluid mw-xl">

	

	<style>
					#block_607ce0ab20351 {			
				background: #1a7175;
			}
			#block_607ce0ab20351 .link-box:hover svg .s-arr{
				fill: #1a7175;
			}
							#block_607ce0ab20351 * {			
				color: #ffffff !important;				
			}
			#block_607ce0ab20351 svg .s-arr {			
				fill: #ffffff;				
			}			
				
	</style>

</div></div><section id="block_607ce0ab20351" class="content-block  alignfull py-md-5 py-4 background-1a7175 quick-links has-font-color text-default">	<div class="container-fluid mw-xl">
		<div class="row py-md-2">
			<div class="col-md-10 offset-md-1 py-md-4 text-center">
													<h2 class="cta-title display-2">Explore our full suite of services.</h2>						
									
			</div>			
		</div>
					<div class="row">
				<div class="col mb-3 px-0 px-md-3">
					<div class="row link-box-wrap mx-0">
												<div class="col-md-6 px-0 link-box text-start ww-active">
																	
									<div class="px-4 py-4 text-start mx-2 add-col mb-3">
																					<div class="h4 text-start titillium-web m-0">
												Paid Media											</div>
									</div>
														</div>
							
												<div class="col-md-6 px-0 link-box text-start ">
																									<a class="long-arrow" href="https://www.amsivedigital.com/services/seo/" target="_self">
									
									<div class="px-4 py-4 text-start mx-2 add-col mb-3">
										<span class="svg-circle"><svg width="36px" height="36px" viewBox="0 0 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
												<defs>
													<polygon id="path-1" points="18 12.6666667 17.06 13.6066667 20.78 17.3333333 12.6666667 17.3333333 12.6666667 18.6666667 20.78 18.6666667 17.06 22.3933333 18 23.3333333 23.3333333 18"></polygon>
												</defs>
												<g id="Assets-/-0-Generic-/-icon_generic_circle_arrow_off" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<mask class="mask-2" fill="white">
														<use xlink:href="#path-1"></use>
													</mask>
													<use class="s-arr" fill="#7C0080" xlink:href="#path-1"></use>
												</g>
											</svg></span>											<div class="h4 text-start titillium-web m-0">
												SEO											</div>
									</div>
																	</a>
														</div>
							
												<div class="col-md-6 px-0 link-box text-start ">
																									<a class="long-arrow" href="https://www.amsivedigital.com/services/social/" target="_self">
									
									<div class="px-4 py-4 text-start mx-2 add-col mb-3">
										<span class="svg-circle"><svg width="36px" height="36px" viewBox="0 0 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
												<defs>
													<polygon id="path-1" points="18 12.6666667 17.06 13.6066667 20.78 17.3333333 12.6666667 17.3333333 12.6666667 18.6666667 20.78 18.6666667 17.06 22.3933333 18 23.3333333 23.3333333 18"></polygon>
												</defs>
												<g id="Assets-/-0-Generic-/-icon_generic_circle_arrow_off" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<mask class="mask-2" fill="white">
														<use xlink:href="#path-1"></use>
													</mask>
													<use class="s-arr" fill="#7C0080" xlink:href="#path-1"></use>
												</g>
											</svg></span>											<div class="h4 text-start titillium-web m-0">
												Social											</div>
									</div>
																	</a>
														</div>
							
												<div class="col-md-6 px-0 link-box text-start ">
																									<a class="long-arrow" href="https://www.amsivedigital.com/services/performance-creative/" target="_self">
									
									<div class="px-4 py-4 text-start mx-2 add-col mb-3">
										<span class="svg-circle"><svg width="36px" height="36px" viewBox="0 0 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
												<defs>
													<polygon id="path-1" points="18 12.6666667 17.06 13.6066667 20.78 17.3333333 12.6666667 17.3333333 12.6666667 18.6666667 20.78 18.6666667 17.06 22.3933333 18 23.3333333 23.3333333 18"></polygon>
												</defs>
												<g id="Assets-/-0-Generic-/-icon_generic_circle_arrow_off" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<mask class="mask-2" fill="white">
														<use xlink:href="#path-1"></use>
													</mask>
													<use class="s-arr" fill="#7C0080" xlink:href="#path-1"></use>
												</g>
											</svg></span>											<div class="h4 text-start titillium-web m-0">
												Performance Creative											</div>
									</div>
																	</a>
														</div>
							
												<div class="col-md-6 px-0 link-box text-start ">
																									<a class="long-arrow" href="https://www.amsivedigital.com/services/data-solutions/" target="_self">
									
									<div class="px-4 py-4 text-start mx-2 add-col mb-3">
										<span class="svg-circle"><svg width="36px" height="36px" viewBox="0 0 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
												<defs>
													<polygon id="path-1" points="18 12.6666667 17.06 13.6066667 20.78 17.3333333 12.6666667 17.3333333 12.6666667 18.6666667 20.78 18.6666667 17.06 22.3933333 18 23.3333333 23.3333333 18"></polygon>
												</defs>
												<g id="Assets-/-0-Generic-/-icon_generic_circle_arrow_off" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<mask class="mask-2" fill="white">
														<use xlink:href="#path-1"></use>
													</mask>
													<use class="s-arr" fill="#7C0080" xlink:href="#path-1"></use>
												</g>
											</svg></span>											<div class="h4 text-start titillium-web m-0">
												Data Solutions											</div>
									</div>
																	</a>
														</div>
							
												<div class="col-md-6 px-0 link-box text-start ">
																									<a class="long-arrow" href="https://www.amsivedigital.com/services/strategy/" target="_self">
									
									<div class="px-4 py-4 text-start mx-2 add-col mb-3">
										<span class="svg-circle"><svg width="36px" height="36px" viewBox="0 0 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
												<defs>
													<polygon id="path-1" points="18 12.6666667 17.06 13.6066667 20.78 17.3333333 12.6666667 17.3333333 12.6666667 18.6666667 20.78 18.6666667 17.06 22.3933333 18 23.3333333 23.3333333 18"></polygon>
												</defs>
												<g id="Assets-/-0-Generic-/-icon_generic_circle_arrow_off" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<mask class="mask-2" fill="white">
														<use xlink:href="#path-1"></use>
													</mask>
													<use class="s-arr" fill="#7C0080" xlink:href="#path-1"></use>
												</g>
											</svg></span>											<div class="h4 text-start titillium-web m-0">
												Strategy											</div>
									</div>
																	</a>
														</div>
							
											</div>
				</div>
			</div>
			</div>
</section>
<div><div class="container-fluid mw-xl">        </div>
		
		</div><!-- end .container-fluid -->
</div><!-- end #page-content-container -->

<!-- FOOTER -->

<footer id="footer" class="has-bg-color background-262626 text-white">

    <div class="container-fluid mw-xl">
				
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
                <div class='gf_browser_unknown gform_wrapper gravity-theme fake-submit-form_wrapper' id='gform_wrapper_13' >
                        <div class='gform_heading'>
                            <span class='gform_description'>Subscribe to our newsletter</span>
                        </div><form method='post' enctype='multipart/form-data'  id='gform_13' class='fake-submit-form' action='/services/paid-media/' novalidate>
                        <div class='gform_body gform-body'><div id='gform_fields_13' class='gform_fields top_label form_sublabel_below description_below'><div id="field_13_1" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible" ><label class='gfield_label' for='input_13_1' >Email<span class="gfield_required"><span class="gfield_required gfield_required_text">(Required)</span></span></label><div class='ginput_container ginput_container_email'>
                            <input name='input_1' id='input_13_1' type='email' value='' class='large'   placeholder='Enter Your Email' aria-required="true" aria-invalid="false"  />
                        </div></div><div id="field_13_4" class="gfield gfield--width-full gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_visible" ><button  id="foot-fake" class="btn btn-primary">Submit</button></div><div id="field_13_5" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible" ><div class='ginput_container ginput_container_text'><input name='input_5' id='input_13_5' type='hidden' class='gform_hidden'  aria-invalid="false" value='Email Subscription' /></div></div><div id="field_13_6" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible" ><div class='ginput_container ginput_container_text'><input name='input_6' id='input_13_6' type='hidden' class='gform_hidden'  aria-invalid="false" value='https://www.amsivedigital.com/services/paid-media/' /></div></div><div id="field_13_7" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible" ><div class='ginput_container ginput_container_text'><input name='input_7' id='input_13_7' type='hidden' class='gform_hidden'  aria-invalid="false" value='' /></div></div><div id="field_13_8" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible" ><div class='ginput_container ginput_container_text'><input name='input_8' id='input_13_8' type='hidden' class='gform_hidden'  aria-invalid="false" value='' /></div></div><div id="field_13_9" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible" ><div class='ginput_container ginput_container_text'><input name='input_9' id='input_13_9' type='hidden' class='gform_hidden'  aria-invalid="false" value='' /></div></div><div id="field_13_10" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible" ><div class='ginput_container ginput_container_text'><input name='input_10' id='input_13_10' type='hidden' class='gform_hidden'  aria-invalid="false" value='' /></div></div><div id="field_13_11" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible" ><div class='ginput_container ginput_container_text'><input name='input_11' id='input_13_11' type='hidden' class='gform_hidden'  aria-invalid="false" value='' /></div></div><div id="field_13_12" class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible" ><div class='ginput_container ginput_container_text'><input name='input_12' id='input_13_12' type='hidden' class='gform_hidden'  aria-invalid="false" value='1' /></div></div><div id="field_13_13" class="gfield gform_validation_container field_sublabel_below field_description_below gfield_visibility_visible" ><label class='gfield_label' for='input_13_13' >Comments</label><div class='ginput_container'><input name='input_13' id='input_13_13' type='text' value='' autocomplete='new-password'/></div><div class='gfield_description' id='gfield_description_13_13'>This field is for validation purposes and should be left unchanged.</div></div></div></div>
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
						<div class="widget widget_nav_menu nav_menu-9"><div class="menu-footer-sub-services-container"><ul id="menu-footer-sub-services" class="menu"><li id="menu-item-15340" class="menu-item current-menu-item"><a href="https://www.amsivedigital.com/services/paid-media/" aria-current="page">Paid Media</a></li>
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


</body>
</html>

<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me -->