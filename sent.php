<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>タイトル</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
  <header>
<h1> Hello,world  </h1>
  </header>
<div class="main">
  <div class="title">
    <h1>入力</h1>
  </div>
  <h3>名前</h3>
  <?php
   echo mb_substr($_POST["name"],0,4);
   echo "さん";
   ?>

</div>


</body>

</html>
