<?php
/*
  プログラム名：touroku
  プログラム概要：メンバー登録処理を行います
  作成者：浅野龍太郎
  作成日：2021/10/21

*/

  Include "ConnectDB.php";

  header('Content-Type: text/html; charset=UTF-8');
  session_start();
  $_SESSION['null_input'] = null;

  //メールアドレスとパスワードの入力チェック
  if (!(isset($_POST['mail_adress']) || isset($_POST['password']))) {
    setcookie('my_id','');
    $_SESSION['null_input'] = "入力項目に漏れがあります";//nullセッションを発行
    header("Location: index.php");
  }

  $name = $_POST['name'];
  $mail_adress = $_POST['mail_adress'];
  $password = $_POST['password'];
  echo $name;
  $name = mb_convert_encoding($name,'UTF-8','auto');

  //passwordsaltを生成してpasswordと一緒にハッシュ化
  $passwordsalt = substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, 12);
  $password = $password.$passwordsalt;
  $password_hash = password_hash($password,PASSWORD_BCRYPT);

  //SQL文を作成※インジェクション未対策
  //INSERT INTO テーブル名 (列名1, 列名2,...) VALUES (値1, 値2,...);
  $command = sprintf('INSERT INTO member_table (name,password,passwordsalt,mail_address) VALUES (
    "%s","%s","%s","%s");',
      $name,
      $password_hash,
      $passwordsalt,
      $mail_adress
    );

  //SQLの実行
  //使用方法：sendSQL(SQL文);
  if (sendSQL($command)) {
    //メンバー情報を取得
    $member_read = sprintf('SELECT * FROM member_table WHERE name="%s";',
        $name
      );
    $result = sendSQL($member_read);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    //セッションを発行
    $_SESSION['id'] = substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, 12);//session_id($name);
    $_SESSION['name'] = $row['name'];
    $_SESSION['member_id'] = $row['member_id'];

    //cookieを設定
    setcookie('my_id',$_SESSION['id'],time()+60*60*24*7);
    setcookie('name',$_SESSION['name'],time()+60*60*24*7);
    setcookie('member_id',$_SESSION['member_id'],time()+60*60*24*7);

    header("Location: index.php");


  }else{
    setcookie('my_id','');
    $_SESSION['null_input'] = "登録に失敗しました";
    header("Location: index.php");
  }

 ?>
