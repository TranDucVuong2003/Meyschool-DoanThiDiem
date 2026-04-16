<?php
session_start();
require_once __DIR__ . '/dashboard/access.php';
dashboard_require_access('chat');

$admin_name = htmlspecialchars($_SESSION['admin_name'] ?? 'Admin');
$_sidebar_page = 'chat-admin.php';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Chat trực tuyến | Meyschool Đoàn Thị Điểm</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --sidebar-w: 220px;
            --top-h: 60px;
            --primary: #2d6a9f;
            --primary-d: #1f3f5d;
            --accent: #439bd4;
            --bg: #f4f6f9;
            --card: #ffffff;
            --text: #2c3e50;
            --muted: #7a8fa6;
            --border: #e2e8f0;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            display: flex;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .main {
            margin-left: var(--sidebar-w);
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            min-width: 0;
        }

        .topbar {
            height: var(--top-h);
            background: var(--card);
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 28px;
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .topbar-title {
            font-size: 17px;
            font-weight: 700;
            color: var(--primary-d);
        }

        .topbar-user {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--primary);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 15px;
        }

        .user-info {
            text-align: right;
            line-height: 1.3;
        }

        .user-info .name {
            font-size: 13px;
            font-weight: 600;
        }

        .user-info .role {
            font-size: 11px;
            color: var(--muted);
        }

        .content {
            flex: 1;
            padding: 16px;
            min-height: 0;
        }

        .chat-admin {
            display: grid;
            grid-template-columns: 340px 1fr;
            gap: 12px;
            height: calc(100vh - var(--top-h) - 32px);
        }

        .panel {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 12px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            min-height: 0;
        }

        .panel-head {
            padding: 10px 12px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .panel-head input {
            width: 100%;
            height: 34px;
            border: 1px solid #d2d8e2;
            border-radius: 8px;
            padding: 0 10px;
            outline: none;
        }

        .conversation-list {
            list-style: none;
            padding: 0;
            margin: 0;
            overflow: auto;
            flex: 1;
        }

        .conversation-item {
            border-bottom: 1px solid #edf1f6;
            padding: 10px 12px;
            cursor: pointer;
        }

        .conversation-item.active {
            background: #f0f6ff;
        }

        .conversation-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
        }

        .conversation-name {
            font-size: 14px;
            font-weight: 700;
        }

        .conversation-phone {
            color: var(--muted);
            font-size: 12px;
            margin-top: 2px;
        }

        .conversation-preview {
            margin-top: 5px;
            color: #4b5563;
            font-size: 12px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .badge {
            min-width: 20px;
            height: 20px;
            border-radius: 999px;
            background: #ef4444;
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0 6px;
        }

        .chat-head {
            padding: 12px;
            border-bottom: 1px solid var(--border);
        }

        .chat-head-row {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 10px;
        }

        .chat-head .name {
            font-size: 16px;
            font-weight: 700;
        }

        .chat-head .meta {
            margin-top: 4px;
            font-size: 12px;
            color: var(--muted);
        }

        .close-chat-btn {
            border: 1px solid #d6deea;
            border-radius: 8px;
            background: #fff;
            color: #334155;
            font-size: 12px;
            font-weight: 700;
            height: 32px;
            padding: 0 10px;
            cursor: pointer;
        }

        .close-chat-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .chat-messages {
            flex: 1;
            overflow: auto;
            padding: 12px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            background: #fafcff;
        }

        .msg {
            max-width: 78%;
            padding: 9px 11px;
            border-radius: 10px;
            font-size: 14px;
            line-height: 1.45;
            white-space: pre-wrap;
            word-break: break-word;
        }

        .msg.guest {
            align-self: flex-start;
            background: #eef2ff;
            border: 1px solid #d8e1ff;
        }

        .msg.admin {
            align-self: flex-end;
            background: #d8efff;
            border: 1px solid #bbe3ff;
        }

        .msg-time {
            margin-top: 4px;
            font-size: 11px;
            color: #6b7280;
        }

        .chat-form {
            border-top: 1px solid var(--border);
            padding: 10px;
            display: flex;
            gap: 8px;
        }

        .chat-form textarea {
            flex: 1;
            resize: none;
            border: 1px solid #d2d8e2;
            border-radius: 8px;
            min-height: 40px;
            max-height: 110px;
            padding: 8px 10px;
            outline: none;
            font: inherit;
        }

        .chat-form button {
            border: none;
            border-radius: 8px;
            background: #2a6fd1;
            color: #fff;
            font-size: 14px;
            font-weight: 700;
            min-width: 90px;
            cursor: pointer;
            padding: 0 12px;
        }

        .empty-state {
            margin: auto;
            color: #9aa3af;
            font-size: 14px;
        }

        @media (max-width: 1024px) {
            .main {
                margin-left: 0;
                width: 100%;
            }

            .topbar {
                padding: 0 12px 0 58px;
                min-height: 56px;
                height: auto;
                gap: 8px;
            }

            .topbar-title {
                font-size: 15px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .topbar-user {
                min-width: 0;
            }

            .user-info {
                display: none;
            }

            .avatar {
                width: 32px;
                height: 32px;
                font-size: 13px;
            }

            .content {
                padding: 12px;
            }

            .chat-admin {
                grid-template-columns: 1fr;
                height: auto;
                min-height: calc(100vh - var(--top-h) - 24px);
            }

            .panel-head {
                padding: 12px;
            }

            .panel-head input {
                width: 100%;
            }

            .conversation-list {
                max-height: 260px;
            }

            .chat-head-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }

            .chat-messages {
                min-height: 260px;
            }

            .chat-form {
                flex-direction: column;
                gap: 8px;
            }

            .chat-form textarea {
                width: 100%;
                min-height: 92px;
            }

            .chat-form button {
                width: 100%;
                min-width: 0;
                height: 42px;
            }
        }
    </style>
</head>

<body>
    <?php include __DIR__ . '/dashboard/sidebar.php'; ?>

    <div class="main">
        <header class="topbar">
            <div class="topbar-title">Chat trực tuyến</div>
            <div class="topbar-user">
                <div class="user-info">
                    <div class="name"><?= $admin_name ?></div>
                    <div class="role">Quản trị viên</div>
                </div>
                <div class="avatar"><?= strtoupper(mb_substr($admin_name, 0, 1)) ?></div>
            </div>
        </header>

        <main class="content">
            <div class="chat-admin">
                <section class="panel">
                    <div class="panel-head">
                        <input id="keywordInput" type="text" placeholder="Tìm theo tên hoặc số điện thoại">
                    </div>
                    <ul id="conversationList" class="conversation-list"></ul>
                </section>

                <section class="panel">
                    <div id="chatHead" class="chat-head">
                        <div class="chat-head-row">
                            <div>
                                <div class="name">Chọn hội thoại để bắt đầu</div>
                                <div class="meta"></div>
                            </div>
                            <button id="closeChatBtn" class="close-chat-btn" type="button" disabled>Kết thúc chat</button>
                        </div>
                    </div>
                    <div id="chatMessages" class="chat-messages">
                        <div class="empty-state">Chưa chọn hội thoại.</div>
                    </div>
                    <form id="chatForm" class="chat-form" autocomplete="off">
                        <textarea id="chatInput" placeholder="Nhập phản hồi cho phụ huynh..." disabled></textarea>
                        <button id="sendBtn" type="submit" disabled>Gửi</button>
                    </form>
                </section>
            </div>
        </main>
    </div>

    <script>
        (function() {
            const listEl = document.getElementById('conversationList');
            const headEl = document.getElementById('chatHead');
            const messagesEl = document.getElementById('chatMessages');
            const formEl = document.getElementById('chatForm');
            const inputEl = document.getElementById('chatInput');
            const sendBtn = document.getElementById('sendBtn');
            const keywordInput = document.getElementById('keywordInput');

            let selectedConversationId = null;
            let selectedConversationStatus = '';
            let lastMessageId = 0;
            let pollingListTimer = null;
            let pollingMessagesTimer = null;

            function getCloseChatBtn() {
                return document.getElementById('closeChatBtn');
            }

            function updateComposerState() {
                const canReply = !!selectedConversationId && selectedConversationStatus === 'open';
                inputEl.disabled = !canReply;
                sendBtn.disabled = !canReply;
                const closeBtn = getCloseChatBtn();
                if (closeBtn) {
                    closeBtn.disabled = !canReply;
                }
                if (!canReply && selectedConversationStatus === 'closed') {
                    inputEl.placeholder = 'Hội thoại đã kết thúc.';
                } else {
                    inputEl.placeholder = 'Nhập phản hồi cho phụ huynh...';
                }
            }

            function escapeHtml(str) {
                const div = document.createElement('div');
                div.textContent = String(str || '');
                return div.innerHTML;
            }

            function formatDateTime(dt) {
                if (!dt) return '';
                const d = new Date(dt.replace(' ', 'T'));
                if (Number.isNaN(d.getTime())) return dt;
                return d.toLocaleString('vi-VN');
            }

            function setChatHeader(conversation) {
                if (!conversation) {
                    headEl.innerHTML =
                        '<div class="chat-head-row">' +
                        '<div><div class="name">Chọn hội thoại để bắt đầu</div><div class="meta"></div></div>' +
                        '<button id="closeChatBtn" class="close-chat-btn" type="button" disabled>Kết thúc chat</button>' +
                        '</div>';
                    selectedConversationStatus = '';
                    updateComposerState();
                    return;
                }

                selectedConversationStatus = String(conversation.status || 'open');
                headEl.innerHTML =
                    '<div class="chat-head-row">' +
                    '<div>' +
                    '<div class="name">' + escapeHtml(conversation.guest_name || 'Khách') + '</div>' +
                    '<div class="meta">' + escapeHtml(conversation.guest_phone || '') + ' | Trạng thái: ' + escapeHtml(conversation.status || 'open') + '</div>' +
                    '</div>' +
                    '<button id="closeChatBtn" class="close-chat-btn" type="button" ' + (selectedConversationStatus === 'open' ? '' : 'disabled') + '>Kết thúc chat</button>' +
                    '</div>';
                const newCloseButton = document.getElementById('closeChatBtn');
                if (newCloseButton) {
                    newCloseButton.addEventListener('click', handleCloseConversation);
                }
                updateComposerState();
            }

            function renderConversationList(conversations) {
                if (!Array.isArray(conversations) || conversations.length === 0) {
                    listEl.innerHTML = '<li class="conversation-item">Không có hội thoại nào.</li>';
                    return;
                }

                const html = conversations.map(function(item) {
                    const unreadBadge = Number(item.unread_count || 0) > 0 ?
                        '<span class="badge">' + (item.unread_count > 99 ? '99+' : item.unread_count) + '</span>' :
                        '';
                    const activeClass = Number(item.id) === Number(selectedConversationId) ? ' active' : '';

                    return '' +
                        '<li class="conversation-item' + activeClass + '" data-id="' + item.id + '">' +
                        '<div class="conversation-row">' +
                        '<div class="conversation-name">' + escapeHtml(item.guest_name || 'Khách') + '</div>' +
                        unreadBadge +
                        '</div>' +
                        '<div class="conversation-phone">' + escapeHtml(item.guest_phone || '') + '</div>' +
                        '<div class="conversation-preview">' + escapeHtml(item.last_message || '') + '</div>' +
                        '</li>';
                }).join('');

                listEl.innerHTML = html;
            }

            function appendMessage(msg) {
                const wrapper = document.createElement('div');
                wrapper.className = 'msg ' + (msg.sender_type === 'admin' ? 'admin' : 'guest');
                wrapper.innerHTML =
                    '<div>' + escapeHtml(msg.message) + '</div>' +
                    '<div class="msg-time">' + formatDateTime(msg.created_at) + '</div>';
                messagesEl.appendChild(wrapper);
                messagesEl.scrollTop = messagesEl.scrollHeight;
            }

            function renderMessages(messages, reset) {
                if (reset) {
                    messagesEl.innerHTML = '';
                    lastMessageId = 0;
                }

                if (!Array.isArray(messages) || messages.length === 0) {
                    if (reset) {
                        messagesEl.innerHTML = '<div class="empty-state">Chưa có tin nhắn.</div>';
                    }
                    return;
                }

                if (reset) messagesEl.innerHTML = '';

                messages.forEach(function(msg) {
                    appendMessage(msg);
                    lastMessageId = Math.max(lastMessageId, Number(msg.id || 0));
                });
            }

            function loadConversations() {
                const keyword = keywordInput.value.trim();
                const url = 'admin/chat/list.php' + (keyword ? ('?keyword=' + encodeURIComponent(keyword)) : '');

                fetch(url, {
                        credentials: 'same-origin'
                    })
                    .then(function(res) {
                        return res.json();
                    })
                    .then(function(data) {
                        if (!data.success) return;
                        renderConversationList(data.conversations || []);
                    })
                    .catch(function() {});
            }

            function loadConversationMessages(conversationId, appendOnly) {
                let url = 'admin/chat/get_conversation.php?conversation_id=' + encodeURIComponent(conversationId);
                if (appendOnly) {
                    url += '&after_id=' + encodeURIComponent(lastMessageId);
                }

                fetch(url, {
                        credentials: 'same-origin'
                    })
                    .then(function(res) {
                        return res.json();
                    })
                    .then(function(data) {
                        if (!data.success) return;

                        setChatHeader(data.conversation);
                        renderMessages(data.messages || [], !appendOnly);
                        updateComposerState();
                    })
                    .catch(function() {});
            }

            function handleCloseConversation() {
                if (!selectedConversationId || selectedConversationStatus !== 'open') {
                    return;
                }

                const body = new URLSearchParams();
                body.set('conversation_id', String(selectedConversationId));

                const closeBtn = getCloseChatBtn();
                if (closeBtn) {
                    closeBtn.disabled = true;
                }
                fetch('admin/chat/close.php', {
                        method: 'POST',
                        credentials: 'same-origin',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
                        },
                        body: body.toString(),
                    })
                    .then(function(res) {
                        return res.json();
                    })
                    .then(function(data) {
                        if (!data.success) {
                            throw new Error(data.message || 'Không thể kết thúc hội thoại.');
                        }
                        selectedConversationStatus = 'closed';
                        updateComposerState();
                        loadConversationMessages(selectedConversationId, false);
                        loadConversations();
                        if (typeof window.refreshChatBadge === 'function') {
                            window.refreshChatBadge();
                        }
                    })
                    .catch(function(error) {
                        alert(error.message || 'Không thể kết thúc hội thoại.');
                    })
                    .finally(function() {
                        updateComposerState();
                    });
            }

            function selectConversation(conversationId) {
                selectedConversationId = Number(conversationId);
                loadConversations();
                loadConversationMessages(selectedConversationId, false);

                if (pollingMessagesTimer) {
                    clearInterval(pollingMessagesTimer);
                }
                pollingMessagesTimer = setInterval(function() {
                    if (selectedConversationId) {
                        loadConversationMessages(selectedConversationId, true);
                    }
                }, 3000);
            }

            listEl.addEventListener('click', function(event) {
                const item = event.target.closest('.conversation-item[data-id]');
                if (!item) return;
                selectConversation(item.getAttribute('data-id'));
            });

            keywordInput.addEventListener('input', function() {
                loadConversations();
            });

            formEl.addEventListener('submit', function(event) {
                event.preventDefault();
                if (!selectedConversationId || selectedConversationStatus !== 'open') return;

                const message = inputEl.value.trim();
                if (!message) return;

                sendBtn.disabled = true;

                const body = new URLSearchParams();
                body.set('conversation_id', String(selectedConversationId));
                body.set('message', message);

                fetch('admin/chat/send.php', {
                        method: 'POST',
                        credentials: 'same-origin',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
                        },
                        body: body.toString(),
                    })
                    .then(function(res) {
                        return res.json();
                    })
                    .then(function(data) {
                        if (!data.success || !data.message) {
                            throw new Error(data.message || 'Gửi tin nhắn thất bại.');
                        }
                        if (messagesEl.querySelector('.empty-state')) {
                            messagesEl.innerHTML = '';
                        }
                        appendMessage(data.message);
                        lastMessageId = Math.max(lastMessageId, Number(data.message.id || 0));
                        inputEl.value = '';
                        loadConversations();
                        if (typeof window.refreshChatBadge === 'function') {
                            window.refreshChatBadge();
                        }
                    })
                    .catch(function(error) {
                        alert(error.message || 'Không thể gửi tin nhắn.');
                    })
                    .finally(function() {
                        sendBtn.disabled = false;
                        inputEl.focus();
                    });
            });

            loadConversations();
            pollingListTimer = setInterval(loadConversations, 3000);
            const initialCloseBtn = getCloseChatBtn();
            if (initialCloseBtn) {
                initialCloseBtn.addEventListener('click', handleCloseConversation);
            }
        })();
    </script>
</body>

</html>