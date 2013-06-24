<?php
 $title = "Creating PDF Documents [SIGCSE 2014]";
 $nav_menu = "authors";
 include("../parts/top.php");
?>

<li><a href="#adobe"><i class="icon-chevron-right"></i> What is Adobe PDF Format?</a></li>
<li><a href="#pdfformat"><i class="icon-chevron-right"></i> How Can I Convert My Documents to Adobe PDF Format?</a></li>
<li><a href="#latex"><i class="icon-chevron-right"></i> How Can I Convert My LaTeX Documents?</a></li>

<?php 
  include("../parts/middle.php"); 
?>

<div class="row-fluid">
 <div class="span12" style="text-align: center;">
   <h1 class="section">Creating PDF Documents</h1>
 </div>
</div>
<div class="row-fluid">
 <div class="span12">
  <p>This page provides information about creating Adobe PDF documents for submission to SIGCSE.</p>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="adobe"><h2 class="section">What is Adobe PDF Format?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>Adobe Portable Document Format (PDF) documents are a standardized and convenient method to exchange data files without affecting the original appearance. SIGCSE will accept electronic submissions of papers only in this format.</p>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="pdfformat"><h2 class="section">How Can I Convert My Documents to Adobe PDF Format?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>You have a number of options for converting your Word, WordPerfect, or Postscript files into Adobe PDF.</p>
<ul>
 <li>If you are using Google Docs, selecting print produces a PDF file. Your version of Microsoft Word may allow you to save as a PDF document. Other word processing software may have similar features.</li>
 <li>Apple Mac OS X includes print to PDF for all programs.</li>
 <li><a href="http://www.primopdf.com">PrimoPDF</a> is a free program that installs like a printer and saves your file as a PDF document.</li>
 <li> If you already have Adobe Acrobat installed on your computer refer to your software documentation for instructions on choosing PDF Writer as your printer. Instead of printing your document, the software will create a PDF file.</li>
 <li>Export your document from within OpenOffice, available at <a href="http://openoffice.org">openoffice.org</a>.</li>
 <li>Adobe has an online service to convert your Word, WordPerfect and other formatted documents into Adobe PDF format (<a href="https://createpdf.acrobat.com/">Create Adobe PDF Online</a>). The converted file is either sent to you via e-mail or available through FTP.  You may register for a trial membership of the Adobe Online service and convert five files at no charge. This is our least-recommended option because the conversion will not embed the fonts and the resulting document may not look good on other machines. </li>
</ul>
 </div>
</div>

<hr/>
<div class="row-fluid">
 <div class="span12" style="text-align: center" id="latex"><h2 class="section">How Can I Convert My LaTeX Documents to Adobe PDF Format?</h2></div>
</div>
<div class="row-fluid">
 <div class="span12">
<p>There are two primary ways to go from LaTeX to PDF.</p>
<ul>
 <li>Generate your dvi file from your LaTeX source. Run dvips on the dvi file to produce a postscript file. (dvips can be used to generate postscript from the dvi file for direct output to a postscript printer or to a file.) Then use a postscript utility such as ps2pdf to convert the postscript file into pdf. The following commands will produce a postscript file with type 3 fonts, which are more readable onscreen:<br />
<blockquote>dvips -Ppdf -G0 filename.dvi -o filename.ps<br />
ps2pdf -dPDFsettings=/prepress filename.ps filename.pdf<br /></blockquote>
 </li>
 <li> There are versions of pdfTeX and pdfLaTeX available for most platforms. These systems do not generate dvi files from your LaTeX source, but generate pdf directly. A standard teTeX (Unix) installation of TeX has these available.</li>
</ul>
 </div>
</div>
            
<?php
 include("../parts/bottom.php");
?>