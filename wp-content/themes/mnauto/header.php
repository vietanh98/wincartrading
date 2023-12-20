<!DOCTYPE html>
<html class="avada-html-layout-wide avada-html-header-position-top avada-is-100-percent-template" lang="vi"
	prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

<!-- Mirrored from wincartrading.com.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Dec 2023 13:53:32 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script>if (navigator.userAgent.match(/MSIE|Internet Explorer/i) || navigator.userAgent.match(/Trident\/7\..*?rv:11/i)) { var href = document.location.href; if (!href.match(/[?&]nowprocket/)) { if (href.indexOf("?") == -1) { if (href.indexOf("#") == -1) { document.location.href = href + "?nowprocket=1" } else { document.location.href = href.replace("#", "?nowprocket=1#") } } else { if (href.indexOf("#") == -1) { document.location.href = href + "&nowprocket=1" } else { document.location.href = href.replace("#", "&nowprocket=1#") } } } }</script>
	<script>class RocketLazyLoadScripts { constructor() { this.v = "1.2.4", this.triggerEvents = ["keydown", "mousedown", "mousemove", "touchmove", "touchstart", "touchend", "wheel"], this.userEventHandler = this._triggerListener.bind(this), this.touchStartHandler = this._onTouchStart.bind(this), this.touchMoveHandler = this._onTouchMove.bind(this), this.touchEndHandler = this._onTouchEnd.bind(this), this.clickHandler = this._onClick.bind(this), this.interceptedClicks = [], window.addEventListener("pageshow", t => { this.persisted = t.persisted }), window.addEventListener("DOMContentLoaded", () => { this._preconnect3rdParties() }), this.delayedScripts = { normal: [], async: [], defer: [] }, this.trash = [], this.allJQueries = [] } _addUserInteractionListener(t) { if (document.hidden) { t._triggerListener(); return } this.triggerEvents.forEach(e => window.addEventListener(e, t.userEventHandler, { passive: !0 })), window.addEventListener("touchstart", t.touchStartHandler, { passive: !0 }), window.addEventListener("mousedown", t.touchStartHandler), document.addEventListener("visibilitychange", t.userEventHandler) } _removeUserInteractionListener() { this.triggerEvents.forEach(t => window.removeEventListener(t, this.userEventHandler, { passive: !0 })), document.removeEventListener("visibilitychange", this.userEventHandler) } _onTouchStart(t) { "HTML" !== t.target.tagName && (window.addEventListener("touchend", this.touchEndHandler), window.addEventListener("mouseup", this.touchEndHandler), window.addEventListener("touchmove", this.touchMoveHandler, { passive: !0 }), window.addEventListener("mousemove", this.touchMoveHandler), t.target.addEventListener("click", this.clickHandler), this._renameDOMAttribute(t.target, "onclick", "rocket-onclick"), this._pendingClickStarted()) } _onTouchMove(t) { window.removeEventListener("touchend", this.touchEndHandler), window.removeEventListener("mouseup", this.touchEndHandler), window.removeEventListener("touchmove", this.touchMoveHandler, { passive: !0 }), window.removeEventListener("mousemove", this.touchMoveHandler), t.target.removeEventListener("click", this.clickHandler), this._renameDOMAttribute(t.target, "rocket-onclick", "onclick"), this._pendingClickFinished() } _onTouchEnd() { window.removeEventListener("touchend", this.touchEndHandler), window.removeEventListener("mouseup", this.touchEndHandler), window.removeEventListener("touchmove", this.touchMoveHandler, { passive: !0 }), window.removeEventListener("mousemove", this.touchMoveHandler) } _onClick(t) { t.target.removeEventListener("click", this.clickHandler), this._renameDOMAttribute(t.target, "rocket-onclick", "onclick"), this.interceptedClicks.push(t), t.preventDefault(), t.stopPropagation(), t.stopImmediatePropagation(), this._pendingClickFinished() } _replayClicks() { window.removeEventListener("touchstart", this.touchStartHandler, { passive: !0 }), window.removeEventListener("mousedown", this.touchStartHandler), this.interceptedClicks.forEach(t => { t.target.dispatchEvent(new MouseEvent("click", { view: t.view, bubbles: !0, cancelable: !0 })) }) } _waitForPendingClicks() { return new Promise(t => { this._isClickPending ? this._pendingClickFinished = t : t() }) } _pendingClickStarted() { this._isClickPending = !0 } _pendingClickFinished() { this._isClickPending = !1 } _renameDOMAttribute(t, e, r) { t.hasAttribute && t.hasAttribute(e) && (event.target.setAttribute(r, event.target.getAttribute(e)), event.target.removeAttribute(e)) } _triggerListener() { this._removeUserInteractionListener(this), "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", this._loadEverythingNow.bind(this)) : this._loadEverythingNow() } _preconnect3rdParties() { let t = []; document.querySelectorAll("script[type=rocketlazyloadscript][data-rocket-src]").forEach(e => { let r = e.getAttribute("data-rocket-src"); if (r && 0 !== r.indexOf("data:")) { 0 === r.indexOf("//") && (r = location.protocol + r); try { let i = new URL(r.html).origin; i !== location.origin && t.push({ src: i, crossOrigin: e.crossOrigin || "module" === e.getAttribute("data-rocket-type") }) } catch (n) { } } }), t = [...new Map(t.map(t => [JSON.stringify(t), t])).values()], this._batchInjectResourceHints(t, "preconnect") } async _loadEverythingNow() { this.lastBreath = Date.now(), this._delayEventListeners(), this._delayJQueryReady(this), this._handleDocumentWrite(), this._registerAllDelayedScripts(), this._preloadAllScripts(), await this._loadScriptsFromList(this.delayedScripts.normal), await this._loadScriptsFromList(this.delayedScripts.defer), await this._loadScriptsFromList(this.delayedScripts.async); try { await this._triggerDOMContentLoaded(), await this._pendingWebpackRequests(this), await this._triggerWindowLoad() } catch (t) { console.error(t) } window.dispatchEvent(new Event("rocket-allScriptsLoaded")), this._waitForPendingClicks().then(() => { this._replayClicks() }), this._emptyTrash() } _registerAllDelayedScripts() { document.querySelectorAll("script[type=rocketlazyloadscript]").forEach(t => { t.hasAttribute("data-rocket-src") ? t.hasAttribute("async") && !1 !== t.async ? this.delayedScripts.async.push(t) : t.hasAttribute("defer") && !1 !== t.defer || "module" === t.getAttribute("data-rocket-type") ? this.delayedScripts.defer.push(t) : this.delayedScripts.normal.push(t) : this.delayedScripts.normal.push(t) }) } async _transformScript(t) { if (await this._littleBreath(), !0 === t.noModule && "noModule" in HTMLScriptElement.prototype) { t.setAttribute("data-rocket-status", "skipped"); return } return new Promise(navigator.userAgent.indexOf("Firefox/index.html") > 0 || "" === navigator.vendor ? e => { let r = document.createElement("script");[...t.attributes].forEach(t => { let e = t.nodeName; "type" !== e && ("data-rocket-type" === e && (e = "type"), "data-rocket-src" === e && (e = "src"), r.setAttribute(e, t.nodeValue)) }), t.text && (r.text = t.text), r.hasAttribute("src") ? (r.addEventListener("load", e), r.addEventListener("error", e)) : (r.text = t.text, e()); try { t.parentNode.replaceChild(r, t) } catch (i) { e() } } : e => { function r() { t.setAttribute("data-rocket-status", "failed"), e() } try { let i = t.getAttribute("data-rocket-type"), n = t.getAttribute("data-rocket-src"); i ? (t.type = i, t.removeAttribute("data-rocket-type")) : t.removeAttribute("type"), t.addEventListener("load", function r() { t.setAttribute("data-rocket-status", "executed"), e() }), t.addEventListener("error", r), n ? (t.removeAttribute("data-rocket-src"), t.src = n) : t.src = "data:text/javascript;base64," + window.btoa(unescape(encodeURIComponent(t.text))) } catch (s) { r() } }) } async _loadScriptsFromList(t) { let e = t.shift(); return e && e.isConnected ? (await this._transformScript(e), this._loadScriptsFromList(t)) : Promise.resolve() } _preloadAllScripts() { this._batchInjectResourceHints([...this.delayedScripts.normal, ...this.delayedScripts.defer, ...this.delayedScripts.async], "preload") } _batchInjectResourceHints(t, e) { var r = document.createDocumentFragment(); t.forEach(t => { let i = t.getAttribute && t.getAttribute("data-rocket-src") || t.src; if (i) { let n = document.createElement("link"); n.href = i, n.rel = e, "preconnect" !== e && (n.as = "script"), t.getAttribute && "module" === t.getAttribute("data-rocket-type") && (n.crossOrigin = !0), t.crossOrigin && (n.crossOrigin = t.crossOrigin), t.integrity && (n.integrity = t.integrity), r.appendChild(n), this.trash.push(n) } }), document.head.appendChild(r) } _delayEventListeners() { let t = {}; function e(e, r) { !function e(r) { !t[r] && (t[r] = { originalFunctions: { add: r.addEventListener, remove: r.removeEventListener }, eventsToRewrite: [] }, r.addEventListener = function () { arguments[0] = i(arguments[0]), t[r].originalFunctions.add.apply(r, arguments) }, r.removeEventListener = function () { arguments[0] = i(arguments[0]), t[r].originalFunctions.remove.apply(r, arguments) }); function i(e) { return t[r].eventsToRewrite.indexOf(e) >= 0 ? "rocket-" + e : e } }(e), t[e].eventsToRewrite.push(r) } function r(t, e) { let r = t[e]; Object.defineProperty(t, e, { get: () => r || function () { }, set(i) { t["rocket" + e] = r = i } }) } e(document, "DOMContentLoaded"), e(window, "DOMContentLoaded"), e(window, "load"), e(window, "pageshow"), e(document, "readystatechange"), r(document, "onreadystatechange"), r(window, "onload"), r(window, "onpageshow") } _delayJQueryReady(t) { let e; function r(t) { return t.split(" ").map(t => "load" === t || 0 === t.indexOf("load.") ? "rocket-jquery-load" : t).join(" ") } function i(i) { if (i && i.fn && !t.allJQueries.includes(i)) { i.fn.ready = i.fn.init.prototype.ready = function (e) { return t.domReadyFired ? e.bind(document)(i) : document.addEventListener("rocket-DOMContentLoaded", () => e.bind(document)(i)), i([]) }; let n = i.fn.on; i.fn.on = i.fn.init.prototype.on = function () { return this[0] === window && ("string" == typeof arguments[0] || arguments[0] instanceof String ? arguments[0] = r(arguments[0]) : "object" == typeof arguments[0] && Object.keys(arguments[0]).forEach(t => { let e = arguments[0][t]; delete arguments[0][t], arguments[0][r(t)] = e })), n.apply(this, arguments), this }, t.allJQueries.push(i) } e = i } i(window.jQuery), Object.defineProperty(window, "jQuery", { get: () => e, set(t) { i(t) } }) } async _pendingWebpackRequests(t) { let e = document.querySelector("script[data-webpack]"); async function r() { return new Promise(t => { e.addEventListener("load", t), e.addEventListener("error", t) }) } e && (await r(), await t._requestAnimFrame(), await t._pendingWebpackRequests(t)) } async _triggerDOMContentLoaded() { this.domReadyFired = !0, await this._littleBreath(), document.dispatchEvent(new Event("rocket-DOMContentLoaded")), await this._littleBreath(), window.dispatchEvent(new Event("rocket-DOMContentLoaded")), await this._littleBreath(), document.dispatchEvent(new Event("rocket-readystatechange")), await this._littleBreath(), document.rocketonreadystatechange && document.rocketonreadystatechange() } async _triggerWindowLoad() { await this._littleBreath(), window.dispatchEvent(new Event("rocket-load")), await this._littleBreath(), window.rocketonload && window.rocketonload(), await this._littleBreath(), this.allJQueries.forEach(t => t(window).trigger("rocket-jquery-load")), await this._littleBreath(); let t = new Event("rocket-pageshow"); t.persisted = this.persisted, window.dispatchEvent(t), await this._littleBreath(), window.rocketonpageshow && window.rocketonpageshow({ persisted: this.persisted }) } _handleDocumentWrite() { let t = new Map; document.write = document.writeln = function (e) { let r = document.currentScript; r || console.error("WPRocket unable to document.write this: " + e); let i = document.createRange(), n = r.parentElement, s = t.get(r); void 0 === s && (s = r.nextSibling, t.set(r, s)); let a = document.createDocumentFragment(); i.setStart(a, 0), a.appendChild(i.createContextualFragment(e)), n.insertBefore(a, s) } } async _littleBreath() { Date.now() - this.lastBreath > 45 && (await this._requestAnimFrame(), this.lastBreath = Date.now()) } async _requestAnimFrame() { return document.hidden ? new Promise(t => setTimeout(t)) : new Promise(t => requestAnimationFrame(t)) } _emptyTrash() { this.trash.forEach(t => t.remove()) } static run() { let t = new RocketLazyLoadScripts; t._addUserInteractionListener(t) } } RocketLazyLoadScripts.run();</script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

	<!-- This site is optimized with the Yoast SEO Premium plugin v21.4 (Yoast SEO v21.6) - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Trang chủ - WINCAR TRADING</title>
	<link rel="canonical" href="index.html" />
	<meta property="og:locale" content="vi_VN" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Trang chủ" />
	<meta property="og:url" content="https://wincartrading.com.vn/" />
	<meta property="og:site_name" content="WINCAR TRADING" />
	<meta property="article:modified_time" content="2023-12-11T04:08:52+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<script type="application/ld+json"
		class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://wincartrading.com.vn/","url":"https://wincartrading.com.vn/","name":"Trang chủ - WINCAR TRADING","isPartOf":{"@id":"https://wincartrading.com.vn/#website"},"about":{"@id":"https://wincartrading.com.vn/#organization"},"datePublished":"2023-12-05T01:17:24+00:00","dateModified":"2023-12-11T04:08:52+00:00","breadcrumb":{"@id":"https://wincartrading.com.vn/#breadcrumb"},"inLanguage":"vi","potentialAction":[{"@type":"ReadAction","target":["https://wincartrading.com.vn/"]}]},{"@type":"BreadcrumbList","@id":"https://wincartrading.com.vn/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Trang chủ"}]},{"@type":"WebSite","@id":"https://wincartrading.com.vn/#website","url":"https://wincartrading.com.vn/","name":"WINCAR TRADING","description":"","publisher":{"@id":"https://wincartrading.com.vn/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://wincartrading.com.vn/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"vi"},{"@type":"Organization","@id":"https://wincartrading.com.vn/#organization","name":"WINCAR TRADING","url":"https://wincartrading.com.vn/","logo":{"@type":"ImageObject","inLanguage":"vi","@id":"https://wincartrading.com.vn/#/schema/logo/image/","url":"http://wincartrading.com.vn/wp-content/uploads/2023/12/wincar-logo.png","contentUrl":"http://wincartrading.com.vn/wp-content/uploads/2023/12/wincar-logo.png","width":1000,"height":1000,"caption":"WINCAR TRADING"},"image":{"@id":"https://wincartrading.com.vn/#/schema/logo/image/"},"sameAs":["https://masothue.com/0316484614-cong-ty-co-phan-dau-tu-xay-dung-va-dich-vu-thuong-mai-wincar"]}]}</script>
	<!-- / Yoast SEO Premium plugin. -->


	<link rel='dns-prefetch' href='http://stats.wp.com/' />
	<link rel="alternate" type="application/rss+xml" title="Dòng thông tin WINCAR TRADING &raquo;"
		href="feed/index.html" />
	<link rel="alternate" type="application/rss+xml" title="Dòng phản hồi WINCAR TRADING &raquo;"
		href="comments/feed/index.html" />
	<link rel="shortcut icon" href="wp-content/uploads/2023/12/xWINCAR-logo-new.png.pagespeed.ic.TZIhXjcAm-.png"
		type="image/x-icon" />

	<!-- Apple Touch Icon -->
	<link rel="apple-touch-icon" sizes="180x180"
		href="wp-content/uploads/2023/12/xWINCAR-logo-new.png.pagespeed.ic.TZIhXjcAm-.png">

	<!-- Android Icon -->
	<link rel="icon" sizes="192x192" href="wp-content/uploads/2023/12/xWINCAR-logo-new.png.pagespeed.ic.TZIhXjcAm-.png">

	<!-- MS Edge Icon -->
	<meta name="msapplication-TileImage"
		content="https://wincartrading.com.vn/wp-content/uploads/2023/12/WINCAR-logo-new.png">

	<meta property="og:title" content="Trang chủ" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="https://wincartrading.com.vn/" />
	<meta property="og:site_name" content="WINCAR TRADING" />
	<meta property="og:description" content="LĨNH VỰC HOẠT ĐỘNG 
SẢN XUẤT NÔNG NGHIỆP  
KHAI THÁC KHOÁNG SẢN  
ĐẦU TƯ VÀ XÂY DỰNG      ĐỐI TÁC CHIẾN LƯỢC        
CỬA HÀNG TRỰC TUYẾN 
WINCAR mong muốn cung cấp tới thị trường" />

	<meta property="og:image" content="http://wincartrading.com.vn/wp-content/uploads/2023/12/WINCAR-logo-new.png" />
</head>

<body
	class="home page-template page-template-100-width page-template-100-width-php page page-id-19 theme-Avada woocommerce-no-js awb-no-sidebars fusion-image-hovers fusion-pagination-sizing fusion-button_type-flat fusion-button_span-no fusion-button_gradient-linear avada-image-rollover-circle-yes avada-image-rollover-yes avada-image-rollover-direction-left fusion-body ltr fusion-sticky-header no-tablet-sticky-header no-mobile-sticky-header no-mobile-slidingbar no-mobile-totop avada-has-rev-slider-styles fusion-disable-outline fusion-sub-menu-fade mobile-logo-pos-left layout-wide-mode avada-has-boxed-modal-shadow-none layout-scroll-offset-full avada-has-zero-margin-offset-top fusion-top-header menu-text-align-center fusion-woo-product-design-classic fusion-woo-shop-page-columns-4 fusion-woo-related-columns-4 fusion-woo-archive-page-columns-3 avada-has-woo-gallery-disabled woo-sale-badge-circle woo-outofstock-badge-top_bar mobile-menu-design-classic fusion-show-pagination-text fusion-header-layout-v3 avada-responsive avada-footer-fx-none avada-menu-highlight-style-bar fusion-search-form-clean fusion-main-menu-search-overlay fusion-avatar-circle avada-dropdown-styles avada-blog-layout-large avada-blog-archive-layout-large avada-header-shadow-no avada-menu-icon-position-left avada-has-megamenu-shadow avada-has-mobile-menu-search avada-has-main-nav-search-icon avada-has-breadcrumb-mobile-hidden avada-has-titlebar-hide avada-header-border-color-full-transparent avada-has-slidingbar-widgets avada-has-slidingbar-position-top avada-slidingbar-toggle-style-circle avada-has-slidingbar-sticky avada-has-pagination-width_height avada-flyout-menu-direction-fade avada-ec-views-v1"
	data-awb-post-id="19">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	<div id="boxed-wrapper">

		<div id="wrapper" class="fusion-wrapper">
			<div id="home" style="position:relative;top:-1px;"></div>
			<div class="fusion-tb-header">
				<div class="fusion-fullwidth fullwidth-box fusion-builder-row-1 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling fusion-sticky-container fusion-custom-z-index"
					style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-z-index:20051;--awb-padding-top:10px;--awb-padding-right:30px;--awb-padding-bottom:10px;--awb-padding-left:30px;--awb-padding-top-small:0px;--awb-padding-bottom-small:0px;--awb-margin-top-small:0px;--awb-margin-bottom-small:0px;--awb-background-color:#ffffff;--awb-sticky-background-color:#ffffff !important;--awb-flex-wrap:wrap;"
					data-transition-offset="100" data-scroll-offset="0" data-sticky-small-visibility="1"
					data-sticky-medium-visibility="1" data-sticky-large-visibility="1">
					<div class="fusion-builder-row fusion-row fusion-flex-align-items-stretch fusion-flex-content-wrap"
						style="max-width:1144px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
						<div class="fusion-layout-column fusion_builder_column fusion-builder-column-0 fusion-flex-column"
							style="--awb-bg-size:cover;--awb-width-large:15%;--awb-margin-top-large:10px;--awb-spacing-right-large:12.8%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:12.8%;--awb-width-medium:20%;--awb-order-medium:0;--awb-spacing-right-medium:9.6%;--awb-spacing-left-medium:9.6%;--awb-width-small:25%;--awb-order-small:0;--awb-spacing-right-small:7.68%;--awb-spacing-left-small:7.68%;">
							<div
								class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-center fusion-content-layout-column">
								<div class="fusion-image-element sm-text-align-left"
									style="--awb-max-width:125px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
									<span class=" fusion-imageframe imageframe-none imageframe-1 hover-type-none"><a
											class="fusion-no-lightbox" href="index.html" target="_self"
											aria-label="wincar-logo"><img fetchpriority="high" decoding="async"
												width="300" height="300" alt="WINCAR TRADING"
												src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20300'%3E%3C/svg%3E"
												class="img-responsive wp-image-17"
												data-lazy-src="wp-content/uploads/2023/12/WINCAR-logo-new.png" /><noscript><img
													fetchpriority="high" decoding="async" width="300" height="300"
													alt="WINCAR TRADING"
													src="wp-content/uploads/2023/12/300x300xWINCAR-logo-new.png.pagespeed.ic.IDUA5usC2p.png"
													class="img-responsive wp-image-17" /></noscript></a></span></div>
							</div>
						</div>
						<div class="fusion-layout-column fusion_builder_column fusion-builder-column-1 fusion-flex-column"
							style="--awb-bg-size:cover;--awb-border-color:#101827;--awb-border-style:solid;--awb-width-large:85%;--awb-margin-top-large:10px;--awb-spacing-right-large:2.2588235294118%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:2.2588235294118%;--awb-width-medium:80%;--awb-order-medium:0;--awb-spacing-right-medium:2.4%;--awb-spacing-left-medium:2.4%;--awb-width-small:75%;--awb-order-small:2;--awb-spacing-right-small:2.56%;--awb-spacing-left-small:2.56%;">
							<div
								class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-end fusion-content-layout-row fusion-flex-align-items-flex-end">
								<div class="fusion-builder-row fusion-builder-row-inner fusion-row fusion-flex-align-items-stretch fusion-flex-content-wrap"
									style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
									<div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-0 fusion_builder_column_inner_1_1 1_1 fusion-flex-column fusion-display-normal-only"
										style="--awb-bg-size:cover;--awb-border-color:rgba(16,25,40,0.08);--awb-border-bottom:1px;--awb-border-style:solid;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
										<div
											class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-end fusion-content-layout-row">
											<nav class="awb-menu awb-menu_row awb-menu_em-hover mobile-mode-collapse-to-button awb-menu_icons-left awb-menu_dc-yes mobile-trigger-fullwidth-off awb-menu_mobile-toggle awb-menu_indent-left mobile-size-full-absolute loading mega-menu-loading awb-menu_desktop awb-menu_dropdown awb-menu_expand-right awb-menu_transition-fade fusion-no-small-visibility fusion-no-medium-visibility"
												style="--awb-font-size:13px;--awb-line-height:1.7;--awb-gap:20px;--awb-letter-spacing:1px;--awb-main-justify-content:flex-start;--awb-mobile-justify:flex-start;--awb-mobile-caret-left:auto;--awb-mobile-caret-right:0;--awb-fusion-font-family-typography:&quot;Inter&quot;;--awb-fusion-font-style-typography:normal;--awb-fusion-font-weight-typography:500;--awb-fusion-font-family-submenu-typography:inherit;--awb-fusion-font-style-submenu-typography:normal;--awb-fusion-font-weight-submenu-typography:400;--awb-fusion-font-family-mobile-typography:inherit;--awb-fusion-font-style-mobile-typography:normal;--awb-fusion-font-weight-mobile-typography:400;"
												aria-label="Top Navigation" data-breakpoint="1024" data-count="0"
												data-transition-type="fade" data-transition-time="300"><button
													type="button" class="awb-menu__m-toggle awb-menu__m-toggle_no-text"
													aria-expanded="false" aria-controls="menu-top-navigation"><span
														class="awb-menu__m-toggle-inner"><span
															class="collapsed-nav-text"><span
																class="screen-reader-text">Toggle
																Navigation</span></span><span
															class="awb-menu__m-collapse-icon awb-menu__m-collapse-icon_no-text"><span
																class="awb-menu__m-collapse-icon-open awb-menu__m-collapse-icon-open_no-text fa-bars fas"></span><span
																class="awb-menu__m-collapse-icon-close awb-menu__m-collapse-icon-close_no-text fa-times fas"></span></span></span></button>
												<ul id="menu-top-navigation"
													class="fusion-menu awb-menu__main-ul awb-menu__main-ul_row">
													<li id="menu-item-97"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
														data-item-id="97"><span
															class="awb-menu__main-background-default awb-menu__main-background-default_fade"></span><span
															class="awb-menu__main-background-active awb-menu__main-background-active_fade"></span><a
															href="lien-he/index.html"
															class="awb-menu__main-a awb-menu__main-a_regular"><span
																class="menu-text">Liên hệ</span></a></li>
													<li id="menu-item-98"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
														data-item-id="98"><span
															class="awb-menu__main-background-default awb-menu__main-background-default_fade"></span><span
															class="awb-menu__main-background-active awb-menu__main-background-active_fade"></span><a
															href="tuyen-dung/index.html"
															class="awb-menu__main-a awb-menu__main-a_regular"><span
																class="menu-text">Tuyển dụng</span></a></li>
													<li id="menu-item-99"
														class="menu-item menu-item-type-custom menu-item-object-custom awb-menu__li_search-inline menu-item-99 awb-menu__li awb-menu__main-li"
														data-item-id="99"><span
															class="awb-menu__main-background-default awb-menu__main-background-default_fade"></span><span
															class="awb-menu__main-background-active awb-menu__main-background-active_fade"></span>
														<div class="awb-menu__search-inline">
															<form role="search"
																class="searchform fusion-search-form  fusion-search-form-clean"
																method="get" action="https://wincartrading.com.vn/">
																<div class="fusion-search-form-content">


																	<div class="fusion-search-field search-field">
																		<label><span class="screen-reader-text">Search
																				for:</span>
																			<input type="search" value="" name="s"
																				class="s" placeholder="Search..."
																				required aria-required="true"
																				aria-label="Search..." />
																		</label>
																	</div>
																	<div class="fusion-search-button search-button">
																		<input type="submit"
																			class="fusion-search-submit searchsubmit"
																			aria-label="Search" value="&#xf002;" />
																	</div>


																</div>



															</form>
														</div>
													</li>
												</ul>
											</nav>
										</div>
									</div>
									<div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-1 fusion_builder_column_inner_1_1 1_1 fusion-flex-column"
										style="--awb-padding-top:12px;--awb-padding-bottom:12px;--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
										<div
											class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-end fusion-content-layout-row fusion-flex-align-items-center">
											<nav class="awb-menu awb-menu_row awb-menu_em-hover mobile-mode-collapse-to-button awb-menu_icons-left awb-menu_dc-yes mobile-trigger-fullwidth-off awb-menu_mobile-toggle awb-menu_indent-left mobile-size-full-absolute loading mega-menu-loading awb-menu_desktop awb-menu_dropdown awb-menu_expand-right awb-menu_transition-fade"
												style="--awb-font-size:15px;--awb-line-height:1.7;--awb-text-transform:none;--awb-gap:30px;--awb-letter-spacing:1px;--awb-submenu-border-radius-top-left:5px;--awb-submenu-border-radius-top-right:5px;--awb-submenu-border-radius-bottom-right:5px;--awb-submenu-border-radius-bottom-left:5px;--awb-submenu-space:4;--awb-main-justify-content:flex-start;--awb-mobile-nav-button-align-hor:flex-end;--awb-mobile-nav-items-height:60;--awb-mobile-trigger-color:var(--awb-color4);--awb-mobile-justify:flex-start;--awb-mobile-caret-left:auto;--awb-mobile-caret-right:0;--awb-fusion-font-family-typography:&quot;Inter&quot;;--awb-fusion-font-style-typography:normal;--awb-fusion-font-weight-typography:600;--awb-fusion-font-family-submenu-typography:inherit;--awb-fusion-font-style-submenu-typography:normal;--awb-fusion-font-weight-submenu-typography:400;--awb-fusion-font-family-mobile-typography:inherit;--awb-fusion-font-style-mobile-typography:normal;--awb-fusion-font-weight-mobile-typography:400;"
												aria-label="Main Menu" data-breakpoint="1024" data-count="1"
												data-transition-type="center-vertical" data-transition-time="300">
												<button type="button"
													class="awb-menu__m-toggle awb-menu__m-toggle_no-text"
													aria-expanded="false" aria-controls="menu-main-menu"><span
														class="awb-menu__m-toggle-inner"><span
															class="collapsed-nav-text"><span
																class="screen-reader-text">Toggle
																Navigation</span></span><span
															class="awb-menu__m-collapse-icon awb-menu__m-collapse-icon_no-text"><span
																class="awb-menu__m-collapse-icon-open awb-menu__m-collapse-icon-open_no-text fa-bars fas"></span><span
																class="awb-menu__m-collapse-icon-close awb-menu__m-collapse-icon-close_no-text fa-times fas"></span></span></span></button>
												<ul id="menu-main-menu"
													class="fusion-menu awb-menu__main-ul awb-menu__main-ul_row">
													<li id="menu-item-57"
														class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-57 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
														data-item-id="57"><span
															class="awb-menu__main-background-default awb-menu__main-background-default_center-vertical"></span><span
															class="awb-menu__main-background-active awb-menu__main-background-active_center-vertical"></span><a
															href="index.html"
															class="awb-menu__main-a awb-menu__main-a_regular"><span
																class="menu-text">Trang chủ</span></a></li>
													<li id="menu-item-60"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-60 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
														data-item-id="60"><span
															class="awb-menu__main-background-default awb-menu__main-background-default_center-vertical"></span><span
															class="awb-menu__main-background-active awb-menu__main-background-active_center-vertical"></span><a
															href="gioi-thieu/index.html"
															class="awb-menu__main-a awb-menu__main-a_regular"><span
																class="menu-text">Giới thiệu</span><span
																class="awb-menu__open-nav-submenu-hover"></span></a><button
															type="button" aria-label="Open submenu of Giới thiệu"
															aria-expanded="false"
															class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
														<ul class="awb-menu__sub-ul awb-menu__sub-ul_main">
															<li id="menu-item-61"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-61 awb-menu__li awb-menu__sub-li">
																<a href="gioi-thieu/van-hoa-wincar/index.html"
																	class="awb-menu__sub-a"><span>Văn hóa
																		WINCAR</span></a></li>
														</ul>
													</li>
													<li id="menu-item-62"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-62 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
														data-item-id="62"><span
															class="awb-menu__main-background-default awb-menu__main-background-default_center-vertical"></span><span
															class="awb-menu__main-background-active awb-menu__main-background-active_center-vertical"></span><a
															href="linh-vuc-hoat-dong/index.html"
															class="awb-menu__main-a awb-menu__main-a_regular"><span
																class="menu-text">Lĩnh vực hoạt động</span><span
																class="awb-menu__open-nav-submenu-hover"></span></a><button
															type="button"
															aria-label="Open submenu of Lĩnh vực hoạt động"
															aria-expanded="false"
															class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
														<ul class="awb-menu__sub-ul awb-menu__sub-ul_main">
															<li id="menu-item-65"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65 awb-menu__li awb-menu__sub-li">
																<a href="linh-vuc-hoat-dong/nong-nghiep-wincar/index.html"
																	class="awb-menu__sub-a"><span>Nông nghiệp
																		WINCAR</span></a></li>
															<li id="menu-item-64"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64 awb-menu__li awb-menu__sub-li">
																<a href="linh-vuc-hoat-dong/khoang-san-wincar/index.html"
																	class="awb-menu__sub-a"><span>Khoáng sản
																		WINCAR</span></a></li>
															<li id="menu-item-63"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63 awb-menu__li awb-menu__sub-li">
																<a href="linh-vuc-hoat-dong/dau-tu-xay-dung-wincar/index.html"
																	class="awb-menu__sub-a"><span>Đầu tư – xây dựng
																		WINCAR</span></a></li>
														</ul>
													</li>
													<li id="menu-item-66"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-66 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
														data-item-id="66"><span
															class="awb-menu__main-background-default awb-menu__main-background-default_center-vertical"></span><span
															class="awb-menu__main-background-active awb-menu__main-background-active_center-vertical"></span><a
															href="quan-he-co-dong/index.html"
															class="awb-menu__main-a awb-menu__main-a_regular"><span
																class="menu-text">Quan hệ cổ đông</span><span
																class="awb-menu__open-nav-submenu-hover"></span></a><button
															type="button" aria-label="Open submenu of Quan hệ cổ đông"
															aria-expanded="false"
															class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
														<ul class="awb-menu__sub-ul awb-menu__sub-ul_main">
															<li id="menu-item-69"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-69 awb-menu__li awb-menu__sub-li">
																<a href="quan-he-co-dong/dieu-le-quy-che/index.html"
																	class="awb-menu__sub-a"><span>Điều lệ quy
																		chế</span></a></li>
															<li id="menu-item-70"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70 awb-menu__li awb-menu__sub-li">
																<a href="quan-he-co-dong/thong-tin-co-dong/index.html"
																	class="awb-menu__sub-a"><span>Thông tin cổ
																		đông</span></a></li>
															<li id="menu-item-68"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68 awb-menu__li awb-menu__sub-li">
																<a href="quan-he-co-dong/bao-cao-thuong-nien/index.html"
																	class="awb-menu__sub-a"><span>Báo cáo thường
																		niên</span></a></li>
															<li id="menu-item-67"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67 awb-menu__li awb-menu__sub-li">
																<a href="quan-he-co-dong/bao-cao-tai-chinh/index.html"
																	class="awb-menu__sub-a"><span>Báo cáo tài
																		chính</span></a></li>
														</ul>
													</li>
													<li id="menu-item-71"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-71 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
														data-item-id="71"><span
															class="awb-menu__main-background-default awb-menu__main-background-default_center-vertical"></span><span
															class="awb-menu__main-background-active awb-menu__main-background-active_center-vertical"></span><a
															href="tin-tuc/index.html"
															class="awb-menu__main-a awb-menu__main-a_regular"><span
																class="menu-text">Tin tức</span><span
																class="awb-menu__open-nav-submenu-hover"></span></a><button
															type="button" aria-label="Open submenu of Tin tức"
															aria-expanded="false"
															class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
														<ul class="awb-menu__sub-ul awb-menu__sub-ul_main">
															<li id="menu-item-72"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-72 awb-menu__li awb-menu__sub-li">
																<a href="tin-tuc/hoat-dong-noi-bo/index.html"
																	class="awb-menu__sub-a"><span>Hoạt động nội
																		bộ</span></a></li>
															<li id="menu-item-73"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73 awb-menu__li awb-menu__sub-li">
																<a href="tin-tuc/su-kien/index.html"
																	class="awb-menu__sub-a"><span>Sự kiện</span></a>
															</li>
															<li id="menu-item-74"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74 awb-menu__li awb-menu__sub-li">
																<a href="tin-tuc/thong-cao-bao-chi/index.html"
																	class="awb-menu__sub-a"><span>Thông cáo báo
																		chí</span></a></li>
														</ul>
													</li>
													<li id="menu-item-58"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
														data-item-id="58"><span
															class="awb-menu__main-background-default awb-menu__main-background-default_center-vertical"></span><span
															class="awb-menu__main-background-active awb-menu__main-background-active_center-vertical"></span><a
															href="cua-hang/index.html"
															class="awb-menu__main-a awb-menu__main-a_regular"><span
																class="menu-text">Cửa hàng</span></a></li>
													<li id="menu-item-75"
														class="menu-item menu-item-type-custom menu-item-object-custom empty-cart fusion-widget-cart fusion-menu-cart avada-main-menu-cart fusion-menu-cart-hide-empty-counter menu-item-75 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
														data-item-id="75"><span
															class="awb-menu__main-background-default awb-menu__main-background-default_center-vertical"></span><span
															class="awb-menu__main-background-active awb-menu__main-background-active_center-vertical"></span><a
															href="gio-hang/index.html"
															class="awb-menu__main-a awb-menu__main-a_regular awb-menu__main-a_icon-only fusion-flex-link"><span
																class="awb-menu__i awb-menu__i_main"><i
																	class="glyphicon fa-shopping-cart fas"
																	aria-hidden="true"></i></span><span
																class="menu-text menu-text_no-desktop">WooCommerce
																Cart</span><span class="fusion-widget-cart-number"
																style="" data-digits="1"
																data-cart-count="0">0</span><span
																class="awb-menu__open-nav-submenu-hover"></span></a>
														<ul
															class="awb-menu__sub-ul awb-menu__sub-ul_main sub-menu avada-custom-menu-item-contents fusion-menu-cart-items avada-custom-menu-item-contents-empty">
														</ul>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="sliders-container" class="fusion-slider-visibility">
			</div>


			<main id="main" class="clearfix width-100">
				<div class="fusion-row" style="max-width:100%;">
					<section id="content" class="full-width">
						<div id="post-19" class="post-19 page type-page status-publish hentry">
							<span class="entry-title rich-snippet-hidden">Trang chủ</span><span
								class="vcard rich-snippet-hidden"><span class="fn"><a href="author/bivweb/index.html"
										title="Đăng bởi bivweb" rel="author">bivweb</a></span></span><span
								class="updated rich-snippet-hidden">2023-12-11T11:08:52+07:00</span>
							<div class="post-content">
								<div class="fusion-fullwidth fullwidth-box fusion-builder-row-2 fusion-flex-container has-pattern-background has-mask-background hundred-percent-fullwidth non-hundred-percent-height-scrolling"
									style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-top:0px;--awb-padding-right:0px;--awb-padding-bottom:0px;--awb-padding-left:0px;--awb-margin-top:0px;--awb-margin-bottom:0px;--awb-flex-wrap:wrap;">
									<div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
										style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
										<div class="fusion-layout-column fusion_builder_column fusion-builder-column-2 fusion_builder_column_1_1 1_1 fusion-flex-column"
											style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:0px;--awb-margin-bottom-large:0px;--awb-spacing-left-large:0px;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:0px;--awb-spacing-left-medium:0px;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div class="fusion-slider-sc">
													<div class="fusion-flexslider-loading flexslider fusion-aligncenter flexslider-hover-type-none"
														data-slideshow_autoplay="1" data-slideshow_smooth_height="0"
														data-slideshow_speed="7000" style="max-width:100%;height:100%;">
														<ul class="slides">
															<li class="image"><span
																	class="fusion-image-hover-element hover-type-none"><img
																		decoding="async"
																		src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201440%20600'%3E%3C/svg%3E"
																		width="1440" height="600" class="wp-image-114"
																		data-lazy-srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-1-200x83.png 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-1-400x167.png 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-1-600x250.png 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-1-800x333.png 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-1-1200x500.png 1200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-1.png 1440w"
																		data-lazy-sizes="(max-width: 640px) 100vw, 1440px"
																		data-lazy-src="wp-content/uploads/2023/12/slide-1.png" /><noscript><img
																			decoding="async"
																			src="wp-content/uploads/2023/12/slide-1.png"
																			width="1440" height="600"
																			class="wp-image-114"
																			srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-1-200x83.png.pagespeed.ic.EgdO0Meifo.jpg 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-1-400x167.png.pagespeed.ic.GS35MntqrP.jpg 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-1-600x250.png.pagespeed.ic.uVC2CMI4F2.jpg 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-1-800x333.png.pagespeed.ic.fE1JCEbacc.jpg 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-1-1200x500.png.pagespeed.ic.IbDfsFEca5.jpg 1200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-1.png.pagespeed.ic.jTRP71UfTG.jpg 1440w"
																			sizes="(max-width: 640px) 100vw, 1440px" /></noscript></span>
															</li>
															<li class="image"><span
																	class="fusion-image-hover-element hover-type-none"><img
																		decoding="async"
																		src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201440%20600'%3E%3C/svg%3E"
																		width="1440" height="600" class="wp-image-113"
																		data-lazy-srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-2-200x83.png 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-2-400x167.png 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-2-600x250.png 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-2-800x333.png 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-2-1200x500.png 1200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-2.png 1440w"
																		data-lazy-sizes="(max-width: 640px) 100vw, 1440px"
																		data-lazy-src="wp-content/uploads/2023/12/slide-2.png" /><noscript><img
																			decoding="async"
																			src="wp-content/uploads/2023/12/slide-2.png"
																			width="1440" height="600"
																			class="wp-image-113"
																			srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-2-200x83.png.pagespeed.ic.Lh5AtPPBgf.jpg 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-2-400x167.png.pagespeed.ic.nowFC-bjC3.jpg 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-2-600x250.png.pagespeed.ic._0Ypt8GHXK.jpg 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-2-800x333.png.pagespeed.ic.9jgR6KgZ4h.jpg 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-2-1200x500.png.pagespeed.ic.5rD66Thjqe.jpg 1200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-2.png.pagespeed.ic.vjbI9TCMfR.jpg 1440w"
																			sizes="(max-width: 640px) 100vw, 1440px" /></noscript></span>
															</li>
															<li class="image"><span
																	class="fusion-image-hover-element hover-type-none"><img
																		decoding="async"
																		src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201440%20600'%3E%3C/svg%3E"
																		width="1440" height="600" class="wp-image-112"
																		data-lazy-srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-3-200x83.png 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-3-400x167.png 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-3-600x250.png 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-3-800x333.png 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-3-1200x500.png 1200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-3.png 1440w"
																		data-lazy-sizes="(max-width: 640px) 100vw, 1440px"
																		data-lazy-src="wp-content/uploads/2023/12/slide-3.png" /><noscript><img
																			decoding="async"
																			src="wp-content/uploads/2023/12/slide-3.png"
																			width="1440" height="600"
																			class="wp-image-112"
																			srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-3-200x83.png.pagespeed.ic.C03ygZ-R2n.jpg 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-3-400x167.png.pagespeed.ic.WClCM2iYKe.jpg 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-3-600x250.png.pagespeed.ic.3FbRm6c2v1.jpg 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-3-800x333.png.pagespeed.ic.joOFdyNGTD.jpg 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-3-1200x500.png.pagespeed.ic.XD6wV236QS.jpg 1200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-3.png.pagespeed.ic.fd53Ff5AWg.jpg 1440w"
																			sizes="(max-width: 640px) 100vw, 1440px" /></noscript></span>
															</li>
															<li class="image"><span
																	class="fusion-image-hover-element hover-type-none"><img
																		decoding="async"
																		src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201440%20600'%3E%3C/svg%3E"
																		width="1440" height="600" class="wp-image-111"
																		data-lazy-srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-4-200x83.png 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-4-400x167.png 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-4-600x250.png 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-4-800x333.png 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-4-1200x500.png 1200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/slide-4.png 1440w"
																		data-lazy-sizes="(max-width: 640px) 100vw, 1440px"
																		data-lazy-src="wp-content/uploads/2023/12/slide-4.png" /><noscript><img
																			decoding="async"
																			src="wp-content/uploads/2023/12/slide-4.png"
																			width="1440" height="600"
																			class="wp-image-111"
																			srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-4-200x83.png.pagespeed.ic.r0VE188_0n.jpg 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-4-400x167.png.pagespeed.ic.ItiPjiHiYs.jpg 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-4-600x250.png.pagespeed.ic._It9XF1PUd.jpg 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-4-800x333.png.pagespeed.ic.6TZYYjyydq.jpg 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-4-1200x500.png.pagespeed.ic.23SDCCN3ny.jpg 1200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xslide-4.png.pagespeed.ic.0l9lWLHy5M.jpg 1440w"
																			sizes="(max-width: 640px) 100vw, 1440px" /></noscript></span>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="fusion-fullwidth fullwidth-box fusion-builder-row-3 fusion-flex-container has-pattern-background has-mask-background nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
									style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;">
									<div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
										style="max-width:1144px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
										<div class="fusion-layout-column fusion_builder_column fusion-builder-column-3 fusion_builder_column_1_1 1_1 fusion-flex-column"
											style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div class="fusion-title title fusion-title-1 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-two"
													style="--awb-text-color:var(--awb-color4);--awb-font-size:30px;">
													<h2 class="fusion-title-heading title-heading-center"
														style="font-family:&quot;Inter&quot;;font-style:normal;font-weight:700;margin:0;font-size:1em;text-transform:uppercase;line-height:1.7;">
														LĨNH VỰC HOẠT ĐỘNG</h2>
												</div>
												<div class="fusion-builder-row fusion-builder-row-inner fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
													style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
													<div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-2 fusion_builder_column_inner_1_3 1_3 fusion-flex-column fusion-flex-align-self-center"
														style="--awb-padding-top:15%;--awb-padding-right:10%;--awb-padding-bottom:15%;--awb-padding-left:10%;--awb-bg-image:url(wp-content/uploads/2023/12/linh-vuc-1-300x250.png);--awb-bg-size:cover;--awb-width-large:33.333333333333%;--awb-margin-top-large:0;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%">
														<div class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column fusion-column-has-bg-image"
															data-bg-url="http://wincartrading.com.vn/wp-content/uploads/2023/12/linh-vuc-1-300x250.png">
															<div class="fusion-title title fusion-title-2 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-two"
																style="--awb-text-color:var(--awb-color1);--awb-font-size:30px;">
																<h2 class="fusion-title-heading title-heading-center"
																	style="font-family:&quot;Inter&quot;;font-style:normal;font-weight:700;margin:0;font-size:1em;line-height:1.7;">
																	SẢN XUẤT NÔNG NGHIỆP</h2>
															</div>
														</div>
													</div>
													<div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-3 fusion_builder_column_inner_1_3 1_3 fusion-flex-column fusion-flex-align-self-center"
														style="--awb-padding-top:15%;--awb-padding-right:10%;--awb-padding-bottom:15%;--awb-padding-left:10%;--awb-bg-image:url(wp-content/uploads/2023/12/linh-vuc-2.png);--awb-bg-size:cover;--awb-width-large:33.333333333333%;--awb-margin-top-large:0;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%">
														<div class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column fusion-column-has-bg-image"
															data-bg-url="http://wincartrading.com.vn/wp-content/uploads/2023/12/linh-vuc-2.png">
															<div class="fusion-title title fusion-title-3 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-two"
																style="--awb-text-color:var(--awb-color1);--awb-font-size:30px;">
																<h2 class="fusion-title-heading title-heading-center"
																	style="font-family:&quot;Inter&quot;;font-style:normal;font-weight:700;margin:0;font-size:1em;line-height:1.7;">
																	KHAI THÁC KHOÁNG SẢN</h2>
															</div>
														</div>
													</div>
													<div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-4 fusion_builder_column_inner_1_3 1_3 fusion-flex-column fusion-flex-align-self-center"
														style="--awb-padding-top:15%;--awb-padding-right:10%;--awb-padding-bottom:15%;--awb-padding-left:10%;--awb-bg-image:url(wp-content/uploads/2023/12/linh-vuc-3.png);--awb-bg-size:cover;--awb-width-large:33.333333333333%;--awb-margin-top-large:0;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%">
														<div class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column fusion-column-has-bg-image"
															data-bg-url="http://wincartrading.com.vn/wp-content/uploads/2023/12/linh-vuc-3.png">
															<div class="fusion-title title fusion-title-4 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-two"
																style="--awb-text-color:var(--awb-color1);--awb-font-size:30px;">
																<h2 class="fusion-title-heading title-heading-center"
																	style="font-family:&quot;Inter&quot;;font-style:normal;font-weight:700;margin:0;font-size:1em;line-height:1.7;">
																	ĐẦU TƯ VÀ XÂY DỰNG</h2>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="fusion-fullwidth fullwidth-box fusion-builder-row-4 fusion-flex-container has-pattern-background has-mask-background nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
									style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;">
									<div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
										style="max-width:1144px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
										<div class="fusion-layout-column fusion_builder_column fusion-builder-column-4 fusion_builder_column_1_1 1_1 fusion-flex-column"
											style="--awb-padding-top:50px;--awb-padding-bottom:50px;--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div class="fusion-title title fusion-title-5 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-two"
													style="--awb-text-color:var(--awb-color4);--awb-margin-bottom:50px;--awb-font-size:30px;">
													<h2 class="fusion-title-heading title-heading-center"
														style="font-family:&quot;Inter&quot;;font-style:normal;font-weight:700;margin:0;font-size:1em;text-transform:uppercase;line-height:1.7;">
														ĐỐI TÁC CHIẾN LƯỢC</h2>
												</div>
												<div class="fusion-builder-row fusion-builder-row-inner fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
													style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
													<div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-5 fusion_builder_column_inner_1_3 1_3 fusion-flex-column"
														style="--awb-bg-size:cover;--awb-width-large:33.333333333333%;--awb-margin-top-large:0px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
														<div
															class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
															<div class="fusion-image-element "
																style="text-align:center;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
																<span
																	class=" fusion-imageframe imageframe-none imageframe-2 hover-type-none"><img
																		decoding="async" width="1000" height="1000"
																		title="WINCAR-logo-new"
																		src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%201000'%3E%3C/svg%3E"
																		alt class="img-responsive wp-image-329"
																		data-lazy-srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/WINCAR-logo-new-200x200.png 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/WINCAR-logo-new-400x400.png 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/WINCAR-logo-new-600x600.png 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/WINCAR-logo-new-800x800.png 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/WINCAR-logo-new.png 1000w"
																		data-lazy-sizes="(max-width: 640px) 100vw, 400px"
																		data-lazy-src="wp-content/uploads/2023/12/WINCAR-logo-new.png" /><noscript><img
																			decoding="async" width="1000" height="1000"
																			title="WINCAR-logo-new"
																			src="wp-content/uploads/2023/12/WINCAR-logo-new.png"
																			alt class="img-responsive wp-image-329"
																			srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/xWINCAR-logo-new-200x200.png.pagespeed.ic.9TzlABfpH5.png 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xWINCAR-logo-new-400x400.png.pagespeed.ic.4injOXlSkb.png 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xWINCAR-logo-new-600x600.png.pagespeed.ic.4RCKRMDMLm.png 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xWINCAR-logo-new-800x800.png.pagespeed.ic.LIwCWh5Jk3.png 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xWINCAR-logo-new.png.pagespeed.ic.TZIhXjcAm-.png 1000w"
																			sizes="(max-width: 640px) 100vw, 400px" /></noscript></span>
															</div>
														</div>
													</div>
													<div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-6 fusion_builder_column_inner_1_3 1_3 fusion-flex-column"
														style="--awb-bg-size:cover;--awb-width-large:33.333333333333%;--awb-margin-top-large:0px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
														<div
															class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
															<div class="fusion-image-element "
																style="text-align:center;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
																<span
																	class=" fusion-imageframe imageframe-none imageframe-3 hover-type-none"><img
																		decoding="async" width="1000" height="1000"
																		title="WINCAR-logo-new"
																		src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%201000'%3E%3C/svg%3E"
																		alt class="img-responsive wp-image-329"
																		data-lazy-srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/WINCAR-logo-new-200x200.png 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/WINCAR-logo-new-400x400.png 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/WINCAR-logo-new-600x600.png 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/WINCAR-logo-new-800x800.png 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/WINCAR-logo-new.png 1000w"
																		data-lazy-sizes="(max-width: 640px) 100vw, 400px"
																		data-lazy-src="wp-content/uploads/2023/12/WINCAR-logo-new.png" /><noscript><img
																			decoding="async" width="1000" height="1000"
																			title="WINCAR-logo-new"
																			src="wp-content/uploads/2023/12/WINCAR-logo-new.png"
																			alt class="img-responsive wp-image-329"
																			srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/xWINCAR-logo-new-200x200.png.pagespeed.ic.9TzlABfpH5.png 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xWINCAR-logo-new-400x400.png.pagespeed.ic.4injOXlSkb.png 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xWINCAR-logo-new-600x600.png.pagespeed.ic.4RCKRMDMLm.png 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xWINCAR-logo-new-800x800.png.pagespeed.ic.LIwCWh5Jk3.png 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xWINCAR-logo-new.png.pagespeed.ic.TZIhXjcAm-.png 1000w"
																			sizes="(max-width: 640px) 100vw, 400px" /></noscript></span>
															</div>
														</div>
													</div>
													<div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-7 fusion_builder_column_inner_1_3 1_3 fusion-flex-column"
														style="--awb-bg-size:cover;--awb-width-large:33.333333333333%;--awb-margin-top-large:0px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
														<div
															class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
															<div class="fusion-image-element "
																style="text-align:center;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
																<span
																	class=" fusion-imageframe imageframe-none imageframe-4 hover-type-none"><img
																		decoding="async" width="1000" height="1000"
																		title="WINCAR-logo-new"
																		src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%201000'%3E%3C/svg%3E"
																		alt class="img-responsive wp-image-329"
																		data-lazy-srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/WINCAR-logo-new-200x200.png 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/WINCAR-logo-new-400x400.png 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/WINCAR-logo-new-600x600.png 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/WINCAR-logo-new-800x800.png 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/WINCAR-logo-new.png 1000w"
																		data-lazy-sizes="(max-width: 640px) 100vw, 400px"
																		data-lazy-src="wp-content/uploads/2023/12/WINCAR-logo-new.png" /><noscript><img
																			decoding="async" width="1000" height="1000"
																			title="WINCAR-logo-new"
																			src="wp-content/uploads/2023/12/WINCAR-logo-new.png"
																			alt class="img-responsive wp-image-329"
																			srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/xWINCAR-logo-new-200x200.png.pagespeed.ic.9TzlABfpH5.png 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xWINCAR-logo-new-400x400.png.pagespeed.ic.4injOXlSkb.png 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xWINCAR-logo-new-600x600.png.pagespeed.ic.4RCKRMDMLm.png 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xWINCAR-logo-new-800x800.png.pagespeed.ic.LIwCWh5Jk3.png 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xWINCAR-logo-new.png.pagespeed.ic.TZIhXjcAm-.png 1000w"
																			sizes="(max-width: 640px) 100vw, 400px" /></noscript></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div data-bg="http://wincartrading.com.vn/wp-content/uploads/2023/12/wincar-cua-hang-300x73.png"
									class="fusion-fullwidth fullwidth-box fusion-builder-row-5 fusion-flex-container has-pattern-background has-mask-background fusion-parallax-none hundred-percent-fullwidth non-hundred-percent-height-scrolling rocket-lazyload"
									style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-top:50px;--awb-padding-bottom:50px;--awb-margin-top:20px;--awb-margin-bottom:50px;--awb-background-size:cover;--awb-flex-wrap:wrap;">
									<div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
										style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
										<div class="fusion-layout-column fusion_builder_column fusion-builder-column-5 fusion_builder_column_1_1 1_1 fusion-flex-column"
											style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div class="fusion-title title fusion-title-6 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-two"
													style="--awb-text-color:var(--awb-color1);--awb-font-size:30px;">
													<h2 class="fusion-title-heading title-heading-center"
														style="font-family:&quot;Inter&quot;;font-style:normal;font-weight:700;margin:0;font-size:1em;line-height:1.7;">
														<p style="text-align: center;">CỬA HÀNG TRỰC TUYẾN</p>
													</h2>
												</div>
												<div class="fusion-text fusion-text-1"
													style="--awb-font-size:15px;--awb-line-height:1.7;--awb-letter-spacing:0px;--awb-text-color:var(--awb-color1);--awb-text-font-family:&quot;Inter&quot;;--awb-text-font-style:normal;--awb-text-font-weight:500;">
													<p style="text-align: center;">WINCAR mong muốn cung cấp tới thị
														trường những sản phẩm thực sự tốt và an toàn sức khỏe đối với
														thị trường tiêu dùng VIệt Nam. Với chúng tôi, người tiêu dùng và
														sức khỏe con người là ưu tiên hàng đầu.</p>
												</div>
												<div style="text-align:center;"><a
														class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-1 fusion-button-default-span fusion-button-default-type"
														style="--button_accent_color:var(--awb-color1);--button_accent_hover_color:var(--awb-color1);--button_border_hover_color:var(--awb-color1);--button_gradient_top_color:var(--awb-color4);--button_gradient_bottom_color:var(--awb-color4);--button_gradient_top_color_hover:var(--awb-color4);--button_gradient_bottom_color_hover:var(--awb-color4);"
														target="_self" data-hover="icon_slide"
														href="cua-hang/index.html"><span class="fusion-button-text">Truy
															cập cửa hàng</span><i
															class="fa-arrow-alt-circle-right fas button-icon-right"
															aria-hidden="true"></i></a></div>
											</div>
										</div>
									</div>
								</div>
								<div class="fusion-fullwidth fullwidth-box fusion-builder-row-6 fusion-flex-container has-pattern-background has-mask-background nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
									style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;">
									<div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
										style="max-width:1144px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
										<div class="fusion-layout-column fusion_builder_column fusion-builder-column-6 fusion_builder_column_1_1 1_1 fusion-flex-column"
											style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div class="fusion-title title fusion-title-7 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-two"
													style="--awb-text-color:var(--awb-color4);--awb-font-size:30px;">
													<h2 class="fusion-title-heading title-heading-center"
														style="font-family:&quot;Inter&quot;;font-style:normal;font-weight:700;margin:0;font-size:1em;text-transform:uppercase;line-height:1.7;">
														Quá trình hình thành và phát triển</h2>
												</div>
												<div class="fusion-tabs fusion-tabs-1 clean vertical-tabs icon-position-left mobile-mode-accordion"
													style="--awb-title-border-radius-top-left:0px;--awb-title-border-radius-top-right:0px;--awb-title-border-radius-bottom-right:0px;--awb-title-border-radius-bottom-left:0px;--awb-alignment:start;--awb-inactive-color:var(--awb-color2);--awb-background-color:var(--awb-color1);--awb-border-color:var(--awb-color3);--awb-active-border-color:var(--awb-color5);">
													<div class="nav">
														<ul class="nav-tabs" role="tablist">
															<li class="active" role="presentation"><a class="tab-link"
																	data-toggle="tab" role="tab"
																	aria-controls="tab-74a24235758c4044286"
																	aria-selected="true" id="fusion-tab-2020"
																	href="#tab-74a24235758c4044286">
																	<h4 class="fusion-tab-heading"><i
																			class="fontawesome-icon fa-pen-nib fas"
																			aria-hidden="true"
																			style="font-size:16px; --icon-color:var(--awb-color4);"></i>2020
																	</h4>
																</a></li>
															<li role="presentation"><a class="tab-link"
																	data-toggle="tab" role="tab"
																	aria-controls="tab-bb58b7d6d8fdf570b01"
																	aria-selected="false" tabindex="-1"
																	id="fusion-tab-2021"
																	href="#tab-bb58b7d6d8fdf570b01">
																	<h4 class="fusion-tab-heading"><i
																			class="fontawesome-icon fa-pen-nib fas"
																			aria-hidden="true"
																			style="font-size:16px; --icon-color:var(--awb-color4);"></i>2021
																	</h4>
																</a></li>
															<li role="presentation"><a class="tab-link"
																	data-toggle="tab" role="tab"
																	aria-controls="tab-9b07406111e99f5dd7b"
																	aria-selected="false" tabindex="-1"
																	id="fusion-tab-2022"
																	href="#tab-9b07406111e99f5dd7b">
																	<h4 class="fusion-tab-heading"><i
																			class="fontawesome-icon fa-pen-nib fas"
																			aria-hidden="true"
																			style="font-size:16px; --icon-color:var(--awb-color4);"></i>2022
																	</h4>
																</a></li>
														</ul>
													</div>
													<div class="tab-content">
														<div class="nav fusion-mobile-tab-nav">
															<ul class="nav-tabs" role="tablist">
																<li class="active" role="presentation"><a
																		class="tab-link" data-toggle="tab" role="tab"
																		aria-controls="tab-74a24235758c4044286"
																		aria-selected="true" id="mobile-fusion-tab-2020"
																		href="#tab-74a24235758c4044286">
																		<h4 class="fusion-tab-heading"><i
																				class="fontawesome-icon fa-pen-nib fas"
																				aria-hidden="true"
																				style="font-size:16px; --icon-color:var(--awb-color4);"></i>2020
																		</h4>
																	</a></li>
															</ul>
														</div>
														<div class="tab-pane fade fusion-clearfix in active"
															role="tabpanel" tabindex="0"
															aria-labelledby="fusion-tab-2020"
															id="tab-74a24235758c4044286">
															<div class="fusion-builder-row fusion-builder-row-inner fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
																style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
																<div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-8 fusion_builder_column_inner_1_2 1_2 fusion-flex-column"
																	style="--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:0px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
																	<div
																		class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
																		<div class="fusion-image-element fusion-image-align-center in-legacy-container"
																			style="text-align:center;--awb-aspect-ratio:3 / 2;--awb-object-position:48% 43%;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
																			<div class="imageframe-align-center"><span
																					class=" fusion-imageframe imageframe-none imageframe-5 hover-type-zoomin has-aspect-ratio fusion-animated"
																					data-animationType="fadeInLeft"
																					data-animationDuration="1.0"
																					data-animationOffset="top-into-view"><img
																						decoding="async" width="300"
																						height="180" title="2020"
																						src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20180'%3E%3C/svg%3E"
																						class="img-responsive wp-image-167 img-with-aspect-ratio"
																						alt
																						data-lazy-srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/2020-200x120.png 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/2020-400x240.png 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/2020-600x360.png 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/2020.png 750w"
																						data-lazy-sizes="(max-width: 640px) 100vw, 600px"
																						data-lazy-src="wp-content/uploads/2023/12/2020-300x180.png" /><noscript><img
																							decoding="async" width="300"
																							height="180" title="2020"
																							src="wp-content/uploads/2023/12/2020-300x180.png"
																							class="img-responsive wp-image-167 img-with-aspect-ratio"
																							alt
																							srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/x2020-200x120.png.pagespeed.ic.-j3MxQtAwk.jpg 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/x2020-400x240.png.pagespeed.ic.0AldbzdmC8.jpg 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/x2020-600x360.png.pagespeed.ic.H_Fam-4XwN.jpg 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/x2020.png.pagespeed.ic.sPP9VeeM29.jpg 750w"
																							sizes="(max-width: 640px) 100vw, 600px" /></noscript></span>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-9 fusion_builder_column_inner_1_2 1_2 fusion-flex-column"
																	style="--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:0px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
																	<div
																		class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
																		<div class="fusion-title title fusion-title-8 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-two fusion-animated"
																			style="--awb-text-color:var(--awb-color4);--awb-font-size:30px;"
																			data-animationType="fadeInRight"
																			data-animationDuration="1.0"
																			data-animationOffset="top-into-view">
																			<h2 class="fusion-title-heading title-heading-center"
																				style="font-family:&quot;Inter&quot;;font-style:normal;font-weight:700;margin:0;font-size:1em;line-height:1.7;">
																				2020</h2>
																		</div>
																		<div class="fusion-text fusion-text-2"
																			style="--awb-font-size:15px;--awb-line-height:1.7;--awb-letter-spacing:0px;--awb-text-font-family:&quot;Inter&quot;;--awb-text-font-style:normal;--awb-text-font-weight:500;">
																			<p style="text-align: center;">Lorem ipsum
																				dolor sit amet, consectetur adipiscing
																				elit, sed do eiusmod tempor incididunt
																				ut labore et dolore magna aliqua. Ut
																				enim ad minim veniam, quis nostrud
																				exercitation ullamco laboris nisi ut
																				aliquip ex ea commodo consequat.</p>
																		</div>
																	</div>
																</div>
															</div>

														</div>
														<div class="nav fusion-mobile-tab-nav">
															<ul class="nav-tabs" role="tablist">
																<li role="presentation"><a class="tab-link"
																		data-toggle="tab" role="tab"
																		aria-controls="tab-bb58b7d6d8fdf570b01"
																		aria-selected="false" tabindex="-1"
																		id="mobile-fusion-tab-2021"
																		href="#tab-bb58b7d6d8fdf570b01">
																		<h4 class="fusion-tab-heading"><i
																				class="fontawesome-icon fa-pen-nib fas"
																				aria-hidden="true"
																				style="font-size:16px; --icon-color:var(--awb-color4);"></i>2021
																		</h4>
																	</a></li>
															</ul>
														</div>
														<div class="tab-pane fade fusion-clearfix" role="tabpanel"
															tabindex="0" aria-labelledby="fusion-tab-2021"
															id="tab-bb58b7d6d8fdf570b01">
															<div class="fusion-builder-row fusion-builder-row-inner fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
																style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
																<div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-10 fusion_builder_column_inner_1_2 1_2 fusion-flex-column"
																	style="--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:0px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
																	<div
																		class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
																		<div class="fusion-image-element "
																			style="text-align:center;--awb-aspect-ratio:3 / 2;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
																			<span
																				class=" fusion-imageframe imageframe-none imageframe-6 hover-type-zoomin has-aspect-ratio fusion-animated"
																				data-animationType="fadeInLeft"
																				data-animationDuration="1.0"
																				data-animationOffset="top-into-view"><img
																					decoding="async" width="300"
																					height="180" title="2021"
																					src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20180'%3E%3C/svg%3E"
																					class="img-responsive wp-image-166 img-with-aspect-ratio"
																					alt
																					data-lazy-srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/2021-200x120.png 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/2021-400x240.png 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/2021-600x360.png 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/2021.png 750w"
																					data-lazy-sizes="(max-width: 640px) 100vw, 600px"
																					data-lazy-src="wp-content/uploads/2023/12/2021-300x180.png" /><noscript><img
																						decoding="async" width="300"
																						height="180" title="2021"
																						src="wp-content/uploads/2023/12/2021-300x180.png"
																						class="img-responsive wp-image-166 img-with-aspect-ratio"
																						alt
																						srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/x2021-200x120.png.pagespeed.ic.4zUeCXIcBs.jpg 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/x2021-400x240.png.pagespeed.ic.xRf64cB2F7.jpg 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/x2021-600x360.png.pagespeed.ic.tLcKLbO9_w.jpg 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/x2021.png.pagespeed.ic.lqt_zz9y13.jpg 750w"
																						sizes="(max-width: 640px) 100vw, 600px" /></noscript></span>
																		</div>
																	</div>
																</div>
																<div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-11 fusion_builder_column_inner_1_2 1_2 fusion-flex-column"
																	style="--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:0px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
																	<div
																		class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
																		<div class="fusion-title title fusion-title-9 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-two fusion-animated"
																			style="--awb-text-color:var(--awb-color4);--awb-font-size:30px;"
																			data-animationType="fadeInRight"
																			data-animationDuration="1.0"
																			data-animationOffset="top-into-view">
																			<h2 class="fusion-title-heading title-heading-center"
																				style="font-family:&quot;Inter&quot;;font-style:normal;font-weight:700;margin:0;font-size:1em;line-height:1.7;">
																				2021</h2>
																		</div>
																		<div class="fusion-text fusion-text-3 fusion-animated"
																			style="--awb-font-size:15px;--awb-line-height:1.7;--awb-letter-spacing:0px;--awb-text-font-family:&quot;Inter&quot;;--awb-text-font-style:normal;--awb-text-font-weight:500;"
																			data-animationType="fadeInRight"
																			data-animationDuration="1.0"
																			data-animationOffset="top-into-view">
																			<p style="text-align: center;">Lorem ipsum
																				dolor sit amet, consectetur adipiscing
																				elit, sed do eiusmod tempor incididunt
																				ut labore et dolore magna aliqua. Ut
																				enim ad minim veniam, quis nostrud
																				exercitation ullamco laboris nisi ut
																				aliquip ex ea commodo consequat.</p>
																		</div>
																	</div>
																</div>
															</div>

														</div>
														<div class="nav fusion-mobile-tab-nav">
															<ul class="nav-tabs" role="tablist">
																<li role="presentation"><a class="tab-link"
																		data-toggle="tab" role="tab"
																		aria-controls="tab-9b07406111e99f5dd7b"
																		aria-selected="false" tabindex="-1"
																		id="mobile-fusion-tab-2022"
																		href="#tab-9b07406111e99f5dd7b">
																		<h4 class="fusion-tab-heading"><i
																				class="fontawesome-icon fa-pen-nib fas"
																				aria-hidden="true"
																				style="font-size:16px; --icon-color:var(--awb-color4);"></i>2022
																		</h4>
																	</a></li>
															</ul>
														</div>
														<div class="tab-pane fade fusion-clearfix" role="tabpanel"
															tabindex="0" aria-labelledby="fusion-tab-2022"
															id="tab-9b07406111e99f5dd7b">
															<div class="fusion-builder-row fusion-builder-row-inner fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
																style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
																<div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-12 fusion_builder_column_inner_1_2 1_2 fusion-flex-column"
																	style="--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:0px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
																	<div
																		class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
																		<div class="fusion-image-element "
																			style="text-align:center;--awb-aspect-ratio:3 / 2;--awb-object-position:59% 52%;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
																			<span
																				class=" fusion-imageframe imageframe-none imageframe-7 hover-type-zoomin has-aspect-ratio fusion-animated"
																				data-animationType="fadeInLeft"
																				data-animationDuration="1.0"
																				data-animationOffset="top-into-view"><img
																					decoding="async" width="300"
																					height="180" title="2022-1"
																					src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20180'%3E%3C/svg%3E"
																					class="img-responsive wp-image-192 img-with-aspect-ratio"
																					alt
																					data-lazy-srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/2022-1-200x120.png 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/2022-1-400x240.png 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/2022-1-600x360.png 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/2022-1.png 750w"
																					data-lazy-sizes="(max-width: 640px) 100vw, 600px"
																					data-lazy-src="wp-content/uploads/2023/12/2022-1-300x180.png" /><noscript><img
																						decoding="async" width="300"
																						height="180" title="2022-1"
																						src="wp-content/uploads/2023/12/2022-1-300x180.png"
																						class="img-responsive wp-image-192 img-with-aspect-ratio"
																						alt
																						srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/x2022-1-200x120.png.pagespeed.ic.AMgRJObVsT.jpg 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/x2022-1-400x240.png.pagespeed.ic.0daPBJk2pp.jpg 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/x2022-1-600x360.png.pagespeed.ic.dOvNmjxGSx.jpg 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/x2022-1.png.pagespeed.ic.aefK8UIPLb.jpg 750w"
																						sizes="(max-width: 640px) 100vw, 600px" /></noscript></span>
																		</div>
																	</div>
																</div>
																<div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-13 fusion_builder_column_inner_1_2 1_2 fusion-flex-column"
																	style="--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:0px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
																	<div
																		class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
																		<div class="fusion-title title fusion-title-10 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-two fusion-animated"
																			style="--awb-text-color:var(--awb-color4);--awb-font-size:30px;"
																			data-animationType="fadeInRight"
																			data-animationDuration="1.0"
																			data-animationOffset="top-into-view">
																			<h2 class="fusion-title-heading title-heading-center"
																				style="font-family:&quot;Inter&quot;;font-style:normal;font-weight:700;margin:0;font-size:1em;line-height:1.7;">
																				2022</h2>
																		</div>
																		<div class="fusion-text fusion-text-4 fusion-animated"
																			style="--awb-font-size:15px;--awb-line-height:1.7;--awb-letter-spacing:0px;--awb-text-font-family:&quot;Inter&quot;;--awb-text-font-style:normal;--awb-text-font-weight:500;"
																			data-animationType="fadeInRight"
																			data-animationDuration="1.0"
																			data-animationOffset="top-into-view">
																			<p style="text-align: center;">Lorem ipsum
																				dolor sit amet, consectetur adipiscing
																				elit, sed do eiusmod tempor incididunt
																				ut labore et dolore magna aliqua. Ut
																				enim ad minim veniam, quis nostrud
																				exercitation ullamco laboris nisi ut
																				aliquip ex ea commodo consequat.</p>
																		</div>
																	</div>
																</div>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div data-bg="http://wincartrading.com.vn/wp-content/uploads/2023/12/tuyen-dung-300x73.png"
									class="fusion-fullwidth fullwidth-box fusion-builder-row-7 fusion-flex-container has-pattern-background has-mask-background fusion-parallax-none hundred-percent-fullwidth non-hundred-percent-height-scrolling rocket-lazyload"
									style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-top:50px;--awb-padding-bottom:50px;--awb-margin-top:20px;--awb-margin-bottom:0px;--awb-background-size:cover;--awb-flex-wrap:wrap;">
									<div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
										style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
										<div class="fusion-layout-column fusion_builder_column fusion-builder-column-7 fusion_builder_column_1_1 1_1 fusion-flex-column"
											style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div class="fusion-title title fusion-title-11 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-two"
													style="--awb-text-color:var(--awb-color1);--awb-font-size:30px;">
													<h2 class="fusion-title-heading title-heading-center"
														style="font-family:&quot;Inter&quot;;font-style:normal;font-weight:700;margin:0;font-size:1em;line-height:1.7;">
														<p style="text-align: center;">TUYỂN DỤNG</p>
													</h2>
												</div>
												<div class="fusion-text fusion-text-5"
													style="--awb-font-size:15px;--awb-line-height:1.7;--awb-letter-spacing:0px;--awb-text-color:var(--awb-color1);--awb-text-font-family:&quot;Inter&quot;;--awb-text-font-style:normal;--awb-text-font-weight:500;">
													<p style="text-align: center;">WINCAR mong muốn tạo nên môi trường
														làm việc kỷ luật, văn hóa, đề cao tính nhân văn. Tại đây mỗi
														nhân viên được quan tâm tạo điều kiện để rèn luyện, phát triển
														bản thân và thăng tiến trong sự nghiệp.</p>
												</div>
												<div style="text-align:center;"><a
														class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-2 fusion-button-default-span fusion-button-default-type"
														style="--button_accent_color:var(--awb-color1);--button_accent_hover_color:var(--awb-color1);--button_border_hover_color:var(--awb-color1);--button_gradient_top_color:var(--awb-color4);--button_gradient_bottom_color:var(--awb-color4);--button_gradient_top_color_hover:var(--awb-color4);--button_gradient_bottom_color_hover:var(--awb-color4);"
														target="_self" data-hover="icon_slide"
														href="tuyen-dung/index.html"><span
															class="fusion-button-text">Ứng tuyển ngay</span><i
															class="fa-arrow-alt-circle-right fas button-icon-right"
															aria-hidden="true"></i></a></div>
											</div>
										</div>
									</div>
								</div>
								<div class="fusion-fullwidth fullwidth-box fusion-builder-row-8 fusion-flex-container has-pattern-background has-mask-background nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
									style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;">
									<div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
										style="max-width:1144px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
										<div class="fusion-layout-column fusion_builder_column fusion-builder-column-8 fusion_builder_column_1_1 1_1 fusion-flex-column"
											style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div class="fusion-title title fusion-title-12 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-two"
													style="--awb-text-color:var(--awb-color4);--awb-margin-top:50px;--awb-font-size:30px;">
													<h2 class="fusion-title-heading title-heading-center"
														style="font-family:&quot;Inter&quot;;font-style:normal;font-weight:700;margin:0;font-size:1em;line-height:1.7;">
														TIN TỨC</h2>
												</div>
												<div class="fusion-post-cards fusion-post-cards-1 fusion-grid-archive fusion-grid-columns-3"
													style="--awb-dots-align:center;--awb-columns:3;--awb-active-filter-border-size:3px;--awb-filters-height:36px;--awb-margin-top:20px;--awb-margin-bottom:20px;">
													<ul
														class="fusion-grid fusion-grid-3 fusion-flex-align-items-flex-start fusion-grid-posts-cards">
														<li class="fusion-layout-column fusion_builder_column fusion-builder-column-9 fusion-flex-column post-card fusion-grid-column fusion-post-cards-grid-column fusion-animated"
															style="--awb-bg-size:cover;" data-animationType="fadeInUp"
															data-animationDuration="1.0"
															data-animationOffset="top-into-view">
															<div
																class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column">
																<div class="fusion-image-element "
																	style="text-align:center;--awb-aspect-ratio:3 / 2;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
																	<span
																		class=" fusion-imageframe imageframe-none imageframe-8 hover-type-none has-aspect-ratio"><a
																			class="fusion-no-lightbox"
																			href="thong-cao-bao-chi-thang-12-2023/index.html"
																			target="_self"
																			aria-label="WINCAR TRADING"><img
																				decoding="async" width="1024"
																				height="1024"
																				src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201024%201024'%3E%3C/svg%3E"
																				class="img-responsive wp-image-374 img-with-aspect-ratio"
																				alt
																				data-lazy-srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/z4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-200x200.jpg 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/z4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-400x400.jpg 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/z4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-600x600.jpg 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/z4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-800x800.jpg 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/z4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253.jpg 1024w"
																				data-lazy-sizes="(max-width: 640px) 100vw, 1024px"
																				data-lazy-src="wp-content/uploads/2023/12/z4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253.jpg" /><noscript><img
																					decoding="async" width="1024"
																					height="1024"
																					src="wp-content/uploads/2023/12/xz4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253.jpg.pagespeed.ic.1aa0n9Bm3b.jpg"
																					class="img-responsive wp-image-374 img-with-aspect-ratio"
																					alt
																					srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/xz4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-200x200.jpg.pagespeed.ic.XJ8F34Uein.jpg 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xz4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-400x400.jpg.pagespeed.ic.lt0JENoQ0z.jpg 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xz4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-600x600.jpg.pagespeed.ic.Mg843PfKTA.jpg 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xz4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-800x800.jpg.pagespeed.ic.t2H4zBxh6g.jpg 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xz4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253.jpg.pagespeed.ic.1aa0n9Bm3b.jpg 1024w"
																					sizes="(max-width: 640px) 100vw, 1024px" /></noscript></a></span>
																</div>
																<div class="fusion-title title fusion-title-13 fusion-sep-none fusion-title-text fusion-title-size-one"
																	style="--awb-text-color:var(--awb-color8);--awb-link-color:var(--awb-color4);--awb-link-hover-color:var(--awb-color4);--awb-font-size:15px;">
																	<h1 class="fusion-title-heading title-heading-left"
																		style="font-family:&quot;Inter&quot;;font-style:normal;font-weight:500;margin:0;font-size:1em;line-height:1.7;">
																		<a href="thong-cao-bao-chi-thang-12-2023/index.html"
																			class="awb-custom-text-color awb-custom-text-hover-color"
																			target="_self">Thông cáo báo chí Tháng
																			12.2023</a></h1>
																</div>
																<div class="fusion-content-tb fusion-content-tb-1"
																	style="--awb-font-size:14px;--awb-letter-spacing:0px;--awb-content-alignment:left;--awb-line-height:1.7;--awb-text-font-family:&quot;Inter&quot;;--awb-text-font-style:normal;--awb-text-font-weight:400;">
																	<p><span
																			class="fusion-dropcap dropcap fusion-content-tb-dropcap">L</span>orem
																		ipsum dolor sit amet, consectetur adipiscing
																		elit, sed do eiusmod tempor incididunt ut labore
																		et dolore magna aliqua. Ut [...]</p>
																</div>
																<div style="text-align:left;"><a
																		class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-3 fusion-button-default-span fusion-button-default-type"
																		style="--button_accent_color:var(--awb-color1);--button_accent_hover_color:var(--awb-color1);--button_border_hover_color:var(--awb-color1);--button_gradient_top_color:var(--awb-color4);--button_gradient_bottom_color:var(--awb-color4);--button_gradient_top_color_hover:var(--awb-color4);--button_gradient_bottom_color_hover:var(--awb-color4);--button_font_size:15px;--button_line_height:1.7;--button_typography-letter-spacing:0px;--button_typography-font-family:&quot;Inter&quot;;--button_typography-font-style:normal;--button_typography-font-weight:700;"
																		target="_self" data-hover="icon_slide"
																		href="thong-cao-bao-chi-thang-12-2023/index.html"><span
																			class="fusion-button-text">Xem thêm</span><i
																			class="fa-arrow-alt-circle-right fas button-icon-right"
																			aria-hidden="true"></i></a></div>
															</div>
														</li>
														<li class="fusion-layout-column fusion_builder_column fusion-builder-column-10 fusion-flex-column post-card fusion-grid-column fusion-post-cards-grid-column fusion-animated"
															style="--awb-bg-size:cover;" data-animationType="fadeInUp"
															data-animationDuration="1.0"
															data-animationOffset="top-into-view">
															<div
																class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column">
																<div class="fusion-image-element "
																	style="text-align:center;--awb-aspect-ratio:3 / 2;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
																	<span
																		class=" fusion-imageframe imageframe-none imageframe-9 hover-type-none has-aspect-ratio"><a
																			class="fusion-no-lightbox"
																			href="su-kien-thang-12-2023/index.html"
																			target="_self"
																			aria-label="WINCAR TRADING"><img
																				decoding="async" width="1024"
																				height="1024"
																				src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201024%201024'%3E%3C/svg%3E"
																				class="img-responsive wp-image-374 img-with-aspect-ratio"
																				alt
																				data-lazy-srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/z4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-200x200.jpg 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/z4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-400x400.jpg 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/z4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-600x600.jpg 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/z4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-800x800.jpg 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/z4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253.jpg 1024w"
																				data-lazy-sizes="(max-width: 640px) 100vw, 1024px"
																				data-lazy-src="wp-content/uploads/2023/12/z4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253.jpg" /><noscript><img
																					decoding="async" width="1024"
																					height="1024"
																					src="wp-content/uploads/2023/12/xz4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253.jpg.pagespeed.ic.1aa0n9Bm3b.jpg"
																					class="img-responsive wp-image-374 img-with-aspect-ratio"
																					alt
																					srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/xz4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-200x200.jpg.pagespeed.ic.XJ8F34Uein.jpg 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xz4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-400x400.jpg.pagespeed.ic.lt0JENoQ0z.jpg 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xz4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-600x600.jpg.pagespeed.ic.Mg843PfKTA.jpg 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xz4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-800x800.jpg.pagespeed.ic.t2H4zBxh6g.jpg 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xz4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253.jpg.pagespeed.ic.1aa0n9Bm3b.jpg 1024w"
																					sizes="(max-width: 640px) 100vw, 1024px" /></noscript></a></span>
																</div>
																<div class="fusion-title title fusion-title-14 fusion-sep-none fusion-title-text fusion-title-size-one"
																	style="--awb-text-color:var(--awb-color8);--awb-link-color:var(--awb-color4);--awb-link-hover-color:var(--awb-color4);--awb-font-size:15px;">
																	<h1 class="fusion-title-heading title-heading-left"
																		style="font-family:&quot;Inter&quot;;font-style:normal;font-weight:500;margin:0;font-size:1em;line-height:1.7;">
																		<a href="su-kien-thang-12-2023/index.html"
																			class="awb-custom-text-color awb-custom-text-hover-color"
																			target="_self">Sự kiện tháng 12.2023</a>
																	</h1>
																</div>
																<div class="fusion-content-tb fusion-content-tb-2"
																	style="--awb-font-size:14px;--awb-letter-spacing:0px;--awb-content-alignment:left;--awb-line-height:1.7;--awb-text-font-family:&quot;Inter&quot;;--awb-text-font-style:normal;--awb-text-font-weight:400;">
																	<p><span
																			class="fusion-dropcap dropcap fusion-content-tb-dropcap">L</span>orem
																		ipsum dolor sit amet, consectetur adipiscing
																		elit, sed do eiusmod tempor incididunt ut labore
																		et dolore magna aliqua. Ut [...]</p>
																</div>
																<div style="text-align:left;"><a
																		class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-4 fusion-button-default-span fusion-button-default-type"
																		style="--button_accent_color:var(--awb-color1);--button_accent_hover_color:var(--awb-color1);--button_border_hover_color:var(--awb-color1);--button_gradient_top_color:var(--awb-color4);--button_gradient_bottom_color:var(--awb-color4);--button_gradient_top_color_hover:var(--awb-color4);--button_gradient_bottom_color_hover:var(--awb-color4);--button_font_size:15px;--button_line_height:1.7;--button_typography-letter-spacing:0px;--button_typography-font-family:&quot;Inter&quot;;--button_typography-font-style:normal;--button_typography-font-weight:700;"
																		target="_self" data-hover="icon_slide"
																		href="su-kien-thang-12-2023/index.html"><span
																			class="fusion-button-text">Xem thêm</span><i
																			class="fa-arrow-alt-circle-right fas button-icon-right"
																			aria-hidden="true"></i></a></div>
															</div>
														</li>
														<li class="fusion-layout-column fusion_builder_column fusion-builder-column-11 fusion-flex-column post-card fusion-grid-column fusion-post-cards-grid-column fusion-animated"
															style="--awb-bg-size:cover;" data-animationType="fadeInUp"
															data-animationDuration="1.0"
															data-animationOffset="top-into-view">
															<div
																class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column">
																<div class="fusion-image-element "
																	style="text-align:center;--awb-aspect-ratio:3 / 2;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
																	<span
																		class=" fusion-imageframe imageframe-none imageframe-10 hover-type-none has-aspect-ratio"><a
																			class="fusion-no-lightbox"
																			href="hoat-dong-noi-bo-wincar-thang-12-2023/index.html"
																			target="_self"
																			aria-label="WINCAR TRADING"><img
																				decoding="async" width="1024"
																				height="1024"
																				src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201024%201024'%3E%3C/svg%3E"
																				class="img-responsive wp-image-374 img-with-aspect-ratio"
																				alt
																				data-lazy-srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/z4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-200x200.jpg 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/z4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-400x400.jpg 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/z4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-600x600.jpg 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/z4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-800x800.jpg 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/z4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253.jpg 1024w"
																				data-lazy-sizes="(max-width: 640px) 100vw, 1024px"
																				data-lazy-src="wp-content/uploads/2023/12/z4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253.jpg" /><noscript><img
																					decoding="async" width="1024"
																					height="1024"
																					src="wp-content/uploads/2023/12/xz4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253.jpg.pagespeed.ic.1aa0n9Bm3b.jpg"
																					class="img-responsive wp-image-374 img-with-aspect-ratio"
																					alt
																					srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/xz4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-200x200.jpg.pagespeed.ic.XJ8F34Uein.jpg 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xz4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-400x400.jpg.pagespeed.ic.lt0JENoQ0z.jpg 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xz4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-600x600.jpg.pagespeed.ic.Mg843PfKTA.jpg 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xz4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253-800x800.jpg.pagespeed.ic.t2H4zBxh6g.jpg 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xz4953565039745_a2a6cb6a43829d3c027f34e33f19c3b7-e1702103031253.jpg.pagespeed.ic.1aa0n9Bm3b.jpg 1024w"
																					sizes="(max-width: 640px) 100vw, 1024px" /></noscript></a></span>
																</div>
																<div class="fusion-title title fusion-title-15 fusion-sep-none fusion-title-text fusion-title-size-one"
																	style="--awb-text-color:var(--awb-color8);--awb-link-color:var(--awb-color4);--awb-link-hover-color:var(--awb-color4);--awb-font-size:15px;">
																	<h1 class="fusion-title-heading title-heading-left"
																		style="font-family:&quot;Inter&quot;;font-style:normal;font-weight:500;margin:0;font-size:1em;line-height:1.7;">
																		<a href="hoat-dong-noi-bo-wincar-thang-12-2023/index.html"
																			class="awb-custom-text-color awb-custom-text-hover-color"
																			target="_self">Hoạt động nội bộ WINCAR tháng
																			12.2023</a></h1>
																</div>
																<div class="fusion-content-tb fusion-content-tb-3"
																	style="--awb-font-size:14px;--awb-letter-spacing:0px;--awb-content-alignment:left;--awb-line-height:1.7;--awb-text-font-family:&quot;Inter&quot;;--awb-text-font-style:normal;--awb-text-font-weight:400;">
																	<p><span
																			class="fusion-dropcap dropcap fusion-content-tb-dropcap">L</span>orem
																		ipsum dolor sit amet, consectetur adipiscing
																		elit, sed do eiusmod tempor incididunt ut labore
																		et dolore magna aliqua. Ut [...]</p>
																</div>
																<div style="text-align:left;"><a
																		class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-5 fusion-button-default-span fusion-button-default-type"
																		style="--button_accent_color:var(--awb-color1);--button_accent_hover_color:var(--awb-color1);--button_border_hover_color:var(--awb-color1);--button_gradient_top_color:var(--awb-color4);--button_gradient_bottom_color:var(--awb-color4);--button_gradient_top_color_hover:var(--awb-color4);--button_gradient_bottom_color_hover:var(--awb-color4);--button_font_size:15px;--button_line_height:1.7;--button_typography-letter-spacing:0px;--button_typography-font-family:&quot;Inter&quot;;--button_typography-font-style:normal;--button_typography-font-weight:700;"
																		target="_self" data-hover="icon_slide"
																		href="hoat-dong-noi-bo-wincar-thang-12-2023/index.html"><span
																			class="fusion-button-text">Xem thêm</span><i
																			class="fa-arrow-alt-circle-right fas button-icon-right"
																			aria-hidden="true"></i></a></div>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<div class="fusion-woocommerce-quick-view-overlay"></div>
					<div class="fusion-woocommerce-quick-view-container quick-view woocommerce">
						<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
		var quickViewNonce =  '46a1c11193';
	</script>

						<div class="fusion-wqv-close">
							<button type="button"><span class="screen-reader-text">Close product quick
									view</span>&times;</button>
						</div>

						<div class="fusion-wqv-loader product">
							<h2 class="product_title entry-title">Title</h2>
							<div class="fusion-price-rating">
								<div class="price"></div>
								<div class="star-rating"></div>
							</div>
							<div class="fusion-slider-loading"></div>
						</div>

						<div class="fusion-wqv-preview-image"></div>

						<div class="fusion-wqv-content">
							<div class="product">
								<div class="woocommerce-product-gallery"></div>

								<div class="summary entry-summary scrollable">
									<div class="summary-content"></div>
								</div>
							</div>
						</div>
					</div>

				</div> <!-- fusion-row -->
			</main> <!-- #main -->



			<div class="fusion-tb-footer fusion-footer">
				<div class="fusion-footer-widget-area fusion-widget-area">
					<div class="fusion-fullwidth fullwidth-box fusion-builder-row-9 fusion-flex-container has-pattern-background has-mask-background nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
						style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-margin-top:0px;--awb-background-color:var(--awb-color4);--awb-flex-wrap:wrap;">
						<div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-justify-content-center fusion-flex-content-wrap"
							style="max-width:1144px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
							<div class="fusion-layout-column fusion_builder_column fusion-builder-column-12 fusion_builder_column_1_6 1_6 fusion-flex-column"
								style="--awb-padding-top:20px;--awb-padding-right:20px;--awb-padding-bottom:20px;--awb-padding-left:20px;--awb-bg-size:cover;--awb-width-large:16.666666666667%;--awb-margin-top-large:0px;--awb-spacing-right-large:11.52%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:11.52%;--awb-width-medium:16.666666666667%;--awb-order-medium:0;--awb-spacing-right-medium:11.52%;--awb-spacing-left-medium:11.52%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
								<div
									class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-center fusion-content-layout-row">
									<div class="fusion-image-element "
										style="--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
										<span
											class=" fusion-imageframe imageframe-none imageframe-11 hover-type-none"><img
												decoding="async" width="265" height="300" title="wincar-trắng"
												src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20265%20300'%3E%3C/svg%3E"
												alt class="img-responsive wp-image-106"
												data-lazy-srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/wincar-trang-200x226.png 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/wincar-trang-400x453.png 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/wincar-trang-600x679.png 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/wincar-trang-800x906.png 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/wincar-trang.png 1000w"
												data-lazy-sizes="(max-width: 640px) 100vw, 200px"
												data-lazy-src="wp-content/uploads/2023/12/wincar-trang-265x300.png" /><noscript><img
													decoding="async" width="265" height="300" title="wincar-trắng"
													src="wp-content/uploads/2023/12/wincar-trang-265x300.png" alt
													class="img-responsive wp-image-106"
													srcset="https://wincartrading.com.vn/wp-content/uploads/2023/12/xwincar-trang-200x226.png.pagespeed.ic.cZJ3_PU_Mf.png 200w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xwincar-trang-400x453.png.pagespeed.ic.1lI-aPr-QF.png 400w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xwincar-trang-600x679.png.pagespeed.ic.LBRApI8oEn.png 600w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xwincar-trang-800x906.png.pagespeed.ic.hdfQaRFrO6.png 800w, https://wincartrading.com.vn/wp-content/uploads/2023/12/xwincar-trang.png.pagespeed.ic.wVhZkZzq7t.png 1000w"
													sizes="(max-width: 640px) 100vw, 200px" /></noscript></span></div>
								</div>
							</div>
							<div class="fusion-layout-column fusion_builder_column fusion-builder-column-13 fusion_builder_column_1_1 1_1 fusion-flex-column fusion-animated"
								style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;"
								data-animationType="fadeInUp" data-animationDuration="1.0"
								data-animationOffset="top-into-view">
								<div
									class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
									<div class="fusion-builder-row fusion-builder-row-inner fusion-row fusion-flex-align-items-flex-start fusion-flex-justify-content-center fusion-flex-content-wrap"
										style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
										<div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-14 fusion_builder_column_inner_1_3 1_3 fusion-flex-column"
											style="--awb-bg-size:cover;--awb-width-large:33.333333333333%;--awb-margin-top-large:0px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div class="fusion-text fusion-text-6"
													style="--awb-font-size:14px;--awb-line-height:1.7;--awb-letter-spacing:0px;--awb-text-color:var(--awb-color1);">
													<p style="text-align: center;"><b>Văn phòng TP. Hồ Chí Minh</b></p>
													<p style="text-align: center;">Số 8, đường số 6, KDC Trung Sơn, Xã
														Bình Hưng, Huyện Bình Chánh, Thành phố Hồ Chí Minh</p>
												</div>
											</div>
										</div>
										<div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-15 fusion_builder_column_inner_1_3 1_3 fusion-flex-column"
											style="--awb-bg-size:cover;--awb-width-large:33.333333333333%;--awb-margin-top-large:0px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div class="fusion-text fusion-text-7"
													style="--awb-content-alignment:center;--awb-font-size:14px;--awb-line-height:1.7;--awb-letter-spacing:0px;--awb-text-color:var(--awb-color1);">
													<p style="text-align: center;"><b>CÔNG TY CỔ PHẦN ĐẦU TƯ XÂY DỰNG VÀ
															DỊCH VỤ THƯƠNG MẠI WINCAR</b></p>
													<p>MST: 0316484614</p>
													<p>N6-03 Khu Dân Cư Green Riverside, Phú Xuân, H.Nhà Bè</p>
												</div>
											</div>
										</div>
										<div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-16 fusion_builder_column_inner_1_3 1_3 fusion-flex-column"
											style="--awb-bg-size:cover;--awb-width-large:33.333333333333%;--awb-margin-top-large:0px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div class="fusion-text fusion-text-8"
													style="--awb-content-alignment:center;--awb-font-size:14px;--awb-line-height:1.7;--awb-letter-spacing:0px;--awb-text-color:var(--awb-color1);">
													<p style="text-align: center;"><b>Văn phòng TP. Hồ Chí Minh</b></p>
													<p style="text-align: center;">Số 8, đường số 6, KDC Trung Sơn, Xã
														Bình Hưng, Huyện Bình Chánh, Thành phố Hồ Chí Minh</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="fusion-fullwidth fullwidth-box fusion-builder-row-10 fusion-flex-container has-pattern-background has-mask-background nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
						style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-background-color:var(--awb-color1);--awb-flex-wrap:wrap;">
						<div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
							style="max-width:1144px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
							<div class="fusion-layout-column fusion_builder_column fusion-builder-column-14 fusion_builder_column_1_1 1_1 fusion-flex-column"
								style="--awb-padding-top:10px;--awb-padding-bottom:10px;--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
								<div
									class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
									<div class="fusion-social-links fusion-social-links-1 fusion-animated"
										style="--awb-margin-top:0px;--awb-margin-right:0px;--awb-margin-bottom:0px;--awb-margin-left:0px;--awb-alignment:center;--awb-box-border-top:0px;--awb-box-border-right:0px;--awb-box-border-bottom:0px;--awb-box-border-left:0px;--awb-icon-colors-hover:var(--awb-color4);--awb-box-colors-hover:var(--awb-color1);--awb-box-border-color:var(--awb-color3);--awb-box-border-color-hover:var(--awb-color4);"
										data-animationType="fadeInUp" data-animationDuration="1.0"
										data-animationOffset="top-into-view">
										<div class="fusion-social-networks color-type-custom">
											<div class="fusion-social-networks-wrapper"><a
													class="fusion-social-network-icon fusion-tooltip fusion-facebook awb-icon-facebook"
													style="color:var(--awb-color4);font-size:16px;" data-placement="top"
													data-title="Facebook" data-toggle="tooltip" title="Facebook"
													aria-label="facebook" target="_blank" rel="noopener noreferrer"
													href="#"></a><a
													class="fusion-social-network-icon fusion-tooltip fusion-twitter awb-icon-twitter"
													style="color:var(--awb-color4);font-size:16px;" data-placement="top"
													data-title="Twitter" data-toggle="tooltip" title="Twitter"
													aria-label="twitter" target="_blank" rel="noopener noreferrer"
													href="#"></a><a
													class="fusion-social-network-icon fusion-tooltip fusion-instagram awb-icon-instagram"
													style="color:var(--awb-color4);font-size:16px;" data-placement="top"
													data-title="Instagram" data-toggle="tooltip" title="Instagram"
													aria-label="instagram" target="_blank" rel="noopener noreferrer"
													href="#"></a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="fusion-sliding-bar-wrapper">
				<div id="slidingbar-area"
					class="slidingbar-area fusion-sliding-bar-area fusion-widget-area fusion-sliding-bar-position-top fusion-sliding-bar-text-align-left fusion-sliding-bar-toggle-circle fusion-sliding-bar-sticky"
					data-breakpoint="800" data-toggle="circle">
					<div class="fusion-sb-toggle-wrapper">
						<a class="fusion-sb-toggle" href="#"><span class="screen-reader-text">Toggle Sliding Bar
								Area</span></a>
					</div>

					<div id="slidingbar" class="fusion-sliding-bar">
						<div class="fusion-row">
							<div class="fusion-columns row fusion-columns-2 columns columns-2">

								<div class="fusion-column col-lg-6 col-md-6 col-sm-6">
								</div>
								<div class="fusion-column col-lg-6 col-md-6 col-sm-6">
								</div>
								<div class="fusion-clearfix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div> <!-- wrapper -->
	</div> <!-- #boxed-wrapper -->
	<a class="fusion-one-page-text-link fusion-page-load-link" tabindex="-1" href="#" aria-hidden="true">Page load
		link</a>

	<div class="avada-footer-scripts">

		<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
if(screen.width <=767){
    }else{
    }
</script>





		<div class="simple-contact-desktop" style="display: block;">
			<div id="aml_dk_wrap"
				class="aml_dk-wrap aml_dk-desktop aml_dk-style-gradient-default aml_dk-style-default aml_dk-bottom-right aml_dk-md aml_dk-channel-4">
				<a target="_blank" href="https://tiepthitute.com/"
					class="aml-powered-by aml-pb-style-gradient-default aml_dk-style-default"
					style="color: #555; ">Developed by <span class="aml-powered-by-b">Tiepthitute</span></a>
				<div class="aml_dk-flex-container aml-flc-style-gradient-default aml_dk-style-default"
					style=" background-image: unset;">
					<div class="aml_dk-flex-item aml-tooltip">
						<a href="https://zalo.me/0973139739" target="_blank">
							<div class="aml_dk-channel-zalo"></div>
						</a>
						<span class="aml-text-content aml-tooltiptext">Chat với chúng tôi qua Zalo</span>
					</div>

					<div class="aml_dk-flex-item aml-tooltip">
						<a href="tel:0973139739" target="_blank">
							<div class="aml_dk-channel-click_to_call"></div>
						</a>
						<span class="aml-text-content aml-tooltiptext">Gọi ngay</span>
					</div>





				</div>


			</div>
		</div>

		<div class="gtranslate_wrapper" id="gt-wrapper-87380487"></div>
		<script
			type="text/javascript">var fusionNavIsCollapsed = function (e) { var t, n; window.innerWidth <= e.getAttribute("data-breakpoint") ? (e.classList.add("collapse-enabled"), e.classList.remove("awb-menu_desktop"), e.classList.contains("expanded") || (e.setAttribute("aria-expanded", "false"), window.dispatchEvent(new Event("fusion-mobile-menu-collapsed", { bubbles: !0, cancelable: !0 }))), (n = e.querySelectorAll(".menu-item-has-children.expanded")).length && n.forEach(function (e) { e.querySelector(".awb-menu__open-nav-submenu_mobile").setAttribute("aria-expanded", "false") })) : (null !== e.querySelector(".menu-item-has-children.expanded .awb-menu__open-nav-submenu_click") && e.querySelector(".menu-item-has-children.expanded .awb-menu__open-nav-submenu_click").click(), e.classList.remove("collapse-enabled"), e.classList.add("awb-menu_desktop"), e.setAttribute("aria-expanded", "true"), null !== e.querySelector(".awb-menu__main-ul") && e.querySelector(".awb-menu__main-ul").removeAttribute("style")), e.classList.add("no-wrapper-transition"), clearTimeout(t), t = setTimeout(() => { e.classList.remove("no-wrapper-transition") }, 400), e.classList.remove("loading") }, fusionRunNavIsCollapsed = function () { var e, t = document.querySelectorAll(".awb-menu"); for (e = 0; e < t.length; e++)fusionNavIsCollapsed(t[e]) }; function avadaGetScrollBarWidth() { var e, t, n, l = document.createElement("p"); return l.style.width = "100%", l.style.height = "200px", (e = document.createElement("div")).style.position = "absolute", e.style.top = "0px", e.style.left = "0px", e.style.visibility = "hidden", e.style.width = "200px", e.style.height = "150px", e.style.overflow = "hidden", e.appendChild(l), document.body.appendChild(e), t = l.offsetWidth, e.style.overflow = "scroll", t == (n = l.offsetWidth) && (n = e.clientWidth), document.body.removeChild(e), jQuery("html").hasClass("awb-scroll") && 10 < t - n ? 10 : t - n } fusionRunNavIsCollapsed(), window.addEventListener("fusion-resize-horizontal", fusionRunNavIsCollapsed);</script>
		<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
		<script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="rocket-browser-checker-js-after">
/* <![CDATA[ */
"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
/* ]]> */
</script>
		<script type="text/javascript"
			id="rocket-preload-links-js-extra">var RocketPreloadLinksConfig = { "excludeUris": "\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/thanh-toan\/??(.*)|\/gio-hang\/?|\/tai-khoan\/??(.*)|\/wc-api\/v(.*)|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/", "usesTrailingSlash": "1", "imageExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php", "fileExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm", "siteUrl": "https:\/\/wincartrading.com.vn", "onHoverDelay": "100", "rateThrottle": "3" };</script>
		<script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="rocket-preload-links-js-after">
/* <![CDATA[ */
(function() {
"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("index.html")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("index.html")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
}());
/* ]]> */
</script>
		<script type="text/javascript"
			id="rocket_lazyload_css-js-extra">var rocket_lazyload_css_data = { "threshold": "300" };</script>
		<script type="text/javascript" id="rocket_lazyload_css-js-after">
			/* <![CDATA[ */
			!function o(n, c, a) { function s(t, e) { if (!c[t]) { if (!n[t]) { var r = "function" == typeof require && require; if (!e && r) return r(t, !0); if (u) return u(t, !0); throw (r = new Error("Cannot find module '" + t + "'")).code = "MODULE_NOT_FOUND", r } r = c[t] = { exports: {} }, n[t][0].call(r.exports, function (e) { return s(n[t][1][e] || e) }, r, r.exports, o, n, c, a) } return c[t].exports } for (var u = "function" == typeof require && require, e = 0; e < a.length; e++)s(a[e]); return s }({ 1: [function (e, t, r) { "use strict"; !function () { const r = "undefined" == typeof rocket_pairs ? [] : rocket_pairs, e = "undefined" == typeof rocket_excluded_pairs ? [] : rocket_excluded_pairs; e.map(t => { var e = t.selector; const r = document.querySelectorAll(e); r.forEach(e => { e.setAttribute("data-rocket-lazy-bg-".concat(t.hash), "excluded") }) }); const o = document.querySelector("#wpr-lazyload-bg"); var t = rocket_lazyload_css_data.threshold || 300; const n = new IntersectionObserver(e => { e.forEach(t => { if (t.isIntersecting) { const e = r.filter(e => t.target.matches(e.selector)); e.map(t => { t && (o.innerHTML += t.style, t.elements.forEach(e => { n.unobserve(e), e.setAttribute("data-rocket-lazy-bg-".concat(t.hash), "loaded") })) }) } }) }, { rootMargin: t + "px" }); function c() { 0 < (0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : []).length && r.forEach(t => { try { const e = document.querySelectorAll(t.selector); e.forEach(e => { "loaded" !== e.getAttribute("data-rocket-lazy-bg-".concat(t.hash)) && "excluded" !== e.getAttribute("data-rocket-lazy-bg-".concat(t.hash)) && (n.observe(e), (t.elements || (t.elements = [])).push(e)) }) } catch (e) { console.error(e) } }) } c(); const a = function () { const o = window.MutationObserver; return function (e, t) { if (e && 1 === e.nodeType) { const r = new o(t); return r.observe(e, { attributes: !0, childList: !0, subtree: !0 }), r } } }(); t = document.querySelector("body"), a(t, c) }() }, {}] }, {}, [1]);
			/* ]]> */
		</script>
		<script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="gt_widget_script_87380487-js-before">
/* <![CDATA[ */
window.gtranslateSettings = /* document.write */ window.gtranslateSettings || {};window.gtranslateSettings['87380487'] = {"default_language":"vi","languages":["zh-CN","en","vi"],"url_structure":"none","flag_style":"2d","flag_size":24,"wrapper_selector":"#gt-wrapper-87380487","alt_flags":[],"horizontal_position":"right","vertical_position":"top","flags_location":"\/wp-content\/plugins\/gtranslate\/flags\/"};
/* ]]> */
</script>
		<script type="rocketlazyloadscript"
			data-rocket-src="https://wincartrading.com.vn/wp-content/plugins/gtranslate/js/flags.js?ver=6.4.2"
			data-no-optimize="1" data-no-minify="1" data-gt-orig-url="/" data-gt-orig-domain="wincartrading.com.vn"
			data-gt-widget-id="87380487" defer></script>
		<script type="rocketlazyloadscript" data-rocket-type="text/javascript"
			data-rocket-src="https://wincartrading.com.vn/wp-content/uploads/fusion-scripts/db5f8e6e1b933b6e6eeece77a9a319b5.min.js?ver=3.11.2"
			id="fusion-scripts-js" defer></script>
		<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
				jQuery( document ).ready( function() {
					var ajaxurl = 'wp-admin/admin-ajax.html';
					if ( 0 < jQuery( '.fusion-login-nonce' ).length ) {
						jQuery.get( ajaxurl, { 'action': 'fusion_login_nonce' }, function( response ) {
							jQuery( '.fusion-login-nonce' ).html( response );
						});
					}
				});
				</script>
		<script>window.lazyLoadOptions = [{ elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]", data_src: "lazy-src", data_srcset: "lazy-srcset", data_sizes: "lazy-sizes", class_loading: "lazyloading", class_loaded: "lazyloaded", threshold: 300, callback_loaded: function (element) { if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") { if (element.classList.contains("lazyloaded")) { if (typeof window.jQuery != "undefined") { if (jQuery.fn.fitVids) { jQuery(element).parent().fitVids() } } } } } }, { elements_selector: ".rocket-lazyload", data_src: "lazy-src", data_srcset: "lazy-srcset", data_sizes: "lazy-sizes", class_loading: "lazyloading", class_loaded: "lazyloaded", threshold: 300, }]; window.addEventListener('LazyLoad::Initialized', function (e) { var lazyLoadInstance = e.detail.instance; if (window.MutationObserver) { var observer = new MutationObserver(function (mutations) { var image_count = 0; var iframe_count = 0; var rocketlazy_count = 0; mutations.forEach(function (mutation) { for (var i = 0; i < mutation.addedNodes.length; i++) { if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') { continue } if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') { continue } images = mutation.addedNodes[i].getElementsByTagName('img'); is_image = mutation.addedNodes[i].tagName == "IMG"; iframes = mutation.addedNodes[i].getElementsByTagName('iframe'); is_iframe = mutation.addedNodes[i].tagName == "IFRAME"; rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload'); image_count += images.length; iframe_count += iframes.length; rocketlazy_count += rocket_lazy.length; if (is_image) { image_count += 1 } if (is_iframe) { iframe_count += 1 } } }); if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) { lazyLoadInstance.update() } }); var b = document.getElementsByTagName("body")[0]; var config = { childList: !0, subtree: !0 }; observer.observe(b, config) } }, !1)</script>
		<script data-no-minify="1" async
			src="wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js.pagespeed.ce.-xWhCmQaMY.js"></script>
	</div>

	<section class="to-top-container to-top-right" aria-labelledby="awb-to-top-label">
		<a href="#" id="toTop" class="fusion-top-top-link">
			<span id="awb-to-top-label" class="screen-reader-text">Go to Top</span>
		</a>
	</section>
</body>

<!-- Mirrored from wincartrading.com.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Dec 2023 13:55:51 GMT -->

</html>

<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1702897155 -->