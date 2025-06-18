<!doctype html>
<head>

    <!--[if IE]>
    <meta  http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <![endif]-->

    <link rel="shortcut icon" href="https://edshopb2b.edsystem.cz/Images/favicon.ico" />

    <!--[if lt IE 9]>
    <script src="https://edshopb2b.edsystem.cz/Scripts/library/html5shiv.min.js"></script>
    <script src="https://edshopb2b.edsystem.cz/Scripts/library/respond.min.js"></script>

    <![endif]-->
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">--}}
    <link media="all" rel="stylesheet" href="https://edshopb2b.edsystem.cz/Styles/fonts/Gotham/kit.css" />
{{--    <link media="all" rel="stylesheet" href="https://edshopb2b.edsystem.cz/Styles/icons/style.css" />--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://edshopb2b.edsystem.cz/assets/bundles/css/basket">
    <link href="https://edshopb2b.edsystem.cz//assets/bundles/css/product" rel="stylesheet"/>
    <link href="https://edshopb2b.edsystem.cz/assets/bundles/css/main" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/bundles/css/paramssearch.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/css/default.css') }}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css"/>

    <script src="https://edshopb2b.edsystem.cz//assets/bundles/js/product"></script>
    <script src="https://edshopb2b.edsystem.cz/assets/bundles/js/main"></script>
    <script src="{{ asset('assets/bundles/js/main.js') }}"></script>
{{--    <script src="https://edshopb2b.edsystem.cz/assets/bundles/js/basket"></script>--}}


    <link rel="stylesheet" href="{{ asset('Styles/fonts/Gotham/kit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/document.css') }}">
    <link rel="stylesheet" href="{{ asset('css/document.css') }}">
    <link rel="stylesheet" href="{{ asset('css/OOWidget.css') }}">
    <link rel="stylesheet" href="{{asset('Styles/icon/style.css')}}">



    <script>
        var g_cur_ID = 8;
    </script>

    <script>
        var consentAnalytical = hasConsentForCategory(3);
        var consentMarketing = hasConsentForCategory(4);
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('consent', 'update', {
            'ad_storage': consentMarketing ? 'granted' : 'denied',
            'analytics_storage': consentAnalytical ? 'granted' : 'denied',
            'ad_user_data': consentMarketing ? 'granted' : 'denied',
            'ad_personalization': consentMarketing ? 'granted' : 'denied',
        });
    </script>
    <!--Google tag(gtag.js)-->
    <script async src='https://www.googletagmanager.com/gtag/js?id=UA-2158062-55'></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-2158062-55');
    </script>

    <link href="https://edshopb2b.edsystem.cz/assets/bundles/css/default?v=pkmhn1X8gtn1gknA5Wb1odRig2TBkoE2_ErtFriN6ZI1" rel="stylesheet"/>

    <script src="https://edshopb2b.edsystem.cz/assets/bundles/js/default?v=liLF6iyFPSAG1FthyjB3DhBy22vjrP_Fd6HG92tjHB41"></script>
    <script src="{{ asset('js/main.js') }}"></script>


    <script type='text/javascript'>
        var appInsights = window.appInsights || function(config) {
            function r(config) { t[config] = function() { var i = arguments; t.queue.push(function() { t[config].apply(t, i) }) } }
            var t = { config: config }, u = document, e = window, o = 'script', s = u.createElement(o), i, f; for (s.src = config.url || '//az416426.vo.msecnd.net/scripts/a/ai.0.js', u.getElementsByTagName(o)[0].parentNode.appendChild(s), t.cookie = u.cookie, t.queue = [], i = ['Event', 'Exception', 'Metric', 'PageView', 'Trace', 'Ajax']; i.length;) r('track' + i.pop()); return r('setAuthenticatedUserContext'), r('clearAuthenticatedUserContext'), config.disableExceptionTracking || (i = 'onerror', r('_' + i), f = e[i], e[i] = function(config, r, u, e, o) { var s = f && f(config, r, u, e, o); return s !== !0 && t['_' + i](config, r, u, e, o), s }), t
        } ({
            instrumentationKey: 'f0fd5bfe-4ac9-4689-ae6c-8e6d1f7e902c'
        });
        window.appInsights = appInsights;
        appInsights.trackPageView();
    </script>
    <script type='text/javascript'>
        window.smartlook||(function(d){
            var o=smartlook=function()
            {o.api.push(arguments)}
                ,h=d.getElementsByTagName('head')[0];
            var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
            c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
        })(document);
        smartlook('init', '6fa83f556d207fb290869cf3dd2eba94dc309c34');
        smartlook('consentIP','Consented.');
        smartlook('consentAPI', 'Consented.');
        smartlook('identify', 1440560, {
            'subj_name': 'Ondrej Zelina'
        });
    </script>
    <!-- Google Tag Manager -->
    <script>
        var consentAnalytical = hasConsentForCategory(3);
        var consentMarketing = hasConsentForCategory(4);
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('consent', 'update', {
            'ad_storage': consentMarketing ? 'granted' : 'denied',
            'analytics_storage': consentAnalytical ? 'granted' : 'denied',
            'ad_user_data': consentMarketing ? 'granted' : 'denied',
            'ad_personalization': consentMarketing ? 'granted' : 'denied',
        });
    </script>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-W86G38K');</script>
    <!-- End Google Tag Manager -->

    <title>Document</title>
    @livewireStyles

</head>
    <body>
        @include('layouts.inc.frontand.navbar')

        @yield('contend')




        <div id="siteTools" class="site-tools site-tools--bottom page-footer_container"></div>
        <script>

            function extAction(category, prefix, obj) {
                GAAction(category, prefix, obj);
            }

            function GAAction(category,prefix,obj) {
                // neni kompatibilní s GA4
                return;

                var gaString = onclick="ga('send','event','#CATEGORY#','Click','#PREFIX##LABEL#',2, {'dimension1' : '1440560 - Mgr. Radka Staszko Pondělíková'});ga('send','pageview');";

                /**
                 // gaLabel je label pro popis v GA
                 // pokud je na elementu z ktereho se vola metoda atribut data-label tak se pouzije hodnota z tohoto atributu
                 // pokud je na elementu z ktereho se vola metoda atribut data-title (slouzi vetsinou pro dictionary) tak se pouzije hodnota z tohoto atributu
                 // pokud data-label neni ale jedna se o formularovy prvek tak se pokusi text vytahnout pres label ktery je s elementem sparovany [id / for]
                 // pokud ani jedno vyse tak se pokusi najit obycejny text daneho elementu
                 */
                var gaLabel = '';

                var arrFormElements = ['select','input','button'];

                if(typeof obj == 'object') {
                    var tagName = obj.prop('tagName').toLowerCase();

                    if(obj.attr('data-label')) {
                        gaLabel = obj.data('label');
                    } else if(obj.attr('data-title')) {
                        // pokud ma element atribut data-title pro slovnik tak ho pouzij
                        gaLabel = dictionary.GetValue(obj.data('title'));
                    } else if($.inArray( tagName, arrFormElements ) != -1) {
                        // pokud to je button tak vem text
                        if(obj.is('button')) {
                            gaLabel = obj.text();
                        } else if(obj.is(':submit')) {
                            // pokud to je input[type="submit"] tak vem value
                            gaLabel = obj.val();
                        } else {
                            // pokud ma id a existuje k nemu sparovany label
                            if(obj.attr('id') && $('[for="' + obj.attr('id') +'"]')) {
                                gaLabel = $('[for="' + obj.attr('id') +'"]').text();
                            }
                        }
                    } else {
                        gaLabel = obj.text();
                    }

                    // specialita pro combobox
                    if(tagName == 'select') {
                        gaLabel = gaLabel + ' - ' + obj.find(':selected').text();
                    }

                } else if(typeof obj == 'string') {
                    // obj je pouze string
                    gaLabel = obj;
                }
                //alert(gaString);
                gaString = gaString.replace("#LABEL#", jsCorrect($.trim(gaLabel)).replace("\"","")).replace("#CATEGORY#",GACategoryName(category)).replace("#PREFIX#",GACategoryLevelPrefix(prefix));
                //alert(gaString);
                eval(gaString);
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.rtl.min.css"/>
        <!-- Default theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.rtl.min.css"/>
        <!-- Semantic UI theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/semantic.rtl.min.css"/>
        <!-- Bootstrap theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.rtl.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css">
        <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <script src="{{ asset('assets/bundles/js/paramssearch.js') }}"></script>

        <script>
            window.addEventListener('message', event =>{
                alertify.set('notifier', 'position', 'top-right');
                alertify.notify(event.detail[0].text, event.detail[0].type);
            });
            Livewire.addEventListener('getShoppingCartCount', (eventData) => {
                console.log(eventData);
                document.getElementById('basketInfo_itemsCount').innerText = eventData.newCount;
            });
        </script>
    @livewireScripts
    </body>
</html>

