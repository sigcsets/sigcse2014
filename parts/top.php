<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php 
// Global configuration
$submissionReady = false;
$abstractCharLimit = "800 characters";
$local = false;
if (in_array($_SERVER['HTTP_HOST'], array("localhost")))
  $local = true;
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
    <link href="<?php if ($local) echo "/sigcse2014" ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php if ($local) echo "/sigcse2014" ?>/css/bootstrap-example.css" rel="stylesheet">
    <link href="<?php if ($local) echo "/sigcse2014" ?>/css/bootstrap-responsive.css" rel="stylesheet">

    <script src="<?php if ($local) echo "/sigcse2014" ?>/js/site.js"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="muted">SIGCSE 2014 - March 5–8, 2014, Atlanta, GA</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
	            <?php
	              $clazz = "";
	              if ($nav_menu == "home")
	                $clazz = "active";
	            ?>
                <li class="<?php echo $clazz ?>"><a href="<?php if ($local) echo "/sigcse2014" ?>/"><i class="icon-home"></i> Home</a></li>
				<?php
	              $clazz = "";
	              if ($nav_menu == "authors")
	                $clazz = "active";
	            ?>
                <li class="dropdown <?php echo $clazz ?>">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Authors <b class="caret"></b></a>
	              <ul class="dropdown-menu">
		            <li><a href="<?php if ($local) echo "/sigcse2014" ?>/authors/index.php">Call For Participation</a></li>
		          </ul>
	            </li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>