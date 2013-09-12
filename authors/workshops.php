<?php
 $title = "Workshop Submission Guidelines [SIGCSE 2014]";
 $nav_menu = "authors";
 include("../parts/top.php");
?>

<li><a href="#dates"><i class="icon-chevron-right"></i> Important Dates</a></li>
<li><a href="#what"><i class="icon-chevron-right"></i> What Is a Workshop?</a></li>
<li><a href="#labs"><i class="icon-chevron-right"></i> Hands-On Lab-Based Workshops</a></li>
<li><a href="#format"><i class="icon-chevron-right"></i> How Should The Proposal Be Formatted?</a></li>
<li><a href="#submit"><i class="icon-chevron-right"></i> How Do I Submit My Proposal?</a></li>
<li><a href="#questions"><i class="icon-chevron-right"></i> Questions?</a></li>

<?php 
  include("../parts/middle.php"); 
?>

<div class="row-fluid">
 <div class="span12" style="text-align: center;">
   <h1 class="section">Workshop Submission Guidelines</h1>
 </div>
</div>

<div class="alert alert-error">By SIGCSE policy, at least one author of each accepted paper is required to register, attend and present the paper.</div>
<?php
 if ($submissionReady)
   echo "<div class=\"alert alert-info\">Ready to submit? Read the guidelines below, then <a href=\"" . $submissionURL . "\">click here to start the submission process.</a></div>";
?>

<div class="row-fluid">
 <div class="span12" style="text-align: center" id="dates">
  <h2 class="section">Important Dates for Workshops</h2>
   <table class="table table-striped">
     <tr><td align="left">Submission Deadline:</td><td align="left" nowrap="nowrap"><? echo $mainSubmissionDeadline; ?></td></tr>
     <tr><td align="right" colspan="2">@11:59 p.m. Hawaii-Aleutian Standard Time (HST)</td></tr>
     <tr><td align="left">Presenter Notification:</td><td align="left"><? echo $mainNotificationDeadline; ?></td></tr>
     <tr><td align="left">Updates to Titles, Authors, &amp; Abstracts Due:</td><td align="left"><? echo $mainUpdatesDeadline; ?></td></tr>
     <tr><td align="left">Software Distribution URLs (for Hands-On Labs) Due:</td><td align="left"><? echo $workshopUrlDeadline; ?></td></tr>
   </table>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="what"><h2 class="section">What Is a Workshop?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">   
<p>Workshops provide an in-depth review of, or introduction to, a topic of interest, and should provide participants with materials and/or ideas that are immediately useful in the classroom. To this end, workshop presenters should provide participants with handouts outlining the workshop material. We plan to support a number of workshops involving <a href="#labs">hands-on computer use by participants</a>. All SIGCSE <? echo $conferenceYear; ?> workshops will be half-day workshops (3 hours).</p>
<p>Workshop Proposals undergo review but <strong>not</strong> blind review.  Proposals are evaluated for <strong>relevance, anticipated interest, quality, and availability of appropriate facilities</strong>. You may want to review the list of SIGCSE 2011 workshops (<a href="http://db.grinnell.edu/sigcse/sigcse2011/Program/viewAcceptedDayTime.asp?timeID=119002200">1-12</a>, <a href="http://db.grinnell.edu/sigcse/sigcse2011/Program/viewAcceptedDayTime.asp?timeID=319002200">13-25</a>, and <a href="http://db.grinnell.edu/sigcse/sigcse2011/Program/viewAcceptedDayTime.asp?timeID=415001800">26-35</a>) prior to submitting a proposal.</p>
<p>SIGCSE will reimburse presenters for handouts (up to $5 per participant) and will provide one night free lodging per workshop (not per presenter) at the conference hotel.</p>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="labs"><h2 class="section">Hands-On Lab-Based Workshops</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p><strong>All</strong> hands-on workshops at SIGCSE <? echo $conferenceYear; ?> will use participants' laptop computers at the conference site. The Symposium Committee will help presenters distribute workshop software to participants prior to the Symposium, e.g., by providing attendee e-mail addresses for software distribution.  Distribution of software is the responsibility of the workshop leaders.  We recommend that the organizers of each hands-on workshop create their own web page (on their own server) with all necessary software and instructions for installation. To accommodate late registrations, we will collect these URLs and make them available to late registrants when they register on-site. We will also provide presenters with mailing lists containing the emails of current enrollees soon after the close of the early registration window.</p>
<p>Proposers of hands-on workshops should indicate which of the following formats they wish for their workshop:</p>
<ul>
 <li><strong>Laptop Required</strong>. Participants should bring a laptop computer to participate in this workshop.</li>
 <li><strong>Laptop Recommended</strong>. It is recommended, but not required, that participants bring a laptop computer to this workshop.</li>
 <li><strong>Laptop Optional</strong>. It is not necessary for participants to bring laptops to this workshop.</li>
</ul>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="format"><h2 class="section">How Should The Proposal Be Formatted?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>Workshop proposals consist of <strong>two</strong> documents: the full workshop proposal and a workshop abstract. The full proposal is used for the review process only. The abstract is the description that appears on the Symposium web site and in the Symposium program and proceedings. The format of these documents should be as follows.</p>
<ol>
 <li><strong>Full Workshop Proposal Format (limited to 3 pages, including the title page)</strong>
  <p style="font-size: 1.0em">The first page is a title page that must contain only the workshop title and presenters (items a and b below).  The remaining information (items c through j below) must fit on no more than two pages total written in Times Roman, 12 pt. font.  The page format is for 8 1/2 x 11 paper, 1 column, single spaced, and 1 inch margins (top, bottom, left, right). Include all of the following information, in the order given below:</p>
  <ul style="list-style-type: lower-alpha;">
   <li><strong>Workshop Title</strong></li>
   <li><strong>Presenters</strong>
    <ol>
     <li><strong>Contact Person</strong>: (name; department; college, university, or other affiliation; address; telephone number; fax number; e-mail address)</li>
     <li><strong>Other presenters</strong>: one entry for each other presenter (name; department; college, university, or other affiliation; e-mail address)</li>
    </ol>
   </li>
   <li><strong>Abstract (Description of the Workshop)</strong>: Describe your workshop in at most <?php echo $abstractCharLimit; ?> (including whitespace). This should match verbatim the abstract described below.</li>
   <li><strong>Intended Audience</strong>: For whom is this workshop intended?</li>
   <li> <strong>Presenter(s) Background/Biography</strong>: Provide a brief biography addressing the presenter(s) qualifications for leading the proposed workshop.</li>
   <li> <strong>Materials Provided</strong>: Describe any handouts, software or other materials that will be provided to attendees.</li>
   <li><strong>Rough Agenda for the Workshop</strong>: Timing details would be helpful here.</li>
   <li><strong>Audio/Visual and Computer Requirements</strong>: Indicate your A/V requirements, such as wireless access, wired access, extra power outlets, microphone, digital projector, overhead projector, flip charts and pens, whiteboards, etc. Please note that certain A/V materials and equipment will be available for all workshops. Specialty items may require the minimum registrants for a workshop to be raised to cover additional costs. At the time of acceptance, more information about the standard vs. non-standard A/V equipment will be available. For hands-on workshops, indicate Laptop Recommended, Laptop Required, or Laptop Optional (see " Hands-on Lab-based Workshops " above) and which OSs are supported (Linux, Mac, Windows). Describe any special requirements for attendees' computers.</li>
   <li><strong>Space and Enrollment Restrictions</strong>: Please tell us the maximum number of participants that you can accommodate.  If no limit is specified, we will assume a cap of 30 participants. Be aware that, if interest is strong, we may seek to raise the limit to 40 or more. Also indicate any special restrictions on the configuration of the room (flip chart easels, clear floor space for robots, etc.).</li>
   <li><strong>Other Critical Information</strong>: Other notes that will help to evaluate your proposal according to the evaluation criteria described above.</li>
  </ul>
  <p style="font-size: 1.0em">Here are sample Full Workshop Proposals:</p>
  <ul>
   <li><a href="<?php echo $prefix ?>/downloads/workshopProposalsample.doc" onclick="target='newwindow'">Workshop Proposal Example (Word)</a></li>
   <li><a href="<?php echo $prefix ?>/downloads/workshopProposalsample.pdf" onclick="target='newwindow'">Workshop Proposal Example (PDF)</a></li>
  </ul>
  </li><br/>
  <li><strong>Workshop Proposal Abstract (Limited to <?php echo $abstractCharLimit; ?>, including whitespace)</strong>
   <p>The abstract is the description of the workshop that will appear in SIGCSE publications and is what participants will read on the Symposium web site to decide which workshops to attend. This year we are asking that you include information about the intended audience and computing requirements <strong>in the abstract</strong> to help readers make that choice.</p>
  <p>The description is limited to <?php echo $abstractCharLimit; ?> (including whitespace) and must match verbatim the abstract section of the Full Workshop Proposal.</p>
  <p>The workshop proposal abstract must be submitted in plain text. The abstract for an accepted proposal may contain a URL with more information for participants. (Abstracts of accepted workshops can be edited in response to reviews for the camera-ready submission.)</p>
 </li>
</ol>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="submit"><h2 class="section">How Do I Submit My Proposal?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<ol>
 <li>Write your proposal and abstract documents using the formats specified above.</li>
 <li>Convert the proposal document into Adobe PDF format. Refer to our <a href="creating_pdf.php">Creating Adobe PDF Documents page</a> for assistance.</li>
 <li>Submit the <tt>.pdf</tt> proposal and the <?php echo $abstractCharLimit; ?> (including whitespace) text abstract description using the
<?php if ($submissionReady) {
 echo $submissionLink;
} else {
 echo "<em>online workshop submission form (coming soon)</em>";
} ?>. Note that the text version of the abstract will be published in the various forms of the program and proceedings, and may be formatted and/or edited to meet their requirements.  The proposal, formatted in <tt>.pdf</tt>, is for reviewers only. Please do not wait until the last minute to submit your documents because that is when everyone else will be connecting to our server!</li>
 <li>Make note of the workshop ID number and password assigned to your submission. You will receive an e-mail message confirmation. Spam filters sometimes trap these automatically generated messages. You may need to check your spam trap for the confirmation and, later, for the acceptance or rejection notification.</li>
 <li> After receiving confirmation, go to the
<?php if ($submissionReady) {
 echo $verificationLink;
} else {
 echo "<em>author verification form (coming soon)</em>";
} ?> to review your submission for accuracy.  Send e-mail to <script>write_email( "sigcse2014-workshops", "ggc.ecu" );</script> if there are any problems.</li>
</ol>

<p><strong><i>Deadline:</i></strong> All electronic submissions must be <strong>received</strong> by <span class="label label-important"><? echo $mainSubmissionDeadline; ?></span> at 23:59 (11:59 p.m.) Hawaii-Aleutian Standard Time (HST).</p>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="questions"><h2 class="section">Questions</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>If you have questions about workshop submissions, please contact the SIGCSE 2014 workshop chairs:</p>
<br/>
<p>	Susan Haller<br/>
    SUNY Potsdam<br/>
    &nbsp;</br/>
    Paul Carter<br/>
    University of British Columbia <br/>
    </p>
    <script>write_email("sigcse2014-workshops", "ggc.edu");</script></p>
 </div>
</div>

<?php
 include("../parts/bottom.php");
?>