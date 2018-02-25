<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
<body id="contact">
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

            <?php
						if(have_posts()):
							while(have_posts()):
								the_post();
					  ?>

            <?php the_content(); ?>

    					<?php
    						endwhile;
    					else:
    					?>

    					<p>ページはありません。</p>

    					<?php
    						endif;
    					?>

				</article>
			</main>
		</div><!-- /.wrapper -->
<?php get_footer(); ?>
