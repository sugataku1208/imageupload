<?php

error_reporting(E_ALL); //全てのエラーを報告する
ini_set('display_errors', 'On'); //画面にエラーを表示させるか

// 1.ファイルが送信されていた場合
if (!empty($_FILES)) {

// A.フォームから送られたファイルを受信
  $file = $_FILES['image'];

// B.メッセージ表示用と画像表示用の変数を用意
  $msg = '';
  $img_path = '';

// C.画像アップロードプログラム（外部のphpファイル）を読み込む
  include('upload.php');

}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <title>ホームページのタイトル</title>
</head>
<body>

<p><?php if (!empty($msg)) echo $msg; ?></p>

<h1>画像アップロード</h1>

<form method="post" enctype="multipart/form-data">

  <input type="file" name="image">

  <input type="submit" value="アップロード">

</form>

<?php if (!empty($img_path)) { ?>
  <div class="img_area">
    <p>アップロードした画像</p>
    <img src="<?php echo $img_path; ?>">
  </div>
<?php } ?>

</body>
</html>