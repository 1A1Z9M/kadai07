
<html>
  <head>
    <meta charset="utf-8">
    <title>レビューを見る</title>
  </head>
  <body>
    <select name="item" id="item">
        <option value="">商品を選択</option>
        <option value="全ての商品">全ての商品</option>
        <option value="商品1">商品1</option>
        <option value="商品2">商品2</option>
        <option value="商品3">商品3</option>
        <option value="商品4">商品4</option>
        <option value="商品5">商品5</option>
    </select>
    <input type="button" value="レビューを見る" onclick="clickBtn()"/>

    <!-- <script>
      function clickBtn(){
        const selectedItem = document.getElementById("item").value;
        if (selectedItem == "全ての商品") {

        } elseif (selectedItem == "商品1") {

        } elseif (selectedItem == "商品2") {
          
        } elseif (selectedItem == "商品3") {
          
        } elseif (selectedItem == "商品4") {
          
        } elseif (selectedItem == "商品5") {
          
        }
      }
    </script> -->
  <ul>
      <li>
        <label for="avg-rate">平均評価</label><br>

      </li>
      <li>
        <label for="all-review">全てのレビュー</label>
        <table>
    <tr>
        <th>ユーザー名</th>
        <th>投稿日時</th>
        <th>商品</th>
        <th>評価</th>
        <th>件名</th>
        <th>コメント</th>
      </tr>
    <?PHP
    $file = fopen('data/data.txt', 'r');// ファイルを開く
    while(!feof($file)){
      $str = fgets($file);
      list($date,$name,$item,$rate,$title,$comment) = explode("," , $str);
    ?>
      <tr>
        <td><?PHP echo $name ?></td>
        <td><?PHP echo $date ?></td>
        <td><?PHP echo $item ?></td>
        <td><?PHP echo $rate ?></td>
        <td><?PHP echo $title ?></td>
        <td><?PHP echo $comment ?></td>
      </tr>
    <?PHP 
    }
    fclose($file); // ファイルを閉じる
    ?>
    </table>
      </li>
    </ul>
    
    <ul>
    <li><a href="index.php">TOPに戻る</a></li>
    <li><a href="post.php">レビューを登録する</a></li>
    </ul>
  </body>
</html>