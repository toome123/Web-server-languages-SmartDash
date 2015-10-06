<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="en" ng-app="myApp" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Smart-Dash</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="app/bower_components/html5-boilerplate/dist/css/normalize.css">
  <link rel="stylesheet" href="app/bower_components/html5-boilerplate/dist/css/main.css">
  <link rel="stylesheet" href="app/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="app/bower_components/bootstrap/dist/css/bootstrap-theme.min.css">

 <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        background-color: #ccc;
    }
    </style>

</head>
<body>
   <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#/home">Smart-Dash</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#/home">Начало</a>
                    </li>
                    <li>
                        <a href="#/settings">Настройки</a>
                    </li>
                    <li>
                        <a href="#">За Проекта</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
               <div ng-view></div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


  <script src="app/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="app/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="app/bower_components/html5-boilerplate/dist/js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="app/bower_components/angular/angular.js"></script>
  <script src="app/bower_components/angular-route/angular-route.js"></script>
  <script src="app/app.js"></script>
  <script src="app/home/home.js"></script>
  <script src="app/home/homeService.js"></script>
  <script src="app/settings/settings.js"></script>
  <script src="app/settings/settingsService.js"></script>
  <script src="app/components/version/version.js"></script>
  <script src="app/components/version/version-directive.js"></script>
  <script src="app/components/version/interpolate-filter.js"></script>
  
</body>
</html>