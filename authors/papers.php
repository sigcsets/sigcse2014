<?php
 $title = "Guide for Paper Authors [SIGCSE 2014]";
 $nav_menu = "authors";
 include("../parts/top.php");
?>

<li><a href="#dates"><i class="icon-chevron-right"></i> Important Dates</a></li>
<li><a href="#kinds"><i class="icon-chevron-right"></i> What Kinds Of Papers Are Customary?</a></li>
<li><a href="#formatting"><i class="icon-chevron-right"></i> How Should The Paper Be Formatted?</a></li>
<li><a href="#submit"><i class="icon-chevron-right"></i> How Do I Submit My Paper?</a></li>
<li><a href="#presentation"><i class="icon-chevron-right"></i> Presentation Notes</a></li>
<li><a href="#questions"><i class="icon-chevron-right"></i> Questions</a></li>

<?php 
  include("../parts/middle.php"); 
?>

<div class="row-fluid">
 <div class="span12" style="text-align: center;">
   <h1 class="section">Paper Submission Guidelines</h1>
 </div>
</div>

<div class="alert alert-error">By SIGCSE policy, at least one author of each accepted paper is required to register, attend and present the paper.</div>
<?php
 if ($submissionReady)
   echo "<div class=\"alert alert-info\">Ready to submit? Read the guidelines below, then <a href=\"" . $submissionURL . "\">click here to start the submission process.</a></div>";
?>

<div class="row-fluid">
 <div class="span12" style="text-align: center" id="dates">
      <h2 class="section">Important Dates for Paper Authors</h2>
      <table class="table table-striped">
       <tr>
        <td align="left" valign="top">Submission Deadline:</td><td align="left" nowrap="nowrap"><? echo $mainSubmissionDeadline; ?></td>
       </tr>
       <tr><td align="right" colspan="2">
@11:59 p.m. Hawaii-Aleutian Standard Time (HST)</td>
       </tr>
       <tr>
  	    <td align="left">Author Notification:</td><td align="left" nowrap="nowrap"><? echo $mainNotificationDeadline; ?></td>
       </tr>
       <tr>
 	    <td align="left">Updates to Paper Title &amp; Authors:</td><td align="left" nowrap="nowrap"><? echo $mainUpdatesDeadline; ?></td>
       </tr>
       <tr>
  	    <td align="left">Camera-Ready Copy:</td><td align="left" nowrap="nowrap"><? echo $mainCameraReadyDeadline; ?></td>
       </tr>
      </table>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="kinds"><h2 class="section">What Kinds Of Papers Are Customary?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>We invite papers falling into the following four broad classes.</p>
<ul>
 <li><strong>Experience Reports</strong> describe an idea, course or classroom experience that worked well and is now recommended to others.</li>
 <li><strong>Research Studies</strong> present a careful study, with an appropriate use of methodology (e.g., case study, qualitative methods, quasi-experimental, experimental) to support the investigation and stated results. The methodology does not need to be quantitative; it does, however, need to be appropriate to support the claims made by the author.</li>
 <li><strong>Philosophical Papers</strong> present an argument for a direction or idea to be considered in our curriculum, a particular course, or the overall field.</li>
 <li><strong>Tool Papers</strong> present courseware or a concrete process that has been developed and is now ready for wider use.</li>
</ul>
<p>In all cases, papers must be original work; they should include a review of previous, related work that helps place the submitted work into context. All results and arguments presented should follow clearly from the evidence provided in the paper.</p>
<p>Within the broad classes above, we encourage submissions that address any of the following course-related areas:</p>
<table class="table table-striped table-bordered">
 <tr>
  <td>Algorithms</td>
  <td>Architecture/Hardware</td>
  <td>Artificial Intelligence/Machine Learning</td>
 </tr>
 <tr>
  <td>Compiler / Programming Languages &amp; Paradigms</td>
  <td>Computational Science</td>
  <td>CS 1/2</td>
 </tr>
 <tr>
  <td>Database/Data Mining</td>
  <td>Data Structures</td>
  <td>Discrete Mathematics</td>
 </tr>
 <Tr>
  <td>Distributed/Parallel Computing/HPC</td>
  <td>Graphics/Visualization</td>
  <td>Human-Computer Interaction</td>
 </tr>
 <tr>
  <td>Networking</td>
  <td>Operating Systems</td>
  <td>Real time/Embedded Systems</td>
 </tr>
 <tr>
  <td>Privacy/Security</td>
  <td>Software Engineering</td>
  <td>Theory</td>
 </tr>
</table>

<p>You may also consider submitting a paper in one of the following general topic areas:</p>
<table class="table table-striped table-bordered">
 <tr>
  <td>Active Learning</td>
  <td>Accessibility</td>
  <td>AP/IB Courses &amp; Curricula</td>
  <td>Assessment</td>
 </tr>
 <tr>
  <td>Classroom Management</td>
  <td>Communication Skills</td>
  <td>Computers and Society</td>
  <td>CS Ed Research</td>
 </tr>
 <tr>
  <td>Curriculum Issues</td>
  <td>Distance Education</td>
  <td>Ethics</td>
  <td>Gender and Diversity</td>
 </tr>
 <tr>
  <td>Graduate Studies</td>
  <td>History of Computing</td>
  <td>Information Systems</td>
  <td>Information Technology</td>
 </tr>
 <tr>
  <td>Instructional Technologies</td>
  <td>K-12 Instruction</td>
  <td>Laboratory Experience</td>
  <td>Multimedia</td>
 </tr>
 <tr>
  <td>New Curriculum / Program / Degree Initiatives</td>
  <td>Non-majors</td>
  <td>Non-traditional Students</td>
  <td>Object-Oriented Issues</td>
 </tr>
 <tr>
  <td>Outreach</td>
  <td>Professional Practice</td>
  <td>Student Research/Capstones/Internships</td>
  <td>Web-based Techniques</td>
 </tr>
</table>

<p>Descriptions of each of these paper categories can be found at the 
<?php if ($submissionReady) {
 echo $submissionLink;
} else {
 echo "<em>online topic display site (coming soon)</em>";
} 
?>. When you submit your paper, we will request that you indicate the broad class you believe the paper fits into as well as up to three categories from the course-related and general topic areas.
		</p>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="formatting"><h2 class="section">How Should The Paper Be Formatted?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>Authors must submit <b>two versions</b> of their paper: a "publication" version that includes author/institution information, and an anonymized version. The goal of the anonymized version is to, as much as possible, allow the author(s) of the paper an unbiased review. The anonymized version should have ALL references to the authors removed (including author's names and affiliation plus identifying information within the body of the paper such as websites or related publications).  Self-citations need not be removed if they are worded  so that the reviewer doesn't know if the writer is citing himself/herself. That is, instead of writing "We reported on our first experiment in 2007 in a previous paper [1]", the writer might write "In 2007, an initial experiment was done in this area as reported in [1]."</p>
            
<p>The publication version is available for use by the Program Committee. Both versions are limited to a <strong>maximum of 6 pages</strong> and must adhere to the <a href="format.php">SIGCSE <? echo $conferenceYear; ?> Format Instructions</a>. <a href="http://www.acm.org/sigs/pubs/proceed/template.html">Templates are available in Word, WordPerfect, and LaTeX</a>.</p>
<p>If your paper is accepted you will have a chance to modify your publication version before it is published.</p>
<p>Electronic submission of papers is required.</p>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="submit"><h2 class="section">How Do I Submit My Paper?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<ol>
 <li>Write your paper using the format specified above. Make sure that you have two versions of the paper: the publication version and an anonymized version. Within the paper, you must provide Category and Subject Descriptors, General Terms, and Keywords based on the ACM classification system. These requirements are described in more detail in the <a href="format.php">SIGCSE 2012 Format Instructions</a>.</li>
 <li> Convert your paper into Adobe PDF format. Refer to our <a href="creating_pdf.php">Creating Adobe PDF Documents page</a> for assistance.</li>
 <li> Submit both versions using the
<?php if ($submissionReady) {
 echo $submissionLink;
} else {
 echo "<em>online paper submission form (coming soon)</em>";
} 
?>. Note that there are several ways you must categorize your paper submission in the online system. The broad classification you choose allows the reviewer to evaluate the paper from an appropriate perspective. The course and general topic categories you choose are used to select the reviewers who will evaluate your paper. To increase the likelihood that your paper will be given to a reviewer who is familiar with the content of your paper, choose one broad classification and at most three course-related and/or general topic areas that best fit your paper. <strong>Selection of more than four content categories may result in automatic rejection of your paper.</strong></li>
 <li>Please do not wait until the last minute to submit your documents, because that is when everyone else will be connecting to our server!</li>
 <li>Make note of the paper ID number and password assigned to your submission. You will receive an e-mail message confirmation. Spam filters sometimes trap these automatically generated messages so you may need to check your spam trap for the confirmation and later, acceptance or rejection notification.</li>
 <li> After receiving confirmation, go to the 
<?php if ($submissionReady) {
 echo $submissionLink;
} else {
 echo "<em>author verification form (coming soon)</em>";
}
?> to review your submission for accuracy.  Send e-mail to <script>write_email("sigcse2014-program", "ggc.edu");</script> (Adrienne Decker and Kurt Eiselt) if there are any problems.</li>
</ol>

<p><strong><i>Deadline:</i></strong> All electronic submissions must be <strong>received</strong> by <span class="label label-important"><? echo $mainSubmissionDeadline; ?></span> at 23:59 (11:59 p.m.) Hawaii-Aleutian Standard Time (HST).</p>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="presentation"><h2 class="section">Presentation Notes</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<ul>
 <li><strong>All presenters must register for the conference</strong>.</li>
 <li>Paper presentations are <strong>25 minutes</strong> in length. Five minutes of that time should be reserved for answering questions from the audience.</li>
 <li>Plan to attend the <strong>speakers' breakfast</strong> on the morning of your presentation to meet your session chair and to discuss the transitions between the presentations in your session.</li>
 <li>The conference supplies a projector but not a laptop. You will need to <strong>bring a laptop or arrange to use one from another attendee</strong>. You may want to contact your session chair or other speakers in your session to arrange sharing. (If neither you, the other session speakers, nor the session chair have a laptop,
send an email to <script>write_email("sigcse2014-program", "ggc.edu");</script>.)</li>
 <li>Bring a <strong>backup copy</strong> of your presentation on a USB stick. Session chairs may request that presenters arrange to make all presentations from a single laptop.</li>
 <li>Wireless Internet access should be available during your presentation, but please be aware that there is always a potential for failure.</li>
 <li>Arrive at your room <strong>at least 10 minutes before</strong> the session is scheduled to begin.</li>
</ul>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="questions"><h2 class="section">Questions</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">

<p>If you have questions about paper submissions, please contact SIGCSE <? echo $conferenceYear; ?> Program Chairs:<br/>
	Adrienne Decker<br/>
	Rochester Institute of Technology<br/>
    &nbsp;<br/>
	Kurt Eiselt<br/>
	University of British Columbia<br/>
	<script>write_email( "sigcse2014-program", "ggc.edu" );</script>	
 </div>
</div>

<?php
 include("../parts/bottom.php");
?>        
