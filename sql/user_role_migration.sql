-- User + Role migration
-- Add roles table and extend users with name and role_id.

CREATE TABLE IF NOT EXISTS roles (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE KEY uq_roles_name (name)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO roles (name)
SELECT 'Super Admin'
WHERE NOT EXISTS (SELECT 1 FROM roles WHERE name = 'Super Admin');

INSERT INTO roles (name)
SELECT 'Editor'
WHERE NOT EXISTS (SELECT 1 FROM roles WHERE name = 'Editor');

INSERT INTO roles (name)
SELECT 'CSKH'
WHERE NOT EXISTS (SELECT 1 FROM roles WHERE name = 'CSKH');

ALTER TABLE users
    ADD COLUMN name VARCHAR(120) NOT NULL DEFAULT '' AFTER username,
    ADD COLUMN role_id INT NOT NULL DEFAULT 1 AFTER password;

UPDATE users
SET name = CASE
        WHEN name IS NULL OR TRIM(name) = '' THEN username
        ELSE name
    END,
    role_id = CASE
        WHEN role_id IS NULL OR role_id <= 0 THEN 1
        ELSE role_id
    END;

ALTER TABLE users
    ADD INDEX idx_users_role_id (role_id);

ALTER TABLE users
    ADD CONSTRAINT fk_users_role_id
    FOREIGN KEY (role_id) REFERENCES roles(id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT;
