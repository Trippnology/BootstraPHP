<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='js/libs/jquery-1.7.1.min.js'>\x3C/script>")</script>

<!-- Grab extra jQuery files from CDN or fall back to local -->
<script src="//cachedcommons.org/cache/jquery-easing/1.3.0/javascripts/jquery-easing-min.js"></script>
<script>window.jQuery || document.write("<script src='js/libs/jquery.easing-1.3.pack.js'>\x3C/script>")</script>
<script src="//cachedcommons.org/cache/jquery-mousewheel/3.0.3/javascripts/jquery-mousewheel-min.js"></script>
<script>window.jQuery || document.write("<script src='js/libs/jquery.mousewheel-3.0.4.pack.js'>\x3C/script>")</script>

<!-- Submodules -->
<!-- Bootstrap -->
<script src="<?=$dirBSJS?>bootstrap.min.js"></script>

<!-- DO NOT modify the following (including the comments) -->
<!-- scripts concatenated and minified via ant build script-->
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<!-- end scripts-->

<!-- Global Modal Window -->
<?php include "inc/modal-global.php"; ?>

<!--[if lt IE 7 ]>
<script src="http://cachedcommons.org/cache/dd-belated-png/0.0.8/javascripts/dd-belated-png-min.js"></script>
<script>window.jQuery || document.write("<script src="js/libs/dd-belated-png-0.0.8-min.js"></script>")</script>
<script>DD_belatedPNG.fix("img, .png_bg");</script>
<![endif]-->

<!-- Google Analytics -->
<script>
	var _gaq=[["_setAccount","<?=$adminGoogleAnalID?>"],["_trackPageview"]];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
	s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<!-- Additional items used during development and testing -->
<?php if ($adminDevMode) :
	include "inc/dev.php";
endif ?>
