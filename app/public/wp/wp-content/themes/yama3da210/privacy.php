<?php
/*
Template Name: Privacy
*/
?>
<?php get_header(); ?>
<body id="privacypolicy">
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
					<h5 id="privacyTitle">プライバシーポリシー</h5>
					<p>当サイトは、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、個人情報保護の重要性の認識と取組みを徹底することにより、個人情報の保護を推進致します。</p>
					<ul>
						<li>
							<p>個人情報の管理</p>
							<p>当サイトは、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。</p>
						</li>
						<li>
							<p>個人情報の利用目的</p>
							<p>お客さまからお預かりした個人情報は、当サイトからのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
						</li>
						<li>
							<p>個人情報の第三者への開示・提供の禁止</p>
							<p>当サイトは、お客さまよりお預かりした個人情報を適切に理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。</p>
							<p>お客さまの同意がある場合</p>
							<p>お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合</p>
							<p>法令に基づき開示することが必要である場合</p>
						</li>
						<li>
							<p>個人情報の安全対策</p>
							<p>当サイトは、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。</p>
						</li>
						<li>
							<p>ご本人の照会</p>
							<p>お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。</p>
						</li>
						<li>
							<p>法令、規範の遵守と見直し</p>
							<p>当サイトは、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</p>
						</li>
						<li>
							<p>お問い合せ</p>
							<p>当サイトの個人情報の取扱に関するお問い合せは下記までご連絡ください。</p>
							<p>山田 将之</p>
							<p>メールアドレス：yama3da.210@gmail.com</p>
						</li>
					</ul>
				</article>
			</main>
		</div><!-- /.wrapper -->
<?php get_footer(); ?>
