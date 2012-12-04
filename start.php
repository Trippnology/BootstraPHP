<?php 
include "inc/settings.php";

$strPageName = "BootstraPHP";
$strCanonical = "start.php";
$strDescription = "Twitter bootstrap based modular framework";
$strKeywords = "keyword1, keyword2, keyword3";
$strTweetText = $strPageName;

include "head.php";
?>

<body>
	<?php include "inc/navbar.php"; ?>
	<div class="container">
		
		<div class="row">
			<div class="span2 columnleft">
				<?php 
				include "inc/menu-vert.php";
				//include "inc/share.php";
				?>
			</div>
			
			<div class="span7" id="main" role="main">
				<h1 id="pagetitle"><a href="<?= $strCanonical ?>" title="<?= $strPageName ?>"><?php $strPageName ?></a></h1>
				<article class="readme">
					<img src="img/trippnology-logo-square-180.png" alt="Trippnology square logo" class="right roundlrg">
				</article>
			</div>
			
			<div class="span3 columnright">
			<?php include "inc/sidebar.php"; ?>
			</div>
		</div>
		
		<div class="row">
			<div class="span12">
			<?php include "inc/footer.php"; ?>
			</div>
		</div>
    </div>       
<?php include "scriptblock.php"; ?>

<!-- Put page specific script stuff here -->
<script src="js/libs/showdown.js"></script>
<script>
	jQuery.get('README.md', function(md) {
		var converter = new Showdown.converter();
		var mdhtml = converter.makeHtml(md);
		$(".readme").append(mdhtml);
	});
</script>
<!-- End of page specific script stuff -->
</body>
</html>