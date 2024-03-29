<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
 <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/vnd.microsoft.icon"
     href="favicon.ico" />

    <title>LogIn</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url("style/css/bootstrap.css"); ?>">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url("style/css/full-width-pics(Login).css"); ?>">

    <!-- jQuery -->
    <script src="<?php echo base_url("style/js/jquery.js"); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url("style/js/bootstrap.min.js"); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url("style/js/bootstrap.js"); ?>"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
 <body>

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
                <a class="navbar-brand" href="<?php echo base_url("Welcome/index");?>">Garuda Union Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url("/Home/memberlist");?>">User list</a>
                    </li>
                    <li>
                        <a href="https://zkillboard.com/corporation/98296037/">ZKillboard</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Full Width Image Header with Logo -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
    <header class="image-bg-fluid-height">
        <img class="img-responsive img-center" src="https://imageserver.eveonline.com/Corporation/98296037_128.png" alt="">
    </header>

    <!-- Content Section -->
    <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                  <CENTER><h1 class="section-heading">LogIn</h1>
                  
                  <?php echo validation_errors(); ?>
                  <?php echo form_open('Verifylogin'); ?>
                   
                   <!--<label for="username">Username:</label>-->
                   <span class="label label-default">Username</span>
                   <br/>
                   <!-- Input for the username -->
                   <input type="text" size="20" id="username" name="username"/>
                   <br/>
                   <br/>
                   <!--<label for="password">Password:</label>-->
                   <span class="label label-default">password</span>
                   <br/>
                   <!-- Input for the password -->
                   <input type="password" size="20" id="passowrd" name="password"/>
                   <br/>
                   <br/>
                   <!--<input type="submit" value="Login"/>-->
                  <button type="submit" class="btn btn-lg btn-default" value="Login">Login</button></CENTER>
                   

            </form>
              <p class="lead section-lead"></p>
              <p class="section-paragraph"></p>
            </div>
              
            </div>
        </div>
    </section>

    <!-- Fixed Height Image Aside -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
    <!--<aside class="image-bg-fixed-height"></aside>-->

    <!-- Content Section -->
    <!--<section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <h1 class="section-heading">&nbsp;</h1>
                  <p class="lead section-lead">.</p>
                    <p class="section-paragraph">.</p>
                </div>
            </div>
            <!-- /.row -->
        <!--</div>
        <!-- /.container -->
    <!--</section> -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <p>Copyright &copy; Garuda Union 2017</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </footer>

</body>
</html>