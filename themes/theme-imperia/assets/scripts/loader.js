/* PreloadJS */
this.createjs = this.createjs || {},
    function() {
        "use strict";
        var a = createjs.PreloadJS = createjs.PreloadJS || {};
        a.version = "NEXT", a.buildDate = "Wed, 17 Dec 2014 22:58:36 GMT"
    }(), this.createjs = this.createjs || {}, createjs.extend = function(a, b) {
        "use strict";

        function c() { this.constructor = a }
        return c.prototype = b.prototype, a.prototype = new c
    }, this.createjs = this.createjs || {}, createjs.promote = function(a, b) {
        "use strict";
        var c = a.prototype,
            d = Object.getPrototypeOf && Object.getPrototypeOf(c) || c.__proto__;
        if (d) { c[(b += "_") + "constructor"] = d.constructor; for (var e in d) c.hasOwnProperty(e) && "function" == typeof d[e] && (c[b + e] = d[e]) }
        return a
    }, this.createjs = this.createjs || {}, createjs.indexOf = function(a, b) {
        "use strict";
        for (var c = 0, d = a.length; d > c; c++)
            if (b === a[c]) return c;
        return -1
    }, this.createjs = this.createjs || {},
    function() {
        "use strict";
        createjs.proxy = function(a, b) { var c = Array.prototype.slice.call(arguments, 2); return function() { return a.apply(b, Array.prototype.slice.call(arguments, 0).concat(c)) } }
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a() { throw "BrowserDetect cannot be instantiated" }
        var b = a.agent = window.navigator.userAgent;
        a.isWindowPhone = b.indexOf("IEMobile") > -1 || b.indexOf("Windows Phone") > -1, a.isFirefox = b.indexOf("Firefox") > -1, a.isOpera = null != window.opera, a.isChrome = b.indexOf("Chrome") > -1, a.isIOS = (b.indexOf("iPod") > -1 || b.indexOf("iPhone") > -1 || b.indexOf("iPad") > -1) && !a.isWindowPhone, a.isAndroid = b.indexOf("Android") > -1 && !a.isWindowPhone, a.isBlackberry = b.indexOf("Blackberry") > -1, createjs.BrowserDetect = a
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a, b, c) { this.type = a, this.target = null, this.currentTarget = null, this.eventPhase = 0, this.bubbles = !!b, this.cancelable = !!c, this.timeStamp = (new Date).getTime(), this.defaultPrevented = !1, this.propagationStopped = !1, this.immediatePropagationStopped = !1, this.removed = !1 }
        var b = a.prototype;
        b.preventDefault = function() { this.defaultPrevented = this.cancelable && !0 }, b.stopPropagation = function() { this.propagationStopped = !0 }, b.stopImmediatePropagation = function() { this.immediatePropagationStopped = this.propagationStopped = !0 }, b.remove = function() { this.removed = !0 }, b.clone = function() { return new a(this.type, this.bubbles, this.cancelable) }, b.set = function(a) { for (var b in a) this[b] = a[b]; return this }, b.toString = function() { return "[Event (type=" + this.type + ")]" }, createjs.Event = a
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a, b, c) { this.Event_constructor("error"), this.title = a, this.message = b, this.data = c }
        var b = createjs.extend(a, createjs.Event);
        b.clone = function() { return new createjs.ErrorEvent(this.title, this.message, this.data) }, createjs.ErrorEvent = createjs.promote(a, "Event")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a() { this._listeners = null, this._captureListeners = null }
        var b = a.prototype;
        a.initialize = function(a) { a.addEventListener = b.addEventListener, a.on = b.on, a.removeEventListener = a.off = b.removeEventListener, a.removeAllEventListeners = b.removeAllEventListeners, a.hasEventListener = b.hasEventListener, a.dispatchEvent = b.dispatchEvent, a._dispatchEvent = b._dispatchEvent, a.willTrigger = b.willTrigger }, b.addEventListener = function(a, b, c) {
            var d;
            d = c ? this._captureListeners = this._captureListeners || {} : this._listeners = this._listeners || {};
            var e = d[a];
            return e && this.removeEventListener(a, b, c), e = d[a], e ? e.push(b) : d[a] = [b], b
        }, b.on = function(a, b, c, d, e, f) { return b.handleEvent && (c = c || b, b = b.handleEvent), c = c || this, this.addEventListener(a, function(a) { b.call(c, a, e), d && a.remove() }, f) }, b.removeEventListener = function(a, b, c) {
            var d = c ? this._captureListeners : this._listeners;
            if (d) {
                var e = d[a];
                if (e)
                    for (var f = 0, g = e.length; g > f; f++)
                        if (e[f] == b) { 1 == g ? delete d[a] : e.splice(f, 1); break }
            }
        }, b.off = b.removeEventListener, b.removeAllEventListeners = function(a) { a ? (this._listeners && delete this._listeners[a], this._captureListeners && delete this._captureListeners[a]) : this._listeners = this._captureListeners = null }, b.dispatchEvent = function(a) {
            if ("string" == typeof a) {
                var b = this._listeners;
                if (!b || !b[a]) return !1;
                a = new createjs.Event(a)
            } else a.target && a.clone && (a = a.clone());
            try { a.target = this } catch (c) {}
            if (a.bubbles && this.parent) { for (var d = this, e = [d]; d.parent;) e.push(d = d.parent); var f, g = e.length; for (f = g - 1; f >= 0 && !a.propagationStopped; f--) e[f]._dispatchEvent(a, 1 + (0 == f)); for (f = 1; g > f && !a.propagationStopped; f++) e[f]._dispatchEvent(a, 3) } else this._dispatchEvent(a, 2);
            return a.defaultPrevented
        }, b.hasEventListener = function(a) {
            var b = this._listeners,
                c = this._captureListeners;
            return !!(b && b[a] || c && c[a])
        }, b.willTrigger = function(a) {
            for (var b = this; b;) {
                if (b.hasEventListener(a)) return !0;
                b = b.parent
            }
            return !1
        }, b.toString = function() { return "[EventDispatcher]" }, b._dispatchEvent = function(a, b) {
            var c, d = 1 == b ? this._captureListeners : this._listeners;
            if (a && d) {
                var e = d[a.type];
                if (!e || !(c = e.length)) return;
                try { a.currentTarget = this } catch (f) {}
                try { a.eventPhase = b } catch (f) {}
                a.removed = !1, e = e.slice();
                for (var g = 0; c > g && !a.immediatePropagationStopped; g++) {
                    var h = e[g];
                    h.handleEvent ? h.handleEvent(a) : h(a), a.removed && (this.off(a.type, h, 1 == b), a.removed = !1)
                }
            }
        }, createjs.EventDispatcher = a
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a, b) { this.Event_constructor("progress"), this.loaded = a, this.total = null == b ? 1 : b, this.progress = 0 == b ? 0 : this.loaded / this.total }
        var b = createjs.extend(a, createjs.Event);
        b.clone = function() { return new createjs.ProgressEvent(this.loaded, this.total) }, createjs.ProgressEvent = createjs.promote(a, "Event")
    }(window),
    function() {
        function a(b, d) {
            function f(a) {
                if (f[a] !== q) return f[a];
                var b;
                if ("bug-string-char-index" == a) b = "a" != "a" [0];
                else if ("json" == a) b = f("json-stringify") && f("json-parse");
                else {
                    var c, e = '{"a":[1,true,false,null,"\\u0000\\b\\n\\f\\r\\t"]}';
                    if ("json-stringify" == a) {
                        var i = d.stringify,
                            k = "function" == typeof i && t;
                        if (k) {
                            (c = function() { return 1 }).toJSON = c;
                            try { k = "0" === i(0) && "0" === i(new g) && '""' == i(new h) && i(s) === q && i(q) === q && i() === q && "1" === i(c) && "[1]" == i([c]) && "[null]" == i([q]) && "null" == i(null) && "[null,null,null]" == i([q, s, null]) && i({ a: [c, !0, !1, null, "\x00\b\n\f\r  "] }) == e && "1" === i(null, c) && "[\n 1,\n 2\n]" == i([1, 2], null, 1) && '"-271821-04-20T00:00:00.000Z"' == i(new j(-864e13)) && '"+275760-09-13T00:00:00.000Z"' == i(new j(864e13)) && '"-000001-01-01T00:00:00.000Z"' == i(new j(-621987552e5)) && '"1969-12-31T23:59:59.999Z"' == i(new j(-1)) } catch (l) { k = !1 }
                        }
                        b = k
                    }
                    if ("json-parse" == a) {
                        var m = d.parse;
                        if ("function" == typeof m) try {
                            if (0 === m("0") && !m(!1)) {
                                c = m(e);
                                var n = 5 == c.a.length && 1 === c.a[0];
                                if (n) {
                                    try { n = !m('" "') } catch (l) {}
                                    if (n) try { n = 1 !== m("01") } catch (l) {}
                                    if (n) try { n = 1 !== m("1.") } catch (l) {}
                                }
                            }
                        } catch (l) { n = !1 }
                        b = n
                    }
                }
                return f[a] = !!b
            }
            b || (b = e.Object()), d || (d = e.Object());
            var g = b.Number || e.Number,
                h = b.String || e.String,
                i = b.Object || e.Object,
                j = b.Date || e.Date,
                k = b.SyntaxError || e.SyntaxError,
                l = b.TypeError || e.TypeError,
                m = b.Math || e.Math,
                n = b.JSON || e.JSON;
            "object" == typeof n && n && (d.stringify = n.stringify, d.parse = n.parse);
            var o, p, q, r = i.prototype,
                s = r.toString,
                t = new j(-0xc782b5b800cec);
            try { t = -109252 == t.getUTCFullYear() && 0 === t.getUTCMonth() && 1 === t.getUTCDate() && 10 == t.getUTCHours() && 37 == t.getUTCMinutes() && 6 == t.getUTCSeconds() && 708 == t.getUTCMilliseconds() } catch (u) {}
            if (!f("json")) {
                var v = "[object Function]",
                    w = "[object Date]",
                    x = "[object Number]",
                    y = "[object String]",
                    z = "[object Array]",
                    A = "[object Boolean]",
                    B = f("bug-string-char-index");
                if (!t) var C = m.floor,
                    D = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334],
                    E = function(a, b) { return D[b] + 365 * (a - 1970) + C((a - 1969 + (b = +(b > 1))) / 4) - C((a - 1901 + b) / 100) + C((a - 1601 + b) / 400) };
                if ((o = r.hasOwnProperty) || (o = function(a) {
                        var b, c = {};
                        return (c.__proto__ = null, c.__proto__ = { toString: 1 }, c).toString != s ? o = function(a) {
                            var b = this.__proto__,
                                c = a in (this.__proto__ = null, this);
                            return this.__proto__ = b, c
                        } : (b = c.constructor, o = function(a) { var c = (this.constructor || b).prototype; return a in this && !(a in c && this[a] === c[a]) }), c = null, o.call(this, a)
                    }), p = function(a, b) {
                        var d, e, f, g = 0;
                        (d = function() { this.valueOf = 0 }).prototype.valueOf = 0, e = new d;
                        for (f in e) o.call(e, f) && g++;
                        return d = e = null, g ? p = 2 == g ? function(a, b) {
                            var c, d = {},
                                e = s.call(a) == v;
                            for (c in a) e && "prototype" == c || o.call(d, c) || !(d[c] = 1) || !o.call(a, c) || b(c)
                        } : function(a, b) {
                            var c, d, e = s.call(a) == v;
                            for (c in a) e && "prototype" == c || !o.call(a, c) || (d = "constructor" === c) || b(c);
                            (d || o.call(a, c = "constructor")) && b(c)
                        } : (e = ["valueOf", "toString", "toLocaleString", "propertyIsEnumerable", "isPrototypeOf", "hasOwnProperty", "constructor"], p = function(a, b) {
                            var d, f, g = s.call(a) == v,
                                h = !g && "function" != typeof a.constructor && c[typeof a.hasOwnProperty] && a.hasOwnProperty || o;
                            for (d in a) g && "prototype" == d || !h.call(a, d) || b(d);
                            for (f = e.length; d = e[--f]; h.call(a, d) && b(d));
                        }), p(a, b)
                    }, !f("json-stringify")) {
                    var F = { 92: "\\\\", 34: '\\"', 8: "\\b", 12: "\\f", 10: "\\n", 13: "\\r", 9: "\\t" },
                        G = "000000",
                        H = function(a, b) { return (G + (b || 0)).slice(-a) },
                        I = "\\u00",
                        J = function(a) {
                            for (var b = '"', c = 0, d = a.length, e = !B || d > 10, f = e && (B ? a.split("") : a); d > c; c++) {
                                var g = a.charCodeAt(c);
                                switch (g) {
                                    case 8:
                                    case 9:
                                    case 10:
                                    case 12:
                                    case 13:
                                    case 34:
                                    case 92:
                                        b += F[g];
                                        break;
                                    default:
                                        if (32 > g) { b += I + H(2, g.toString(16)); break }
                                        b += e ? f[c] : a.charAt(c)
                                }
                            }
                            return b + '"'
                        },
                        K = function(a, b, c, d, e, f, g) {
                            var h, i, j, k, m, n, r, t, u, v, B, D, F, G, I, L;
                            try { h = b[a] } catch (M) {}
                            if ("object" == typeof h && h)
                                if (i = s.call(h), i != w || o.call(h, "toJSON")) "function" == typeof h.toJSON && (i != x && i != y && i != z || o.call(h, "toJSON")) && (h = h.toJSON(a));
                                else if (h > -1 / 0 && 1 / 0 > h) {
                                if (E) {
                                    for (m = C(h / 864e5), j = C(m / 365.2425) + 1970 - 1; E(j + 1, 0) <= m; j++);
                                    for (k = C((m - E(j, 0)) / 30.42); E(j, k + 1) <= m; k++);
                                    m = 1 + m - E(j, k), n = (h % 864e5 + 864e5) % 864e5, r = C(n / 36e5) % 24, t = C(n / 6e4) % 60, u = C(n / 1e3) % 60, v = n % 1e3
                                } else j = h.getUTCFullYear(), k = h.getUTCMonth(), m = h.getUTCDate(), r = h.getUTCHours(), t = h.getUTCMinutes(), u = h.getUTCSeconds(), v = h.getUTCMilliseconds();
                                h = (0 >= j || j >= 1e4 ? (0 > j ? "-" : "+") + H(6, 0 > j ? -j : j) : H(4, j)) + "-" + H(2, k + 1) + "-" + H(2, m) + "T" + H(2, r) + ":" + H(2, t) + ":" + H(2, u) + "." + H(3, v) + "Z"
                            } else h = null;
                            if (c && (h = c.call(b, a, h)), null === h) return "null";
                            if (i = s.call(h), i == A) return "" + h;
                            if (i == x) return h > -1 / 0 && 1 / 0 > h ? "" + h : "null";
                            if (i == y) return J("" + h);
                            if ("object" == typeof h) {
                                for (G = g.length; G--;)
                                    if (g[G] === h) throw l();
                                if (g.push(h), B = [], I = f, f += e, i == z) {
                                    for (F = 0, G = h.length; G > F; F++) D = K(F, h, c, d, e, f, g), B.push(D === q ? "null" : D);
                                    L = B.length ? e ? "[\n" + f + B.join(",\n" + f) + "\n" + I + "]" : "[" + B.join(",") + "]" : "[]"
                                } else p(d || h, function(a) {
                                    var b = K(a, h, c, d, e, f, g);
                                    b !== q && B.push(J(a) + ":" + (e ? " " : "") + b)
                                }), L = B.length ? e ? "{\n" + f + B.join(",\n" + f) + "\n" + I + "}" : "{" + B.join(",") + "}" : "{}";
                                return g.pop(), L
                            }
                        };
                    d.stringify = function(a, b, d) {
                        var e, f, g, h;
                        if (c[typeof b] && b)
                            if ((h = s.call(b)) == v) f = b;
                            else if (h == z) { g = {}; for (var i, j = 0, k = b.length; k > j; i = b[j++], h = s.call(i), (h == y || h == x) && (g[i] = 1)); }
                        if (d)
                            if ((h = s.call(d)) == x) {
                                if ((d -= d % 1) > 0)
                                    for (e = "", d > 10 && (d = 10); e.length < d; e += " ");
                            } else h == y && (e = d.length <= 10 ? d : d.slice(0, 10));
                        return K("", (i = {}, i[""] = a, i), f, g, e, "", [])
                    }
                }
                if (!f("json-parse")) {
                    var L, M, N = h.fromCharCode,
                        O = { 92: "\\", 34: '"', 47: "/", 98: "\b", 116: "   ", 110: "\n", 102: "\f", 114: "\r" },
                        P = function() { throw L = M = null, k() },
                        Q = function() {
                            for (var a, b, c, d, e, f = M, g = f.length; g > L;) switch (e = f.charCodeAt(L)) {
                                case 9:
                                case 10:
                                case 13:
                                case 32:
                                    L++;
                                    break;
                                case 123:
                                case 125:
                                case 91:
                                case 93:
                                case 58:
                                case 44:
                                    return a = B ? f.charAt(L) : f[L], L++, a;
                                case 34:
                                    for (a = "@", L++; g > L;)
                                        if (e = f.charCodeAt(L), 32 > e) P();
                                        else if (92 == e) switch (e = f.charCodeAt(++L)) {
                                        case 92:
                                        case 34:
                                        case 47:
                                        case 98:
                                        case 116:
                                        case 110:
                                        case 102:
                                        case 114:
                                            a += O[e], L++;
                                            break;
                                        case 117:
                                            for (b = ++L, c = L + 4; c > L; L++) e = f.charCodeAt(L), e >= 48 && 57 >= e || e >= 97 && 102 >= e || e >= 65 && 70 >= e || P();
                                            a += N("0x" + f.slice(b, L));
                                            break;
                                        default:
                                            P()
                                    } else {
                                        if (34 == e) break;
                                        for (e = f.charCodeAt(L), b = L; e >= 32 && 92 != e && 34 != e;) e = f.charCodeAt(++L);
                                        a += f.slice(b, L)
                                    }
                                    if (34 == f.charCodeAt(L)) return L++, a;
                                    P();
                                default:
                                    if (b = L, 45 == e && (d = !0, e = f.charCodeAt(++L)), e >= 48 && 57 >= e) {
                                        for (48 == e && (e = f.charCodeAt(L + 1), e >= 48 && 57 >= e) && P(), d = !1; g > L && (e = f.charCodeAt(L), e >= 48 && 57 >= e); L++);
                                        if (46 == f.charCodeAt(L)) {
                                            for (c = ++L; g > c && (e = f.charCodeAt(c), e >= 48 && 57 >= e); c++);
                                            c == L && P(), L = c
                                        }
                                        if (e = f.charCodeAt(L), 101 == e || 69 == e) {
                                            for (e = f.charCodeAt(++L), (43 == e || 45 == e) && L++, c = L; g > c && (e = f.charCodeAt(c), e >= 48 && 57 >= e); c++);
                                            c == L && P(), L = c
                                        }
                                        return +f.slice(b, L)
                                    }
                                    if (d && P(), "true" == f.slice(L, L + 4)) return L += 4, !0;
                                    if ("false" == f.slice(L, L + 5)) return L += 5, !1;
                                    if ("null" == f.slice(L, L + 4)) return L += 4, null;
                                    P()
                            }
                            return "$"
                        },
                        R = function(a) {
                            var b, c;
                            if ("$" == a && P(), "string" == typeof a) {
                                if ("@" == (B ? a.charAt(0) : a[0])) return a.slice(1);
                                if ("[" == a) { for (b = []; a = Q(), "]" != a; c || (c = !0)) c && ("," == a ? (a = Q(), "]" == a && P()) : P()), "," == a && P(), b.push(R(a)); return b }
                                if ("{" == a) { for (b = {}; a = Q(), "}" != a; c || (c = !0)) c && ("," == a ? (a = Q(), "}" == a && P()) : P()), ("," == a || "string" != typeof a || "@" != (B ? a.charAt(0) : a[0]) || ":" != Q()) && P(), b[a.slice(1)] = R(Q()); return b }
                                P()
                            }
                            return a
                        },
                        S = function(a, b, c) {
                            var d = T(a, b, c);
                            d === q ? delete a[b] : a[b] = d
                        },
                        T = function(a, b, c) {
                            var d, e = a[b];
                            if ("object" == typeof e && e)
                                if (s.call(e) == z)
                                    for (d = e.length; d--;) S(e, d, c);
                                else p(e, function(a) { S(e, a, c) });
                            return c.call(a, b, e)
                        };
                    d.parse = function(a, b) { var c, d; return L = 0, M = "" + a, c = R(Q()), "$" != Q() && P(), L = M = null, b && s.call(b) == v ? T((d = {}, d[""] = c, d), "", b) : c }
                }
            }
            return d.runInContext = a, d
        }
        var b = "function" == typeof define && define.amd,
            c = { "function": !0, object: !0 },
            d = c[typeof exports] && exports && !exports.nodeType && exports,
            e = c[typeof window] && window || this,
            f = d && c[typeof module] && module && !module.nodeType && "object" == typeof global && global;
        if (!f || f.global !== f && f.window !== f && f.self !== f || (e = f), d && !b) a(e, d);
        else {
            var g = e.JSON,
                h = e.JSON3,
                i = !1,
                j = a(e, e.JSON3 = { noConflict: function() { return i || (i = !0, e.JSON = g, e.JSON3 = h, g = h = null), j } });
            e.JSON = { parse: j.parse, stringify: j.stringify }
        }
        b && define(function() { return j })
    }.call(this),
    function() {
        var a = {};
        a.parseXML = function(a, b) {
            var c = null;
            try {
                if (window.DOMParser) {
                    var d = new DOMParser;
                    c = d.parseFromString(a, b)
                } else c = new ActiveXObject("Microsoft.XMLDOM"), c.async = !1, c.loadXML(a)
            } catch (e) {}
            return c
        }, a.parseJSON = function(a) { if (null == a) return null; try { return JSON.parse(a) } catch (b) { throw b } }, createjs.DataUtils = a
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a() { this.src = null, this.type = null, this.id = null, this.maintainOrder = !1, this.callback = null, this.data = null, this.method = createjs.LoadItem.GET, this.values = null, this.headers = null, this.withCredentials = !1, this.mimeType = null, this.crossOrigin = null, this.loadTimeout = 8e3 }
        var b = a.prototype = {},
            c = a;
        c.create = function(b) { if ("string" == typeof b) { var d = new a; return d.src = b, d } if (b instanceof c) return b; if (b instanceof Object) return b; throw new Error("Type not recognized.") }, b.set = function(a) { for (var b in a) this[b] = a[b]; return this }, createjs.LoadItem = c
    }(),
    function() {
        var a = {};
        a.ABSOLUTE_PATT = /^(?:\w+:)?\/{2}/i, a.RELATIVE_PATT = /^[./]*?\//i, a.EXTENSION_PATT = /\/?[^/]+\.(\w{1,5})$/i, a.parseURI = function(b) {
            var c = { absolute: !1, relative: !1 };
            if (null == b) return c;
            var d = b.indexOf("?");
            d > -1 && (b = b.substr(0, d));
            var e;
            return a.ABSOLUTE_PATT.test(b) ? c.absolute = !0 : a.RELATIVE_PATT.test(b) && (c.relative = !0), (e = b.match(a.EXTENSION_PATT)) && (c.extension = e[1].toLowerCase()), c
        }, a.formatQueryString = function(a, b) { if (null == a) throw new Error("You must specify data."); var c = []; for (var d in a) c.push(d + "=" + escape(a[d])); return b && (c = c.concat(b)), c.join("&") }, a.buildPath = function(a, b) {
            if (null == b) return a;
            var c = [],
                d = a.indexOf("?");
            if (-1 != d) {
                var e = a.slice(d + 1);
                c = c.concat(e.split("&"))
            }
            return -1 != d ? a.slice(0, d) + "?" + this._formatQueryString(b, c) : a + "?" + this._formatQueryString(b, c)
        }, a.isCrossDomain = function(a) {
            var b = document.createElement("a");
            b.href = a.src;
            var c = document.createElement("a");
            c.href = location.href;
            var d = "" != b.hostname && (b.port != c.port || b.protocol != c.protocol || b.hostname != c.hostname);
            return d
        }, a.isLocal = function(a) { var b = document.createElement("a"); return b.href = a.src, "" == b.hostname && "file:" == b.protocol }, a.isBinary = function(a) {
            switch (a) {
                case createjs.AbstractLoader.IMAGE:
                case createjs.AbstractLoader.BINARY:
                    return !0;
                default:
                    return !1
            }
        }, a.isImageTag = function(a) { return a instanceof HTMLImageElement }, a.isAudioTag = function(a) { return window.HTMLAudioElement ? a instanceof HTMLAudioElement : !1 }, a.isVideoTag = function(a) { return window.HTMLVideoElement ? a instanceof HTMLVideoElement : void 0 }, a.isText = function(a) {
            switch (a) {
                case createjs.AbstractLoader.TEXT:
                case createjs.AbstractLoader.JSON:
                case createjs.AbstractLoader.MANIFEST:
                case createjs.AbstractLoader.XML:
                case createjs.AbstractLoader.CSS:
                case createjs.AbstractLoader.SVG:
                case createjs.AbstractLoader.JAVASCRIPT:
                    return !0;
                default:
                    return !1
            }
        }, a.getTypeByExtension = function(a) {
            if (null == a) return createjs.AbstractLoader.TEXT;
            switch (a.toLowerCase()) {
                case "jpeg":
                case "jpg":
                case "gif":
                case "png":
                case "webp":
                case "bmp":
                    return createjs.AbstractLoader.IMAGE;
                case "ogg":
                case "mp3":
                case "webm":
                    return createjs.AbstractLoader.SOUND;
                case "mp4":
                case "webm":
                case "ts":
                    return createjs.AbstractLoader.VIDEO;
                case "json":
                    return createjs.AbstractLoader.JSON;
                case "xml":
                    return createjs.AbstractLoader.XML;
                case "css":
                    return createjs.AbstractLoader.CSS;
                case "js":
                    return createjs.AbstractLoader.JAVASCRIPT;
                case "svg":
                    return createjs.AbstractLoader.SVG;
                default:
                    return createjs.AbstractLoader.TEXT
            }
        }, createjs.RequestUtils = a
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a, b, c) { this.EventDispatcher_constructor(), this.loaded = !1, this.canceled = !1, this.progress = 0, this.type = c, this.resultFormatter = null, this._item = a ? createjs.LoadItem.create(a) : null, this._preferXHR = b, this._result = null, this._rawResult = null, this._loadedItems = null, this._tagSrcAttribute = null, this._tag = null }
        var b = createjs.extend(a, createjs.EventDispatcher),
            c = a;
        c.POST = "POST", c.GET = "GET", c.BINARY = "binary", c.CSS = "css", c.IMAGE = "image", c.JAVASCRIPT = "javascript", c.JSON = "json", c.JSONP = "jsonp", c.MANIFEST = "manifest", c.SOUND = "sound", c.VIDEO = "video", c.SPRITESHEET = "spritesheet", c.SVG = "svg", c.TEXT = "text", c.XML = "xml", b.getItem = function() { return this._item }, b.getResult = function(a) { return a ? this._rawResult : this._result }, b.getTag = function() { return this._tag }, b.setTag = function(a) { this._tag = a }, b.load = function() {
            this._createRequest(), this._request.on("complete", this, this), this._request.on("progress", this, this), this._request.on("loadStart", this, this), this._request.on("abort", this, this), this._request.on("timeout", this, this), this._request.on("error", this, this);
            var a = new createjs.Event("initialize");
            a.loader = this._request, this.dispatchEvent(a), this._request.load()
        }, b.cancel = function() { this.canceled = !0, this.destroy() }, b.destroy = function() { this._request && (this._request.removeAllEventListeners(), this._request.destroy()), this._request = null, this._item = null, this._rawResult = null, this._result = null, this._loadItems = null, this.removeAllEventListeners() }, b.getLoadedItems = function() { return this._loadedItems }, b._createRequest = function() { this._request = this._preferXHR ? new createjs.XHRRequest(this._item) : new createjs.TagRequest(this._item, this._tag || this._createTag(), this._tagSrcAttribute) }, b._createTag = function() { return null }, b._sendLoadStart = function() { this._isCanceled() || this.dispatchEvent("loadstart") }, b._sendProgress = function(a) { if (!this._isCanceled()) { var b = null; "number" == typeof a ? (this.progress = a, b = new createjs.ProgressEvent(this.progress)) : (b = a, this.progress = a.loaded / a.total, b.progress = this.progress, (isNaN(this.progress) || 1 / 0 == this.progress) && (this.progress = 0)), this.hasEventListener("progress") && this.dispatchEvent(b) } }, b._sendComplete = function() {
            if (!this._isCanceled()) {
                this.loaded = !0;
                var a = new createjs.Event("complete");
                a.rawResult = this._rawResult, null != this._result && (a.result = this._result), this.dispatchEvent(a)
            }
        }, b._sendError = function(a) {!this._isCanceled() && this.hasEventListener("error") && (null == a && (a = new createjs.ErrorEvent("PRELOAD_ERROR_EMPTY")), this.dispatchEvent(a)) }, b._isCanceled = function() { return null == window.createjs || this.canceled ? !0 : !1 }, b.resultFormatter = null, b.handleEvent = function(a) {
            switch (a.type) {
                case "complete":
                    this._rawResult = a.target._response;
                    var b = this.resultFormatter && this.resultFormatter(this),
                        c = this;
                    b instanceof Function ? b(function(a) { c._result = a, c._sendComplete() }) : (this._result = b || this._rawResult, this._sendComplete());
                    break;
                case "progress":
                    this._sendProgress(a);
                    break;
                case "error":
                    this._sendError(a);
                    break;
                case "loadstart":
                    this._sendLoadStart();
                    break;
                case "abort":
                case "timeout":
                    this._isCanceled() || this.dispatchEvent(a.type)
            }
        }, b.buildPath = function(a, b) { return createjs.RequestUtils.buildPath(a, b) }, b.toString = function() { return "[PreloadJS AbstractLoader]" }, createjs.AbstractLoader = createjs.promote(a, "EventDispatcher")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a, b, c) { this.AbstractLoader_constructor(a, b, c), this.resultFormatter = this._formatResult, this._tagSrcAttribute = "src" }
        var b = createjs.extend(a, createjs.AbstractLoader);
        b.load = function() { this._tag || (this._tag = this._createTag(this._item.src)), this._tag.preload = "auto", this._tag.load(), this.AbstractLoader_load() }, b._createTag = function() {}, b._createRequest = function() { this._request = this._preferXHR ? new createjs.XHRRequest(this._item) : new createjs.MediaTagRequest(this._item, this._tag || this._createTag(), this._tagSrcAttribute) }, b._formatResult = function(a) { return this._tag.removeEventListener && this._tag.removeEventListener("canplaythrough", this._loadedHandler), this._tag.onstalled = null, this._preferXHR && (a.getTag().src = a.getResult(!0)), a.getTag() }, createjs.AbstractMediaLoader = createjs.promote(a, "AbstractLoader")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";
        var a = function(a) { this._item = a },
            b = createjs.extend(a, createjs.EventDispatcher);
        b.load = function() {}, b.destroy = function() {}, b.cancel = function() {}, createjs.AbstractRequest = createjs.promote(a, "EventDispatcher")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a, b, c) { this.AbstractRequest_constructor(a), this._tag = b, this._tagSrcAttribute = c, this._loadedHandler = createjs.proxy(this._handleTagComplete, this), this._addedToDOM = !1, this._startTagVisibility = null }
        var b = createjs.extend(a, createjs.AbstractRequest);
        b.load = function() {
            null == this._tag.parentNode && (window.document.body.appendChild(this._tag), this._addedToDOM = !0), this._tag.onload = createjs.proxy(this._handleTagComplete, this), this._tag.onreadystatechange = createjs.proxy(this._handleReadyStateChange, this);
            var a = new createjs.Event("initialize");
            a.loader = this._tag, this.dispatchEvent(a), this._hideTag(), this._tag[this._tagSrcAttribute] = this._item.src
        }, b.destroy = function() { this._clean(), this._tag = null, this.AbstractRequest_destroy() }, b._handleReadyStateChange = function() {
            clearTimeout(this._loadTimeout);
            var a = this._tag;
            ("loaded" == a.readyState || "complete" == a.readyState) && this._handleTagComplete()
        }, b._handleTagComplete = function() { this._rawResult = this._tag, this._result = this.resultFormatter && this.resultFormatter(this) || this._rawResult, this._clean(), this._showTag(), this.dispatchEvent("complete") }, b._clean = function() { this._tag.onload = null, this._tag.onreadystatechange = null, this._addedToDOM && null != this._tag.parentNode && this._tag.parentNode.removeChild(this._tag) }, b._hideTag = function() { this._startTagVisibility = this._tag.style.visibility, this._tag.style.visibility = "hidden" }, b._showTag = function() { this._tag.style.visibility = this._startTagVisibility }, b._handleStalled = function() {}, createjs.TagRequest = createjs.promote(a, "AbstractRequest")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a, b, c) { this.AbstractRequest_constructor(a), this._tag = b, this._tagSrcAttribute = c, this._loadedHandler = createjs.proxy(this._handleTagComplete, this) }
        var b = createjs.extend(a, createjs.TagRequest);
        b.load = function() { this._tag.onstalled = createjs.proxy(this._handleStalled, this), this._tag.onprogress = createjs.proxy(this._handleProgress, this), this._tag.addEventListener && this._tag.addEventListener("canplaythrough", this._loadedHandler, !1), this.TagRequest_load() }, b._handleReadyStateChange = function() {
            clearTimeout(this._loadTimeout);
            var a = this._tag;
            ("loaded" == a.readyState || "complete" == a.readyState) && this._handleTagComplete()
        }, b._handleStalled = function() {}, b._handleProgress = function(a) {
            if (a && !(a.loaded > 0 && 0 == a.total)) {
                var b = new createjs.ProgressEvent(a.loaded, a.total);
                this.dispatchEvent(b)
            }
        }, b._clean = function() { this._tag.removeEventListener && this._tag.removeEventListener("canplaythrough", this._loadedHandler), this._tag.onstalled = null, this._tag.onprogress = null, this.TagRequest__clean() }, createjs.MediaTagRequest = createjs.promote(a, "TagRequest")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a) { this.AbstractRequest_constructor(a), this._request = null, this._loadTimeout = null, this._xhrLevel = 1, this._response = null, this._rawResponse = null, this._canceled = !1, this._handleLoadStartProxy = createjs.proxy(this._handleLoadStart, this), this._handleProgressProxy = createjs.proxy(this._handleProgress, this), this._handleAbortProxy = createjs.proxy(this._handleAbort, this), this._handleErrorProxy = createjs.proxy(this._handleError, this), this._handleTimeoutProxy = createjs.proxy(this._handleTimeout, this), this._handleLoadProxy = createjs.proxy(this._handleLoad, this), this._handleReadyStateChangeProxy = createjs.proxy(this._handleReadyStateChange, this), !this._createXHR(a) }
        var b = createjs.extend(a, createjs.AbstractRequest);
        a.ACTIVEX_VERSIONS = ["Msxml2.XMLHTTP.6.0", "Msxml2.XMLHTTP.5.0", "Msxml2.XMLHTTP.4.0", "MSXML2.XMLHTTP.3.0", "MSXML2.XMLHTTP", "Microsoft.XMLHTTP"], b.getResult = function(a) { return a && this._rawResponse ? this._rawResponse : this._response }, b.cancel = function() { this.canceled = !0, this._clean(), this._request.abort() }, b.load = function() {
            if (null == this._request) return void this._handleError();
            this._request.addEventListener("loadstart", this._handleLoadStartProxy, !1), this._request.addEventListener("progress", this._handleProgressProxy, !1), this._request.addEventListener("abort", this._handleAbortProxy, !1), this._request.addEventListener("error", this._handleErrorProxy, !1), this._request.addEventListener("timeout", this._handleTimeoutProxy, !1), this._request.addEventListener("load", this._handleLoadProxy, !1), this._request.addEventListener("readystatechange", this._handleReadyStateChangeProxy, !1), 1 == this._xhrLevel && (this._loadTimeout = setTimeout(createjs.proxy(this._handleTimeout, this), this._item.loadTimeout));
            try { this._item.values && this._item.method != createjs.AbstractLoader.GET ? this._item.method == createjs.AbstractLoader.POST && this._request.send(createjs.RequestUtils.formatQueryString(this._item.values)) : this._request.send() } catch (a) { this.dispatchEvent(new createjs.ErrorEvent("XHR_SEND", null, a)) }
        }, b.setResponseType = function(a) { this._request.responseType = a }, b.getAllResponseHeaders = function() { return this._request.getAllResponseHeaders instanceof Function ? this._request.getAllResponseHeaders() : null }, b.getResponseHeader = function(a) { return this._request.getResponseHeader instanceof Function ? this._request.getResponseHeader(a) : null }, b._handleProgress = function(a) {
            if (a && !(a.loaded > 0 && 0 == a.total)) {
                var b = new createjs.ProgressEvent(a.loaded, a.total);
                this.dispatchEvent(b)
            }
        }, b._handleLoadStart = function() { clearTimeout(this._loadTimeout), this.dispatchEvent("loadstart") }, b._handleAbort = function(a) { this._clean(), this.dispatchEvent(new createjs.ErrorEvent("XHR_ABORTED", null, a)) }, b._handleError = function(a) { this._clean(), this.dispatchEvent(new createjs.ErrorEvent(a.message)) }, b._handleReadyStateChange = function() { 4 == this._request.readyState && this._handleLoad() }, b._handleLoad = function() {
            if (!this.loaded) {
                this.loaded = !0;
                var a = this._checkError();
                if (a) return void this._handleError(a);
                this._response = this._getResponse(), this._clean(), this.dispatchEvent(new createjs.Event("complete"))
            }
        }, b._handleTimeout = function(a) { this._clean(), this.dispatchEvent(new createjs.ErrorEvent("PRELOAD_TIMEOUT", null, a)) }, b._checkError = function() {
            var a = parseInt(this._request.status);
            switch (a) {
                case 404:
                case 0:
                    return new Error(a)
            }
            return null
        }, b._getResponse = function() { if (null != this._response) return this._response; if (null != this._request.response) return this._request.response; try { if (null != this._request.responseText) return this._request.responseText } catch (a) {} try { if (null != this._request.responseXML) return this._request.responseXML } catch (a) {} return null }, b._createXHR = function(a) {
            var b = createjs.RequestUtils.isCrossDomain(a),
                c = {},
                d = null;
            if (window.XMLHttpRequest) d = new XMLHttpRequest, b && void 0 === d.withCredentials && window.XDomainRequest && (d = new XDomainRequest);
            else {
                for (var e = 0, f = s.ACTIVEX_VERSIONS.length; f > e; e++) {
                    { s.ACTIVEX_VERSIONS[e] }
                    try { d = new ActiveXObject(axVersions); break } catch (g) {}
                }
                if (null == d) return !1
            }
            a.mimeType && d.overrideMimeType && d.overrideMimeType(a.mimeType), this._xhrLevel = "string" == typeof d.responseType ? 2 : 1;
            var h = null;
            if (h = a.method == createjs.AbstractLoader.GET ? createjs.RequestUtils.buildPath(a.src, a.values) : a.src, d.open(a.method || createjs.AbstractLoader.GET, h, !0), b && d instanceof XMLHttpRequest && 1 == this._xhrLevel && (c.Origin = location.origin), a.values && a.method == createjs.AbstractLoader.POST && (c["Content-Type"] = "application/x-www-form-urlencoded"), b || c["X-Requested-With"] || (c["X-Requested-With"] = "XMLHttpRequest"), a.headers)
                for (var i in a.headers) c[i] = a.headers[i];
            for (i in c) d.setRequestHeader(i, c[i]);
            return d instanceof XMLHttpRequest && void 0 !== a.withCredentials && (d.withCredentials = a.withCredentials), this._request = d, !0
        }, b._clean = function() { clearTimeout(this._loadTimeout), this._request.removeEventListener("loadstart", this._handleLoadStartProxy), this._request.removeEventListener("progress", this._handleProgressProxy), this._request.removeEventListener("abort", this._handleAbortProxy), this._request.removeEventListener("error", this._handleErrorProxy), this._request.removeEventListener("timeout", this._handleTimeoutProxy), this._request.removeEventListener("load", this._handleLoadProxy), this._request.removeEventListener("readystatechange", this._handleReadyStateChangeProxy) }, b.toString = function() { return "[PreloadJS XHRRequest]" }, createjs.XHRRequest = createjs.promote(a, "AbstractRequest")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a, b, c) { this.AbstractLoader_constructor(), this.init(a, b, c) }
        var b = createjs.extend(a, createjs.AbstractLoader),
            c = a;
        b.init = function(a, b, c) { this.useXHR = !0, this.preferXHR = !0, this._preferXHR = !0, this.setPreferXHR(a), this.stopOnError = !1, this.maintainScriptOrder = !0, this.next = null, this._paused = !1, this._basePath = b, this._crossOrigin = c, this._typeCallbacks = {}, this._extensionCallbacks = {}, this._loadStartWasDispatched = !1, this._maxConnections = 1, this._currentlyLoadingScript = null, this._currentLoads = [], this._loadQueue = [], this._loadQueueBackup = [], this._loadItemsById = {}, this._loadItemsBySrc = {}, this._loadedResults = {}, this._loadedRawResults = {}, this._numItems = 0, this._numItemsLoaded = 0, this._scriptOrder = [], this._loadedScripts = [], this._lastProgress = 0 / 0, this._availableLoaders = [createjs.ImageLoader, createjs.JavaScriptLoader, createjs.CSSLoader, createjs.JSONLoader, createjs.JSONPLoader, createjs.SoundLoader, createjs.ManifestLoader, createjs.SpriteSheetLoader, createjs.XMLLoader, createjs.SVGLoader, createjs.BinaryLoader, createjs.VideoLoader, createjs.TextLoader], this._defaultLoaderLength = this._availableLoaders.length }, c.loadTimeout = 8e3, c.LOAD_TIMEOUT = 0, c.BINARY = createjs.AbstractLoader.BINARY, c.CSS = createjs.AbstractLoader.CSS, c.IMAGE = createjs.AbstractLoader.IMAGE, c.JAVASCRIPT = createjs.AbstractLoader.JAVASCRIPT, c.JSON = createjs.AbstractLoader.JSON, c.JSONP = createjs.AbstractLoader.JSONP, c.MANIFEST = createjs.AbstractLoader.MANIFEST, c.SOUND = createjs.AbstractLoader.SOUND, c.VIDEO = createjs.AbstractLoader.VIDEO, c.SVG = createjs.AbstractLoader.SVG, c.TEXT = createjs.AbstractLoader.TEXT, c.XML = createjs.AbstractLoader.XML, c.POST = createjs.AbstractLoader.POST, c.GET = createjs.AbstractLoader.GET, b.registerLoader = function(a) {
            if (!a || !a.canLoadItem) throw new Error("loader is of an incorrect type.");
            if (-1 != this._availableLoaders.indexOf(a)) throw new Error("loader already exists.");
            this._availableLoaders.unshift(a)
        }, b.unregisterLoader = function(a) { var b = this._availableLoaders.indexOf(a); - 1 != b && b < this._defaultLoaderLength - 1 && this._availableLoaders.splice(b, 1) }, b.setUseXHR = function(a) { return this.setPreferXHR(a) }, b.setPreferXHR = function(a) { return this.preferXHR = 0 != a && null != window.XMLHttpRequest, this.preferXHR }, b.removeAll = function() { this.remove() }, b.remove = function(a) {
            var b = null;
            if (!a || a instanceof Array) {
                if (a) b = a;
                else if (arguments.length > 0) return
            } else b = [a];
            var c = !1;
            if (b) {
                for (; b.length;) {
                    var d = b.pop(),
                        e = this.getResult(d);
                    for (f = this._loadQueue.length - 1; f >= 0; f--)
                        if (g = this._loadQueue[f].getItem(), g.id == d || g.src == d) { this._loadQueue.splice(f, 1)[0].cancel(); break }
                    for (f = this._loadQueueBackup.length - 1; f >= 0; f--)
                        if (g = this._loadQueueBackup[f].getItem(), g.id == d || g.src == d) { this._loadQueueBackup.splice(f, 1)[0].cancel(); break }
                    if (e) delete this._loadItemsById[e.id], delete this._loadItemsBySrc[e.src], this._disposeItem(e);
                    else
                        for (var f = this._currentLoads.length - 1; f >= 0; f--) { var g = this._currentLoads[f].getItem(); if (g.id == d || g.src == d) { this._currentLoads.splice(f, 1)[0].cancel(), c = !0; break } }
                }
                c && this._loadNext()
            } else {
                this.close();
                for (var h in this._loadItemsById) this._disposeItem(this._loadItemsById[h]);
                this.init(this.preferXHR, this._basePath)
            }
        }, b.reset = function() {
            this.close();
            for (var a in this._loadItemsById) this._disposeItem(this._loadItemsById[a]);
            for (var b = [], c = 0, d = this._loadQueueBackup.length; d > c; c++) b.push(this._loadQueueBackup[c].getItem());
            this.loadManifest(b, !1)
        }, b.installPlugin = function(a) {
            if (null != a && null != a.getPreloadHandlers) {
                var b = a.getPreloadHandlers();
                if (b.scope = a, null != b.types)
                    for (var c = 0, d = b.types.length; d > c; c++) this._typeCallbacks[b.types[c]] = b;
                if (null != b.extensions)
                    for (c = 0, d = b.extensions.length; d > c; c++) this._extensionCallbacks[b.extensions[c]] = b
            }
        }, b.setMaxConnections = function(a) { this._maxConnections = a, !this._paused && this._loadQueue.length > 0 && this._loadNext() }, b.loadFile = function(a, b, c) {
            if (null == a) { var d = new createjs.ErrorEvent("PRELOAD_NO_FILE"); return void this._sendError(d) }
            this._addItem(a, null, c), this.setPaused(b !== !1 ? !1 : !0)
        }, b.loadManifest = function(a, b, d) {
            var e = null,
                f = null;
            if (a instanceof Array) {
                if (0 == a.length) { var g = new createjs.ErrorEvent("PRELOAD_MANIFEST_EMPTY"); return void this._sendError(g) }
                e = a
            } else if ("string" == typeof a) e = [{ src: a, type: c.MANIFEST }];
            else {
                if ("object" != typeof a) { var g = new createjs.ErrorEvent("PRELOAD_MANIFEST_NULL"); return void this._sendError(g) }
                if (void 0 !== a.src) {
                    if (null == a.type) a.type = c.MANIFEST;
                    else if (a.type != c.MANIFEST) {
                        var g = new createjs.ErrorEvent("PRELOAD_MANIFEST_TYPE");
                        this._sendError(g)
                    }
                    e = [a]
                } else void 0 !== a.manifest && (e = a.manifest, f = a.path)
            }
            for (var h = 0, i = e.length; i > h; h++) this._addItem(e[h], f, d);
            this.setPaused(b !== !1 ? !1 : !0)
        }, b.load = function() { this.setPaused(!1) }, b.getItem = function(a) { return this._loadItemsById[a] || this._loadItemsBySrc[a] }, b.getResult = function(a, b) { var c = this._loadItemsById[a] || this._loadItemsBySrc[a]; if (null == c) return null; var d = c.id; return b && this._loadedRawResults[d] ? this._loadedRawResults[d] : this._loadedResults[d] }, b.getItems = function(a) {
            for (var b = [], c = 0, d = this._loadQueueBackup.length; d > c; c++) {
                var e = this._loadQueueBackup[c],
                    f = e.getItem();
                (a !== !0 || e.loaded) && b.push({ item: f, result: this.getResult(f.id), rawResult: this.getResult(f.id, !0) })
            }
            return b
        }, b.setPaused = function(a) { this._paused = a, this._paused || this._loadNext() }, b.close = function() {
            for (; this._currentLoads.length;) this._currentLoads.pop().cancel();
            this._scriptOrder.length = 0, this._loadedScripts.length = 0, this.loadStartWasDispatched = !1, this._itemCount = 0, this._lastProgress = 0 / 0
        }, b._addItem = function(a, b, c) {
            var d = this._createLoadItem(a, b, c);
            if (null != d) {
                var e = this._createLoader(d);
                null != e && (d._loader = e, this._loadQueue.push(e), this._loadQueueBackup.push(e), this._numItems++, this._updateProgress(), (this.maintainScriptOrder && d.type == createjs.LoadQueue.JAVASCRIPT || d.maintainOrder === !0) && (this._scriptOrder.push(d), this._loadedScripts.push(null)))
            }
        }, b._createLoadItem = function(a, b, d) {
            var e = createjs.LoadItem.create(a);
            if (null == e) return null;
            var f = createjs.RequestUtils.parseURI(e.src);
            f.extension && (e.ext = f.extension), null == e.type && (e.type = createjs.RequestUtils.getTypeByExtension(e.ext));
            var g = "",
                h = d || this._basePath,
                i = e.src;
            if (!f.absolute && !f.relative)
                if (b) {
                    g = b;
                    var j = createjs.RequestUtils.parseURI(b);
                    i = b + i, null == h || j.absolute || j.relative || (g = h + g)
                } else null != h && (g = h);
            e.src = g + e.src, e.path = g, (void 0 === e.id || null === e.id || "" === e.id) && (e.id = i);
            var k = this._typeCallbacks[e.type] || this._extensionCallbacks[e.ext];
            if (k) {
                var l = k.callback.call(k.scope, e, this);
                if (l === !1) return null;
                l === !0 || null != l && (e._loader = l), f = createjs.RequestUtils.parseURI(e.src), null != f.extension && (e.ext = f.extension)
            }
            return this._loadItemsById[e.id] = e, this._loadItemsBySrc[e.src] = e, null == e.loadTimeout && (e.loadTimeout = c.loadTimeout), null == e.crossOrigin && (e.crossOrigin = this._crossOrigin), e
        }, b._createLoader = function(a) { if (null != a._loader) return a._loader; for (var b = this.preferXHR, c = 0; c < this._availableLoaders.length; c++) { var d = this._availableLoaders[c]; if (d && d.canLoadItem(a)) return new d(a, b) } return null }, b._loadNext = function() {
            if (!this._paused) {
                this._loadStartWasDispatched || (this._sendLoadStart(), this._loadStartWasDispatched = !0), this._numItems == this._numItemsLoaded ? (this.loaded = !0, this._sendComplete(), this.next && this.next.load && this.next.load()) : this.loaded = !1;
                for (var a = 0; a < this._loadQueue.length && !(this._currentLoads.length >= this._maxConnections); a++) {
                    var b = this._loadQueue[a];
                    this._canStartLoad(b) && (this._loadQueue.splice(a, 1), a--, this._loadItem(b))
                }
            }
        }, b._loadItem = function(a) { a.on("fileload", this._handleFileLoad, this), a.on("progress", this._handleProgress, this), a.on("complete", this._handleFileComplete, this), a.on("error", this._handleError, this), a.on("fileerror", this._handleFileError, this), this._currentLoads.push(a), this._sendFileStart(a.getItem()), a.load() }, b._handleFileLoad = function(a) { a.target = null, this.dispatchEvent(a) }, b._handleFileError = function(a) {
            var b = new createjs.ErrorEvent("FILE_LOAD_ERROR", null, a.item);
            this._sendError(b)
        }, b._handleError = function(a) {
            var b = a.target;
            this._numItemsLoaded++, this._finishOrderedItem(b, !0), this._updateProgress();
            var c = new createjs.ErrorEvent("FILE_LOAD_ERROR", null, b.getItem());
            this._sendError(c), this.stopOnError || (this._removeLoadItem(b), this._loadNext())
        }, b._handleFileComplete = function(a) {
            var b = a.target,
                c = b.getItem(),
                d = b.getResult();
            this._loadedResults[c.id] = d;
            var e = b.getResult(!0);
            null != e && e !== d && (this._loadedRawResults[c.id] = e), this._saveLoadedItems(b), this._removeLoadItem(b), this._finishOrderedItem(b) || this._processFinishedLoad(c, b)
        }, b._saveLoadedItems = function(a) {
            var b = a.getLoadedItems();
            if (null !== b)
                for (var c = 0; c < b.length; c++) {
                    var d = b[c].item;
                    this._loadItemsBySrc[d.src] = d, this._loadItemsById[d.id] = d, this._loadedResults[d.id] = b[c].result, this._loadedRawResults[d.id] = b[c].rawResult
                }
        }, b._finishOrderedItem = function(a, b) { var c = a.getItem(); if (this.maintainScriptOrder && c.type == createjs.LoadQueue.JAVASCRIPT || c.maintainOrder) { a instanceof createjs.JavaScriptLoader && (this._currentlyLoadingScript = !1); var d = createjs.indexOf(this._scriptOrder, c); return -1 == d ? !1 : (this._loadedScripts[d] = b === !0 ? !0 : c, this._checkScriptLoadOrder(), !0) } return !1 }, b._checkScriptLoadOrder = function() {
            for (var a = this._loadedScripts.length, b = 0; a > b; b++) {
                var c = this._loadedScripts[b];
                if (null === c) break;
                if (c !== !0) {
                    var d = this._loadedResults[c.id];
                    c.type == createjs.LoadQueue.JAVASCRIPT && (document.body || document.getElementsByTagName("body")[0]).appendChild(d);
                    var e = c._loader;
                    this._processFinishedLoad(c, e), this._loadedScripts[b] = !0
                }
            }
        }, b._processFinishedLoad = function(a, b) { this._numItemsLoaded++, this._updateProgress(), this._sendFileComplete(a, b), this._loadNext() }, b._canStartLoad = function(a) {
            if (!this.maintainScriptOrder || a.preferXHR) return !0;
            var b = a.getItem();
            if (b.type != createjs.LoadQueue.JAVASCRIPT) return !0;
            if (this._currentlyLoadingScript) return !1;
            for (var c = this._scriptOrder.indexOf(b), d = 0; c > d;) {
                var e = this._loadedScripts[d];
                if (null == e) return !1;
                d++
            }
            return this._currentlyLoadingScript = !0, !0
        }, b._removeLoadItem = function(a) {
            var b = a.getItem();
            delete b._loader;
            for (var c = this._currentLoads.length, d = 0; c > d; d++)
                if (this._currentLoads[d] == a) { this._currentLoads.splice(d, 1); break }
        }, b._handleProgress = function(a) {
            var b = a.target;
            this._sendFileProgress(b.getItem(), b.progress), this._updateProgress()
        }, b._updateProgress = function() {
            var a = this._numItemsLoaded / this._numItems,
                b = this._numItems - this._numItemsLoaded;
            if (b > 0) {
                for (var c = 0, d = 0, e = this._currentLoads.length; e > d; d++) c += this._currentLoads[d].progress;
                a += c / b * (b / this._numItems)
            }
            this._lastProgress != a && (this._sendProgress(a), this._lastProgress = a)
        }, b._disposeItem = function(a) { delete this._loadedResults[a.id], delete this._loadedRawResults[a.id], delete this._loadItemsById[a.id], delete this._loadItemsBySrc[a.src] }, b._sendFileProgress = function(a, b) {
            if (this._isCanceled()) return void this._cleanUp();
            if (this.hasEventListener("fileprogress")) {
                var c = new createjs.Event("fileprogress");
                c.progress = b, c.loaded = b, c.total = 1, c.item = a, this.dispatchEvent(c)
            }
        }, b._sendFileComplete = function(a, b) {
            if (!this._isCanceled()) {
                var c = new createjs.Event("fileload");
                c.loader = b, c.item = a, c.result = this._loadedResults[a.id], c.rawResult = this._loadedRawResults[a.id], a.completeHandler && a.completeHandler(c), this.hasEventListener("fileload") && this.dispatchEvent(c)
            }
        }, b._sendFileStart = function(a) {
            var b = new createjs.Event("filestart");
            b.item = a, this.hasEventListener("filestart") && this.dispatchEvent(b)
        }, b.toString = function() { return "[PreloadJS LoadQueue]" }, createjs.LoadQueue = createjs.promote(a, "AbstractLoader")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a) { this.AbstractLoader_constructor(a, !0, createjs.AbstractLoader.TEXT) }
        var b = (createjs.extend(a, createjs.AbstractLoader), a);
        b.canLoadItem = function(a) { return a.type == createjs.AbstractLoader.TEXT }, createjs.TextLoader = createjs.promote(a, "AbstractLoader")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a) { this.AbstractLoader_constructor(a, !0, createjs.AbstractLoader.BINARY), this.on("initialize", this._updateXHR, this) }
        var b = createjs.extend(a, createjs.AbstractLoader),
            c = a;
        c.canLoadItem = function(a) { return a.type == createjs.AbstractLoader.BINARY }, b._updateXHR = function(a) { a.loader.setResponseType("arraybuffer") }, createjs.BinaryLoader = createjs.promote(a, "AbstractLoader")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a, b) { this.AbstractLoader_constructor(a, b, createjs.AbstractLoader.CSS), this.resultFormatter = this._formatResult, this._tagSrcAttribute = "href", this._tag = document.createElement(b ? "style" : "link"), this._tag.rel = "stylesheet", this._tag.type = "text/css" }
        var b = createjs.extend(a, createjs.AbstractLoader),
            c = a;
        c.canLoadItem = function(a) { return a.type == createjs.AbstractLoader.CSS }, b._formatResult = function(a) {
            if (this._preferXHR) {
                var b = a.getTag(),
                    c = document.getElementsByTagName("head")[0];
                if (c.appendChild(b), b.styleSheet) b.styleSheet.cssText = a.getResult(!0);
                else {
                    var d = document.createTextNode(a.getResult(!0));
                    b.appendChild(d)
                }
            } else b = this._tag;
            return b
        }, createjs.CSSLoader = createjs.promote(a, "AbstractLoader")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a, b) { this.AbstractLoader_constructor(a, b, createjs.AbstractLoader.IMAGE), this.resultFormatter = this._formatResult, this._tagSrcAttribute = "src", createjs.RequestUtils.isImageTag(a) ? this._tag = a : createjs.RequestUtils.isImageTag(a.src) ? this._tag = a.src : createjs.RequestUtils.isImageTag(a.tag) && (this._tag = a.tag), null != this._tag ? this._preferXHR = !1 : this._tag = document.createElement("img"), this.on("initialize", this._updateXHR, this) }
        var b = createjs.extend(a, createjs.AbstractLoader),
            c = a;
        c.canLoadItem = function(a) { return a.type == createjs.AbstractLoader.IMAGE }, b.load = function() {
            if ("" != this._tag.src && this._tag.complete) return void this._sendComplete();
            var a = this._item.crossOrigin;
            1 == a && (a = "Anonymous"), null == a || createjs.RequestUtils.isLocal(this._item.src) || (this._tag.crossOrigin = a), this.AbstractLoader_load()
        }, b._updateXHR = function(a) { a.loader.mimeType = "text/plain; charset=x-user-defined-binary", a.loader.setResponseType && a.loader.setResponseType("blob") }, b._formatResult = function(a) {
            var b = this;
            return function(c) {
                var d = b._tag,
                    e = window.URL || window.webkitURL;
                if (b._preferXHR)
                    if (e) {
                        var f = e.createObjectURL(a.getResult(!0));
                        d.src = f, d.onload = function() { e.revokeObjectURL(b.src) }
                    } else d.src = a.getItem().src;
                else;
                d.complete ? c(d) : d.onload = function() { c(this) }
            }
        }, createjs.ImageLoader = createjs.promote(a, "AbstractLoader")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a, b) { this.AbstractLoader_constructor(a, b, createjs.AbstractLoader.JAVASCRIPT), this.resultFormatter = this._formatResult, this._tagSrcAttribute = "src", this.setTag(document.createElement("script")) }
        var b = createjs.extend(a, createjs.AbstractLoader),
            c = a;
        c.canLoadItem = function(a) { return a.type == createjs.AbstractLoader.JAVASCRIPT }, b._formatResult = function(a) { var b = a.getTag(); return this._preferXHR && (b.text = a.getResult(!0)), b }, createjs.JavaScriptLoader = createjs.promote(a, "AbstractLoader")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a) { this.AbstractLoader_constructor(a, !0, createjs.AbstractLoader.JSON), this.resultFormatter = this._formatResult }
        var b = createjs.extend(a, createjs.AbstractLoader),
            c = a;
        c.canLoadItem = function(a) { return a.type == createjs.AbstractLoader.JSON && !a._loadAsJSONP }, b._formatResult = function(a) { var b = null; try { b = createjs.DataUtils.parseJSON(a.getResult(!0)) } catch (c) { var d = new createjs.ErrorEvent("JSON_FORMAT", null, c); return this._sendError(d), c } return b }, createjs.JSONLoader = createjs.promote(a, "AbstractLoader")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a) { this.AbstractLoader_constructor(a, !1, createjs.AbstractLoader.JSONP), this.setTag(document.createElement("script")), this.getTag().type = "text/javascript" }
        var b = createjs.extend(a, createjs.AbstractLoader),
            c = a;
        c.canLoadItem = function(a) { return a.type == createjs.AbstractLoader.JSONP || a._loadAsJSONP }, b.cancel = function() { this.AbstractLoader_cancel(), this._dispose() }, b.load = function() {
            if (null == this._item.callback) throw new Error("callback is required for loading JSONP requests.");
            if (null != window[this._item.callback]) throw new Error("JSONP callback '" + this._item.callback + "' already exists on window. You need to specify a different callback or re-name the current one.");
            window[this._item.callback] = createjs.proxy(this._handleLoad, this), window.document.body.appendChild(this._tag), this._tag.src = this._item.src
        }, b._handleLoad = function(a) { this._result = this._rawResult = a, this._sendComplete(), this._dispose() }, b._dispose = function() { window.document.body.removeChild(this._tag), delete window[this._item.callback] }, createjs.JSONPLoader = createjs.promote(a, "AbstractLoader")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a) { this.AbstractLoader_constructor(a, null, createjs.AbstractLoader.MANIFEST), this._manifestQueue = null }
        var b = createjs.extend(a, createjs.AbstractLoader),
            c = a;
        c.MANIFEST_PROGRESS = .25, c.canLoadItem = function(a) { return a.type == createjs.AbstractLoader.MANIFEST }, b.load = function() { this.AbstractLoader_load() }, b._createRequest = function() {
            var a = this._item.callback;
            this._request = null != a ? new createjs.JSONPLoader(this._item) : new createjs.JSONLoader(this._item)
        }, b.handleEvent = function(a) {
            switch (a.type) {
                case "complete":
                    return this._rawResult = a.target.getResult(!0), this._result = a.target.getResult(), this._sendProgress(c.MANIFEST_PROGRESS), void this._loadManifest(this._result);
                case "progress":
                    return a.loaded *= c.MANIFEST_PROGRESS, this.progress = a.loaded / a.total, (isNaN(this.progress) || 1 / 0 == this.progress) && (this.progress = 0), void this._sendProgress(a)
            }
            this.AbstractLoader_handleEvent(a)
        }, b.destroy = function() { this.AbstractLoader_destroy(), this._manifestQueue.close() }, b._loadManifest = function(a) {
            if (a && a.manifest) {
                var b = this._manifestQueue = new createjs.LoadQueue;
                b.on("fileload", this._handleManifestFileLoad, this), b.on("progress", this._handleManifestProgress, this), b.on("complete", this._handleManifestComplete, this, !0), b.on("error", this._handleManifestError, this, !0), b.loadManifest(a)
            } else this._sendComplete()
        }, b._handleManifestFileLoad = function(a) { a.target = null, this.dispatchEvent(a) }, b._handleManifestComplete = function() { this._loadedItems = this._manifestQueue.getItems(!0), this._sendComplete() }, b._handleManifestProgress = function(a) { this.progress = a.progress * (1 - c.MANIFEST_PROGRESS) + c.MANIFEST_PROGRESS, this._sendProgress(this.progress) }, b._handleManifestError = function(a) {
            var b = new createjs.Event("fileerror");
            b.item = a.data, this.dispatchEvent(b)
        }, createjs.ManifestLoader = createjs.promote(a, "AbstractLoader")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a, b) { this.AbstractMediaLoader_constructor(a, b, createjs.AbstractLoader.SOUND), createjs.RequestUtils.isAudioTag(a) ? this._tag = a : createjs.RequestUtils.isAudioTag(a.src) ? this._tag = a : createjs.RequestUtils.isAudioTag(a.tag) && (this._tag = createjs.RequestUtils.isAudioTag(a) ? a : a.src), null != this._tag && (this._preferXHR = !1) }
        var b = createjs.extend(a, createjs.AbstractMediaLoader),
            c = a;
        c.canLoadItem = function(a) { return a.type == createjs.AbstractLoader.SOUND }, b._createTag = function(a) { var b = document.createElement("audio"); return b.autoplay = !1, b.preload = "none", b.src = a, b }, createjs.SoundLoader = createjs.promote(a, "AbstractMediaLoader")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a, b) { this.AbstractMediaLoader_constructor(a, b, createjs.AbstractLoader.VIDEO), createjs.RequestUtils.isVideoTag(a) || createjs.RequestUtils.isVideoTag(a.src) ? (this.setTag(createjs.RequestUtils.isVideoTag(a) ? a : a.src), this._preferXHR = !1) : this.setTag(this._createTag()) }
        var b = createjs.extend(a, createjs.AbstractMediaLoader),
            c = a;
        b._createTag = function() { return document.createElement("video") }, c.canLoadItem = function(a) { return a.type == createjs.AbstractLoader.VIDEO }, createjs.VideoLoader = createjs.promote(a, "AbstractMediaLoader")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a) { this.AbstractLoader_constructor(a, null, createjs.AbstractLoader.SPRITESHEET), this._manifestQueue = null }
        var b = createjs.extend(a, createjs.AbstractLoader),
            c = a;
        c.SPRITESHEET_PROGRESS = .25, c.canLoadItem = function(a) { return a.type == createjs.AbstractLoader.SPRITESHEET }, b.destroy = function() { this.AbstractLoader_destroy, this._manifestQueue.close() }, b._createRequest = function() {
            var a = this._item.callback;
            this._request = null != a && a instanceof Function ? new createjs.JSONPLoader(this._item) : new createjs.JSONLoader(this._item)
        }, b.handleEvent = function(a) {
            switch (a.type) {
                case "complete":
                    return this._rawResult = a.target.getResult(!0), this._result = a.target.getResult(), this._sendProgress(c.SPRITESHEET_PROGRESS), void this._loadManifest(this._result);
                case "progress":
                    return a.loaded *= c.SPRITESHEET_PROGRESS, this.progress = a.loaded / a.total, (isNaN(this.progress) || 1 / 0 == this.progress) && (this.progress = 0), void this._sendProgress(a)
            }
            this.AbstractLoader_handleEvent(a)
        }, b._loadManifest = function(a) {
            if (a && a.images) {
                var b = this._manifestQueue = new createjs.LoadQueue;
                b.on("complete", this._handleManifestComplete, this, !0), b.on("fileload", this._handleManifestFileLoad, this), b.on("progress", this._handleManifestProgress, this), b.on("error", this._handleManifestError, this, !0), b.loadManifest(a.images)
            }
        }, b._handleManifestFileLoad = function(a) {
            var b = a.result;
            if (null != b) {
                var c = this.getResult().images,
                    d = c.indexOf(a.item.src);
                c[d] = b
            }
        }, b._handleManifestComplete = function() { this._result = new createjs.SpriteSheet(this._result), this._loadedItems = this._manifestQueue.getItems(!0), this._sendComplete() }, b._handleManifestProgress = function(a) { this.progress = a.progress * (1 - c.SPRITESHEET_PROGRESS) + c.SPRITESHEET_PROGRESS, this._sendProgress(this.progress) }, b._handleManifestError = function(a) {
            var b = new createjs.Event("fileerror");
            b.item = a.data, this.dispatchEvent(b)
        }, createjs.SpriteSheetLoader = createjs.promote(a, "AbstractLoader")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a, b) { this.AbstractLoader_constructor(a, b, createjs.AbstractLoader.SVG), this.resultFormatter = this._formatResult, this._tagSrcAttribute = "data", b ? this.setTag(document.createElement("svg")) : (this.setTag(document.createElement("object")), this.getTag().type = "image/svg+xml"), this.getTag().style.visibility = "hidden" }
        var b = createjs.extend(a, createjs.AbstractLoader),
            c = a;
        c.canLoadItem = function(a) { return a.type == createjs.AbstractLoader.SVG }, b._formatResult = function(a) {
            var b = createjs.DataUtils.parseXML(a.getResult(!0), "text/xml"),
                c = a.getTag();
            return !this._preferXHR && document.body.contains(c) && document.body.removeChild(c), null != b.documentElement ? (c.appendChild(b.documentElement), c.style.visibility = "visible", c) : b
        }, createjs.SVGLoader = createjs.promote(a, "AbstractLoader")
    }(), this.createjs = this.createjs || {},
    function() {
        "use strict";

        function a(a) { this.AbstractLoader_constructor(a, !0, createjs.AbstractLoader.XML), this.resultFormatter = this._formatResult }
        var b = createjs.extend(a, createjs.AbstractLoader),
            c = a;
        c.canLoadItem = function(a) { return a.type == createjs.AbstractLoader.XML }, b._formatResult = function(a) { return createjs.DataUtils.parseXML(a.getResult(!0), "text/xml") }, createjs.XMLLoader = createjs.promote(a, "AbstractLoader")
    }();

/* jquery.html5loader */
! function(a) {
    "use strict";
    a.html5Loader = function(b) {
        var c = { filesToLoad: null, debugMode: !1, stopExecution: !1, mediaBufferSizeToPreload: .2, forceMediaPreload: !0, onBeforeLoad: function() {}, onComplete: function() {}, onElementLoaded: function() {}, onUpdate: function() {}, onMediaError: function() {} },
            d = a.extend(c, b),
            e = d.filesToLoad,
            f = d.debugMode,
            g = d.mediaBufferSizeToPreload,
            h = d.forceMediaPreload,
            i = d.stopExecution,
            j = d.onBeforeLoad,
            k = d.onComplete,
            l = d.onElementLoaded,
            m = d.onUpdate,
            n = d.onMediaError,
            o = a("head"),
            p = 0,
            q = 0,
            r = [],
            s = navigator.userAgent.match(/iPad|Android|(?=.*\bWindows\b)(?=.*\bARM\b)/i),
            t = function(a) { return /android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|meego.+mobile|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4)) ? !0 : !1 }(navigator.userAgent || navigator.vendor || window.opera),
            u = {},
            v = function(a) { f && console && console.log(a) };
        u.video = function() {
            var a = document.createElement("video"),
                b = !1;
            try { a.canPlayType && (b = { ogg: a.canPlayType('video/ogg; codecs="theora"').replace(/^no$/, ""), h264: a.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/, ""), webm: a.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/, ""), vp9: a.canPlayType('video/webm; codecs="vp9"').replace(/^no$/, "") }, b.mp4 = b.h264) } catch (c) {}
            return b
        }(), u.audio = function() {
            var a = document.createElement("audio"),
                b = !1;
            try { a.canPlayType && (b = { ogg: a.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/, ""), mp3: a.canPlayType("audio/mpeg;").replace(/^no$/, ""), opus: a.canPlayType('audio/ogg; codecs="opus"').replace(/^no$/, ""), wav: a.canPlayType('audio/wav; codecs="1"').replace(/^no$/, ""), m4a: (a.canPlayType("audio/x-m4a;") || a.canPlayType("audio/aac;")).replace(/^no$/, "") }) } catch (c) {}
            return b
        }();
        var w = function(b) {
                var c = b.type.toLowerCase(),
                    d = b.sources;
                return a.each(d, function(a) { return u[c][a] ? (b = b.sources[a], b.type = c.toUpperCase(), !1) : void 0 }), b.source ? b : !1
            },
            x = function() {
                var a = 0;
                v("_bytesTotal = " + q), v("_bytesLoaded = " + p), a = Math.round(p / q * 100), v("Percentage: " + a + "%"), m(a), r.length || k()
            },
            y = function(a, b) {
                var c = b;
                ("VIDEO" === c.type || "AUDIO" === c.type) && (c = w(c)), c && (q += c.size, r.push(c))
            },
            z = function(b) { v("json loaded"), a(b.files).each(y) },
            A = function(b) {
                var c = new a.Deferred,
                    d = b.size,
                    e = a("<img>");
                return e.on("load", function() { v("File Loaded:" + b.source), p += d, l(b, this), r.splice(0, 1), x(), c.resolve() }), e.attr("src", b.source), e = null, c.promise()
            },
            B = function(b) {
                var c = new a.Deferred,
                    d = b.size,
                    e = a("VIDEO" === b.type ? "<video>" : "<audio>"),
                    f = function() { v("File Loaded:" + b.source), p += d, l(b, e[0]), r.splice(0, 1), e.off(), e = null, x(), c.resolve() };
                return t || s ? f() : (e.on("loadstart", function() { 3 === this.networkState && (n(b, this), f()) }), e.on("error stalled", function() { n(b, this), f() }), e.on("loadedmetadata", function() {
                    e.on("progress", function() {
                        var a = 0;
                        v("loading in progress file:" + b.source), this.buffered.length > 0 && (a = d / this.duration * this.buffered.end(0), d -= a, p += a, x(), 1 / d * a > g && !h && f())
                    })
                }), e.attr({ preload: "auto", src: b.source, controls: "controls" }), h && e.on("canplaythrough", f)), c.promise()
            },
            C = function(b) {
                var c = new a.Deferred,
                    d = b.size,
                    e = { url: b.source, dataType: "script" };
                return ("undefined" == typeof b.stopExecution && i || b.stopExecution === !0) && (e.converters = { "text script": function(a) { return a } }), a.ajax(e).done(function(a) { v("File Loaded:" + b.source), p += d, l(b, a), r.splice(0, 1), x(), c.resolve() }).fail(function(a, c, d) { v("\n File Failed: " + b.source + "\n Message:     " + d.message + "\n") }), c.promise()
            },
            D = function(b, c) {
                var d = new a.Deferred;
                return a.ajax({
                    url: b.source,
                    dataType: "text",
                    success: function(a) {
                        if (v("File Loaded:" + b.source), l(b, a), p += b.size, r.splice(0, 1), x(), c)
                            if (document.createStyleSheet) try { document.createStyleSheet(b.source) } catch (e) {} else {
                                var f;
                                f = document.createElement("link"), f.rel = "stylesheet", f.type = "text/css", f.media = "all", f.href = b.source, o[0].appendChild(f)
                            }
                        d.resolve(a)
                    }
                }), d.promise()
            },
            E = function() {
                var b = r.slice();
                a.each(b, function(a, b) {
                    switch (v("preloading files"), v("file to preload:" + b.source), b.type) {
                        case "IMAGE":
                            A(b);
                            break;
                        case "VIDEO":
                        case "AUDIO":
                            B(b);
                            break;
                        case "SCRIPT":
                            C(b);
                            break;
                        case "TEXT":
                        case "CSS":
                            D(b, /CSS/g.test(b.type));
                            break;
                        default:
                            return !1
                    }
                })
            };
        return this.init = function() {
            v("plugin initialized");
            var b = new a.Deferred,
                c = b.promise();
            j(), "object" == typeof e ? (a.proxy(z, this, e)(), b.resolve(e)) : (a.getJSON(e, b.resolve), b.pipe(a.proxy(z, this))), c.then(a.proxy(x, this)), c.then(a.proxy(E, this))
        }, this.init(), this
    }
}(jQuery);
