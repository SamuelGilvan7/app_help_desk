<?php

require_once __DIR__ . '/config.php';

session_start();

if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== 'YES') {
    header('Location: ' . BASE_URL . '/index.php?erro=05');
    exit;
} 

?>