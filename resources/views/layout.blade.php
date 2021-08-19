
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
	<!--
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
	-->



<link rel="alternate" type="application/rss+xml" title="Amsive Digital &raquo; Feed" href="https://www.amsivedigital.com/feed/" />
<link rel='stylesheet' id='bootstrap-css'  href='https://www.amsivedigital.com/wp-content/themes/ad-theme/bootstrap-custom/make/bootstrap-cust.min.css?ver=1624397687' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='styles-css'  href='https://www.amsivedigital.com/wp-content/cache/min/1/wp-content/themes/ad-theme/dist/css/styles.min.css?ver=1628889607' type='text/css' media='all' />
<link rel="https://api.w.org/" href="https://www.amsivedigital.com/wp-json/" /><link rel="alternate" type="application/json" href="https://www.amsivedigital.com/wp-json/wp/v2/pages/2" />
<link rel='shortlink' href='https://www.amsivedigital.com/' />
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
						</script><noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript>
</head>