<?php
	// Get and start up crud SDK
	require('crud.php');
$crud = new CRUD(array(
	// The URL of your CRUD.io server instance
	'url' => "http://crud.io:4000"
));
?><!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="stylesheets/reset.css">
		<link rel="stylesheet" type="text/css" href="stylesheets/unwired.css">
	
	
	<script src="jquery.js"></script>
<script src="mediaelement-and-player.min.js"></script>
<link rel="stylesheet" href="mediaelementplayer.css" />

	</head>
	<body>
		<div id="uwn-topbar">
			<a href="./" class="uwn-branding">
				<h1>Unwired Nation</h1>
				<h2 id="navigation-sub-header">mobile apps from the cloud</h2>
			</a>
		</div>
		
		
		<!--
  
		---------------------------------------------------------------
		- Example built using the mediaelement video player
		- John Dyer
		- http://j.hn
		- 
		- MediaElementJS
		- http://mediaelementjs.com/
		- https://github.com/johndyer/mediaelement
		- 
		----------------------------------------------------------------
		-->
		
		<h1>HTML 5 Video Example</h1>
		
		<video width="320" height="240" poster="poster.jpg" controls="controls" preload="none">
			<!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
			<source type="video/mp4" src="<?php $crud->read('vidpon mp4') ?>" />
			<!-- WebM/VP8 for Firefox4, Opera, and Chrome -->
			<source type="video/webm" src="<?php $crud->read('vidpon webm') ?>" />
			<!-- Ogg/Vorbis for older Firefox and Opera versions -->
			<source type="video/ogg" src="<?php $crud->read('vidpon ogv') ?>" />
			<!-- Flash fallback for non-HTML5 browsers without JavaScript -->
			<object width="320" height="240" type="application/x-shockwave-flash" data="flashmediaelement.swf">
				<param name="movie" value="flashmediaelement.swf" />
				<param name="flashvars" value="controls=true&file=<?php $crud->read('vidpon mp4') ?>" />
				<!-- Image as a last resort -->
				<img src="<?php $crud->read('vidpon jpg') ?>" width="320" height="240" title="No video playback capabilities" />
			</object>
		</video>
		
	</body>
</html>