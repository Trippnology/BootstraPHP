<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?=$SEOtitle?></title>
    <meta name="description" content="<?=$strDescription?>">
    <meta name="keywords" content="<?=$strKeywords?>">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if ($styleGoogleFonts): // Are there any Google Fonts to load? ?>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=<?=$styleGoogleFonts?>">
    <?php endif;

    if ($styleBootswatch): // Is there a Bootswatch theme to load? ?>
        <link rel="stylesheet" href="http://bootswatch.com/<?=$styleBootswatch?>/bootstrap.min.css">
    <?php else: // If not, use the default Bootstrap ?>
        <link rel="stylesheet" href="<?=$dirBSCSS?>bootstrap.css">
    <?php endif;

    if ($styleResponsive): // Should we load the responsive stylesheet? ?>
        <link rel="stylesheet" href="<?=$dirBSCSS?>bootstrap-responsive.css">
    <?php endif; ?>

    <link rel="stylesheet" href="css/style.css"><!-- Placed last to override all other styles -->
    <link rel="canonical" href="<?=$siteDomain?><?=$strCanonical?>">
    <link rel="author" href="<?=$siteDomain?>humans.txt">

    <?php if ($socialTwitterName): // Establish a link to your twitter profile ?>
        <link rel="me" href="http://twitter.com/<?=$socialTwitterName?>">
    <?php endif; ?>

    <script src="js/libs/modernizr.min.js"></script>
</head>