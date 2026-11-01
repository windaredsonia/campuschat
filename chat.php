<?php
require 'includes/functions.php';
date_default_timezone_set('Asia/Jakarta');

if (!isLoggedIn()) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = trim($_POST['message'] ?? '');
    if ($text !== '') {
        saveMessage($_SESSION['username'], $text);
    }
    header('Location: chat.php');
    exit;
}

$messages = getMessages();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusChat - Ruang Obrolan</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="box">
    <div class="top">
        <h1>CampusChat</h1>
        <span>Halo, <b><?= e($_SESSION['username']) ?></b> | <a href="logout.php">Keluar</a></span>
    </div>

    <div class="messages">
        <?php if (empty($messages)): ?>
            <p>Belum ada pesan. Jadilah yang pertama!</p>
        <?php endif; ?>
        <?php foreach ($messages as $m): ?>
            <div class="msg">
                <b><?= e($m['name']) ?></b> <small><?= e($m['time']) ?></small><br>
                <?= nl2br(e($m['text'])) ?>
            </div>
        <?php endforeach; ?>
    </div>

    <form method="post">
        <textarea name="message" rows="3" placeholder="Tulis pesan..."></textarea>
        <button type="submit">Kirim</button>
    </form>
</div>
</body>
</html>
