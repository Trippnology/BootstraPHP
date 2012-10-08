<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?=$strPageName ?> | <?=$strSiteName ?></title>
    <meta name="description" content="<?=$strDescription?>">
    <meta name="keywords" content="<?=$strKeywords?>">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php // Are there any Google Fonts to load?
        if ($strGoogleFonts != NULL): 
            //echo $strGoogleFonts; ?>
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=<?=$strGoogleFonts?>">
        <?php endif;
    
    // Is there a Bootswatch theme to load?
        if ($strBootswatch != NULL):
            //echo $strBootswatch; ?>
            <link rel="stylesheet" href="http://bootswatch.com/<?=$strBootswatch?>/bootstrap.min.css">
        <?php else:
            //echo $strBSCSS; ?>
            <link rel="stylesheet" href="<?=$strBSCSS?>bootstrap.css">
        <?php endif;

    // Should we load the responsive stylesheet?
        if ($strResponsive = true):
            //echo "Responsive should load"; ?>
            <link rel="stylesheet" href="<?=$strBSCSS?>bootstrap-responsive.css">
        <?php endif;
    ?>

    <link rel="stylesheet" href="css/style.css"><!-- Placed last to override all other styles -->
    <link rel="canonical" href="<?=$strDomain?><?=$strCanonical?>">
    <link rel="author" href="<?=$strDomain?>humans.txt">
    
    <script src="js/libs/modernizr.min.js"></script>
</head>