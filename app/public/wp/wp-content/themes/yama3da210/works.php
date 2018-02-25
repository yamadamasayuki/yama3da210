<?php
/*
Template Name: Works
*/
?>
<?php get_header(); ?>
<body id="works">
	<div class="content container">
		<div id="header">
			<header>
				<div id="title">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/titlelogo.png" width="150" height="auto" alt="山田将之">
					</a>
				</div><!-- /#title -->
				<div id="headerNavi">
					<nav>
						<?php wp_nav_menu(); ?>
					</nav>
				</div><!-- /#headerNavi -->
				<div id="menuOpener">
					<button type="button" id="humberger" class="tcon tcon-menu--arrow tcon-menu--arrowup" aria-label="toggle menu">
					  <span class="tcon-menu__lines" aria-hidden="true"></span>
					  <span class="tcon-visuallyhidden">toggle menu</span>
					</button>
				</div><!-- /#menuOpener -->
			</header>
		</div><!-- /#header -->
		<div class="wrapper">
			<main id="contents">
				<article>
					<div class="box">
						<div class="catagory">
							<h3>Web</h3>
						</div><!-- /.catagory -->
						<div class="thumbnail">
							<ul>
								<li>
									<a href="http://suso-fashion.com" target="_blank" class="shadow">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/suso_screenshot.png" width="300" height="200" alt="ファッションブランドSuSo">
									</a>
									<a href="http://suso-fashion.com" target="_blank">
										<p>ファッションブランド SuSo</p>
									</a>
								</li>
							</ul>
						</div><!-- /.thumbnail -->
					</div><!-- /.box -->
				</article>
			</main>
		</div><!-- /.wrapper -->
<?php get_footer(); ?>
