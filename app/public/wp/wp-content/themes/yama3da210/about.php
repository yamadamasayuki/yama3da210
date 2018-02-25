<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>
<body id="about">
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
				</div>
			</header>
		</div><!-- /#menuOpener -->
		<div class="wrapper">
			<main id="contents">
				<article>
					<div id="pofilePhoto">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/profile.jpg" width="958" height="548" alt="山田将之プロフィール">
					</div><!-- /#pofilePhoto -->
					<div id="contentsWrap">
						<div id="name">
							<h2>山田 将之</h2><h2>Masayuki Yamada</h2>
						</div><!-- /#name -->
						<div id="profile">
							<p>1988年生まれ、埼玉県蓮田市出身。2008年、学校法人呉学園 日本写真芸術専門学校卒業。2016年より写真からWeb制作に転向して活動中。</p>
						</div><!-- /#profile -->
						<div id="skill" class="status">
							<p>使用スキル</p>
							<p>HTML5 / CSS3 / SCSS / COMPASS / JavaScript / jQuery / Ajax / WordPress / PHP / SVG / Photoshop / Illustrator / Studio Lighting</p>
						</div><!-- /#skill -->
						<div id="sns" class="status">
							<p>SNS</p>
							<div><a href="https://www.facebook.com/masayuki.yamada.5815" target="_blank"><i id="facebook" class="fa fa-facebook-square fa-3x snsIcon" aria-hidden="true"></i></a></div>
							<div id="instagram" class="snsIcon"><a href="https://www.instagram.com/yama3da210/" target="_blank"></a></div>
						</div><!-- /#skill -->
					</div><!-- /#contentsWrap -->
				</article>
			</main>
		</div><!-- /.wrapper -->
	<?php get_footer(); ?>
