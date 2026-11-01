<?php
session_start();

define('DATA_FILE', __DIR__ . '/../data/messages.json');

function e($text)
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function isLoggedIn()
{
    return !empty($_SESSION['username']);
}

function getMessages()
{
    if (!file_exists(DATA_FILE)) {
        return [];
    }
    $data = json_decode(file_get_contents(DATA_FILE), true);
    return is_array($data) ? $data : [];
}

function saveMessage($name, $text)
{
    $messages = getMessages();
    $messages[] = [
        'name' => $name,
        'text' => $text,
        'time' => date('d-m-Y H:i'),
    ];
    file_put_contents(DATA_FILE, json_encode($messages, JSON_PRETTY_PRINT));
}
