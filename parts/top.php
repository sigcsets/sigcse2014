<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php 
// Global configuration
$submissionReady = true;
$submissionURL = "https://www.openconf.org/sigcse2014/";
$submissionLink = "<a href=\"https://www.openconf.org/sigcse2014/\">online submission form</a>";
$verificationLink = "<a href=\"https://www.openconf.org/sigcse2014/\">author verification page</a>";
$abstractCharLimit = "800 characters";

$mainSubmissionDeadline = "Friday, September 6, 2013";
$mainNotificationDeadline = "TBD";
$mainUpdatesDeadline = "TBD";
$mainCameraReadyDeadline = "TBD";

$papersToReviewersDeadline = "Monday, September 9, 2013";
$reviewsDeadline = "Monday, September 23, 2013";

$workshopUrlDeadline = "TBD";

$bofAndPosterDeadline = "Monday, October 28, 2013";
$bofAndPosterNotificationDeadline = "TBD";
$bofAndPosterUpdatesDeadline = "TBD";

$srcSubmissionDeadline = "Sunday, September 29, 2013";
$srcNotificationDeadline = "TBD";

$reviewSiteReady = true;
$reviewerRegistrationURL = "<a href=\"https://www.openconf.org/sigcse2014/track1/openconf.php\">reviewer registration form</a>";
$reviewerURL = "<a href=\"https://www.openconf.org/sigcse2014/track1/review/signin.php?OPENCONF=00fe5t2qsg70rggd6fbvlbkvn0\">proposal review site</a>";
$reviewRegistrationDeadline = "August 23, 2013";

$conferenceYear = "2014";

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

  <body data-spy="scroll" data-target=".sidebar-nav" data-offset="70">

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
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Authors <b class="caret"></b></a>
				<ul class="dropdown-menu">
				  <li><a href="<?php echo $prefix ?>/authors/">Call For Participation</a></li>
				  <li><a href="<?php echo $prefix ?>/authors/papers.php">Papers</a></li>
                  <li><a href="<?php echo $prefix ?>/authors/panels.php">Panels</a></li>
                  <li><a href="<?php echo $prefix ?>/authors/special_sessions.php">Special Sessions</a></li>
                  <li><a href="<?php echo $prefix ?>/authors/workshops.php">Workshops</a></li>
                  <li><a href="<?php echo $prefix ?>/authors/bof.php">Birds of a Feather Sessions</a></li>
                  <li><a href="<?php echo $prefix ?>/authors/posters.php">Posters</a></li>
                  <li><a href="<?php echo $prefix ?>/authors/student_research.php">Student Research Competition</a></li>
				  <li class="divider"></li>
                  <li><a href="<?php echo $prefix ?>/authors/final_submission.php">Final Submission Instructions</a></li>
				  <li><a href="<?php echo $prefix ?>/authors/format.php">Formatting Guidelines</a></li>
				  <li><a href="<?php echo $prefix ?>/authors/creating_pdf.php">Creating PDFs</a></li>
				  <li><a href="<?php echo $prefix ?>/authors/noshow.php">Presenter No-Show Policy</a></li>
				</ul>
              </li>

			  <?php
			    $clazz = "";
				if ($nav_menu == "attendees")
				  $clazz = "active";
			   ?>
			  <li class="dropdown <?php echo $clazz ?>">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Attendees <b class="caret"></b></a>
				<ul class="dropdown-menu">
                  <li><a href="<?php echo $prefix ?>/attendees/">General Information / Program</a></li>
				</ul>
			  </li>

			  <?php
			    $clazz = "";
				if ($nav_menu == "reviewers")
				  $clazz = "active";
			   ?>
			  <li class="dropdown <?php echo $clazz ?>">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Reviewers <b class="caret"></b></a>
				<ul class="dropdown-menu">
                  <li><a href="<?php echo $prefix ?>/reviewers/">Reviewer Information</a></li>
			      <li><a href="<?php echo $prefix ?>/reviewers/guide_papers.php">Paper Review Guide</a></li>
			      <li><a href="<?php echo $prefix ?>/reviewers/guide_panels.php">Panel Review Guide</a></li>
			      <li><a href="<?php echo $prefix ?>/reviewers/guide_sessions.php">Special Session Review Guide</a></li>
			      <li><a href="<?php echo $prefix ?>/reviewers/guide_workshops.php">Workshop Review Guide</a></li>
			      <li><a href="<?php echo $prefix ?>/reviewers/guide_bofs.php">Birds of a Feathers (BOFs) Review Guide</a></li>
			      <li><a href="<?php echo $prefix ?>/reviewers/guide_posters.php">Poster Review Guide</a></li>
				</ul>
			  </li>

              <?php
			    $clazz = "";
				if ($nav_menu == "exhibitors")
				  $clazz = "active";
			  ?>
			  <li class="<?php echo $clazz ?>"><a href="<?php echo $prefix  ?>/exhibitors/"> Exhibitors/Supporters</a></li>
			  <?php
				$clazz = "";
				if ($nav_menu == "committee")
				  $clazz = "active";
			   ?>
			  <li class="<?php echo $clazz ?>"><a href="<?php echo $prefix  ?>/committee/"> Program Committee</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
	    <!-- The scrollspy left nav isn't needed on tablets/phones -->
        <div class="span3 visible-desktop">
          <div class="well sidebar-nav sidebar-nav-fixed" id="side-navbar">
            <div class="row-fluid">
	          <div class="span6 center"><img src="<?php echo $prefix ?>/img/sigcse_logo_small.png" /></div>
	          <div class="span6 center"><h4>March 5–8, 2014<br/>Atlanta, GA</h4>
		      </div>
	        </div>
            <ul class="nav nav-list bs-docs-sidenav">
