<?php
 $title = "SIGCSE 2012 - Birds of a Feather (\"BOF\") Submission Guidelines";
 $onload = "pageLoad('authors', 'bof');";
 include("../parts/top.php");
?>
<h1>Birds of a Feather ("BOF") Submission Guidelines</h1>   
<div class="Alert">By SIGCSE policy, the proposer and all discussion leaders are required to register for the conference and to be present for the BOF session.</div>          
<div class="GoodMessage">Ready to submit? Read the guidelines below, then <a href="http://www.cs.grinnell.edu/~sigcse/sigcse2012/submission.shtml">click here to start the submission process.</a></div>
             
<table width="99%">
 <tr>
  <td width="30%" align="left" valign="top" nowrap="nowrap">
  <h3>Contents:</h3>
  <ul>
    <li><a href="#what">What Is A Birds Of A Feather?</a></li>
    <li><a href="#format">How Should The Proposal Be Formatted?</a></li>
    <li><a href="#submit">How Do I Submit My Proposal?</a></li>
  </ul>
  
  </td>
  <td width="70%" align="center" valign="top">
    <div class="GoodMessage">
      <h2><a name="kind">Important Dates for BOF Submissions</a></h2>   
      <table>
       <tr>
        <td align="left">Submission Deadline:</td><td align="left" nowrap="nowrap">October 24, 2011</td>
       </tr>
       <tr><td align="right" colspan="2">
@11:59 p.m. Hawaii-Aleutian Standard Time (HST)</td>
       </tr>
       <tr>
  	    <td align="left">Acceptance Notification:</td><td align="left" nowrap="nowrap">November 14, 2011</td>
       </tr>
       <tr>
 	    <td align="left">Updates to BOF Title, Proposer &amp; Abstract:</td><td align="left">December 6, 2011</td>
       </tr>
      </table>
    </div>
  </td>              
 </tr>
</table>
           
           
<div class="SectionHeader"><div class="Full">
<h2><a name="what">What Is A Birds Of A Feather?</a></h2>
</div></div>  
<p>Birds-of-a-Feather (BOF) Sessions provide an environment for colleagues with similar interests to meet for informal discussion.  Proposers of BOF sessions should serve as discussion leaders only.  BOFs are not intended to be presentations.</p>

<div class="SectionHeader"><div class="Full">
<h2><a name="format">How Should The Proposal Be Formatted?</a></h2>
</div></div>  

<p>BOF proposals are to be provided in PDF format.  The full proposal contains an up to <?php echo $abstractCharLimit; ?> (including whitespace) BOF abstract. The abstract needs to appear in two places: in the PDF proposal and in a text box on the submission page (see below). The format for the BOF proposal is as follows.</p>

<ol>
 <li><strong>BOF Proposal Format and Contents (limited to 1 page)</strong>
 <ol>
  <li><strong>Proposer</strong>: Include name, affiliation, address, phone and fax numbers, email address, and Website address (if applicable). This item does not count in the page limit. Birds of a Feather proposals do not undergo blind review, so this information should be included.  You should expect most correspondence related to the conference to arrive via email.  Please check your SPAM filter if you haven't received an expected notification because the auto-responses generated by the conference software are sometimes blocked.</li>
  <li><strong>Title</strong>: A title for the BOF.</li>
  <li><strong>Abstract</strong>: <?php echo $abstractCharLimit; ?> (including whitespace) description of the BOF.  The same abstract will also need to be submitted via a text box on the submission page.  Please be sure that your description is accurate and that both submitted copies (here in the BOF Proposal, and in the submission text box) are exactly the same.</li>
  <li><strong>Significance and Relevance of the Topic</strong>: Please include information about any trends in relation to the topic and possibly describe (or cite) evidence to that effect.  Your objective here is to explain why the topic is significant.  You should also justify how your BOF will engage participants in group discussion and enhance future connections between attendees. This information can help your proposal to be selected if resources become an issue.</li>
 <li><strong>Expected Audience</strong>: Briefly describe the nature and size of the expected audience.  If you expect a particularly large or small audience, please explain why.  This information can help in room assignment.</li>
 <li><strong>Discussion Leader(s)</strong>: Although correspondence will be with the proposer above, it will be the discussion leader(s) who will be mentioned in Symposium literature.  Please list any additional such names (besides the proposer) and affiliations here.  Be certain that you have their commitments to attend the Symposium.  All discussion leaders must register for the SIGCSE conference and be present for the BOF session.</li>
 <li><strong>Expertise of Discussion Leader(s)</strong>: Give a summary of the qualifications of the discussion leader(s) as it relates to the BOF topic being proposed.</li>
 <li><strong>Special Requirements, if any</strong>: Because of the informal and spontaneous nature of these sessions, A/V equipment is typically not provided. That said, please describe any pressing needs you feel you will have. Although we cannot guarantee that your requested equipment will be available, we will make every effort to let you know this well before the conference.</li>
 </ol>
 </li><br/>
 <li><strong>BOF Abstract (limited to <?php echo $abstractCharLimit; ?>, including whitespace)</strong>
  <p style="font-size: 1.0em">The abstract is the description of the BOF that will appear on the conference web pages.  The description is limited to <?php echo $abstractCharLimit; ?> and must match verbatim the abstract section of the BOF Proposal. The BOF abstract must be submitted in plain text. The abstract for an accepted proposal may contain a URL with more information.  (Abstracts of accepted BOFs can be edited in response to reviews.)</p>
 </li>
</ol>

<p>Here is a sample BOF Proposal:</p>
<ul>
 <li><a href="/sigcse2012/downloads/BOFSample.pdf" onclick="target='newwindow'">BOF Proposal Example (PDF)</a></li>
</ul>

<div class="SectionHeader"><div class="Full">
<h2><a name="submit">How Do I Submit My Proposal?</a></h2>
</div></div> 
<ol>
 <li>Write your proposal using the format specified above.</li>
 <li>Convert your proposal into Adobe PDF format.  Refer to our <a href="creating_pdf.php">Creating Adobe PDF Documents</a> page for assistance.</li>
 <li> Submit the PDF version of your proposal using the
<?php if ($submissionReady) {	
  echo '<a href="http://www.cs.grinnell.edu/~sigcse/sigcse2012/submission.shtml">Birds of a Feather online submission form</a>';
} else {
  echo "<em>Birds of a Feather online submission form (coming soon)</em>";
} 
?>. Recall that you will also need to cut-and-paste or type your <?php echo $abstractCharLimit; ?> (including whitespace) text abstract description into a text box during the submission process.  Please do not wait until the last minute to submit your documents because that is when everyone else will be connecting to our server!</li>
 <li> Make note of the BOF ID number and password assigned to your submission.  You will receive an e-mail message confirmation. Spam filters sometimes trap these automatically generated messages so you may need to check your spam trap for the confirmation and later, acceptance or rejection notification.</li>
 <li> After receiving confirmation, go to the 
<?php if ($submissionReady) {
 echo '<a href="http://www.cs.grinnell.edu/~sigcse/sigcse2012/submission.shtml">author verification form</a>';
} else {
 echo "<em>author verification form (coming soon)</em>";
} 
?> to review your submission for accuracy. Send e-mail to Olaf Hall-Holt <script>write_email( "sigcse12-bofs", "cs.holycross.edu" );</script> if there are any problems.</li>
</ol>

<p><strong><i>Deadline:</i></strong> All electronic submissions must be <strong>received</strong> by <strong class="warning">October 24, 2011 @ 11:59 p.m. Hawaii-Aleutian Standard Time (HST)</strong>.</p>         

<div class="SectionHeader"><div class="Full">
<h2><a name="presentation">Questions</a></h2>
</div></div>   
<p>If you have questions, please contact:<br />
Olaf Hall-Holt<br/>
St. Olaf College<br/>
<script>write_email("sigcse12-bofs", "cs.holycross.edu");</script>
</p>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = false;
 include("../parts/bottom.php");
?>