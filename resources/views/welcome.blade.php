<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <meta property="fb:app_id" content="1207799069234551">
        <meta property="og:title" content="Cuando me pagas?" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.cuandomepagas.com" />
        <meta property="og:image" content="https://s3-us-west-2.amazonaws.com/cuandomepagas/images/fb-share.png" />
        <meta property="og:description" content="Denúncialos aquí para que NO le pase a alguien más, El buró de crédito social!"/>


        <title>Cuando me pagas?</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,500" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">




        <script src="https://use.fontawesome.com/95088d75b6.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
                /*css for full size background image*/
                background: url('https://s3-us-west-2.amazonaws.com/cuandomepagas/images/pay-background.jpg') no-repeat center right fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;

                height: 100%;
            }

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
                height: 80px;
                width: 100%;
                position: absolute;
                right: 0px;
                left: 0px;
                top: 0px;
                z-index: 99;
                background-color: rgba(255,255,255,.7);
            }

            .top-left {
                position: absolute;
                left: 20px;
                top: 0px;
                z-index: 99;
            }


            .content {
                z-index: 99;
                text-align: center;
            }

            .title {
                font-size: 54px;
                color: #fff;
                margin-bottom: 50px;
            }

            .links > a {
                color: #31708f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                float: right;
                margin-top: 30px;
                text-transform: uppercase;
            }


        </style>
        <link href="/css/styles.css" rel="stylesheet" type="text/css">

        @include('layouts.gtm')

    </head>
    <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9BQ9HN"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
        <div class="overlay"></div>
        <nav class="navbar navbar-default navbar-static-top navbar-homepage">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <!-- <a class="navbar-brand" href="{{ url('/') }}"> -->
                    <a  class="navbar-brand" href="/"><img src="https://s3-us-west-2.amazonaws.com/cuandomepagas/images/logo-cmp.png" ></a>

                    <!-- </a> -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @include('layouts.menu')
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container min500">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="title m-b-md text-center">
                            Ellos deben y no quieren pagar?<br>
                            <p class="white-color text-center font14">Denúncialos aquí para que NO le pase a alguien más, El buró de crédito social!</p>
                        </div>


                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                       <p class="white-color text-center">
                       </p>
                    </div>
                    <form  action="{{ route('search') }}">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="col-md-9 marginT10">
                                <input type="text" class="form-control input-lg" placeholder="Busca a esa persona o empresa que debe">
                            </div>
                            <div class="col-md-3 marginT10" >
                                <button type="submit" class="btn btn-lg btn-success btn-block" >
                                    <i class="fa fa-search"></i> Buscar
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </body>
</html>
