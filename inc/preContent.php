<!DOCTYPE html>
<html>
<head>
    <title><?php echo isset($title) ? $title : "Reveal" ?></title>
    <meta charset="utf-8"/>
    <link href="css/main.css" rel="stylesheet" />
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/main.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=.8">
    <meta name="description" content="Reveal - A Conference For Your Faith, Louisville, Ky.">
  	<meta name="theme-color" content="#09243F"/>
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo isset($title) ? $title : "Reveal" ?>" />
	<meta property="og:url" content="<?php echo 'https://www.' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
	<meta property="og:image" content="https://www.reveal-truth.com/img/reveal_facebook_blue.png" />
	<meta property="og:description" content="The mission of the Reveal Apologetics Conference is to encourage and prepare the average Christian to be able to provide evidence for the truth of Christianity." />
 	<link href="/../img/favicon.ico" rel="icon">
    <?php include 'googleAnalytics.php'?>
</head>
<body>
    <?php include 'header.php'?>