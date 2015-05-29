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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.carousel').each(function() {
                    $(this).carousel({
                        pause: true,
                        interval: false
                    });
                });
            });
            ​
        </script>
        <script src="http://twitter.github.com/bootstrap/assets/js/jquery.js"></script>
        <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-transition.js"></script>
        <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-carousel.js"></script>
        <title>Chrislist</title>
    </head>
    <body>
        <!-- navbar to navigate the pages -->
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <a href="Index.html" class="navbar-brand">Chrislist</a>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
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

        <!-- 1st introduction-->
        <h2>How To Create a Post.</h2>
        <div id="carousel-1" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
            <!-- 1ST instructions -->
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/register.png" alt="Register">
                    <div class="carousel-caption">
                        <h3>Step One</h3>
                        <p>To register, click on the Register Button on the top right corner.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/register01.png" alt="Register">
                    <div class="carousel-caption">
                        <h3>Step Two</h3>
                        <p>Next, you need to provide a valid E-Mail. Then, create a username and password. When you finished providing an E-Mail, Username, and Password, click on the Submit Button. </p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/register02.png" alt="Register">
                    <div class="carousel-caption">
                        <h3>Step Three</h3>
                        <p>Finally, login with your Username and Password and click the Submit Button. You are now officially logged in.</p>
                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- 2ND instructions -->
        <h2>How To Create a Post.</h2>
        <div id="carousel-2" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-2" data-slide-to="1"></li>
                <li data-target="#carousel-2" data-slide-to="2"></li>
                <li data-target="#carousel-2" data-slide-to="3"></li>
                <li data-target="#carousel-2" data-slide-to="4"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/post1.png" alt="Post">
                    <div class="carousel-caption">
                        <h3>Step One</h3>
                        <p>Click on the login button.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/post2.png" alt="Post">
                    <div class="carousel-caption">
                        <h3>Step Two</h3>
                        <p> Login then click the Submit button. </p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/post3.png" alt="Post">
                    <div class="carousel-caption">
                        <h3>Step Three</h3>
                        <p>After logging in, click on the Post Form button. </p>
                    </div>
                </div>
                <div class="item">
                    <img src="images/post4.png" alt="Post">
                    <div class="carousel-caption">
                        <h3>Step Four</h3>
                        <p>After clicking on the Post Form button, create a post. When you finished creating a post, click the Submit button.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="images/post5.png" alt="Post">
                    <div class="carousel-caption">
                        <h3>Step Five</h3>
                        <p>Finally, your post will show on the Posts page.</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#carousel-2" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-2" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </body>
</html>