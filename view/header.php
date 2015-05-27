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
                        <li><a href="index.php">Homepage</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="post.php">Create Post</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="controller/logout-user.php">Logout</a></li>
                    </ul>

                </div>
            </div>
        </div>
        <!--jumbotron -->
        <div class="jumbotron">
            <center><h1>Chrislist</h1>
                <p>Welcome to Chrislist. You can buy, trade, or sell your items here.</p>
        </div>
      <iframe src="http://free.timeanddate.com/clock/i4omu9eg/n137/tt0/tw0/tm1/tb4" frameborder="0" width="89" height="34"></iframe>
   
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
                                    <img class="img-responsive img-responsive" src="images/AppAcademy.png" alt="App Academy">
                                    <div class="carousel-caption">
                                        <h3>App Academy</h3>
                                        <p>This program is teaching me how to make websites and video games</p>
                                    </div>
                                </div>
                                <!-- pic for phs carousel -->
                                <div class="item">
                                    <img class="img-responsive img-responsive" src="images/dog.png" alt="CSS">
                                    <div class="carousel-caption">
                                        <h3>PHS</h3>
                                        <p>This school is where I am currently attending.</p>
                                    </div>
                                </div>
                                <!-- Pic for website carousel -->
                                <div class="item">
                                    <img src="images/website.png" alt="websites">
                                    <div class="carousel-caption">
                                        <h3>Websites</h3>
                                        <p>I'm currently making websites and learning code.</p>
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