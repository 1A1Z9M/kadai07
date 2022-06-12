<?php

$name = $_POST["name"];
$item = $_POST["item"];
$rate = $_POST["rate"];
$title = $_POST["title"];
$comment = $_POST["comment"];
$c = ",";

//文字作成
$str = date("Y年m月d日 H時i分").$c.$name.$c.$item.$c.$rate.$c.$title.$c.$comment;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>レビュー登録完了</title>
</head>
<body>

<h1>レビューの登録が完了しました。</h1>
<h2><a href="read.php">こちら</a>からレビューを確認できます。</h2>

<ul>
<li><a href="post.php">他のレビューを登録する</a></li>
</ul>
</body>
</html>