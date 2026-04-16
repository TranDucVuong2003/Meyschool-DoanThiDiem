<?php
$chatBasePath = $chatBasePath ?? '';
$chatBasePath = rtrim((string) $chatBasePath, '/');
$chatBasePath = $chatBasePath === '' ? '' : $chatBasePath . '/';
?>
<link rel="stylesheet" href="<?= htmlspecialchars($chatBasePath) ?>chat/widget.css">
<div id="chatWidgetRoot" class="chat-widget-root" data-base-path="<?= htmlspecialchars($chatBasePath) ?>">
    <button type="button" class="chat-widget-toggle" id="chatWidgetToggle" aria-label="Mở chat">
        Chat với tư vấn viên
    </button>

    <section class="chat-widget-panel" id="chatWidgetPanel" aria-hidden="true">
        <header class="chat-widget-header">
            <div>
                <strong>Hỗ trợ trực tuyến</strong>
                <small>Phản hồi trong giờ làm việc</small>
            </div>
            <button type="button" class="chat-widget-close" id="chatWidgetClose" aria-label="Đóng">×</button>
        </header>

        <div class="chat-widget-body">
            <form id="chatLeadForm" class="chat-lead-form" autocomplete="off">
                <div class="chat-form-title">Bắt đầu trò chuyện</div>
                <label>
                    Họ tên
                    <input type="text" name="guest_name" maxlength="100" required>
                </label>
                <label>
                    Số điện thoại
                    <input type="text" name="guest_phone" maxlength="20" required>
                </label>
                <label>
                    Nội dung
                    <textarea name="message" maxlength="2000" required></textarea>
                </label>
                <button type="submit" id="chatLeadSubmit">Gửi tin nhắn</button>
                <div class="chat-form-error" id="chatLeadError"></div>
            </form>

            <div id="chatConversation" class="chat-conversation" style="display:none;">
                <div id="chatMessageList" class="chat-message-list">
                    <div class="chat-message-empty">Chưa có tin nhắn.</div>
                </div>
                <form id="chatSendForm" class="chat-send-form" autocomplete="off">
                    <textarea id="chatMessageInput" maxlength="2000" placeholder="Nhập tin nhắn..."></textarea>
                    <button type="submit" id="chatSendBtn">Gửi</button>
                </form>
            </div>
        </div>
    </section>
</div>
<script defer src="<?= htmlspecialchars($chatBasePath) ?>chat/widget.js"></script>