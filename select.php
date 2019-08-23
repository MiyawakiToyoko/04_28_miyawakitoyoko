<?php
//1.  DB接続します xxxにDB名を入れます
try {
$pdo = new PDO('mysql:dbname=camp03_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM clothes_table");
$status = $stmt->execute();

//３．データ表示
 echo '<form method="post" action="branch.php">'; //削除ボタンを押したら分岐画面に飛ばす
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<div class="test">'; // dipタグ囲んでもok
    $view .= '<div><input type="radio" name ="selectid" value="'.$result["id"].'"></div>';
    // $view .= '<p>カテゴリ: '.$result["category"].'</p>';
    // $view .= '<p>金額: '.$result["price"].'円</p>';
    // $view .= '<p>ブランド名: '.$result["brand"].'</p>';
    // $view .= '<p>登録日:'.$result["indate"].'</p>';
    //$view .= '<div class="imgsize"><img src="./gazou/'.$result["img"].'"  width="150"></div>'; //gazouフォルダから抽出
    $view .= '<a href="./gazou/'.$result["img"].'" data-lightbox="abc" data-title="カテゴリ: '.$result["category"].'/金額: '.$result["price"].'円'.'/ブランド名: '.$result["brand"].'/登録日:'.$result["indate"].'"><img src="./gazou/'.$result["img"].'" width="150" alt="">';
    // $view .= '<div class="deletebtn"><input type="submit" name="delete" value="削除"></div>';
    $view .= '</div>';

    $view .='</form>';

  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>アイテム一覧</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="./style.css" target=_top>
<style>div{padding: 10px;font-size:16px;}</style>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <ul class="menu">
    <li>
      <a href="index.php">My Closet</a>       
      <span>新規アイテムを登録</span>
    </li>
    <li>
      <a href="select.php">Closet list</a>
      <span>アイテム一覧を見る</span>
    </li>
    <li>
      <a href="search.php">Search</a>
      <span>アイテムを探す</span>
    </li>
    <li>
      <a href="search.php">コーディネート</a>
      <span>コーディネートを登録</span>
    </li>
  </ul>
</header>
<!-- Head[End] -->

<!-- Main[Start] $view-->
<div class="jumbotron">
   <fieldset>
    <legend>Closet list</legend>
          <!-- [$view] この箇所にphpを埋め込んでいる -->
    <div class="container jumbotron"><?=$view?></div>
    <div class="deletebtn"><input type="submit" name="delete" value="削除"></div>

  </fieldset>
<p class="toTop">ページトップへ</p>


  </div>
  <!-- Main[End] -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>

<!-- ①jQueryファイルの読み込み -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- ②jsを紐づけする -->
<script src="test.js"></script>

</body>
</html>
