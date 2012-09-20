<!doctype html>
<html dir="ltr" lang="EN"> 
<head>
	<meta charset="UTF-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link type="text/plain" rel="jobs"   href="http://jobstxt.org/jobs.txt" />
  <link type="text/plain" rel="author" href="http://jobstxt.org/humans.txt" />

	<meta name="description" content="An initiative" /> 
  <meta name="author" content="Alister Bulman">
  <!--link rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-combined.min.css"-->
  <link href="http://jobstxt.org/favicon.ico" rel="shortcut icon" type="image/x-icon" />

	<meta name="keywords" content="Jobs txt, simple, jobs" /> 
	<meta name="title" content="Jobs TXT: easily parsable job listings and format" /> 
	<title>Jobs TXT: easily parsable job listings file and format</title>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body> 

<header></header>

<div id="wrapper"> 
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34900638-1']);
  _gaq.push(['_setDomainName', 'jobstxt.org']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<a href="https://github.com/alister/jobstxt.org"><img style="position: absolute;   top: 0; right: 0; border: 0;" 
  src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png" 
  alt="Fork me on GitHub"></a>

<div id="content2">
    <h1>About jobs.txt</h1>

<div style="float:right">
 <iframe src="https://docs.google.com/spreadsheet/embeddedform?formkey=dEw5LTF2RnlheHRFU2tjOEtqWmZqZ0E6MQ" 
   width="480" height="720" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
</div>

<section class="intro">
<article> 

  <p>It all started with a post on the Ycombinator forum ...</p>

  <blockquote>
  <a href="http://news.ycombinator.com/user?id=lifeisstillgood">lifeisstillgood</a> 17th Aug 2012 | <a href="http://news.ycombinator.com/item?id=4534059">link</a> | <a href="http://news.ycombinator.com/item?id=4532768">parent</a><br/>
  <p>We have robots.txt, humans.txt, business.txt</p>

  <p>so whats wrong with jobs.txt</p>

  <p>Parseable, searchable, uptodate (one assumes, and can easily be deprecated) and simple to throw up a cottage industry around.</p>
  </blockquote>

  <h2>That's a Good Idea!</h2>
  <p>So, I've written this website, and created a sample <a href="/jobs.txt">jobs.txt</a> file.</p>

  <h2>FAQ</h2>
  <dl>
  <dt>Whats the format?</dt>
    <dd><p>Very simple, plain text. The main example, at <a href="/jobs.txt">/jobs.txt</a>
      does most of the documentation. </p>
      <p>The main thought is multiple groups of text, with seperators between them.
      The first section is about the company and has other relevant links, then each additional grouping 
      is information and links to more jobs.</p>
      <p>I've also used MarkDown-style formatting for the headers, lists and seperators, though, while 
        I'd suggest keeping the seperators at four hyphens, the rest is entirely optional. 
        Keeping the line-lengths to a reasonable 76-80 characters is also easier to read.</p>
    </dd>

  <dt>Is anything else required on the rest of the website?</dt>
    <dd><p>No, but if you want to add a LINK tag, that may be helpful to some systems to help find the file.
      It would be <br/>
      <code>&lt;link type="text/plain" rel="jobs" href="http://example.com/jobs.txt" /&gt;</code>
      in the &lt;head&gt; section of the index page.</p>
       - or you could potentially change the filename and location. 
    </dd>

  </dl>

  <hr>

  <p>.... and an improved website is coming when I can - or, fork it, and let me know. <a href="https://github.com/alister/jobstxt.org">https://github.com/alister/jobstxt.org</a>.</p>

</article>
</section>
</div> <!-- .content-->

<!-- ======================================================== -->

<footer>
    <section>
        <article class="third">

		<div class="creative">
			<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img 
				alt="Licencia de Creative Commons" style="border-width:0" src="/i/CC.png" width="88" height="31" /></a>

			<p>jobs.txt is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative 
				Commons Attribution-NonCommercial-ShareAlike 3.0 Unported
License</a></p>

        </div>

        </article>
    </section>
</footer> 

<hr/>

<p>Website by Alister Bulman <a href="http://abulman.co.uk">http://abulman.co.uk</a> | 
	<a href="http://phpscaling.com">http://phpscaling.com</a> | 
	<a href="http://careers.stackoverflow.com/alister">http://careers.stackoverflow.com/alister</a></p>
<p>Original idea from a post by 'lifeisstillgood', on news.ycombinator.com.
  Base HTML blatently stolen from <a href="http://humanstxt.org/">http://humanstxt.org/</a> and then cruelly torn to shreds</p>


		</div> <!-- .wrapper-->
	</body> 
</html>
