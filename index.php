
<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="最新技術を学べる理想の研究室を目指す">
	<meta name="viewport" content="width=device-width">
	<title>RS合同研究室 | 最新技術を学べる理想の研究室を目指す</title>
	<link rel="icon" href="images/logo01.png">
	<link rel="stylesheet" media="all" href="css/style.css">
	<link rel="stylesheet" media="all" href="css/toppage.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<!--<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="js/script.js"></script>
</head>

<body id="top">
	<?php
	//Webサイトドメイン：https://shakeburi.xyz/

	if (isset($_COOKIE['my_id'])) {
		$member_name = $_COOKIE['name'];
	}else{
		if(isset($_COOKIE['miss'])){
			echo $_COOKIE['miss'];
		}
	}

	 ?>
	<div id="wrapper">
		<div id="sidebar">
			<div id="sidebarWrap">
				<h1><img src="images/ranaka.jpg" width="87" height="25" alt="logo"></h1>
				<nav id="mainnav">
					<p id="menuWrap"><a id="menu"><span id="menuBtn"></span></a></p>
					<div class="panel">
						<ul>
							<li><a href="#top">TOP</a></li>
							<li><a href="#sec01">MESSAGE</a></li>
							<li><a href="#sec02">GALLERY</a></li>
							<li><a href="#sec03">BRAND</a></li>
							<li><a href="#sec04">PROJECT</a></li>
							<?php if (!isset($_COOKIE['my_id'])) {
								echo '<li><a href="#sec05">LOGIN / SIGN UP</a></li>';
							}
						 	?>
							<li><a href="#sec06">LABORATORY</a></li>
						</ul>
						<ul id="sns">
							<li><a href="https://www.facebook.com/Ranaka-102413724866870/" target="_blank"><img src="images/iconFb.png" width="20" height="20" alt="FB"></a></li>
							<li><a href="https://twitter.com/ranaka0825" target="_blank"><img src="images/iconTw.png" width="20" height="20" alt="twitter"></a></li>
							<li><a href="https://www.instagram.com/ranaka4510/" target="_blank"><img src="images/iconInsta.png" width="20" height="20" alt="Instagram"></a></li>
							<li><a href="https://www.youtube.com/channel/UCt30jJgChL8qeT9VPadidSw" target="_blank"><img src="images/iconYouTube.png" width="20" height="20" alt="You Tube"></a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<div id="content">
			<section id="sec01">
				<header>
					<h2><span>Joint laboratory</span></h2>
					<div id="slick01">
						<div><p id="mainImg"><a href="#"><img src="images/0035AB15-4C13-4FEF-B55E-6904A57F71C2.jpeg"></a></p></div>
						<div><p id="mainImg"><a href="#"><img src="images/8FEAD273-184B-470D-B520-3AA13E7D9F33.jpeg"></a></p></div>
						<div><p id="mainImg"><a><video src="images/13090439722168.MP4" width="100%" autoplay muted loop></video></a></p></div>
						<div><p id="mainImg"><a href="#"><img src="images/S__52084738.jpg"></a></p></div>
						<!--<div><p id="mainImg"><a href="#"><img src="images/2E5B8949-1229-42C0-AD15-9B6615207681.jpeg"></a></p></div>-->
					</div>
				</header>
				<script type="text/javascript">
					$(function(){
						$('#slick01').slick({
							autoplay: true, //自動再生
							dots: true, //ドットインジケータの表示
						});
					});
				</script>
			</section>
			<!-- MESSAGE -->
			<section id="sec01">
				<header>
					<h2><span>MESSAGE</span></h2>
				</header>
				<div class="innerS">
					<p>RS同研究室は複数のゼミ・大学・専門学校の学生が学びあい、オリジナル作品や同人作品・商品に至るまでを研究・開発する<b>非公式</b>のゼミです。</p>
					<p>本研究室は「花川・前田合同研究室」を前進としており、そこに他大学の学生や社会人・専門学校の学生を集めてできました。「国際的に活躍することができる幅広い教養と専門知識を身に付け、高度な問題解決能力と社会的適応の力を備える」ために、様々なプロジェクトを通して最先端の技術を習得します。</p>
				</div>
			</section>
			<!-- // MESSAGE -->
			<!-- GALLERY -->
			<section id="sec02">
				<header>
					<h2><span>GALLERY</span></h2>
				</header>
				<ul id="gallery">
					<li><img src="images/photo01.jpg" width="360" height="350" alt=""></li>
					<li><img src="images/photo02.jpg" width="360" height="350" alt=""></li>
					<li><img src="images/photo03.jpg" width="360" height="350" alt=""></li>
					<li><img src="images/photo04.jpg" width="360" height="350" alt=""></li>
					<li><img src="images/photo05.jpg" width="360" height="350" alt=""></li>
					<li><img src="images/photo06.jpg" width="360" height="350" alt=""></li>
					<li class="full"><img src="images/hakubutukan.jpeg" width="1080" height="695" alt=""></li>
					<li><img src="images/3ds.jpeg" width="360" height="350" alt=""></li>
					<li><img src="images/drone.jpg" width="360" height="350" alt=""></li>
					<li><img src="images/photo10.jpg" width="360" height="350" alt=""></li>
					<li><img src="images/soraniwa.jpeg" width="360" height="350" alt=""></li>
					<li><img src="images/shake.png" width="360" height="350" alt=""></li>
					<li><img src="images/mac_program.jpeg" width="360" height="350" alt=""></li>
				</ul>
			</section>
			<!-- // GALLERY -->
			<!-- BRAND -->
			<section id="sec03">
				<header>
					<h2><span>BRAND</span></h2>
				</header>
				<div class="inner">
					<ul class="col4">
						<li>
							<p class="img"><a href="https://ranaka-amk.com/"><img src="images/logo01.png" width="168" height="168" alt=""></a></p>
							<p>RanakaではWebアプリケーション開発からゲーム開発まで、あらゆるシステム開発を行っています。</p>
						</li>
						<li>
							<p class="img"><img src="images/logo02.png" width="168" height="168" alt=""></p>
							<p>ゲーム開発をメインとしたサークルです。ゲーム開発の他に、イラスト、小説、音楽など様々な製作活動を行っています。</p>
						</li>
					</ul>
				</div>
			</section>
			<!-- // BRAND -->
			<!-- PROJECT -->
			<section id="sec04">
				<header>
					<h2><span>PROJECT</span></h2>
				</header>
				<div class="inner">
					<a href="article.php?detail=yumin" class="article">
						<div class="article">
							<h2>遊民村</h2>
								<img src="images/photo14.jpg" width="370" height="224" alt="">
								<p>ギグワークのためのオンラインと最新情報技術を融合し、ギグワーク形態で収入を得て経済的自立を支援するサービスである「Yumin Village」の開発を行っています。</p>
								<p>Yumin Villageは様々な事情で通勤ができない、地方で暮らしたい、2か月の休暇が欲しい等，多様な働き方、多様な人生観も持つ人たちがそれぞれの生き方や考え方を尊重しながら働ける社会を実現する有益なプラットフォームです。</p>
						</div>
					</a>
					<a href="article.php?detail=CoinEscape" class="article">
						<div class="article">
							<h2>CoinEscape</h2>
							<img src="images/photo15.jpg" width="370" height="224" alt="">
							<p>マップ上に様々なアイテムを集めながら脱出を目指す、王道鬼ごっこホラーゲームです。様々な鬼ごっこ系ホラーゲームを参考にしながら開発を進めています。</p>
							<p>タイトルのコインはゲーム内に出現するアイテムを指しており、数種類の不思議な力の宿ったコインを活用して襲ってくる敵を退けながら脱出を目指すゲームです。様々な人に楽しんでもらう為、怖さをほんの少しだけ軽減し、システムの楽しさを実感してもらえるようなゲーム開発を目指しています。</p>
						</div>
					</a>
					<a href="article.php?detail=drone" class="article">
						<div class="article">
							<h2>AIドローン</h2>
							<img src="images/drone.jpg" width="370" height="224" alt="">
							<p>世界的に有名なドローンメーカーであるDJIが提供するTello Eduを使用して、pythonプログラムで飛行させながら画像認識を行うドローンを開発します。</p>
							<p>通常のドローンは、ラジコンのように人が操作して様々な飛行を行いますが、本プロジェクトで開発しているドローンは、全てプログラムによる自動飛行です。この技術が発展すると、建物内を巡回する警備ドローンや荷物を認識して自動で運んでくれる宅配ドローンが実現できます。</p><br>
							<p>画像認識のプログラムは、専用のAPIを使う方法と、写真をたくさん用意してそれをディープラーニングによって学習させる方法の二つのアプローチで開発を進めます。</p>
						</div>
					</a>
					<a href="article.php?detail=Study" class="article">
						<div class="article">
							<h2>勉強会</h2>
								<img src="images/photo05.jpg" width="370" height="224" alt="">
								<p>定期的にDiscord等で集まって資格試験や趣味の勉強等、色々な事を勉強していきます。現在、オラクル認定Javaプログラマー(Silver)の取得を目指して勉強会を開催しています。</p>
								<p>Java SE 11認定資格は、日本オラクルが実施しているJavaプログラマ向けの資格です。Silverからは国際資格となり、海外に行っても通用する資格となっています。日本の国家資格に基本情報技術者が存在しますが、これは日本国内でのみ通用する資格です。</p>
						</div>
					</a>
				</div>
			</section>
			<!-- // PROJECT -->
			<?php
				if (!isset($_COOKIE['my_id'])) {
			 echo '
			<!-- SIGN UP -->
			<section id="sec05">
				<header>
					<h2><span>LOGIN / SIGN UP</span></h2>
				</header>
				<div class="inner">
					<form class="signup" action="touroku.php" method="post">
						<div class="article">
							<h2>メンバー登録</h2>
							<div class="cp_iptxt">
								<input type="text" placeholder="ニックネーム(英数字)" name="name" value="" required>
							</div>
							<div class="cp_iptxt">
								<input type="email" placeholder="メールアドレス" name="mail_adress" value="" required>
							</div>
							<div class="cp_iptxt">
								<input type="password" placeholder="パスワード" name="password" required>
							</div>
							<div class="cp_iptxt">
								<input type="password" placeholder="パスワード再確認" name="re_password" required>
							</div>
							<div class="submit_ip">
								<input class="cp_ipsubmit" type="submit" value="送信">
							</div>
						</div>
					</form>
					<form class="login" action="login.php" method="post">
						<div class="article">
							<h2>ログイン</h2>
							<div class="cp_iptxt">
								<input type="email" placeholder="メールアドレス" name="mail_address" value="" required>
							</div>
							<div class="cp_iptxt">
								<input type="password" placeholder="パスワード" name="password" required>
							</div>
							<div class="submit_ip">
								<input class="cp_ipsubmit" type="submit" value="送信">
							</div>
						</div>
					</form>
				</div>
			</section>
			';
		}
			 ?>
			<!-- // SIGN UP -->

			<!-- LABORATORY -->
			<section id="sec06">
				<header>
					<h2><span>LABORATORY</span></h2>
				</header>
				<div class="inner">
					<ul class="col2">
						<li>
							<p>〒580-8502<br>大阪府松原市天美東５丁目４−３３</p>
							<p>e-Mail gi19006@hannan-u.ac.jp</p>
							<p>活動時間 10:00〜18:00（土日定休）</p>
							<p>※都合により活動時間が短くなる場合がございます</p>
						</li>
						<li>
							<div id="map">
								<!-- GOOGLE MAP -->
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1161.248833340854!2d135.53501659970462!3d34.59132131395855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000d94d4ee52019%3A0xd4799472eb667ec2!2z6Ziq5Y2X5aSn5a2m!5e0!3m2!1sja!2sjp!4v1634832183509!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>								<!-- // GOOGLE MAP -->
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- // LABORATORY -->
			<footer id="footer">
				Copyright(c) 2021 Ranaka/Syakeburinomori. All Rights Reserved. Design by <a href="http://f-tpl.com" target="_blank">http://f-tpl.com</a><!-- ←クレジット表記を外す場合はシリアルキーが必要です http://f-tpl.com/credit/ -->
			</footer>

		</div>
	</div>

</body>
</html>
