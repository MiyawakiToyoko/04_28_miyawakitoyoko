<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ検索</title>
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
<form action="search2.php" method="post">
  <div class="jumbotron">
   <fieldset>
    <legend>Search Item</legend>
    <!-- name="xxx" の部分に注目するようにしておいてください🤗 -->
     <!-- <label>カテゴリ：<input type="text" name="category"></label><br> -->
    <!-- <label for="category">カテゴリ：</label>
      <select name="category" id="category">
      </select><br> -->
      <h1>カテゴリから検索</h1>
      <label>選択してください</label>
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
              <p>靴</p> 
              <label><input type="radio" name="category" value="shoes" class="radio"><img src="img\shoes.png" class="radio_image"></label>
            </div>
            <div class="category_name">
              <p>鞄</p> 
              <label><input type="radio" name="category" value="bag" class="radio"><img src="img\bag.png" class="radio_image"></label>
            </div>
            <div class="category_name">
              <p>小物</p> 
              <label><input type="radio" name="category" value="accessory" class="radio"><img src="img\accessory.png" class="radio_image"></label>
            </div>
          </div>
          <input type="submit" value="検索" class="btn">
      <br>
    </div>

 
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>