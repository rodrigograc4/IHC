<?php
session_start();
$username = $_POST['username'];
$game = $_POST['game'];

if (!isset($username) || !isset($game)) {
    echo json_encode(['status' => 'error', 'message' => 'Missing parameters']);
    die();
}

$file = file_get_contents('wishlist.txt');
$wishlist = explode("\n", $file);

if (in_array("$username:$game", $wishlist)) {
    echo json_encode(['status' => 'error', 'message' => 'Game already in wishlist']);
    die();
}

$wishlist[] = "$username:$game";
file_put_contents('wishlist.txt', implode("\n", $wishlist));

echo json_encode(['status' => 'success']);
die();
?>
