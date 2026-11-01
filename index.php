<?php
require 'includes/functions.php';

if (isLoggedIn()) {
    header('Location: chat.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['username'] ?? '');
    if ($name === '') {
        $error = 'Nama tidak boleh kosong.';
    } else {
        $_SESSION['username'] = $name;
        header('Location: chat.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusChat - Masuk</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="box">
    <h1>CampusChat</h1>
    <p>Masukkan nama untuk mulai mengobrol.</p>
    <?php if ($error): ?><p class="error"><?= e($error) ?></p><?php endif; ?>
    <form method="post">
        <input type="text" name="username" placeholder="Nama kamu" maxlength="30">
        <button type="submit">Masuk</button>
    </form>
</div>
</body>
</html>
