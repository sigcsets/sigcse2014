<?php
 $title = "Student Research Competition Submission Guidelines [SIGCSE 2014]";
 $nav_menu = "authors";
 include("../parts/top.php");
?>

<li><a href="#dates"><i class="icon-chevron-right"></i> Important Dates</a></li>
<li><a href="#what"><i class="icon-chevron-right"></i> What is the Student Research Competition?</a></li>
<li><a href="#format"><i class="icon-chevron-right"></i> What Should a Submission Contain?</a></li>
<li><a href="#submit"><i class="icon-chevron-right"></i> How Do I Submit My Entry?</a></li>
<li><a href="#questions"><i class="icon-chevron-right"></i> Questions?</a></li>

<?php 
  include("../parts/middle.php"); 
?>

<div class="row-fluid">
 <div class="span12" style="text-align: center;">
   <h1 class="section">Student Research Contest Submission Guidelines</h1>
 </div>
</div>

<div class="row-fluid">
 <div class="span12" style="text-align: center" id="dates">
      <h2 class="section">Important Date for Contest Entries</h2>
      <table class="table table-striped">
       <tr><td align="left" valign="top">Submission Deadline:</td><td align="left"><? echo $srcSubmissionDeadline; ?><br/>Eastern Daylight Time</td></tr>
       <tr><td align="left">Author Notification:</td><td align="left"><? echo $srcNotificationDeadline; ?></td></tr>
      </table>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="what"><h2 class="section">What is the Student Research Competition?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>The <a href="http://www.acm.org/src/">ACM Student Research Competition</a> held at the 2012 SIGCSE conference will consist of two categories of competition, graduate and undergraduate, with prizes awarded based on judging during the conference. Research from all areas of computer science qualifies. All graduate submissions must represent a student's individual research contribution but undergraduate submissions may represent individual or team research contributions.  A student must be an ACM student member to qualify for awards and travel grants.</p>
<p>Judges will include professional computer scientists attending the conference activities.  Students' research will be evaluated on the quality and significance of the work, and the quality and clarity of both an oral and visual presentation.</p>
<p>The first round of the competition evaluates the research during a poster presentation.  Those students who are selected by the judges to advance to the second round will continue in the competition by giving a formal, short, conference presentation of their research. The top three winners in the undergraduate and graduate categories as determined by the judges' evaluation of the conference presentations will receive the prizes of $500, $300, and $200, respectively.  These winners will advance to a final student research contest round where all ACM SIG conference contest winners are evaluated to determine one overall student research contest winner.  Only individual research may be submitted.</p>
<p>No more than three research projects will be accepted from a single department and no more than two of those can be in a single category.  Departments are determined by the location of the research advisor.  Submissions for the research competition should describe the results of recently completed or ongoing computer science research conducted primarily by students.</p>

<p>Additional competition details, including information about past winners, can be found on the
 <a href="http://www.acm.org/src/">ACM Student Research Competition home page (http://www.acm.org/src/)</a>.</p>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="format"><h2 class="section">What Should a Submission Contain?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>Research projects from all areas of computer science are acceptable.  The author submitting the abstract must still be a student at the time the abstract is due. Each submission should include the author's name, affiliation, postal address, and email address; research advisor's name; ACM student member number; category (undergraduate or graduate); research title; and an extended abstract (maximum 2 pages or 800 words) containing the following sections:</p>
<ul>
 <li><strong>Problem and Motivation</strong>: This section should clearly state the problem being addressed and explain the reasons for seeking a solution to this problem.</li>
 <li><strong>Background and Related Work</strong>: This section should describe the specialized (but pertinent) background necessary to appreciate the work. Include references to the literature where appropriate, and briefly explain where your work departs from that done by others. Reference lists do not count towards the limit on the length of the abstract.</li>
 <li><strong>Approach and Uniqueness</strong>: This section should describe your approach in attacking the problem and should clearly state how your approach is novel.</li>
 <li><strong>Results and Contributions</strong>: This section should clearly show how the results of your work contribute to computer science and should explain the significance of those results.</li>
</ul>
<p>Include a separate paragraph (maximum of <?php echo $abstractCharLimit; ?>, including whitespace) for publication in the conference proceedings that serves as a succinct description of the project.</p>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="submit"><h2 class="section">How Do I Submit My Entry?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>Submit a plain ASCII-text electronic copy of the extended abstract by <span class="label label-important"><? echo $srcSubmissionDeadline; ?> @ 5:00 p.m. EDT (Eastern Daylight Time)</span> to Dr. Ann Sobel (<script>write_email( "sigcse2014-src", "ggc.edu" );</script>).</p>
<p>Travel grants of up to $500 may be available for students who do not have another source of funding and are ACM student members.</p>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="questions"><h2 class="section">Questions?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12"> 
<p>If you have questions about the student research competition, please contact:<br/>
	Ann Sobel<br/>
    Miami University (Ohio)<br/>
    <script>write_email("sigcse2014-src", "ggc.edu");</script></p>
 </div>
</div>

<?php
 include("../parts/bottom.php");
?>