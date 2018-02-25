<?php get_header(); ?>
<body id="home">
	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="svg" viewbox="0 0 100 100">
			<rect id="rect" x="-200" y="-200" width="500" height="500" fill="white">
				<animate
					attributeType="XML" attributeName="fill"
					dur="40s" repeatCount="indefinite"
					values="white; yellow; green; cyan; blue; magenta; red; gray; white;" />
			</rect>
	</svg>
	<div id="homeWrap">
		<div id="title">
			<h1>Masayuki</h1>
			<h1>Yamada</h1>
			<h1>Po<span style="letter-spacing:0.1em;">rt</span>folio</h1>
		</div><!-- /#title -->
		<div id="headerNavi">
			<nav>
				<?php wp_nav_menu(); ?>
			</nav>
		</div>
		<div id="menuOpener">
			<button type="button" id="humberger" class="tcon tcon-menu--arrow tcon-menu--arrowup" aria-label="toggle menu">
				<span class="tcon-menu__lines" aria-hidden="true"></span>
				<span class="tcon-visuallyhidden">toggle menu</span>
			</button>
		</div>
		<div id="scrollTop">
		  <div><i class="fa fa-angle-up fa-05x" aria-hidden="true"></i></div>
		</div>
		<div id="loadWrap">
			<div id="load">
				<div>
					<div>N</div><div>o</div><div>w</div>&ensp;<div>L</div><div>o</div><div>a</div><div>d</div><div>i</div><div>n</div><div>g</div><div>.</div><div>.</div><div>.</div>
				</div>
			</div><!-- /#load -->
		</div><!-- /#loadWrap -->
		<div class="cubeWrap move">
			<div class="cube rolling">
				<div class="plane-front">yama3da210</div>
				<div class="plane-back"></div>
				<div class="plane-right"></div>
				<div class="plane-left"></div>
				<div class="plane-top"></div>
				<div class="plane-bottom"></div>
			</div><!-- /.cube rolling pitching -->
		</div><!-- /.cubeWrap -->
	</div><!-- /#container -->
	<?php wp_footer(); ?>
