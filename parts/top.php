<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php 
// Global configuration
$submissionReady = false;
$abstractCharLimit = "800 characters";

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
    <link href="/sigcse2014/css/bootstrap.css" rel="stylesheet">
    <link href="/sigcse2014/css/bootstrap-example.css" rel="stylesheet">
    <link href="/sigcse2014/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="muted">SIGCSE 2014 - Atlanta, GA</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
	            <?php
	              $clazz = "";
	              if ($nav_menu == "home")
	                $clazz = "active";
	            ?>
                <li class="<?php echo $clazz ?>"><a href="/sigcse2014/">Home</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>