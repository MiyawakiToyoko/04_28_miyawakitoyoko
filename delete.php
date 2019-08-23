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

$selectid=$_GET['selectid'];

$dsn='mysql:dbname=camp03_db;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT category,img FROM clothes_table WHERE id=?';
$stmt=$dbh->prepare($sql);
$data[]=$selectid;
$stmt->execute($data);

$rec=$stmt->fetch(PDO::FETCH_ASSOC);
$category=$rec['category'];
$gazou_name=$rec['img'];

$dbh=null;

if($gazou_name=='')
{
	$gazou='';
}
else
{
	$gazou='<img src="./gazou/'.$gazou_name.'">';
}

}
catch(Exception $e)
{
	echo 'データベースに接続できませんでした。';
	exit();
}

?>

<?php echo 'カテゴリ: '.$category; 
      echo '<br>';
	  echo $gazou;
?>

<p>このアイテムをリストから削除しますか？</p>

<form method="post" action="delete2.php">
<input type="hidden" name="id" value="<?php echo $selectid; ?>">
<input type="hidden" name="gazou_name" value="<?php echo $gazou_name; ?>">
<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="ＯＫ">
</form>


</body>
</html>