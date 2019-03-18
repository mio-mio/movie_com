<?php 
require_once('title.php');
require_once('data.php');
require_once('review.php');

$titleName = $_GET['name'];

$title = Title::findByName($titles, $titleName);
?>
<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="wrapper">
    <h1 id="signboard"><?php echo $titleName ?></h1>
    <!-- 詳細ページの中身 -->
    <img src="http://placehold.it/1000x500" alt="" />
    <div class="title-contents">
    <!-- 満足度-->
    <p>満足度：
    <?php for($i=0;$i<=$title->getSatisfaction();$i++): ?>
      <img src="img/OK.png" class="img">
    <?php endfor?>
    <br>
    <?php var_dump($reviews);?>
    <!-- 全てのレビュー -->
    <?php foreach($reviews as $review): ?>
    <h3><?php echo $review->getTitleName() ?></h3>
    <p><?php echo $review->getBody() ?>
    <?php endforeach ?>
    

    </div>

    <p><a href="index.php">← 作品一覧へ</a></p>
</div>
</body>
</html>