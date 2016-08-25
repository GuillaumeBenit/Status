<?php include("status.php"); include("config.php"); ?>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
		<meta name="author" content="Guillaume">
		<link href="css/style.css" rel="stylesheet">
		<style>
			body {
				background-image: url(<?php echo $background_image; ?>);
				background-color: <?php echo $background_color; ?>;
			}
			header {
				background-color: <?php echo $header_color; ?>;
			}
		</style>
		<meta http-equiv="refresh" content="<?php echo $auto_refresh; ?>">
    </head>
    <body>
		<header>
			<img src="<?php echo $logo; ?>"/>
		</header>
    	<article>
    		<table>
                <?php status(); ?>
			</table>
			<h6>
				<?php echo "Last update the "; echo date("d/m/Y"); echo " at "; echo date("H:i:s"); ?>
			</h6>
    	</article>
		<footer>
			Created by <a href="https://github.com/Mumdi">Guillaume</a> - <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Licence Creative Commons" style="border-width:0; vertical-align:middle;" src="https://i.creativecommons.org/l/by-sa/4.0/80x15.png"/></a>
		</fotter>
    </body>
</html>