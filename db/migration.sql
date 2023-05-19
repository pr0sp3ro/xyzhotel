-- create admin user
INSERT INTO `users` (first_name, last_name, username, email, password, user_type, created_at, updated_at)
VALUES ('Admin', 'User', 'admin', 'admin@example.com', 'password123', 'admin', NOW(), NOW());
