<?php
// Global Site Settings
$siteName = "BootstraPHP";
$siteDomain = "http://bootstraphp.trippnology.net/"; // Be sure to include trailing slash
$siteTagline = "Twitter Bootstrap based modular framework";

// Back end stuff
$adminEmail = "";
$adminDevMode = true; // Load development stuff?
$adminGoogleAnalID = "UA-XXXXX-X";
$userIP = $_SERVER['REMOTE_ADDR'];

// Style Settings
$styleBootswatch = ""; // Should we load a Bootswatch? Leave blank for no.
$styleResponsive = true; // Load responsive stylesheet?
$styleGoogleFonts = 'Source+Code+Pro';

//Bootstrap directories
$dirBSCSS = "bs/docs/assets/css/";
$dirBSImg = "bs/docs/assets/img/";
$dirBSJS = "bs/docs/assets/js/";

// External sites
$socialTwitterName = "Trippnology";
$socialFacebookURL = "http://www.facebook.com/Trippnology";

// Form to email
// Server Setup
$strFromName = $siteName;
$strFromAdd = $adminEmail;
$strMailHost = "";
$strRecipientName = "Trippnology";
$strRecipientEmail = $adminEmail;
$strSubject = "Contact from your website";
$strMsgHeader = "Someone has sent you a message:";

// Set fields to use here
//DIM strName, strEmail, strTelephone, strMessage
$strName = $_REQUEST["Name"];
$strEmail = $_REQUEST["Email"];
$strTelephone = $_REQUEST["Telephone"];
$strMessage = $_REQUEST["Message"];
?>