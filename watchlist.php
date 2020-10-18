<?php /* Template Name: Watchlist */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale-1.0">
	<link href="/wp-content/themes/MindMates-wp/static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/wp-content/themes/MindMates-wp/static/fonts/font-awesome.min.css">
	<link href="/wp-content/themes/MindMates-wp/static/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/MindMates-wp/static/css/boffi.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/MindMates-wp/static/css/style.css">
  	<link rel="stylesheet" type="text/css" href="/wp-content/themes/MindMates-wp/static/css/static.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/MindMates-wp/static/css/dipaolo.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/MindMates-wp/static/css/dipaolo2.css">
 	<link rel="stylesheet" type="text/css" href="/wp-content/themes/MindMates-wp/static/css/header.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/MindMates-wp/static/css/lago.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/MindMates-wp/static/css/lago-style.css">
	<link href="/wp-content/themes/MindMates-wp/static/css/material-components-web.css" rel="stylesheet">
 	<link href="/wp-content/themes/MindMates-wp/static/css/clean-blog.css" rel="stylesheet">
 	<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
	<script src="/wp-content/themes/MindMates-wp/static/js/main.js"></script>
 	<script src="https://kit.fontawesome.com/4c0b3ae1d6.js" crossorigin="anonymous"></script>
 	<script type="text/javascript">
    	var memberID = "<?php echo esc_html( $current_user->user_email ); ?>";
    </script>
	<title>My watchlist - <?php bloginfo( 'name' ) ?></title>
</head>
<body>
	<div id="sidebar-section-peripherial">
    <?php get_sidebar(); ?>
		<div class="mdc-layout-grid wiki-grid">
		  <div class="mdc-layout-grid__inner">
		  </div>
		</div>
		<div class="padded">
			<?php get_footer(); ?>
		</div>
	</div>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<script src="/wp-content/themes/MindMates-wp/static/js/jquery.js"></script>
<script src="/wp-content/themes/MindMates-wp/static/js/clean-blog.js"></script>
<script src="/wp-content/themes/MindMates-wp/static/js/sidebar.js"></script>
<script src="https://sdk.amazonaws.com/js/aws-sdk-2.766.0.min.js"></script>
<script src="/wp-content/themes/MindMates-wp/static/js/wiki.js"></script>
<script src="/wp-content/themes/MindMates-wp/static/js/watchlist.js"></script>
</body>
</html>