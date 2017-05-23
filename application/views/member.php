<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <!-- Favicon -->
    
    <link rel="icon" href="<?php echo base_url(); ?>favicon.ico" type="image/gif">
    
    <link rel="apple-touch-icon" sizes="57x57" href="icon/GUNicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icon/GUNicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icon/GUNicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icon/GUNicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icon/GUNicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icon/GUNicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icon/GUNicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icon/GUNicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icon/GUNicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="icon/GUNicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/GUNicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icon/GUNicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/GUNicon/favicon-16x16.png">
    <link rel="manifest" href="icon/GUNicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="icon/GUNicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Satrio NP/Arven Sahara Levan">

    
    <title>Garuda Community</title>

	<link rel="stylesheet" href="<?php echo base_url("style/css/bootstrap.css"); ?>">
	
    <link rel="stylesheet" href="<?php echo base_url("style/css/full-width-pics.css"); ?>">

	<script type="text/javascript" src="<?php echo base_url("style/js/bootstrap.js"); ?>"></script>
	
</head>
<body>
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- jQuery -->
    <!--<script src="js/jquery.js"></script>-->
    <script src="<?php echo base_url("style/js/jquery.js"); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <!--<script src="js/bootstrap.min.js"></script>-->
    <script src="<?php echo base_url("style/js/bootstrap.min.js"); ?>"></script>

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
                <a class="navbar-brand" href="<?php echo base_url("Welcome/Home");?>">Garuda Union Home Page</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
                    <li>
                        <a href="https://zkillboard.com/corporation/98296037/" target="_blank">ZKillboard</a>
                    </li>
                    <li>
                        <a href="http://forum.garudaunion.com">Forum</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("/login/index");?>">LogIn</a>
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
                <div class="col-lg-12">
                  <h1 class="section-heading">User List</h1>

                  <!--<div class="row">-->
					    <?php foreach($dataanggota as $anggota){ ?>
					        <div class="col-md-2">
					            <img src="<?php echo $anggota['profilepictlink'];?>" class="img-thumbnail img-responsive" alt="Placeholder image">
					            
					            <CENTER><?php echo $anggota['username']; ?></CENTER>
				            	<p>
        						<?php echo $anggota['description']; ?>
					            </p>
					            
				            </div>
			            <?php } ?>
		          <!--</div>-->

                  <p class="section-paragraph"></p>
                  </div>
            </div>
        </div>
    </section>

    <!-- Fixed Height Image Aside -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
    <aside class="image-bg-fixed-height"></aside>

   
    
    <!-- Content Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <h1 class="section-heading"></h1>
                  
                  <p class="lead section-lead">Online Member</p>
                    <iframe src="https://discordapp.com/widget?id=264713082276675587&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
                    <span style="display:inline-block; width: 400px;"></span>
                    <div class="fb-page" data-href="https://www.facebook.com/eveonline/" data-tabs="timeline" data-width="350" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/eveonline/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/eveonline/">EVE Online</a></blockquote></div>
                      
                  
                    
                    <p class="section-paragraph">.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

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
