<!DOCTYPE html>
<html>
	<head>
		<title>PHP Basics: Hello World</title>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="style.css" />
	</head>
	<body>
		<h1>Hello World, from HTML</h1>

<?php
//ouput a string as unformatted text
echo "Hello world, from PHP! This is unformatted text (it has no HTML markup). Poor for semantics, difficult to style.";
//ouput a string as HTML
echo "<h2>Hello world from PHP (this time, acting like HTML by outputting content inside an &lt;h2> tag)!</h2>";
?>
<p>Since the end result of PHP instructions will be an HTML document sent to the client, be sure to ensure any PHP output conforms with the rules of HTML (eg: by using PHP to output HTML tags/attributes when necessary)</p>
<h3>Building a new PHP page?</h3>
<p>You will need to ensure that your PHP pages are accessible (search engines, screen readers) and styleable with CSS. To do so, be certain that the response that is sent to the client is fully valid, semantic HTML. Adopt the following procedure when building PHP scripts:</p>
<ol>
	<li>Start with a standard HTML template<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;title&gt;&lt;/title&gt;
		&lt;meta charset="utf-8" /&gt;
	&lt;/head&gt;
	&lt;body&gt;
	&lt;/body&gt;
&lt;/html&gt;</code></pre></li>
	<li>Use a <code>.php</code> file extension instead of <code>.html</code></li>
	<li>Locate the file somewhere within your server root, or any subfolders</li>
	<li>Add PHP declarations to this file, anywhere you want to insert PHP<pre><code>&lt;?php
	//PHP instructions go here...
?&gt</code></pre></li>
	<li>Ensure HTML stays outside PHP declarations, and PHP instructions are kept inside</li>
	<li>Whenever you need PHP to output something to the screen, ensure that appropriate semantic HTML is included</li>
	<li>Test the page by requesting it through <code>http://localhost/</code></li>
</ol>
	</body>
</html>

