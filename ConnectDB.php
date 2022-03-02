<?php
function sendSQL($sqlcommand){
  $host = 'localhost';
  $username = 'root';
  $passwd = '';
  $dbname = 'shakeburi_database';

/*
  $host = "mysql6.star.ne.jp";
  $username ="shakeburi_admin";
  $passwd = "yuyufan4510471";
  $dbname = 'shakeburi_database';
*/

  //データベースに接続
  header('Content-Type: text/html; charset=UTF-8');
  $db = mysqli_connect($host, $username, $passwd, $dbname);

  if (!$db) {
    die('データベースの接続に失敗しました。');
  }
  mysqli_set_charset($db, 'utf8');
  //SQLの利用
  if($result = mysqli_query($db, $sqlcommand)){
    return $result;
  }else{
    echo "SQLの実行に失敗しました";
  }
}


 ?>
