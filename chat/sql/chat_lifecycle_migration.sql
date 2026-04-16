-- Migration: chat lifecycle states (open/closed/archived)
-- Safe for schema currently used in project.

ALTER TABLE chat_conversations
    ADD COLUMN visitor_token VARCHAR(64) NULL AFTER session_token,
    ADD COLUMN closed_at DATETIME NULL AFTER updated_at,
    ADD COLUMN archived_at DATETIME NULL AFTER closed_at;

UPDATE chat_conversations
SET visitor_token = session_token
WHERE (visitor_token IS NULL OR visitor_token = '')
  AND session_token IS NOT NULL
  AND session_token <> '';

ALTER TABLE chat_conversations
    MODIFY COLUMN status ENUM('open', 'closed', 'archived') NOT NULL DEFAULT 'open';

ALTER TABLE chat_conversations
    DROP INDEX uq_chat_conversations_session_token,
    ADD INDEX idx_chat_conversations_visitor_status_last (visitor_token, status, last_message_at),
    ADD INDEX idx_chat_conversations_session_token (session_token),
    ADD INDEX idx_chat_conversations_status_closed_at (status, closed_at),
    ADD INDEX idx_chat_conversations_status_archived_at (status, archived_at);
