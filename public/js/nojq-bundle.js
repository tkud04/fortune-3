    var slgb = document.getElementById("slg-black");
    var slgw = document.getElementById("slg-white");

	// Show an element
function sshow(elem) {
	elem.style.display = 'block';
};

// Hide an element
function hhide(elem) {
	elem.style.display = 'none';
}
	

window.onload = function() {
    const e = document.getElementsByTagName("html")[0],
        t = document.getElementsByTagName("body")[0],
        n = document.getElementById("mainn-header"),
        i = document.getElementById("page-content-container"),
        o = document.getElementById("togglemobh");
    let s = window.navigator.userAgent,
        a = !1,
        d = !1,
        l = !1,
        c = !1,
        r = !1,
        m = !1,
        g = document.getElementById("wpadminbar"),
        u = (document.getElementById("gdpr_bar"), !1),
        f = !1;
    s.indexOf("Edge") > -1 && (d = !0, e.classList.add("ms_edge")), window.addEventListener("touchstart", (function t() {
        f = !0, e.classList.add("touch-enabled"), window.removeEventListener("touchstart", t)
    }), !1);
    const v = navigator.userAgent.toLowerCase();
    a = v.match(/(iphone|ipod|ipad|android|iemobile)/), v.match(/(iphone|ipod)/) && (e.classList.add("iphone"), l = !0), v.match(/(ipad)/) && (e.classList.add("ipad"), c = !0), v.match(/(iphone|ipod|ipad)/) && (e.classList.add("ios"), r = !0), v.match(/(android)/) && (e.classList.add("android"), m = !0), navigator.vendor && navigator.vendor.indexOf("Apple") > -1 && navigator.userAgent && (e.classList.add("safari"), u = !0);
    let p = 0;
    void 0 !== g && null != g && (p += g.offsetHeight, x(), window.addEventListener("resize", x, !1), window.addEventListener("orientationchange", x, !1)), L(), B(), I(),
        function() {
            if (t.classList.contains("misshero") && void 0 !== n && null != n) {
                var e = n.getBoundingClientRect();
                e = e.height, i.style["padding-top"] = e + "px"
            }
        }(), window.addEventListener("resize", I, !1), window.addEventListener("orientationchange", I, !1), window.onscroll = function() {
            L(), B(), H()
        };
    var h = document.getElementById("header-nav-container");
	

    if (void 0 !== h && null != h) var w = h.offsetTop;

    function L() {
        window.pageYOffset > w ? (e.classList.remove("attop"),hhide(slgb),sshow(slgw)) : (e.classList.add("attop"), window.innerWidth < 670 && (n.classList.remove("showtop"), n.classList.remove("tinny"), n.classList.remove("fixed-top")),hhide(slgw),sshow(slgb))
    }
    document.getElementById("back-top").onclick = function(e) {
        e.preventDefault(), window.scrollTo(0, 0)
    };
    for (var y = document.querySelectorAll('a[href^="#"]'), b = 0, E = y.length; b < E; b++) y[b].addEventListener("click", (function(e) {
        e.preventDefault();
        var t = this.getAttribute("href");
        t = t.replace("#", "");
        var n = document.getElementById(t);
        if (void 0 !== n && null != n) {
            var i = n.getBoundingClientRect().top + window.pageYOffset + -100;
            window.scrollTo({
                top: i,
                behavior: "smooth"
            })
        }
    }));

    function B() {
        if (void 0 !== n && null != n) {
            var e = n.getBoundingClientRect();
            e = e.height;
            document.getElementById("wpadminbar");
            if (t.classList.contains("hashero")) var o = e - 70,
                s = !0;
            else o = 1, s = !1;
            window.pageYOffset > o && window.pageYOffset < o + 5 ? (n.classList.add("tinny"), n.classList.remove("showtop")) : window.pageYOffset >= o + 5 ? n.classList.add("showtop") : (n.classList.remove("showtop"), n.classList.remove("tinny")), window.pageYOffset > o ? n.classList.contains("fixed-top") || (s || (i.style["padding-top"] = e + "px"), n.classList.add("fixed-top"), function() {
                if (document.body.classList.contains("admin-bar")) {
                    document.getElementById("wpadminbar");
                    if (void 0 !== g && null != g) {
                        var e = document.getElementById("main-header");
                        if (void 0 !== e && null != e) {
                            var t = window.innerWidth;
                            e.style["margin-top"] = t > 600 ? g.offsetHeight + "px" : null
                        }
                    }
                }
            }()) : (n.classList.remove("fixed-top"), n.style["margin-top"] = null, i.style["padding-top"] = null)
        }
    }

    function x() {
        if (document.body.classList.contains("admin-bar")) {
            document.getElementById("wpadminbar");
            if (void 0 !== g && null != g) {
                e.classList.add("m-0");
                var t = window.innerWidth;
                document.body.style["margin-top"] = t > 600 ? g.offsetHeight + "px" : null
            }
        }
    }

    function I() {
        H();
        const e = document.getElementById("back-top");
        if (document.body.classList.contains("askforcookie")) {
            const t = document.getElementById("gdpr_bar");
            void 0 !== t && null != t && void 0 !== e && null != e && (e.style["margin-bottom"] = t.offsetHeight + "px")
        } else void 0 !== e && null != e && (e.style["margin-bottom"] = null)
    }

    function k(e, t) {
        var n = function() {
            if (void 0 !== t && null != t) {
                var n = document.getElementsByClassName(t);
                if (n.length)
                    for (var o = 0; o < n.length; o++) i(n[o].getElementsByClassName(e))
            } else i(document.getElementsByClassName(e))
        };

        function i(e) {
            var t = -1;
            if (e && e.length) {
                for (var n = 0; n < e.length; n++) e[n].style.minHeight = null, t = t > e[n].offsetHeight ? t : e[n].offsetHeight;
                for (n = 0; n < e.length; n++) e[n].style.minHeight = t + "px", e[n].classList.add("eq-heights-active")
            }
        }
        window.onload = n(), window.addEventListener("resize", n, !1), window.addEventListener("orientationchange", n, !1)
    }
    window.boxAsLink = function(e) {
        document.getElementById("post-" + e).getElementsByClassName("post-permalink")[0].click()
    }, k("detailed-in-lines", "link-box-wrap"), k("gr-t", "grid-line"), k("gr-sub", "grid-line"), k("gr-cat", "grid-line"), k("five-title", "five-row");
    var C = document.getElementsByClassName("gotosub");
    for (b = 0, E = C.length; b < E; b++) C[b].addEventListener("click", (function(e) {
        e.preventDefault(), document.body.classList.remove("desk-sub-act"), n.classList.contains("fixed-top") || n.classList.add("force-fixed");
        var t = this.parentElement,
            i = t.querySelector(".sub-menu-wrap");
        if (void 0 !== n && null != n) {
            var o = n.getBoundingClientRect();
            if (o = o.height, document.body.classList.contains("admin-bar")) {
                document.getElementById("wpadminbar");
                void 0 !== g && null != g && (o += g.offsetHeight)
            }
            i.style.top = o + "px"
        }
        t.classList.toggle("subactive"), 0 === n.getElementsByClassName("subactive").length ? n.classList.remove("force-fixed") : document.body.classList.add("desk-sub-act")
    }));

    function H() {
        t.classList.remove("mobactivated"), t.classList.remove("desk-sub-act");
        for (var e = n.getElementsByClassName("subactive"), i = 0, s = e.length; i < s; i++) e[i].classList.remove("subactive");
        n.classList.remove("force-fixed"), window.innerWidth < 768 && (o.setAttribute("aria-expanded", !1), document.getElementById("mobile-nav").classList.remove("show"))
    }
    o.addEventListener("click", (function(e) {
        ! function() {
            const e = document.getElementById("mobile-nav");
            if (void 0 !== n && null != n) {
                var t = n.getBoundingClientRect();
                if (t = t.height, window.innerWidth > 782 && document.body.classList.contains("admin-bar")) {
                    document.getElementById("wpadminbar");
                    void 0 !== g && null != g && (t += g.offsetHeight)
                }
                var i = window.innerHeight;
                e.style["max-height"] = i - t + "px"
            }
        }(), n.classList.contains("fixed-top") || n.classList.toggle("force-fixed"), t.classList.toggle("mobactivated")
    }))
}
