<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="<?=$siteDomain?>" title="<?=$siteName?>"><?=$siteName?></a>
			<div class="nav-collapse">
				<ul class="nav">
					<li><a href="start.php" title="Home">Home</a></li>
					<li class="dropdown" id="bootstrapmenu">
						<a href="#bootstrapmenu" class="dropdown-toggle" data-toggle="dropdown">Bootstrap<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="bs/docs/" target="_blank" class="tooltip-right" title="An overview of what is included in Bootstrap">Overview</a></li>
								<li><a href="bs/docs/getting-started.html" target="_blank" class="tooltip-right" title="We'll focus on getting started with the compiled Bootstrap files.">Getting started</a></li>
								<li><a href="bs/docs/scaffolding.html" target="_blank" class="tooltip-right" title="Bootstrap is built on a responsive 12-column grid.">Scaffolding</a></li>
								<li><a href="bs/docs/base-css.html" target="_blank" class="tooltip-right" title="On top of the scaffolding, basic HTML elements are styled and enhanced with extensible classes to provide a fresh, consistent look and feel.">Base CSS</a></li>
								<li><a href="bs/docs/components.html" target="_blank" class="tooltip-right" title="Dozens of reusable components are built into Bootstrap to provide navigation, alerts, popovers, and much more.">Components</a></li>
								<li><a href="bs/docs/javascript.html" target="_blank" class="tooltip-right" title="Bring Bootstrap's components to life. Now with 12 custom jQuery plugins.">Javascript Plugins</a></li>
								<li><a href="bs/docs/customize.html" target="_blank" class="tooltip-right" title="Download the full repository or customize your entire Bootstrap build by selecting only the components, javascript plugins, and assets you need.">Customise</a></li>
							</ul>
					</li>
					<li class="dropdown" id="demosmenu">
						<a href="#demosmenu" class="dropdown-toggle" data-toggle="dropdown">Demos<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="nav-header">jQuery</li>
								<li><a href="demo-blockfader.php">Blockfader</a></li>
								<li><a href="demo-fancybox.php">Fancybox</a></li>
								<li class="divider"></li>
								<li class="nav-header">CSS3</li>
								<li><a href="demo-3d-rollover.php">3D Rollovers</a></li>
								<li><a href="demo-bootswatch.php" class="tooltip-right" title="Bootswatch - A collection of free themes for your Bootstap site">Bootswatch</a></li>
							</ul>
					</li>
				</ul>
				<form class="navbar-search pull-right">
					<input type="text" class="search-query" placeholder="Search">
				</form>
			</div>
		</div>
	</div>
</div>