<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='Instructions about the cactuscode website';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/internal.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>




<p>The new Cactus webpages are managed via SVN.  The repository is accessible from <a href="https://svn.cct.lsu.edu/repos/cactus/www" class="external free" title="https://svn.cct.lsu.edu/repos/cactus/www" rel="nofollow">https://svn.cct.lsu.edu/repos/cactus/www</a> with a regular svn checkout, using your CCT credentials.  This article provides tips to introduce the structure as well as guidelines to help standardize and keep its organization orderly.
</p>
<table id="toc" class="toc" summary="Contents"><tr><td><div id="toctitle"><h2>Contents</h2></div>
<ul>
<li class="toclevel-1"><a href="#Getting_started"><span class="tocnumber">1</span> <span class="toctext">Getting started</span></a></li>
<li class="toclevel-1"><a href="#Basics_and_organization"><span class="tocnumber">2</span> <span class="toctext">Basics and organization</span></a>
<ul>
<li class="toclevel-2"><a href="#Important"><span class="tocnumber">2.1</span> <span class="toctext">Important</span></a></li>
<li class="toclevel-2"><a href="#Linking"><span class="tocnumber">2.2</span> <span class="toctext">Linking</span></a></li>
<li class="toclevel-2"><a href="#Images.2C_PDFs.2C_and_other_files"><span class="tocnumber">2.3</span> <span class="toctext">Images, PDFs, and other files</span></a></li>
<li class="toclevel-2"><a href="#Managing_news_items"><span class="tocnumber">2.4</span> <span class="toctext">Managing news items</span></a></li>
</ul>
</li>
<li class="toclevel-1"><a href="#Some_useful_xhtml_tags"><span class="tocnumber">3</span> <span class="toctext">Some useful xhtml tags</span></a></li>
<li class="toclevel-1"><a href="#More_information"><span class="tocnumber">4</span> <span class="toctext">More information</span></a>
<ul>
<li class="toclevel-2"><a href="#Be_sure_to_avoid"><span class="tocnumber">4.1</span> <span class="toctext">Be sure to avoid</span></a></li>
<li class="toclevel-2"><a href="#Advanced"><span class="tocnumber">4.2</span> <span class="toctext">Advanced</span></a></li>
</ul>
</li>
</ul>
</td></tr></table><script type="text/javascript"> if (window.showTocToggle) { var tocShowText = "show"; var tocHideText = "hide"; showTocToggle(); } </script>
<div class="editsection" style="float:right;margin-left:5px;">[<a href="/frameworks/index.php?title=Website&amp;action=edit&amp;section=1" title="Edit section: Getting started"></a>]</div><a name="Getting_started"></a><h2> Getting started </h2>
<p>After you've checked out the site, you can make make changes using a text editor and commit them.  After a commit is made to the repository, you can easily review how the changed pages will look by visiting <a href="http://preview.cactuscode.org" class="external free" title="http://preview.cactuscode.org" rel="nofollow">http://preview.cactuscode.org</a>.  (once the new pages are live...) To push the changes to the live website, visit <a href="http://preview.cactuscode.org/x" class="external free" title="http://preview.cactuscode.org/x" rel="nofollow">http://preview.cactuscode.org/x</a> and click the appropriate link.
</p>
<div class="editsection" style="float:right;margin-left:5px;">[<a href="/frameworks/index.php?title=Website&amp;action=edit&amp;section=2" title="Edit section: Basics and organization"></a>]</div><a name="Basics_and_organization"></a><h2> Basics and organization </h2>
<div class="editsection" style="float:right;margin-left:5px;">[<a href="/frameworks/index.php?title=Website&amp;action=edit&amp;section=3" title="Edit section: Important"></a>]</div><a name="Important"></a><h3> Important </h3>
<ul><li> The template file located at /global/template.php should be copied for all new pages.  Add normal XHTML content between the PHP tags at the top and bottom.
</li><li> To make a page accessible from its directory path (ex: <a href="http://cactuscode.org/about/" class="external free" title="http://cactuscode.org/about/" rel="nofollow">http://cactuscode.org/about/</a>), simply copy the global template (/global/template.php) to the appropriate folder and name it index.php.
</li><li> Set the title of each new page by editing the text assigned to the PHP variable $title, found in the PHP tag at the top of each file.  This title is used for the top-level heading as well as in the title bar.
</li></ul>
<div class="editsection" style="float:right;margin-left:5px;">[<a href="/frameworks/index.php?title=Website&amp;action=edit&amp;section=4" title="Edit section: Linking"></a>]</div><a name="Linking"></a><h3> Linking </h3>
<ul><li> It is preferable to link to pages without the php file extension, so that links wouldn't be broken later if a different file type ends up being used for serving the cactus pages.  (ex: <code>&lt;a href="/about/contact&gt;This link maps to contact.php&lt;/a&gt;</code>)
</li><li> It is preferable to use links relative to the top level when pointing to pages inside the cactus website.  (ex: <code>&lt;a href="/download/configfiles/"&gt;Config Files&lt;/a&gt;</code>)  This style of link would work from any page on the cactus website, since it begins with a slash.  Notice that it is not necessary to include "<a href="http://www.cactuscode.org" class="external free" title="http://www.cactuscode.org" rel="nofollow">http://www.cactuscode.org</a>" as long as there is an initial slash (using relative links (instead of absolute links) allows the preview site to function properly, for example).
</li></ul>
<div class="editsection" style="float:right;margin-left:5px;">[<a href="/frameworks/index.php?title=Website&amp;action=edit&amp;section=5" title="Edit section: Images, PDFs, and other files"></a>]</div><a name="Images.2C_PDFs.2C_and_other_files"></a><h3> Images, PDFs, and other files </h3>
<ul><li> Add photos or other files directly to the directory with the pages that will use them.  This makes it easy to keep them managed and easy to link them.
</li><li> Once you've added a photo to the directory of the page, you can simply use the <code>&lt;img src="photofilename.jpg" alt="short description" title="optional attribute (appears on mouseover)" /&gt;</code> tag to include it in a page.
</li><li> TODO: explanation of using float-right and float-left
</li></ul>
<div class="editsection" style="float:right;margin-left:5px;">[<a href="/frameworks/index.php?title=Website&amp;action=edit&amp;section=6" title="Edit section: Managing news items"></a>]</div><a name="Managing_news_items"></a><h3> Managing news items </h3>
<ul><li> Create a new story by running the script located inside the /media/news directory in place
</li><li> The script expects exactly two arguments, the url-name and a title
</li><li> The <i>url-name</i> should not have spaces in it but can have hyphens (or underscores)
</li><li> The <i>title</i> should be in quotes and can use proper spacing and capitalization
</li><li> An example of running the script: <pre>./newstory webpages &quot;Cactus gets a fresh website&quot;</pre>
</li><li> It will make the new folder from the template in svn, set the title variable for the page, and adds a link to recent.php (which is used in the sidelinks across the site
</li><li> To include images or documents, just add them inside that new folder to keep things organized and easily linked
</li></ul>
<div class="editsection" style="float:right;margin-left:5px;">[<a href="/frameworks/index.php?title=Website&amp;action=edit&amp;section=7" title="Edit section: Some useful xhtml tags"></a>]</div><a name="Some_useful_xhtml_tags"></a><h2> Some useful xhtml tags </h2>
<ul><li> To separate blocks of text, surround paragraphs with <code>&lt;p&gt;</code> and <code>&lt;/p&gt;</code> tags.
</li><li> For bold, use <code>&lt;strong&gt;</code> and <code>&lt;/strong&gt;</code> tags around text.
</li><li> For italic, use <code>&lt;em&gt;</code> and <code>&lt;/em&gt;</code> tags around text to be emphasized.
</li><li> To distinguish blocks of code from other text, use <code>&lt;pre&gt;&lt;/pre&gt;</code> tags.
</li><li> For in-line code snippets, variables names, or to simply show text in fixed width, you can use <code>&lt;kbd&gt;&lt;/kbd&gt;</code> tags.
</li><li> For subheadings, use <code>&lt;h3&gt;&lt;/h3&gt;</code> tags.  (the main page's title is level h2.)
</li><li> For block quotes, use <code>&lt;blockquote&gt;&lt;/blockquote&gt;</code> tags.
</li><li> If you need a line break without the extra spacing that happens around a real paragraph, use the self-closing <code>&lt;br /&gt;</code> tag.
</li><li> The <code>&lt;hr /&gt;</code> tag is used for a horizontal rule (line).
</li><li> You can define an acronym by using the <code>&lt;acronym title="definition here"&gt;</code> and <code>&lt;/acronym&gt;</code> tags around it.
</li><li> If you need to use a table to show data, use tags like the following.
</li></ul>
<pre>
&lt;table&gt;
	&lt;tr&gt; &lt;!-- row tag --&gt;
		&lt;th&gt;heading 1&lt;/th&gt; &lt;!-- table heading tag --&gt;
		&lt;th&gt;heading 2&lt;/th&gt; &lt;!-- use one th tag per column of the table --&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;this is a cell in row 1&lt;/td&gt;
		&lt;td&gt;this is the second cell&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;this is a new row&lt;/td&gt;
		&lt;td&gt;last cell of the table&lt;/td&gt;
	&lt;/tr&gt;
&lt;/table&gt;
</pre>
<ul><li> if you need to present a list, ordered or unordered, use tags like the following.
</li></ul>
<pre>
&lt;ol&gt;
	&lt;li&gt;Here is an example&lt;/li&gt;
	&lt;li&gt;of an ordered list&lt;/li&gt;
&lt;/ol&gt;
&lt;ul&gt;
	&lt;li&gt;Here is an example&lt;/li&gt;
	&lt;li&gt;of an unordered list&lt;/li&gt;								
&lt;/ul&gt;
</pre>
<ul><li> After committing, visit the preview.cactuscode.org version of your pages and use the XHTML validation link to reveal any incorrect tagging. 
</li></ul>
<div class="editsection" style="float:right;margin-left:5px;">[<a href="/frameworks/index.php?title=Website&amp;action=edit&amp;section=8" title="Edit section: More information"></a>]</div><a name="More_information"></a><h2> More information </h2>
<div class="editsection" style="float:right;margin-left:5px;">[<a href="/frameworks/index.php?title=Website&amp;action=edit&amp;section=9" title="Edit section: Be sure to avoid"></a>]</div><a name="Be_sure_to_avoid"></a><h3> Be sure to avoid </h3>
<ul><li> using tables for non-tabular information or to establish layout.
</li><li> using <code>&lt;b /&gt; &lt;i /&gt; &lt;u /&gt;</code> tags, as they are not part of the XHTML spec.
</li><li> leaving tags unclosed.  Even tags like <code>&lt;hr /&gt;</code> and <code>&lt;br /&gt;</code> must be properly closed (as shown here).
</li><li> changing the case of the names of tags.  XHTML tags are case sensitive.
</li></ul>
<div class="editsection" style="float:right;margin-left:5px;">[<a href="/frameworks/index.php?title=Website&amp;action=edit&amp;section=10" title="Edit section: Advanced"></a>]</div><a name="Advanced"></a><h3> Advanced </h3>
<ul><li> The CSS stylesheet used across the website is located at /global/style.css
</li><li> TODO: how to use sidelinks.php
</li></ul>
<p><br /><br />
<big>Feel free to further revise this page if you want to make the instructions clearer or add new information.</big>
</p>
<!-- Saved in parser cache with key mediawiki-frameworks_:pcache:idhash:1727-0!1!0!!en!2 and timestamp 20090911191639 -->
<div class="printfooter">
Retrieved from "<a href="https://wiki.cct.lsu.edu/frameworks/Website">https://wiki.cct.lsu.edu/frameworks/Website</a>"</div>



<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
