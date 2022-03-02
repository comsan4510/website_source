<?php

  //cookieのidが存在するときのみメールを送信する。
  if (isset($_COOKIE['my_id'])) {
    $name = $_POST['name'];
    $mail_address = 'infomation@ranaka.stars.ne.jp';
    $mail_title = $_POST['title'];
    $header = 'From:' . $_POST['mail_adress'];
    $body = $name.'からの参加申請';
    if (mb_send_mail($mail_address,$mail_title,$body,$header)) {
      echo 'ok';
      header("Location: index.php");
    }
  }else{
    $_SESSION['miss'] = "送信に失敗しました";
    header("Location: index.php");
  }



 ?>
