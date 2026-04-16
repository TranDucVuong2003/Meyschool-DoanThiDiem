-- Chat module schema for PHP + MySQL

CREATE TABLE IF NOT EXISTS chat_conversations (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    guest_name VARCHAR(100) NOT NULL,
    guest_phone VARCHAR(20) NOT NULL,
    visitor_token VARCHAR(64) NOT NULL,
    session_token VARCHAR(64) NOT NULL,
    status ENUM('open', 'closed', 'archived') NOT NULL DEFAULT 'open',
    assigned_admin_id INT UNSIGNED NULL,
    last_message_at DATETIME NOT NULL,
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL,
    closed_at DATETIME NULL,
    archived_at DATETIME NULL,
    KEY idx_chat_conversations_visitor_status_last (visitor_token, status, last_message_at),
    KEY idx_chat_conversations_session_token (session_token),
    KEY idx_chat_conversations_status_last_message (status, last_message_at),
    KEY idx_chat_conversations_status_closed_at (status, closed_at),
    KEY idx_chat_conversations_status_archived_at (status, archived_at),
    KEY idx_chat_conversations_assigned_admin (assigned_admin_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS chat_messages (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    conversation_id BIGINT UNSIGNED NOT NULL,
    sender_type ENUM('guest', 'admin') NOT NULL,
    sender_id INT UNSIGNED NULL,
    message TEXT NOT NULL,
    is_read TINYINT(1) NOT NULL DEFAULT 0,
    created_at DATETIME NOT NULL,
    KEY idx_chat_messages_conversation_id (conversation_id),
    KEY idx_chat_messages_conversation_read (conversation_id, is_read),
    KEY idx_chat_messages_conversation_created (conversation_id, created_at),
    CONSTRAINT fk_chat_messages_conversation
        FOREIGN KEY (conversation_id) REFERENCES chat_conversations(id)
        ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
