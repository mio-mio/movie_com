<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
?>

<?php require_once('data.php') ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="wrapper">
    <h1 id="signboard">映画口コミ サイト</h1>
    <div class="flexbox">
    <?php foreach($titles as $title): ?>
    <a href="show.php?name=<?php echo $title->getName() ?>">
    <div class="title-item">
        <img src="http://placehold.it/240x150" alt="" />
        <h3 class="title-name"><?php echo $title->getName() ?></h3>
        <h4 class="enName"><?php echo $title->getEnName() ?></h4>
        <p class="public-date">公開日：<?php echo $title->getPublicDate() ?></p>
    </div>
    </a>
    <?php endforeach ?>
  </div>
</div>
</body>
</html>
