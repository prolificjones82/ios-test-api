<?php
// generates db.json content
$numberOfPosts = 30;
$numberOfFixtures = 30;
$numberOfPlayers = 30;
$path = './db.json';

$json = [
    'news'      => [],
    'fixtures'  => [],
    'players'   => []
];

for ($i = 1; $i <= $numberOfPosts; $i++) {
    $json['news'][] = [
        'id'        => $i,
        'title'     => '',
        'date'      => '',
        'excerpt'   => '',
        'image'     => ''
    ];
}

for ($i = 1; $i <= $numberOfFixtures; $i++) {
    $json['news'][] = [
        'id'        => $i,
        'title'     => '',
        'date'      => '',
        'excerpt'   => '',
        'image'     => ''
    ];
}

for ($i = 1; $i <= $numberOfPlayers; $i++) {
    $json['news'][] = [
        'id'        => $i,
        'name'      => '',
        'number'    => '',
        'image'     => ''
    ];
}

$file = @fopen($path,"w");
if ($file != false){
    fwrite($file, json_encode($json));
    fclose($file);
    echo 'JSON generated';
}

exit;
