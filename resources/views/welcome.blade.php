<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="utf-8">
    <meta name = "description" content = "{{ __('welcome.descriptionCTI') }}" >
    <meta name = "keywords" content = "{{ __('welcome.keywordCTI') }}" >
    <meta name="author" content="semanticatechnologies.com - Douala Bonamoussadi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/app.css" rel="stylesheet" type="text/css">
    <script src="js/app.js"></script>
    <script src="js/jssor.js"></script>

    <script src="{{ URL::asset('js/jssor.js') }}"></script>
    <script src="{{ URL::asset('js/jssorconfig.js') }}"></script>


    <title>CTIn - Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        /*
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
*/
        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
@include('Inc.first-nav')
@include('Inc.mobile-nav')
@include('Inc.stc-navbar')


        <!--
            <div class="content">
                <div class="title m-b-md">
                    Churchill Training Institute
                </div>

            </div>

            -->


<style>

    .students-img {

        border: 3px solid red;

        background-color: #0000cc;

        display:block;

        width: 45%;

        height: 100%;

    }

    .parallax {

        /* The image used

        background-image: url("img_parallax.jpg");*/

        border: 2px solid red;

        /* Set a specific height */

        min-height: 500px;

        width: 50%;

        display:block;



        /* Create the parallax scrolling effect */

        background-attachment: fixed;

        background-position: left;

        background-repeat: no-repeat;

        /*background-size: cover;*/

        background-size: 50%  auto;

    }

</style>





<div id="main_home">

    <div class="flex-contain">

        <div class="main-contain-middle">



            <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700&subset=latin-ext,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />

            <style>

                /* jssor slider loading skin spin css */

                .jssorl-009-spin img {

                    animation-name: jssorl-009-spin;

                    animation-duration: 3.6s;

                    animation-iteration-count: infinite;

                    animation-timing-function: linear;

                }



                @keyframes jssorl-009-spin {

                    from {

                        transform: rotate(0deg);

                    }



                    to {

                        transform: rotate(360deg);

                    }

                }





                .jssorb052 .i {position:absolute;cursor:pointer;}

                .jssorb052 .i .b {fill:#000;fill-opacity:0.3;}

                .jssorb052 .i:hover .b {fill-opacity:.7;}

                .jssorb052 .iav .b {fill-opacity: 1;}

                .jssorb052 .i.idn {opacity:.3;}



                .jssora053 {display:block;position:absolute;cursor:pointer;}

                .jssora053 .a {fill:none;stroke:#fff;stroke-width:640;stroke-miterlimit:10;}

                .jssora053:hover {opacity:.8;}

                .jssora053.jssora053dn {opacity:.5;}

                .jssora053.jssora053ds {opacity:.3;pointer-events:none;}

            </style>

            <!--

            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;"> -->

            <div id="jssor_1">

                <!-- Loading Screen -->

                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">

                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />

                </div>

                <div id="slider-images" data-u="slides" >



                    <div class="slide-img" data-p="170.00">

                        <img  data-u="image" src="{{ URL::asset('img/carousel/etudiants.jpg') }}" />

                        <div class="slide-banner" data-u="caption" data-t="2" style="position:absolute;top:30px;left:-505px;width:700px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">{{ __('welcome.texte1') }}:{{ __('welcome.texte2') }} </div>

                    </div>



                    <div class="slide-img" data-p="170.00">

                        <img  data-u="image" src="{{ URL::asset('img/carousel/assis.jpg') }}" />

                        <div class="slide-banner" data-u="caption" data-t="2" style="position:absolute;top:30px;left:-505px;width:700px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">{{ __('welcome.texte3') }}: {{ __('welcome.texte4') }}</div>

                    </div>

                    <div class="slide-img" data-p="170.00">

                        <img data-u="image" src="{{ URL::asset('img/carousel/assise.jpg') }}" />

                        <div class="slide-banner" data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:500px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">{{ __('welcome.texte5') }}:{{ __('welcome.texte6') }} </div>

                    </div>

                    <div data-p="170.00">

                        <img data-u="image" src="{{ URL::asset('img/carousel/groupe.jpg') }}" />

                        <div class="slide-banner" data-u="caption" data-t="4" style="position:absolute;top:30px;left:30px;width:500px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">Bonamoussadi :{{ __('welcome.texte7') }} </div>

                    </div>

                    <div data-p="170.00">

                        <img data-u="image" src="{{ URL::asset('img/carousel/assisel.jpg') }}" />

                        <div class="slide-banner" data-u="caption" data-t="5" style="position:absolute;top:30px;left:600px;width:700px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">{{ __('welcome.texte8') }}: {{ __('welcome.texte9') }}</div>

                    </div>



                    <div data-b="0" data-p="170.00">

                        <img data-u="image" src="{{ URL::asset('img/carousel/regard.jpg') }}" />

                        <div class="slide-banner" data-u="caption" data-t="7" style="position:absolute;top:-50px;left:30px;width:500px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">{{ __('welcome.texte10') }}:{{ __('welcome.texte11') }}  !!!</div>

                    </div>

                    <div data-p="170.00">

                        <img data-u="image" src="{{ URL::asset('img/carousel/computerstudents.jpg') }}" />

                        <div class="slide-banner" data-u="caption" data-t="7" style="position:absolute;top:-50px;left:30px;width:700px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">{{ __('welcome.texte12') }} : {{ __('welcome.texte13') }}</div>

                    </div>



                </div>

                <!-- Bullet Navigator -->

                <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">

                    <div data-u="prototype" class="i" style="width:16px;height:16px;">

                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">

                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>

                        </svg>

                    </div>

                </div>

                <!-- Arrow Navigator -->

                <div data-u="arrowleft" class="jssora053" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">

                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">

                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>

                    </svg>

                </div>

                <div data-u="arrowright" class="jssora053" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">

                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">

                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>

                    </svg>

                </div>

            </div>


            <div class="cat-container">

                <div class="categorie">

                    <div class="category-title">

                        <h3><a href="/allemand">{{ __('welcome.texte14') }}
                            </a></h3>

                    </div>

                    <div class="datecours">

                        {{ __('welcome.texte15') }}:

                        {{ __('welcome.texte16') }}

                    </div>
                    <div class="datecours">
                        <div class="annonce-inscription">
                            {{ __('welcome.texte17') }}
                        </div>
                    </div>



                    <div class="category-desktop-contain">
                        <a href="/allemand">{{ __('welcome.texte18') }}</a>
                    </div>
                </div>

                <div class="categorie">

                    <div class="category-title">

                        <h3><a href="/anglais">{{ __('welcome.texte19') }}</a></h3>

                    </div>
                    {{ __('welcome.texte20') }}

                    <p>{{ __('welcome.texte21') }}</p>

                    <div class="category-desktop-contain">
                        {{ __('welcome.texte22') }}

                        <br/><a href="/anglais">{{ __('welcome.texte23') }}</a>
                    </div>
                </div>

                <div class="categorie">

                    <div class="category-title">

                        <h3><a href="/informatique">{{ __('welcome.texte24') }}</a></h3>

                    </div>
                    {{ __('welcome.texte25') }}
                    <br>

                    <i class="fa fa-check" aria-hidden="true" style="font-size:16px;color:#f16e00"></i>	<strong>{{ __('welcome.texte26')}}</strong> Microsoft Word, Excel,  Power point, Access. <br>

                    <i class="fa fa-check" aria-hidden="true" style="font-size:16px;color:#f16e00"></i> <strong>{{ __('welcome.texte27') }}></strong> Adobe Photoshop, illustrator, InDesign. Microsoft Publisher <br>

                    <i class="fa fa-check" aria-hidden="true" style="font-size:16px;color:#f16e00"></i>	<strong>{{ __('welcome.texte28') }}</strong> <br>

                    <i class="fa fa-check" aria-hidden="true" style="font-size:16px;color:#f16e00"></i>	<strong>{{ __('welcome.texte29') }}{</strong> <br>

                    <i class="fa fa-check" aria-hidden="true" style="font-size:16px;color:#f16e00"></i>	<strong>{{ __('welcome.texte30') }}</strong> HTML5, CSS3, Flex Box, JavaScript, PHP, Jquery, MysQL, Symfony, Responsive Web Design

                </div>

                <div class="categorie">

                    <div class="category-title">
                        <h3><a href="/anglais/cours-particuliers">{{ __('welcome.texte31') }}</a></h3>
                    </div>
                    {{ __('welcome.texte32') }}


                </div>

            </div>

            <h3>INFORMATIONS</h3>

            <div class="info-container">



                <div class="information">

                    <div class="info-title"><h3>{{ __('welcome.texte33') }}</h3></div>

                    <div class="datecours">

                        {{ __('welcome.texte34') }}:

                        {{ __('welcome.texte35') }}

                    </div>

                </div>

                <div class="information contact">

                    <div class="info-title"><h3>{{ __('welcome.texte36') }}</h3></div>
                    {{ __('welcome.texte37') }}
                    <br>

                    Tel / WhatsApp: 673 91 94 90; 695 50 48 82 <br>

                    Email : info@cticamer.com<br>



                    <div class="titre">{{ __('welcome.texte38') }}:</div>

                    <div class="sous-titre"> {{ __('welcome.texte39') }}:</div>

                    {{ __('welcome.texte40') }}: 8h - 21h.
                    {{ __('welcome.texte41') }}: 9h -16h : 8h - 21h. <br>

                    {{ __('welcome.texte42') }}: 9h -16h <br>

                    <div class="sous-titre">{{ __('welcome.texte43') }}: 8h - 18h30 :</div>

                    {{ __('welcome.texte44') }}: 8h - 18h30.: 8h - 18h30. <br>
                    {{ __('welcome.texte45') }}
                    : 9h -12h



                </div>

                <div class="information">

                    <div class="info-title"><h3>{{ __('welcome.texte46') }}</h3></div>
                    {{ __('welcome.texte47') }}



                </div>

            </div>

        </div>



    </div>

    @include('Inc/actualites')

</div>

</div>
@include('Inc.magnetique')
@include('Inc.footer')
</body>
</html>
