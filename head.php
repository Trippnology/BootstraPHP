<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?=$strPageName?> | <?=$strSiteName?></title>
    <meta name="description" content="<?=$strDescription?>">
    <meta name="keywords" content="<?=$strKeywords?>">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if ($strGoogleFonts != NULL): // Are there any Google Fonts to load? ?>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=<?=$strGoogleFonts?>">
    <?php endif;

    if ($strBootswatch != NULL): // Is there a Bootswatch theme to load? ?>
        <link rel="stylesheet" href="http://bootswatch.com/<?=$strBootswatch?>/bootstrap.min.css">
    <?php else: // If not, use the default Bootstrap ?>
        <link rel="stylesheet" href="<?=$strBSCSS?>bootstrap.css">
    <?php endif;

    if ($strResponsive): // Should we load the responsive stylesheet? ?>
        <link rel="stylesheet" href="<?=$strBSCSS?>bootstrap-responsive.css">
    <?php endif; ?>

    <link rel="stylesheet" href="css/style.css"><!-- Placed last to override all other styles -->
    <link rel="canonical" href="<?=$strDomain?><?=$strCanonical?>">
    <link rel="author" href="<?=$strDomain?>humans.txt">

    <?php if ($strTwitterName != NULL): // Establish a link to your twitter profile ?>
        <link rel="me" href="http://twitter.com/<?=$strTwitterName?>">
    <?php endif;

    if ($strShowShortURLs): // Should we show a shortened URL? Moved to separate branch.
        //$strShortURL = NULL;
        $strURLShortner = "http://is.gd/create.php?format=simple&url=";
        //print $strURLShortner;
        $strURLtoShorten = urlencode($strDomain.$strCanonical);
        //print $strURLtoShorten;
        $strShortenURLcommand = "\"$strURLShortner$strURLtoShorten\"";
        //print $strShortenURLcommand;

        // Can't use this with my host
        //$strShortURL = file_get_contents($strURLShortner);
        // wget
        //$strShortURL = exec('wget $strShortenURLcommand');
        //print $strShortURL;
        // Curl
        function shorten_page_url (&$strShortenURLcommand) {
            if (!function_exists('curl_init')){ 
                die('CURL is not installed!');
            }
            print $strShortenURLcommand;
            //Initialize the Curl session
            $ch = curl_init($strShortenURLcommand);
            $timeout = 1000; // set to zero for no timeout
            //Set curl to return the data instead of printing it to the browser.
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            // Specify a timeout
            curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            //Set the URL
            //curl_setopt($ch, CURLOPT_URL, $strShortenURLcommand);
            //Execute the fetch
            $strShortURL = curl_exec($ch);
            if(curl_exec($ch) === false):
                echo 'Curl error: ' . curl_error($ch);
            else:
                echo 'Operation completed without any errors';
            endif;
            //Close the connection
            curl_close($ch);
            //$strShortURL now contains the contents of $URL
            echo $strShortURL;
        }
        shorten_page_url($strShortenURLcommand);

        //fopen
        //$handle = @fopen($strURLShortner, "r");
        //$strShortURL = @fread($handle, @filesize($strURLShortner));
        //@fclose($handle);
        //if ($strShortURL) { return $strShortURL; };
        ?>
        <link rel="shorturl" href="<?=$strShortURL?>">
    <?php endif; ?>
    
    <script src="js/libs/modernizr.min.js"></script>
</head>