<!DOCTYPE HTML>
<html>

<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="public/css/app.css" rel="stylesheet">
    <link href="public/css/my.css" rel="stylesheet">
    <link href="public/css/viz.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="public/js/app.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
</head>
<style>
    .hide {
        display: none;
    }

    .range-style {
        position: relative;
        z-index: 1000;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: transparent;
        height: 6px;
        border-radius: 3px;
        outline: none;
        margin: 0;
        padding: 0;
        width: 100%;
        box-shadow: 0 0 1px rgba(0, 0, 0, 0.9);
    }

    .thumb-style {
        position: relative;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 15px;
        height: 15px;
        background: #4d91ea;
        border: 1px solid #165dbb;
        border-radius: 100%;
        cursor: pointer;
        z-index: 5000;
        transition: background 0.3s ease-in-out;
    }

    .thumb-style_hover {
        background: #165dbb;
        transition: background 0.3s ease-in-out;
    }

    .slider-container {
        display: inline-block;
        position: relative;
        width: 85%;
        /* margin: 15px 0; */
    }

    input[type='range'] {
        position: relative;
        z-index: 1000;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: transparent;
        height: 2px;
        border-radius: 3px;
        outline: none;
        margin: 0;
        padding: 0;
        width: 100%;
        box-shadow: 0 0 1px rgba(0, 0, 0, 0.9);
    }

    input[type='range']::-webkit-slider-thumb {
        position: relative;
        -webkit-appearance: none;
        appearance: none;
        width: 10px;
        height: 10px;
        border-radius: 100%;
        cursor: pointer;
        z-index: 5000;
        transition: background 0.3s ease-in-out;
    }

    .s1 input[type='range']::-webkit-slider-thumb {
        background: #4d91ea;
        border: 1px solid #4d91ea;
    }

    .s2 input[type='range']::-webkit-slider-thumb {
        background: #38c172;
        border: 1px solid #38c172;
    }

    .s3 input[type='range']::-webkit-slider-thumb {
        background: #AB47BC;
        border: 1px solid #AB47BC;
    }

    .s4 input[type='range']::-webkit-slider-thumb {
        background: #880E4F;
        border: 1px solid #880E4F;
    }

    .s5 input[type='range']::-webkit-slider-thumb {
        background: #470e88;
        border: 1px solid #470e88;
    }

    .s6 input[type='range']::-webkit-slider-thumb {
        background: #88840e;
        border: 1px solid #88840e;
    }

    .s7 input[type='range']::-webkit-slider-thumb {
        background: #88470e;
        border: 1px solid #88470e;
    }

    .s8 input[type='range']::-webkit-slider-thumb {
        background: #ffff33;
        border: 1px solid #ffff33;
    }

    .s9 input[type='range']::-webkit-slider-thumb {
        background: #ff3333;
        border: 1px solid #ff3333;
    }

    .s10 input[type='range']::-webkit-slider-thumb {
        background: #707070;
        border: 1px solid #707070;
    }

    .s11 input[type='range']::-webkit-slider-thumb {
        background: #509650;
        border: 1px solid #509650;
    }

    .s12 input[type='range']::-webkit-slider-thumb {
        background: #965050;
        border: 1px solid #965050;
    }

    .s13 input[type='range']::-webkit-slider-thumb {
        background: #f4511e;
        border: 1px solid #f4511e;
    }

    .s14 input[type='range']::-webkit-slider-thumb {
        background: #004d40;
        border: 1px solid #004d40;
    }

    input[type='range']::-webkit-slider-thumb:hover,
    input[type='range']::-webkit-slider-thumb:active {
        transition: background 0.3s ease-in-out;
    }

    .s1 input[type='range']::-webkit-slider-thumb:hover,
    .s1 input[type='range']::-webkit-slider-thumb:active {
        background: #165dbb;
    }

    .s2 input[type='range']::-webkit-slider-thumb:hover,
    .s2 input[type='range']::-webkit-slider-thumb:active {
        background: #165dbb;
    }

    .s3 input[type='range']::-webkit-slider-thumb:hover,
    .s3 input[type='range']::-webkit-slider-thumb:active {
        background: #165dbb;
    }

    .s4 input[type='range']::-webkit-slider-thumb:hover,
    .s4 input[type='range']::-webkit-slider-thumb:active {
        background: #2f051b;
    }

    .s5 input[type='range']::-webkit-slider-thumb:hover,
    .s5 input[type='range']::-webkit-slider-thumb:active {
        background: #0f031d;
    }

    .s6 input[type='range']::-webkit-slider-thumb:hover,
    .s6 input[type='range']::-webkit-slider-thumb:active {
        background: #413f07;
    }

    .s7 input[type='range']::-webkit-slider-thumb:hover,
    .s7 input[type='range']::-webkit-slider-thumb:active {
        background: #412207;
    }

    .s8 input[type='range']::-webkit-slider-thumb:hover,
    .s8 input[type='range']::-webkit-slider-thumb:active {
        background: #6e6e00;
    }

    .s9 input[type='range']::-webkit-slider-thumb:hover,
    .s9 input[type='range']::-webkit-slider-thumb:active {
        background: #f70000;
    }

    .s10 input[type='range']::-webkit-slider-thumb:hover,
    .s10 input[type='range']::-webkit-slider-thumb:active {
        background: #5c5c5c;
    }

    .s11 input[type='range']::-webkit-slider-thumb:hover,
    .s11 input[type='range']::-webkit-slider-thumb:active {
        background: #427c42;
    }

    .s12 input[type='range']::-webkit-slider-thumb:hover,
    .s12 input[type='range']::-webkit-slider-thumb:active {
        background: #7c4242;
    }

    .s13 input[type='range']::-webkit-slider-thumb:hover,
    .s13 input[type='range']::-webkit-slider-thumb:active {
        background: #e03e0b;
    }

    .s14 input[type='range']::-webkit-slider-thumb:hover,
    .s14 input[type='range']::-webkit-slider-thumb:active {
        background: #003930;
    }

    input[type='range']::-moz-range-track {
        background: transparent;
    }

    input[type='range']::-moz-range-thumb {
        position: relative;
        -moz-appearance: none;
        appearance: none;
        width: 15px;
        height: 15px;
        border-radius: 100%;
        cursor: pointer;
        z-index: 5000;
        transition: background 0.3s ease-in-out;
    }

    .s1 input[type='range']::-moz-range-thumb {
        background: #4d91ea;
        border: 1px solid #4d91ea;
    }

    .s2 input[type='range']::-moz-range-thumb {
        background: #38c172;
        border: 1px solid #38c172;
    }

    .s3 input[type='range']::-moz-range-thumb {
        background: #AB47BC;
        border: 1px solid #AB47BC;
    }

    .s4 input[type='range']::-moz-range-thumb {
        background: #AB47BC;
        border: 1px solid #AB47BC;
    }

    .s5 input[type='range']::-moz-range-thumb {
        background: #470e88;
        border: 1px solid #470e88;
    }

    .s6 input[type='range']::-moz-range-thumb {
        background: #88840e;
        border: 1px solid #88840e;
    }

    .s7 input[type='range']::-moz-range-thumb {
        background: #88470e;
        border: 1px solid #88470e;
    }

    .s8 input[type='range']::-moz-range-thumb {
        background: #ffff33;
        border: 1px solid #ffff33;
    }

    .s9 input[type='range']::-moz-range-thumb {
        background: #ff3333;
        border: 1px solid #ff3333;
    }

    .s10 input[type='range']::-moz-range-thumb {
        background: #707070;
        border: 1px solid #707070;
    }

    .s11 input[type='range']::-moz-range-thumb {
        background: #509650;
        border: 1px solid #509650;
    }

    .s12 input[type='range']::-moz-range-thumb {
        background: #965050;
        border: 1px solid #965050;
    }

    .s13 input[type='range']::-moz-range-thumb {
        background: #AB47BC;
        border: 1px solid #AB47BC;
    }

    .s14 input[type='range']::-moz-range-thumb {
        background: #004d40;
        border: 1px solid #004d40;
    }

    input[type='range']::-moz-range-thumb:hover,
    input[type='range']::-moz-range-thumb:active {
        background: #165dbb;
        transition: background 0.3s ease-in-out;
    }

    .s1 input[type='range']::-moz-range-thumb:hover,
    .s1 [type='range']::-moz-range-thumb:active {
        background: #165dbb;
        transition: background 0.3s ease-in-out;
    }

    .s2 input[type='range']::-moz-range-thumb:hover,
    .s2 [type='range']::-moz-range-thumb:active {
        background: #165dbb;
        transition: background 0.3s ease-in-out;
    }

    .s3 input[type='range']::-moz-range-thumb:hover,
    .s3 [type='range']::-moz-range-thumb:active {
        background: #165dbb;
        transition: background 0.3s ease-in-out;
    }

    .s4 input[type='range']::-moz-range-thumb:hover,
    .s4 [type='range']::-moz-range-thumb:active {
        background: ##2f051b;
    }

    .s5 input[type='range']::-moz-range-thumb:hover,
    .s5 [type='range']::-moz-range-thumb:active {
        background: #0f031d;
    }

    .s6 input[type='range']::-moz-range-thumb:hover,
    .s6 [type='range']::-moz-range-thumb:active {
        background: #413f07;
    }

    .s7 input[type='range']::-moz-range-thumb:hover,
    .s7 [type='range']::-moz-range-thumb:active {
        background: #412207;
    }

    .s8 input[type='range']::-moz-range-thumb:hover,
    .s8 [type='range']::-moz-range-thumb:active {
        background: #6e6e00;
    }

    .s9 input[type='range']::-moz-range-thumb:hover,
    .s9 [type='range']::-moz-range-thumb:active {
        background: #f70000;
    }

    .s10 input[type='range']::-moz-range-thumb:hover,
    .s10 [type='range']::-moz-range-thumb:active {
        background: #5c5c5c;
    }

    .s11 input[type='range']::-moz-range-thumb:hover,
    .s11 [type='range']::-moz-range-thumb:active {
        background: #427c42;
    }

    .s12 input[type='range']::-moz-range-thumb:hover,
    .s12 [type='range']::-moz-range-thumb:active {
        background: #7c4242;
    }

    .s13 input[type='range']::-moz-range-thumb:hover,
    .s13 [type='range']::-moz-range-thumb:active {
        background: #e03e0b;
    }

    .s14 input[type='range']::-moz-range-thumb:hover,
    .s14 [type='range']::-moz-range-thumb:active {
        background: #003930;
    }

    .fill1,
    .fill2,
    .fill3,
    .fill4,
    .fill5,
    .fill6,
    .fill7,
    .fill8,
    .fill9,
    .fill10,
    .fill11,
    .fill12,
    .fill13,
    .fill14 {
        position: absolute;
        z-index: 50;
        height: 2px;
        width: 0%;
        border-radius: 6px;
    }

    .fill1 {
        top: 60%;
        background: linear-gradient(to right, #d6e6fa 0%, #165dbb 100%);
    }

    .fill2 {
        top: 60%;
        background: linear-gradient(to right, #ebf9f1 0%, #38c172 100%);
    }

    .fill3 {
        top: 60%;
        background: linear-gradient(to right, #f3e5f6 0%, #AB47BC 100%);
    }

    .fill4 {
        top: 61%;
        background: linear-gradient(to right, #fbf9fe 0%, #880E4F 100%);
    }

    .fill5 {
        top: 60%;
        background: linear-gradient(to right, #fbf9fe 0%, #470e88 100%);
    }

    .fill6 {
        top: 60%;
        background: linear-gradient(to right, #fdfce7 0%, #88840e 100%);
    }

    .fill7 {
        top: 60%;
        background: linear-gradient(to right, #fdf1e7 0%, #88470e 100%);
    }

    .fill8 {
        top: 60%;
        background: linear-gradient(to right, #ffffd0 0%, #ffff33 100%);
    }

    .fill9 {
        top: 60%;
        background: linear-gradient(to right, #ffe4e4 0%, #ff3333 100%);
    }

    .fill10 {
        top: 60%;
        background: linear-gradient(to right, #f3e5f6 0%, #707070 100%);
    }

    .fill11 {
        top: 60%;
        background: linear-gradient(to right, #eff6ef 0%, #509650 100%);
    }

    .fill12 {
        top: 60%;
        background: linear-gradient(to right, #f6efef 0%, #965050 100%);
    }

    .fill13 {
        top: 60%;
        background: linear-gradient(to right, #fef0ec 0%, #f4511e 100%);
    }

    .fill14 {
        top: 61%;
        background: linear-gradient(to right, #e0f2f1 0%, #004d40 100%);
    }

    .count1,
    .count2,
    .count3,
    .count4,
    .count5,
    .count6,
    .count7,
    .count8,
    .count9,
    .count10,
    .count11,
    .count12,
    .count13,
    .count14 {
        position: absolute;
        top: -12px;
        left: 0;
        color: #fff;
        font-size: 0%;
        padding: 2px 5px;
        border-radius: 20px;
        text-align: center;
        width: 30px;
        height: 20px;
        margin-left: 0px;
        font-size: 12px;
    }

    .count1 {
        border: 1px solid #4d91ea;
        background: #4d91ea;
    }

    .count2 {
        border: 1px solid #38c172;
        background: #38c172;
    }

    .count3 {
        border: 1px solid #AB47BC;
        background: #AB47BC;
    }

    .count4 {
        border: 1px solid #880E4F;
        background: #880E4F;
    }

    .count5 {
        border: 1px solid #470e88;
        background: #470e88;
    }

    .count6 {
        border: 1px solid #88840e;
        background: #88840e;
    }

    .count7 {
        border: 1px solid #88470e;
        background: #88470e;
    }

    .count8 {
        border: 1px solid #ffff33;
        background: #ffff33;
    }

    .count9 {
        border: 1px solid #ff3333;
        background: #ff3333;
    }

    .count10 {
        border: 1px solid #707070;
        background: #707070;
    }

    .count11 {
        border: 1px solid #509650;
        background: #509650;
    }

    .count12 {
        border: 1px solid #965050;
        background: #965050;
    }

    .count13 {
        border: 1px solid #AB47BC;
        background: #f4511e;
    }

    .count14 {
        border: 1px solid #004d40;
        background: #004d40;
    }

    div[title] {
        color: red;
    }

    .list-group-item {
        padding: 0.25rem 1.25rem;
    }

    .viz {
        height: 500px;
        width: 50px;
    }

    .scale {
        /* -moz-transform: scale(1.4);
    -webkit-transform: scale(1.4); */
        transform: scale(0.63);
        transform-origin: 100% 100%;
        transform-box: fill-box;
    }

    .scalee {
        /* -moz-transform: scale(1.4);
    -webkit-transform: scale(1.4); */
        transform: scale(0.45);
        transform-origin: 0% 0%;
        transform-box: fill-box;
    }

    .water_and_sanitation {
        fill: #3490dc;

    }

    .hov {
        cursor: pointer;
    }

    .shg {
        fill: #AB47BC;
    }

    .agriculture {
        fill: #88840e;
    }

    .finance {
        fill: #88470e;
    }

    .food_and_supplies {
        fill: #880E4F;
    }

    .energy_and_ict {
        fill: #ffff33;
    }

    .healthcare {
        fill: #38c172;
    }

    .animal_husbandry {
        fill: #ff3333;
    }

    .fisheries {
        fill: #707070;
    }

    .lodging_and_boarding {
        fill: #509650;
    }

    .tourism {
        fill: #965050;
    }

    .handloom_and_handicraft {
        fill: #470e88;
    }

    .education {
        fill: #f4511e;
    }

    .security {
        fill: #004d40;
    }
    /* .st2{font-family:'ArialMT';} */

    .container-fluid {
            background-color: #e3e9f3;
    background-image: -webkit-linear-gradient(#e3e9f3,#e4e2d4);
    background-image: linear-gradient(#e3e9f3,#e4e2d4);
    border-bottom: 1px solid #b3bccd;
    padding-bottom: 1%;
    }
    .no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(https://j2n9a3i8.stackpathcdn.com/wp-content/uploads/2014/08/Preloader_11.gif) center no-repeat #fff;
}
.closed{
    display: none;
}
.box{
        cursor:pointer;
    }
</style>
<script>
</script>

<body>
<header id="header" class="">
        <div class="container">

            <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
            <a href="index.php" class="scrollto"><img src="public/logo.png" alt="" class="img-fluid"></a>
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="map_view.php">Map View</a></li>
            </ul>
            </nav><!-- .main-nav -->

        </div>
        </header><!-- #header -->
    <div class="container-fluid" style="margin-let:2px;">
        <div class="row">
            <div class="col-lg-9"  style="margin-left:0;padding:0;">
                    <div class="se-pre-con"></div>
                    <span style="position:absolute;font-size:0.85rem; opacity:0.7;  top:9%;"><strong>100</strong>-</span>
                    <span style="position:absolute;font-size:0.7rem; opacity:0.5; opacity:0.5; top:17.1%;">90-</span>
                    <span style="position:absolute;font-size:0.7rem; opacity:0.5;  top:25.2%;">80-</span>
                    <span style="position:absolute;font-size:0.7rem; opacity:0.5;  top:33.3%;">70-</span>
                    <span style="position:absolute;font-size:0.7rem; opacity:0.5;  top:41.4%;">60-</span>
                    <span style="position:absolute;font-size:0.85rem; opacity:0.7;  top:49.5%;"><strong>50</strong></span>
                    <span style="position:absolute;font-size:0.7rem; opacity:0.5;  top:57.6%;">40-</span>
                    <span style="position:absolute;font-size:0.7rem; opacity:0.5;  top:65.7%;">30-</span>
                    <span style="position:absolute;font-size:0.7rem; opacity:0.5;  top:73.8%;">20-</span>
                    <span style="position:absolute;font-size:0.7rem; opacity:0.5;  top:81.9%;">10-</span>
                    <span style="position:absolute;font-size:0.85rem; opacity:0.7;  top:89.5%;"><strong>0-</strong></span>
                <div style="display:none;margin-bottom:2%;"  class="d-flex flex-fill flex-nowrap">

                    <div style="transition: all 2s;" class="trans closed Dirang">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Dirang_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Dirang</text>
                            <g style="transition: all 4s;" class="Dirang_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>

                    <div style="transition: all 2s;" class="trans closed Toon">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Toon_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Toon</text>
                            <g style="transition: all 4s;" class="Toon_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                     <div style="transition: all 2s;" class="trans closed Singchung trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Singchung_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Singchung</text>
                            <g style="transition: all 4s;" class="Singchung_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Laboliang trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Laboliang_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Laboliang</text>
                            <g style="transition: all 4s;" class="Laboliang_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Mebo trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Mebo_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Mebo</text>
                            <g style="transition: all 4s;" class="Mebo_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Manpat trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Manpat_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Manpat</text>
                            <g style="transition: all 4s;" class="Manpat_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Hari trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Hari_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Hari</text>
                            <g style="transition: all 4s;" class="Hari_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Oyan_Village trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Oyan_Village_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Oyan Village</text>
                            <g style="transition: all 4s;" class="Oyan_Village_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Ganga trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Ganga_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Ganga</text>
                            <g style="transition: all 4s;" class="Ganga_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>

                    <div style="transition: all 2s;" class="trans closed Kitpi trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Kitpi_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Kitpi</text>
                            <g style="transition: all 4s;" class="Kitpi_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Changlang_CT trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Changlang_CT_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Changlang (CT)</text>
                            <g style="transition: all 4s;" class="Changlang_CT_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Modang_Tage trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Modang_Tage_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Modang Tage</text>
                            <g style="transition: all 4s;" class="Modang_Tage_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>

                     <div style="transition: all 2s;" class="trans closed Jara trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Jara_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Jara</text>
                            <g style="transition: all 4s;" class="Jara_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                   <div style="transition: all 2s;" class="trans closed Bamin trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Bamin_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Bamin</text>
                            <g style="transition: all 4s;" class="Bamin_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Hong trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Hong_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Hong</text>
                            <g style="transition: all 4s;" class="Hong_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Shergaon trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Shergaon_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Shergaon</text>
                            <g style="transition: all 4s;" class="Shergaon_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Mukto trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Mukto_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Mukto</text>
                            <g style="transition: all 4s;" class="Mukto_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Kharsingsa_Village trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Kharsingsa_Village_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Kharsingsa Village</text>
                            <g style="transition: all 4s;" class="Kharsingsa_Village_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Lekha trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Lekha_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Lekha</text>
                            <g style="transition: all 4s;" class="Lekha_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Poma trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Poma_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Poma</text>
                            <g style="transition: all 4s;" class="Poma_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Chiputa trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Chiputa_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Chiputa</text>
                            <g style="transition: all 4s;" class="Chiputa_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Dokte_Hoj trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Dokte_Hoj_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Dokte Hoj</text>
                            <g style="transition: all 4s;" class="Dokte_Hoj_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Sille_Village trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Sille_Village_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Sille Village</text>
                            <g style="transition: all 4s;" class="Sille_Village_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Did trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Did_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Did</text>
                            <g style="transition: all 4s;" class="Did_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Lower_Dzang trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Lower_Dzang_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Lower Dzang</text>
                            <g style="transition: all 4s;" class="Lower_Dzang_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Lempiya trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Lempiya_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Lempiya</text>
                            <g style="transition: all 4s;" class="Lempiya_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Kheti trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Kheti_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Kheti</text>
                            <g style="transition: all 4s;" class="Kheti_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Hija trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Hija_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Hija</text>
                            <g style="transition: all 4s;" class="Hija_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Soppo trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Soppo_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Soppo</text>
                            <g style="transition: all 4s;" class="Soppo_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Rengging trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Rengging_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Rengging</text>
                            <g style="transition: all 4s;" class="Rengging_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Reru trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Reru_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Reru</text>
                            <g style="transition: all 4s;" class="Reru_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Karsingsa_Complex trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Karsingsa_Complex_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Karsingsa Complex</text>
                            <g style="transition: all 4s;" class="Karsingsa_Complex_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Rani trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Rani_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Rani</text>
                            <g style="transition: all 4s;" class="Rani_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Kaimoi trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Kaimoi_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Kaimoi</text>
                            <g style="transition: all 4s;" class="Kaimoi_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Mani trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Mani_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Mani</text>
                            <g style="transition: all 4s;" class="Mani_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Kalong trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Kalong_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Kalong</text>
                            <g style="transition: all 4s;" class="Kalong_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Khonsa_I trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Khonsa_I_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Khonsa I</text>
                            <g style="transition: all 4s;" class="Khonsa_I_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Dutta trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Dutta_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Dutta</text>
                            <g style="transition: all 4s;" class="Dutta_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Doimukh trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Doimukh_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Doimukh</text>
                            <g style="transition: all 4s;" class="Doimukh_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Tajang trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Tajang_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Tajang</text>
                            <g style="transition: all 4s;" class="Tajang_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Hong_Niitii trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Hong_Niitii_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Hong Niitii</text>
                            <g style="transition: all 4s;" class="Hong_Niitii_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Siro trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Siro_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Siro</text>
                            <g style="transition: all 4s;" class="Siro_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                   <div style="transition: all 2s;" class="trans closed Old_Changlang trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Old_Changlang_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Old Changlang</text>
                            <g style="transition: all 4s;" class="Old_Changlang_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Parang trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Parang_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Parang</text>
                            <g style="transition: all 4s;" class="Parang_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Mottum trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Mottum_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Mottum</text>
                            <g style="transition: all 4s;" class="Mottum_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Michi trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Michi_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Michi</text>
                            <g style="transition: all 4s;" class="Michi_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Lumla trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Lumla_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Lumla</text>
                            <g style="transition: all 4s;" class="Lumla_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Ngaichang trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Ngaichang_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Ngaichang</text>
                            <g style="transition: all 4s;" class="Ngaichang_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Kugi_Pomte trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Kugi_Pomte_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Kugi Pomte</text>
                            <g style="transition: all 4s;" class="Kugi_Pomte_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                     <div style="transition: all 2s;" class="trans closed Lapnan trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Lapnan_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Lapnan</text>
                            <g style="transition: all 4s;" class="Lapnan_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Taring trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Taring_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Taring</text>
                            <g style="transition: all 4s;" class="Taring_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Jote trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Jote_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Jote</text>
                            <g style="transition: all 4s;" class="Jote_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Gumto trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Gumto_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Gumto</text>
                            <g style="transition: all 4s;" class="Gumto_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Mangnang trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Mangnang_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Mangnang</text>
                            <g style="transition: all 4s;" class="Mangnang_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Yoglo trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Yoglo_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Yoglo</text>
                            <g style="transition: all 4s;" class="Yoglo_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Keiliya trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Keiliya_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Keiliya</text>
                            <g style="transition: all 4s;" class="Keiliya_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Lower_Dzong trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Lower_Dzong_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Lower Dzong</text>
                            <g style="transition: all 4s;" class="Lower_Dzong_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Bomjir trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Bomjir_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Bomjir</text>
                            <g style="transition: all 4s;" class="Bomjir_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Gomkelling trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Gomkelling_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Gomkelling</text>
                            <g style="transition: all 4s;" class="Gomkelling_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Murali trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Murali_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Murali</text>
                            <g style="transition: all 4s;" class="Murali_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Tenga_Valley trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Tenga_Valley_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Tenga Valley</text>
                            <g style="transition: all 4s;" class="Tenga_Valley_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Kambu trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Kambu_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Kambu</text>
                            <g style="transition: all 4s;" class="Kambu_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed OldMohang trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 OldMohang_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Old Mohang</text>
                            <g style="transition: all 4s;" class="OldMohang_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Sika-Bamin trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Sika-Bamin_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Sika-Bamin</text>
                            <g style="transition: all 4s;" class="Sika-Bamin_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Karle trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Karle_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Karle</text>
                            <g style="transition: all 4s;" class="Karle_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Ngorlung trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Ngorlung_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Ngorlung</text>
                            <g style="transition: all 4s;" class="Ngorlung_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Sibe trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Sibe_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Sibe</text>
                            <g style="transition: all 4s;" class="Sibe_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed SikaBamin trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 SikaBamin_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Sika Bamin</text>
                            <g style="transition: all 4s;" class="SikaBamin_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Balek trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Balek_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Balek</text>
                            <g style="transition: all 4s;" class="Balek_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed KugiPomse trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 KugiPomse_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Kugi Pomse</text>
                            <g style="transition: all 4s;" class="KugiPomse_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Borum trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Borum_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Borum</text>
                            <g style="transition: all 4s;" class="Borum_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Boyng trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Boyng_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Boyng</text>
                            <g style="transition: all 4s;" class="Boyng_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Kambu_ trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Kambu__txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Kambu_</text>
                            <g style="transition: all 4s;" class="Kambu__hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Kharsingsa trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Kharsingsa_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Kharsingsa</text>
                            <g style="transition: all 4s;" class="Kharsingsa_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Molyang_Tajang trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Molyang_Tajang_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Molyang (Tajang)</text>
                            <g style="transition: all 4s;" class="Molyang_Tajang_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>

                    <div style="transition: all 2s;" class="trans closed Shinchung trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Shinchung_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Shinchung</text>
                            <g style="transition: all 4s;" class="Shinchung_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Jigaon trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Jigaon_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Jigaon</text>
                            <g style="transition: all 4s;" class="Jigaon_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Nenchaliya trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Nenchaliya_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Nenchaliya</text>
                            <g style="transition: all 4s;" class="Nenchaliya_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Durpa trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Durpa_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Durpa</text>
                            <g style="transition: all 4s;" class="Durpa_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Mani_Polyang trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Mani_Polyang_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Mani Polyang</text>
                            <g style="transition: all 4s;" class="Mani_Polyang_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed TarasuMobuk trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 TarasuMobuk_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Tarasu Mobuk</text>
                            <g style="transition: all 4s;" class="TarasuMobuk_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Kaisu_LC trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Kaisu_LC_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Kaisu L/C</text>
                            <g style="transition: all 4s;" class="Kaisu_LC_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed OldZiro trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 OldZiro_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Old Ziro</text>
                            <g style="transition: all 4s;" class="OldZiro_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Boying trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Boying_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Boying</text>
                            <g style="transition: all 4s;" class="Boying_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Lekhi trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Lekhi_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Lekhi</text>
                            <g style="transition: all 4s;" class="Lekhi_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Nyorch trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Nyorch_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Nyorch</text>
                            <g style="transition: all 4s;" class="Nyorch_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Gumto-i trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Gumto-i_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Gumto-i</text>
                            <g style="transition: all 4s;" class="Gumto-i_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed SilleCamp trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 SilleCamp_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Sille Camp</text>
                            <g style="transition: all 4s;" class="SilleCamp_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Kheel trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Kheel_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Kheel</text>
                            <g style="transition: all 4s;" class="Kheel_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Bandardewa trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Bandardewa_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Bandardewa</text>
                            <g style="transition: all 4s;" class="Bandardewa_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Ruksin trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Ruksin_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Ruksin</text>
                            <g style="transition: all 4s;" class="Ruksin_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed deed trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 deed_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Deed</text>
                            <g style="transition: all 4s;" class="deed_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Jollang trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Jollang_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Jollang</text>
                            <g style="transition: all 4s;" class="Jollang_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed KalungReru trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 KalungReru_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Kalung Reru</text>
                            <g style="transition: all 4s;" class="KalungReru_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Ziro trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Ziro_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Ziro</text>
                            <g style="transition: all 4s;" class="Ziro_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Nafra trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Nafra_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Nafra</text>
                            <g style="transition: all 4s;" class="Nafra_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Namsang trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Namsang_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Namsang</text>
                            <g style="transition: all 4s;" class="Namsang_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Pasighat trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Pasighat_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Pasighat</text>
                            <g style="transition: all 4s;" class="Pasighat_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Roying trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Roying_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Roying</text>
                            <g style="transition: all 4s;" class="Roying_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Lohitpur trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Lohitpur_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Lohitpur</text>
                            <g style="transition: all 4s;" class="Lohitpur_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Lekang trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Lekang_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Lekang</text>
                            <g style="transition: all 4s;" class="Lekang_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Sille trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Sille_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Sille</text>
                            <g style="transition: all 4s;" class="Sille_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Tajang_ trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Tajang__txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Tajang_</text>
                            <g style="transition: all 4s;" class="Tajang__hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Rowta trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Rowta_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Rowta</text>
                            <g style="transition: all 4s;" class="Rowta_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Pareng trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Pareng_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Pareng</text>
                            <g style="transition: all 4s;" class="Pareng_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div style="transition: all 2s;" class="trans closed Gomkhelling trans">
                        <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 500" style="enable-background:new 0 0 50 500;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FFFFFF;
                                    stroke: #000000;
                                    stroke-width: 0.25;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                }

                                .st2 {

                                }

                                .st3 {
                                    font-size: 12px;
                                }

                                .st4 {
                                    fill: #F08080;
                                }
                            </style>
                            <path style="transition: all 4s;" class="st0 Gomkhelling_txt" d="M25.17,96c0,134.67,0,269.33,0,404" />
                            <rect x="19.88" y="430.4" class="st1" width="5.4" height="26.23" />
                            <text transform="matrix(0 -1 1 0 27.1616 496.5605)" class="st2 st3">Gomkhelling</text>
                            <g style="transition: all 4s;" class="Gomkhelling_hov box" >                                                                      <image class="glow" style="overflow:visible;opacity:0;transform: translateY(14.2%) translateX(0%);" width="50" height="50" xlink:href="public/glow.png">                    </image> 
                                <path class="water_and_sanitation"  d="M25.15,96.49c-3.16-4.54-6.25-9.15-9.41-13.76c-0.81-2.67-1.62-5.33-2.43-8c1.84,2.09,3.68,4.25,5.59,6.34C20.96,86.26,23.09,91.37,25.15,96.49z" />
                                <path class="shg"  d="M25.29,96.49c-0.37-5.48-0.74-11.03-1.1-16.5c0.66-2.74,1.32-5.4,2.06-8.14c0.51,2.74,1.03,5.48,1.54,8.21C26.91,85.54,26.1,91.01,25.29,96.49z" />
                                <path class="security"  d="M25.15,96.56c2.43-4.97,4.85-9.94,7.28-14.92c1.99-2.02,3.9-4.04,5.81-6.13c-0.96,2.67-1.84,5.26-2.79,7.93C32.06,87.84,28.6,92.16,25.15,96.56z" />
                                <path class="education"  d="M25.15,96.56c4.41-3.46,8.75-6.92,13.16-10.38c2.65-1.01,5.29-2.02,7.94-3.03c-1.99,2.02-4.04,3.96-6.03,5.98C35.22,91.59,30.22,94.11,25.15,96.56z" />
                                <path class="agriculture"  d="M25.15,96.56C20,94.33,14.85,92.09,9.71,89.79c-2.13-1.87-4.26-3.68-6.4-5.55c2.72,0.86,5.44,1.66,8.16,2.52C16.03,90.07,20.59,93.32,25.15,96.56z" />
                                <path class="handloom_and_handicraft"  d="M25.15,96.56c5.44-1.44,10.88-2.81,16.32-4.25c2.87,0.14,5.66,0.22,8.53,0.36c-2.65,1.01-5.29,2.02-7.94,3.1C36.4,96.06,30.81,96.34,25.15,96.56z" />
                                <path class="tourism"  d="M25.15,96.56c5.51,0.94,11.1,1.87,16.62,2.81c2.5,1.3,5.07,2.52,7.57,3.82c-2.87-0.14-5.66-0.29-8.53-0.5C35.59,100.67,30.37,98.65,25.15,96.56z" />
                                <path class="lodging_and_boarding"  d="M25.15,96.56c4.71,3.03,9.49,5.98,14.19,8.94c1.84,2.16,3.6,4.32,5.44,6.41c-2.57-1.23-5.15-2.45-7.65-3.68C33.16,104.41,29.12,100.45,25.15,96.56z" />
                                <path class="fisheries"  d="M25.15,96.49c2.79,4.83,5.59,9.58,8.31,14.41c0.59,2.74,1.18,5.48,1.76,8.14c-1.69-2.23-3.38-4.54-5-6.77C28.53,107.01,26.84,101.75,25.15,96.49z" />
                                <path class="animal_husbandry"  d="M25.15,96.49c0.59,5.48,1.18,10.95,1.76,16.43c-0.59,2.74-1.1,5.48-1.69,8.21c-0.59-2.74-1.25-5.48-1.84-8.14C23.97,107.44,24.56,101.96,25.15,96.49z" />
                                <path class="healthcare"  d="M25.15,96.49c-1.69,5.26-3.46,10.52-5.15,15.78c-1.62,2.31-3.31,4.54-4.93,6.85c0.59-2.74,1.1-5.48,1.69-8.21C19.56,106.07,22.35,101.24,25.15,96.49z" />
                                <path class="finance"  d="M25.15,96.63c-5.59,0.36-11.25,0.65-16.84,1.01C5.51,96.99,2.79,96.27,0,95.62c2.79-0.5,5.59-0.94,8.38-1.44C14.04,94.97,19.56,95.77,25.15,96.63z" />
                                <path class="food_and_supplies"  d="M25.22,96.56c-5,2.45-10.07,4.97-15.07,7.42c-2.79,0.43-5.59,0.86-8.46,1.3c2.35-1.51,4.78-3.1,7.13-4.61C14.26,99.37,19.78,98,25.22,96.56z" />
                                <path class="energy_and_ict"  d="M25.22,96.49c-3.6,4.25-7.21,8.5-10.81,12.68c-2.43,1.51-4.78,3.03-7.21,4.54c1.54-2.31,3.16-4.68,4.71-6.99C16.32,103.26,20.74,99.87,25.22,96.49z" />
                            </g>
                        </svg>
                    </div>
                    <div id="visButtonsContainer" class="mixerPageMode" style="visibility: visible; opacity: 0;">
		<div id="visButtonsSorting"><span data-i18n="[html]vis.sortbuttons.sortBy">&#8592; Villages</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="asset">
                <h6 class="mt-2" id="district">Display By :  <a href="index.php">District </a> |<a href="village.php"> Villages</a> |<a href="village_select.php"> Select Villages</a></h6>
                    <ul class="list-group">
                        <li title="Water and Sanitation" class="list-group-item d-flex justify-content-between align-items-center">
                            <i class="fa fa-tint" style="font-size:25px;color:#3490dc;"></i>
                            <div title="Water and Sanitation" class="slider-container s1">
                                <input id="slider1" name="water" type="range" min="0" max="100" step="25" value="0" />
                                <div class="count1 hide">0</div>
                                <div class="fill1"></div>
                            </div>
                        </li>
                        <li title="Health" class="list-group-item d-flex justify-content-between align-items-center">
                            <i class="fa fa-heartbeat" style="font-size:20px;color:#38c172;"></i>
                            <div title="Health" class="slider-container s2">
                                <input id="slider2" name="" type="range" min="0" max="100" step="25" value="0" />
                                <div class="count2 hide">0</div>
                                <div class="fill2"></div>
                            </div>
                        </li>
                        <li title="SHG" class="list-group-item d-flex justify-content-between align-items-center">
                            <i class="fa fa-users" style="font-size:20px;color:#AB47BC;"></i>
                            <div title="SHG" class="slider-container s3">
                                <input id="slider3" type="range" min="0" max="100" step="25" value="0" />
                                <div class="count3 hide">0</div>
                                <div class="fill3"></div>
                            </div>
                        </li>
                        <li title="Food and Supplies" class="list-group-item d-flex justify-content-between align-items-center">
                            <i class="fa fa-utensils" style="font-size:20px;color:#880E4F;"></i>
                            <div title="Food and Supplies" class="slider-container s4">
                                <input id="slider4" type="range" min="0" max="100" step="25" value="0" />
                                <div class="count4 hide">0</div>
                                <div class="fill4"></div>
                            </div>
                        </li>
                        <li title="Handloom and Handicraft" class="list-group-item d-flex justify-content-between align-items-center">
                            <i class="fa fa-cut" style="font-size:20px;color:#470e88;"></i>
                            <div title="Handloom and Handicraft" class="slider-container s5">
                                <input id="slider5" type="range" min="0" max="100" step="25" value="0" />
                                <div class="count5 hide">0</div>
                                <div class="fill5"></div>
                            </div>
                        </li>
                        <li title="Agriculture" class="list-group-item d-flex justify-content-between align-items-center">
                            <i class="fa fa-tractor" style="font-size:20px;color:#88840e;"></i>
                            <div title="Agriculture" class="slider-container s6">
                                <input id="slider6" type="range" min="0" max="100" step="25" value="0" />
                                <div class="count6 hide">0</div>
                                <div class="fill6"></div>
                            </div>
                        </li>
                        <li title="Finance" class="list-group-item d-flex justify-content-between align-items-center">
                            <i class="fa fa-coins" style="font-size:20px;color:#88470e;"></i>
                            <div title="Finance" class="slider-container s7">
                                <input id="slider7" type="range" min="0" max="100" step="25" value="0" />
                                <div class="count7 hide">0</div>
                                <div class="fill7"></div>
                            </div>
                        </li>
                        <li title="Energy and ICT" class="list-group-item d-flex justify-content-between align-items-center">
                            <i class="fas fa-charging-station" style="font-size:20px;color:#ffff33;"></i>
                            <div title="Energy and ICT" class="slider-container s8">
                                <input id="slider8" type="range" min="0" max="100" step="25" value="0" />
                                <div class="count8 hide">0</div>
                                <div class="fill8"></div>
                            </div>
                        </li>
                        <li title="Animal Husbandary" class="list-group-item d-flex justify-content-between align-items-center">
                            <i class="fa fa-paw" style="font-size:20px;color:#ff3333;"></i>
                            <div title="Animal Husbandary" class="slider-container s9">
                                <input id="slider9" type="range" min="0" max="100" step="25" value="0" />
                                <div class="count9 hide">0</div>
                                <div class="fill9"></div>
                            </div>
                        </li>
                        <li title="Fisheries" class="list-group-item d-flex justify-content-between align-items-center">
                            <i class="fa fa-fish" style="font-size:20px;color:#707070;"></i>
                            <div title="Fisheries" class="slider-container s10">
                                <input id="slider10" type="range" min="0" max="100" step="25" value="0" />
                                <div class="count10 hide">0</div>
                                <div class="fill10"></div>
                            </div>
                        </li>
                        <li title="Lodging and Boarding" class="list-group-item d-flex justify-content-between align-items-center">
                            <i class="fa fa-bed" style="font-size:20px;color:#509650;"></i>
                            <div title="Lodging and Boarding" class="slider-container s11">
                                <input id="slider11" type="range" min="0" max="100" step="25" value="0" />
                                <div class="count11 hide">0</div>
                                <div class="fill11"></div>
                            </div>
                        </li>
                        <li title="Tourism" class="list-group-item d-flex justify-content-between align-items-center">
                            <i class="fa fa-torii-gate" style="font-size:20px;color:#965050;"></i>
                            <div title="Tourism" class="slider-container s12">
                                <input id="slider12" type="range" min="0" max="100" step="25" value="0" />
                                <div class="count12 hide">0</div>
                                <div class="fill12"></div>
                            </div>
                        </li>
                        <li title="Education" class="list-group-item d-flex justify-content-between align-items-center">
                            <i class="fa fa-school" style="font-size:20px;color:#f4511e;"></i>
                            <div title="Education" class="slider-container s13">
                                <input id="slider13" type="range" min="0" max="100" step="25" value="0" />
                                <div class="count13 hide">0</div>
                                <div class="fill13"></div>
                            </div>
                        </li>
                        <li title="Security" class="list-group-item d-flex justify-content-between align-items-center">
                            <i class="fa fa-shield-alt" style="font-size:20px;color:#004d40;"></i>
                            <div title="Security" class="slider-container s14">
                                <input id="slider14" type="range" min="0" max="100" step="25" value="0" />
                                <div class="count14 hide">0</div>
                                <div class="fill14"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <style>
    .center{
        margin: 1% 41%;
    }
    #done{
        margin:auto;
    }
    </style>
    <div class="w-100">
        <div class="center">
    <strong>Select Villages:</strong>
    <select id="multiple-checkboxes" multiple="multiple">
            <optgroup label="Papumpare">
                    <option value="Doimukh">Doimukh</option>
                    <option value="Soppo">Soppo</option>
                    <option value="Chiputa">Chiputa</option>
                    <option value="Mani">Mani</option>
                    <option value="Lekha">Lekha</option>
                    <option value="Lekhi">Lekhi</option>
                    <option value="Karsingsa_Complex">Karsingsa_Complex</option>
                    <option value="Kharsingsa_Village">Kharsingsa_Village</option>
                    <option value="Kharsingsa">Kharsingsa</option>
                    <option value="Bandardewa">Bandardewa</option>
                    <option value="Parang">Parang</option>
                    <option value="Pareng">Pareng</option>
                    <option value="Dokte_Hoj">Dokte_Hoj</option>
                    <option value="Kheel">Kheel</option>
                    <option value="Poma">Poma</option>
                    <option value="Jote">Jote</option>
                    <option value="Ganga">Ganga</option>
                    <option value="Jollang">Jollang</option>
                    <option value="Gumto">Gumto</option>
                    <option value="Gumto-i">Gumto-i</option>
                    <option value="Borum">Borum</option>
                    <option value="Nyorch">Nyorch</option>
                    <option value="Durpa">Durpa</option>
                    <optgroup label="West Kameng">
                    <option value="Singchung">Singchung</option>
                    <option value="Tenga_Valley">Tenga_Valley</option>
                    <option value="Dirang">Dirang</option>
                    <option value="Lower_Dzang">Lower_Dzang</option>
                    <option value="Lower_Dzong">Lower_Dzong</option>
                    <option value="Nafra">Nafra</option>
                    <option value="Rowta">Rowta</option>
                    <option value="Shergaon">Shergaon</option>
                    <option value="Jigaon">Jigaon</option>
                    <option value="Shinchung">Shinchung</option>
                    <optgroup label="East Siang">
                    <option value="Oyan_Village">Oyan_Village</option>
                    <option value="Rani">Rani</option>
                    <option value="Sille_Village">Sille_Village</option>
                    <option value="Murali">Murali</option>
                    <option value="SikaBamin">SikaBamin</option>
                    <option value="SilleCamp">SilleCamp</option>
                    <option value="Rengging">Rengging</option>
                    <option value="Balek">Balek</option>
                    <option value="Boyng">Boyng</option>
                    <option value="Roying">Roying</option>
                    <option value="Pasighat">Pasighat</option>
                    <option value="Boying">Boying</option>
                    <option value="Mebo">Mebo</option>
                    <option value="Mottum">Mottum</option>
                    <option value="Namsang">Namsang</option>
                    <option value="Ngorlung">Ngorlung</option>
                    <option value="Mangnang">Mangnang</option>
                    <option value="Ruksin">Ruksin</option>
                    <option value="Sille">Sille</option>
                    <optgroup label="Lower Subansiri">
                    <option value="Sika-Bamin">Sika-Bamin</option>
                    <option value="Did">Did</option>
                    <option value="deed">deed</option>
                    <option value="Jara">Jara</option>
                    <option value="Toon">Toon</option>
                    <option value="Yoglo">Yoglo</option>
                    <option value="Bamin">Bamin</option>
                    <option value="Modang_Tage">Modang_Tage</option>
                    <option value="Hari">Hari</option>
                    <option value="Hija">Hija</option>
                    <option value="Hong">Hong</option>
                    <option value="Kalong">Kalong</option>
                    <option value="Keiliya">Keiliya</option>
                    <option value="Lempiya">Lempiya</option>
                    <option value="Michi">Michi</option>
                    <option value="Taring">Taring</option>
                    <option value="Siro">Siro</option>
                    <option value="Dutta">Dutta</option>
                    <option value="Reru">Reru</option>
                    <option value="Tajang">Tajang</option>
                    <option value="Nenchaliya">Nenchaliya</option>
                    <option value="Ziro">Ziro</option>
                    <option value="Molyang_Tajang">Molyang_Tajang</option>
                    <option value="OldZiro">OldZiro</option>
                    <option value="Sibe">Sibe</option>
                    <option value="Mani_Polyang">Mani_Polyang</option>
                    <option value="Tajang_">Tajang_</option>
                    <option value="KalungReru">KalungReru</option>
                    <option value="Hong_Niitii">Hong_Niitii</option>
                    <optgroup label="Changlang">
                    <option value="Changlang_CT">Changlang_CT</option>
                    <option value="Ngaichang">Ngaichang</option>
                    <option value="Old_Changlang">Old_Changlang</option>
                    <optgroup label="Lohit">
                    <option value="Laboliang">Laboliang</option>
                    <option value="Lohitpur">Lohitpur</option>
                    <optgroup label="Namsai">
                    <option value="Lekang">Lekang</option>
                    <option value="OldMohang">OldMohang</option>
                    <option value="Kaisu_LC">Kaisu_LC</option>
                    <optgroup label="Tawang">
                    <option value="Kitpi">Kitpi</option>
                    <option value="Manpat">Manpat</option>
                    <option value="Lumla">Lumla</option>
                    <option value="Gomkelling">Gomkelling</option>
                    <option value="Mukto">Mukto</option>
                    <option value="Gomkhelling">Gomkhelling</option>
                    <optgroup label="Tirap">
                    <option value="Kaimoi">Kaimoi</option>
                    <option value="Kheti">Kheti</option>
                    <option value="Lapnan">Lapnan</option>
                    <option value="Khonsa_I">Khonsa_I</option>
                    <optgroup label="West Siang">
                    <option value="Kambu">Kambu</option>
                    <option value="KugiPomse">KugiPomse</option>
                    <option value="Kugi_Pomte">Kugi_Pomte</option>
                    <option value="TarasuMobuk">TarasuMobuk</option>
                    <option value="Kambu_">Kambu_</option>
                    <!-- {{-- <optgroup label="Lower Subansiri">
                    <option value="Bomjir">Bomjir</option>
                    <option value="Karle">Karle</option> --}} -->


    </select>
    <br>
          <button id="done" class="btn-save mt-2 btn btn-primary btn-sm">Done</button>
        </div>
        </div>

        <div style="margin-top:20%" class="h-50"></div>
      
      <div id="qtip-hoverbox" class="qtip  qtip-default  qtip-pos-bc qtip-focus qtip-pos-tc" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-hoverbox-content" aria-hidden="false" data-qtip-id="hoverbox" style="z-index: 22001;">
      <div class="qtip-tip" style="background-color: transparent !important; border: 0px !important; width: 6px; height: 6px; line-height: 6px; left: 50%; margin-left: -3px; top: -6px;">
      <canvas width="6" height="6" style="background-color: transparent !important; border: 0px !important; width: 6px; height: 6px;">
  </canvas></div><div class="qtip-content" id="qtip-hoverbox-content" aria-atomic="true">
      <div id="hoverbox" data-hasqtip="hoverbox" aria-describedby="qtip-hoverbox" style="display: block; visibility: visible;">
      <div class="header">
</div>
<div class="content clearfix ">
  <div class="dimensionLabel">Water and Sanitation</div>
<div id="water_and_sanitation" class="barChartBar" style="width:75px; background:#3490dc">&nbsp;</div>
<div  class="dimensionLabel">Health</div>
<div id="health" class="barChartBar" style="width:21.7454401430257px; background:#38c172">&nbsp;</div>
<div  class="dimensionLabel">SHG</div>
<div id="shg" class="barChartBar" style="width:59.83771344376403px; background:#AB47BC">&nbsp;</div>
<div  class="dimensionLabel">Food and Supplies</div>
<div id="food_and_supplies" class="barChartBar" style="width:63.0688432723272px; background:#880E4F">&nbsp;</div>
<div  class="dimensionLabel">Handloom and Handicraft</div>
<div id="handloom_and_handicraft" class="barChartBar" style="width:56.999441171214556px; background:#470e88">&nbsp;</div>
<div  class="dimensionLabel">Agriculture</div>
<div id="agriculture" class="barChartBar" style="width:59.57585554485222px; background:#88840e">&nbsp;</div>
<div  class="dimensionLabel">Finance</div>
<div id="finance" class="barChartBar" style="width:50.098248676915986px; background:#88470e">&nbsp;</div>
<div  class="dimensionLabel">Energy and ICT</div>
<div id="energy_and_ict" class="barChartBar" style="width:56.65665057097126px; background:#ffff33">&nbsp;</div>
<div  class="dimensionLabel">Animal Husbandry</div>
<div id="animal_husbandry" class="barChartBar" style="width:70.10115864436605px; background:#ff3333">&nbsp;</div>
<div  class="dimensionLabel">Fisheries</div>
<div id="fisheries" class="barChartBar" style="width:67.0997874991027px; background:#707070">&nbsp;</div>
<div  class="dimensionLabel">Loadging and Boarding</div>
<div id="loadging_and_boarding" class="barChartBar" style="width:64.68256604931783px; background:#509650">&nbsp;</div>
<div  class="dimensionLabel">Tourism</div>
<div id="tourism" class="barChartBar" style="width:64.68256604931783px; background:#965050">&nbsp;</div>
<div  class="dimensionLabel">Education</div>
<div id="education" class="barChartBar" style="width:64.68256604931783px; background:#f4511e">&nbsp;</div>
<div  class="dimensionLabel">Security</div>
<div id="security" class="barChartBar" style="width:64.68256604931783px; background:#004d40">&nbsp;</div>
</div></div></div></div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
    <script>
        $(document).ready(function() {
            $(".d-flex").css({
                'display': "flex"
            });
            $(".se-pre-con").fadeOut("slow");
            $('#visButtonsContainer').css({'opacity':1});
            $('#multiple-checkboxes').multiselect({
                buttonWidth: '300px',
          includeSelectAllOption: true,
        });
        });
        var order = [];

        function updateGraph(len,villages,shg, water_and_sanitation, agriculture, finance, food_and_supplies, energy_and_ict, healthcare, animal_husbandry, fisheries, lodging_and_boarding, tourism, handloom_and_handicraft, education, security) {
            var set = 0;
            if(shg==0 && water_and_sanitation==0 && agriculture==0 && finance==0 && food_and_supplies==0 && energy_and_ict==0 && healthcare==0 && animal_husbandry==0 && fisheries==0 && lodging_and_boarding==0 && tourism==0 && handloom_and_handicraft==0 && education==0 && security==0){
                shg=100;
                water_and_sanitation=100;
                agriculture =100;
                finance=100;
                food_and_supplies=100;
                energy_and_ict=100;
                healthcare=100;
                animal_husbandry=100;
                fisheries=100;
                lodging_and_boarding=100;
                tourism=100;
                handloom_and_handicraft=100;
                education=100;
                security=100;


            }
            var items = [];

            $.getJSON("public/village.json", function(data) {
                order = [];
                var s;
                var w;
                var agri;
                var f;
                var fns;
                var eni;
                var h;
                var anh;
                var fish;
                var lnb;
                var t;
                var hnh;
                var edu;
                var secu;
                $.each(data, function(dist, scores) {
                    if(jQuery.inArray(dist, villages) !== -1){
                    s = (shg * scores.score.verticals.shg.score) / 100;
                    w = (water_and_sanitation * scores.score.verticals.water_and_sanitation.score) / 100;
                    agri = (agriculture * scores.score.verticals.agriculture.score) / 100;
                    f = (finance * scores.score.verticals.finance.score) / 100;
                    fns = (food_and_supplies * scores.score.verticals.food_and_supplies.score) / 100;
                    eni = (energy_and_ict * scores.score.verticals.energy_and_ict.score) / 100;
                    h = (healthcare * scores.score.verticals.healthcare.score) / 100;
                    anh = (animal_husbandry * scores.score.verticals.animal_husbandry.score) / 100;
                    fish = (fisheries * scores.score.verticals.fisheries.score) / 100;
                    lnb = (lodging_and_boarding * scores.score.verticals.lodging_and_boarding.score) / 100;
                    t = (tourism * scores.score.verticals.tourism.score) / 100;
                    hnh = (handloom_and_handicraft * scores.score.verticals.handloom_and_handicraft.score) / 100;
                    edu = (education * scores.score.verticals.education.score) / 100;
                    secu = (security * scores.score.verticals.security.score) / 100;
                    var total = s + w + agri + f + fns + eni + h + anh + fish + lnb + t + hnh + edu + secu;
                    var a = {
                        "name": dist,
                        "score": scores.score,
                        "tot_score": total,
                        "shg": scores.score.verticals.shg.score,
                        "water_and_sanitation": scores.score.verticals.water_and_sanitation.score,
                        "agriculture": scores.score.verticals.agriculture.score,
                        "finance": scores.score.verticals.finance.score,
                        "food_and_supplies": scores.score.verticals.food_and_supplies.score,
                        "energy_and_ict": scores.score.verticals.energy_and_ict.score,
                        "healthcare": scores.score.verticals.healthcare.score,
                        "animal_husbandry": scores.score.verticals.animal_husbandry.score,
                        "fisheries": scores.score.verticals.fisheries.score,
                        "lodging_and_boarding": scores.score.verticals.lodging_and_boarding.score,
                        "tourism": scores.score.verticals.tourism.score,
                        "handloom_and_handicraft": scores.score.verticals.handloom_and_handicraft.score,
                        "education": scores.score.verticals.education.score,
                        "security": scores.score.verticals.security.score,
                    };
                    order.push(a);
                    }

                });
                order.sort(function(a, b) {
                    return b.tot_score - a.tot_score;
                })

                var max = order[0].tot_score;
                var j =1
                console.log(order);
                for (let i = 1; i <= order.length; i++) {
                    var tall;
                    if(max!=0){
                        tall = ((order[i-1].tot_score*100)/max)/100;
                    }else{
                        tall = 0;
                    }
                    if(jQuery.inArray(order[i-1].name, villages) !== -1){
                    //

                    $('.'.concat(order[i-1].name)).attr('class',order[i-1].name.concat(' trans order-'.concat((len+1)-j)));

                        var size1 = (order[i-1].water_and_sanitation/100)*1.6;
                        var s1 = (water_and_sanitation/100);
                        var s1_str = 'rgb(52, 144, 220,1)';
                        var s1_fill = 'rgb(52, 144, 220,1)';
                        var s1_w =s1;
                        if(s1 == 0){
                            s1_str = 'black';
                            s1_fill = 'rgb(245, 245, 245,0.4)';
                            s1_w = 0.1;
                        }
                         $('.'.concat(order[i-1].name,'_hov',' .water_and_sanitation')).css({
                            'transform-origin': 100 +'%'+' '+ 100+'%',
                            'transform-box': 'fill-box',
                            'transform': 'scale('+ size1 + ')',
                            'stroke': s1_str,
                            'fill': s1_fill,
                            'stroke-width': s1_w,
                            'stroke-miterlimit': 10
                        });
                        var s2 = (shg/100);
                        var size2 = (order[i-1].shg/100)*1.6;
                        var s2_str = 'rgb(171, 71, 188)';
                        var s2_fill = 'rgb(171, 71, 188)';
                        var s2_w =s2;
                        if(s2 == 0){
                            s2_str = 'black';
                            s2_fill = 'rgb(245, 245, 245,0.4)';
                            s2_w = 0.1;
                        }
                         $('.'.concat(order[i-1].name,'_hov',' .shg')).css({
                            'transform-origin': 30 +'%'+' '+ 100+'%',
                            'transform-box': 'fill-box',
                            'transform': 'scale('+ size2 + ')',
                            'stroke': s2_str,
                            'fill': s2_fill,
                            'stroke-width': s2_w,
                            'stroke-miterlimit': 10
                        });
                        // #004d40;rgb(0, 77, 64);
                        var s3 = (agriculture/100);
                        var size3 = (order[i-1].agriculture/100*1.6);
                        var s3_str = 'rgb(136,132,14)';
                        var s3_fill = 'rgb(136,132,14)';
                        var s3_w =s3;
                        if(s3 == 0){
                            s3_str = 'black';
                            s3_fill = 'rgb(245, 245, 245,0.4)';
                            s3_w = 0.1;
                        }
                         $('.'.concat(order[i-1].name,'_hov',' .agriculture')).css({
                            'transform-origin': 100 +'%'+' '+ 100+'%',
                            'transform-box': 'fill-box',
                            'transform': 'scale('+ size3 + ')',
                            'stroke': s3_str,
                            'fill': s3_fill,
                            'stroke-width': s3_w,
                            'stroke-miterlimit': 10
                        });
                        var s4 = (finance/100);
                        var size4 = (order[i-1].finance/100)*1.6;
                        var s4_str = 'rgb(136, 71, 14)';
                        var s4_fill = 'rgb(136, 71, 14)';
                        var s4_w =s4;
                        if(s4 == 0){
                            s4_str = 'black';
                            s4_fill = 'rgb(245, 245, 245,0.4)';
                            s4_w = 0.1;
                        }
                         $('.'.concat(order[i-1].name,'_hov',' .finance')).css({
                            'transform-origin': 100 +'%'+' '+ 70+'%',
                            'transform-box': 'fill-box',
                            'transform': 'scale('+ size4 + ')',
                            'stroke': s4_str,
                            'fill': s4_fill,
                            'stroke-width': s4_w,
                            'stroke-miterlimit': 10
                        });
                        var s5 = (food_and_supplies/100);
                        var size5 = (order[i-1].food_and_supplies/100)*1.6;
                        var s5_str = 'rgb(136, 14, 79)';
                        var s5_fill = 'rgb(136, 14, 79)';
                        var s5_w =s5;
                        if(s5 == 0){
                            s5_str = 'black';
                            s5_fill = 'rgb(245, 245, 245,0.4)';
                            s5_w = 0.1;
                        }
                         $('.'.concat(order[i-1].name,'_hov',' .food_and_supplies')).css({
                            'transform-origin': 100 +'%'+' '+ 0+'%',
                            'transform-box': 'fill-box',
                            'transform': 'scale('+ size5 + ')',
                            'stroke': s5_str,
                            'fill': s5_fill,
                            'stroke-width': s5_w,
                            'stroke-miterlimit': 10
                        });
                        var s6 = (energy_and_ict/100);
                        var size6 = (order[i-1].energy_and_ict/100*1.6);
                        var s6_str = 'rgb(255, 255, 51)';
                        var s6_fill = 'rgb(255, 255, 51)';
                        var s6_w =s6;
                        if(s6 == 0){
                            s6_str = 'black';
                            s6_fill = 'rgb(245, 245, 245,0.4)';
                            s6_w = 0.1;
                        }
                         $('.'.concat(order[i-1].name,'_hov',' .energy_and_ict')).css({
                            'transform-origin': 100 +'%'+' '+ 0+'%',
                            'transform-box': 'fill-box',
                            'transform': 'scale('+ size6 + ')',
                            'stroke': s6_str,
                            'fill': s6_fill,
                            'stroke-width': s6_w,
                            'stroke-miterlimit': 10
                        });
                        var s7 = (healthcare/100);
                        var size7 = (order[i-1].healthcare/100)*1.6;
                        var s7_str = 'rgb(56, 193, 114)';
                        var s7_fill = 'rgb(56, 193, 114)';
                        var s7_w =s7;
                        if(s7 == 0){
                            s7_str = 'black';
                            s7_fill = 'rgb(245, 245, 245,0.4)';
                            s7_w = 0.1;
                        }
                         $('.'.concat(order[i-1].name,'_hov',' .healthcare')).css({
                            'transform-origin': 100 +'%'+' '+ 0+'%',
                            'transform-box': 'fill-box',
                            'transform': 'scale('+ size7 + ')',
                            'stroke': s7_str,
                            'fill': s7_fill,
                            'stroke-width': s7_w,
                            'stroke-miterlimit': 10
                        });
                        var s8 = (animal_husbandry/100);
                        var size8 = (order[i-1].animal_husbandry/100)*1.6;
                        var s8_str = 'rgb(255, 51, 51)';
                        var s8_fill = 'rgb(255, 51, 51)';
                        var s8_w =s8;
                        if(s8 == 0){
                            s8_str = 'black';
                            s8_fill = 'rgb(245, 245, 245,0.4)';
                            s8_w = 0.1;
                        }
                         $('.'.concat(order[i-1].name,'_hov',' .animal_husbandry')).css({
                            'transform-origin': 50 +'%'+' '+ 0+'%',
                            'transform-box': 'fill-box',
                            'transform': 'scale('+ size8 + ')',
                            'stroke': s8_str,
                            'fill': s8_fill,
                            'stroke-width': s8_w,
                            'stroke-miterlimit': 10
                        });
                        var s9 = (fisheries/100);
                        var size9 = (order[i-1].fisheries/100)*1.6;
                        var s9_str = 'rgb(112, 112, 112)';
                        var s9_fill = 'rgb(112, 112, 112)';
                        var s9_w =s9;
                        if(s9 == 0){
                            s9_str = 'black';
                            s9_fill = 'rgb(245, 245, 245,0.4)';
                            s9_w = 0.1;
                        }
                         $('.'.concat(order[i-1].name,'_hov',' .fisheries')).css({
                            'transform-origin': 0 +'%'+' '+ 0+'%',
                            'transform-box': 'fill-box',
                            'transform': 'scale('+ size9 + ')',
                            'stroke': s9_str,
                            'fill': s9_fill,
                            'stroke-width': s9_w,
                            'stroke-miterlimit': 10
                        });
                        var s10 = (lodging_and_boarding/100);
                        var size10 = (order[i-1].lodging_and_boarding/100)*1.6;
                        var s10_str = 'rgb(80, 150, 80)';
                        var s10_fill = 'rgb(80, 150, 80)';
                        var s10_w =s10;
                        if(s10 == 0){
                            s10_str = 'black';
                            s10_fill = 'rgb(245, 245, 245,0.4)';
                            s10_w = 0.1;
                        }
                         $('.'.concat(order[i-1].name,'_hov',' .lodging_and_boarding')).css({
                            'transform-origin': 0 +'%'+' '+ 0+'%',
                            'transform-box': 'fill-box',
                            'transform': 'scale('+ size10 + ')',
                            'stroke': s10_str,
                            'fill': s10_fill,
                            'stroke-width': s10_w,
                            'stroke-miterlimit': 10
                        });
                        var s11 = (tourism/100);
                        var size11 = (order[i-1].tourism/100)*1.6;
                        var s11_str = 'rgb(150, 80, 80)';
                        var s11_fill = 'rgb(150, 80, 80)';
                        var s11_w =s11;
                        if(s11 == 0){
                            s11_str = 'black';
                            s11_fill = 'rgb(245, 245, 245,0.4)';
                            s11_w = 0.1;
                        }
                         $('.'.concat(order[i-1].name,'_hov',' .tourism')).css({
                            'transform-origin': 0 +'%'+' '+ 0+'%',
                            'transform-box': 'fill-box',
                            'transform': 'scale('+ size11 + ')',
                            'stroke': s11_str,
                            'fill': s11_fill,
                            'stroke-width': s11_w,
                            'stroke-miterlimit': 10
                        });
                        var s12 = (handloom_and_handicraft/100);
                        var size12 = (order[i-1].handloom_and_handicraft/100)*1.6;
                        var s12_str = 'rgb(71,14,136)';
                        var s12_fill = 'rgb(71,14,136)';
                        var s12_w =s12;
                        if(s12 == 0){
                            s12_str = 'black';
                            s12_fill = 'rgb(245, 245, 245,0.4)';
                            s12_w = 0.1;
                        }
                         $('.'.concat(order[i-1].name,'_hov',' .handloom_and_handicraft')).css({
                            'transform-origin': 0 +'%'+' '+ 100+'%',
                            'transform-box': 'fill-box',
                            'transform': 'scale('+ size12 + ')',
                            'stroke': s12_str,
                            'fill': s12_fill,
                            'stroke-width': s12_w,
                            'stroke-miterlimit': 10
                        });
                        var s13 = (education/100);
                        var size13 = (order[i-1].education/100)*1.6;
                        var s13_str = 'rgb(244,81,30)';
                        var s13_fill = 'rgb(244,81,30)';
                        var s13_w =s13;
                        if(s13 == 0){
                            s13_str = 'black';
                            s13_fill = 'rgb(245, 245, 245,0.4)';
                            s13_w = 0.1;
                        }
                         $('.'.concat(order[i-1].name,'_hov',' .education')).css({
                            'transform-origin': 0 +'%'+' '+ 100+'%',
                            'transform-box': 'fill-box',
                            'transform': 'scale('+ size13 + ')',
                            'stroke': s13_str,
                            'fill': s13_fill,
                            'stroke-width': s13_w,
                            'stroke-miterlimit': 10
                        });
                        var s14 = (security/100);
                        var size14 = (order[i-1].security/100)*1.6;
                        var s14_str = 'rgb(0, 77, 64)';
                        var s14_fill = 'rgb(0, 77, 64)';
                        var s14_w =s14;
                        if(s14 == 0){
                            s14_str = 'black';
                            s14_fill = 'rgb(245, 245, 245,0.4)';
                            s14_w = 0.1;
                        }
                         $('.'.concat(order[i-1].name,'_hov',' .security')).css({
                            'transform-origin': 0 +'%'+' '+ 100+'%',
                            'transform-box': 'fill-box',
                            'transform': 'scale('+ size14 + ')',
                            'stroke': s14_str,
                            'fill': s14_fill,
                            'stroke-width': s14_w,
                            'stroke-miterlimit': 10
                        });

                    if (i==1) {
                        $('.'.concat(order[i-1].name)).css({
                            'transform': 'translateX('+ 0 + '%)'
                        });
                    }
                        $('.'.concat(order[i-1].name,'_txt')).css({
                            'transform-origin': 100 +'%'+' '+ 100+'%',
                            'transform-box': 'fill-box',
                            'transform': 'scale('+ (tall+0.1) + ')',
                        });
                    var locate =((1-tall)*10*8.06)-8.06;
                    $('.'.concat(order[i-1].name,'_hov')).css({
                        'transform': 'translateY('+ locate + '%)'
                    });
                    j++;
                    }
                }
                responsive(len);


            });
        }

        var slider1 = document.getElementById("slider1");

        slider1.oninput = function() {
            $('.count1').removeClass('hide');
            $('.count1').text(this.value).css({
                'left': this.value + '%',
                'transform': 'translateX(-' + this.value + '%)'
            });
            $('.fill1').css('width', this.value + '%');
            if (this.value == 0) {
                $('.count1').addClass('hide');
            }
            var s = $('.count3').text();
            var w = $('.count1').text();
            var agri = $('.count6').text();
            var f = $('.count7').text();
            var fns = $('.count4').text();
            var eni = $('.count8').text();
            var h = $('.count2').text();
            var anh = $('.count9').text();
            var fish = $('.count10').text();
            var lnb = $('.count11').text();
            var t = $('.count12').text();
            var hnh = $('.count5').text();
            var edu = $('.count13').text();
            var secu = $('.count14').text();
            var foo = $('#multiple-checkboxes').val();
            var len = foo.length;
            updateGraph(len,foo,s, w, agri, f, fns, eni, h, anh, fish, lnb, t, hnh, edu, secu);
        }

        var slider2 = document.getElementById("slider2");

        slider2.oninput = function() {
            $('.count2').removeClass('hide');
            $('.count2').text(this.value).css({
                'left': this.value + '%',
                'transform': 'translateX(-' + this.value + '%)',
            });
            $('.fill2').css('width', this.value + '%');
            if (this.value == 0) {
                $('.count2').addClass('hide');
            }
            var s = $('.count3').text();
            var w = $('.count1').text();
            var agri = $('.count6').text();
            var f = $('.count7').text();
            var fns = $('.count4').text();
            var eni = $('.count8').text();
            var h = $('.count2').text();
            var anh = $('.count9').text();
            var fish = $('.count10').text();
            var lnb = $('.count11').text();
            var t = $('.count12').text();
            var hnh = $('.count5').text();
            var edu = $('.count13').text();
            var secu = $('.count14').text();
            var foo = $('#multiple-checkboxes').val();
            var len = foo.length;
            var foo = $('#multiple-checkboxes').val();
            var len = foo.length;
            var foo = $('#multiple-checkboxes').val();
            var len = foo.length;
            updateGraph(len,foo,s, w, agri, f, fns, eni, h, anh, fish, lnb, t, hnh, edu, secu);
        }

        var slider3 = document.getElementById("slider3");

        slider3.oninput = function() {
            $('.count3').removeClass('hide');
            $('.count3').text(this.value).css({
                'left': this.value + '%',
                'transform': 'translateX(-' + this.value + '%)'
            });
            $('.fill3').css('width', this.value + '%');
            if (this.value == 0) {
                $('.count3').addClass('hide');
            }
            var s = $('.count3').text();
            var w = $('.count1').text();
            var agri = $('.count6').text();
            var f = $('.count7').text();
            var fns = $('.count4').text();
            var eni = $('.count8').text();
            var h = $('.count2').text();
            var anh = $('.count9').text();
            var fish = $('.count10').text();
            var lnb = $('.count11').text();
            var t = $('.count12').text();
            var hnh = $('.count5').text();
            var edu = $('.count13').text();
            var secu = $('.count14').text();
            var foo = $('#multiple-checkboxes').val();
            var len = foo.length;
            updateGraph(len,foo,s, w, agri, f, fns, eni, h, anh, fish, lnb, t, hnh, edu, secu);
        }

        var slider4 = document.getElementById("slider4");

        slider4.oninput = function() {
            $('.count4').removeClass('hide');
            $('.count4').text(this.value).css({
                'left': this.value + '%',
                'transform': 'translateX(-' + this.value + '%)'
            });
            $('.fill4').css('width', this.value + '%');
            if (this.value == 0) {
                $('.count4').addClass('hide');
            }
            var s = $('.count3').text();
            var w = $('.count1').text();
            var agri = $('.count6').text();
            var f = $('.count7').text();
            var fns = $('.count4').text();
            var eni = $('.count8').text();
            var h = $('.count2').text();
            var anh = $('.count9').text();
            var fish = $('.count10').text();
            var lnb = $('.count11').text();
            var t = $('.count12').text();
            var hnh = $('.count5').text();
            var edu = $('.count13').text();
            var secu = $('.count14').text();
            var foo = $('#multiple-checkboxes').val();
            var len = foo.length;
            updateGraph(len,foo,s, w, agri, f, fns, eni, h, anh, fish, lnb, t, hnh, edu, secu);
        }

        var slider5 = document.getElementById("slider5");

        slider5.oninput = function() {
            $('.count5').removeClass('hide');
            $('.count5').text(this.value).css({
                'left': this.value + '%',
                'transform': 'translateX(-' + this.value + '%)'
            });
            $('.fill5').css('width', this.value + '%');
            if (this.value == 0) {
                $('.count5').addClass('hide');
            }
            var s = $('.count3').text();
            var w = $('.count1').text();
            var agri = $('.count6').text();
            var f = $('.count7').text();
            var fns = $('.count4').text();
            var eni = $('.count8').text();
            var h = $('.count2').text();
            var anh = $('.count9').text();
            var fish = $('.count10').text();
            var lnb = $('.count11').text();
            var t = $('.count12').text();
            var hnh = $('.count5').text();
            var edu = $('.count13').text();
            var secu = $('.count14').text();
            var foo = $('#multiple-checkboxes').val();
            var len = foo.length;
            updateGraph(len,foo,s, w, agri, f, fns, eni, h, anh, fish, lnb, t, hnh, edu, secu);
        }
        var slider6 = document.getElementById("slider6");

        slider6.oninput = function() {
            $('.count6').removeClass('hide');
            $('.count6').text(this.value).css({
                'left': this.value + '%',
                'transform': 'translateX(-' + this.value + '%)'
            });
            $('.fill6').css('width', this.value + '%');
            if (this.value == 0) {
                $('.count6').addClass('hide');
            }
            var s = $('.count3').text();
            var w = $('.count1').text();
            var agri = $('.count6').text();
            var f = $('.count7').text();
            var fns = $('.count4').text();
            var eni = $('.count8').text();
            var h = $('.count2').text();
            var anh = $('.count9').text();
            var fish = $('.count10').text();
            var lnb = $('.count11').text();
            var t = $('.count12').text();
            var hnh = $('.count5').text();
            var edu = $('.count13').text();
            var secu = $('.count14').text();
            var foo = $('#multiple-checkboxes').val();
            var len = foo.length;
            updateGraph(len,foo,s, w, agri, f, fns, eni, h, anh, fish, lnb, t, hnh, edu, secu);
        }
        var slider7 = document.getElementById("slider7");

        slider7.oninput = function() {
            $('.count7').removeClass('hide');
            $('.count7').text(this.value).css({
                'left': this.value + '%',
                'transform': 'translateX(-' + this.value + '%)'
            });
            $('.fill7').css('width', this.value + '%');
            if (this.value == 0) {
                $('.count7').addClass('hide');
            }
            var s = $('.count3').text();
            var w = $('.count1').text();
            var agri = $('.count6').text();
            var f = $('.count7').text();
            var fns = $('.count4').text();
            var eni = $('.count8').text();
            var h = $('.count2').text();
            var anh = $('.count9').text();
            var fish = $('.count10').text();
            var lnb = $('.count11').text();
            var t = $('.count12').text();
            var hnh = $('.count5').text();
            var edu = $('.count13').text();
            var secu = $('.count14').text();
            var foo = $('#multiple-checkboxes').val();
            var len = foo.length;
            updateGraph(len,foo,s, w, agri, f, fns, eni, h, anh, fish, lnb, t, hnh, edu, secu);
        }
        var slider8 = document.getElementById("slider8");

        slider8.oninput = function() {
            $('.count8').removeClass('hide');
            $('.count8').text(this.value).css({
                'left': this.value + '%',
                'transform': 'translateX(-' + this.value + '%)'
            });
            $('.fill8').css('width', this.value + '%');
            if (this.value == 0) {
                $('.count8').addClass('hide');
            }
            var s = $('.count3').text();
            var w = $('.count1').text();
            var agri = $('.count6').text();
            var f = $('.count7').text();
            var fns = $('.count4').text();
            var eni = $('.count8').text();
            var h = $('.count2').text();
            var anh = $('.count9').text();
            var fish = $('.count10').text();
            var lnb = $('.count11').text();
            var t = $('.count12').text();
            var hnh = $('.count5').text();
            var edu = $('.count13').text();
            var secu = $('.count14').text();
            var foo = $('#multiple-checkboxes').val();
            var len = foo.length;
            updateGraph(len,foo,s, w, agri, f, fns, eni, h, anh, fish, lnb, t, hnh, edu, secu);
        }
        var slider9 = document.getElementById("slider9");

        slider9.oninput = function() {
            $('.count9').removeClass('hide');
            $('.count9').text(this.value).css({
                'left': this.value + '%',
                'transform': 'translateX(-' + this.value + '%)'
            });
            $('.fill9').css('width', this.value + '%');
            if (this.value == 0) {
                $('.count9').addClass('hide');
            }
            var s = $('.count3').text();
            var w = $('.count1').text();
            var agri = $('.count6').text();
            var f = $('.count7').text();
            var fns = $('.count4').text();
            var eni = $('.count8').text();
            var h = $('.count2').text();
            var anh = $('.count9').text();
            var fish = $('.count10').text();
            var lnb = $('.count11').text();
            var t = $('.count12').text();
            var hnh = $('.count5').text();
            var edu = $('.count13').text();
            var secu = $('.count14').text();
            var foo = $('#multiple-checkboxes').val();
            var len = foo.length;
            updateGraph(len,foo,s, w, agri, f, fns, eni, h, anh, fish, lnb, t, hnh, edu, secu);
        }
        var slider10 = document.getElementById("slider10");

        slider10.oninput = function() {
            $('.count10').removeClass('hide');
            $('.count10').text(this.value).css({
                'left': this.value + '%',
                'transform': 'translateX(-' + this.value + '%)'
            });
            $('.fill10').css('width', this.value + '%');
            if (this.value == 0) {
                $('.count10').addClass('hide');
            }
            var s = $('.count3').text();
            var w = $('.count1').text();
            var agri = $('.count6').text();
            var f = $('.count7').text();
            var fns = $('.count4').text();
            var eni = $('.count8').text();
            var h = $('.count2').text();
            var anh = $('.count9').text();
            var fish = $('.count10').text();
            var lnb = $('.count11').text();
            var t = $('.count12').text();
            var hnh = $('.count5').text();
            var edu = $('.count13').text();
            var secu = $('.count14').text();
            var foo = $('#multiple-checkboxes').val();
            var len = foo.length;
            updateGraph(len,foo,s, w, agri, f, fns, eni, h, anh, fish, lnb, t, hnh, edu, secu);
        }
        var slider11 = document.getElementById("slider11");

        slider11.oninput = function() {
            $('.count11').removeClass('hide');
            $('.count11').text(this.value).css({
                'left': this.value + '%',
                'transform': 'translateX(-' + this.value + '%)'
            });
            $('.fill11').css('width', this.value + '%');
            if (this.value == 0) {
                $('.count11').addClass('hide');
            }
            var s = $('.count3').text();
            var w = $('.count1').text();
            var agri = $('.count6').text();
            var f = $('.count7').text();
            var fns = $('.count4').text();
            var eni = $('.count8').text();
            var h = $('.count2').text();
            var anh = $('.count9').text();
            var fish = $('.count10').text();
            var lnb = $('.count11').text();
            var t = $('.count12').text();
            var hnh = $('.count5').text();
            var edu = $('.count13').text();
            var secu = $('.count14').text();
            var foo = $('#multiple-checkboxes').val();
            var len = foo.length;
            updateGraph(len,foo,s, w, agri, f, fns, eni, h, anh, fish, lnb, t, hnh, edu, secu);
        }
        var slider12 = document.getElementById("slider12");

        slider12.oninput = function() {
            $('.count12').removeClass('hide');
            $('.count12').text(this.value).css({
                'left': this.value + '%',
                'transform': 'translateX(-' + this.value + '%)'
            });
            $('.fill12').css('width', this.value + '%');
            if (this.value == 0) {
                $('.count12').addClass('hide');
            }
            var s = $('.count3').text();
            var w = $('.count1').text();
            var agri = $('.count6').text();
            var f = $('.count7').text();
            var fns = $('.count4').text();
            var eni = $('.count8').text();
            var h = $('.count2').text();
            var anh = $('.count9').text();
            var fish = $('.count10').text();
            var lnb = $('.count11').text();
            var t = $('.count12').text();
            var hnh = $('.count5').text();
            var edu = $('.count13').text();
            var secu = $('.count14').text();
            var foo = $('#multiple-checkboxes').val();
            var len = foo.length;
            updateGraph(len,foo,s, w, agri, f, fns, eni, h, anh, fish, lnb, t, hnh, edu, secu);
        }
        var slider13 = document.getElementById("slider13");

        slider13.oninput = function() {
            $('.count13').removeClass('hide');
            $('.count13').text(this.value).css({
                'left': this.value + '%',
                'transform': 'translateX(-' + this.value + '%)'
            });
            $('.fill13').css('width', this.value + '%');
            if (this.value == 0) {
                $('.count13').addClass('hide');
            }
            var s = $('.count3').text();
            var w = $('.count1').text();
            var agri = $('.count6').text();
            var f = $('.count7').text();
            var fns = $('.count4').text();
            var eni = $('.count8').text();
            var h = $('.count2').text();
            var anh = $('.count9').text();
            var fish = $('.count10').text();
            var lnb = $('.count11').text();
            var t = $('.count12').text();
            var hnh = $('.count5').text();
            var edu = $('.count13').text();
            var secu = $('.count14').text();
            var foo = $('#multiple-checkboxes').val();
            var len = foo.length;
            updateGraph(len,foo,s, w, agri, f, fns, eni, h, anh, fish, lnb, t, hnh, edu, secu);
        }
        var slider14 = document.getElementById("slider14");

        slider14.oninput = function() {
                $('.count14').removeClass('hide');
                $('.count14').text(this.value).css({
                    'left': this.value + '%',
                    'transform': 'translateX(-' + this.value + '%)'
                });
                $('.fill14').css('width', this.value + '%');
                if (this.value == 0) {
                    $('.count14').addClass('hide');
                }
                var s = $('.count3').text();
                var w = $('.count1').text();
                var agri = $('.count6').text();
                var f = $('.count7').text();
                var fns = $('.count4').text();
                var eni = $('.count8').text();
                var h = $('.count2').text();
                var anh = $('.count9').text();
                var fish = $('.count10').text();
                var lnb = $('.count11').text();
                var t = $('.count12').text();
                var hnh = $('.count5').text();
                var edu = $('.count13').text();
                var secu = $('.count14').text();
                var foo = $('#multiple-checkboxes').val();
            var len = foo.length;
            updateGraph(len,foo,s, w, agri, f, fns, eni, h, anh, fish, lnb, t, hnh, edu, secu);
            }
            //responsive

        function responsive(len) {
            var w = $('.d-flex').width();
            var n = 50*len;
            var diff = (n - w) / len;
            var extra = diff / len;
            var req = diff + extra;
            if (w < n) {
                // style="transform: translateX(10%);"
                $('.order-1').css({
                        'transform': 'translateX(0px)'
                    });
                for (let i = 2; i <= len; i++) {
                    $('.order-'.concat(i)).css({
                        'transform': 'translateX(-' + ((i - 1) * req + extra) + 'px)'
                    });

                }

            }


        }

        //media query

        $(window).resize(function() {
            var foo = $('#multiple-checkboxes').val();
            var len = foo.length;
            var n = 50*len;
            var w = $('.d-flex').width();
            var diff = (n - w) / len;
            var extra = diff / len;
            var req = diff + extra;
            if (w < n) {
                // style="transform: translateX(10%);"
                $('.order-1').css({
                        'transform': 'translateX(0px)'
                    });
                for (let i = 2; i <= len; i++) {
                    $('.order-'.concat(i)).css({
                        'transform': 'translateX(-' + ((i - 1) * req + extra) + 'px)'
                    });

                }

            }
        });
        $('#done').click(function(){
            $('.trans').addClass('closed');
            var foo = $('#multiple-checkboxes').val();
            var s = $('.count3').text();
                var w = $('.count1').text();
                var agri = $('.count6').text();
                var f = $('.count7').text();
                var fns = $('.count4').text();
                var eni = $('.count8').text();
                var h = $('.count2').text();
                var anh = $('.count9').text();
                var fish = $('.count10').text();
                var lnb = $('.count11').text();
                var t = $('.count12').text();
                var hnh = $('.count5').text();
                var edu = $('.count13').text();
                var secu = $('.count14').text();
                updateGraph(foo.length,foo,s, w, agri, f, fns, eni, h, anh, fish, lnb, t, hnh, edu, secu);
        });


        $('.box').hover(function(event){
                // .slice(0, -4)
                var elm = $(this).attr("class").split(" ")[0];
                var dist = elm.slice(0,-4);
                $("."+elm+" > .glow").css({'opacity':1});
                var x = $(this).position();
                console.log(order);
                for (let i = 0; i < order.length; i++) {
                    if(dist.localeCompare(order[i].name) == 0){
                        $('.header').html(order[i].name.replace(/[_-]/g, " "));

                        $("#water_and_sanitation").css({'width':(order[i].water_and_sanitation*75)/100 +'px'});
                        $("#shg").css({'width':(order[i].shg*75)/100 +'px'});
                        $("#health").css({'width':(order[i].health*75)/100 +'px'});
                        $("#tourism").css({'width':(order[i].tourism*75)/100 +'px'});
                        $("#education").css({'width':(order[i].education*75)/100 +'px'});
                        $("#security").css({'width':(order[i].security*75)/100 +'px'});
                        $("#agriculture").css({'width':(order[i].agriculture*75)/100 +'px'});
                        $("#finance").css({'width':(order[i].finance*75)/100 +'px'});
                        $("#fisheries").css({'width':(order[i].water_and_sanitation*75)/100 +'px'});
                        $("#animal_husbandry").css({'width':(order[i].animal_husbandry*75)/100 +'px'});
                        $("#food_and_supplies").css({'width':(order[i].food_and_supplies*75)/100 +'px'});
                        $("#handloom_and_handicraft").css({'width':(order[i].handloom_and_handicraft*75)/100 +'px'});
                        $("#energy_and_ict").css({'width':(order[i].energy_and_ict*75)/100 +'px'});
                        $("#loadging_and_boarding").css({'width':(order[i].loadging_and_boarding*75)/100 +'px'});

                    }

                }
                    $("#qtip-hoverbox").css({top: event.clientY, left: event.clientX}).show();
            }, function() {
                $(".glow").css({'opacity':0})
    $("#qtip-hoverbox").hide();
});
    </script>

</body>

</html>
