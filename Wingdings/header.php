<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo('name'); ?><?php wp_title( '|', true, 'left' ); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<style>
        body {
        	font-family: Arial, sans-serif;
        	font-size: 15px;
        	outline: none;
        	background: #000;
        }
        
        #inner a {
        	color: #C800DB;
        }
        #inner a:hover {
        	color: #83008F;
        }
        
        #mainContent a {
        	font-family: Arial, sans-serif;
        	color: #0BDB34;
        }
        #mainContent a:hover {
        	color: #DBD20B;
        }
        #mainContent a:active {
        	color: #83008F;
        }
        
        #mainContent {
        	color: #0BDB34;
        	overflow-y: auto;
        	max-height: 100%;
        	margin-left: 9px;
        }
        
        #mainContent p {
        	font-family: "Wingdings", sans-serif;
        	font-size: 12px;
        }
        
        #sidebar {
        	color: #DBD20B;
        	background: transparent;
        	border-left: solid #CCCCCC 3.5px;
        }
        
        #sidebar a {
        	color: #0BDB34;
        }
        #sidebar a:hover{
        	color: #DBD20B;
        }
        #sidebar a:active{
        	color: #83008F;
        }
        
        #footer {
        	margin: 0.5px;
        	background: transparent;
        	color: #C800DB;
        	font-weight: bold;
        	padding: 2%;
        }
        #footer:hover {
        	color: #83008F;
        }
        
        #contentArea,
        #footer {
        	border-top: solid #CCCCCC 3px;
        }
	</style>
	<?php wp_head();  ?>
</head>
<body>
	<div align="center">
		<div id="inner">
			<header>
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo bloginfo('name'); ?>" rel="home">
				<h1><?php bloginfo( 'name' ); ?></h1>
			</a>
			</header>
	