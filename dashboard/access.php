<?php

function dashboard_role_permissions(): array
{
    return [
        'dashboard' => [1, 2, 3],
        'contact' => [1, 2],
        'tour' => [1, 2],
        'news' => [1, 3],
        'notifications' => [1, 3],
        'events' => [1, 3],
        'achievements' => [1, 3],
        'chat' => [1],
        'users' => [1],
        'config' => [1],
    ];
}

function dashboard_get_current_role_id(): int
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    $sessionRoleId = (int) ($_SESSION['admin_role_id'] ?? 0);
    if ($sessionRoleId > 0) {
        return $sessionRoleId;
    }

    $adminId = (int) ($_SESSION['admin_id'] ?? 0);
    if ($adminId <= 0) {
        return 0;
    }

    try {
        require __DIR__ . '/../config/db.php';
        $stmt = $pdo->prepare('SELECT role_id, name, username FROM users WHERE id = ? LIMIT 1');
        $stmt->execute([$adminId]);
        $user = $stmt->fetch();

        if ($user) {
            $resolvedRole = (int) ($user['role_id'] ?? 0);
            $_SESSION['admin_role_id'] = $resolvedRole;
            if (!empty($user['name'])) {
                $_SESSION['admin_name'] = $user['name'];
            } elseif (!empty($user['username'])) {
                $_SESSION['admin_name'] = $user['username'];
            }
            return $resolvedRole;
        }
    } catch (Throwable $e) {
        return 0;
    }

    return 0;
}

function dashboard_can_access(string $moduleKey): bool
{
    $permissions = dashboard_role_permissions();
    $roleId = dashboard_get_current_role_id();

    if ($roleId <= 0) {
        return false;
    }

    if (!isset($permissions[$moduleKey])) {
        return false;
    }

    return in_array($roleId, $permissions[$moduleKey], true);
}

function dashboard_require_access(string $moduleKey): void
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    if (empty($_SESSION['admin_id'])) {
        header('Location: log-in.php');
        exit;
    }

    if (!dashboard_can_access($moduleKey)) {
        header('Location: dashboard.php?access=denied');
        exit;
    }
}
