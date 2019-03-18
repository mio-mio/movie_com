<?php
require_once('title.php');
require_once('review.php');

$aquaman = new Title('アクアマン','Aquaman', '2019年2月8日');
$theMule = new Title('運び屋', 'The Mule', '2019年3月8日');
$dpikachu = new Title('名探偵ピカチュウ', 'Pokemon Detective Pikachu', '2019年5月10日');
$dumbo = new Title('実写版 ダンボ', 'Dumbo', '2019年3月20日');
$capMarvel = new Title('キャプテンマーベル', 'Captain Marvel', '2019年3月15日');
$greenBook = new Title('グリーンブック', 'Green Book', '2019年3月1日');
$alita = new Title('アリータ：バトル・エンジェル', 'Alita:Battle Angel', '2019年2月22日');
$bRhapsody = new Title('ボヘミアン・ラプソディ', 'Bohemian Rhapsody', '2018年11月9日');
$dumbo->setSatisfaction(3);

$titles = array($aquaman,$theMule,$dpikachu,$dumbo, $capMarvel, $greenBook,$alita,$bRhapsody);


$review1 = new Review($capMarvel->getName(), "最高に面白い映画でした！");
$review2 = new Review($bRhapsody->getName(), "彼女に無理やり連れて行かれましたが、悪くなかったです。");
$review3 = new Review($aquaman->getName(), "思っていたより良かったです。");

$reviews = array($review1, $review2, $review3);

?>