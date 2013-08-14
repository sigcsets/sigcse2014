<?php
 $title = "Reviewer Information [SIGCSE 2014]";
 $nav_menu = "reviewers";
 include("../parts/top.php");
?>

<li><a href="#dates"><i class="icon-chevron-right"></i> Important Dates</a></li>
<li><a href="#volunteer"><i class="icon-chevron-right"></i> How Do I Volunteer to Review?</a></li>
<li><a href="#review"><i class="icon-chevron-right"></i> How Do I Review SIGCSE Submissions?</a></li>
<li><a href="#questions"><i class="icon-chevron-right"></i> Questions?</a></li>

<?php 
  include("../parts/middle.php"); 
?>

<div class="row-fluid">
 <div class="span12" style="text-align: center;">
   <h1>Reviewer Information</h1>
 </div>
</div>

<div class="row-fluid">
 <div class="span12" style="text-align: center" id="dates">
      <h2 class="section">Important Dates for Paper Reviewers</h2>
      <table class="table table-striped">
       <tr>
        <td align="left">Paper Submission Deadline:</td><td align="left"><? echo $mainSubmissionDeadline; ?></td>
       </tr>
       <tr>
  	    <td align="left">Papers to Reviewers:</td><td align="left"><? echo $papersToReviewersDeadline; ?></td>
       </tr>
       <tr>
 	    <td align="left">Reviews Due:</td><td align="left"><? echo $reviewsDeadline; ?></td>
       </tr>
      </table>
 </div>
</div>


<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="volunteer"><h2 class="section">How Do I Volunteer to Review?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>All SIGCSE members are encouraged to participate in the reviewing process.</p>
<ul>
 <li><strong>For New Reviewers</strong> 
  <p>If you are interested in reviewing papers for SIGCSE 2014, you are invited to complete the
<?php if ($reviewSiteReady) {
 echo $reviewerRegistrationURL;
} else {
 echo "<em>reviewer information form (coming soon)</em>";
}
?>. In the box that says "Sign Up — Keycode:" input the code <code>review14</code>.</p> 

<p>After you have filled in your contact information, 
it it <strong>MOST IMPORTANT</strong> to select the topic areas for which you would like to review.

Please limit yourself to areas in which you feel somewhat expert. The system will automatically ask you to consider the areas carefully if you choose more than four.</p></li>
 

 <li><strong>For Those Who Have Previously Reviewed</strong><p>All people currently listed in the reviewer database will receive an e-mail message in August with their current recorded information.</p>
  <ul>
	<li>If you would like to update your information in the database, go to the
<?php if ($reviewSiteReady) {
 echo $reviewerURL;
} else {
 echo "<em>reviewer information form (coming soon)</em>";
}
?> by <strong><? echo $reviewRegistrationDeadline; ?></strong>. Please select your areas of reviewing carefully, limiting yourself to areas in which you have expertise.</li>
   </ul>
 </li>
</ul>
 </div>
</div>


<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="review"><h2 class="section">How Do I Review SIGCSE Submissions?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>Submissions are reviewed according to categories indicated by the authors.  Reviewers will be assigned no more than three papers or six submissions of another type, based on their indicated subject areas of expertise. At least four reviewers are assigned to each.  Papers are only available in electronic PDF format.  Reviewers must use a Web browser and software capable of displaying PDF documents (For example: <a href="http://get.adobe.com/reader/?promoid=BUIGO" target="_blank">Adobe Reader</a>).</p>
<p>The reviewing process has 3 simple steps:</p>
<ol>
 <li> When reviews are assigned, you will be sent an email from the system indicating that you have been assigned submissions to review and given a link that you can use to access those assigned submissions. Become familiar with the review criteria by looking at the 
<?php if ($reviewSiteReady) {
 echo $reviewerURL;
} else {
 echo "<em>proposal review forms (link coming soon)</em>";
}
?> for each category of submission.
Read through the collections of example review text for the types of submissions you are reviewing. Included are examples of comments for good, useful reviews.</li>
  <ul>
   <li><a href="guide_papers.php">Guidelines for Reviewers of Paper Submissions</a></li>
   <li><a href="guide_panels.php">Guidelines for Reviewers of Panel Submissions</a></li>
   <li><a href="guide_sessions.php">Guidelines for Reviewers of Special Session Submissions</a></li>
   <li><a href="guide_workshops.php">Guidelines for Reviewers of Workshop Submissions</a></li>
   <li><a href="guide_bofs.php">Guidelines for Reviewers of Birds of a Feathers (BOFs) Submissions</a></li>
   <li><a href="guide_posters.php">Guidelines for Reviewers of Poster Submissions</a></li> 
  </ul>
  &nbsp;
  </li>
  <li> Access your assigned submission(s) through the submission viewing form 
<?php if ($reviewSiteReady) {
 echo $reviewerURL;
} else {
 echo "<em>submission viewing form (coming soon)</em>";
}
?>.  You may review the submission on-line or print it for review at your leisure.
  <p><strong class="note">If your browser does not open a submission automatically, try saving the file with a .pdf extension and opening it  with Adobe Reader (or another PDF file viewer).  </strong></p>
  <!-- See the <a href="/sigcse2013/faq/reviewers_faq.php">Reviewers FAQ section</a> for additional information.</strong></p> -->
  </li>
  <li>After reviewing, complete a report for each submission.  Submit Reviews by
<?php if ($reviewSiteReady) {
 echo $reviewerURL;
} else {
 echo "<em>review submission form (coming soon)</em>";
}
?>.
  </li>
</ol>

<p><em>Note</em>: All reviews will be distributed anonymously to both the author(s) and reviewers of that submission. This will give the author feedback and provide information to reviewers as well.  It is hoped that, over time, this feedback will help make the review process more consistent as reviewers can compare their responses to those of others.</p>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="questions"><h2 class="section">Questions?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>If you have questions about paper submissions, please contact SIGCSE <? echo $conferenceYear; ?> Program Chairs: <script>write_email( "sigcse2014-program", "ggc.edu" );</script><br/>
	Adrienne Decker<br/>
    Rochester Institute of Technology<br/>
    &nbsp;<br/>
    Kurt Eiselt<br/>
    University of British Columbia</p>
 </div>
</div>

<?php
 include("../parts/bottom.php");
?>