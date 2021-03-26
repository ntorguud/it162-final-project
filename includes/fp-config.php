<?php

$siteKey = "6LdLIjsaAAAAAIptc806REeHd9uCIa11UyPXQjIp";
$secretKey = "6LdLIjsaAAAAAFeyjHmo895xWVEahZ8lioQr6n5X";

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website
$server = 'github.com';

$logo_color = ''; //make logo_color an empty string by default

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Enerel Dent Dental Clinic Home Page";
        $logo = 'fa-teeth';
        $PageID = 'Welcome to "Enerel Dent"';
    break;
    
    case 'about.php':
        $title = "Enerel Dent Dental Clinic About Page";
        $logo = 'fa-cube';
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Meet our team';
    break;

    case 'galleries.php':
        $title = "Galleries";
        $logo = "fa-camera-retro";
        $logo_color = ' style="color:#00f"';
        $PageID = 'Galleries';
    break;

    case 'webcam.php':
        $title = "Web Cam Page";
        $logo = "fa-eye";
        $logo_color = ' style="color:#00f"';
        $PageID = 'Web surveillance ';
    break;

    case 'calendar.php':
        $title = "Google Calendar Page";
        $logo = "fa-calendar";
        $logo_color = ' style="color:#00f"';
        $PageID = 'Calendar';
    break;

    case 'map.php':
        $title = "Google Map Page";
        $logo = "fa-map-o";
        $logo_color = ' style="color:#00f"';
        $PageID = 'Google Map';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default  
        $PageID = '';
   }
?>

