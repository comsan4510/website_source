<?php
  Include "ConnectDB.php";
  session_start();
  $_SESSION['null_input'] = null;
//メールアドレスとパスワードの入力チェック
if (!(isset($_POST['name']) || isset($_POST['password']))) {
  //$_SESSION['null_input'] = "ユーザー名又はパスワードが入力されていません";//nullセッションを発行
  setcookie('my_id','');
  setcookie('miss',"メールアドレス又はパスワードが入力されていません",time()+60);
  header("Location: index.php");
}else{
  $mail_adress = $_POST['mail_address'];
  $password = $_POST['password'];


  //メンバー情報を取得
  $command = sprintf('SELECT * FROM member_table WHERE mail_address="%s";',
      $mail_adress
    );
  $result = sendSQL($command);
  $row = $result->fetch_array(MYSQLI_ASSOC);
  $password = $password.$row['passwordsalt'];

  //パスワードを認証
  if (password_verify($password,$row['password'])) {

    //セッションを発行
    $_SESSION['id'] = substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, 12);
    //session_id($mail_adress);
    $_SESSION['name'] = $row['name'];
    $_SESSION['member_id'] = $row['member_id'];

    //cookieを設定
    setcookie('my_id',$_SESSION['id'],time()+60*60*24*7);
    setcookie('name',$_SESSION['name'],time()+60*60*24*7);
    setcookie('member_id',$_SESSION['member_id'],time()+60*60*24*7);

    header("Location: index.php");

  }else{
    setcookie('my_id','');
    setcookie('miss',"ユーザー名又はパスワードが違います",time()+60);
    //$_SESSION['null_input'] = "ユーザー名又はパスワードが違います";//nullセッションを発行
    header("Location: index.php");
  }

}


 ?>
