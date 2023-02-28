@extends('layouts.app')

@section('title')
Home
@endsection

@section('custom-style')
@endsection

@section('content')

<section class="vc_row mb-50 fullheight d-none d-md-block">
            <style>
           
                @media screen and (max-width: 699px)
                {
                .visible-sm
                {
                    display: none;
                }

                }

                .visible-lg
                {
                display: none !important;
                }
                @media screen and (min-width: 699px)
                {
                .visible-lg
                {
                    display: block;
                }

                }
            </style>
    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper  fullscreen-container" data-alias="virtuslider"
        data-source="gallery" style="background:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.3 fullscreen mode -->
        <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.3">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-1" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                    data-thumb="assets/demo/sliders/virtus-1/virtus-50x25.jpg" data-rotate="0" data-saveperformance="off" data-title="Virtus"
                    data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                    data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('assets/img/newimages/headimg.png')}}" alt="" title="virtus" 
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off"
                        class="rev-slidebg pt-5 " data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <h2 class="tp-caption   tp-resizeme" id="slide-1-layer-1" data-x="['center','center','center','center']"
                        data-hoffset="['-1','-1','-1','-1']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-190','-190','-182','-182']" data-fontsize="['100','100','100','72']"
                        data-lineheight="['100','100','100','65']" data-width="none" data-height="none" data-whitespace="nowrap"
                        data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">
                         </h2>

                    <!-- LAYER NR. 2 -->
                    <h2 class="tp-caption   tp-resizeme" id="slide-1-layer-2" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-95','-95','-105','-116']" data-fontsize="['100','100','100','72']"
                        data-lineheight="['100','100','100','65']" data-width="none" data-height="none" data-whitespace="nowrap"
                        data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":1150,"speed":800,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">
                         </h2>

                    <!-- LAYER NR. 3 -->
                    <p class="tp-caption   tp-resizeme" id="slide-1-layer-3" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['49','49','20','15']" data-fontsize="['21','21','21','16']"
                        data-lineheight="['30','30','30','28']" data-letterspacing="['0.5','0.5','0.5','0']"
                        data-width="['610','610','610','441']" data-height="none" data-whitespace="normal" data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":1300,"speed":800,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; min-width: 610px; max-width: 610px; white-space: normal; font-size: 21px; line-height: 30px; font-weight: 400; color: rgba(255,255,255,0.7); letter-spacing: 0.5px;">
                       </p>

                    <!-- LAYER NR. 4 -->
                    <!--<div class="tp-caption rev-btn  tp-resizeme" id="slide-1-layer-4"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['146','146','126','116']"
                        data-fontsize="['14','14','13','13']" data-fontweight="['600','600','500','500']"
                        data-color="['rgb(255,255,255)','rgb(255,255,255)','rgba(255,255,255,1)','rgba(255,255,255,1)']"
                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                        data-actions='[{"event":"click","action":"scrollbelow","offset":"-66px","delay":"","speed":"1200","ease":"Quint.easeInOut"}]'
                        data-responsive_offset="on"
                        data-frames='[{"delay":1450,"speed":800,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"600","ease":"Quint.easeOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bc:rgb(255,255,255);"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[21,21,21,21]"
                        data-paddingright="[40,40,40,40]" data-paddingbottom="[21,21,21,21]" data-paddingleft="[40,40,40,40]"
                        style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 600; color: #ffffff; letter-spacing: 2px;background-color:rgb(51,140,242);border-color:rgba(255,255,255,0);border-style:solid;border-width:1px 1px 1px 1px;border-radius:300px 300px 300px 300px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        DISCOVER AVE </div>-->
                </li>
                
                <!-- SLIDE  -->
                <li  data-index="rs-1" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0"
                  data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                  data-thumb="assets/demo/sliders/virtus-1/virtus-50x25.jpg" data-rotate="0" data-saveperformance="off" data-title="Virtus"
                  data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                  data-param8="" data-param9="" data-param10="" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="{{asset('assets/img/newimages/homeimg2.png')}}" alt="" title="virtus" 
                      data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off"
                      class="rev-slidebg pt-5" data-no-retina>
                  <!-- LAYERS -->

                  <!-- LAYER NR. 1 -->
                  <h2 class="tp-caption   tp-resizeme" id="slide-1-layer-1" data-x="['center','center','center','center']"
                      data-hoffset="['-1','-1','-1','-1']" data-y="['middle','middle','middle','middle']"
                      data-voffset="['-190','-190','-182','-182']" data-fontsize="['100','100','100','72']"
                      data-lineheight="['100','100','100','65']" data-width="none" data-height="none" data-whitespace="nowrap"
                      data-type="text" data-responsive_offset="on"
                      data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                      data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                      data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                      style="z-index: 5; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">
                       </h2>

                  <!-- LAYER NR. 2 -->
                  <h2 class="tp-caption   tp-resizeme" id="slide-1-layer-2" data-x="['center','center','center','center']"
                      data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                      data-voffset="['-95','-95','-105','-116']" data-fontsize="['100','100','100','72']"
                      data-lineheight="['100','100','100','65']" data-width="none" data-height="none" data-whitespace="nowrap"
                      data-type="text" data-responsive_offset="on"
                      data-frames='[{"delay":1150,"speed":800,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                      data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                      data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                      style="z-index: 6; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">
                       </h2>

                  <!-- LAYER NR. 3 -->
                  <p class="tp-caption   tp-resizeme" id="slide-1-layer-3" data-x="['center','center','center','center']"
                      data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                      data-voffset="['49','49','20','15']" data-fontsize="['21','21','21','16']"
                      data-lineheight="['30','30','30','28']" data-letterspacing="['0.5','0.5','0.5','0']"
                      data-width="['610','610','610','441']" data-height="none" data-whitespace="normal" data-type="text"
                      data-responsive_offset="on"
                      data-frames='[{"delay":1300,"speed":800,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                      data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                      data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                      style="z-index: 7; min-width: 610px; max-width: 610px; white-space: normal; font-size: 21px; line-height: 30px; font-weight: 400; color: rgba(255,255,255,0.7); letter-spacing: 0.5px;">
                     </p>

                  <!-- LAYER NR. 4 -->
                  <!--<div class="tp-caption rev-btn  tp-resizeme" id="slide-1-layer-4"
                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                      data-y="['middle','middle','middle','middle']" data-voffset="['146','146','126','116']"
                      data-fontsize="['14','14','13','13']" data-fontweight="['600','600','500','500']"
                      data-color="['rgb(255,255,255)','rgb(255,255,255)','rgba(255,255,255,1)','rgba(255,255,255,1)']"
                      data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                      data-actions='[{"event":"click","action":"scrollbelow","offset":"-66px","delay":"","speed":"1200","ease":"Quint.easeInOut"}]'
                      data-responsive_offset="on"
                      data-frames='[{"delay":1450,"speed":800,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"600","ease":"Quint.easeOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bc:rgb(255,255,255);"}]'
                      data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[21,21,21,21]"
                      data-paddingright="[40,40,40,40]" data-paddingbottom="[21,21,21,21]" data-paddingleft="[40,40,40,40]"
                      style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 600; color: #ffffff; letter-spacing: 2px;background-color:rgb(51,140,242);border-color:rgba(255,255,255,0);border-style:solid;border-width:1px 1px 1px 1px;border-radius:300px 300px 300px 300px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                      DISCOVER AVE </div>-->
                </li>

                <!-- SLIDE  -->
                <li data-index="rs-1" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0"
                  data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                  data-thumb="assets/demo/sliders/virtus-1/virtus-50x25.jpg" data-rotate="0" data-saveperformance="off" data-title="Virtus"
                  data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                  data-param8="" data-param9="" data-param10="" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="{{asset('assets/img/newimages/homeimg3.png')}}" alt="" title="virtus" 
                      data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off"
                      class="rev-slidebg pt-5" data-no-retina>
                  <!-- LAYERS -->

                  <!-- LAYER NR. 1 -->
                  <h2 class="tp-caption   tp-resizeme" id="slide-1-layer-1" data-x="['center','center','center','center']"
                      data-hoffset="['-1','-1','-1','-1']" data-y="['middle','middle','middle','middle']"
                      data-voffset="['-190','-190','-182','-182']" data-fontsize="['100','100','100','72']"
                      data-lineheight="['100','100','100','65']" data-width="none" data-height="none" data-whitespace="nowrap"
                      data-type="text" data-responsive_offset="on"
                      data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                      data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                      data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                      style="z-index: 5; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">
                       </h2>

                  <!-- LAYER NR. 2 -->
                  <h2 class="tp-caption   tp-resizeme" id="slide-1-layer-2" data-x="['center','center','center','center']"
                      data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                      data-voffset="['-95','-95','-105','-116']" data-fontsize="['100','100','100','72']"
                      data-lineheight="['100','100','100','65']" data-width="none" data-height="none" data-whitespace="nowrap"
                      data-type="text" data-responsive_offset="on"
                      data-frames='[{"delay":1150,"speed":800,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                      data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                      data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                      style="z-index: 6; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">
                       </h2>

                  <!-- LAYER NR. 3 -->
                  <p class="tp-caption   tp-resizeme" id="slide-1-layer-3" data-x="['center','center','center','center']"
                      data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                      data-voffset="['49','49','20','15']" data-fontsize="['21','21','21','16']"
                      data-lineheight="['30','30','30','28']" data-letterspacing="['0.5','0.5','0.5','0']"
                      data-width="['610','610','610','441']" data-height="none" data-whitespace="normal" data-type="text"
                      data-responsive_offset="on"
                      data-frames='[{"delay":1300,"speed":800,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                      data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                      data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                      style="z-index: 7; min-width: 610px; max-width: 610px; white-space: normal; font-size: 21px; line-height: 30px; font-weight: 400; color: rgba(255,255,255,0.7); letter-spacing: 0.5px;">
                     </p>

                  <!-- LAYER NR. 4 -->
                  <!--<div class="tp-caption rev-btn  tp-resizeme" id="slide-1-layer-4"
                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                      data-y="['middle','middle','middle','middle']" data-voffset="['146','146','126','116']"
                      data-fontsize="['14','14','13','13']" data-fontweight="['600','600','500','500']"
                      data-color="['rgb(255,255,255)','rgb(255,255,255)','rgba(255,255,255,1)','rgba(255,255,255,1)']"
                      data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                      data-actions='[{"event":"click","action":"scrollbelow","offset":"-66px","delay":"","speed":"1200","ease":"Quint.easeInOut"}]'
                      data-responsive_offset="on"
                      data-frames='[{"delay":1450,"speed":800,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"600","ease":"Quint.easeOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bc:rgb(255,255,255);"}]'
                      data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[21,21,21,21]"
                      data-paddingright="[40,40,40,40]" data-paddingbottom="[21,21,21,21]" data-paddingleft="[40,40,40,40]"
                      style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 600; color: #ffffff; letter-spacing: 2px;background-color:rgb(51,140,242);border-color:rgba(255,255,255,0);border-style:solid;border-width:1px 1px 1px 1px;border-radius:300px 300px 300px 300px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                      DISCOVER AVE </div>-->
                </li>
          
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div><!-- END REVOLUTION SLIDER -->
    
</section>



<section class="d-block d-md-none d-sm-block">
    <section
    class=" vc_row py-5 fullheight d-flex flex-wrap align-items-center bg-cover"
    data-parallax="true"
    data-parallax-options='{"parallaxBG":true}'
    data-slideshow-bg="true"
    data-slideshow-options='{"effect": "scale", "delay":2500,"imageArray":["{{asset('assets/img/newimages/mbhome.png')}}","{{asset('assets/img/newimages/mbhome2.png')}}","{{asset('assets/img/newimages/mbhome3.png')}}"]}'>
    <div class="container">
        <div class="row">
    
            <div class="lqd-column col-md-8 col-md-offset-2 text-center">
    
                <div class="ld-fancy-heading">
                    <h1
                        class="text-white"
                        data-fittext="true"
                        data-fittext-options='{"compressor":0.8, "maxFontSize": 90, "minFontSize": 50}'
                        data-split-text="true"
                        data-custom-animations="true"
                        data-ca-options='{"triggerHandler":"inview","animationTarget":".split-inner","duration":"1200","delay":"35","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":20,"rotateZ":9,"opacity":0},"animations":{"translateY":0,"rotateZ":0,"opacity":1}}'
                        data-split-options='{"type":"chars, words"}'
                        data-text-rotator="true">
                            <span class="ld-fh-txt">
                               
                                <span class="txt-rotate-keywords">
                                    <span class="keyword active"></span>
                                    <span class="keyword"></span>
                                    <span class="keyword"></span>
                                </span><!-- /.txt-rotate-keywords -->
                            </span>
                    </h1>
                </div><!-- /.ld-fancy-heading -->
    
               <!-- <a href="#" class="btn btn-solid text-uppercase btn-lg btn-bordered border-thin text-uppercase font-size-13 font-weight-bold ltr-sp-2 btn-white" data-localscroll="true" data-localscroll-options='{"scrollBelowSection":true}'>
                    <span>
                        <span class="btn-txt">Discover Ave</span>
                    </span>
                </a>-->
    
            </div><!-- /.lqd-column col-md-8 col-md-offset-2 -->
    
        </div><!-- /.row -->
    </div><!-- /.container -->
    </section>
</section>


<section id="features" class="vc_row pt-10 pb-30">
    <div class="container">
    

        <div class="row">

            <div class="lqd-column col-md-12" id="praise">

                <div class="d-flex justify-content-center pb-5 pt-2">
                    <img src="{{asset('assets/img/newimages/praise.png')}}" style="width:400px; height:45px;" alt="">
                </div>

                <div class="liquid-blog-grid liquid-blog-style-square row mx-0" data-liquid-masonry="true">

                    <div class="lqd-column col-md-4 masonry-item px-0">

                        <article style="height: 380px; ; background-image: url({{asset('assets/img/newimages/bg-red.png')}}); background-size: 380px 380px;" class="liquid-lp liquid-lp liquid-blog-item liquid-blog-item-gray liquid-blog-scheme-dark">

                            <div class="liquid-blog-item-inner">

                                <div class="iconbox iconbox-side iconbox-md iconbox-heading-xs">
                                    <div class="contents text-center">
                                        <h2 style="font-size:100px !important;" class="w-100 m-0 text-white">P</h2>
                                        <h3 style="font-size:14px !important;" class="text-white">PROSPERITY:</h3>
                                        <p class="font-size-14  lh-185 text-white">State with [a] the highest income per capita [b] literacy rate and [c] affordable high quality healthcare facilities (d) high employment rate</p>
                                    </div><!-- /.contents -->
                                </div><!-- /.iconbox -->
                
                            </div><!-- /.col-md-4 col-sm-6 -->

                        </article>

                    </div><!-- /.col-md-4 -->

                    <div class="lqd-column col-md-4 masonry-item px-0">

                        <article style="height: 380px; ; background-image: url({{asset('assets/img/newimages/bggreen.png')}});  background-size: 380px 380px;" class="liquid-lp liquid-lp liquid-blog-item liquid-blog-item-gray liquid-blog-scheme-dark">

                            <div class="liquid-blog-item-inner">

                                <div class="iconbox iconbox-side iconbox-md iconbox-heading-xs">
                                    <div class="contents text-center">
                                        <h2 style="font-size:100px !important;" class="w-100 m-0 text-white">R</h2>
                                        <h3 style="font-size:14px !important;" class="text-white">REVENUE:</h3>
                                        <p class="font-size-14 lh-185 text-white">A state that is 70% revenue independent</p>
                                    </div><!-- /.contents -->
                                </div><!-- /.iconbox -->
                
                            </div><!-- /.col-md-4 col-sm-6 -->

                        </article>

                    </div><!-- /.col-md-4 -->

                    <div class="lqd-column col-md-4 masonry-item px-0">

                        <article style="height: 380px; background-image: url({{asset('assets/img/newimages/bgblue.png')}}); background-size: 380px 380px;"  class="liquid-lp liquid-lp liquid-blog-item liquid-blog-item-gray liquid-blog-scheme-dark">

                         
                            <div class="liquid-blog-item-inner">

                                <div class="iconbox iconbox-side iconbox-md iconbox-heading-xs">
                                    <div class="contents text-center">
                                        <h2 style="font-size:100px !important;" class="w-100 m-0 text-white">A</h2>
                                        <h3 style="font-size:14px !important;" class="text-white">AGRICULTURE:</h3>
                                        <p class="font-size-14 lh-185 text-white">Food sufficiency and agriculture-driven industrialization</p>
                                    </div><!-- /.contents -->
                                </div><!-- /.iconbox -->
                
                            </div><!-- /.col-md-4 col-sm-6 -->

                        </article>

                    </div><!-- /.col-md-4 -->

                    <div class="lqd-column col-md-4 masonry-item px-0">

                        <article style="height: 380px;  background-image: url({{asset('assets/img/newimages/bgblue.png')}}); background-size: 380px 380px;"  class="liquid-lp liquid-lp liquid-blog-item liquid-blog-item-gray liquid-blog-scheme-dark">

                            <div class="liquid-blog-item-inner">

                                <div class="iconbox iconbox-side iconbox-md iconbox-heading-xs">
                                  
                                    <div class="contents text-center">
                                        <h2 style="font-size:100px !important;" class="w-100 m-0 text-white">I</h2>
                                        <h3 style="font-size:14px !important;" class="text-white">INDUSTRIALIZATION & INFRASTRUCTURE: </h3>
                                        <p class="font-size-14 lh-185 text-white">Solid infrastructure and public goods enabling private sector driven industrialization efforts</p>
                                    </div><!-- /.contents -->
                                </div><!-- /.iconbox -->
                
                            </div><!-- /.col-md-4 col-sm-6 -->

                        </article>

                    </div><!-- /.col-md-4 -->

                    <div class="lqd-column col-md-4 masonry-item px-0">

                        <article style="height: 380px; ; background-image: url({{asset('assets/img/newimages/bg-red.png')}});  background-size: 380px 380px;"  class="liquid-lp liquid-lp liquid-blog-item liquid-blog-item-gray liquid-blog-scheme-dark">

                            <div class="liquid-blog-item-inner">

                                <div class="iconbox iconbox-side iconbox-md iconbox-heading-xs">
                                    <div class="contents text-center">
                                        <h2 style="font-size:100px !important;" class="w-100 m-0 text-white">S</h2>
                                        <h3 style="font-size:14px !important;" class="text-white">SECURITY & SAFETY: </h3>
                                        <p class="font-size-14 lh-185 text-white">Consolidate the peace</p>
                                    </div><!-- /.contents -->
                                </div><!-- /.iconbox -->
                
                            </div><!-- /.col-md-4 col-sm-6 -->

                        </article>

                    </div><!-- /.col-md-4 -->

                    <div class="lqd-column col-md-4 masonry-item px-0">

                        <article style="height: 380px; ; background-image: url({{asset('assets/img/newimages/bggreen.png')}});  background-size: 380px 380px;"  class="liquid-lp liquid-lp liquid-blog-item liquid-blog-item-gray liquid-blog-scheme-dark ">

                            <div class="liquid-blog-item-inner">

                                <div class="iconbox iconbox-side iconbox-md iconbox-heading-xs">
                                    
                                    <div class="contents text-center ">
                                        <h2 style="font-size:100px !important;" class="w-100 m-0 text-white">E</h2>
                                        <h3 style="font-size:14px !important;" class="text-white">ENVIRONMENT:</h3>
                                        <p class="font-size-14 lh-185 text-white">Tackle environmental pollution & Return to the Garden City status</p>
                                    </div><!-- /.contents -->
                                </div><!-- /.iconbox -->
                
                            </div><!-- /.col-md-4 col-sm-6 -->

                        </article>

                    </div><!-- /.col-md-4 -->
                    
                </div><!-- /.row -->

            </div><!-- /.col-md-12 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>




<section class="vc_row pt-90 pb-40 mt-20 bg-cover" style="background-image: url({{asset('assets/img/newimages/praisebg.jpg')}});">
    <div class="container ">
        <div class="row">

            <div class="lqd-column col-md-12">

                <div class="carousel-container carousel-nav-left px-md-5 mx-md-5">

                    <div class="row">

                        <div class="col-md-12 col-xs-12 pl-md-4">

                            <div class="m-0 carousel-items row testimonials-quotes row carousel-quotes-1 carousel-nav-light carousel-nav-hover-light carousel-nav-border-none" >

                                <div class="col-xs-12" id="vision">
                                    <div class="testimonial testimonial-lg testimonial-details-sm text-left testimonials-quote-only mb-10">
                                        <div class="testimonial-quote">
                                            <header class="fancy-title mb-0">
                                                <div class="d-flex justify-content-center pb-5 pt-0">
                                                    <img src="{{asset('assets/img/newimages/vision.png')}}" style="width:500px; height:24px;" alt="">
                                                </div>  
                                            </header>
                                            <blockquote class="font-size-19 lh-2 text-fade-white-08">
                                               <li class="font-size-15 lh-185">PRAISE-driven structural and fiscal diversification [Activated Structural Diversification Programme [ASD-Programme]];</li>
                                               <li class="font-size-15 lh-185">DBD [Design-Build-Divest] model backed by a US$2-5 billion SEC-registered Rivers Development Bank;</li>
                                               <li class="font-size-15 lh-185">Rivers Development Bank owned by RSG [min 30% share], IFC, AfDB, SWF etc</li>
                                               <li class="font-size-15 lh-185">Blue Ocean & Entrepreneurial governance [Measurable net positive and revenue impact]</li>
                                               <li class="font-size-15 lh-185">Enabling environment [clean environment; Infrastructure, security, ease of doing business etc.]</li>
                                               <li class="font-size-15 lh-185">Fiscal direction: 70% IGR/Total revenue ratio</li>
                                               <li class="font-size-15 lh-185">Agriculture: Smallholder outgrower scheme and access to farm inputs; Agro-industrial processing zones and small
                                                 scale industrial clustering; mechanization support & offshore fishing</li>
                                                <li class="font-size-15 lh-185">Expansion of maritime-driven economy leverage</li>
                                                <li class="font-size-15 lh-185">Strengthen BPP to engage with professional bodies</li>
                                                <li class="font-size-15 lh-185">Creative Disruption: Information Technology for Creative & Platform Economy; accelerated broadband infrastructure
                                                    expansion; prepare for next generation.</li>
                                                <li class="font-size-15 lh-185">Sustain the urban renewal agenda in addition to the building of new cities [Greater PH]</li>
                                            </li>
                                            </blockquote>
                                        </div><!-- /.testimonial-quote -->
                                    </div><!-- /.testimonial -->
                                </div><!-- /.col-xs-12 -->


                            </div><!-- /.carousel-items -->

                        </div><!-- /.col-md-8 -->

                    </div><!-- /.row -->
                    
                </div><!-- /.carousel-container -->

            </div><!-- /.lqd-column col-md-12 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>


@endsection