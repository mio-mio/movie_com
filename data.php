<?php
require_once('title.php');
require_once('review.php');
require_once('user.php');

$aquaman = new Title('アクアマン','Aquaman', '2019年2月8日');
$theMule = new Title('運び屋', 'The Mule', '2019年3月8日');
$capMarvel = new Title('キャプテンマーベル', 'Captain Marvel', '2019年3月15日');
$greenBook = new Title('グリーンブック', 'Green Book', '2019年3月1日');
$alita = new Title('アリータ：バトル・エンジェル', 'Alita:Battle Angel', '2019年2月22日');
$bRhapsody = new Title('ボヘミアン・ラプソディ', 'Bohemian Rhapsody', '2018年11月9日');

$titles = array($aquaman,$theMule, $capMarvel, $greenBook, $alita,$bRhapsody);


$user1 = new User('James', 'male');
$user2 = new User('Bell', 'female');
$user3 = new User('Natsumi', 'female');
$user4 = new User('John', 'male');
$user5 = new User('Ariel', 'female');
$user6 = new User('Anna', 'female');
$user7 = new User('Fredy', 'male');

$users = array($user1, $user2, $user3, $user4, $user5, $user6, $user7);


$review1 = new Review($capMarvel->getName(), $user1->getId(),"最高に面白い映画でした！",5);
$review2 = new Review($bRhapsody->getName(), $user2->getId(),"彼女に無理やり連れて行かれましたが、悪くなかったです。",2);
$review3 = new Review($aquaman->getName(), $user3->getId(),"思っていたより良かったです。",4);
$review4 = new Review($theMule->getName(),$user4->getId(), "とても泣ける良い映画でした。あんな風にかっこよく年を取りたい。",5);
$review5 = new Review($theMule->getName(),$user5->getId(), "あまり楽しくありませんでした。",1);
$review6 = new Review($alita->getName(), $user6->getId(),"思っていたより良かったです。",3);
$review7 = new Review($aquaman->getName(), $user7->getId(),"最高に面白い映画でした！続編が楽しみ。",5);
$review8 = new Review($aquaman->getName(), $user2->getId(),"彼女に無理やり連れて行かれましたが、悪くなかったです。",3);
$review9 = new Review($alita->getName(), $user3->getId(),"セクシーでクールだった。",5);
$review10 = new Review($greenBook->getName(), $user7->getId(),"面白い映画でした！おすすめです。",5);
$review11 = new Review($capMarvel->getName(), $user2->getId(),"友達の付き合いで行きました。悪くなかったです。",3);
$review12 = new Review($bRhapsody->getName(), $user3->getId(),"曲が良かったです。",5);

$reviews = array($review1, $review2, $review3,$review4, $review5, $review6,$review7, $review8, $review9, $review10, $review11, $review12);

?>