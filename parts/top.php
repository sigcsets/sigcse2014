<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php 
// Global configuration
$submissionReady = false;
$submissionURL = "http://submiturl";
$abstractCharLimit = "800 characters";

$mainSubmissionDeadline = "Friday, September 6, 2013";
$mainNotificationDeadline = "TBD";
$mainUpdatesDeadline = "TBD";
$mainCameraReadyDeadline = "TBD";

$bofAndPosterDeadline = "Monday, October 28, 2013";
$bofAndPosterNotificationDeadline = "TBD";
$bofAndPosterUpdatesDeadline = "TBD";

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

  <body data-spy="scroll" data-target=".sidebar-nav" data-offset="60">

    <div class="navbar navbar-inverse navbar-fixed-top navbar-border">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<?php echo $prefix ?>/">SIGCSE 2014</a>
          <div class="nav-collapse collapse">
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
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-pencil"></i> Authors <b class="caret"></b></a>
				<ul class="dropdown-menu">
				  <li><a href="<?php echo $prefix ?>/authors/index.php">Call For Participation</a></li>
				  <li><a href="<?php echo $prefix ?>/authors/papers.php">Papers</a></li>
				  <li class="divider"></li>
				</ul>
              </li>
              <?php
			    $clazz = "";
				if ($nav_menu == "exhibitors")
				  $clazz = "active";
			  ?>
			  <li class="<?php echo $clazz ?>"><a href="<?php echo $prefix  ?>/exhibitors/"> Exhibitors/Supporters</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav sidebar-nav-fixed" id="side-navbar">
            <div class="row-fluid">
	          <div class="span6 center"><img src="<?php echo $prefix ?>/img/sigcse_logo_small.png" /></div>
	          <div class="span6 center"><h4>March 5–8, 2014<br/>Atlanta, GA</h4>
		      </div>
	        </div>
            <ul class="nav nav-list bs-docs-sidenav">
