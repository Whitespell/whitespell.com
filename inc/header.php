<?php

$pages = array(
				'index'	=>	array(

					'name' => 'Home',
					'meta' => array(
						'title' => '',
						'description' => ''
					)

				),
				'features'	=>	array(

					'name' => 'Features',
					'meta' => array(
						'title' => 'Features | ',
						'description' => ''
					)

				),
				'plans'	=>	array(

					'name' => 'Plans',
					'meta' => array(
						'title' => 'Pricing | ',
						'description' => ''
					)

				),
				'docs'	=>	array(

					'name' => 'Docs',
					'meta' => array(
						'title' => 'Docs | ',
						'description' => ''
					)

				),
				'blog'	=>	array(

					'name' => 'Blog',
					'meta' => array(
						'title' => 'Blog | ',
						'description' => ''
					)

				)
		);

$page_name = basename($_SERVER["SCRIPT_FILENAME"], '.php');

if( !empty($pages[$page_name]) ){

	$meta_title = $pages[$page_name]['meta']['title'];
	$meta_description = $pages[$page_name]['meta']['description'];

} else {//if not use default

	$meta_title = '';
	$meta_description = $pages['index']['meta']['description'];

}

function getMainNav($class = 'inline'){

	global $pages;
	global $page_name;

	if( !empty($class) ){
		$class = "class='$class'";
	} else {
		$class = '';
	}

	echo "<ul $class>";

		foreach($pages as $filename => $props){

			$class = $filename === $page_name ? " class='active'" : '';
			echo "<a href='/".($filename === 'index' ? '' : $filename)."'><li".$class.">".$props['name']."</li></a>";

		}

	echo '</ul>';

}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $meta_title; ?>Whitespell</title>

	<meta name="viewport" content="width=device-width; initial-scale=1.0; user-scalable=no" />

	<meta name='description' content="<?php echo $meta_description; ?>">
	<meta name='author' content="Whitespell llc">
	<meta name='follow' content='index, follow'>

	<link rel="shortcut icon" href="/assets/favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="/assets/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/assets/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/assets/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/assets/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/assets/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/assets/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/assets/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/assets/favicons/apple-touch-icon-152x152.png">
	<link rel="icon" type="image/png" href="/assets/favicons/favicon-196x196.png" sizes="196x196">
	<link rel="icon" type="image/png" href="/assets/favicons/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="/assets/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/assets/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/assets/favicons/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#3796cf">
	<meta name="msapplication-TileImage" content="/assets/favicons/mstile-144x144.png">
	<meta name="msapplication-config" content="/assets/favicons/browserconfig.xml">

	<style><?php include_once "css/main.css"; ?></style>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>

	<style>
	<?php
		include_once "fonts/ss-standard/ss-standard.css";

		//Code font
		//include_once "fonts/meslolgldz/stylesheet.css";
		//Codemirror
		//include_once "js/libs/codemirror-4.4/lib/default.css";

		//Prism
		include_once "js/libs/prism/prism.css";
	?>
	</style>
</head>
<body>

	<header id="header">
		<div class="container">
			<a href="/"><h1 id="logo"><img src="/assets/img/whitespell-logo.svg" alt="Workfloor Logo"></h1></a>

			<a class="btn" id="main-nav-trigger">Menu</a>
			<nav id="main-nav" class="hidden">
				<?php getMainNav(); ?>
			</nav>
		</div>
	</header>