<?php
 $title = "SIGCSE 2014 - Atlanta, GA";
 $nav_menu = "home";
 include("parts/top.php");
?>

<div class="row-fluid">
  <div class="span12" style="text-align: center;">
    <h1>SIGCSE 2014</h1>
  </div>
</div>

<div class="row-fluid">
  <div class="span8">
	<div style="text-align: center;"><strong>Welcome!</strong></div>
    <p>SIGCSE 2014 continues our long tradition of bringing together colleagues from around the world to present papers, panels, posters, special sessions, and workshops, and to discuss computer science education in birds-of-a-feather sessions and informal settings. The SIGCSE Technical Symposium addresses problems common among educators working to develop, implement and/or evaluate computing programs, curricula, and courses. The symposium provides a forum for sharing new ideas for syllabi, laboratories, and other elements of teaching and pedagogy, at all levels of instruction.</p>
    <p>Submissions in line with the conference theme, “Leveraging Computing to Change Education,” are encouraged. The theme focuses our attention on how computing influences the way we educate at all levels. This influence includes applications designed to support student learning, the curricular impact of computing, learning research, and the impact of technology in all forms of education. We want to look beyond the conventional computer science education boundaries for connections as well.</p>

	<div class="row-fluid">
	  <div class="span12">
		<p><strong>Call For Participation</strong><br/>
	    <a href="<?php if ($local) echo "/sigcse2014" ?>/authors/index.php">View the Call For Participation</a></p>
	  </div>
	</div>
  </div>
  <div class="span4">
	<div style="text-align: center;"><strong>Connect!</strong></div>
	<g:plus href="https://plus.google.com/105068073150868262530" size="badge"></g:plus>
	
	<script src="http://widgets.twimg.com/j/2/widget.js" type="text/javascript"></script>
<script type="text/javascript">
new TWTR.Widget({
version: 2,
type: 'profile',
rpp: 4,
interval: 6000,
width: 250,
height: 300,
theme: {
shell: {
background: '#333333',
color: '#ffffff'
},
tweets: {
background: '#000000',
color: '#ffffff',
links: '#4aed05'
}
},
features: {
scrollbar: true,
loop: false,
live: true,
hashtags: true,
timestamp: true,
avatars: true,
behavior: 'all'
}
}).render().setUser('sigcse_ts').start();
</script>
  </div>
</div>


<?php
 include("parts/bottom.php");
?>