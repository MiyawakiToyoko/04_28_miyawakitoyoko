<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>アイテム削除</title>
  <link rel="stylesheet" href="./style.css" target=_top>
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<?php

try
{
$selectid=$_POST['id'];
$gazou_name=$_POST['gazou_name'];

$dsn='mysql:dbname=camp03_db;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='DELETE FROM clothes_table WHERE id=?';
$stmt=$dbh->prepare($sql);
$data[]=$selectid;
$stmt->execute($data);

$dbh=null;

if($gazou_name!='')
{
	unlink('./gazou/'.$gazou_name);
}

}
catch (Exception $e)
{
	print 'データベースに接続できませんでした。';
	exit();
}

?>

<p>削除しました。</p><br>
<br>
<a href="select.php"> 戻る</a>