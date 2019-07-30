<!DOCTYPE HTML>
<html>
    <head>
        <link href="public/css/app.css" rel="stylesheet">
        <link href="public/css/my.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
        <!-- <script type="text/javascript" src="public/district.json"></script> -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
         crossorigin="anonymous">
        </script>
    </head>
    <style>
        .hide{
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
        .s1 input[type='range']::-webkit-slider-thumb{
            background: #4d91ea;
            border: 1px solid #4d91ea;
        }
        .s2 input[type='range']::-webkit-slider-thumb{
            background: #38c172;
            border: 1px solid #38c172;
        }
        .s3 input[type='range']::-webkit-slider-thumb{
            background: #AB47BC;
            border: 1px solid #AB47BC;
        }
        .s4 input[type='range']::-webkit-slider-thumb{
            background: #880E4F;
            border: 1px solid #880E4F;
        }
        .s5 input[type='range']::-webkit-slider-thumb{
            background: #470e88;
            border: 1px solid #470e88;
        }
        .s6 input[type='range']::-webkit-slider-thumb{
            background: #88840e;
            border: 1px solid #88840e;
        }
        .s7 input[type='range']::-webkit-slider-thumb{
            background: #88470e;
            border: 1px solid #88470e;
        }
        .s8 input[type='range']::-webkit-slider-thumb{
            background: #ffff33;
            border: 1px solid #ffff33;
        }
        .s9 input[type='range']::-webkit-slider-thumb{
            background: #ff3333;
            border: 1px solid #ff3333;
        }
        .s10 input[type='range']::-webkit-slider-thumb{
            background: #707070;
            border: 1px solid #707070;
        }
        .s11 input[type='range']::-webkit-slider-thumb{
            background: #509650;
            border: 1px solid #509650;
        }
        .s12 input[type='range']::-webkit-slider-thumb{
            background: #965050;
            border: 1px solid #965050;
        }
        .s13 input[type='range']::-webkit-slider-thumb{
            background: #f4511e;
            border: 1px solid #f4511e;
        }
        .s14 input[type='range']::-webkit-slider-thumb{
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
        .s1 input[type='range']::-moz-range-thumb{
            background: #4d91ea;
            border: 1px solid #4d91ea;
        }
        .s2 input[type='range']::-moz-range-thumb{
            background: #38c172;
            border: 1px solid #38c172;
        }
        .s3 input[type='range']::-moz-range-thumb{
            background: #AB47BC;
            border: 1px solid #AB47BC;
        }
        .s4 input[type='range']::-moz-range-thumb{
            background: #AB47BC;
            border: 1px solid #AB47BC;
        }
        .s5 input[type='range']::-moz-range-thumb{
            background: #470e88;
            border: 1px solid #470e88;
        }
        .s6 input[type='range']::-moz-range-thumb{
            background: #88840e;
            border: 1px solid #88840e;
        }
        .s7 input[type='range']::-moz-range-thumb{
            background: #88470e;
            border: 1px solid #88470e;
        }
        .s8 input[type='range']::-moz-range-thumb{
            background: #ffff33;
            border: 1px solid #ffff33;
        }
        .s9 input[type='range']::-moz-range-thumb{
            background: #ff3333;
            border: 1px solid #ff3333;
        }
        .s10 input[type='range']::-moz-range-thumb{
            background: #707070;
            border: 1px solid #707070;
        }
        .s11 input[type='range']::-moz-range-thumb{
            background: #509650;
            border: 1px solid #509650;
        }
        .s12 input[type='range']::-moz-range-thumb{
            background: #965050;
            border: 1px solid #965050;
        }
        .s13 input[type='range']::-moz-range-thumb{
            background: #AB47BC;
            border: 1px solid #AB47BC;
        }
        .s14 input[type='range']::-moz-range-thumb{
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

        .fill1,.fill2,.fill3,.fill4,.fill5,.fill6,.fill7,.fill8,.fill9,.fill10,.fill11,.fill12,.fill13,.fill14 {
        position: absolute;
        z-index: 50;
        height: 2px;
        width: 0%;
        border-radius: 6px;
        }
        .fill1{
            top: 60%;
            background: linear-gradient(to right, #d6e6fa 0%, #165dbb 100%);
        }
        .fill2{
            top: 60%;
            background: linear-gradient(to right, #ebf9f1 0%, #38c172 100%);
        }
        .fill3{
            top: 60%;
            background: linear-gradient(to right, #f3e5f6 0%, #AB47BC 100%);
        }
        .fill4{
            top: 61%;
            background: linear-gradient(to right, #fbf9fe 0%, #880E4F 100%);
        }
        .fill5{
            top: 60%;
            background: linear-gradient(to right, #fbf9fe 0%, #470e88 100%);
        }
        .fill6{
            top: 60%;
            background: linear-gradient(to right, #fdfce7 0%, #88840e 100%);
        }
        .fill7{
            top: 60%;
            background: linear-gradient(to right, #fdf1e7 0%, #88470e 100%);
        }
        .fill8{
            top: 60%;
            background: linear-gradient(to right, #ffffd0 0%, #ffff33 100%);
        }
        .fill9{
            top: 60%;
            background: linear-gradient(to right, #ffe4e4 0%, #ff3333 100%);
        }
        .fill10{
            top: 60%;
            background: linear-gradient(to right, #f3e5f6 0%, #707070 100%);
        }
        .fill11{
            top: 60%;
            background: linear-gradient(to right, #eff6ef 0%, #509650 100%);
        }
        .fill12{
            top: 60%;
            background: linear-gradient(to right, #f6efef 0%, #965050 100%);
        }
        .fill13{
            top: 60%;
            background: linear-gradient(to right, #fef0ec 0%, #f4511e 100%);
        }
        .fill14{
            top: 61%;
            background: linear-gradient(to right, #e0f2f1 0%, #004d40 100%);
        }

        .count1,.count2,.count3,.count4,.count5,.count6,.count7,.count8,.count9,.count10,.count11,.count12,.count13,.count14 {
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
        font-size: 11px;
        }
        .count1{
            border: 1px solid #4d91ea;
            background: #4d91ea;
        }
        .count2{
            border: 1px solid #38c172;
            background: #38c172;
        }
        .count3{
            border: 1px solid #AB47BC;
            background: #AB47BC;
        }
        .count4{
            border: 1px solid #880E4F;
            background: #880E4F;
        }
        .count5{
            border: 1px solid #470e88;
            background: #470e88;
        }
        .count6{
            border: 1px solid #88840e;
            background: #88840e;
        }
        .count7{
            border: 1px solid #88470e;
            background: #88470e;
        }
        .count8{
            border: 1px solid #ffff33;
            background: #ffff33;
        }
        .count9{
            border: 1px solid #ff3333;
            background: #ff3333;
        }
        .count10{
            border: 1px solid #707070;
            background: #707070;
        }
        .count11{
            border: 1px solid #509650;
            background: #509650;
        }
        .count12{
            border: 1px solid #965050;
            background: #965050;
        }
        .count13{
            border: 1px solid #AB47BC;
            background: #f4511e;
        }
        .count14{
            border: 1px solid #004d40;
            background: #004d40;
        }

        div[title] {
            color: red;
        }
        .list-group-item {
            padding: 0.25rem 1.25rem;
        }
.viz{
    height: 550px;
    width: 80px;
}
.scale{
    /* -moz-transform: scale(1.4);
    -webkit-transform: scale(1.4); */
    transform: scale(0.63);
    transform-origin: 100% 100%;
    transform-box: fill-box;
}
.scalee{
    /* -moz-transform: scale(1.4);
    -webkit-transform: scale(1.4); */
    transform: scale(0.45);
    transform-origin: 0% 0%;
    transform-box: fill-box;
}
.water_and_sanitation{
    fill:#3490dc;
}
.hov{
    cursor: pointer;
}
.shg{
    fill:#AB47BC;
}
.agriculture{
    fill:#88840e;
}
.finance{
    fill:#88470e;
}
.food_and_supplies{
    fill:#880E4F;
}
.energy_and_ict{
    fill:#ffff33;
}
.healthcare{
    fill:#38c172;
}
.animal_husbandry{
    fill:#ff3333;
}
.fisheries{
    fill:#707070;
}
.lodging_and_boarding{
    fill:#509650;
}
.tourism{
    fill:#965050;
}
.handloom_and_handicraft{
    fill:#470e88;
}
.education{
    fill:#f4511e;
}
.security{
    fill:#004d40;
}
/* .st2{font-family:'ArialMT';} */
.container-fluid {
    background-color: #e3e9f3;
    background-image: -webkit-linear-gradient(#e3e9f3,#e4e2d4);
    background-image: linear-gradient(#e3e9f3,#e4e2d4);
    border-bottom: 1px solid #b3bccd;
    padding-bottom: 1%;
    }
    .st0{
        cursor: pointer;
    }
    </style>
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
                <div class="col-lg-9" style="margin:0;padding:0;">
                        <span style="position:absolute;font-size:0.80rem; opacity:0.7;  top:9%;"><strong>10.0</strong>-</span>
                        <span style="position:absolute;font-size:0.7rem; opacity:0.5; opacity:0.5; top:17%;">9.0-</span>
                        <span style="position:absolute;font-size:0.7rem; opacity:0.5;  top:25%;">8.0-</span>
                        <span style="position:absolute;font-size:0.7rem; opacity:0.5;  top:33%;">7.0-</span>
                        <span style="position:absolute;font-size:0.7rem; opacity:0.5;  top:41%;">6.0-</span>
                        <span style="position:absolute;font-size:0.80rem; opacity:0.7;  top:49%;"><strong>5.0</strong></span>
                        <span style="position:absolute;font-size:0.7rem; opacity:0.5;  top:57%;">4.0-</span>
                        <span style="position:absolute;font-size:0.7rem; opacity:0.5;  top:65%;">3.0-</span>
                        <span style="position:absolute;font-size:0.7rem; opacity:0.5;  top:73%;">2.0-</span>
                        <span style="position:absolute;font-size:0.7rem; opacity:0.5;  top:81%;">1.0-</span>
                        <span style="position:absolute;font-size:0.80rem; opacity:0.7;  top:89%;"><strong>0.0-</strong></span>
                    <div style="display:none;" class="d-flex flex-fill flex-nowrap">
                        <div style="transition: all 0.5s;" class="Papumpare trans">
                            <?xml version="1.0" encoding="utf-8"?>
                            <!-- Generator: Adobe Illustrator 23.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                            <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 80 500" style="enable-background:new 0 0 80 500;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:#FFFFFF;cursor: pointer;
                                        stroke:#000000;stroke-width:0.25;stroke-miterlimit:10;}
                                    .st1{fill:none;}

                                    .st3{font-size:12.8068px;}
                                    .st4{fill:#F08080;}
                                </style>
                                <path style="transition: all 3s;"  class="st0 Papumpare_txt" d="M40.23,44.17c0,152.46,0,304.92,0,457.38"/>
                                <rect x="31.12" y="440.14" class="st1" width="8.53" height="41.42"/>
                                <text transform="matrix(4.489660e-11 -1 1 4.489660e-11 34.7271 481.459)" class="st2 st3">Papumpare</text>
                                <g style="transition: all 4s;" class="Papumpare_hov">
                                    <path class="water_and_sanitation"  d="M40.23,43.92c-4.89-7.17-9.67-14.45-14.57-21.73
                                        c-1.25-4.21-2.5-8.42-3.76-12.63c2.84,3.3,5.69,6.71,8.65,10.01C33.74,27.76,37.04,35.84,40.23,43.92z"/>
                                    <path class="shg"  d="M40.46,43.92c-0.57-8.65-1.14-17.41-1.71-26.06C39.77,13.53,40.8,9.32,41.93,5
                                        c0.8,4.32,1.59,8.65,2.39,12.97C42.96,26.62,41.71,35.27,40.46,43.92z"/>
                                    <path class="security"  d="M40.23,44.03c3.76-7.85,7.51-15.7,11.27-23.56c3.07-3.19,6.03-6.37,8.99-9.67
                                        c-1.48,4.21-2.84,8.31-4.32,12.52C50.92,30.26,45.58,37.09,40.23,44.03z"/>
                                    <path class="education"  d="M40.23,44.03c6.83-5.46,13.54-10.92,20.37-16.39c4.1-1.59,8.19-3.19,12.29-4.78
                                        c-3.07,3.19-6.26,6.26-9.33,9.44C55.82,36.18,48.08,40.16,40.23,44.03z"/>
                                    <path class="agriculture"  d="M40.23,44.03c-7.97-3.53-15.93-7.06-23.9-10.7c-3.3-2.96-6.6-5.8-9.9-8.76
                                        c4.21,1.37,8.42,2.62,12.63,3.98C26.12,33.79,33.17,38.91,40.23,44.03z"/>
                                    <path class="handloom_and_handicraft"  d="M40.23,44.03c8.42-2.28,16.84-4.44,25.26-6.71
                                        c4.44,0.23,8.76,0.34,13.2,0.57c-4.1,1.59-8.19,3.19-12.29,4.89C57.64,43.23,48.99,43.69,40.23,44.03z"/>
                                    <path class="tourism"  d="M40.23,44.03c8.53,1.48,17.18,2.96,25.72,4.44c3.87,2.05,7.85,3.98,11.72,6.03
                                        c-4.44-0.23-8.76-0.46-13.2-0.8C56.39,50.52,48.31,47.33,40.23,44.03z"/>
                                    <path class="lodging_and_boarding"  d="M40.23,44.03c7.28,4.78,14.68,9.44,21.96,14.11
                                        c2.84,3.41,5.58,6.83,8.42,10.13c-3.98-1.93-7.97-3.87-11.83-5.8C52.63,56.43,46.37,50.18,40.23,44.03z"/>
                                    <path class="fisheries"  d="M40.23,43.92c4.32,7.62,8.65,15.13,12.86,22.76C54,71,54.91,75.32,55.82,79.53
                                        c-2.62-3.53-5.23-7.17-7.74-10.7C45.46,60.53,42.84,52.22,40.23,43.92z"/>
                                    <path class="animal_husbandry"  d="M40.23,43.92c0.91,8.65,1.82,17.3,2.73,25.94c-0.91,4.32-1.71,8.65-2.62,12.97
                                        c-0.91-4.32-1.93-8.65-2.84-12.86C38.41,61.21,39.32,52.57,40.23,43.92z"/>
                                    <path class="healthcare"  d="M40.23,43.92c-2.62,8.31-5.35,16.61-7.97,24.92c-2.5,3.64-5.12,7.17-7.62,10.81
                                        c0.91-4.32,1.71-8.65,2.62-12.97C31.58,59.05,35.9,51.43,40.23,43.92z"/>
                                    <path class="finance"  d="M40.23,44.14c-8.65,0.57-17.41,1.02-26.06,1.59c-4.32-1.02-8.53-2.16-12.86-3.19
                                        c4.32-0.8,8.65-1.48,12.97-2.28C23.04,41.53,31.58,42.78,40.23,44.14z"/>
                                    <path class="food_and_supplies"  d="M40.34,44.03c-7.74,3.87-15.59,7.85-23.33,11.72
                                        c-4.32,0.68-8.65,1.37-13.09,2.05c3.64-2.39,7.4-4.89,11.04-7.28C23.39,48.47,31.92,46.31,40.34,44.03z"/>
                                    <path class="energy_and_ict"  d="M40.34,43.92c-5.58,6.71-11.15,13.43-16.73,20.03
                                        c-3.76,2.39-7.4,4.78-11.15,7.17c2.39-3.64,4.89-7.4,7.28-11.04C26.57,54.61,33.4,49.27,40.34,43.92z"/>
                                </g>
                            </svg>


                        </div>


                        <div style="transition: all 0.5s;" class="West_Kameng trans">

                            <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 80 500" style="enable-background:new 0 0 80 500;" xml:space="preserve">
                           <style type="text/css">
                               .st0{fill:#FFFFFF;cursor: pointer;stroke:#000000;stroke-width:0.25;stroke-miterlimit:10;}
                               .st1{fill:none;}

                               .st3{font-size:12.8068px;}
                               .st4{fill:#F08080;}
                           </style>
                           <path style="transition: all 3s;" class="st0 West_Kameng_txt" d="M40.23,44.17c0,152.46,0,304.92,0,457.38"/>
                           <rect x="31.12" y="440.14" class="st1" width="8.53" height="41.42"/>
                           <text transform="matrix(4.489660e-11 -1 1 4.489660e-11 34.7271 481.459)" class="st2 st3">West Kameng</text>
                           <g style="transition: all 4s;" class="West_Kameng_hov">
                               <path class="water_and_sanitation"  d="M40.23,43.92c-4.89-7.17-9.67-14.45-14.57-21.73
                                   c-1.25-4.21-2.5-8.42-3.76-12.63c2.84,3.3,5.69,6.71,8.65,10.01C33.74,27.76,37.04,35.84,40.23,43.92z"/>
                               <path class="shg"  d="M40.46,43.92c-0.57-8.65-1.14-17.41-1.71-26.06C39.77,13.53,40.8,9.32,41.93,5
                                   c0.8,4.32,1.59,8.65,2.39,12.97C42.96,26.62,41.71,35.27,40.46,43.92z"/>
                               <path class="security"  d="M40.23,44.03c3.76-7.85,7.51-15.7,11.27-23.56c3.07-3.19,6.03-6.37,8.99-9.67
                                   c-1.48,4.21-2.84,8.31-4.32,12.52C50.92,30.26,45.58,37.09,40.23,44.03z"/>
                               <path class="education"  d="M40.23,44.03c6.83-5.46,13.54-10.92,20.37-16.39c4.1-1.59,8.19-3.19,12.29-4.78
                                   c-3.07,3.19-6.26,6.26-9.33,9.44C55.82,36.18,48.08,40.16,40.23,44.03z"/>
                               <path class="agriculture"  d="M40.23,44.03c-7.97-3.53-15.93-7.06-23.9-10.7c-3.3-2.96-6.6-5.8-9.9-8.76
                                   c4.21,1.37,8.42,2.62,12.63,3.98C26.12,33.79,33.17,38.91,40.23,44.03z"/>
                               <path class="handloom_and_handicraft"  d="M40.23,44.03c8.42-2.28,16.84-4.44,25.26-6.71
                                   c4.44,0.23,8.76,0.34,13.2,0.57c-4.1,1.59-8.19,3.19-12.29,4.89C57.64,43.23,48.99,43.69,40.23,44.03z"/>
                               <path class="tourism"  d="M40.23,44.03c8.53,1.48,17.18,2.96,25.72,4.44c3.87,2.05,7.85,3.98,11.72,6.03
                                   c-4.44-0.23-8.76-0.46-13.2-0.8C56.39,50.52,48.31,47.33,40.23,44.03z"/>
                               <path class="lodging_and_boarding"  d="M40.23,44.03c7.28,4.78,14.68,9.44,21.96,14.11
                                   c2.84,3.41,5.58,6.83,8.42,10.13c-3.98-1.93-7.97-3.87-11.83-5.8C52.63,56.43,46.37,50.18,40.23,44.03z"/>
                               <path class="fisheries"  d="M40.23,43.92c4.32,7.62,8.65,15.13,12.86,22.76C54,71,54.91,75.32,55.82,79.53
                                   c-2.62-3.53-5.23-7.17-7.74-10.7C45.46,60.53,42.84,52.22,40.23,43.92z"/>
                               <path class="animal_husbandry"  d="M40.23,43.92c0.91,8.65,1.82,17.3,2.73,25.94c-0.91,4.32-1.71,8.65-2.62,12.97
                                   c-0.91-4.32-1.93-8.65-2.84-12.86C38.41,61.21,39.32,52.57,40.23,43.92z"/>
                               <path class="healthcare"  d="M40.23,43.92c-2.62,8.31-5.35,16.61-7.97,24.92c-2.5,3.64-5.12,7.17-7.62,10.81
                                   c0.91-4.32,1.71-8.65,2.62-12.97C31.58,59.05,35.9,51.43,40.23,43.92z"/>
                               <path class="finance"  d="M40.23,44.14c-8.65,0.57-17.41,1.02-26.06,1.59c-4.32-1.02-8.53-2.16-12.86-3.19
                                   c4.32-0.8,8.65-1.48,12.97-2.28C23.04,41.53,31.58,42.78,40.23,44.14z"/>
                               <path class="food_and_supplies"  d="M40.34,44.03c-7.74,3.87-15.59,7.85-23.33,11.72
                                   c-4.32,0.68-8.65,1.37-13.09,2.05c3.64-2.39,7.4-4.89,11.04-7.28C23.39,48.47,31.92,46.31,40.34,44.03z"/>
                               <path class="energy_and_ict"  d="M40.34,43.92c-5.58,6.71-11.15,13.43-16.73,20.03
                                   c-3.76,2.39-7.4,4.78-11.15,7.17c2.39-3.64,4.89-7.4,7.28-11.04C26.57,54.61,33.4,49.27,40.34,43.92z"/>
                           </g>
                       </svg>


                        </div>


                        <div  class="East_Siang trans">

                                <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 80 500" style="enable-background:new 0 0 80 500;" xml:space="preserve">
                               <style type="text/css">
                                   .st0{fill:#FFFFFF;cursor: pointer;stroke:#000000;stroke-width:0.25;stroke-miterlimit:10;}
                                   .st1{fill:none;}

                                   .st3{font-size:12.8068px;}
                                   .st4{fill:#F08080;}
                               </style>
                               <path class="st0 East_Siang_txt" d="M40.23,44.17c0,152.46,0,304.92,0,457.38"/>
                               <rect x="31.12" y="440.14" class="st1" width="8.53" height="41.42"/>
                               <text transform="matrix(4.489660e-11 -1 1 4.489660e-11 34.7271 481.459)" class="st2 st3">
                                    East Siang</text>
                               <g class="East_Siang_hov">
                                   <path class="water_and_sanitation"  d="M40.23,43.92c-4.89-7.17-9.67-14.45-14.57-21.73
                                       c-1.25-4.21-2.5-8.42-3.76-12.63c2.84,3.3,5.69,6.71,8.65,10.01C33.74,27.76,37.04,35.84,40.23,43.92z"/>
                                   <path class="shg"  d="M40.46,43.92c-0.57-8.65-1.14-17.41-1.71-26.06C39.77,13.53,40.8,9.32,41.93,5
                                       c0.8,4.32,1.59,8.65,2.39,12.97C42.96,26.62,41.71,35.27,40.46,43.92z"/>
                                   <path class="security"  d="M40.23,44.03c3.76-7.85,7.51-15.7,11.27-23.56c3.07-3.19,6.03-6.37,8.99-9.67
                                       c-1.48,4.21-2.84,8.31-4.32,12.52C50.92,30.26,45.58,37.09,40.23,44.03z"/>
                                   <path class="education"  d="M40.23,44.03c6.83-5.46,13.54-10.92,20.37-16.39c4.1-1.59,8.19-3.19,12.29-4.78
                                       c-3.07,3.19-6.26,6.26-9.33,9.44C55.82,36.18,48.08,40.16,40.23,44.03z"/>
                                   <path class="agriculture"  d="M40.23,44.03c-7.97-3.53-15.93-7.06-23.9-10.7c-3.3-2.96-6.6-5.8-9.9-8.76
                                       c4.21,1.37,8.42,2.62,12.63,3.98C26.12,33.79,33.17,38.91,40.23,44.03z"/>
                                   <path class="handloom_and_handicraft"  d="M40.23,44.03c8.42-2.28,16.84-4.44,25.26-6.71
                                       c4.44,0.23,8.76,0.34,13.2,0.57c-4.1,1.59-8.19,3.19-12.29,4.89C57.64,43.23,48.99,43.69,40.23,44.03z"/>
                                   <path class="tourism"  d="M40.23,44.03c8.53,1.48,17.18,2.96,25.72,4.44c3.87,2.05,7.85,3.98,11.72,6.03
                                       c-4.44-0.23-8.76-0.46-13.2-0.8C56.39,50.52,48.31,47.33,40.23,44.03z"/>
                                   <path class="lodging_and_boarding"  d="M40.23,44.03c7.28,4.78,14.68,9.44,21.96,14.11
                                       c2.84,3.41,5.58,6.83,8.42,10.13c-3.98-1.93-7.97-3.87-11.83-5.8C52.63,56.43,46.37,50.18,40.23,44.03z"/>
                                   <path class="fisheries"  d="M40.23,43.92c4.32,7.62,8.65,15.13,12.86,22.76C54,71,54.91,75.32,55.82,79.53
                                       c-2.62-3.53-5.23-7.17-7.74-10.7C45.46,60.53,42.84,52.22,40.23,43.92z"/>
                                   <path class="animal_husbandry"  d="M40.23,43.92c0.91,8.65,1.82,17.3,2.73,25.94c-0.91,4.32-1.71,8.65-2.62,12.97
                                       c-0.91-4.32-1.93-8.65-2.84-12.86C38.41,61.21,39.32,52.57,40.23,43.92z"/>
                                   <path class="healthcare"  d="M40.23,43.92c-2.62,8.31-5.35,16.61-7.97,24.92c-2.5,3.64-5.12,7.17-7.62,10.81
                                       c0.91-4.32,1.71-8.65,2.62-12.97C31.58,59.05,35.9,51.43,40.23,43.92z"/>
                                   <path class="finance"  d="M40.23,44.14c-8.65,0.57-17.41,1.02-26.06,1.59c-4.32-1.02-8.53-2.16-12.86-3.19
                                       c4.32-0.8,8.65-1.48,12.97-2.28C23.04,41.53,31.58,42.78,40.23,44.14z"/>
                                   <path class="food_and_supplies"  d="M40.34,44.03c-7.74,3.87-15.59,7.85-23.33,11.72
                                       c-4.32,0.68-8.65,1.37-13.09,2.05c3.64-2.39,7.4-4.89,11.04-7.28C23.39,48.47,31.92,46.31,40.34,44.03z"/>
                                   <path class="energy_and_ict"  d="M40.34,43.92c-5.58,6.71-11.15,13.43-16.73,20.03
                                       c-3.76,2.39-7.4,4.78-11.15,7.17c2.39-3.64,4.89-7.4,7.28-11.04C26.57,54.61,33.4,49.27,40.34,43.92z"/>
                               </g>
                           </svg>


                        </div>


                        <div  class="Lower_Subansiri trans">

                                <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 80 500" style="enable-background:new 0 0 80 500;" xml:space="preserve">
                               <style type="text/css">
                                   .st0{fill:#FFFFFF;cursor: pointer;stroke:#000000;stroke-width:0.25;stroke-miterlimit:10;}
                                   .st1{fill:none;}

                                   .st3{font-size:12.8068px;}
                                   .st4{fill:#F08080;}
                               </style>
                               <path class="st0 Lower_Subansiri_txt" d="M40.23,44.17c0,152.46,0,304.92,0,457.38"/>
                               <rect x="31.12" y="440.14" class="st1" width="8.53" height="41.42"/>
                               <text transform="matrix(4.489660e-11 -1 1 4.489660e-11 34.7271 481.459)" class="st2 st3">
                                    Lower Subansiri</text>
                               <g class="Lower_Subansiri_hov">
                                   <path class="water_and_sanitation"  d="M40.23,43.92c-4.89-7.17-9.67-14.45-14.57-21.73
                                       c-1.25-4.21-2.5-8.42-3.76-12.63c2.84,3.3,5.69,6.71,8.65,10.01C33.74,27.76,37.04,35.84,40.23,43.92z"/>
                                   <path class="shg"  d="M40.46,43.92c-0.57-8.65-1.14-17.41-1.71-26.06C39.77,13.53,40.8,9.32,41.93,5
                                       c0.8,4.32,1.59,8.65,2.39,12.97C42.96,26.62,41.71,35.27,40.46,43.92z"/>
                                   <path class="security"  d="M40.23,44.03c3.76-7.85,7.51-15.7,11.27-23.56c3.07-3.19,6.03-6.37,8.99-9.67
                                       c-1.48,4.21-2.84,8.31-4.32,12.52C50.92,30.26,45.58,37.09,40.23,44.03z"/>
                                   <path class="education"  d="M40.23,44.03c6.83-5.46,13.54-10.92,20.37-16.39c4.1-1.59,8.19-3.19,12.29-4.78
                                       c-3.07,3.19-6.26,6.26-9.33,9.44C55.82,36.18,48.08,40.16,40.23,44.03z"/>
                                   <path class="agriculture"  d="M40.23,44.03c-7.97-3.53-15.93-7.06-23.9-10.7c-3.3-2.96-6.6-5.8-9.9-8.76
                                       c4.21,1.37,8.42,2.62,12.63,3.98C26.12,33.79,33.17,38.91,40.23,44.03z"/>
                                   <path class="handloom_and_handicraft"  d="M40.23,44.03c8.42-2.28,16.84-4.44,25.26-6.71
                                       c4.44,0.23,8.76,0.34,13.2,0.57c-4.1,1.59-8.19,3.19-12.29,4.89C57.64,43.23,48.99,43.69,40.23,44.03z"/>
                                   <path class="tourism"  d="M40.23,44.03c8.53,1.48,17.18,2.96,25.72,4.44c3.87,2.05,7.85,3.98,11.72,6.03
                                       c-4.44-0.23-8.76-0.46-13.2-0.8C56.39,50.52,48.31,47.33,40.23,44.03z"/>
                                   <path class="lodging_and_boarding"  d="M40.23,44.03c7.28,4.78,14.68,9.44,21.96,14.11
                                       c2.84,3.41,5.58,6.83,8.42,10.13c-3.98-1.93-7.97-3.87-11.83-5.8C52.63,56.43,46.37,50.18,40.23,44.03z"/>
                                   <path class="fisheries"  d="M40.23,43.92c4.32,7.62,8.65,15.13,12.86,22.76C54,71,54.91,75.32,55.82,79.53
                                       c-2.62-3.53-5.23-7.17-7.74-10.7C45.46,60.53,42.84,52.22,40.23,43.92z"/>
                                   <path class="animal_husbandry"  d="M40.23,43.92c0.91,8.65,1.82,17.3,2.73,25.94c-0.91,4.32-1.71,8.65-2.62,12.97
                                       c-0.91-4.32-1.93-8.65-2.84-12.86C38.41,61.21,39.32,52.57,40.23,43.92z"/>
                                   <path class="healthcare"  d="M40.23,43.92c-2.62,8.31-5.35,16.61-7.97,24.92c-2.5,3.64-5.12,7.17-7.62,10.81
                                       c0.91-4.32,1.71-8.65,2.62-12.97C31.58,59.05,35.9,51.43,40.23,43.92z"/>
                                   <path class="finance"  d="M40.23,44.14c-8.65,0.57-17.41,1.02-26.06,1.59c-4.32-1.02-8.53-2.16-12.86-3.19
                                       c4.32-0.8,8.65-1.48,12.97-2.28C23.04,41.53,31.58,42.78,40.23,44.14z"/>
                                   <path class="food_and_supplies"  d="M40.34,44.03c-7.74,3.87-15.59,7.85-23.33,11.72
                                       c-4.32,0.68-8.65,1.37-13.09,2.05c3.64-2.39,7.4-4.89,11.04-7.28C23.39,48.47,31.92,46.31,40.34,44.03z"/>
                                   <path class="energy_and_ict"  d="M40.34,43.92c-5.58,6.71-11.15,13.43-16.73,20.03
                                       c-3.76,2.39-7.4,4.78-11.15,7.17c2.39-3.64,4.89-7.4,7.28-11.04C26.57,54.61,33.4,49.27,40.34,43.92z"/>
                               </g>
                           </svg>


                        </div>


                        <div  class="Changlang trans">

                                <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 80 500" style="enable-background:new 0 0 80 500;" xml:space="preserve">
                               <style type="text/css">
                                   .st0{fill:#FFFFFF;cursor: pointer;stroke:#000000;stroke-width:0.25;stroke-miterlimit:10;}
                                   .st1{fill:none;}

                                   .st3{font-size:12.8068px;}
                                   .st4{fill:#F08080;}
                               </style>
                               <path class="st0 Changlang_txt" d="M40.23,44.17c0,152.46,0,304.92,0,457.38"/>
                               <rect x="31.12" y="440.14" class="st1" width="8.53" height="41.42"/>
                               <text transform="matrix(4.489660e-11 -1 1 4.489660e-11 34.7271 481.459)" class="st2 st3">
                                    Changlang</text>
                               <g class="Changlang_hov">
                                   <path class="water_and_sanitation"  d="M40.23,43.92c-4.89-7.17-9.67-14.45-14.57-21.73
                                       c-1.25-4.21-2.5-8.42-3.76-12.63c2.84,3.3,5.69,6.71,8.65,10.01C33.74,27.76,37.04,35.84,40.23,43.92z"/>
                                   <path class="shg"  d="M40.46,43.92c-0.57-8.65-1.14-17.41-1.71-26.06C39.77,13.53,40.8,9.32,41.93,5
                                       c0.8,4.32,1.59,8.65,2.39,12.97C42.96,26.62,41.71,35.27,40.46,43.92z"/>
                                   <path class="security"  d="M40.23,44.03c3.76-7.85,7.51-15.7,11.27-23.56c3.07-3.19,6.03-6.37,8.99-9.67
                                       c-1.48,4.21-2.84,8.31-4.32,12.52C50.92,30.26,45.58,37.09,40.23,44.03z"/>
                                   <path class="education"  d="M40.23,44.03c6.83-5.46,13.54-10.92,20.37-16.39c4.1-1.59,8.19-3.19,12.29-4.78
                                       c-3.07,3.19-6.26,6.26-9.33,9.44C55.82,36.18,48.08,40.16,40.23,44.03z"/>
                                   <path class="agriculture"  d="M40.23,44.03c-7.97-3.53-15.93-7.06-23.9-10.7c-3.3-2.96-6.6-5.8-9.9-8.76
                                       c4.21,1.37,8.42,2.62,12.63,3.98C26.12,33.79,33.17,38.91,40.23,44.03z"/>
                                   <path class="handloom_and_handicraft"  d="M40.23,44.03c8.42-2.28,16.84-4.44,25.26-6.71
                                       c4.44,0.23,8.76,0.34,13.2,0.57c-4.1,1.59-8.19,3.19-12.29,4.89C57.64,43.23,48.99,43.69,40.23,44.03z"/>
                                   <path class="tourism"  d="M40.23,44.03c8.53,1.48,17.18,2.96,25.72,4.44c3.87,2.05,7.85,3.98,11.72,6.03
                                       c-4.44-0.23-8.76-0.46-13.2-0.8C56.39,50.52,48.31,47.33,40.23,44.03z"/>
                                   <path class="lodging_and_boarding"  d="M40.23,44.03c7.28,4.78,14.68,9.44,21.96,14.11
                                       c2.84,3.41,5.58,6.83,8.42,10.13c-3.98-1.93-7.97-3.87-11.83-5.8C52.63,56.43,46.37,50.18,40.23,44.03z"/>
                                   <path class="fisheries"  d="M40.23,43.92c4.32,7.62,8.65,15.13,12.86,22.76C54,71,54.91,75.32,55.82,79.53
                                       c-2.62-3.53-5.23-7.17-7.74-10.7C45.46,60.53,42.84,52.22,40.23,43.92z"/>
                                   <path class="animal_husbandry"  d="M40.23,43.92c0.91,8.65,1.82,17.3,2.73,25.94c-0.91,4.32-1.71,8.65-2.62,12.97
                                       c-0.91-4.32-1.93-8.65-2.84-12.86C38.41,61.21,39.32,52.57,40.23,43.92z"/>
                                   <path class="healthcare"  d="M40.23,43.92c-2.62,8.31-5.35,16.61-7.97,24.92c-2.5,3.64-5.12,7.17-7.62,10.81
                                       c0.91-4.32,1.71-8.65,2.62-12.97C31.58,59.05,35.9,51.43,40.23,43.92z"/>
                                   <path class="finance"  d="M40.23,44.14c-8.65,0.57-17.41,1.02-26.06,1.59c-4.32-1.02-8.53-2.16-12.86-3.19
                                       c4.32-0.8,8.65-1.48,12.97-2.28C23.04,41.53,31.58,42.78,40.23,44.14z"/>
                                   <path class="food_and_supplies"  d="M40.34,44.03c-7.74,3.87-15.59,7.85-23.33,11.72
                                       c-4.32,0.68-8.65,1.37-13.09,2.05c3.64-2.39,7.4-4.89,11.04-7.28C23.39,48.47,31.92,46.31,40.34,44.03z"/>
                                   <path class="energy_and_ict"  d="M40.34,43.92c-5.58,6.71-11.15,13.43-16.73,20.03
                                       c-3.76,2.39-7.4,4.78-11.15,7.17c2.39-3.64,4.89-7.4,7.28-11.04C26.57,54.61,33.4,49.27,40.34,43.92z"/>
                               </g>
                           </svg>


                        </div>


                        <div  class="Lohit trans">

                                <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 80 500" style="enable-background:new 0 0 80 500;" xml:space="preserve">
                               <style type="text/css">
                                   .st0{fill:#FFFFFF;cursor: pointer;stroke:#000000;stroke-width:0.25;stroke-miterlimit:10;}
                                   .st1{fill:none;}

                                   .st3{font-size:12.8068px;}
                                   .st4{fill:#F08080;}
                               </style>
                               <path class="st0 Lohit_txt" d="M40.23,44.17c0,152.46,0,304.92,0,457.38"/>
                               <rect x="31.12" y="440.14" class="st1" width="8.53" height="41.42"/>
                               <text transform="matrix(4.489660e-11 -1 1 4.489660e-11 34.7271 481.459)" class="st2 st3">
                                    Lohit</text>
                               <g class="Lohit_hov">
                                   <path class="water_and_sanitation"  d="M40.23,43.92c-4.89-7.17-9.67-14.45-14.57-21.73
                                       c-1.25-4.21-2.5-8.42-3.76-12.63c2.84,3.3,5.69,6.71,8.65,10.01C33.74,27.76,37.04,35.84,40.23,43.92z"/>
                                   <path class="shg"  d="M40.46,43.92c-0.57-8.65-1.14-17.41-1.71-26.06C39.77,13.53,40.8,9.32,41.93,5
                                       c0.8,4.32,1.59,8.65,2.39,12.97C42.96,26.62,41.71,35.27,40.46,43.92z"/>
                                   <path class="security"  d="M40.23,44.03c3.76-7.85,7.51-15.7,11.27-23.56c3.07-3.19,6.03-6.37,8.99-9.67
                                       c-1.48,4.21-2.84,8.31-4.32,12.52C50.92,30.26,45.58,37.09,40.23,44.03z"/>
                                   <path class="education"  d="M40.23,44.03c6.83-5.46,13.54-10.92,20.37-16.39c4.1-1.59,8.19-3.19,12.29-4.78
                                       c-3.07,3.19-6.26,6.26-9.33,9.44C55.82,36.18,48.08,40.16,40.23,44.03z"/>
                                   <path class="agriculture"  d="M40.23,44.03c-7.97-3.53-15.93-7.06-23.9-10.7c-3.3-2.96-6.6-5.8-9.9-8.76
                                       c4.21,1.37,8.42,2.62,12.63,3.98C26.12,33.79,33.17,38.91,40.23,44.03z"/>
                                   <path class="handloom_and_handicraft"  d="M40.23,44.03c8.42-2.28,16.84-4.44,25.26-6.71
                                       c4.44,0.23,8.76,0.34,13.2,0.57c-4.1,1.59-8.19,3.19-12.29,4.89C57.64,43.23,48.99,43.69,40.23,44.03z"/>
                                   <path class="tourism"  d="M40.23,44.03c8.53,1.48,17.18,2.96,25.72,4.44c3.87,2.05,7.85,3.98,11.72,6.03
                                       c-4.44-0.23-8.76-0.46-13.2-0.8C56.39,50.52,48.31,47.33,40.23,44.03z"/>
                                   <path class="lodging_and_boarding"  d="M40.23,44.03c7.28,4.78,14.68,9.44,21.96,14.11
                                       c2.84,3.41,5.58,6.83,8.42,10.13c-3.98-1.93-7.97-3.87-11.83-5.8C52.63,56.43,46.37,50.18,40.23,44.03z"/>
                                   <path class="fisheries"  d="M40.23,43.92c4.32,7.62,8.65,15.13,12.86,22.76C54,71,54.91,75.32,55.82,79.53
                                       c-2.62-3.53-5.23-7.17-7.74-10.7C45.46,60.53,42.84,52.22,40.23,43.92z"/>
                                   <path class="animal_husbandry"  d="M40.23,43.92c0.91,8.65,1.82,17.3,2.73,25.94c-0.91,4.32-1.71,8.65-2.62,12.97
                                       c-0.91-4.32-1.93-8.65-2.84-12.86C38.41,61.21,39.32,52.57,40.23,43.92z"/>
                                   <path class="healthcare"  d="M40.23,43.92c-2.62,8.31-5.35,16.61-7.97,24.92c-2.5,3.64-5.12,7.17-7.62,10.81
                                       c0.91-4.32,1.71-8.65,2.62-12.97C31.58,59.05,35.9,51.43,40.23,43.92z"/>
                                   <path class="finance"  d="M40.23,44.14c-8.65,0.57-17.41,1.02-26.06,1.59c-4.32-1.02-8.53-2.16-12.86-3.19
                                       c4.32-0.8,8.65-1.48,12.97-2.28C23.04,41.53,31.58,42.78,40.23,44.14z"/>
                                   <path class="food_and_supplies"  d="M40.34,44.03c-7.74,3.87-15.59,7.85-23.33,11.72
                                       c-4.32,0.68-8.65,1.37-13.09,2.05c3.64-2.39,7.4-4.89,11.04-7.28C23.39,48.47,31.92,46.31,40.34,44.03z"/>
                                   <path class="energy_and_ict"  d="M40.34,43.92c-5.58,6.71-11.15,13.43-16.73,20.03
                                       c-3.76,2.39-7.4,4.78-11.15,7.17c2.39-3.64,4.89-7.4,7.28-11.04C26.57,54.61,33.4,49.27,40.34,43.92z"/>
                               </g>
                           </svg>


                        </div>


                        <div  class="Namsai trans">

                                <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 80 500" style="enable-background:new 0 0 80 500;" xml:space="preserve">
                               <style type="text/css">
                                   .st0{fill:#FFFFFF;cursor: pointer;stroke:#000000;stroke-width:0.25;stroke-miterlimit:10;}
                                   .st1{fill:none;}

                                   .st3{font-size:12.8068px;}
                                   .st4{fill:#F08080;}
                               </style>
                               <path class="st0 Namsai_txt" d="M40.23,44.17c0,152.46,0,304.92,0,457.38"/>
                               <rect x="31.12" y="440.14" class="st1" width="8.53" height="41.42"/>
                               <text transform="matrix(4.489660e-11 -1 1 4.489660e-11 34.7271 481.459)" class="st2 st3">
                                    Namsai</text>
                               <g class="Namsai_hov">
                                   <path class="water_and_sanitation"  d="M40.23,43.92c-4.89-7.17-9.67-14.45-14.57-21.73
                                       c-1.25-4.21-2.5-8.42-3.76-12.63c2.84,3.3,5.69,6.71,8.65,10.01C33.74,27.76,37.04,35.84,40.23,43.92z"/>
                                   <path class="shg"  d="M40.46,43.92c-0.57-8.65-1.14-17.41-1.71-26.06C39.77,13.53,40.8,9.32,41.93,5
                                       c0.8,4.32,1.59,8.65,2.39,12.97C42.96,26.62,41.71,35.27,40.46,43.92z"/>
                                   <path class="security"  d="M40.23,44.03c3.76-7.85,7.51-15.7,11.27-23.56c3.07-3.19,6.03-6.37,8.99-9.67
                                       c-1.48,4.21-2.84,8.31-4.32,12.52C50.92,30.26,45.58,37.09,40.23,44.03z"/>
                                   <path class="education"  d="M40.23,44.03c6.83-5.46,13.54-10.92,20.37-16.39c4.1-1.59,8.19-3.19,12.29-4.78
                                       c-3.07,3.19-6.26,6.26-9.33,9.44C55.82,36.18,48.08,40.16,40.23,44.03z"/>
                                   <path class="agriculture"  d="M40.23,44.03c-7.97-3.53-15.93-7.06-23.9-10.7c-3.3-2.96-6.6-5.8-9.9-8.76
                                       c4.21,1.37,8.42,2.62,12.63,3.98C26.12,33.79,33.17,38.91,40.23,44.03z"/>
                                   <path class="handloom_and_handicraft"  d="M40.23,44.03c8.42-2.28,16.84-4.44,25.26-6.71
                                       c4.44,0.23,8.76,0.34,13.2,0.57c-4.1,1.59-8.19,3.19-12.29,4.89C57.64,43.23,48.99,43.69,40.23,44.03z"/>
                                   <path class="tourism"  d="M40.23,44.03c8.53,1.48,17.18,2.96,25.72,4.44c3.87,2.05,7.85,3.98,11.72,6.03
                                       c-4.44-0.23-8.76-0.46-13.2-0.8C56.39,50.52,48.31,47.33,40.23,44.03z"/>
                                   <path class="lodging_and_boarding"  d="M40.23,44.03c7.28,4.78,14.68,9.44,21.96,14.11
                                       c2.84,3.41,5.58,6.83,8.42,10.13c-3.98-1.93-7.97-3.87-11.83-5.8C52.63,56.43,46.37,50.18,40.23,44.03z"/>
                                   <path class="fisheries"  d="M40.23,43.92c4.32,7.62,8.65,15.13,12.86,22.76C54,71,54.91,75.32,55.82,79.53
                                       c-2.62-3.53-5.23-7.17-7.74-10.7C45.46,60.53,42.84,52.22,40.23,43.92z"/>
                                   <path class="animal_husbandry"  d="M40.23,43.92c0.91,8.65,1.82,17.3,2.73,25.94c-0.91,4.32-1.71,8.65-2.62,12.97
                                       c-0.91-4.32-1.93-8.65-2.84-12.86C38.41,61.21,39.32,52.57,40.23,43.92z"/>
                                   <path class="healthcare"  d="M40.23,43.92c-2.62,8.31-5.35,16.61-7.97,24.92c-2.5,3.64-5.12,7.17-7.62,10.81
                                       c0.91-4.32,1.71-8.65,2.62-12.97C31.58,59.05,35.9,51.43,40.23,43.92z"/>
                                   <path class="finance"  d="M40.23,44.14c-8.65,0.57-17.41,1.02-26.06,1.59c-4.32-1.02-8.53-2.16-12.86-3.19
                                       c4.32-0.8,8.65-1.48,12.97-2.28C23.04,41.53,31.58,42.78,40.23,44.14z"/>
                                   <path class="food_and_supplies"  d="M40.34,44.03c-7.74,3.87-15.59,7.85-23.33,11.72
                                       c-4.32,0.68-8.65,1.37-13.09,2.05c3.64-2.39,7.4-4.89,11.04-7.28C23.39,48.47,31.92,46.31,40.34,44.03z"/>
                                   <path class="energy_and_ict"  d="M40.34,43.92c-5.58,6.71-11.15,13.43-16.73,20.03
                                       c-3.76,2.39-7.4,4.78-11.15,7.17c2.39-3.64,4.89-7.4,7.28-11.04C26.57,54.61,33.4,49.27,40.34,43.92z"/>
                               </g>
                           </svg>


                        </div>


                        <div  class="Tawang trans">

                                <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 80 500" style="enable-background:new 0 0 80 500;" xml:space="preserve">
                               <style type="text/css">
                                   .st0{fill:#FFFFFF;cursor: pointer;stroke:#000000;stroke-width:0.25;stroke-miterlimit:10;}
                                   .st1{fill:none;}

                                   .st3{font-size:12.8068px;}
                                   .st4{fill:#F08080;}
                               </style>
                               <path class="st0 Tawang_txt" d="M40.23,44.17c0,152.46,0,304.92,0,457.38"/>
                               <rect x="31.12" y="440.14" class="st1" width="8.53" height="41.42"/>
                               <text transform="matrix(4.489660e-11 -1 1 4.489660e-11 34.7271 481.459)" class="st2 st3">
                                    Tawang</text>
                               <g class="Tawang_hov">
                                   <path class="water_and_sanitation"  d="M40.23,43.92c-4.89-7.17-9.67-14.45-14.57-21.73
                                       c-1.25-4.21-2.5-8.42-3.76-12.63c2.84,3.3,5.69,6.71,8.65,10.01C33.74,27.76,37.04,35.84,40.23,43.92z"/>
                                   <path class="shg"  d="M40.46,43.92c-0.57-8.65-1.14-17.41-1.71-26.06C39.77,13.53,40.8,9.32,41.93,5
                                       c0.8,4.32,1.59,8.65,2.39,12.97C42.96,26.62,41.71,35.27,40.46,43.92z"/>
                                   <path class="security"  d="M40.23,44.03c3.76-7.85,7.51-15.7,11.27-23.56c3.07-3.19,6.03-6.37,8.99-9.67
                                       c-1.48,4.21-2.84,8.31-4.32,12.52C50.92,30.26,45.58,37.09,40.23,44.03z"/>
                                   <path class="education"  d="M40.23,44.03c6.83-5.46,13.54-10.92,20.37-16.39c4.1-1.59,8.19-3.19,12.29-4.78
                                       c-3.07,3.19-6.26,6.26-9.33,9.44C55.82,36.18,48.08,40.16,40.23,44.03z"/>
                                   <path class="agriculture"  d="M40.23,44.03c-7.97-3.53-15.93-7.06-23.9-10.7c-3.3-2.96-6.6-5.8-9.9-8.76
                                       c4.21,1.37,8.42,2.62,12.63,3.98C26.12,33.79,33.17,38.91,40.23,44.03z"/>
                                   <path class="handloom_and_handicraft"  d="M40.23,44.03c8.42-2.28,16.84-4.44,25.26-6.71
                                       c4.44,0.23,8.76,0.34,13.2,0.57c-4.1,1.59-8.19,3.19-12.29,4.89C57.64,43.23,48.99,43.69,40.23,44.03z"/>
                                   <path class="tourism"  d="M40.23,44.03c8.53,1.48,17.18,2.96,25.72,4.44c3.87,2.05,7.85,3.98,11.72,6.03
                                       c-4.44-0.23-8.76-0.46-13.2-0.8C56.39,50.52,48.31,47.33,40.23,44.03z"/>
                                   <path class="lodging_and_boarding"  d="M40.23,44.03c7.28,4.78,14.68,9.44,21.96,14.11
                                       c2.84,3.41,5.58,6.83,8.42,10.13c-3.98-1.93-7.97-3.87-11.83-5.8C52.63,56.43,46.37,50.18,40.23,44.03z"/>
                                   <path class="fisheries"  d="M40.23,43.92c4.32,7.62,8.65,15.13,12.86,22.76C54,71,54.91,75.32,55.82,79.53
                                       c-2.62-3.53-5.23-7.17-7.74-10.7C45.46,60.53,42.84,52.22,40.23,43.92z"/>
                                   <path class="animal_husbandry"  d="M40.23,43.92c0.91,8.65,1.82,17.3,2.73,25.94c-0.91,4.32-1.71,8.65-2.62,12.97
                                       c-0.91-4.32-1.93-8.65-2.84-12.86C38.41,61.21,39.32,52.57,40.23,43.92z"/>
                                   <path class="healthcare"  d="M40.23,43.92c-2.62,8.31-5.35,16.61-7.97,24.92c-2.5,3.64-5.12,7.17-7.62,10.81
                                       c0.91-4.32,1.71-8.65,2.62-12.97C31.58,59.05,35.9,51.43,40.23,43.92z"/>
                                   <path class="finance"  d="M40.23,44.14c-8.65,0.57-17.41,1.02-26.06,1.59c-4.32-1.02-8.53-2.16-12.86-3.19
                                       c4.32-0.8,8.65-1.48,12.97-2.28C23.04,41.53,31.58,42.78,40.23,44.14z"/>
                                   <path class="food_and_supplies"  d="M40.34,44.03c-7.74,3.87-15.59,7.85-23.33,11.72
                                       c-4.32,0.68-8.65,1.37-13.09,2.05c3.64-2.39,7.4-4.89,11.04-7.28C23.39,48.47,31.92,46.31,40.34,44.03z"/>
                                   <path class="energy_and_ict"  d="M40.34,43.92c-5.58,6.71-11.15,13.43-16.73,20.03
                                       c-3.76,2.39-7.4,4.78-11.15,7.17c2.39-3.64,4.89-7.4,7.28-11.04C26.57,54.61,33.4,49.27,40.34,43.92z"/>
                               </g>
                           </svg>


                        </div>


                        <div  class="Tirap trans">

                                <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 80 500" style="enable-background:new 0 0 80 500;" xml:space="preserve">
                               <style type="text/css">
                                   .st0{fill:#FFFFFF;cursor: pointer;stroke:#000000;stroke-width:0.25;stroke-miterlimit:10;}
                                   .st1{fill:none;}

                                   .st3{font-size:12.8068px;}
                                   .st4{fill:#F08080;}
                               </style>
                               <path class="st0 Tirap_txt" d="M40.23,44.17c0,152.46,0,304.92,0,457.38"/>
                               <rect x="31.12" y="440.14" class="st1" width="8.53" height="41.42"/>
                               <text transform="matrix(4.489660e-11 -1 1 4.489660e-11 34.7271 481.459)" class="st2 st3">
                                    Tirap</text>
                               <g class="Tirap_hov">
                                   <path class="water_and_sanitation"  d="M40.23,43.92c-4.89-7.17-9.67-14.45-14.57-21.73
                                       c-1.25-4.21-2.5-8.42-3.76-12.63c2.84,3.3,5.69,6.71,8.65,10.01C33.74,27.76,37.04,35.84,40.23,43.92z"/>
                                   <path class="shg"  d="M40.46,43.92c-0.57-8.65-1.14-17.41-1.71-26.06C39.77,13.53,40.8,9.32,41.93,5
                                       c0.8,4.32,1.59,8.65,2.39,12.97C42.96,26.62,41.71,35.27,40.46,43.92z"/>
                                   <path class="security"  d="M40.23,44.03c3.76-7.85,7.51-15.7,11.27-23.56c3.07-3.19,6.03-6.37,8.99-9.67
                                       c-1.48,4.21-2.84,8.31-4.32,12.52C50.92,30.26,45.58,37.09,40.23,44.03z"/>
                                   <path class="education"  d="M40.23,44.03c6.83-5.46,13.54-10.92,20.37-16.39c4.1-1.59,8.19-3.19,12.29-4.78
                                       c-3.07,3.19-6.26,6.26-9.33,9.44C55.82,36.18,48.08,40.16,40.23,44.03z"/>
                                   <path class="agriculture"  d="M40.23,44.03c-7.97-3.53-15.93-7.06-23.9-10.7c-3.3-2.96-6.6-5.8-9.9-8.76
                                       c4.21,1.37,8.42,2.62,12.63,3.98C26.12,33.79,33.17,38.91,40.23,44.03z"/>
                                   <path class="handloom_and_handicraft"  d="M40.23,44.03c8.42-2.28,16.84-4.44,25.26-6.71
                                       c4.44,0.23,8.76,0.34,13.2,0.57c-4.1,1.59-8.19,3.19-12.29,4.89C57.64,43.23,48.99,43.69,40.23,44.03z"/>
                                   <path class="tourism"  d="M40.23,44.03c8.53,1.48,17.18,2.96,25.72,4.44c3.87,2.05,7.85,3.98,11.72,6.03
                                       c-4.44-0.23-8.76-0.46-13.2-0.8C56.39,50.52,48.31,47.33,40.23,44.03z"/>
                                   <path class="lodging_and_boarding"  d="M40.23,44.03c7.28,4.78,14.68,9.44,21.96,14.11
                                       c2.84,3.41,5.58,6.83,8.42,10.13c-3.98-1.93-7.97-3.87-11.83-5.8C52.63,56.43,46.37,50.18,40.23,44.03z"/>
                                   <path class="fisheries"  d="M40.23,43.92c4.32,7.62,8.65,15.13,12.86,22.76C54,71,54.91,75.32,55.82,79.53
                                       c-2.62-3.53-5.23-7.17-7.74-10.7C45.46,60.53,42.84,52.22,40.23,43.92z"/>
                                   <path class="animal_husbandry"  d="M40.23,43.92c0.91,8.65,1.82,17.3,2.73,25.94c-0.91,4.32-1.71,8.65-2.62,12.97
                                       c-0.91-4.32-1.93-8.65-2.84-12.86C38.41,61.21,39.32,52.57,40.23,43.92z"/>
                                   <path class="healthcare"  d="M40.23,43.92c-2.62,8.31-5.35,16.61-7.97,24.92c-2.5,3.64-5.12,7.17-7.62,10.81
                                       c0.91-4.32,1.71-8.65,2.62-12.97C31.58,59.05,35.9,51.43,40.23,43.92z"/>
                                   <path class="finance"  d="M40.23,44.14c-8.65,0.57-17.41,1.02-26.06,1.59c-4.32-1.02-8.53-2.16-12.86-3.19
                                       c4.32-0.8,8.65-1.48,12.97-2.28C23.04,41.53,31.58,42.78,40.23,44.14z"/>
                                   <path class="food_and_supplies"  d="M40.34,44.03c-7.74,3.87-15.59,7.85-23.33,11.72
                                       c-4.32,0.68-8.65,1.37-13.09,2.05c3.64-2.39,7.4-4.89,11.04-7.28C23.39,48.47,31.92,46.31,40.34,44.03z"/>
                                   <path class="energy_and_ict"  d="M40.34,43.92c-5.58,6.71-11.15,13.43-16.73,20.03
                                       c-3.76,2.39-7.4,4.78-11.15,7.17c2.39-3.64,4.89-7.4,7.28-11.04C26.57,54.61,33.4,49.27,40.34,43.92z"/>
                               </g>
                           </svg>


                        </div>


                        <div  class="West_Siang trans">

                                <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 80 500" style="enable-background:new 0 0 80 500;" xml:space="preserve">
                               <style type="text/css">
                                   .st0{fill:#FFFFFF;cursor: pointer;stroke:#000000;stroke-width:0.25;stroke-miterlimit:10;}
                                   .st1{fill:none;}

                                   .st3{font-size:12.8068px;}
                                   .st4{fill:#F08080;}
                               </style>
                               <path class="st0 West_Siang_txt" d="M40.23,44.17c0,152.46,0,304.92,0,457.38"/>
                               <rect x="31.12" y="440.14" class="st1" width="8.53" height="41.42"/>
                               <text transform="matrix(4.489660e-11 -1 1 4.489660e-11 34.7271 481.459)" class="st2 st3">
                                    West Siang</text>
                               <g class="West_Siang_hov">
                                   <path class="water_and_sanitation"  d="M40.23,43.92c-4.89-7.17-9.67-14.45-14.57-21.73
                                       c-1.25-4.21-2.5-8.42-3.76-12.63c2.84,3.3,5.69,6.71,8.65,10.01C33.74,27.76,37.04,35.84,40.23,43.92z"/>
                                   <path class="shg"  d="M40.46,43.92c-0.57-8.65-1.14-17.41-1.71-26.06C39.77,13.53,40.8,9.32,41.93,5
                                       c0.8,4.32,1.59,8.65,2.39,12.97C42.96,26.62,41.71,35.27,40.46,43.92z"/>
                                   <path class="security"  d="M40.23,44.03c3.76-7.85,7.51-15.7,11.27-23.56c3.07-3.19,6.03-6.37,8.99-9.67
                                       c-1.48,4.21-2.84,8.31-4.32,12.52C50.92,30.26,45.58,37.09,40.23,44.03z"/>
                                   <path class="education"  d="M40.23,44.03c6.83-5.46,13.54-10.92,20.37-16.39c4.1-1.59,8.19-3.19,12.29-4.78
                                       c-3.07,3.19-6.26,6.26-9.33,9.44C55.82,36.18,48.08,40.16,40.23,44.03z"/>
                                   <path class="agriculture"  d="M40.23,44.03c-7.97-3.53-15.93-7.06-23.9-10.7c-3.3-2.96-6.6-5.8-9.9-8.76
                                       c4.21,1.37,8.42,2.62,12.63,3.98C26.12,33.79,33.17,38.91,40.23,44.03z"/>
                                   <path class="handloom_and_handicraft"  d="M40.23,44.03c8.42-2.28,16.84-4.44,25.26-6.71
                                       c4.44,0.23,8.76,0.34,13.2,0.57c-4.1,1.59-8.19,3.19-12.29,4.89C57.64,43.23,48.99,43.69,40.23,44.03z"/>
                                   <path class="tourism"  d="M40.23,44.03c8.53,1.48,17.18,2.96,25.72,4.44c3.87,2.05,7.85,3.98,11.72,6.03
                                       c-4.44-0.23-8.76-0.46-13.2-0.8C56.39,50.52,48.31,47.33,40.23,44.03z"/>
                                   <path class="lodging_and_boarding"  d="M40.23,44.03c7.28,4.78,14.68,9.44,21.96,14.11
                                       c2.84,3.41,5.58,6.83,8.42,10.13c-3.98-1.93-7.97-3.87-11.83-5.8C52.63,56.43,46.37,50.18,40.23,44.03z"/>
                                   <path class="fisheries"  d="M40.23,43.92c4.32,7.62,8.65,15.13,12.86,22.76C54,71,54.91,75.32,55.82,79.53
                                       c-2.62-3.53-5.23-7.17-7.74-10.7C45.46,60.53,42.84,52.22,40.23,43.92z"/>
                                   <path class="animal_husbandry"  d="M40.23,43.92c0.91,8.65,1.82,17.3,2.73,25.94c-0.91,4.32-1.71,8.65-2.62,12.97
                                       c-0.91-4.32-1.93-8.65-2.84-12.86C38.41,61.21,39.32,52.57,40.23,43.92z"/>
                                   <path class="healthcare"  d="M40.23,43.92c-2.62,8.31-5.35,16.61-7.97,24.92c-2.5,3.64-5.12,7.17-7.62,10.81
                                       c0.91-4.32,1.71-8.65,2.62-12.97C31.58,59.05,35.9,51.43,40.23,43.92z"/>
                                   <path class="finance"  d="M40.23,44.14c-8.65,0.57-17.41,1.02-26.06,1.59c-4.32-1.02-8.53-2.16-12.86-3.19
                                       c4.32-0.8,8.65-1.48,12.97-2.28C23.04,41.53,31.58,42.78,40.23,44.14z"/>
                                   <path class="food_and_supplies"  d="M40.34,44.03c-7.74,3.87-15.59,7.85-23.33,11.72
                                       c-4.32,0.68-8.65,1.37-13.09,2.05c3.64-2.39,7.4-4.89,11.04-7.28C23.39,48.47,31.92,46.31,40.34,44.03z"/>
                                   <path class="energy_and_ict"  d="M40.34,43.92c-5.58,6.71-11.15,13.43-16.73,20.03
                                       c-3.76,2.39-7.4,4.78-11.15,7.17c2.39-3.64,4.89-7.4,7.28-11.04C26.57,54.61,33.4,49.27,40.34,43.92z"/>
                               </g>
                           </svg>


                        </div>


                         <div  class="Lower_Dibang_Valley trans">

                                <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 80 500" style="enable-background:new 0 0 80 500;" xml:space="preserve">
                               <style type="text/css">
                                   .st0{fill:#FFFFFF;cursor: pointer;stroke:#000000;stroke-width:0.25;stroke-miterlimit:10;}
                                   .st1{fill:none;}

                                   .st3{font-size:12.8068px;}
                                   .st4{fill:#F08080;}
                               </style>
                               <path class="st0 Lower_Dibang_Valley_txt" d="M40.23,44.17c0,152.46,0,304.92,0,457.38"/>
                               <rect x="31.12" y="440.14" class="st1" width="8.53" height="41.42"/>
                               <text transform="matrix(4.489660e-11 -1 1 4.489660e-11 34.7271 481.459)" class="st2 st3">
                                    Lower Dibang Valley</text>
                               <g class="Lower_Dibang_Valley_hov">
                                   <path class="water_and_sanitation"  d="M40.23,43.92c-4.89-7.17-9.67-14.45-14.57-21.73
                                       c-1.25-4.21-2.5-8.42-3.76-12.63c2.84,3.3,5.69,6.71,8.65,10.01C33.74,27.76,37.04,35.84,40.23,43.92z"/>
                                   <path class="shg"  d="M40.46,43.92c-0.57-8.65-1.14-17.41-1.71-26.06C39.77,13.53,40.8,9.32,41.93,5
                                       c0.8,4.32,1.59,8.65,2.39,12.97C42.96,26.62,41.71,35.27,40.46,43.92z"/>
                                   <path class="security"  d="M40.23,44.03c3.76-7.85,7.51-15.7,11.27-23.56c3.07-3.19,6.03-6.37,8.99-9.67
                                       c-1.48,4.21-2.84,8.31-4.32,12.52C50.92,30.26,45.58,37.09,40.23,44.03z"/>
                                   <path class="education"  d="M40.23,44.03c6.83-5.46,13.54-10.92,20.37-16.39c4.1-1.59,8.19-3.19,12.29-4.78
                                       c-3.07,3.19-6.26,6.26-9.33,9.44C55.82,36.18,48.08,40.16,40.23,44.03z"/>
                                   <path class="agriculture"  d="M40.23,44.03c-7.97-3.53-15.93-7.06-23.9-10.7c-3.3-2.96-6.6-5.8-9.9-8.76
                                       c4.21,1.37,8.42,2.62,12.63,3.98C26.12,33.79,33.17,38.91,40.23,44.03z"/>
                                   <path class="handloom_and_handicraft"  d="M40.23,44.03c8.42-2.28,16.84-4.44,25.26-6.71
                                       c4.44,0.23,8.76,0.34,13.2,0.57c-4.1,1.59-8.19,3.19-12.29,4.89C57.64,43.23,48.99,43.69,40.23,44.03z"/>
                                   <path class="tourism"  d="M40.23,44.03c8.53,1.48,17.18,2.96,25.72,4.44c3.87,2.05,7.85,3.98,11.72,6.03
                                       c-4.44-0.23-8.76-0.46-13.2-0.8C56.39,50.52,48.31,47.33,40.23,44.03z"/>
                                   <path class="lodging_and_boarding"  d="M40.23,44.03c7.28,4.78,14.68,9.44,21.96,14.11
                                       c2.84,3.41,5.58,6.83,8.42,10.13c-3.98-1.93-7.97-3.87-11.83-5.8C52.63,56.43,46.37,50.18,40.23,44.03z"/>
                                   <path class="fisheries"  d="M40.23,43.92c4.32,7.62,8.65,15.13,12.86,22.76C54,71,54.91,75.32,55.82,79.53
                                       c-2.62-3.53-5.23-7.17-7.74-10.7C45.46,60.53,42.84,52.22,40.23,43.92z"/>
                                   <path class="animal_husbandry"  d="M40.23,43.92c0.91,8.65,1.82,17.3,2.73,25.94c-0.91,4.32-1.71,8.65-2.62,12.97
                                       c-0.91-4.32-1.93-8.65-2.84-12.86C38.41,61.21,39.32,52.57,40.23,43.92z"/>
                                   <path class="healthcare"  d="M40.23,43.92c-2.62,8.31-5.35,16.61-7.97,24.92c-2.5,3.64-5.12,7.17-7.62,10.81
                                       c0.91-4.32,1.71-8.65,2.62-12.97C31.58,59.05,35.9,51.43,40.23,43.92z"/>
                                   <path class="finance"  d="M40.23,44.14c-8.65,0.57-17.41,1.02-26.06,1.59c-4.32-1.02-8.53-2.16-12.86-3.19
                                       c4.32-0.8,8.65-1.48,12.97-2.28C23.04,41.53,31.58,42.78,40.23,44.14z"/>
                                   <path class="food_and_supplies"  d="M40.34,44.03c-7.74,3.87-15.59,7.85-23.33,11.72
                                       c-4.32,0.68-8.65,1.37-13.09,2.05c3.64-2.39,7.4-4.89,11.04-7.28C23.39,48.47,31.92,46.31,40.34,44.03z"/>
                                   <path class="energy_and_ict"  d="M40.34,43.92c-5.58,6.71-11.15,13.43-16.73,20.03
                                       c-3.76,2.39-7.4,4.78-11.15,7.17c2.39-3.64,4.89-7.4,7.28-11.04C26.57,54.61,33.4,49.27,40.34,43.92z"/>
                               </g>
                           </svg>


                        </div>


                         <div  class="Shi-Yomi trans">

                                <svg version="1.1" class="viz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 80 500" style="enable-background:new 0 0 80 500;" xml:space="preserve">
                               <style type="text/css">
                                   .st0{fill:#FFFFFF;cursor: pointer;stroke:#000000;stroke-width:0.25;stroke-miterlimit:10;}
                                   .st1{fill:none;}
                                   .st3{font-size:12.8068px;}
                                   .st4{fill:#F08080;}
                               </style>
                               <path class="st0 Shi-Yomi_txt" d="M40.23,44.17c0,152.46,0,304.92,0,457.38"/>
                               <rect x="31.12" y="440.14" class="st1" width="8.53" height="41.42"/>
                               <text transform="matrix(4.489660e-11 -1 1 4.489660e-11 34.7271 481.459)" class="st2 st3">
                                    Shi-Yomi</text>
                               <g class="Shi-Yomi_hov">
                                   <path class="water_and_sanitation"  d="M40.23,43.92c-4.89-7.17-9.67-14.45-14.57-21.73
                                       c-1.25-4.21-2.5-8.42-3.76-12.63c2.84,3.3,5.69,6.71,8.65,10.01C33.74,27.76,37.04,35.84,40.23,43.92z"/>
                                   <path class="shg"  d="M40.46,43.92c-0.57-8.65-1.14-17.41-1.71-26.06C39.77,13.53,40.8,9.32,41.93,5
                                       c0.8,4.32,1.59,8.65,2.39,12.97C42.96,26.62,41.71,35.27,40.46,43.92z"/>
                                   <path class="security"  d="M40.23,44.03c3.76-7.85,7.51-15.7,11.27-23.56c3.07-3.19,6.03-6.37,8.99-9.67
                                       c-1.48,4.21-2.84,8.31-4.32,12.52C50.92,30.26,45.58,37.09,40.23,44.03z"/>
                                   <path class="education"  d="M40.23,44.03c6.83-5.46,13.54-10.92,20.37-16.39c4.1-1.59,8.19-3.19,12.29-4.78
                                       c-3.07,3.19-6.26,6.26-9.33,9.44C55.82,36.18,48.08,40.16,40.23,44.03z"/>
                                   <path class="agriculture"  d="M40.23,44.03c-7.97-3.53-15.93-7.06-23.9-10.7c-3.3-2.96-6.6-5.8-9.9-8.76
                                       c4.21,1.37,8.42,2.62,12.63,3.98C26.12,33.79,33.17,38.91,40.23,44.03z"/>
                                   <path class="handloom_and_handicraft"  d="M40.23,44.03c8.42-2.28,16.84-4.44,25.26-6.71
                                       c4.44,0.23,8.76,0.34,13.2,0.57c-4.1,1.59-8.19,3.19-12.29,4.89C57.64,43.23,48.99,43.69,40.23,44.03z"/>
                                   <path class="tourism"  d="M40.23,44.03c8.53,1.48,17.18,2.96,25.72,4.44c3.87,2.05,7.85,3.98,11.72,6.03
                                       c-4.44-0.23-8.76-0.46-13.2-0.8C56.39,50.52,48.31,47.33,40.23,44.03z"/>
                                   <path class="lodging_and_boarding"  d="M40.23,44.03c7.28,4.78,14.68,9.44,21.96,14.11
                                       c2.84,3.41,5.58,6.83,8.42,10.13c-3.98-1.93-7.97-3.87-11.83-5.8C52.63,56.43,46.37,50.18,40.23,44.03z"/>
                                   <path class="fisheries"  d="M40.23,43.92c4.32,7.62,8.65,15.13,12.86,22.76C54,71,54.91,75.32,55.82,79.53
                                       c-2.62-3.53-5.23-7.17-7.74-10.7C45.46,60.53,42.84,52.22,40.23,43.92z"/>
                                   <path class="animal_husbandry"  d="M40.23,43.92c0.91,8.65,1.82,17.3,2.73,25.94c-0.91,4.32-1.71,8.65-2.62,12.97
                                       c-0.91-4.32-1.93-8.65-2.84-12.86C38.41,61.21,39.32,52.57,40.23,43.92z"/>
                                   <path class="healthcare"  d="M40.23,43.92c-2.62,8.31-5.35,16.61-7.97,24.92c-2.5,3.64-5.12,7.17-7.62,10.81
                                       c0.91-4.32,1.71-8.65,2.62-12.97C31.58,59.05,35.9,51.43,40.23,43.92z"/>
                                   <path class="finance"  d="M40.23,44.14c-8.65,0.57-17.41,1.02-26.06,1.59c-4.32-1.02-8.53-2.16-12.86-3.19
                                       c4.32-0.8,8.65-1.48,12.97-2.28C23.04,41.53,31.58,42.78,40.23,44.14z"/>
                                   <path class="food_and_supplies"  d="M40.34,44.03c-7.74,3.87-15.59,7.85-23.33,11.72
                                       c-4.32,0.68-8.65,1.37-13.09,2.05c3.64-2.39,7.4-4.89,11.04-7.28C23.39,48.47,31.92,46.31,40.34,44.03z"/>
                                   <path class="energy_and_ict"  d="M40.34,43.92c-5.58,6.71-11.15,13.43-16.73,20.03
                                       c-3.76,2.39-7.4,4.78-11.15,7.17c2.39-3.64,4.89-7.4,7.28-11.04C26.57,54.61,33.4,49.27,40.34,43.92z"/>
                               </g>
                           </svg>


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
        <script>
            $(document).ready(function() {
                // Hide the div
                $(".d-flex").css({'display': "flex"})
        });

               function updateGraph(shg,water_and_sanitation,agriculture,finance,food_and_supplies ,energy_and_ict,healthcare,animal_husbandry,fisheries,lodging_and_boarding,tourism,handloom_and_handicraft,education,security){
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

                $.getJSON( "public/district.json", function( data ) {
                    var order = [];
                $.each( data, function( dist, scores ) {
                        s = (shg * scores.verticals.shg.score)/100;
                        w = (water_and_sanitation *scores.verticals.water_and_sanitation.score)/100;
                        agri = (agriculture *scores.verticals.agriculture.score)/100;
                        f = (finance *scores.verticals.finance.score)/100;
                        fns = (food_and_supplies *scores.verticals.food_and_supplies.score)/100;
                        eni = (energy_and_ict *scores.verticals.energy_and_ict.score)/100;
                        h = (healthcare *scores.verticals.healthcare.score)/100;
                        anh = (animal_husbandry *scores.verticals.animal_husbandry.score)/100;
                        fish = (fisheries *scores.verticals.fisheries.score)/100;
                        lnb = (lodging_and_boarding *scores.verticals.lodging_and_boarding.score)/100;
                        t = (tourism *scores.verticals.tourism.score)/100;
                        hnh = (handloom_and_handicraft *scores.verticals.handloom_and_handicraft.score)/100;
                        edu = (education *scores.verticals.education.score)/100;
                        secu = (security *scores.verticals.security.score)/100;
                        var total = s+w+agri+f+fns+eni+h+anh+fish+lnb+t+hnh+edu+secu;
                        var a = {
                            "name": dist,
                        "score": scores.score,
                        "tot_score": total,
                        "shg": scores.verticals.shg.score,
                        "water_and_sanitation": scores.verticals.water_and_sanitation.score,
                        "agriculture": scores.verticals.agriculture.score,
                        "finance": scores.verticals.finance.score,
                        "food_and_supplies": scores.verticals.food_and_supplies.score,
                        "energy_and_ict": scores.verticals.energy_and_ict.score,
                        "healthcare": scores.verticals.healthcare.score,
                        "animal_husbandry": scores.verticals.animal_husbandry.score,
                        "fisheries": scores.verticals.fisheries.score,
                        "lodging_and_boarding": scores.verticals.lodging_and_boarding.score,
                        "tourism": scores.verticals.tourism.score,
                        "handloom_and_handicraft": scores.verticals.handloom_and_handicraft.score,
                        "education": scores.verticals.education.score,
                        "security": scores.verticals.security.score,
                    };
                        order.push(a);

                    });
                    order.sort(function(a,b) {
                        return b.tot_score-a.tot_score;
                    })
                    console.log(order);
                    // style="transform-origin: 100% 100%;
                    //             transform-box: fill-box;
                    //             transform: scale(1);"
                    // style="transform: translateY(1%);"
                    var max = order[0].tot_score;

                    for (let i = 1; i <= order.length; i++) {
                        var tall = ((order[i-1].tot_score*100)/max)/100;
                    //     $('.order-'.concat(i)).css({
                    //     'transform': 'translateX(-' + ((i-1)*req+extra) + 'px)'
                    // });
                        $('.'.concat(order[i-1].name)).attr('class',order[i-1].name.concat(' order-'.concat(13-i)));

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
                        var size2 = (order[i-1].shg/100*1.6);
                        var s2_str = 'rgb(171, 71, 188)';
                        var s2_fill = 'rgb(171, 71, 188)';
                        var s2_w =s1;
                        if(s2 == 0){
                            s2_str = 'black';
                            s2_fill = 'rgb(245, 245, 245,0.4)';
                            s2_w = 0.1;
                        }
                         $('.'.concat(order[i-1].name,'_hov',' .shg')).css({
                            'transform-origin': 100 +'%'+' '+ 100+'%',
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
                        var s3_w =s1;
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
                        var s4_w =s1;
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
                        var s5_w =s1;
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
                        var s6_w =s1;
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
                        var s7_w =s1;
                        if(s7 == 0){
                            s7_str = 'black';
                            s7_fill = 'rgb(245, 245, 245,0.4)';
                            s7_w = 0.1;
                            $('.'.concat(order[i-1].name,'_hov',' .healthcare')).css({
                            'transform-origin': 100 +'%'+' '+ 0+'%',
                            'transform-box': 'fill-box',
                            'transform': 'scale('+ size7 + ')',
                            'stroke': s7_str,
                            'fill': s7_fill,
                            'stroke-width': s7_w,
                            'stroke-miterlimit': 10
                        });
                        }else{
                         $('.'.concat(order[i-1].name,'_hov',' .healthcare')).css({
                            'transform-origin': 100 +'%'+' '+ 0+'%',
                            'transform-box': 'fill-box',
                            'transform': 'scale('+ size7 + ')',
                            'stroke': 'rgb(56, 193, 114)',
                            'fill': 'rgb(56, 193, 114)',
                            'stroke-width': s7_w,
                            'stroke-miterlimit': 10
                        });
                    }
                        var s8 = (animal_husbandry/100);
                        var size8 = (order[i-1].animal_husbandry/100)*1.6;
                        var s8_str = 'rgb(255, 51, 51)';
                        var s8_fill = 'rgb(255, 51, 51)';
                        var s8_w =s1;
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
                        var s9_w =s1;
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
                        var s10_w =s1;
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
                        var s11_w =s1;
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
                        var s12_w =s1;
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
                        var s13_w =s1;
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
                        var s14_w =s1;
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
                                'transform': 'translateX('+ 0 + 'px)'
                            });
                        }
                        tall = tall+0.06;
                            $('.'.concat(order[i-1].name,'_txt')).css({
                                'transform-origin': 100 +'%'+' '+ 100+'%',
                                'transform-box': 'fill-box',
                                'transform': 'scale('+ tall + ')',
                            });
                        var locate = (1-tall)*10*9.1+0.06;
                        $('.'.concat(order[i-1].name,'_hov')).css({
                            'transform': 'translateY('+ locate + '%)'
                        });

                    }
                    responsive();

                });
            }
           
            updateGraph(100,100,100,100,100,100,100,100,100,100,100,100,100,100);

            var slider1 = document.getElementById("slider1");

            slider1.oninput = function() {
                $('.count1').removeClass('hide');
                $('.count1').text(this.value).css({
                    'left': this.value + '%',
                    'transform': 'translateX(-' + this.value + '%)'
                });
                $('.fill1').css('width', this.value + '%');
                if (this.value==0) {
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
                updateGraph( s,w,agri,f,fns,eni,h,anh,fish,lnb,t,hnh,edu,secu);
            }

            var slider2 = document.getElementById("slider2");

            slider2.oninput = function() {
                $('.count2').removeClass('hide');
                $('.count2').text(this.value).css({
                    'left': this.value + '%',
                    'transform': 'translateX(-' + this.value + '%)',
                });
                $('.fill2').css('width', this.value + '%');
                if (this.value==0) {
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
                updateGraph( s,w,agri,f,fns,eni,h,anh,fish,lnb,t,hnh,edu,secu);
            }

            var slider3 = document.getElementById("slider3");

            slider3.oninput = function() {
                $('.count3').removeClass('hide');
                $('.count3').text(this.value).css({
                    'left': this.value + '%',
                    'transform': 'translateX(-' + this.value + '%)'
                });
                $('.fill3').css('width', this.value + '%');
                if (this.value==0) {
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
                updateGraph( s,w,agri,f,fns,eni,h,anh,fish,lnb,t,hnh,edu,secu);
            }

            var slider4 = document.getElementById("slider4");

            slider4.oninput = function() {
                $('.count4').removeClass('hide');
                $('.count4').text(this.value).css({
                    'left': this.value + '%',
                    'transform': 'translateX(-' + this.value + '%)'
                });
                $('.fill4').css('width', this.value + '%');
                if (this.value==0) {
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
                updateGraph( s,w,agri,f,fns,eni,h,anh,fish,lnb,t,hnh,edu,secu);
            }

            var slider5 = document.getElementById("slider5");

            slider5.oninput = function() {
                $('.count5').removeClass('hide');
                $('.count5').text(this.value).css({
                    'left': this.value + '%',
                    'transform': 'translateX(-' + this.value + '%)'
                });
                $('.fill5').css('width', this.value + '%');
                if (this.value==0) {
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
                updateGraph( s,w,agri,f,fns,eni,h,anh,fish,lnb,t,hnh,edu,secu);
            }
            var slider6 = document.getElementById("slider6");

            slider6.oninput = function() {
                $('.count6').removeClass('hide');
                $('.count6').text(this.value).css({
                    'left': this.value + '%',
                    'transform': 'translateX(-' + this.value + '%)'
                });
                $('.fill6').css('width', this.value + '%');
                if (this.value==0) {
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
                updateGraph( s,w,agri,f,fns,eni,h,anh,fish,lnb,t,hnh,edu,secu);
            }
            var slider7 = document.getElementById("slider7");

            slider7.oninput = function() {
                $('.count7').removeClass('hide');
                $('.count7').text(this.value).css({
                    'left': this.value + '%',
                    'transform': 'translateX(-' + this.value + '%)'
                });
                $('.fill7').css('width', this.value + '%');
                if (this.value==0) {
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
                updateGraph( s,w,agri,f,fns,eni,h,anh,fish,lnb,t,hnh,edu,secu);
            }
            var slider8 = document.getElementById("slider8");

            slider8.oninput = function() {
                $('.count8').removeClass('hide');
                $('.count8').text(this.value).css({
                    'left': this.value + '%',
                    'transform': 'translateX(-' + this.value + '%)'
                });
                $('.fill8').css('width', this.value + '%');
                if (this.value==0) {
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
                updateGraph( s,w,agri,f,fns,eni,h,anh,fish,lnb,t,hnh,edu,secu);
            }
            var slider9 = document.getElementById("slider9");

            slider9.oninput = function() {
                $('.count9').removeClass('hide');
                $('.count9').text(this.value).css({
                    'left': this.value + '%',
                    'transform': 'translateX(-' + this.value + '%)'
                });
                $('.fill9').css('width', this.value + '%');
                if (this.value==0) {
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
                updateGraph( s,w,agri,f,fns,eni,h,anh,fish,lnb,t,hnh,edu,secu);
            }
            var slider10 = document.getElementById("slider10");

            slider10.oninput = function() {
                $('.count10').removeClass('hide');
                $('.count10').text(this.value).css({
                    'left': this.value + '%',
                    'transform': 'translateX(-' + this.value + '%)'
                });
                $('.fill10').css('width', this.value + '%');
                if (this.value==0) {
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
                updateGraph( s,w,agri,f,fns,eni,h,anh,fish,lnb,t,hnh,edu,secu);
            }
            var slider11 = document.getElementById("slider11");

            slider11.oninput = function() {
                $('.count11').removeClass('hide');
                $('.count11').text(this.value).css({
                    'left': this.value + '%',
                    'transform': 'translateX(-' + this.value + '%)'
                });
                $('.fill11').css('width', this.value + '%');
                if (this.value==0) {
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
                updateGraph( s,w,agri,f,fns,eni,h,anh,fish,lnb,t,hnh,edu,secu);
            }
            var slider12 = document.getElementById("slider12");

            slider12.oninput = function() {
                $('.count12').removeClass('hide');
                $('.count12').text(this.value).css({
                    'left': this.value + '%',
                    'transform': 'translateX(-' + this.value + '%)'
                });
                $('.fill12').css('width', this.value + '%');
                if (this.value==0) {
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
                updateGraph( s,w,agri,f,fns,eni,h,anh,fish,lnb,t,hnh,edu,secu);
            }
            var slider13 = document.getElementById("slider13");

            slider13.oninput = function() {
                $('.count13').removeClass('hide');
                $('.count13').text(this.value).css({
                    'left': this.value + '%',
                    'transform': 'translateX(-' + this.value + '%)'
                });
                $('.fill13').css('width', this.value + '%');
                if (this.value==0) {
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
                updateGraph( s,w,agri,f,fns,eni,h,anh,fish,lnb,t,hnh,edu,secu);
            }
            var slider14 = document.getElementById("slider14");

            slider14.oninput = function() {
                $('.count14').removeClass('hide');
                $('.count14').text(this.value).css({
                    'left': this.value + '%',
                    'transform': 'translateX(-' + this.value + '%)'
                });
                $('.fill14').css('width', this.value + '%');
                if (this.value==0) {
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
                updateGraph( s,w,agri,f,fns,eni,h,anh,fish,lnb,t,hnh,edu,secu);
            }
            //responsive

            function responsive() {
                var w = $('.d-flex').width();
                var diff = (960-w)/12;
                var extra = diff/12;
                var req = diff+extra;
                if (w < 960 ){
                    // style="transform: translateX(10%);"
                    for (let i = 2; i <= 12; i++) {
                        $('.order-'.concat(i)).css({
                        'transform': 'translateX(-' + ((i-1)*req+extra) + 'px)'
                    });

                    }

                }
            }

            var w = $('.d-flex').width();
            var diff = (960-w)/12;
            var extra = diff/12;
            var req = diff+extra;
            if (w < 960 ){
                // style="transform: translateX(10%);"
                for (let i = 2; i <= 12; i++) {
                    $('.order-'.concat(i)).css({
                    'transform': 'translateX(-' + ((i-1)*req+extra) + 'px)'
                });

                }

            }


            //media query


            $(window).resize(function(){
                var w = $('.d-flex').width();
                var diff = (960-w)/12;
                var extra = diff/12;
                var req = diff+extra;
                if (w < 960 ){
                    // style="transform: translateX(10%);"
                    for (let i = 2; i <= 12; i++) {
                        $('.order-'.concat(i)).css({
                        'transform': 'translateX(-' + ((i-1)*req+extra) + 'px)'
                    });

                    }

                }
            });
            $('.st0').hover(function(){
                $('.st0').css({
                    'fill': "green",
                });
            });

        </script>
    </body>
</html>

