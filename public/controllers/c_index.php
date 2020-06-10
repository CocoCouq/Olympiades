<?php
require_once './models/m_player.php';
require_once './models/m_news.php';

session_start();

if (!$_COOKIE['accept'] && isset($_POST['acceptCookies'])) {
    setcookie('accept', true);
    header('location:./index.php');
}


$players = new Player();
$news = new News();
$tab = $players->getLastSubscription();
$tab_news = $news->getFiveRand();
$tab_citations = $players->getFiveRand();
$tab_final = [];
$i = 0; $j = 0;

foreach ($tab as $player) {
    $tab_final[$i] = $tab_news[$i]->start.$player->f_name.' '.$player->name.$tab_news[$i]->end;
    $i++;
}
foreach ($tab_citations as $citation) {
    $tab_final[$i] = '"'.$citation->description.'"'.', <b>'.$citation->f_name.'</b> '.$citation->name;
    $i++;
}

shuffle($tab_final)
;
$limit = 20;
while (count($tab_final) < $limit)
    $tab_final[$i++] = $tab_final[$j++];

