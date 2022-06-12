<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<title>レビューを登録する</title>
</head>
<body>
<form action="write.php" method="post">
  <ul>
    <li>
      <label for="name">ユーザーネーム</label><br>
      <input type="text" id="name" name="name" placeholder="山田 太郎">
    </li>
    <li>
      <label for="item">商品</label><br>
      <select name="item" id="item">
        <option value="">商品を選択</option>
        <option value="item1">商品1</option>
        <option value="item2">商品2</option>
        <option value="item3">商品3</option>
        <option value="item4">商品4</option>
        <option value="item5">商品5</option>
      </select>
    </li>
    <li class="star-rate">  
      <label for="star5">★</label>
      <input id="star5" type="radio" name="rate" value="5">
      <label for="star4">★</label>
      <input id="star4" type="radio" name="rate" value="4">
      <label for="star3">★</label>
      <input id="star3" type="radio" name="rate" value="3">
      <label for="star2">★</label>
      <input id="star2" type="radio" name="rate" value="2">
      <label for="star1">★</label>
      <input id="star1" type="radio" name="rate" value="1">
    </li>
    <li>
      <label for="title">タイトル</label><br>
      <input type="text" id="title" name="title" placeholder="最高です">
    </li>
    <li>
      <label for="comment">コメント</label><br>
      <textarea id="comment" name="comment" placeholder="期待通りの商品でした。"></textarea>
    </li>
    <li class="button">
      <button type="submmit">レビューを送信</button>
    </li>
  </ul>
</form>
<ul>
<li><a href="index.php">TOPに戻る</a></li>
<li><a href="read.php">他のレビューを見る</a></li>
</ul>
</body>
</html>