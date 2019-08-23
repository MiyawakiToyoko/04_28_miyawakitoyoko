<?php
//1. POSTデータ取得
//まず前のphpからデーターを受け取る（この受け取ったデータをもとにbindValueと結びつけるため）

$category = $_POST['category'];
$price = $_POST["price"];
$brand = $_POST["brand"];
$gazou = $_FILES['gazou'];

// gazouフォルダに登録したファイルをアップロード move_uploaded_file(移動元,移動先)
move_uploaded_file($gazou['tmp_name'],'./gazou/'.$gazou['name']);
$gazou_name = $gazou['name'];


//2. DB接続します xxxにDB名を入力する
//ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます
try {
  $pdo = new PDO('mysql:dbname=camp03_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成 //ここにカラム名を入力する
//xxx_table(テーブル名)はテーブル名を入力します
$stmt = $pdo->prepare("INSERT INTO clothes_table(id, category, price, brand, indate, img)VALUES(NULL, :category, :price, :brand, sysdate(), :img)");
$stmt->bindValue(':category', $category, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':price', $price, PDO::PARAM_INT);
$stmt->bindValue(':brand', $brand, PDO::PARAM_STR);
$stmt->bindValue(':img', $gazou_name, PDO::PARAM_STR);  //データベースには一旦ファイル名を登録
$status = $stmt->execute();


//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト 書くときにLocation: in この:　のあとは半角スペースがいるので注意！！
  header("Location: select.php");
  exit;

}
?>
