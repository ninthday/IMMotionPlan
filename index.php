<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="zh-TW">
    <head>
        <meta charset="UTF-8">
        <title>IM Motion Planer</title>
        <!-- Bootstrap -->
        <link href="resources/bootstrap-3.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/motion-plan.css" rel="stylesheet">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Motion Planner</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class="container">
            <div class="col-md-9">
                <canvas width="400" height="400"></canvas>
            </div>
            <div class="col-md-3" style="padding-top: 20px;">
                <div class="panel panel-default">
                    <div class="panel-heading">Control Panel</div>
                    <div class="panel-body">
                        Click
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
        <div class="container">
            <div class="dis-msg">
                begin.....
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <p>Copyright &COPY; 2014, by <a href="mailto:jeffy@ninthday.info">@ninthday</a>.</p>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="resources/bootstrap-3.2/js/bootstrap.min.js"></script>
        <script src="resources/jcanvas.min.js"></script>
        <script src="js/mp.js"></script>
    </body>
</html>
