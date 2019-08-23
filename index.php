<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link rel="stylesheet" href="./style.css" target=_top>
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

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

<!-- Main[Start] -->
<!-- ここでinsert.phpにデータを送っている -->
<!-- ファイルを送信するときは enctype="multipart/form-data" -->
<form action="insert.php" method="post" enctype="multipart/form-data"> 
  <div class="jumbotron">
   <fieldset>
    <legend>My Closet</legend>
    <!-- name="xxx" の部分に注目するようにしておいてください🤗 -->

    <!--課題： 手持ちの洋服や小物を登録して、一覧化、検索、コーディネート登録等ができるアプリを作る -->

    <!-- ここから登録用画面 -->
      <h1 class="title">アイテム登録</h1>
      <!-- カテゴリは画像選択にする -->
      <label class="select1">・カテゴリを選択してください</label>
      <div class='div_class'>
          <div class="category_choice">
            <div class="category_name">
              <p>トップス</p>  
              <label><input type="radio" name="category" value="tops" class="radio"><img src="img\tops.png" class="radio_image"></label>
            </div>
            <div class="category_name">
              <p>アウター</p> 
              <label><input type="radio" name="category" value="outer" class="radio"><img src="img\outer.png" class="radio_image"></label>
            </div>
            <div class="category_name">
              <p>ボトムス</p> 
              <label><input type="radio" name="category" value="bottoms" class="radio"><img src="img\bottoms.png" class="radio_image"></label>
            </div>
            <div class="category_name">
              <p>ワンピース</p> 
              <label><input type="radio" name="category" value="one-piece" class="radio"><img src="img\one-piece.png" class="radio_image"></label>
            </div>
            <div class="category_name">
              <p>シューズ</p> 
              <label><input type="radio" name="category" value="shoes" class="radio"><img src="img\shoes.png" class="radio_image"></label>
            </div>
            <div class="category_name">
              <p>バッグ</p> 
              <label><input type="radio" name="category" value="bag" class="radio"><img src="img\bag.png" class="radio_image"></label>
            </div>
            <div class="category_name">
              <p>小物</p> 
              <label><input type="radio" name="category" value="accessory" class="radio"><img src="img\accessory.png" class="radio_image"></label>

            </div>
          </div>
      <br>
      <label class="select1">・購入金額 / ブランド名を入力してください</label>
    <div class="cp_iptxt">
    <label><input type="text" name="price" placeholder="購入金額"></label><br>
    </div>
    <div class="cp_iptxt">
    <label><input type="text" name="brand" placeholder="ブランド名"></label><br>
    </div>

<label class="select1">・アイテム画像を登録してください</label><br>
<div class="upfile"><input type="file" name="gazou"></div><br>
     </form>
     
     <input type="submit" value="登録" class="btn">

</div>
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


<!-- ①jQueryファイルの読み込み -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- ②jsを紐づけする -->
<script src="test.js"></script>
<!-- ①②はhead内に書いても良いがbody内に書くより読み込みが遅くなる。①②の順で書かないとエラーになるので注意-->

</body>
</html>