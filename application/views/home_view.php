<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Home</title>

   <!-- Favicon -->
    
    <link rel="icon" type="image/vnd.microsoft.icon"
     href="favicon.ico" />
   
   <!-- favicon end here -->

   	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Satrio NP/Arven Sahara Levan">

    <!-- Favicon -->
    <link rel="icon" type="image/vnd.microsoft.icon"
     href="favicon.ico" />

    <title>Garuda Community</title>

	<link rel="stylesheet" href="<?php echo base_url("style/css/bootstrap.css"); ?>">
	
	<link rel="stylesheet" href="<?php echo base_url("style/css/full-width-pics(private_home).css"); ?>">

	<script type="text/javascript" src="<?php echo base_url("style/js/bootstrap.js"); ?>"></script>

 </head>
 
 <body>

 	<!-- jQuery -->
    <script src="<?php echo base_url("style/js/jquery.js"); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
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
                <a class="navbar-brand" href="<?php echo base_url("/home/index");?>">Garuda Union Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url("/Home/memberlist");?>">User list</a>
                    </li>
                    <li>
                        <a href="https://zkillboard.com/corporation/98296037/" target="_blank">ZKillboard</a>
                    </li>
                    <li>
                        <a href="http://forum.garudaunion.com">Forum</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("/Welcome/Discord");?>">Discord</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("/home/logout");?>">Log Out</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("/Welcome/regist");?>">Register</a>
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
                  <h1 class="section-heading">Welcome <?php echo $username; ?>!</h1>
                  <p class="lead section-lead">Indonesian Capsuleer </p>
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
                  <h1 class="section-heading">Member online status</h1>
                  
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