<?php
  $article_name = $_GET['detail'];
  if($contents = file_get_contents('article/contents/'.$article_name.'.txt')){
  }else{
    header("Location: index.php");
  }

 ?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="images/logo01.png">
    <link rel="stylesheet" media="all" href="css/style.css">
    <link rel="stylesheet" media="all" href="css/toppage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <title>RS合同研究室 | 最新技術を学べる理想の研究室を目指す</title>
  </head>
  <body id='top'>
    <div id="wrapper">
      <div id="sidebar">
        <div id="sidebarWrap">
          <h1><img src="images/ranaka.jpg" width="87" height="25" alt="logo"></h1>
          <nav id="mainnav">
            <p id="menuWrap"><a id="menu"><span id="menuBtn"></span></a></p>
            <div class="panel">
              <ul>
                <li><a href="index.php">TOP</a></li>
                <li><a href="#sec01">ARTICLE</a></li>
                <?php if (isset($_COOKIE['my_id'])) {
                  echo '<li><a href="#sec02">FORM</a></li>';
                }
                ?>
                <li><a href="#sec03">LABORATORY</a></li>
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
            <h2><span><?php echo $article_name; ?></span></h2>
          </header>
          <div class="inner">
            <div class="article">
              <img src="<?php echo "article/img/".$article_name.".jpg"; ?>" width="100%" alt="">
              <h2><?php echo $article_name."概要"; ?></h2>
              <article>
                <p><?php echo nl2br($contents,false); ?></p>
              </article>
            </div>
          </div>
        </section>
        <?php
        if (isset($_COOKIE['my_id'])){
          $kiji = sprintf('
          <section id="sec02">
            <div class="inner">
              <form class="signup" action="project_join.php" method="post">
    						<div class="article">
    							<h2>プロジェクト参加申請</h2>
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
                  <input type="hidden" name="title" value="%s PROJECT">
    							<div class="submit_ip">
    								<input class="cp_ipsubmit" type="submit" value="送信">
    							</div>
    						</div>
    					</form>
            </div>
          </section>
          ',$article_name);
          echo $kiji;
        }
        ?>
        <section id="sec03">
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
      </div>
    </div>
  </body>
</html>
