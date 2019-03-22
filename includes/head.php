<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>Tellit</title>
<meta property="og:type" content="Stories" />
<meta property="og:title" content="" />
<meta property="og:description"
    content="Tellit is a space for the children to be themselves, to speak and be seen, heard, and understood. It is a new paradigm for child support." />

<!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  <![endif]-->
<script type="text/javascript">
    var base_url = "";
</script>
<link href="css/app.css" rel="stylesheet" />

<script>
    //var base_url = window.location.origin+'/';
    //var base_url = window.location.origin;
    // Contents to be minified and placed inline in the document header
    // Doc: https://code.area17.com/a17/fe-boilerplate/wikis/js-head

    // go go
    (function (d) {
        // set up a master object
        var A17 = window.A17 || {},
            de = d.documentElement,
            w = window,
            h = d.getElementsByTagName('head')[0],
            s,
            a;

        // test for HTML5 vs HTML4 support, cutting the mustard
        A17.browserSpec =
            typeof d.querySelectorAll &&
            'addEventListener' in w &&
            w.history.pushState &&
            d.implementation.hasFeature(
                'http://www.w3.org/TR/SVG11/feature#BasicStructure',
                '1.1'
            ) ?
            'html5' :
            'html4';

        // test for touch support. Caution: this is dangerous: https://hacks.mozilla.org/2013/04/detecting-touch-its-the-why-not-the-how/
        A17.touch =
            'ontouchstart' in w || (w.documentTouch && d instanceof DocumentTouch) ?
            true :
            false;

        // testing for object fit support
        A17.objectFit = 'objectFit' in de.style;

        // expose A17
        window.A17 = A17;

        // add class names
        de.className = de.className.replace(
            /\bno-js\b/,
            ' js ' +
            A17.browserSpec +
            (A17.touch ? ' touch' : ' no-touch') +
            (A17.objectFit ? ' objectFit' : ' no-objectFit')
        );

        // disable all the stylesheets, except the html4css one
        function disableSS() {
            if (/in/.test(d.readyState)) {
                setTimeout(disableSS, 9);
            } else {
                for (var i = 0; i < d.styleSheets.length; i++) {
                    var ss = d.styleSheets[i];
                    if (ss.title !== 'html4css') {
                        ss.disabled = true;
                    }
                }
            }
        }

        // FF < 3.6 didn't have document.readyState - hacky shim for it
        function disableSSff3() {
            if (!d.readyState && d.addEventListener) {
                if (d.body) {
                    setTimeout(function () {
                        d.readyState = 'complete';
                    }, 500);
                } else {
                    setTimeout(disableSSff3, 9);
                }
            }
        }

        // insert sprite SVG on DOM ready
        function insSvg() {
            if (/in/.test(d.readyState)) {
                setTimeout(insSvg, 9);
            } else {
                var db = d.body;
                var s = d.createElement('div');
                s.className = 'svg-sprite';
                s.innerHTML = a.responseText;
                db.insertBefore(s, db.childNodes[0]);
            }
        }

        if (A17.browserSpec === 'html4') {
            // if an old browser - sort the page out for showing the html4css
            s = d.createElement('link');
            s.rel = 'stylesheet';
            s.title = 'html4css';
            s.href = base_url + 'css/html4css.css';
            h.appendChild(s);
            s = d.createElement('script');
            s.src = '//legacypicturefill.s3.amazonaws.com/legacypicturefill.min.js';
            h.appendChild(s);
            disableSSff3();
            disableSS();
        } else {
            s = d.createElement('script');
            s.src =
                '//cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.2/picturefill.min.js';
            h.appendChild(s);
            // if not an old browser - ajax in the sprite
            a = new XMLHttpRequest();
            a.open('GET', base_url + 'icons/icons.svg', true);
            a.send();
            a.onload = function (e) {
                if (a.status >= 200 && a.status < 400) {
                    insSvg();
                }
            };
        }

        window.WebFontConfig = {
            custom: {
                families: ['Matter-Regular', 'DomaineTextWeb-Light'],
                urls: [base_url + 'css/fonts.css'],
            },
            active: function () {
                var event = document.createEvent('HTMLEvents');
                event.initEvent('a17:fonts_loaded', true, true);
                event.eventName = 'a17:fonts_loaded';
                document.dispatchEvent(event);
            },
            fontactive: function (familyName, fvd) {
                var name =
                    'wf-' +
                    familyName.replace(/[\W_]+/g, '').toLowerCase() +
                    '-' +
                    fvd +
                    '-active';
                var date = new Date();
                date.setTime(date.getTime() + 24 * 60 * 60 * 1000);
                var expires = '; expires=' + date.toGMTString();
                document.cookie = 'A17_' + name + '=' + 1 + expires + '; path=/';
            },
        };

        (function (d) {
            let wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    })(document);
</script>