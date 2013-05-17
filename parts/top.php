<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php 
// Global configuration
$submissionReady = false;
$abstractCharLimit = "800 characters";
$prefix = "";
if (in_array($_SERVER['HTTP_HOST'], array("localhost")))
  $prefix = "/sigcse2014";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo $prefix ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $prefix ?>/css/bootstrap-example.css" rel="stylesheet">
    <link href="<?php echo $prefix ?>/css/bootstrap-responsive.css" rel="stylesheet">

    <script src="<?php echo $prefix ?>/js/site.js"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->

	 <link href="https://plus.google.com/105068073150868262530/" rel="publisher" />

  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="muted"><img src="<?php echo $prefix ?>/img/sigcse_logo_small.png" /> SIGCSE 2014 - March 5–8, 2014, Atlanta, GA  &nbsp;</h3>         

        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
	            <?php
	              $clazz = "";
	              if ($nav_menu == "home")
	                $clazz = "active";
	            ?>
                <li class="<?php echo $clazz ?>"><a href="<?php echo $prefix  ?>/"><i class="icon-home"></i> Home</a></li>
				<?php
	              $clazz = "";
	              if ($nav_menu == "authors")
	                $clazz = "active";
	            ?>
                <li class="dropdown <?php echo $clazz ?>">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Authors <b class="caret"></b></a>
	              <ul class="dropdown-menu">
		            <li><a href="<?php echo $prefix ?>/authors/index.php">Call For Participation</a></li>
		          </ul>
	            </li>

                <?php
                  $clazz = "";
                  if ($nav_menu == "exhibitors")
                    $clazz = "active";
                ?>
                <li class="<?php echo $clazz ?>"><a href="<?php echo $prefix  ?>/exhibitors/"> Exhibitors/Supporters</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
		<div class="g-plusone" data-size="medium" data-annotation="inline" data-width="200" data-href="http://sigcse2014.sigcse.org/"></div>
		<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://sigcse2014.sigcse.org" data-text="SIGCSE 2014" data-via="sigcse_ts" data-hashtags="sigsce">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		<div class="fb-like" data-href="http://sigcse2014.sigcse.org" data-send="false" data-layout="button_count" data-width="300" data-show-faces="true" style="top:-3px; left:3px;"></div>
      </div>
