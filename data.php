<?php
require_once('title.php');

$aquaman = new Title('アクアマン','Aquaman', '2019年2月8日');
$theMule = new Title('運び屋', 'The Mule', '2019年3月8日');
$dpikachu = new Title('名探偵ピカチュウ', 'Pokemon Detective Pikachu', '2019年5月10日');
$dumbo = new Title('実写版 ダンボ', 'Dumbo', '2019年3月20日');

$dumbo->setSatisfaction(3);

$titles = array($aquaman,$theMule,$dpikachu,$dumbo);



?>