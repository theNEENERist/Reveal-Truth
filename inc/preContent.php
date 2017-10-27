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
    <?php include 'googleAnalytics.php'?>
</head>
<body>
    <?php include 'header.php'?>