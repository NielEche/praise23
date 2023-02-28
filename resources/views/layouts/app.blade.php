<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#3ed2a7">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/favicons/favicon.png') }}" />
         
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css?family=Poppins:600,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <!-- <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">-->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        
        <link rel="stylesheet" href="{{ asset('assets/vendors/liquid-icon/liquid-icon.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/theme-vendors.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/themes/virtus-1.css') }}" />

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/revolution/css/settings.css') }}">
        
        <!-- Head Libs -->
        <script async src="{{ asset('assets/vendors/modernizr.min.js') }}"></script>
	

        @livewireStyles

        <!-- Scripts -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!--<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>-->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>

    <body data-mobile-nav-trigger-alignment="right" data-mobile-nav-align="left" data-mobile-nav-style="classic" data-mobile-nav-shceme="gray" data-mobile-header-scheme="gray" data-mobile-nav-breakpoint="1199">
        <div id="wrap">
                
            <!-- Page Heading -->
            @include('partial.header')

            <!-- Page Content -->
            <main id="content" class="content">
                @yield('content')
            </main>
            @include('partial.footer')
        </div>

        @stack('modals')

        @livewireScripts

        <script src="//maps.googleapis.com/maps/api/js?key={YOUR_API_KEY}"></script>

        <script src="{{ asset('assets/vendors/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/theme-vendors.js') }}"></script>
        <script src="{{ asset('assets/js/theme.min.js') }}"></script>
        <script src="{{ asset('assets/js/liquidAjaxContactForm.min.js') }}"></script>
        <script src="{{ asset('assets/js/liquidAjaxMailchimp.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('assets/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
        <script type="text/javascript" src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

        <style>
            #rev_slider_1_1 .metis.tparrows {
                background: rgba(10, 10, 10, 0.4);
                padding: 10px;
                transition: all 0.3s;
                -webkit-transition: all 0.3s;
                width: 60px;
                height: 60px;
                box-sizing: border-box;
            }
            #rev_slider_1_1 .metis.tparrows:before {
                color: rgb(255, 255, 255);
                transition: all 0.3s;
                -webkit-transition: all 0.3s;
            }
            #rev_slider_1_1 .metis.tparrows:hover {
                background: rgba(10, 10, 10, 0.66);
            }
            #rev_slider_1_1 .metis.tparrows:hover:before {
                transform: scale(1.5);
            }
        </style>
        <script type="text/javascript">
            var revapi1,
                tpj;
            (function () {
                if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",
                    onLoad);
                else onLoad();

                function onLoad() {
                    if (tpj === undefined) {
                        tpj = jQuery;
                        if ("off" == "on") tpj.noConflict();
                    }
                    if (tpj("#rev_slider_1_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_1_1");
                    } else {
                        revapi1 = tpj("#rev_slider_1_1").show().revolution({
                            sliderType: "standard",
                            jsFileLocation: "//virtusone.liquid-themes.com/wp-content/plugins/revslider/public/assets/js/",
                            sliderLayout: "fullscreen",
                            dottedOverlay: "none",
                            delay: 9000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                mouseScrollReverse: "default",
                                onHoverStop: "off",
                                arrows: {
                                    style: "metis",
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 992,
                                    hide_onleave: false,
                                    tmp: '',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    }
                                }
                            },
                            responsiveLevels: [1240, 1024, 778, 480],
                            visibilityLevels: [1240, 1024, 778, 480],
                            gridwidth: [1240, 1024, 778, 480],
                            gridheight: [868, 768, 960, 720],
                            lazyType: "none",
                            scrolleffect: {
                                fade: "on",
                                on_slidebg: "on",
                                on_parallax_layers: "on",
                            },
                            parallax: {
                                type: "mouse",
                                origo: "enterpoint",
                                speed: 400,
                                speedbg: 0,
                                speedls: 0,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                            },
                            shadow: 0,
                            spinner: "spinner0",
                            stopLoop: "off",
                            stopAfterLoops: -1,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "",
                            disableProgressBar: "on",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    }; /* END OF revapi call */

                }; /* END OF ON LOAD FUNCTION */
            }()); /* END OF WRAPPING FUNCTION */
        </script>

    </body>
</html>







