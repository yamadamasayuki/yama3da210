<?php
/*
Template Name: Gallery
*/
?>
<?php get_header(); ?>
<body id="gallery">
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
						if (have_posts()) :
							while(have_posts()) :
								the_post();
					?>

					<div class="post">
						<?php the_title('<h3>', '</h3>'); ?>
						<?php the_content(); ?>
					</div><!-- /.post -->

					<?php
							endwhile;
						else:
					?>

					<p>現在制作中です。</p>

					<?
					endif;
					?>

					<div id="navigator">
						<div class="prev"><a><?php previous_posts_link(); ?></a></div>
						<div class="next"><a><?php next_posts_link(); ?></a></div>
					</div><!-- /#navigator -->
				</article>
			</main>
		</div><!-- /.wrapper -->
		<script>
		</script>
<?php get_footer(); ?>
