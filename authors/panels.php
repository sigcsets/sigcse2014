<?php
 $title = "Guide for Panel Submissions [SIGCSE 2014]";
 $nav_menu = "authors";
 include("../parts/top.php");
?>

<li><a href="#dates"><i class="icon-chevron-right"></i> Important Dates</a></li>
<li><a href="#panel"><i class="icon-chevron-right"></i> What Is A Panel?</a></li>
<li><a href="#format"><i class="icon-chevron-right"></i> How Should The Proposal Be Formatted?</a></li>
<li><a href="#submit"><i class="icon-chevron-right"></i> How Do I Submit My Proposal?</a></li>
<li><a href="#presentation"><i class="icon-chevron-right"></i> Presentation Notes</a></li>
<li><a href="#questions"><i class="icon-chevron-right"></i> Questions</a></li>

<?php 
  include("../parts/middle.php"); 
?>

<div class="row-fluid">
 <div class="span12" style="text-align: center;">
   <h1 class="section">Panel Submission Guidelines</h1>
 </div>
</div>
            
<div class="alert alert-error">By SIGCSE policy, all panelists are required to register for the conference, and to attend and participate in their panels.</div>
<?php
 if ($submissionReady)
   echo "<div class=\"alert alert-info\">Ready to submit? Read the guidelines below, then <a href=\"" . $submissionURL . "\">click here to start the submission process.</a></div>";
?>
             
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="dates">
   <h2 class="section">Important Dates for Panel Submissions</h2>
 
   <table class="table table-striped">
     <tr><td align="left">Submission Deadline:</td><td align="left" nowrap="nowrap"><? echo $mainSubmissionDeadline; ?></td></tr>
     <tr><td align="right" colspan="2">@11:59 p.m. Hawaii-Aleutian Standard Time (HST)</td></tr>
     <tr><td align="left">Author Notification:</td><td align="left" nowrap="nowrap"><? echo $mainNotificationDeadline; ?></td></tr>
     <tr><td align="left">Updates to Panel Title &amp; Presenters:</td><td align="left" nowrap="nowrap"><? echo $mainUpdatesDeadline; ?></td></tr>
     <tr><td align="left">Camera-Ready Copy:</td><td align="left" nowrap="nowrap"><? echo $mainCameraReadyDeadline; ?></td></tr>
   </table>
 </div>
</div>
<hr />
  
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="panel"><h2 class="section">What is a Panel?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>Panel sessions provide an opportunity for expert panel members to present their views on a specific topic and then to discuss these views among themselves and with the audience.  Panel sessions run for 75 minutes.  Usually a panel session starts with a brief introduction of the panel topic and the participants, followed by short presentations by the panelists giving their views. The session must allow sufficient opportunity (about 30 minutes) for an interactive question and answer period involving both the panelists and the audience.</p>
<p>A typical panel will consist of four participants, including the moderator.  Limiting a panel to 4 participants allows sufficient time for audience questions.  Proposals with more than four panelists <em>must convincingly show</em> that all panelists will be able to speak, and the audience able to respond, within the session time.</p>
<p>Panel proposal review is not blind. Criteria used in reviewing the proposals include the likely level of interest of the topic, the presence of panel members with multiple perspectives on the topic, and the likelihood that the panel will leave sufficient time for audience participation.</p>
<p>If the proposal is accepted, all presenters listed in the panel description will be required to register for the conference and to participate in the session.</p>
  </div>
</div>

<div class="row-fluid">
 <div class="span12" style="text-align: center" id="format"><h2 class="section">How Should The Proposal Be Formatted?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>The proposal is limited to two (2) pages that conform to the <a href="format.php">SIGCSE 2014 Format Instructions</a> with the following modifications and exceptions:</p>
<ul>
 <li>When providing author information, indicate which of the panelists is the moderator by placing the word &quot;Moderator&quot; in parentheses after her/his name.</li>
 <li>Do not include an abstract. Instead, the first section should be titled <strong>Summary</strong> and should provide a summary of the panel written by the moderator.</li>
 <li>Subsequent sections should contain the position statements of each panelist. Title each section by identifying the author.</li>
 <li> References where appropriate are encouraged, but not required.  If they are included, they should be placed in a separate section titled <strong>References</strong> and should follow the formatting guidelines.</li>
</ul>
<p>If accepted, the panel description will be allocated two (2) pages in the conference proceedings and must adhere to the formatting guidelines specified above.  To facilitate the transition from proposal to camera-ready copy, it is critical that authors adhere closely to the formatting specifications and page limits.</p>
 </div>
</div>

<div class="row-fluid">
 <div class="span12" style="text-align: center" id="submit"><h2 class="section">How Do I Submit My Proposal?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">   
<p>Note that you will be required to submit your proposal electronically.</p>
<ol>
 <li>Write your proposal using the format specified above. Within the proposal, you must provide Category and Subject Descriptors, General Terms, and Keywords, just as paper authors must do.  These requirements are described in more detail in the <a href="format.php">SIGCSE <? echo $conferenceYear; ?> Format Instructions</a>.</li>
<li>Convert your proposal into Adobe PDF format.  Refer to our <a href="creating_pdf.php">Creating Adobe PDF Documents</a> page for assistance.</li>
<li>Submit the PDF version of your proposal using the
<?php if ($submissionReady) {
 echo $submissionLink;
} else {
 echo "<em>online submission form (coming soon)</em>";
}
?>. Note that there are several ways you must categorize your proposal submission in the online system.  These categories are used to select the reviewers who will evaluate your proposal.  Please select no more than 3 categories to ensure the best possible match with a reviewer of similar interests and expertise.</li>
 <li>Please do not wait until the last minute to submit your documents because that is when everyone else will be connecting to our server!</li>
 <li>Make note of the proposal ID number and password assigned to your submission. <strong>You will need them later.</strong> You will receive an e-mail message confirmation. Spam filters sometimes trap these automatically generated messages so you may need to check your spam trap for the confirmation and later, acceptance or rejection notification.</li>
 <li>After receiving confirmation, go to the 
<?php if ($submissionReady) {
 echo $submissionLink;
} else {
 echo "<em>author verification form (coming soon)</em>";
}
?> to review your submission for accuracy. Send e-mail to <script>write_email( "sigcse2014-panels", "ggc.edu" );</script> if there are any problems.</li>
</ol>
<p><strong><i>Deadline:</i></strong> All electronic submissions must be <strong>received</strong> by <span class="label label-important"><? echo $mainSubmissionDeadline; ?></span> at 23:59 (11:59 p.m.) Hawaii-Aleutian Standard Time (HST).</p>
 </div>
</div>

<div class="row-fluid">
 <div class="span12" style="text-align: center" id="presentation"><h2 class="section">Presentation Notes</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">  
<ul>
 <li>All presenters must register for the conference.</li>
 <li>Panel sessions are 75 minutes in length.  The session must allow sufficient opportunity (about 30 minutes) for an interactive question and answer period involving both the panelists and the audience.</li>
 <li>Plan to attend the speakers' breakfast on the morning of your presentation.  This will serve as a convenient time for any final coordination of the presenters.</li>
 <li>The conference supplies a projector but not a laptop. You will need to bring a laptop or arrange to use one from another attendee.</li>
 <li>Bring a backup copy of your presentation on a USB stick. This will make it possible for all presenters on a panel to make their presentations from a single laptop. We especially encourage you to consolidate your individual contributions into a single presentation. This will result in smoother transitions from one speaker to another.</li>
 <li> Wireless Internet access should be available during your presentation, but you should, of course, be aware that there is always potential for failure.</li>
 <li> Arrive at your room at least 10 minutes before the panel session is scheduled to begin.</li>
</ul>
 </div>
</div>

<div class="row-fluid">
 <div class="span12" style="text-align: center" id="questions"><h2 class="section">Questions</h2></div>
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