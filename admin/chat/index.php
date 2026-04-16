<?php
session_start();
if (empty($_SESSION['admin_id'])) {
    header('Location: ../../log-in.php');
    exit;
}

header('Location: ../../chat-admin.php');
exit;
