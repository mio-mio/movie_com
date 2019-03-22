<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
?>

<?php 
require_once('title.php');
require_once('user.php');
require_once('data.php');

$titleName = $_GET['name'];
$title = Title::findByName($titles, $titleName);
$titleReviews = $title->getReviews($reviews); 

//星の数の平均値
$staras_Data = array();
foreach((array)$titleReviews as $review){
    $starsData[] = $review->getStar();
}
$result = array_sum($starsData)/count($starsData);

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
    <?php for($i=1;$i<=$result;$i++): ?>
      <img src="img/OK.png" class="img">
    <?php endfor?>
    </p>   
    <br>

    <!-- 詳細ページの中身 -->
    <img src="http://placehold.it/1200x500" alt=""  class="img-show">
    <div class="title-contents">
    <!-- レビューコメント一覧 -->
    <p class="p-center">皆さんのレビューコメント：</p>
    <div class="review-box">
        <?php foreach($titleReviews as $review): ?>
        <!--レビューコメント本文-->
        <p><?php echo $review->getBody() ?> 
            <!-- レビューの星の数 -->
            <?php for($i=1;$i<=$review->getStar();$i++): ?>
            <img src="img/OK.png" class="img">
            <?php endfor ?>
        <!-- コメントしたユーザー -->
        <?php $user = $review->getUser($users) ?>
        by <?php //var_dump($users) ?>
        <?php echo $user->getName() ?>

        </p>
        <?php endforeach ?>
    </div>

    </div>

    <p class="p-center footer"><a href="index.php">← 作品一覧へ</a></p>
</div>
</body>
</html>