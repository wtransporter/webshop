<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">


        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

        <link rel="shortcut icon" href="/img/favicon/favicon.ico">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/leaflet.css" />
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/leaflet.ie.css" />
        <![endif]-->
        <link rel="stylesheet" href="css/main.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

<style>
    * {
      margin: 0;
      padding: 0;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    ul { list-style-type: none; }

    a {
      text-decoration: none;
    }

    /** =======================
     * Contenedor Principal
     ===========================*/

    .my-list a {
      height: 27px;
      padding: 3px 5px 3px 5px;
    }

    .accordion {
      width: 100%;
      max-width: 360px;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
      border: 1px solid #cccccc;
    }

    .accordion .link {
      cursor: pointer;
      display: block;
      padding: 3px 5px 3px 5px;
      font-size: 14px;
      border-bottom: 1px solid #cccccc;
      position: relative;
      -webkit-transition: all 0.4s ease;
      -o-transition: all 0.4s ease;
      transition: all 0.4s ease;
    }

    .accordion li:hover {
        background-color: #f2f2f2;
    }

    .accordion li:last-child .link { border-bottom: 0; }

    .accordion li i {
      position: absolute;
      top: 16px;
      left: 12px;
      font-size: 18px;
      color: #595959;
      -webkit-transition: all 0.4s ease;
      -o-transition: all 0.4s ease;
      transition: all 0.4s ease;
    }

    .accordion li i.fa-chevron-down {
      right: 12px;
      left: auto;
      font-size: 14px;
      top: 5px;
    }

    .accordion li.open .link { color: #808080; }

    .accordion li.open i { color: #808080; }

    .accordion li.open i.fa-chevron-down {
      -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
      -o-transform: rotate(180deg);
      transform: rotate(180deg);
    }

    /**
     * Submenu
     -----------------------------*/

    .submenu {
      display: none;
      background: #e9e8e8;
      font-size: 14px;
    }

    .submenu li { border-bottom: 1px solid #cccccc; }

    .submenu a {
      display: block;
      text-decoration: none;
      color: #000000;
      padding: 3px;
      padding-left: 20px;
      -webkit-transition: all 0.25s ease;
      -o-transition: all 0.25s ease;
      transition: all 0.25s ease;
    }

    .submenu a:hover {
      background: #dcdcdc;
    }
</style>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://google.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        @include ('includes.nav')


        @yield('content')
        

        @include ('includes.footer')

    </body>
</html>