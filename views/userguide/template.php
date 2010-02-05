<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo $title ?> | Kodoc</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<?php foreach ($styles as $style => $media) echo HTML::style($style, array('media' => $media), TRUE), "\n" ?>

<?php foreach ($scripts as $script) echo HTML::script($script, NULL, TRUE), "\n" ?>

</head>
<body>

<div id="head"> 
	<img src="/kohanutres/img/logo.png" alt="Kohanut Logo" class="logo"/> 
	<h1>Kohanut</h1> 
</div> 
 
<ul id="navigation"> 
    <li class="first"><a href="/">Home</a></li>
	<li><a href="/download">Download</a></li>
	<li class="current"><a href="/docs">Documentation</a></li>
	<li><a href="/screenshots">Screenshots</a></li>
	<li class="last"><a href="/development">Development</a></li> 
</ul> 
 
<div id='content' class='container_16'> 
    <div class="grid_12">
		
		<ul class="breadcrumb">
		<?php foreach ($breadcrumb as $link => $title): ?>
			<li><?php echo is_int($link) ? $title : HTML::anchor($link, $title) ?></li>
		<?php endforeach ?>
		</ul>
		
		<div id="docs">
			<?php echo $content ?>
		</div>
		
		
	</div>
	
	<div class="grid_4" id="menu">
		<?php echo $menu ?>
	</div>
	
	<div class="clearfix"></div>
	
</div>

<div id="foot"> 
    <div class="container_16 clearfix"> 
        <div class="grid_16"> 
            Powered by Kohanut | Created by <a href="http://kohanut.com">Michael Peters</a> |  Design by <a href="http://mathew-davies.co.uk/">Mathew Davies</a> 
        </div> 
    </div> 
</div> 

</body>
</html>