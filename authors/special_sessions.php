<?php
 $title = "Special Session Submissions [SIGCSE 2014]";
 $nav_menu = "authors";
 include("../parts/top.php");
?>

<li><a href="#dates">Important Dates</a></li>
<li><a href="#what">What Is A Special Session?</a></li>
<li><a href="#format">How Should The Proposal Be Formatted?</a></li>
<li><a href="#submit">How Do I Submit My Proposal?</a></li>
<li><a href="#presentation">Presentation Notes</a></li>
<li><a href="#questions">Questions</a></li>

<?php 
  include("../parts/middle.php"); 
?>

<div class="row-fluid">
 <div class="span12" style="text-align: center;">
   <h1 class="section">Special Session Submission Guidelines</h1>
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
   <tr><td align="left" valign="top">Submission Deadline:</td><td align="left" nowrap="nowrap"><? echo $mainSubmissionDeadline; ?></td></tr>
   <tr><td align="right" valign="top" colspan="2">@11:59 p.m. HST - Hawaii-Aleutian Standard</td></tr>
   <tr><td align="left">Author Notification:</td><td align="left" nowrap="nowrap"><? echo $mainNotificationDeadline; ?></td></tr>
   <tr><td align="left">Updates to Panel Title &amp; Presenters:</td><td align="left" nowrap="nowrap"><? echo $mainUpdatesDeadline; ?></td></tr>
   <tr><td align="left">Camera-Ready Copy:</td><td align="left" nowrap="nowrap"><? echo $mainCameraReadyDeadline; ?></td></tr>
  </table>
 </div>
</div>  

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="what"><h2 class="section">What Is A Special Session?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>Special sessions are your opportunity to customize and experiment with the SIGCSE conference format. Special sessions should <strong>NOT</strong> replicate existing SIGCSE session formats (i.e., panels, paper presentations, and poster sessions). They are 75 minutes in length and are scheduled in standard conference spaces.  Within these constraints, the form is yours to design.</p>
<p>For example, a special session might be a tutorial or seminar, a committee report, a curricular or accreditation forum, a rapid-fire sequence of five-minute talks, or a hands-on demo of dance moves proven to improve retention of CS material.</p>
<p>Possible topic areas include management of large classes, projects and assignments, teaching computer science in K-12, experiments on collaborative learning, report of an ACM committee addressing issues at two-year colleges, or special issues arising when teaching computing outside of North America.</p>
<p>
Special session proposal review is not blind. Criteria used in reviewing the proposals will include the likely level of interest in the session and the suitability and feasibility of the proposed format to its topic.  If the proposal is accepted, all presenters listed in the special session description will be required to register for the conference and to participate in the session.</p>
<p>Note: "risky" sessions (e.g., a "rapid-fire talks" session that has not yet secured committed presenters) should make a compelling argument for how the presenters will ensure the session's success.</p>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="format"><h2 class="section">How Should The Proposal Be Formatted?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>The proposal is limited to two (2) pages that conform to the <a href="format.php">SIGCSE <? echo $conferenceYear; ?> Format Instructions</a> with the following modifications and exceptions:</p>

<ul>
 <li>Do not include an abstract. Instead, the first section should be titled <strong>Summary</strong> and should provide a summary of the session.</li>
 <li>Subsequent sections should contain the following information:
 <ul>
  <li><strong>Overall objective of the session:</strong> Describe the topic of the special session and explain how the session will be organized (e.g., as a committee report, tutorial, hands-on exercise, ...).  Indicate why the proposed session is important.</li>
  <li><strong>Outline of the session:</strong> Organize this section by subtopics, activities, or a similar scheme.  If more than one participant is involved, label each section of the outline with the name of the participant who will be presenting that section.  Note that in the case of a committee report, the presenters might be a subset of the authors.<br/>We suggest that you allow at least 40 - 50% of the time for questions and answers or other interaction with the attendees. All sessions are 75 minutes in length.</li>
  <li><strong>Expectations:</strong> State the intended audience. Indicate how much the session will cover and what the audience should learn.  This is particularly important if your proposed special session is a tutorial. If feedback from the audience is desired, indicate how it will be elicited.  </li>
  <li><strong>Suitability for a special session:</strong> Include a brief description that justifies the inclusion of this presentation as a special session. Explain why the proposed presentation is better suited for a special session than a paper or panel.</li>
 </ul>
 </li>
 <li> References where appropriate are encouraged, but not required.  If they are included, they should be placed in a separate section titled <strong>References</strong> and should follow the formatting guidelines.</li>
</ul>

<p>If accepted, the special session description will be allocated two (2) pages in the conference proceedings and must adhere to the formatting guidelines specified above.  To facilitate the transition from proposal to camera-ready copy, it is critical that authors adhere closely to the formatting specifications and page limits.</p>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="submit"><h2 class="section">How Do I Submit My Proposal?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
 <p>Note that you will be required to submit your proposal electronically.</p>
<ol>
 <li>Write your proposal using the format specified above. Within the proposal, you must provide Category and Subject Descriptors, General Terms, and Keywords, just as paper authors must do.  These requirements are described in more detail in the <a href="format.php">SIGCSE 2012 Format Instructions</a>.</li>
 <li> Convert your proposal into Adobe PDF format.  Refer to our <a href="creating_pdf.php">Creating Adobe PDF Documents</a> page for assistance.</li>
 <li> Submit the PDF version of your proposal using the
	<?php if ($submissionReady) {
	 echo $submissionLink;
	} else {
	 echo "<em>online topic display site (coming soon)</em>";
	} 
	?>. Note that there are several ways you must categorize your proposal submission in the online system.  These categories are used to select the reviewers who will evaluate your proposal.  Please select no more than 3 categories to ensure the best possible match with a reviewer of similar interests and expertise.</li>
 <li> Please do not wait until the last minute to submit your documents because that is when everyone else will be connecting to our server!</li>
 <li>Make note of the proposal ID number and password assigned to your submission. <strong>You will need them later.</strong> You will receive an e-mail message confirmation. Spam filters sometimes trap these automatically generated messages so you may need to check your spam trap for the confirmation and later, acceptance or rejection notification.</li>
 <li> After receiving confirmation, go to the
	<?php if ($submissionReady) {
	 echo $submissionLink;
	} else {
	 echo "<em>online topic display site (coming soon)</em>";
	} 
	?> to review your submission for accuracy. Send e-mail to <script>write_email( "sigcse2013-specials", "ggc.edu" );</script> if there are any problems.</li>
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
 <li>All presenters must register for the conference.</li>
 <li>Panel sessions are 75 minutes in length.  The session must allow sufficient opportunity (about 30 minutes) for an interactive question and answer period involving both the panelists and the audience.</li>
 <li>Plan to attend the speakers' breakfast on the morning of your presentation.  This will serve as a convenient time for any final coordination of the presenters.</li>
 <li>The conference supplies a projector but not a laptop. You will need to bring a laptop or arrange to use one from another attendee.  </li>
 <li>Bring a backup copy of your presentation on a USB stick. This will make it possible for all presenters on a panel to make their presentations from a single laptop. We especially encourage you to consolidate your individual contributions into a single presentation. This will result in smoother transitions from one speaker to another.</li>
 <li>Wireless Internet access should be available during your presentation, but you should, of course, be aware that there is always potential for failure.</li>
 <li>Arrive at your room at least 10 minutes before the panel session is scheduled to begin.</li>
</ul>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="questions"><h2 class="section">Questions?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>Please contact the SIGCSE <? echo $conferenceYear; ?> Panels and Special Sessions Chair with your questions:<br/>
	Stephen Cooper<br/>
    Stanford University<br/>
    <script>write_email("coopers", "stanford.edu");</script></p>
 </div>
</div>
          
<?php
  include("../parts/bottom.php");
?>
