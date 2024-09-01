<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tours & Travels</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="app"></div>
    {{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="{{ asset('public/webfrontend/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('public/webfrontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/webfrontend/js/particles.js') }}"></script>
    <script src="{{ asset('public/webfrontend/js/particlerun.js') }}"></script>
    <script src="{{ asset('public/webfrontend/js/plugin.js') }}"></script>
    <script src="{{ asset('public/webfrontend/js/main.js') }}"></script>
    <script src="{{ asset('public/webfrontend/js/custom-swiper.js') }}"></script>
    <script src="{{ asset('public/webfrontend/js/custom-nav.js') }}"></script>
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML =
                        "window.__CF$cv$params={r:'8a2756580cde1191',t:'MTcyMDg1MzQxMS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/7a55c9ccbaaa/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8a2756580cde1191","version":"2024.6.1","r":1,"serverTiming":{"name":{"cfL4":true}},"token":"e2e296138d64407b8469055f5cbf0b42","b":1}'
        crossorigin="anonymous"></script>
</body>

</html>
