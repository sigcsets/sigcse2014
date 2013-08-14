<?php
 $title = "SIGCSE 2014 - Atlanta, GA";
 $nav_menu = "home";
 include("parts/top.php");
?>

<li><a href="#welcome"><i class="icon-chevron-right"></i> Welcome</a></li>
<li><a href="#supporters"><i class="icon-chevron-right"></i> Supporters</a></li>

<?php 
  include("parts/middle.php"); 
?>

<noscript>
<div class="alert alert-error"><i class="icon-exclamation-sign"></i> Javascript is required to navigate the SIGCSE 2014 Web site. Please enable Javascript in your browser.</div>	
</noscript>

<div class="row-fluid">
  <div class="span8">
  	<img src="<?php echo $prefix ?>/img/sigcse_logo_large.png" width="360" style="display:block;margin-left:auto; margin-right:auto;"/>

	<div style="text-align: center;" id="welcome"><h2>Welcome!</h2></div>
    <p>SIGCSE 2014 continues our long tradition of bringing together colleagues from around the world to present papers, panels, posters, special sessions, and workshops, and to discuss computer science education in birds-of-a-feather sessions and informal settings. The SIGCSE Technical Symposium addresses problems common among educators working to develop, implement and/or evaluate computing programs, curricula, and courses. The symposium provides a forum for sharing new ideas for syllabi, laboratories, and other elements of teaching and pedagogy, at all levels of instruction.</p>
    <p>Submissions in line with the conference theme, “Leveraging Computing to Change Education,” are encouraged. The theme focuses our attention on how computing influences the way we educate at all levels. This influence includes applications designed to support student learning, the curricular impact of computing, learning research, and the impact of technology in all forms of education. We want to look beyond the conventional computer science education boundaries for connections as well.</p>
	<div class="alert alert-success"><a href="<?php echo $prefix ?>/authors/index.php">View the Call For Participation</a>
	</div>

    <hr/>
    <div style="text-align: center;" id="supporters"><h2>SIGCSE 2014 Supporters</h2></div>
      	<div class="row-fluid">
          <div class="span12 center">
	       <h4>Platinum Supporter</h4>
	       <a href="http://www.microsoft.com/faculty"><img src="<?php echo $prefix ?>/img/mslogo.jpg" width="360"/></a>
	       <h4>Gold Supporter</h4>
	       <a href="http://www.abet.org/"><img src="<?php echo $prefix ?>/img/abetlogo.png" /></a>
        <h4>Silver Supporter</h4>
         <a href="http://www.oracle.com/index.html"><img src="<?php echo $prefix ?>/img/oracle_logo.gif" /></a>
	      
	      </div>
        </div>


    <hr/>
	
  </div>
  <div class="span4">
	<div style="text-align: center;"></div>
	<g:plus href="https://plus.google.com/105068073150868262530" size="badge"></g:plus>
	
	<a class="twitter-timeline" href="https://twitter.com/SIGCSE_TS" data-widget-id="348908823358099456">Tweets by @SIGCSE_TS</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
</div>


<?php
 include("parts/bottom.php");
?>