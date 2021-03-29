<?php include 'includes/fp-config.php' ?>
<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/forms.css">
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
</head>

<header>
    <a href="index.php"><img id="logo" src="images/enerel-logo.jpeg" alt="logo"></a>

    <div id="cssmenu">
        <ul>
            <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i>HOME</span></a></li>
            <li><a href="about.php"><span><i class="fa fa-fw fa-bank"></i>ABOUT</span></a></li>
            <li><a href="services.php"><span><i class="fa fa-fw fa-cube"></i>SERVICES</span></a></li>
            <li><a href="gallery.php"><span><i class="fa fa-fw fa-camera-retro"></i>GALLERY</span></a></li>
            <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i>VIDEOS</span></a>
                <ul>
                    <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
                </ul>
            </li>
            <li><a href="contacts.php"><span><i class="fa fa-fw fa-phone"></i>CONTACTS</span></a></li>
            <li><a href="map.php"><span><i class="fa fa-fw fa-eye"></i>LIVE MAP</span></a></li>
        </ul>
    </div>
</header>