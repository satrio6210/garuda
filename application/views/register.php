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

    <title>Register</title>

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
                <a class="navbar-brand" href="<?php echo base_url("home/index");?>">Garuda Union Home</a>
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
                  <CENTER><h1 class="section-heading">Register</h1></CENTER>
                  
                  <p class="section-paragraph"><?php echo validation_errors(); ?>
                  <?php echo form_open('Insert_ctrl'); ?></p>
                  
                   <br/>
                   <br/>

                    <?php if (isset($message)) { ?>
                    <CENTER>
                        <h3 style="color:green;">Register Success</h3>
                    </CENTER>
                    <br>
                    <?php } ?>
                   
                   
                   
                   <!--<label for="username">Username:</label>-->
                   <span style="display:inline-block; width: 45px;"></span><span class="label label-default">Username</span> 
                   <br/> <?php echo form_error('username'); ?>
                   <CENTER>
                   <!-- Input for the username -->
                   <input type="text" size="40" id="dusername" name="dusername"/>
                   <br/>
                   <br/>
                   
                   </CENTER>
                   <!--<label for="password">Password:</label>-->
                   <span style="display:inline-block; width: 45px;"></span><span class="label label-default">password</span> 
                   <br/> <?php echo form_error('password'); ?>
                   <CENTER>
                   <!-- Input for the password -->
                   <input type="password" size="40" id="dpassowrd" name="dpassword"/>
                   <br/>
                   <br/>
                   
                   </CENTER>
                   <!--<label for="password Confirmation">Password Confirmation:</label>-->
                   <span style="display:inline-block; width: 45px;"></span><span class="label label-default">Password Cofirmation</span> 
                   <br/> <?php echo form_error('password'); ?>
                   <CENTER>
                   <!-- Input for the password confirmation -->
                   <input type="password" size="40" id="passconf" name="passconf"/>
                   <br/>
                   <br/>
                   
                   </CENTER>
                   <!--<label for="email">email:</label>-->
                   <span style="display:inline-block; width: 45px;"></span><span class="label label-default">email</span> 
                   <br/> <?php echo form_error('email'); ?>
                   <CENTER>
                   <!-- Input for the email -->
                   <input type="text" size="40" id="demail" name="demail"/>
                   <br/>
                   <br/>
                   
                   </CENTER>
                   <!--<label for="Affiliate">Affiliate:</label>-->
                   <span style="display:inline-block; width: 45px;"></span></span><span class="label label-default">affiliate</span> 
                   <br/> 
                   <br/> 
                   
                   <!-- Input for the affiliate -->
                   <?php echo form_error('affiliate'); ?>
                   
                   <span style="display:inline-block; width: 40px;"></span><input type="radio" name="affiliate" value="Garuda Union" checked> Garuda Union<br/> 
                   <span style="display:inline-block; width: 40px;"></span><input type="radio" name="affiliate" value="The Wing of Garuda"> The Wing of Garuda<br/> 
                   <span style="display:inline-block; width: 40px;"></span><input type="radio" name="affiliate" value="Wyzen Shipyard"> Wyzen Shipyard<br/> 
                   <span style="display:inline-block; width: 40px;"></span><input type="radio" name="affiliate" value="Slepier Rhaplanca"> Slepier Rhaplanca<br/> 
                   <span style="display:inline-block; width: 40px;"></span><input type="radio" name="affiliate" value="Garuda Republic"> Garuda Republic 
                   
                   <br/>
                   <br/>
                   <!--<label for="Character code">Character Code:</label>-->
                   <span style="display:inline-block; width: 45px;"></span></span><span class="label label-default">Character Code</span> 
                   <?php echo form_error('charcode'); ?>
                   <CENTER>
                   <!-- Input for the email -->
                   <input type="text" size="40" id="charcode" name="charcode"/>
                   <br/>
                   <br/>
                   
                   </CENTER>
                   <br/>
                   <br/>
                   <span class="label label-default">Your Character Picture Code</span> 
                   
                   <p class="section-paragraph">How to get it : search your name in <a href="https://zkillboard.com">zkillboard.com</a> and at the end of url there will be a code like https://zkillboard.com/character/<span style="display:inline-block; width: 45px;"></span></span><span class="label label-default">yourcharactercode</span>/</p>
                   
                   <p class="section-paragraph">put that "yourcharactercode" in the Character Code field above without " ".</p>
                   
                   <CENTER>
                   <!--<input type="submit" value="Login"/>-->
                   <button type="submit" class="btn btn-lg btn-default" value="Submit">Submit</button>
                   </CENTER>
                   <?php echo form_close(); ?><br/>
                   

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