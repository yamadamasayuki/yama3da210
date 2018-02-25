<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/common/images/favicon.ico">
	<link href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/common/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<?php wp_head(); ?>
<!-- enable html5 for IE  -->
<script src="common/js/html5shiv.js"></script>
</head>
