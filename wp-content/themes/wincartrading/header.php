<!DOCTYPE html>
<html class="avada-html-layout-wide avada-html-header-position-top avada-is-100-percent-template" lang="vi" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

<!-- Mirrored from wincartrading.com.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Dec 2023 10:49:58 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script>
        if (navigator.userAgent.match(/MSIE|Internet Explorer/i) || navigator.userAgent.match(/Trident\/7\..*?rv:11/i)) {
            var href = document.location.href;
            if (!href.match(/[?&]nowprocket/)) {
                if (href.indexOf("?") == -1) {
                    if (href.indexOf("#") == -1) {
                        document.location.href = href + "?nowprocket=1"
                    } else {
                        document.location.href = href.replace("#", "?nowprocket=1#")
                    }
                } else {
                    if (href.indexOf("#") == -1) {
                        document.location.href = href + "&nowprocket=1"
                    } else {
                        document.location.href = href.replace("#", "&nowprocket=1#")
                    }
                }
            }
        }
    </script>
    <script>
        class RocketLazyLoadScripts {
            constructor() {
                this.v = "1.2.4", this.triggerEvents = ["keydown", "mousedown", "mousemove", "touchmove", "touchstart", "touchend", "wheel"], this.userEventHandler = this._triggerListener.bind(this), this.touchStartHandler = this._onTouchStart.bind(this), this.touchMoveHandler = this._onTouchMove.bind(this), this.touchEndHandler = this._onTouchEnd.bind(this), this.clickHandler = this._onClick.bind(this), this.interceptedClicks = [], window.addEventListener("pageshow", t => {
                    this.persisted = t.persisted
                }), window.addEventListener("DOMContentLoaded", () => {
                    this._preconnect3rdParties()
                }), this.delayedScripts = {
                    normal: [],
                    async: [],
                    defer: []
                }, this.trash = [], this.allJQueries = []
            }
            _addUserInteractionListener(t) {
                if (document.hidden) {
                    t._triggerListener();
                    return
                }
                this.triggerEvents.forEach(e => window.addEventListener(e, t.userEventHandler, {
                    passive: !0
                })), window.addEventListener("touchstart", t.touchStartHandler, {
                    passive: !0
                }), window.addEventListener("mousedown", t.touchStartHandler), document.addEventListener("visibilitychange", t.userEventHandler)
            }
            _removeUserInteractionListener() {
                this.triggerEvents.forEach(t => window.removeEventListener(t, this.userEventHandler, {
                    passive: !0
                })), document.removeEventListener("visibilitychange", this.userEventHandler)
            }
            _onTouchStart(t) {
                "HTML" !== t.target.tagName && (window.addEventListener("touchend", this.touchEndHandler), window.addEventListener("mouseup", this.touchEndHandler), window.addEventListener("touchmove", this.touchMoveHandler, {
                    passive: !0
                }), window.addEventListener("mousemove", this.touchMoveHandler), t.target.addEventListener("click", this.clickHandler), this._renameDOMAttribute(t.target, "onclick", "rocket-onclick"), this._pendingClickStarted())
            }
            _onTouchMove(t) {
                window.removeEventListener("touchend", this.touchEndHandler), window.removeEventListener("mouseup", this.touchEndHandler), window.removeEventListener("touchmove", this.touchMoveHandler, {
                    passive: !0
                }), window.removeEventListener("mousemove", this.touchMoveHandler), t.target.removeEventListener("click", this.clickHandler), this._renameDOMAttribute(t.target, "rocket-onclick", "onclick"), this._pendingClickFinished()
            }
            _onTouchEnd() {
                window.removeEventListener("touchend", this.touchEndHandler), window.removeEventListener("mouseup", this.touchEndHandler), window.removeEventListener("touchmove", this.touchMoveHandler, {
                    passive: !0
                }), window.removeEventListener("mousemove", this.touchMoveHandler)
            }
            _onClick(t) {
                t.target.removeEventListener("click", this.clickHandler), this._renameDOMAttribute(t.target, "rocket-onclick", "onclick"), this.interceptedClicks.push(t), t.preventDefault(), t.stopPropagation(), t.stopImmediatePropagation(), this._pendingClickFinished()
            }
            _replayClicks() {
                window.removeEventListener("touchstart", this.touchStartHandler, {
                    passive: !0
                }), window.removeEventListener("mousedown", this.touchStartHandler), this.interceptedClicks.forEach(t => {
                    t.target.dispatchEvent(new MouseEvent("click", {
                        view: t.view,
                        bubbles: !0,
                        cancelable: !0
                    }))
                })
            }
            _waitForPendingClicks() {
                return new Promise(t => {
                    this._isClickPending ? this._pendingClickFinished = t : t()
                })
            }
            _pendingClickStarted() {
                this._isClickPending = !0
            }
            _pendingClickFinished() {
                this._isClickPending = !1
            }
            _renameDOMAttribute(t, e, r) {
                t.hasAttribute && t.hasAttribute(e) && (event.target.setAttribute(r, event.target.getAttribute(e)), event.target.removeAttribute(e))
            }
            _triggerListener() {
                this._removeUserInteractionListener(this), "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", this._loadEverythingNow.bind(this)) : this._loadEverythingNow()
            }
            _preconnect3rdParties() {
                let t = [];
                document.querySelectorAll("script[type=rocketlazyloadscript][data-rocket-src]").forEach(e => {
                    let r = e.getAttribute("data-rocket-src");
                    if (r && 0 !== r.indexOf("data:")) {
                        0 === r.indexOf("//") && (r = location.protocol + r);
                        try {
                            let i = new URL(r.html).origin;
                            i !== location.origin && t.push({
                                src: i,
                                crossOrigin: e.crossOrigin || "module" === e.getAttribute("data-rocket-type")
                            })
                        } catch (n) {}
                    }
                }), t = [...new Map(t.map(t => [JSON.stringify(t), t])).values()], this._batchInjectResourceHints(t, "preconnect")
            }
            async _loadEverythingNow() {
                this.lastBreath = Date.now(), this._delayEventListeners(), this._delayJQueryReady(this), this._handleDocumentWrite(), this._registerAllDelayedScripts(), this._preloadAllScripts(), await this._loadScriptsFromList(this.delayedScripts.normal), await this._loadScriptsFromList(this.delayedScripts.defer), await this._loadScriptsFromList(this.delayedScripts.async);
                try {
                    await this._triggerDOMContentLoaded(), await this._pendingWebpackRequests(this), await this._triggerWindowLoad()
                } catch (t) {
                    console.error(t)
                }
                window.dispatchEvent(new Event("rocket-allScriptsLoaded")), this._waitForPendingClicks().then(() => {
                    this._replayClicks()
                }), this._emptyTrash()
            }
            _registerAllDelayedScripts() {
                document.querySelectorAll("script[type=rocketlazyloadscript]").forEach(t => {
                    t.hasAttribute("data-rocket-src") ? t.hasAttribute("async") && !1 !== t.async ? this.delayedScripts.async.push(t) : t.hasAttribute("defer") && !1 !== t.defer || "module" === t.getAttribute("data-rocket-type") ? this.delayedScripts.defer.push(t) : this.delayedScripts.normal.push(t) : this.delayedScripts.normal.push(t)
                })
            }
            async _transformScript(t) {
                if (await this._littleBreath(), !0 === t.noModule && "noModule" in HTMLScriptElement.prototype) {
                    t.setAttribute("data-rocket-status", "skipped");
                    return
                }
                return new Promise(navigator.userAgent.indexOf("Firefox/index.html") > 0 || "" === navigator.vendor ? e => {
                    let r = document.createElement("script");
                    [...t.attributes].forEach(t => {
                        let e = t.nodeName;
                        "type" !== e && ("data-rocket-type" === e && (e = "type"), "data-rocket-src" === e && (e = "src"), r.setAttribute(e, t.nodeValue))
                    }), t.text && (r.text = t.text), r.hasAttribute("src") ? (r.addEventListener("load", e), r.addEventListener("error", e)) : (r.text = t.text, e());
                    try {
                        t.parentNode.replaceChild(r, t)
                    } catch (i) {
                        e()
                    }
                } : e => {
                    function r() {
                        t.setAttribute("data-rocket-status", "failed"), e()
                    }
                    try {
                        let i = t.getAttribute("data-rocket-type"),
                            n = t.getAttribute("data-rocket-src");
                        i ? (t.type = i, t.removeAttribute("data-rocket-type")) : t.removeAttribute("type"), t.addEventListener("load", function r() {
                            t.setAttribute("data-rocket-status", "executed"), e()
                        }), t.addEventListener("error", r), n ? (t.removeAttribute("data-rocket-src"), t.src = n) : t.src = "data:text/javascript;base64," + window.btoa(unescape(encodeURIComponent(t.text)))
                    } catch (s) {
                        r()
                    }
                })
            }
            async _loadScriptsFromList(t) {
                let e = t.shift();
                return e && e.isConnected ? (await this._transformScript(e), this._loadScriptsFromList(t)) : Promise.resolve()
            }
            _preloadAllScripts() {
                this._batchInjectResourceHints([...this.delayedScripts.normal, ...this.delayedScripts.defer, ...this.delayedScripts.async], "preload")
            }
            _batchInjectResourceHints(t, e) {
                var r = document.createDocumentFragment();
                t.forEach(t => {
                    let i = t.getAttribute && t.getAttribute("data-rocket-src") || t.src;
                    if (i) {
                        let n = document.createElement("link");
                        n.href = i, n.rel = e, "preconnect" !== e && (n.as = "script"), t.getAttribute && "module" === t.getAttribute("data-rocket-type") && (n.crossOrigin = !0), t.crossOrigin && (n.crossOrigin = t.crossOrigin), t.integrity && (n.integrity = t.integrity), r.appendChild(n), this.trash.push(n)
                    }
                }), document.head.appendChild(r)
            }
            _delayEventListeners() {
                let t = {};

                function e(e, r) {
                    ! function e(r) {
                        !t[r] && (t[r] = {
                            originalFunctions: {
                                add: r.addEventListener,
                                remove: r.removeEventListener
                            },
                            eventsToRewrite: []
                        }, r.addEventListener = function() {
                            arguments[0] = i(arguments[0]), t[r].originalFunctions.add.apply(r, arguments)
                        }, r.removeEventListener = function() {
                            arguments[0] = i(arguments[0]), t[r].originalFunctions.remove.apply(r, arguments)
                        });

                        function i(e) {
                            return t[r].eventsToRewrite.indexOf(e) >= 0 ? "rocket-" + e : e
                        }
                    }(e), t[e].eventsToRewrite.push(r)
                }

                function r(t, e) {
                    let r = t[e];
                    Object.defineProperty(t, e, {
                        get: () => r || function() {},
                        set(i) {
                            t["rocket" + e] = r = i
                        }
                    })
                }
                e(document, "DOMContentLoaded"), e(window, "DOMContentLoaded"), e(window, "load"), e(window, "pageshow"), e(document, "readystatechange"), r(document, "onreadystatechange"), r(window, "onload"), r(window, "onpageshow")
            }
            _delayJQueryReady(t) {
                let e;

                function r(t) {
                    return t.split(" ").map(t => "load" === t || 0 === t.indexOf("load.") ? "rocket-jquery-load" : t).join(" ")
                }

                function i(i) {
                    if (i && i.fn && !t.allJQueries.includes(i)) {
                        i.fn.ready = i.fn.init.prototype.ready = function(e) {
                            return t.domReadyFired ? e.bind(document)(i) : document.addEventListener("rocket-DOMContentLoaded", () => e.bind(document)(i)), i([])
                        };
                        let n = i.fn.on;
                        i.fn.on = i.fn.init.prototype.on = function() {
                            return this[0] === window && ("string" == typeof arguments[0] || arguments[0] instanceof String ? arguments[0] = r(arguments[0]) : "object" == typeof arguments[0] && Object.keys(arguments[0]).forEach(t => {
                                let e = arguments[0][t];
                                delete arguments[0][t], arguments[0][r(t)] = e
                            })), n.apply(this, arguments), this
                        }, t.allJQueries.push(i)
                    }
                    e = i
                }
                i(window.jQuery), Object.defineProperty(window, "jQuery", {
                    get: () => e,
                    set(t) {
                        i(t)
                    }
                })
            }
            async _pendingWebpackRequests(t) {
                let e = document.querySelector("script[data-webpack]");
                async function r() {
                    return new Promise(t => {
                        e.addEventListener("load", t), e.addEventListener("error", t)
                    })
                }
                e && (await r(), await t._requestAnimFrame(), await t._pendingWebpackRequests(t))
            }
            async _triggerDOMContentLoaded() {
                this.domReadyFired = !0, await this._littleBreath(), document.dispatchEvent(new Event("rocket-DOMContentLoaded")), await this._littleBreath(), window.dispatchEvent(new Event("rocket-DOMContentLoaded")), await this._littleBreath(), document.dispatchEvent(new Event("rocket-readystatechange")), await this._littleBreath(), document.rocketonreadystatechange && document.rocketonreadystatechange()
            }
            async _triggerWindowLoad() {
                await this._littleBreath(), window.dispatchEvent(new Event("rocket-load")), await this._littleBreath(), window.rocketonload && window.rocketonload(), await this._littleBreath(), this.allJQueries.forEach(t => t(window).trigger("rocket-jquery-load")), await this._littleBreath();
                let t = new Event("rocket-pageshow");
                t.persisted = this.persisted, window.dispatchEvent(t), await this._littleBreath(), window.rocketonpageshow && window.rocketonpageshow({
                    persisted: this.persisted
                })
            }
            _handleDocumentWrite() {
                let t = new Map;
                document.write = document.writeln = function(e) {
                    let r = document.currentScript;
                    r || console.error("WPRocket unable to document.write this: " + e);
                    let i = document.createRange(),
                        n = r.parentElement,
                        s = t.get(r);
                    void 0 === s && (s = r.nextSibling, t.set(r, s));
                    let a = document.createDocumentFragment();
                    i.setStart(a, 0), a.appendChild(i.createContextualFragment(e)), n.insertBefore(a, s)
                }
            }
            async _littleBreath() {
                Date.now() - this.lastBreath > 45 && (await this._requestAnimFrame(), this.lastBreath = Date.now())
            }
            async _requestAnimFrame() {
                return document.hidden ? new Promise(t => setTimeout(t)) : new Promise(t => requestAnimationFrame(t))
            }
            _emptyTrash() {
                this.trash.forEach(t => t.remove())
            }
            static run() {
                let t = new RocketLazyLoadScripts;
                t._addUserInteractionListener(t)
            }
        }
        RocketLazyLoadScripts.run();
    </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <!-- This site is optimized with the Yoast SEO Premium plugin v21.4 (Yoast SEO v21.6) - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Trang chủ - WINCAR TRADING</title>
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Trang chủ" />
    <meta property="og:url" content="https://wincartrading.com.vn/" />
    <meta property="og:site_name" content="WINCAR TRADING" />
    <meta property="article:modified_time" content="2023-12-11T04:08:52+00:00" />
    <meta name="twitter:card" content="summary_large_image" />
    <!-- <script type="application/ld+json" class="yoast-schema-graph">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "WebPage",
                "@id": "https://wincartrading.com.vn/",
                "url": "https://wincartrading.com.vn/",
                "name": "Trang chủ - WINCAR TRADING",
                "isPartOf": {
                    "@id": "https://wincartrading.com.vn/#website"
                },
                "about": {
                    "@id": "https://wincartrading.com.vn/#organization"
                },
                "datePublished": "2023-12-05T01:17:24+00:00",
                "dateModified": "2023-12-11T04:08:52+00:00",
                "breadcrumb": {
                    "@id": "https://wincartrading.com.vn/#breadcrumb"
                },
                "inLanguage": "vi",
                "potentialAction": [{
                    "@type": "ReadAction",
                    "target": ["https://wincartrading.com.vn/"]
                }]
            }, {
                "@type": "BreadcrumbList",
                "@id": "https://wincartrading.com.vn/#breadcrumb",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Trang chủ"
                }]
            }, {
                "@type": "WebSite",
                "@id": "https://wincartrading.com.vn/#website",
                "url": "https://wincartrading.com.vn/",
                "name": "WINCAR TRADING",
                "description": "",
                "publisher": {
                    "@id": "https://wincartrading.com.vn/#organization"
                },
                "potentialAction": [{
                    "@type": "SearchAction",
                    "target": {
                        "@type": "EntryPoint",
                        "urlTemplate": "https://wincartrading.com.vn/?s={search_term_string}"
                    },
                    "query-input": "required name=search_term_string"
                }],
                "inLanguage": "vi"
            }, {
                "@type": "Organization",
                "@id": "https://wincartrading.com.vn/#organization",
                "name": "WINCAR TRADING",
                "url": "https://wincartrading.com.vn/",
                "logo": {
                    "@type": "ImageObject",
                    "inLanguage": "vi",
                    "@id": "https://wincartrading.com.vn/#/schema/logo/image/",
                    "url": "http://wincartrading.com.vn/wp-content/uploads/2023/12/wincar-logo.png",
                    "contentUrl": "http://wincartrading.com.vn/wp-content/uploads/2023/12/wincar-logo.png",
                    "width": 1000,
                    "height": 1000,
                    "caption": "WINCAR TRADING"
                },
                "image": {
                    "@id": "https://wincartrading.com.vn/#/schema/logo/image/"
                },
                "sameAs": ["https://masothue.com/0316484614-cong-ty-co-phan-dau-tu-xay-dung-va-dich-vu-thuong-mai-wincar"]
            }]
        }
    </script> -->
    <!-- / Yoast SEO Premium plugin. -->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');  ?>/wp-content/uploads/2023/12/xWINCAR-logo-new.png.pagespeed.ic.TZIhXjcAm-.png" type="image/x-icon" />

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory');  ?>/wp-content/uploads/2023/12/xWINCAR-logo-new.png.pagespeed.ic.TZIhXjcAm-.png">

    <!-- Android Icon -->
    <link rel="icon" sizes="192x192" href="<?php bloginfo('template_directory');  ?>/wp-content/uploads/2023/12/xWINCAR-logo-new.png.pagespeed.ic.TZIhXjcAm-.png">

    <!-- MS Edge Icon -->
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory');  ?>/wp-content/uploads/2023/12/WINCAR-logo-new.png">

    <meta property="og:title" content="Trang chủ" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://wincartrading.com.vn/" />
    <meta property="og:site_name" content="WINCAR TRADING" />
    <meta property="og:description" content="LĨNH VỰC HOẠT ĐỘNG SẢN XUẤT NÔNG NGHIỆP KHAI THÁC KHOÁNG SẢN ĐẦU TƯ VÀ XÂY DỰNG ĐỐI TÁC CHIẾN LƯỢC CỬA HÀNG TRỰC TUYẾN WINCAR mong muốn cung cấp tới thị trường" />

    <meta property="og:image" content="<?php bloginfo('template_directory');  ?>/wp-content/uploads/2023/12/WINCAR-logo-new.png" />
    <link rel='stylesheet' id='wp-block-library-css' href='<?php bloginfo('template_directory');  ?>/wp-includes/css/dist/block-library/A.style.min.css%2cqver%3d6.4.2.pagespeed.cf.06cr-bNM9Y.css' type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='ht-social-css' href='<?php bloginfo('template_directory');  ?>/wp-content/cache/background-css/wincartrading.com.vn/wp-content/cache/min/1/wp-content/plugins/Simple-Contact/assets/css/style7fec.css?ver=1702006445&amp;wpr_t=1702921797' type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='jquery-ui-style-css' href='<?php bloginfo('template_directory');  ?>/wp-content/cache/background-css/wincartrading.com.vn/wp-content/cache/min/1/wp-content/plugins/woocommerce-bookings/dist/css/jquery-ui-styles7fec.css?ver=1702006445&amp;wpr_t=1702921797' type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='wc-bookings-styles-css' href='<?php bloginfo('template_directory');  ?>/wp-content/cache/background-css/wincartrading.com.vn/wp-content/cache/min/1/wp-content/plugins/woocommerce-bookings/dist/css/frontend7fec.css?ver=1702006445&amp;wpr_t=1702921797' type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='fusion-dynamic-css-css' href='<?php bloginfo('template_directory');  ?>/wp-content/cache/background-css/wincartrading.com.vn/wp-content/cache/min/1/wp-content/uploads/fusion-styles/9c9f1ea2351bf52c5fe7efd9f60276f6.mind076.css?ver=1702485560&amp;wpr_t=1702921797' type='text/css' media='all' />
    <script type="text/template" id="tmpl-variation-template">
        <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
	<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
</script>
    <script type="text/template" id="tmpl-unavailable-variation-template">
        <p>Rất tiếc, sản phẩm này hiện không tồn tại. Hãy chọn một phương thức kết hợp khác.</p>
</script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="<?php bloginfo('template_directory');  ?>/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2" id="wp-polyfill-inert-js" defer></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="<?php bloginfo('template_directory');  ?>/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0" id="regenerator-runtime-js" defer></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="<?php bloginfo('template_directory');  ?>/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="<?php bloginfo('template_directory');  ?>/js/dist/hooks.min.js?ver=c6aec9a8d4e5a5d543a1" id="wp-hooks-js"></script>
    <script type="text/javascript" src="../stats.wp.com/wc293.js?ver=202351" id="woo-tracks-js" defer></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="<?php bloginfo('template_directory');  ?>/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="<?php bloginfo('template_directory');  ?>/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js" defer></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="<?php bloginfo('template_directory');  ?>/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.8.3.1" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "Xem gi\u1ecf h\u00e0ng",
            "cart_url": "https:\/\/wincartrading.com.vn\/gio-hang\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
    </script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="<?php bloginfo('template_directory');  ?>/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=8.3.1" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="<?php bloginfo('template_directory');  ?>/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.8.3.1" id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
    </script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="<?php bloginfo('template_directory');  ?>/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=8.3.1" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="<?php bloginfo('template_directory');  ?>/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js" defer></script>
    <script type="text/javascript" id="wp-util-js-extra">
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wp-admin\/admin-ajax.php"
            }
        };
    </script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="<?php bloginfo('template_directory');  ?>/wp-includes/js/wp-util.min.js?ver=6.4.2" id="wp-util-js" defer></script>
    <script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
        var wc_add_to_cart_variation_params = {
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_no_matching_variations_text": "R\u1ea5t ti\u1ebfc, kh\u00f4ng c\u00f3 s\u1ea3n ph\u1ea9m n\u00e0o ph\u00f9 h\u1ee3p v\u1edbi l\u1ef1a ch\u1ecdn c\u1ee7a b\u1ea1n. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c.",
            "i18n_make_a_selection_text": "Ch\u1ecdn c\u00e1c t\u00f9y ch\u1ecdn cho s\u1ea3n ph\u1ea9m tr\u01b0\u1edbc khi cho s\u1ea3n ph\u1ea9m v\u00e0o gi\u1ecf h\u00e0ng c\u1ee7a b\u1ea1n.",
            "i18n_unavailable_text": "R\u1ea5t ti\u1ebfc, s\u1ea3n ph\u1ea9m n\u00e0y hi\u1ec7n kh\u00f4ng t\u1ed3n t\u1ea1i. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c."
        };
    </script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="<?php bloginfo('template_directory');  ?>/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=8.3.1" id="wc-add-to-cart-variation-js" defer="defer" data-wp-strategy="defer"></script>
    <meta name="generator" content="WordPress 6.4.2" />
    <meta name="generator" content="WooCommerce 8.3.1" />
    <link rel="preload" href="<?php bloginfo('template_directory');  ?>/wp-content/themes/Avada/includes/lib/assets/fonts/icomoon/awb-icons.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="<?php bloginfo('template_directory');  ?>/wp-content/themes/Avada/includes/lib/assets/fonts/fontawesome/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php bloginfo('template_directory');  ?>/wp-content/themes/Avada/includes/lib/assets/fonts/fontawesome/webfonts/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php bloginfo('template_directory');  ?>/wp-content/themes/Avada/includes/lib/assets/fonts/fontawesome/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="icon" href="<?php bloginfo('template_directory');  ?>/wp-content/uploads/2023/12/cropped-wincar-logo-1-32x32.png.pagespeed.ce.P-QSMAOr5s.png" sizes="32x32" />
    <link rel="icon" href="<?php bloginfo('template_directory');  ?>/wp-content/uploads/2023/12/cropped-wincar-logo-1-192x192.png.pagespeed.ce.mfRQbyaBfW.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory');  ?>/wp-content/uploads/2023/12/cropped-wincar-logo-1-180x180.png.pagespeed.ce.GZnXHnmdkh.png" />
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory');  ?>/wp-content/uploads/2023/12/cropped-wincar-logo-1-270x270.png" />
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript">
        var doc = document.documentElement;
			doc.setAttribute( 'data-useragent', navigator.userAgent );
		</script>
    <script type="application/javascript">
        const rocket_pairs = [{
            "selector": ".autoAdsMaxLead-widget-icon-close",
            "style": ":root{--wpr-bg-bf1c5388-9342-45fa-928d-ec92ac688057: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/close.png');}",
            "hash": "bf1c5388-9342-45fa-928d-ec92ac688057"
        }, {
            "selector": ".autoAdsMaxLead-widget-google-map-popup-close-icon",
            "style": ":root{--wpr-bg-cdfb3b56-4515-4ad3-a940-2e7b4c50b4cd: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/map_close.svg');}",
            "hash": "cdfb3b56-4515-4ad3-a940-2e7b4c50b4cd"
        }, {
            "selector": "div.autoAdsMaxLead-widget-tawk-to-popup-container .autoAdsMaxLead-widget-icon-close",
            "style": ":root{--wpr-bg-249eba48-7b86-46ba-82dc-ea962faf3e93: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/icon_close.png');}",
            "hash": "249eba48-7b86-46ba-82dc-ea962faf3e93"
        }, {
            "selector": ".autoAdsMaxLead-widget-form-file-upload span",
            "style": ":root{--wpr-bg-de7e2735-8a68-41c4-a964-5c91a0a0ca14: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_upload.png');}",
            "hash": "de7e2735-8a68-41c4-a964-5c91a0a0ca14"
        }, {
            "selector": ".aml_dk-desktop .aml-close",
            "style": ":root{--wpr-bg-a3364c3d-e98e-4cc1-aabe-dfe5548f53a8: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_click_close.svg');}",
            "hash": "a3364c3d-e98e-4cc1-aabe-dfe5548f53a8"
        }, {
            "selector": ".aml_dk-mobile .aml-close",
            "style": ":root{--wpr-bg-15a06e97-9e61-43e1-aad1-70ac8ada659c: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_click_close.svg');}",
            "hash": "15a06e97-9e61-43e1-aad1-70ac8ada659c"
        }, {
            "selector": ".aml-map-head-location-image",
            "style": ":root{--wpr-bg-21c98044-c39f-401b-8226-3bf34e084179: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_pin.svg');}",
            "hash": "21c98044-c39f-401b-8226-3bf34e084179"
        }, {
            "selector": ".aml-map-head-colapse-image",
            "style": ":root{--wpr-bg-54d9c15b-3a1b-4d35-a868-ed086eafda89: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/list_colpase.svg');}",
            "hash": "54d9c15b-3a1b-4d35-a868-ed086eafda89"
        }, {
            "selector": ".aml-banner-popup .aml-btn-close",
            "style": ":root{--wpr-bg-7cea32ff-9a46-40a3-8049-0d6694eedab2: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/banner_close.svg');}",
            "hash": "7cea32ff-9a46-40a3-8049-0d6694eedab2"
        }, {
            "selector": ".autoAdsMaxLead-widget .autoAdsMaxLead-widget-menu-group",
            "style": ":root{--wpr-bg-3e25b0ad-ecab-49d9-8533-b628a7e9f9b7: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_menu.png');}",
            "hash": "3e25b0ad-ecab-49d9-8533-b628a7e9f9b7"
        }, {
            "selector": ".autoAdsMaxLead-widget .float-btn-group.open .autoAdsMaxLead-widget-menu-group",
            "style": ":root{--wpr-bg-4068675d-7486-4c77-8c4a-82fc73123225: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_close.png');}",
            "hash": "4068675d-7486-4c77-8c4a-82fc73123225"
        }, {
            "selector": ".autoAdsMaxLead-widget .autoAdsMaxLead-widget-menu-contact-form",
            "style": ":root{--wpr-bg-2af3c5a4-8acd-4e4f-82c0-98a9f42ca6a1: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_contact_form.svg');}",
            "hash": "2af3c5a4-8acd-4e4f-82c0-98a9f42ca6a1"
        }, {
            "selector": ".autoAdsMaxLead-widget .autoAdsMaxLead-widget-menu-click-to-call",
            "style": ":root{--wpr-bg-a24e7d2c-af4b-400c-b66a-a6981a8c25cf: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_click_to_call.svg');}",
            "hash": "a24e7d2c-af4b-400c-b66a-a6981a8c25cf"
        }, {
            "selector": ".autoAdsMaxLead-widget .autoAdsMaxLead-widget-menu-line",
            "style": ":root{--wpr-bg-c2dc4002-eb13-41ce-b6f0-8770a5da2cd1: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_line.png');}",
            "hash": "c2dc4002-eb13-41ce-b6f0-8770a5da2cd1"
        }, {
            "selector": ".autoAdsMaxLead-widget .autoAdsMaxLead-widget-menu-facebook",
            "style": ":root{--wpr-bg-46d5cab0-04ea-486c-9c7e-8dfaa47e5950: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_messenger.svg');}",
            "hash": "46d5cab0-04ea-486c-9c7e-8dfaa47e5950"
        }, {
            "selector": ".autoAdsMaxLead-widget .autoAdsMaxLead-widget-menu-google-map",
            "style": ":root{--wpr-bg-97503d5c-635e-47c7-bb34-c2dfa4b3bd9f: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_map.svg');}",
            "hash": "97503d5c-635e-47c7-bb34-c2dfa4b3bd9f"
        }, {
            "selector": ".autoAdsMaxLead-widget .autoAdsMaxLead-widget-menu-whatsapp",
            "style": ":root{--wpr-bg-d282e105-b36d-4b54-a0cb-9022e1db4185: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_whatsapp.svg');}",
            "hash": "d282e105-b36d-4b54-a0cb-9022e1db4185"
        }, {
            "selector": ".autoAdsMaxLead-widget .autoAdsMaxLead-widget-menu-skype",
            "style": ":root{--wpr-bg-34231cd7-9be5-4db8-ac0a-75ff22bb819f: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_skype.png');}",
            "hash": "34231cd7-9be5-4db8-ac0a-75ff22bb819f"
        }, {
            "selector": ".autoAdsMaxLead-widget .autoAdsMaxLead-widget-menu-zalo",
            "style": ":root{--wpr-bg-7be13ce1-d9ad-45c4-8342-3488bda1f50e: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_zalo.svg');}",
            "hash": "7be13ce1-d9ad-45c4-8342-3488bda1f50e"
        }, {
            "selector": ".autoAdsMaxLead-widget .autoAdsMaxLead-widget-menu-tawk-to",
            "style": ":root{--wpr-bg-fe45f35a-4b68-4a89-bb10-8c73193b19bc: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_tawkto.svg');}",
            "hash": "fe45f35a-4b68-4a89-bb10-8c73193b19bc"
        }, {
            "selector": ".autoAdsMaxLead-widget .autoAdsMaxLead-widget-menu-download-doc",
            "style": ":root{--wpr-bg-35d56746-d5ee-4015-9c26-41ef2b113ebe: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_download_doc.svg');}",
            "hash": "35d56746-d5ee-4015-9c26-41ef2b113ebe"
        }, {
            "selector": ".autoAdsMaxLead-minimize-facebook-wrapper",
            "style": ":root{--wpr-bg-73db3bec-d8de-4e1e-98ae-d25f10c965ad: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/fb_icon_close.png');}",
            "hash": "73db3bec-d8de-4e1e-98ae-d25f10c965ad"
        }, {
            "selector": ".validate-ok",
            "style": ":root{--wpr-bg-935eab3f-3b55-4e74-b282-608fe300eb5f: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/checked-circle.png');}",
            "hash": "935eab3f-3b55-4e74-b282-608fe300eb5f"
        }, {
            "selector": ".autoAdsMaxLead-widget-popup-loader",
            "style": ":root{--wpr-bg-78b6fe84-19af-4619-880d-cd7bf153a9b5: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/loader32x32.gif');}",
            "hash": "78b6fe84-19af-4619-880d-cd7bf153a9b5"
        }, {
            "selector": "#autoAdsMaxLead_widget_facebook_popup .autoAdsMaxLead-widget-icon-close",
            "style": ":root{--wpr-bg-ce5ce460-897e-4759-b59e-208e9e616535: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/fb_icon_close.png');}",
            "hash": "ce5ce460-897e-4759-b59e-208e9e616535"
        }, {
            "selector": ".autoAdsMaxLead-Mobile .mobile-background .autoAdsMaxLead-widget-menu-contact-form",
            "style": ":root{--wpr-bg-0c8c2bc0-2144-4a1f-9531-20dfc950f259: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_contact_form.svg');}",
            "hash": "0c8c2bc0-2144-4a1f-9531-20dfc950f259"
        }, {
            "selector": ".autoAdsMaxLead-Mobile .mobile-background .autoAdsMaxLead-widget-menu-click-to-call",
            "style": ":root{--wpr-bg-dd550252-51ae-45a7-8e2f-bb0f6ce0269c: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_click_to_call.svg');}",
            "hash": "dd550252-51ae-45a7-8e2f-bb0f6ce0269c"
        }, {
            "selector": ".autoAdsMaxLead-Mobile .mobile-background .autoAdsMaxLead-widget-menu-facebook",
            "style": ":root{--wpr-bg-3f307732-22a5-4cc3-9164-84159d803578: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_facebook.svg');}",
            "hash": "3f307732-22a5-4cc3-9164-84159d803578"
        }, {
            "selector": ".autoAdsMaxLead-Mobile .mobile-background .autoAdsMaxLead-widget-menu-zalo",
            "style": ":root{--wpr-bg-a66183f8-f6ee-465a-a347-3fec9f2ef212: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_m_icon_zalo.svg');}",
            "hash": "a66183f8-f6ee-465a-a347-3fec9f2ef212"
        }, {
            "selector": ".autoAdsMaxLead-Mobile .mobile-background .autoAdsMaxLead-widget-menu-tawk-to",
            "style": ":root{--wpr-bg-63edfcfd-215b-4c37-a2ae-3707949a7bc1: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_livechat.svg');}",
            "hash": "63edfcfd-215b-4c37-a2ae-3707949a7bc1"
        }, {
            "selector": ".autoAdsMaxLead-Mobile .mobile-background .autoAdsMaxLead-widget-menu-google-map",
            "style": ":root{--wpr-bg-f2122c2c-17e2-4336-88e2-9b2eef79d021: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_map.svg');}",
            "hash": "f2122c2c-17e2-4336-88e2-9b2eef79d021"
        }, {
            "selector": ".autoAdsMaxLead-Mobile .mobile-background .autoAdsMaxLead-widget-menu-whatsapp",
            "style": ":root{--wpr-bg-2708f687-4eda-467a-a4f2-c0a714906469: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_whatsapp.svg');}",
            "hash": "2708f687-4eda-467a-a4f2-c0a714906469"
        }, {
            "selector": ".autoAdsMaxLead-Mobile .mobile-background .autoAdsMaxLead-widget-menu-download-doc",
            "style": ":root{--wpr-bg-2dc80285-b84c-4c8d-83bc-1a3170d16d99: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_download_doc.svg');}",
            "hash": "2dc80285-b84c-4c8d-83bc-1a3170d16d99"
        }, {
            "selector": ".aml_dk-style-gradient-vertical .aml_dk-channel-facebook",
            "style": ":root{--wpr-bg-adf7a28c-5889-4f27-9778-997d09c6b583: url('https:\/\/wincartrading.com.vn\/images\/Messenger_On.svg');}",
            "hash": "adf7a28c-5889-4f27-9778-997d09c6b583"
        }, {
            "selector": ".aml_dk-style-gradient-vertical .aml_dk-channel-zalo",
            "style": ":root{--wpr-bg-db86d24d-45a7-4a8f-8e96-7743dc1e4b31: url('https:\/\/wincartrading.com.vn\/images\/Zalo_On.svg');}",
            "hash": "db86d24d-45a7-4a8f-8e96-7743dc1e4b31"
        }, {
            "selector": ".aml_dk-style-gradient-vertical .aml_dk-channel-click_to_call",
            "style": ":root{--wpr-bg-7690026c-0799-4590-ad3b-09453b8a8b90: url('https:\/\/wincartrading.com.vn\/images\/Call_On.svg');}",
            "hash": "7690026c-0799-4590-ad3b-09453b8a8b90"
        }, {
            "selector": ".aml_dk-style-gradient-vertical .aml_dk-channel-google_map",
            "style": ":root{--wpr-bg-2a67c680-6347-4ab5-a561-671ea56993ec: url('https:\/\/wincartrading.com.vn\/images\/Location.svg');}",
            "hash": "2a67c680-6347-4ab5-a561-671ea56993ec"
        }, {
            "selector": ".aml_dk-style-gradient-vertical.dark .aml_dk-channel-facebook",
            "style": ":root{--wpr-bg-60c49003-e928-4bc7-9749-5f224b6bfabd: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_dark_messenger.svg');}",
            "hash": "60c49003-e928-4bc7-9749-5f224b6bfabd"
        }, {
            "selector": ".aml_dk-style-gradient-vertical.dark .aml_dk-channel-zalo",
            "style": ":root{--wpr-bg-a034b8ad-52c3-4020-a6cf-a86e4fd41142: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_dark_zalo.svg');}",
            "hash": "a034b8ad-52c3-4020-a6cf-a86e4fd41142"
        }, {
            "selector": ".aml_dk-style-gradient-vertical.dark .aml_dk-channel-click_to_call",
            "style": ":root{--wpr-bg-d5c17181-755b-405c-b47e-618936868214: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_dark_click_to_call.svg');}",
            "hash": "d5c17181-755b-405c-b47e-618936868214"
        }, {
            "selector": ".aml_dk-style-gradient-vertical.dark .aml_dk-channel-google_map",
            "style": ":root{--wpr-bg-1abda4cb-c7b9-4ed4-b676-c5aaad6812af: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_dark_map.svg');}",
            "hash": "1abda4cb-c7b9-4ed4-b676-c5aaad6812af"
        }, {
            "selector": ".aml_dk-style-square .aml_dk-channel-facebook",
            "style": ":root{--wpr-bg-8e343609-3ae8-4a9b-a4dd-99e72ee00c69: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_messenger_square.svg');}",
            "hash": "8e343609-3ae8-4a9b-a4dd-99e72ee00c69"
        }, {
            "selector": ".aml_dk-style-square .aml_dk-channel-zalo",
            "style": ":root{--wpr-bg-9df9adcf-d3a1-4dbf-a882-0ccb58d45151: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_zalo_square.svg');}",
            "hash": "9df9adcf-d3a1-4dbf-a882-0ccb58d45151"
        }, {
            "selector": ".aml_dk-style-square .aml_dk-channel-click_to_call",
            "style": ":root{--wpr-bg-a8017b01-ccd7-468f-9820-d0275c56a026: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_click_to_call_square.svg');}",
            "hash": "a8017b01-ccd7-468f-9820-d0275c56a026"
        }, {
            "selector": ".aml_dk-style-square .aml_dk-channel-tawk_to",
            "style": ":root{--wpr-bg-dd89b74f-4958-4a56-9f65-9cb5f7701750: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_tawkto_square.svg');}",
            "hash": "dd89b74f-4958-4a56-9f65-9cb5f7701750"
        }, {
            "selector": ".aml_dk-style-square .aml_dk-channel-contact_form",
            "style": ":root{--wpr-bg-3669c4f0-a425-4148-9f4b-e3b4710311b1: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_contact_form_square.svg');}",
            "hash": "3669c4f0-a425-4148-9f4b-e3b4710311b1"
        }, {
            "selector": ".aml_dk-style-square .aml_dk-channel-google_map",
            "style": ":root{--wpr-bg-eabf4135-cf8f-4637-8534-738bb82d2c2c: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_map_square.svg');}",
            "hash": "eabf4135-cf8f-4637-8534-738bb82d2c2c"
        }, {
            "selector": ".aml_dk-style-square .aml_dk-channel-whatsapp",
            "style": ":root{--wpr-bg-5eaaef9e-18cd-47d2-8a86-5eda28ab9a43: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_whatsapp_square.svg');}",
            "hash": "5eaaef9e-18cd-47d2-8a86-5eda28ab9a43"
        }, {
            "selector": ".aml_dk-style-square .aml_dk-channel-download_doc",
            "style": ":root{--wpr-bg-241fb15f-c955-4a16-bff6-63cb1e70c1a6: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_download_doc_square.svg');}",
            "hash": "241fb15f-c955-4a16-bff6-63cb1e70c1a6"
        }, {
            "selector": ".aml_dk-style-square .aml_dk-channel-promotion",
            "style": ":root{--wpr-bg-021a08ab-dc3d-447f-a75a-e8ef74f1a199: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_promotion_square.svg');}",
            "hash": "021a08ab-dc3d-447f-a75a-e8ef74f1a199"
        }, {
            "selector": ".aml_dk-mobile.aml_dk-style-square .aml_dk-channel-facebook",
            "style": ":root{--wpr-bg-f9148330-e906-4394-aa5c-2843a8ba1df1: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_messenger_square.svg');}",
            "hash": "f9148330-e906-4394-aa5c-2843a8ba1df1"
        }, {
            "selector": ".aml_dk-mobile.aml_dk-style-square .aml_dk-channel-zalo",
            "style": ":root{--wpr-bg-102a6114-a3ab-4ac5-8bb7-6d7dff6882d6: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_zalo_square.svg');}",
            "hash": "102a6114-a3ab-4ac5-8bb7-6d7dff6882d6"
        }, {
            "selector": ".aml_dk-mobile.aml_dk-style-square .aml_dk-channel-click_to_call",
            "style": ":root{--wpr-bg-5b200597-9727-4b97-8501-d7c3004af6e3: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_click_to_call_square.svg');}",
            "hash": "5b200597-9727-4b97-8501-d7c3004af6e3"
        }, {
            "selector": ".aml_dk-mobile.aml_dk-style-square .aml_dk-channel-tawk_to",
            "style": ":root{--wpr-bg-7c90972e-55d8-489f-869f-87f7d615be63: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_tawkto_square.svg');}",
            "hash": "7c90972e-55d8-489f-869f-87f7d615be63"
        }, {
            "selector": ".aml_dk-mobile.aml_dk-style-square .aml_dk-channel-contact_form",
            "style": ":root{--wpr-bg-698809fa-65e1-4490-b6cb-5d59c446893e: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_contact_form_square.svg');}",
            "hash": "698809fa-65e1-4490-b6cb-5d59c446893e"
        }, {
            "selector": ".aml_dk-mobile.aml_dk-style-square .aml_dk-channel-google_map",
            "style": ":root{--wpr-bg-997bc749-3bdd-4f9e-9a9c-30faaecabbad: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_map_square.svg');}",
            "hash": "997bc749-3bdd-4f9e-9a9c-30faaecabbad"
        }, {
            "selector": ".aml_dk-mobile.aml_dk-style-square .aml_dk-channel-whatsapp",
            "style": ":root{--wpr-bg-6df1f33a-6191-4bf1-9819-fbe0d8c0e838: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_whatsapp_square.svg');}",
            "hash": "6df1f33a-6191-4bf1-9819-fbe0d8c0e838"
        }, {
            "selector": ".aml_dk-mobile.aml_dk-style-square .aml_dk-channel-download_doc",
            "style": ":root{--wpr-bg-81543743-7fb8-4a61-b9f2-f4001e22b0fe: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_download_doc_square.svg');}",
            "hash": "81543743-7fb8-4a61-b9f2-f4001e22b0fe"
        }, {
            "selector": ".aml_dk-mobile.aml_dk-style-square .aml_dk-channel-promotion",
            "style": ":root{--wpr-bg-b5d1f38f-c0b3-4a4f-98d0-d7ba2ee735d7: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_promotion_square.svg');}",
            "hash": "b5d1f38f-c0b3-4a4f-98d0-d7ba2ee735d7"
        }, {
            "selector": ".aml_dk-style-horizontal .aml_dk-channel-facebook",
            "style": ":root{--wpr-bg-c64b7c88-cb7d-45b3-bec3-f4bdeff7c4dc: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/Messenger_On.svg');}",
            "hash": "c64b7c88-cb7d-45b3-bec3-f4bdeff7c4dc"
        }, {
            "selector": ".aml_dk-style-horizontal .aml_dk-channel-zalo",
            "style": ":root{--wpr-bg-7a8b1d74-387e-4443-9480-1de00e6dc4ff: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/Zalo_On.svg');}",
            "hash": "7a8b1d74-387e-4443-9480-1de00e6dc4ff"
        }, {
            "selector": ".aml_dk-style-horizontal .aml_dk-channel-click_to_call",
            "style": ":root{--wpr-bg-6594462e-1a93-40f8-850a-2812d683522e: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/Call_On.svg');}",
            "hash": "6594462e-1a93-40f8-850a-2812d683522e"
        }, {
            "selector": ".aml_dk-style-horizontal .aml_dk-channel-tawk_to",
            "style": ":root{--wpr-bg-c442c35d-4279-4137-8b07-a7c1d1962957: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/ht_tawkto.svg');}",
            "hash": "c442c35d-4279-4137-8b07-a7c1d1962957"
        }, {
            "selector": ".aml_dk-style-horizontal .aml_dk-channel-contact_form",
            "style": ":root{--wpr-bg-a689eefe-e834-4deb-8caa-4300d251e20e: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/ht_contact_form.svg');}",
            "hash": "a689eefe-e834-4deb-8caa-4300d251e20e"
        }, {
            "selector": ".aml_dk-style-horizontal .aml_dk-channel-google_map",
            "style": ":root{--wpr-bg-db07b1b8-1842-4d20-997c-570807299910: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/Location.svg');}",
            "hash": "db07b1b8-1842-4d20-997c-570807299910"
        }, {
            "selector": ".aml_dk-style-horizontal .aml_dk-channel-whatsapp",
            "style": ":root{--wpr-bg-f538352c-6730-4d26-9efd-189112fe95cd: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/ht_whatsapp.svg');}",
            "hash": "f538352c-6730-4d26-9efd-189112fe95cd"
        }, {
            "selector": ".aml_dk-style-horizontal .aml_dk-channel-download_doc",
            "style": ":root{--wpr-bg-fcfcebb7-b96c-4831-931f-f2c6efa3a07b: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/ht_download_doc.svg');}",
            "hash": "fcfcebb7-b96c-4831-931f-f2c6efa3a07b"
        }, {
            "selector": ".aml_dk-style-horizontal .aml_dk-channel-promotion",
            "style": ":root{--wpr-bg-28536cc3-b9f5-48a8-8a11-946462f271f1: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_m_icon_light_promotion.svg');}",
            "hash": "28536cc3-b9f5-48a8-8a11-946462f271f1"
        }, {
            "selector": ".aml_dk-style-horizontal.dark .aml_dk-channel-facebook",
            "style": ":root{--wpr-bg-697b5f67-07c9-4d3b-ad3e-e863c5deccc9: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_icon_dark_messenger.svg');}",
            "hash": "697b5f67-07c9-4d3b-ad3e-e863c5deccc9"
        }, {
            "selector": ".aml_dk-style-horizontal.dark .aml_dk-channel-zalo",
            "style": ":root{--wpr-bg-c0231f8f-88ed-42be-88db-9569dafaa310: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_icon_dark_zalo.svg');}",
            "hash": "c0231f8f-88ed-42be-88db-9569dafaa310"
        }, {
            "selector": ".aml_dk-style-horizontal.dark .aml_dk-channel-click_to_call",
            "style": ":root{--wpr-bg-2cb060e1-50e2-457e-befd-d3ed46fae35d: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_icon_dark_click_to_call.svg');}",
            "hash": "2cb060e1-50e2-457e-befd-d3ed46fae35d"
        }, {
            "selector": ".aml_dk-style-horizontal.dark .aml_dk-channel-tawk_to",
            "style": ":root{--wpr-bg-fb02bc6e-4cc5-4b5d-84da-95f692dfc680: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_icon_dark_tawkto.svg');}",
            "hash": "fb02bc6e-4cc5-4b5d-84da-95f692dfc680"
        }, {
            "selector": ".aml_dk-style-horizontal.dark .aml_dk-channel-contact_form",
            "style": ":root{--wpr-bg-8cb90e9b-fbb0-4b43-9ec8-1ca78a35c7fe: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_icon_dark_contact_form.svg');}",
            "hash": "8cb90e9b-fbb0-4b43-9ec8-1ca78a35c7fe"
        }, {
            "selector": ".aml_dk-style-horizontal.dark .aml_dk-channel-google_map",
            "style": ":root{--wpr-bg-66af7255-3164-43a9-91de-3cc7c715162c: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_icon_dark_map.svg');}",
            "hash": "66af7255-3164-43a9-91de-3cc7c715162c"
        }, {
            "selector": ".aml_dk-style-horizontal.dark .aml_dk-channel-whatsapp",
            "style": ":root{--wpr-bg-e764d24f-b792-46cd-a9aa-19531ca536d2: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_icon_dark_whatsapp.svg');}",
            "hash": "e764d24f-b792-46cd-a9aa-19531ca536d2"
        }, {
            "selector": ".aml_dk-style-horizontal.dark .aml_dk-channel-download_doc",
            "style": ":root{--wpr-bg-634c6a3d-c893-4eca-b920-0eecaf4c5720: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_icon_dark_download_doc.svg');}",
            "hash": "634c6a3d-c893-4eca-b920-0eecaf4c5720"
        }, {
            "selector": ".aml_dk-style-horizontal-default .aml_dk-channel-facebook",
            "style": ":root{--wpr-bg-5823c000-3b5a-40da-b623-847a76199357: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_m_icon_messenger.svg');}",
            "hash": "5823c000-3b5a-40da-b623-847a76199357"
        }, {
            "selector": ".aml_dk-style-horizontal-default .aml_dk-channel-zalo",
            "style": ":root{--wpr-bg-c17c0b28-0eef-4714-bb6c-0af1eceffcf4: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_m_icon_zalo.svg');}",
            "hash": "c17c0b28-0eef-4714-bb6c-0af1eceffcf4"
        }, {
            "selector": ".aml_dk-style-horizontal-default .aml_dk-channel-click_to_call",
            "style": ":root{--wpr-bg-afbe941b-4f27-4852-a67f-3401868a84c8: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_m_icon_click_to_call.svg');}",
            "hash": "afbe941b-4f27-4852-a67f-3401868a84c8"
        }, {
            "selector": ".aml_dk-style-horizontal-default .aml_dk-channel-tawk_to",
            "style": ":root{--wpr-bg-cae5fd81-83f6-4c3d-817b-6ea6202a92b6: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_tawkto.svg');}",
            "hash": "cae5fd81-83f6-4c3d-817b-6ea6202a92b6"
        }, {
            "selector": ".aml_dk-style-horizontal-default .aml_dk-channel-contact_form",
            "style": ":root{--wpr-bg-b1e8851f-7f2d-4349-ac79-911d01f70963: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_contact_form.svg');}",
            "hash": "b1e8851f-7f2d-4349-ac79-911d01f70963"
        }, {
            "selector": ".aml_dk-style-horizontal-default .aml_dk-channel-google_map",
            "style": ":root{--wpr-bg-b0a12925-96db-4662-a24e-d1da23c65dfc: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_m_icon_map.svg');}",
            "hash": "b0a12925-96db-4662-a24e-d1da23c65dfc"
        }, {
            "selector": ".aml_dk-style-horizontal-default .aml_dk-channel-whatsapp",
            "style": ":root{--wpr-bg-8bc83ab4-35ec-482a-a399-cdc0c03201ab: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_whatsapp.svg');}",
            "hash": "8bc83ab4-35ec-482a-a399-cdc0c03201ab"
        }, {
            "selector": ".aml_dk-style-horizontal-default .aml_dk-channel-download_doc",
            "style": ":root{--wpr-bg-fd25fdcb-880a-4088-b200-c09c0b850b37: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_download_doc.svg');}",
            "hash": "fd25fdcb-880a-4088-b200-c09c0b850b37"
        }, {
            "selector": ".aml_dk-style-horizontal-default .aml_dk-channel-promotion",
            "style": ":root{--wpr-bg-41c8cfa7-9598-468a-80be-666316d8f6c2: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_promotion.svg');}",
            "hash": "41c8cfa7-9598-468a-80be-666316d8f6c2"
        }, {
            "selector": ".aml_dk-mobile.aml_dk-style-main-button .aml_dk-channel-facebook",
            "style": ":root{--wpr-bg-0c61249a-674f-4945-8ae6-f3e1531fe894: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_messenger.svg');}",
            "hash": "0c61249a-674f-4945-8ae6-f3e1531fe894"
        }, {
            "selector": ".aml_dk-mobile.aml_dk-style-main-button .aml_dk-channel-zalo",
            "style": ":root{--wpr-bg-6b30fa55-67e0-429d-b4c8-46d689c9adb4: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_m_icon_zalo.svg');}",
            "hash": "6b30fa55-67e0-429d-b4c8-46d689c9adb4"
        }, {
            "selector": ".aml_dk-mobile.aml_dk-style-main-button .aml_dk-channel-click_to_call",
            "style": ":root{--wpr-bg-975e7a85-3c72-4fc4-ae15-3612385d7c37: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_click_to_call.svg');}",
            "hash": "975e7a85-3c72-4fc4-ae15-3612385d7c37"
        }, {
            "selector": ".aml_dk-mobile.aml_dk-style-main-button .aml_dk-channel-tawk_to",
            "style": ":root{--wpr-bg-c664ae06-c336-4f25-9126-a44f36d0e8bb: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_tawkto.svg');}",
            "hash": "c664ae06-c336-4f25-9126-a44f36d0e8bb"
        }, {
            "selector": ".aml_dk-mobile.aml_dk-style-main-button .aml_dk-channel-contact_form",
            "style": ":root{--wpr-bg-57a4c7d0-ae87-4607-9a21-2e8b842ddae3: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_contact_form.svg');}",
            "hash": "57a4c7d0-ae87-4607-9a21-2e8b842ddae3"
        }, {
            "selector": ".aml_dk-mobile.aml_dk-style-main-button .aml_dk-channel-google_map",
            "style": ":root{--wpr-bg-bc04a18d-2c00-46f4-be0f-bb1623f97ff3: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_map.svg');}",
            "hash": "bc04a18d-2c00-46f4-be0f-bb1623f97ff3"
        }, {
            "selector": ".aml_dk-mobile.aml_dk-style-main-button .aml_dk-channel-whatsapp",
            "style": ":root{--wpr-bg-fb1cbc8c-2639-4cb5-9481-6f44511b8a4a: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_whatsapp.svg');}",
            "hash": "fb1cbc8c-2639-4cb5-9481-6f44511b8a4a"
        }, {
            "selector": ".aml_dk-mobile.aml_dk-style-main-button .aml_dk-channel-download_doc",
            "style": ":root{--wpr-bg-1852b3e4-eb2d-47c3-8804-87810277803e: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_download_doc.svg');}",
            "hash": "1852b3e4-eb2d-47c3-8804-87810277803e"
        }, {
            "selector": ".aml_dk-mobile.aml_dk-style-main-button .aml_dk-channel-promotion",
            "style": ":root{--wpr-bg-74390398-4602-403d-95c3-99f3942a246a: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_m_icon_promotion.svg');}",
            "hash": "74390398-4602-403d-95c3-99f3942a246a"
        }, {
            "selector": ".aml_dk-style-gradient-default .aml_dk-channel-facebook",
            "style": ":root{--wpr-bg-45715733-f8a0-4036-97bb-b85af8a94a80: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/Messenger_On.svg');}",
            "hash": "45715733-f8a0-4036-97bb-b85af8a94a80"
        }, {
            "selector": ".aml_dk-style-gradient-default .aml_dk-channel-zalo",
            "style": ":root{--wpr-bg-74ae8705-2a9b-4d39-bb82-90883ab75c00: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/Zalo_On.svg');}",
            "hash": "74ae8705-2a9b-4d39-bb82-90883ab75c00"
        }, {
            "selector": ".aml_dk-style-gradient-default .aml_dk-channel-click_to_call",
            "style": ":root{--wpr-bg-77dd283b-9755-4a6c-813a-f0d8db4a55b5: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/Call_On.svg');}",
            "hash": "77dd283b-9755-4a6c-813a-f0d8db4a55b5"
        }, {
            "selector": ".aml_dk-style-gradient-default .aml_dk-channel-tawk_to",
            "style": ":root{--wpr-bg-3d481523-0dcf-492f-b0ef-267dcd7bdc12: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/ht_tawkto.svg');}",
            "hash": "3d481523-0dcf-492f-b0ef-267dcd7bdc12"
        }, {
            "selector": ".aml_dk-style-gradient-default .aml_dk-channel-contact_form",
            "style": ":root{--wpr-bg-6ab25596-c83b-4815-83b7-9d91234ff819: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/ht_contact_form.svg');}",
            "hash": "6ab25596-c83b-4815-83b7-9d91234ff819"
        }, {
            "selector": ".aml_dk-style-gradient-default .aml_dk-channel-google_map",
            "style": ":root{--wpr-bg-3bbc1e9b-a7e7-450a-b50d-cc0a7c343865: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/Location.svg');}",
            "hash": "3bbc1e9b-a7e7-450a-b50d-cc0a7c343865"
        }, {
            "selector": ".aml_dk-style-gradient-default .aml_dk-channel-whatsapp",
            "style": ":root{--wpr-bg-c71d5fba-a1aa-4949-afd2-bd0231084c7c: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/ht_whatsapp.svg');}",
            "hash": "c71d5fba-a1aa-4949-afd2-bd0231084c7c"
        }, {
            "selector": ".aml_dk-style-gradient-default .aml_dk-channel-download_doc",
            "style": ":root{--wpr-bg-c79a6e75-f7b4-4819-969c-8945d165e07f: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/ht_download_doc.svg');}",
            "hash": "c79a6e75-f7b4-4819-969c-8945d165e07f"
        }, {
            "selector": ".aml_dk-style-gradient-default .aml_dk-channel-promotion",
            "style": ":root{--wpr-bg-b5b4b6a0-71e4-4414-ae98-e92b436ac7a7: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/ht_promotion.svg');}",
            "hash": "b5b4b6a0-71e4-4414-ae98-e92b436ac7a7"
        }, {
            "selector": ".aml_dk-style-gradient-default.dark .aml_dk-channel-facebook",
            "style": ":root{--wpr-bg-98b93dfa-2771-40ac-a31a-9fed07a36c2f: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_dark_messenger.svg');}",
            "hash": "98b93dfa-2771-40ac-a31a-9fed07a36c2f"
        }, {
            "selector": ".aml_dk-style-gradient-default.dark .aml_dk-channel-zalo",
            "style": ":root{--wpr-bg-54818493-6585-4ff7-b090-bc824852dd42: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_dark_zalo.svg');}",
            "hash": "54818493-6585-4ff7-b090-bc824852dd42"
        }, {
            "selector": ".aml_dk-style-gradient-default.dark .aml_dk-channel-click_to_call",
            "style": ":root{--wpr-bg-1ae43a8e-d08d-483b-9995-df442cf594d0: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_dark_click_to_call.svg');}",
            "hash": "1ae43a8e-d08d-483b-9995-df442cf594d0"
        }, {
            "selector": ".aml_dk-style-gradient-default.dark .aml_dk-channel-tawk_to",
            "style": ":root{--wpr-bg-c85fec5f-bb3e-45ba-8034-7d8d825695ea: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_dark_tawkto.svg');}",
            "hash": "c85fec5f-bb3e-45ba-8034-7d8d825695ea"
        }, {
            "selector": ".aml_dk-style-gradient-default.dark .aml_dk-channel-contact_form",
            "style": ":root{--wpr-bg-cb08045a-ba62-4930-9c2a-5cc66fafed33: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_dark_contact_form.svg');}",
            "hash": "cb08045a-ba62-4930-9c2a-5cc66fafed33"
        }, {
            "selector": ".aml_dk-style-gradient-default.dark .aml_dk-channel-google_map",
            "style": ":root{--wpr-bg-474fe21d-1667-4b31-8349-09077137d39a: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_dark_map.svg');}",
            "hash": "474fe21d-1667-4b31-8349-09077137d39a"
        }, {
            "selector": ".aml_dk-style-gradient-default.dark .aml_dk-channel-whatsapp",
            "style": ":root{--wpr-bg-d43ebe4b-0380-4c4d-aaa3-8fd0df23ce25: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_dark_whatsapp.svg');}",
            "hash": "d43ebe4b-0380-4c4d-aaa3-8fd0df23ce25"
        }, {
            "selector": ".aml_dk-style-gradient-default.dark .aml_dk-channel-download_doc",
            "style": ":root{--wpr-bg-736e11c8-c767-40cf-9049-681953b29bb9: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/widget_icon_dark_download_doc.svg');}",
            "hash": "736e11c8-c767-40cf-9049-681953b29bb9"
        }, {
            "selector": ".aml-fb-customerchat-close",
            "style": ":root{--wpr-bg-b8c9983b-e6ad-460c-9850-fdff0d77f846: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/css\/images\/fb_icon_close.svg');}",
            "hash": "b8c9983b-e6ad-460c-9850-fdff0d77f846"
        }, {
            "selector": ".aml_dk-channel-google_map",
            "style": ":root{--wpr-bg-3947f059-38e9-4185-94f7-da6f373a7db8: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_icon_map.svg');}",
            "hash": "3947f059-38e9-4185-94f7-da6f373a7db8"
        }, {
            "selector": ".aml_dk-channel-zalo",
            "style": ":root{--wpr-bg-6ecde87e-b6d7-41f9-a868-3fb2c4d0e3b7: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_icon_zalo.svg');}",
            "hash": "6ecde87e-b6d7-41f9-a868-3fb2c4d0e3b7"
        }, {
            "selector": ".aml_dk-channel-facebook",
            "style": ":root{--wpr-bg-74c52e9d-5b78-4f5e-b430-8d0b49827e61: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_icon_messenger.svg');}",
            "hash": "74c52e9d-5b78-4f5e-b430-8d0b49827e61"
        }, {
            "selector": ".aml_dk-channel-click_to_call",
            "style": ":root{--wpr-bg-f96a4da4-265f-4b29-8995-0008ae0d35e6: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/Simple-Contact\/assets\/images\/widget_icon_click_to_call.svg');}",
            "hash": "f96a4da4-265f-4b29-8995-0008ae0d35e6"
        }, {
            "selector": ".ui-widget-content",
            "style": ":root{--wpr-bg-8526a997-8621-4fd1-b0a5-c8cd32e41859: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/woocommerce-bookings\/dist\/jquery-ui\/images\/ui-bg_flat_75_ffffff_40x100.png');}",
            "hash": "8526a997-8621-4fd1-b0a5-c8cd32e41859"
        }, {
            "selector": ".ui-widget-header",
            "style": ":root{--wpr-bg-9b0b0108-c804-4350-876e-685c86dfdc07: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/woocommerce-bookings\/dist\/jquery-ui\/images\/ui-bg_highlight-soft_75_cccccc_1x100.png');}",
            "hash": "9b0b0108-c804-4350-876e-685c86dfdc07"
        }, {
            "selector": ".ui-state-default,.ui-widget-content .ui-state-default,.ui-widget-header .ui-state-default",
            "style": ":root{--wpr-bg-4462f891-3a7b-4a05-92aa-07ae15e64012: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/woocommerce-bookings\/dist\/jquery-ui\/images\/ui-bg_glass_75_e6e6e6_1x400.png');}",
            "hash": "4462f891-3a7b-4a05-92aa-07ae15e64012"
        }, {
            "selector": ".ui-state-hover,.ui-widget-content .ui-state-hover,.ui-widget-header .ui-state-hover,.ui-state-focus,.ui-widget-content .ui-state-focus,.ui-widget-header .ui-state-focus",
            "style": ":root{--wpr-bg-86eda78b-d7b2-400b-95f5-39c4a19c4bdc: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/woocommerce-bookings\/dist\/jquery-ui\/images\/ui-bg_glass_75_dadada_1x400.png');}",
            "hash": "86eda78b-d7b2-400b-95f5-39c4a19c4bdc"
        }, {
            "selector": ".ui-state-active,.ui-widget-content .ui-state-active,.ui-widget-header .ui-state-active",
            "style": ":root{--wpr-bg-9955fac5-241c-42e0-aadd-519f169f6ca1: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/woocommerce-bookings\/dist\/jquery-ui\/images\/ui-bg_glass_65_ffffff_1x400.png');}",
            "hash": "9955fac5-241c-42e0-aadd-519f169f6ca1"
        }, {
            "selector": ".ui-state-highlight,.ui-widget-content .ui-state-highlight,.ui-widget-header .ui-state-highlight",
            "style": ":root{--wpr-bg-dbe7c713-619e-4ed7-9b3c-8a85ffe3c9b8: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/woocommerce-bookings\/dist\/jquery-ui\/images\/ui-bg_glass_55_fbf9ee_1x400.png');}",
            "hash": "dbe7c713-619e-4ed7-9b3c-8a85ffe3c9b8"
        }, {
            "selector": ".ui-state-error,.ui-widget-content .ui-state-error,.ui-widget-header .ui-state-error",
            "style": ":root{--wpr-bg-92f370df-1f78-4811-881c-8dd80eb77657: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/woocommerce-bookings\/dist\/jquery-ui\/images\/ui-bg_glass_95_fef1ec_1x400.png');}",
            "hash": "92f370df-1f78-4811-881c-8dd80eb77657"
        }, {
            "selector": ".ui-widget-overlay",
            "style": ":root{--wpr-bg-ac5937ae-e7a7-4bef-8609-f6e874703302: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/woocommerce-bookings\/dist\/jquery-ui\/images\/ui-bg_flat_0_aaaaaa_40x100.png');}",
            "hash": "ac5937ae-e7a7-4bef-8609-f6e874703302"
        }, {
            "selector": ".ui-widget-shadow",
            "style": ":root{--wpr-bg-2f3ec0c5-af2b-41de-9203-355837724d23: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/woocommerce-bookings\/dist\/jquery-ui\/images\/ui-bg_flat_0_aaaaaa_40x100.png');}",
            "hash": "2f3ec0c5-af2b-41de-9203-355837724d23"
        }, {
            "selector": ".ui-icon,.ui-widget-content .ui-icon",
            "style": ":root{--wpr-bg-7bfe690a-5494-4392-acf6-abd1edf70a3e: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/woocommerce-bookings\/dist\/jquery-ui\/images\/ui-icons_222222_256x240.png');}",
            "hash": "7bfe690a-5494-4392-acf6-abd1edf70a3e"
        }, {
            "selector": ".ui-widget-header .ui-icon",
            "style": ":root{--wpr-bg-69a2d081-357f-4f9b-bea9-cfeffc5b0878: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/woocommerce-bookings\/dist\/jquery-ui\/images\/ui-icons_222222_256x240.png');}",
            "hash": "69a2d081-357f-4f9b-bea9-cfeffc5b0878"
        }, {
            "selector": ".ui-state-default .ui-icon",
            "style": ":root{--wpr-bg-1fa98d46-6561-4845-9e6c-f518bdcd247f: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/woocommerce-bookings\/dist\/jquery-ui\/images\/ui-icons_888888_256x240.png');}",
            "hash": "1fa98d46-6561-4845-9e6c-f518bdcd247f"
        }, {
            "selector": ".ui-state-hover .ui-icon,.ui-state-focus .ui-icon",
            "style": ":root{--wpr-bg-c2f446be-81d1-4945-b5cd-ec1ced27da32: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/woocommerce-bookings\/dist\/jquery-ui\/images\/ui-icons_454545_256x240.png');}",
            "hash": "c2f446be-81d1-4945-b5cd-ec1ced27da32"
        }, {
            "selector": ".ui-state-active .ui-icon",
            "style": ":root{--wpr-bg-1651ae9c-bc67-44b8-a727-610d40da8de0: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/woocommerce-bookings\/dist\/jquery-ui\/images\/ui-icons_454545_256x240.png');}",
            "hash": "1651ae9c-bc67-44b8-a727-610d40da8de0"
        }, {
            "selector": ".ui-state-highlight .ui-icon",
            "style": ":root{--wpr-bg-5dca3301-a46f-45f9-a9c5-0a28ea3d4f0e: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/woocommerce-bookings\/dist\/jquery-ui\/images\/ui-icons_2e83ff_256x240.png');}",
            "hash": "5dca3301-a46f-45f9-a9c5-0a28ea3d4f0e"
        }, {
            "selector": ".ui-state-error .ui-icon,.ui-state-error-text .ui-icon",
            "style": ":root{--wpr-bg-abe0a958-3902-4ce6-9554-2aa507085b1e: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/woocommerce-bookings\/dist\/jquery-ui\/images\/ui-icons_cd0a0a_256x240.png');}",
            "hash": "abe0a958-3902-4ce6-9554-2aa507085b1e"
        }, {
            "selector": ".wc-bookings-date-picker .ui-icon-circle-triangle-e",
            "style": ":root{--wpr-bg-e981ff3b-c6e7-4225-82ea-42a0cb670e96: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/woocommerce-bookings\/dist\/images\/ui-icons_ffffff_256x240.png');}",
            "hash": "e981ff3b-c6e7-4225-82ea-42a0cb670e96"
        }, {
            "selector": ".wc-bookings-date-picker .ui-icon-circle-triangle-w",
            "style": ":root{--wpr-bg-2e1a5f9e-39d2-4c02-aed5-24e7baafe2c7: url('..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/..\/plugins\/woocommerce-bookings\/dist\/images\/ui-icons_ffffff_256x240.png');}",
            "hash": "2e1a5f9e-39d2-4c02-aed5-24e7baafe2c7"
        }, {
            "selector": ".ilightbox-loader.metro-white div",
            "style": ":root{--wpr-bg-2bc8528f-b38e-4c2e-b1ac-fc0f1f46519b: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/preloader.gif');}",
            "hash": "2bc8528f-b38e-4c2e-b1ac-fc0f1f46519b"
        }, {
            "selector": ".ilightbox-holder.metro-white .ilightbox-container .ilightbox-caption",
            "style": ":root{--wpr-bg-a19baacf-66be-4d0c-9889-009f77f24408: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/caption-bg.png');}",
            "hash": "a19baacf-66be-4d0c-9889-009f77f24408"
        }, {
            "selector": ".ilightbox-holder.metro-white .ilightbox-container .ilightbox-social",
            "style": ":root{--wpr-bg-6b95bbee-e311-43c5-abc0-6c7217ad6051: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/social-bg.png');}",
            "hash": "6b95bbee-e311-43c5-abc0-6c7217ad6051"
        }, {
            "selector": ".ilightbox-holder.metro-white .ilightbox-alert",
            "style": ":root{--wpr-bg-1d11ff9b-6edd-4bd3-9d89-5b181fc65414: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/alert.png');}",
            "hash": "1d11ff9b-6edd-4bd3-9d89-5b181fc65414"
        }, {
            "selector": ".ilightbox-toolbar.metro-white a",
            "style": ":root{--wpr-bg-80537151-a47e-4c53-8ab8-4898dfc7293c: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/buttons.png');}",
            "hash": "80537151-a47e-4c53-8ab8-4898dfc7293c"
        }, {
            "selector": ".ilightbox-thumbnails.metro-white .ilightbox-thumbnails-grid .ilightbox-thumbnail .ilightbox-thumbnail-video",
            "style": ":root{--wpr-bg-d57b3611-f7ae-4f7a-bdec-1e9ce3fc51a1: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/thumb-overlay-play.png');}",
            "hash": "d57b3611-f7ae-4f7a-bdec-1e9ce3fc51a1"
        }, {
            "selector": ".ilightbox-button.ilightbox-next-button.metro-white,.ilightbox-button.ilightbox-prev-button.metro-white",
            "style": ":root{--wpr-bg-e56ac618-fe08-4eef-983a-3e38ab7d435f: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/arrows_vertical.png');}",
            "hash": "e56ac618-fe08-4eef-983a-3e38ab7d435f"
        }, {
            "selector": ".fusion-audio.fusion-audio.dark-controls .mejs-button>button",
            "style": ":root{--wpr-bg-caa0cae5-c9bb-4505-8402-e9b9361c53f0: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/mejs-controls-dark.svg');}",
            "hash": "caa0cae5-c9bb-4505-8402-e9b9361c53f0"
        }, {
            "selector": ".isMobile .ilightbox-toolbar.metro-white a.ilightbox-fullscreen",
            "style": ":root{--wpr-bg-5d954de8-cf4b-4af9-bd2f-fa5bbd9c4b52: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/fullscreen-icon-64.png');}",
            "hash": "5d954de8-cf4b-4af9-bd2f-fa5bbd9c4b52"
        }, {
            "selector": ".isMobile .ilightbox-toolbar.metro-white a.ilightbox-fullscreen",
            "style": ":root{--wpr-bg-a9bab917-e6d0-4a50-a058-a4e66fb3f002: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/fullscreen-hover-icon-64.png');}",
            "hash": "a9bab917-e6d0-4a50-a058-a4e66fb3f002"
        }, {
            "selector": ".isMobile .ilightbox-toolbar.metro-white a.ilightbox-close",
            "style": ":root{--wpr-bg-7fda6a99-5081-40fd-a11a-d49a6e73d675: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/x-mark-icon-64.png');}",
            "hash": "7fda6a99-5081-40fd-a11a-d49a6e73d675"
        }, {
            "selector": ".isMobile .ilightbox-toolbar.metro-white a.ilightbox-close",
            "style": ":root{--wpr-bg-1238a48d-0290-4d8c-b4bc-d3df9c860dee: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/x-mark-hover-icon-64.png');}",
            "hash": "1238a48d-0290-4d8c-b4bc-d3df9c860dee"
        }, {
            "selector": ".isMobile .ilightbox-toolbar.metro-white a.ilightbox-next-button",
            "style": ":root{--wpr-bg-50f8c8ed-7973-441a-bbd4-e6d16127f0ee: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/arrow-next-icon-64.png');}",
            "hash": "50f8c8ed-7973-441a-bbd4-e6d16127f0ee"
        }, {
            "selector": ".isMobile .ilightbox-toolbar.metro-white a.ilightbox-next-button",
            "style": ":root{--wpr-bg-3eac2700-2579-4c85-ad3a-cecc93ab87ab: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/arrow-next-hover-icon-64.png');}",
            "hash": "3eac2700-2579-4c85-ad3a-cecc93ab87ab"
        }, {
            "selector": ".isMobile .ilightbox-toolbar.metro-white a.ilightbox-next-button.disabled",
            "style": ":root{--wpr-bg-69d81fac-6891-415c-9a8c-5b914b51e3ce: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/arrow-next-icon-64.png');}",
            "hash": "69d81fac-6891-415c-9a8c-5b914b51e3ce"
        }, {
            "selector": ".isMobile .ilightbox-toolbar.metro-white a.ilightbox-prev-button",
            "style": ":root{--wpr-bg-b97c681c-c386-4c14-a7f7-eaa76f9f589f: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/arrow-prev-icon-64.png');}",
            "hash": "b97c681c-c386-4c14-a7f7-eaa76f9f589f"
        }, {
            "selector": ".isMobile .ilightbox-toolbar.metro-white a.ilightbox-prev-button",
            "style": ":root{--wpr-bg-bc91821e-ddb5-448b-9531-93795ee84827: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/arrow-prev-hover-icon-64.png');}",
            "hash": "bc91821e-ddb5-448b-9531-93795ee84827"
        }, {
            "selector": ".isMobile .ilightbox-toolbar.metro-white a.ilightbox-prev-button.disabled",
            "style": ":root{--wpr-bg-068a5ed2-8ab5-44e7-aea5-5960d3b463d0: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/arrow-prev-icon-64.png');}",
            "hash": "068a5ed2-8ab5-44e7-aea5-5960d3b463d0"
        }, {
            "selector": ".isMobile .ilightbox-toolbar.metro-white a.ilightbox-play",
            "style": ":root{--wpr-bg-39d3851c-a293-49b0-b6e3-d0b3154c2f7e: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/play-icon-64.png');}",
            "hash": "39d3851c-a293-49b0-b6e3-d0b3154c2f7e"
        }, {
            "selector": ".isMobile .ilightbox-toolbar.metro-white a.ilightbox-play",
            "style": ":root{--wpr-bg-f473fa15-76d6-4247-a9c5-24eabead5ad6: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/play-hover-icon-64.png');}",
            "hash": "f473fa15-76d6-4247-a9c5-24eabead5ad6"
        }, {
            "selector": ".isMobile .ilightbox-toolbar.metro-white a.ilightbox-pause",
            "style": ":root{--wpr-bg-77bee737-e6f6-4184-9e03-2eb0220131e0: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/pause-icon-64.png');}",
            "hash": "77bee737-e6f6-4184-9e03-2eb0220131e0"
        }, {
            "selector": ".isMobile .ilightbox-toolbar.metro-white a.ilightbox-pause",
            "style": ":root{--wpr-bg-25f6f378-14ec-48c4-bc3c-e00bdc8cc6f1: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/pause-hover-icon-64.png');}",
            "hash": "25f6f378-14ec-48c4-bc3c-e00bdc8cc6f1"
        }, {
            "selector": ".ilightbox-button.ilightbox-next-button.metro-white.horizontal,.ilightbox-button.ilightbox-prev-button.metro-white.horizontal",
            "style": ":root{--wpr-bg-5c448b83-e6c6-4aba-88f5-f75bba4ad1d8: url('https:\/\/wincartrading.com.vn\/wp-content\/plugins\/fusion-builder\/assets\/images\/iLightbox\/metro-white-skin\/arrows_horizontal.png');}",
            "hash": "5c448b83-e6c6-4aba-88f5-f75bba4ad1d8"
        }];
        const rocket_excluded_pairs = [];
    </script>


</head>

<body class="home page-template page-template-100-width page-template-100-width-php page page-id-19 theme-Avada woocommerce-no-js awb-no-sidebars fusion-image-hovers fusion-pagination-sizing fusion-button_type-flat fusion-button_span-no fusion-button_gradient-linear avada-image-rollover-circle-yes avada-image-rollover-yes avada-image-rollover-direction-left fusion-body ltr fusion-sticky-header no-tablet-sticky-header no-mobile-sticky-header no-mobile-slidingbar no-mobile-totop avada-has-rev-slider-styles fusion-disable-outline fusion-sub-menu-fade mobile-logo-pos-left layout-wide-mode avada-has-boxed-modal-shadow-none layout-scroll-offset-full avada-has-zero-margin-offset-top fusion-top-header menu-text-align-center fusion-woo-product-design-classic fusion-woo-shop-page-columns-4 fusion-woo-related-columns-4 fusion-woo-archive-page-columns-3 avada-has-woo-gallery-disabled woo-sale-badge-circle woo-outofstock-badge-top_bar mobile-menu-design-classic fusion-show-pagination-text fusion-header-layout-v3 avada-responsive avada-footer-fx-none avada-menu-highlight-style-bar fusion-search-form-clean fusion-main-menu-search-overlay fusion-avatar-circle avada-dropdown-styles avada-blog-layout-large avada-blog-archive-layout-large avada-header-shadow-no avada-menu-icon-position-left avada-has-megamenu-shadow avada-has-mobile-menu-search avada-has-main-nav-search-icon avada-has-breadcrumb-mobile-hidden avada-has-titlebar-hide avada-header-border-color-full-transparent avada-has-slidingbar-widgets avada-has-slidingbar-position-top avada-slidingbar-toggle-style-circle avada-has-slidingbar-sticky avada-has-pagination-width_height avada-flyout-menu-direction-fade avada-ec-views-v1" data-awb-post-id="19">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    <div id="boxed-wrapper">
        <div id="wrapper" class="fusion-wrapper">
            <div id="home" style="position:relative;top:-1px;"></div>
            <div class="fusion-tb-header">
                <div class="fusion-fullwidth fullwidth-box fusion-builder-row-1 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling fusion-sticky-container fusion-custom-z-index" style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-z-index:20051;--awb-padding-top:10px;--awb-padding-right:30px;--awb-padding-bottom:10px;--awb-padding-left:30px;--awb-padding-top-small:0px;--awb-padding-bottom-small:0px;--awb-margin-top-small:0px;--awb-margin-bottom-small:0px;--awb-background-color:#ffffff;--awb-sticky-background-color:#ffffff !important;--awb-flex-wrap:wrap;" data-transition-offset="100" data-scroll-offset="0" data-sticky-small-visibility="1" data-sticky-medium-visibility="1" data-sticky-large-visibility="1">
                    <div class="fusion-builder-row fusion-row fusion-flex-align-items-stretch fusion-flex-content-wrap" style="max-width:1144px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                        <div class="fusion-layout-column fusion_builder_column fusion-builder-column-0 fusion-flex-column" style="--awb-bg-size:cover;--awb-width-large:15%;--awb-margin-top-large:10px;--awb-spacing-right-large:12.8%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:12.8%;--awb-width-medium:20%;--awb-order-medium:0;--awb-spacing-right-medium:9.6%;--awb-spacing-left-medium:9.6%;--awb-width-small:25%;--awb-order-small:0;--awb-spacing-right-small:7.68%;--awb-spacing-left-small:7.68%;">
                            <div class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-center fusion-content-layout-column">
                                <div class="fusion-image-element sm-text-align-left" style="--awb-max-width:125px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);"><span class=" fusion-imageframe imageframe-none imageframe-1 hover-type-none"><a class="fusion-no-lightbox" href="index.html" target="_self" aria-label="wincar-logo"><img fetchpriority="high" decoding="async" width="300" height="300" alt="WINCAR TRADING" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20300'%3E%3C/svg%3E" class="img-responsive wp-image-17" data-lazy-src="wp-content/uploads/2023/12/WINCAR-logo-new.png" /><noscript><img fetchpriority="high" decoding="async" width="300" height="300" alt="WINCAR TRADING" src="wp-content/uploads/2023/12/300x300xWINCAR-logo-new.png.pagespeed.ic.IDUA5usC2p.png" class="img-responsive wp-image-17" /></noscript></a></span></div>
                            </div>
                        </div>
                        <div class="fusion-layout-column fusion_builder_column fusion-builder-column-1 fusion-flex-column" style="--awb-bg-size:cover;--awb-border-color:#101827;--awb-border-style:solid;--awb-width-large:85%;--awb-margin-top-large:10px;--awb-spacing-right-large:2.2588235294118%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:2.2588235294118%;--awb-width-medium:80%;--awb-order-medium:0;--awb-spacing-right-medium:2.4%;--awb-spacing-left-medium:2.4%;--awb-width-small:75%;--awb-order-small:2;--awb-spacing-right-small:2.56%;--awb-spacing-left-small:2.56%;">
                            <div class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-end fusion-content-layout-row fusion-flex-align-items-flex-end">
                                <div class="fusion-builder-row fusion-builder-row-inner fusion-row fusion-flex-align-items-stretch fusion-flex-content-wrap" style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                                    <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-0 fusion_builder_column_inner_1_1 1_1 fusion-flex-column fusion-display-normal-only" style="--awb-bg-size:cover;--awb-border-color:rgba(16,25,40,0.08);--awb-border-bottom:1px;--awb-border-style:solid;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                        <div class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-end fusion-content-layout-row">
                                            <nav class="awb-menu awb-menu_row awb-menu_em-hover mobile-mode-collapse-to-button awb-menu_icons-left awb-menu_dc-yes mobile-trigger-fullwidth-off awb-menu_mobile-toggle awb-menu_indent-left mobile-size-full-absolute loading mega-menu-loading awb-menu_desktop awb-menu_dropdown awb-menu_expand-right awb-menu_transition-fade fusion-no-small-visibility fusion-no-medium-visibility" style="--awb-font-size:13px;--awb-line-height:1.7;--awb-gap:20px;--awb-letter-spacing:1px;--awb-main-justify-content:flex-start;--awb-mobile-justify:flex-start;--awb-mobile-caret-left:auto;--awb-mobile-caret-right:0;--awb-fusion-font-family-typography:&quot;Inter&quot;;--awb-fusion-font-style-typography:normal;--awb-fusion-font-weight-typography:500;--awb-fusion-font-family-submenu-typography:inherit;--awb-fusion-font-style-submenu-typography:normal;--awb-fusion-font-weight-submenu-typography:400;--awb-fusion-font-family-mobile-typography:inherit;--awb-fusion-font-style-mobile-typography:normal;--awb-fusion-font-weight-mobile-typography:400;" aria-label="Top Navigation" data-breakpoint="1024" data-count="0" data-transition-type="fade" data-transition-time="300"><button type="button" class="awb-menu__m-toggle awb-menu__m-toggle_no-text" aria-expanded="false" aria-controls="menu-top-navigation"><span class="awb-menu__m-toggle-inner"><span class="collapsed-nav-text"><span class="screen-reader-text">Toggle Navigation</span></span><span class="awb-menu__m-collapse-icon awb-menu__m-collapse-icon_no-text"><span class="awb-menu__m-collapse-icon-open awb-menu__m-collapse-icon-open_no-text fa-bars fas"></span><span class="awb-menu__m-collapse-icon-close awb-menu__m-collapse-icon-close_no-text fa-times fas"></span></span></span></button>
                                                <ul id="menu-top-navigation" class="fusion-menu awb-menu__main-ul awb-menu__main-ul_row">
                                                    <li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97 awb-menu__li awb-menu__main-li awb-menu__main-li_regular" data-item-id="97"><span class="awb-menu__main-background-default awb-menu__main-background-default_fade"></span><span class="awb-menu__main-background-active awb-menu__main-background-active_fade"></span><a href="lien-he/index.html" class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Liên hệ</span></a></li>
                                                    <li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98 awb-menu__li awb-menu__main-li awb-menu__main-li_regular" data-item-id="98"><span class="awb-menu__main-background-default awb-menu__main-background-default_fade"></span><span class="awb-menu__main-background-active awb-menu__main-background-active_fade"></span><a href="tuyen-dung/index.html" class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Tuyển dụng</span></a></li>
                                                    <li id="menu-item-99" class="menu-item menu-item-type-custom menu-item-object-custom awb-menu__li_search-inline menu-item-99 awb-menu__li awb-menu__main-li" data-item-id="99"><span class="awb-menu__main-background-default awb-menu__main-background-default_fade"></span><span class="awb-menu__main-background-active awb-menu__main-background-active_fade"></span>
                                                        <div class="awb-menu__search-inline">
                                                            <form role="search" class="searchform fusion-search-form  fusion-search-form-clean" method="get" action="https://wincartrading.com.vn/">
                                                                <div class="fusion-search-form-content">
                                                                    <div class="fusion-search-field search-field">
                                                                        <label><span class="screen-reader-text">Search for:</span>
                                                                            <input type="search" value="" name="s" class="s" placeholder="Search..." required aria-required="true" aria-label="Search..." />
                                                                        </label>
                                                                    </div>
                                                                    <div class="fusion-search-button search-button">
                                                                        <input type="submit" class="fusion-search-submit searchsubmit" aria-label="Search" value="&#xf002;" />
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-1 fusion_builder_column_inner_1_1 1_1 fusion-flex-column" style="--awb-padding-top:12px;--awb-padding-bottom:12px;--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                        <div class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-end fusion-content-layout-row fusion-flex-align-items-center">
                                            <nav class="awb-menu awb-menu_row awb-menu_em-hover mobile-mode-collapse-to-button awb-menu_icons-left awb-menu_dc-yes mobile-trigger-fullwidth-off awb-menu_mobile-toggle awb-menu_indent-left mobile-size-full-absolute loading mega-menu-loading awb-menu_desktop awb-menu_dropdown awb-menu_expand-right awb-menu_transition-fade" style="--awb-font-size:15px;--awb-line-height:1.7;--awb-text-transform:none;--awb-gap:30px;--awb-letter-spacing:1px;--awb-submenu-border-radius-top-left:5px;--awb-submenu-border-radius-top-right:5px;--awb-submenu-border-radius-bottom-right:5px;--awb-submenu-border-radius-bottom-left:5px;--awb-submenu-space:4;--awb-main-justify-content:flex-start;--awb-mobile-nav-button-align-hor:flex-end;--awb-mobile-nav-items-height:60;--awb-mobile-trigger-color:var(--awb-color4);--awb-mobile-justify:flex-start;--awb-mobile-caret-left:auto;--awb-mobile-caret-right:0;--awb-fusion-font-family-typography:&quot;Inter&quot;;--awb-fusion-font-style-typography:normal;--awb-fusion-font-weight-typography:600;--awb-fusion-font-family-submenu-typography:inherit;--awb-fusion-font-style-submenu-typography:normal;--awb-fusion-font-weight-submenu-typography:400;--awb-fusion-font-family-mobile-typography:inherit;--awb-fusion-font-style-mobile-typography:normal;--awb-fusion-font-weight-mobile-typography:400;" aria-label="Main Menu" data-breakpoint="1024" data-count="1" data-transition-type="center-vertical" data-transition-time="300"><button type="button" class="awb-menu__m-toggle awb-menu__m-toggle_no-text" aria-expanded="false" aria-controls="menu-main-menu"><span class="awb-menu__m-toggle-inner"><span class="collapsed-nav-text"><span class="screen-reader-text">Toggle Navigation</span></span><span class="awb-menu__m-collapse-icon awb-menu__m-collapse-icon_no-text"><span class="awb-menu__m-collapse-icon-open awb-menu__m-collapse-icon-open_no-text fa-bars fas"></span><span class="awb-menu__m-collapse-icon-close awb-menu__m-collapse-icon-close_no-text fa-times fas"></span></span></span></button>
                                                <ul id="menu-main-menu" class="fusion-menu awb-menu__main-ul awb-menu__main-ul_row">
                                                    <li id="menu-item-57" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-57 awb-menu__li awb-menu__main-li awb-menu__main-li_regular" data-item-id="57"><span class="awb-menu__main-background-default awb-menu__main-background-default_center-vertical"></span><span class="awb-menu__main-background-active awb-menu__main-background-active_center-vertical"></span><a href="index.html" class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Trang chủ</span></a></li>
                                                    <li id="menu-item-60" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-60 awb-menu__li awb-menu__main-li awb-menu__main-li_regular" data-item-id="60"><span class="awb-menu__main-background-default awb-menu__main-background-default_center-vertical"></span><span class="awb-menu__main-background-active awb-menu__main-background-active_center-vertical"></span><a href="gioi-thieu/index.html" class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Giới thiệu</span><span class="awb-menu__open-nav-submenu-hover"></span></a><button type="button" aria-label="Open submenu of Giới thiệu" aria-expanded="false" class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
                                                        <ul class="awb-menu__sub-ul awb-menu__sub-ul_main">
                                                            <li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-61 awb-menu__li awb-menu__sub-li"><a href="gioi-thieu/van-hoa-wincar/index.html" class="awb-menu__sub-a"><span>Văn hóa WINCAR</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-62 awb-menu__li awb-menu__main-li awb-menu__main-li_regular" data-item-id="62"><span class="awb-menu__main-background-default awb-menu__main-background-default_center-vertical"></span><span class="awb-menu__main-background-active awb-menu__main-background-active_center-vertical"></span><a href="linh-vuc-hoat-dong/index.html" class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Lĩnh vực hoạt động</span><span class="awb-menu__open-nav-submenu-hover"></span></a><button type="button" aria-label="Open submenu of Lĩnh vực hoạt động" aria-expanded="false" class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
                                                        <ul class="awb-menu__sub-ul awb-menu__sub-ul_main">
                                                            <li id="menu-item-65" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65 awb-menu__li awb-menu__sub-li"><a href="linh-vuc-hoat-dong/nong-nghiep-wincar/index.html" class="awb-menu__sub-a"><span>Nông nghiệp WINCAR</span></a></li>
                                                            <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64 awb-menu__li awb-menu__sub-li"><a href="linh-vuc-hoat-dong/khoang-san-wincar/index.html" class="awb-menu__sub-a"><span>Khoáng sản WINCAR</span></a></li>
                                                            <li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63 awb-menu__li awb-menu__sub-li"><a href="linh-vuc-hoat-dong/dau-tu-xay-dung-wincar/index.html" class="awb-menu__sub-a"><span>Đầu tư – xây dựng WINCAR</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-66" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-66 awb-menu__li awb-menu__main-li awb-menu__main-li_regular" data-item-id="66"><span class="awb-menu__main-background-default awb-menu__main-background-default_center-vertical"></span><span class="awb-menu__main-background-active awb-menu__main-background-active_center-vertical"></span><a href="quan-he-co-dong/index.html" class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Quan hệ cổ đông</span><span class="awb-menu__open-nav-submenu-hover"></span></a><button type="button" aria-label="Open submenu of Quan hệ cổ đông" aria-expanded="false" class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
                                                        <ul class="awb-menu__sub-ul awb-menu__sub-ul_main">
                                                            <li id="menu-item-69" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-69 awb-menu__li awb-menu__sub-li"><a href="quan-he-co-dong/dieu-le-quy-che/index.html" class="awb-menu__sub-a"><span>Điều lệ quy chế</span></a></li>
                                                            <li id="menu-item-70" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70 awb-menu__li awb-menu__sub-li"><a href="quan-he-co-dong/thong-tin-co-dong/index.html" class="awb-menu__sub-a"><span>Thông tin cổ đông</span></a></li>
                                                            <li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68 awb-menu__li awb-menu__sub-li"><a href="quan-he-co-dong/bao-cao-thuong-nien/index.html" class="awb-menu__sub-a"><span>Báo cáo thường niên</span></a></li>
                                                            <li id="menu-item-67" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67 awb-menu__li awb-menu__sub-li"><a href="quan-he-co-dong/bao-cao-tai-chinh/index.html" class="awb-menu__sub-a"><span>Báo cáo tài chính</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-71 awb-menu__li awb-menu__main-li awb-menu__main-li_regular" data-item-id="71"><span class="awb-menu__main-background-default awb-menu__main-background-default_center-vertical"></span><span class="awb-menu__main-background-active awb-menu__main-background-active_center-vertical"></span><a href="tin-tuc/index.html" class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Tin tức</span><span class="awb-menu__open-nav-submenu-hover"></span></a><button type="button" aria-label="Open submenu of Tin tức" aria-expanded="false" class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
                                                        <ul class="awb-menu__sub-ul awb-menu__sub-ul_main">
                                                            <li id="menu-item-72" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-72 awb-menu__li awb-menu__sub-li"><a href="tin-tuc/hoat-dong-noi-bo/index.html" class="awb-menu__sub-a"><span>Hoạt động nội bộ</span></a></li>
                                                            <li id="menu-item-73" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73 awb-menu__li awb-menu__sub-li"><a href="tin-tuc/su-kien/index.html" class="awb-menu__sub-a"><span>Sự kiện</span></a></li>
                                                            <li id="menu-item-74" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74 awb-menu__li awb-menu__sub-li"><a href="tin-tuc/thong-cao-bao-chi/index.html" class="awb-menu__sub-a"><span>Thông cáo báo chí</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-58" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58 awb-menu__li awb-menu__main-li awb-menu__main-li_regular" data-item-id="58"><span class="awb-menu__main-background-default awb-menu__main-background-default_center-vertical"></span><span class="awb-menu__main-background-active awb-menu__main-background-active_center-vertical"></span><a href="cua-hang/index.html" class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Cửa hàng</span></a></li>
                                                    <li id="menu-item-75" class="menu-item menu-item-type-custom menu-item-object-custom empty-cart fusion-widget-cart fusion-menu-cart avada-main-menu-cart fusion-menu-cart-hide-empty-counter menu-item-75 awb-menu__li awb-menu__main-li awb-menu__main-li_regular" data-item-id="75"><span class="awb-menu__main-background-default awb-menu__main-background-default_center-vertical"></span><span class="awb-menu__main-background-active awb-menu__main-background-active_center-vertical"></span><a href="gio-hang/index.html" class="awb-menu__main-a awb-menu__main-a_regular awb-menu__main-a_icon-only fusion-flex-link"><span class="awb-menu__i awb-menu__i_main"><i class="glyphicon fa-shopping-cart fas" aria-hidden="true"></i></span><span class="menu-text menu-text_no-desktop">WooCommerce Cart</span><span class="fusion-widget-cart-number" style="" data-digits="1" data-cart-count="0">0</span><span class="awb-menu__open-nav-submenu-hover"></span></a>
                                                        <ul class="awb-menu__sub-ul awb-menu__sub-ul_main sub-menu avada-custom-menu-item-contents fusion-menu-cart-items avada-custom-menu-item-contents-empty"></ul>
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