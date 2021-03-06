<?php get_header(); ?>
<body id="index">
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
					<div id="posts">

						<?php
							if(have_posts()):
								while(have_posts()):
									the_post();
						?>

						<div class="post">
							<a href="<?php the_permalink(); ?>">
								<div class="postInnerLeft">

									<?php
										if(has_post_thumbnail()) : ?>
										<?php the_post_thumbnail('thumbnail', 'class=eyecatch'); ?>
									<?php else: ?>
										<img class="eyecatch" src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/noimage.png" width="200" height="auto" alt="">
									<?php endif?>

								</div><!-- /.postInnerLeft -->
								<div class="postInnerRight">
									<?php the_title('<h3>', '</h3>'); ?>
									<?php the_excerpt('<p>', '</p>'); ?>
									<p class="date"><?php echo get_the_date(); ?></p>
									<div id="share">
										<ul>
											<li class="sfa"><a href="https://www.facebook.com/sharer/sharer.php?src=bm&u=<?php the_permalink() ?>&t=<?php the_title(); ?>" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;"><span class="icon icon-facebook"></span><span class="s_count"><?php if(function_exists('scc_get_share_facebook')) echo scc_get_share_facebook(); ?></span></a></li>
											<li class="st"><a href="http://twitter.com/share?url=<?php the_permalink() ?>&text=<?php the_title(); ?>" onclick="window.open(this.href, 'Twindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;"><span class="icon icon-twitter"></span><span class="s_count"><?php if(function_exists('scc_get_share_twitter')) echo scc_get_share_twitter(); ?></span><br></a></li>
											<li class="sg"><a href="https://plus.google.com/share?url=<?php the_permalink() ?>" onclick="window.open(this.href, 'Gwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;"><span class="icon icon-googleplus"></span><span class="s_count"><?php if(function_exists('scc_get_share_gplus')) echo scc_get_share_gplus(); ?></span><br></a></li>
											<li class="sh"><a href="http://b.hatena.ne.jp/append?<?php the_permalink() ?>" onclick="window.open(this.href, 'Hwindow', 'width=750, height=600, menubar=no, toolbar=no, scrollbars=yes'); return false;"><span class="icon icon-hatena"></span><span class="s_count"><?php if(function_exists('scc_get_share_hatebu')) echo scc_get_share_hatebu(); ?></span><br></a></li>
										</ul>
									</div><!-- /#share -->
								</div><!-- /.postInnerRight -->
							</a>
						</div><!-- /.post -->

						<?php
							endwhile;
						else:
						?>

						<p>記事はありません。</p>

						<?php
							endif;
						?>

						<div id="navigator">
							<div class="prev"><a><?php previous_posts_link(); ?></a></div>
							<div class="next"><a><?php next_posts_link(); ?></a></div>
						</div><!-- /#navigator -->
					</div><!-- /.posts -->
					<?php get_sidebar(); ?>
				</article>
			</main>
		</div><!-- /.wrapper -->
<?php get_footer(); ?>
