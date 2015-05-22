<!doctype html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Avocats</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap-select.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('/js/date_heure.js') }}"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script src="http://thecodeplayer.com/uploads/js/prefixfree-1.0.7.js" type="text/javascript" type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/bootstrap-select.js"></script>
    <script type="text/javascript" src="js/bootstrap-carousel.js"></script>
    <script type="text/javascript" src="js/bootstrap-modal.js"></script>
    <!-- jQuery plugin leanModal under MIT License http://leanmodal.finelysliced.com.au/ -->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
    <style type="text/css">
        /**
         * Override feedback icon position
         * See http://formvalidation.io/examples/adjusting-feedback-icon-position/
         */
        #dateRangeForm .form-control-feedback {
            top: 0;
            right: -15px;
        }
    </style>

</head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Avocats</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a style="background: #00b3ee;" href="{{ url('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a></li>
                @if (Auth::guest())
                <li><a  href="{{ url('/recherche') }}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;recherche</a></li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())

                <li> <a href="{{ url('/auth/login') }}"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Connecter</a>
                </li>

                <li>
                    <a href="{{ url('/auth/register') }}"><span class="glyphicon glyphicon-registration-mark" aria-hidden="true"></span>&nbsp;S'inscrire</a>
                </li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/avocat/compte') }}">Compte</a>
                            <a href="{{ url('/auth/logout') }}">Déconnecter</a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
@yield('content')

<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<footer   @yield('x')>

    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> Copyright © Avocats-tunisie 2015. All right reserved. </p>

        </div>
    </div>
    <!--/.footer-bottom-->
</footer>
</html>