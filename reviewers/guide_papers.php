<?php
 $title = "Paper Submission Review Guidelines [SIGCSE 2014]";
 $nav_menu = "reviewers";
 include("../parts/top.php");
?>

<li><a href="#general"><i class="icon-chevron-right"></i> General Recommendations</a></li>
<li><a href="#substandard"><i class="icon-chevron-right"></i> Substandard Recommendations</a></li>
<li><a href="#examples"><i class="icon-chevron-right"></i> Examples of Good Reviews</a></li>
<li><a href="#questions"><i class="icon-chevron-right"></i> Questions?</a></li>

<?php 
  include("../parts/middle.php"); 
?>

<div class="row-fluid">
 <div class="span12" style="text-align: center;">
   <h1 class="section">Guidelines for Reviewers of Paper Submissions</h1>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="general"><h2 class="section">General Recommendations</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>Here are some recommendations for writing reviews of submitted papers that help the authors and improve the quality of the symposium.</p>
<ul>
<li>Your job as a reviewer is to write detailed reviews, even for excellent papers. In addition to telling the authors what you didn't like about their paper, be sure to include what you did like as well.</li>
<li>Even if your opinion is that the paper is poorly written or poorly thought-out, you can still provide constructive criticisms to help the authors, and in the long run, the conference. Think of your goal as convincing the authors of the paper you're reviewing to submit something else next year, but of such high quality that it will be well-reviewed and easily accepted. Give the authors advice on how to do that.</li>
<li>The best reviews clearly justify the reviewer's choice of rating. The least valuable review gives a low score with no written comments. That simply tells the authors that they have been unsuccessful, with no indication of how or why.</li>
<li>The focus of your review should be on content.</li>
<li>Papers that you review are supposed to be anonymous. Your review should be based on the merits of the paper, not the reputation of the authors or their institutions. Therefore, we have asked the authors to remove all identifiable references to themselves. We realize that reviewers sometimes know the work and can guess who the authors of the papers might be.</li>
<li>If you recognize the work, it is your responsibility to give a fair and unbiased review, using only the information in the paper. If you do not feel that you can give a fair, unbiased review of the paper and not the authors or institutions, please contact the program chairs immediately.</li>
<li>Your review should not include comments to the authors about the anonymization (or lack thereof) in the paper. If you feel that it is necessary to comment on this, please use the text box, 'Confidential comments to the committee.'</li>
<li>We realize that occasionally anonymization requires the authors to remove information that affects your review (information that otherwise the paper appears to lack). As a reviewer, you can give the authors the benefit of the doubt. Use the 'Confidential comments to the committee' box to indicate this to us. Example "This paper should reference Mark Guzdial's work, unless those references were removed for anonymity").</li>
<li>Please point out typographic and grammatical errors; if there are too many to list, please state so in your review.</li>
<li>Although SIGCSE requires all submitted papers to be polished work, all accepted authors get a brief opportunity to improve the presentation of their paper before camera-ready copy is due. Your detailed feedback may help improve a paper, and in a small way, improve the conference.</li>
</ul>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="substandard"><h2 class="section">Substandard Recommendations</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>SIGCSE <? echo $conferenceYear; ?> will use a <a href="metareviews.php">meta-review process</a> after reviews have been submitted. Reviews that do not objectively, accurately, and clearly assess a paper's suitability for publication at SIGCSE, founded in the reviewer's disciplinary expertise and on the basis of the written paper's originality, technical soundness, contribution to CS education, and clarity of presentation, may be deleted.</p>
<p>For example, an unacceptable review might:</p>
<ul>
<li>be incoherent, unreadable, or irrelevant to the paper;</li>
<li>focus on the paper's topic area or presumed authors at the expense of assessing the paper itself; or</li>
<li>provide no justification for its numeric ratings. (Even in "obvious" cases, reviewers should briefly justify ratings.)</li>
</ul>
<p>Please note that a difference in rating or opinion with other reviewers or PC members will NEVER be cause for deletion of a review.</p>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="examples"><h2 class="section">Examples of Good Reviews</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>To help reviewers better understand the qualities of good, useful reviews, here are several example comments, organized by review category:</p>
<ul>
	<li>Summary of Submission:
		<ul>
		<li>Please summarize the submission in 2-4 sentences in your own words. Please DO NOT copy/paste the abstract into this section.</li>
		</ul>
	</li>
	<li>Strengths of this Submission:
		<ul>
		<li>This paper makes a very good argument in the introduction for why this course is needed. It is timely, and addresses a topic outside of the norm often seen at SIGCSE.</li>
		<li>I can't recall ever seeing something similar at SIGCSE. In spite of the previous problems, I would urge acceptance of this paper on a topic that we rarely see at SIGCSE.</li>
		<li>This paper should generate a lot of discussion and have a good audience. It is a topic that many schools are trying to address (including mine.)</li>
		<li>Good level of detail on your approach. Table 2 is very handy. Under Section 2, it seems like log analysis and auditing may fit in your column two. How will you ensure additional security emphasis is implemented?</li>
		<li>The organization is faultless. It is very clear what the paper is going to say and how. The paper follows through with crystal clear subject headings and a logical flow of information.</li>
		</ul>
	</li>
	<li>Comments for Authors / Areas for Improvement:
		<ul>
		<li>The hypotheses are too obvious and the validation of them is not enough. Therefore, the contribution of this paper is quite limited.</li>
		<li>Hard to judge given the writing organization problems, but I do not see a lot of significance here. The verification that the laboratory helped more than on-line component alone is a nice result, if it is supported by the data. Having taught this course already and collected feedback on your approach makes the paper stronger.</li>
		<li>It is important for those who might be considering this approach to know that it can be successful. If I were considering this approach I would want to know if the students could understand the code, and how deeply I could get into the material given time constraints.</li>
		<li>I would have liked to see some discussion and references setting this work in the context of other studies of student learning and knowledge retention. While I don't know of other studies that have examined exactly the phenomenon this paper does, a short search in the ACM digital library turned up these examples that are relevant...</li>
		<li>The paper could use additional proofing and polishing. I suggest finding a non-robotics person to read for both language and communication. Some sentences are poorly formed (e.g., sent. 1 of last par. in sec. 1). Some content seems misplaced (e.g., discussion of mobility in section 3).</li>
		</ul>
	</li>
</ul>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="questions"><h2 class="section">Questions?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>If you have questions about paper submissions, please contact SIGCSE <? echo $conferenceYear; ?> Program Chairs: <br/>
	Adrienne Decker<br/>
	Rochester Institute of Technology<br/>
    &nbsp;<br/>
	Kurt Eiselt<br/>
	University of British Columbia<br/>
	<script>write_email( "sigcse2014-program", "ggc.edu" );</script></p>
 </div>
</div>

<?php
 include("../parts/bottom.php");
?>
