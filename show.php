<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
?>

<?php 
require_once('title.php');
require_once('data.php');
require_once('user.php');

$titleName = $_GET['name'];
$title = Title::findByName($titles, $titleName);
$titleReviews = $title->getReviews($reviews);    
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
    <h1 id="each-signboard"><?php echo $titleName ?></h1>

    <!-- 満足度-->
    <p class="p-center">平均満足度：
    <?php //for($i=0;$i<=$title->getSatisfaction();$i++): ?>
      <img src="img/OK.png" class="img">
    <?php //endfor?>
    </p>   
    <br>

    <!-- 詳細ページの中身 -->
    <img src="http://placehold.it/1200x500" alt=""  class="img-show">
    <div class="title-contents">
    <!-- レビューコメント一覧 -->
    <p class="p-center">皆さんのレビューコメント：</p>
    <div class="review-box">
        <?php foreach((array)$titleReviews as $review): ?>
        <!--レビューコメント本文-->
        <p><?php echo $review->getBody() ?> 
        <!-- レビューの星の数 -->
            <?php for($i=0;$i<=$review->getStar();$i++): ?>
            <img src="img/OK.png" class="img">
            <?php endfor ?>

        <?php endforeach ?>
    </div>

    </div>

    <p class="p-center footer"><a href="index.php">← 作品一覧へ</a></p>
</div>
</body>
</html>