<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/custom.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/custom.css">
        <title>Chrislist</title>
    </head>
    <body>
        <!-- navbar -->
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <a href="Index.html" class="navbar-brand">Chrislist</a>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="homepage.php">Home page</a></li>
                        <li><a href="index.php">Posts</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="controller/logout-user.php">Logout</a></li>
                    </ul>

                </div>
            </div>
        </div>

        <!--jumbotron -->
        <div class="jumbotron">
            <center><h2>Chrislist</h2>
                <p>Welcome to Chrislist. You can buy, trade, or sell your items here.</p>
        </div>

        <!-- time and date -->
        <iframe src="http://free.timeanddate.com/clock/i4oy8u06/n137/tc2aabd2/tt0/tw0/tm1/th2/tb4" frameborder="0" width="89" height="34"></iframe>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <img class="img-responsive img-responsive" src="images/instructionstoregister.jpg" alt="HTML">
      <div class="carousel-caption">
          <h3>HTML</h3>
          <p>HTML or HyperText Markup Language is the standard markup language used to create web pages.</p>
      </div>
    </div>
      <!-- 2nd photo for carousel -->
    <div class="item">
        <img class="img-responsive img-responsive" src="images/instructionstoregister2.jpg" alt="CSS">
      <div class="carousel-caption">
          <h3>CSS</h3>
          <p>Cascading Style Sheets (CSS) is a style sheet language used for describing the look and formatting of a document written in a markup language. </p>
      </div>
    </div>
      <!-- 3rd photo for carousel -->
    <div class="item">
        <img src="images/instructionstoregister3.jpg" alt="Bootstrap">
      <div class="carousel-caption">
          <h3>Bootstrap</h3>
          <p>Bootstrap is a free collection of tools for creating websites and web applications. It contains HTML and CSS-based design templates for typography, forms, buttons, navigation and other interface components, as well as optional JavaScript extensions. </p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
   </a>
      </div>

    </body>
</html>