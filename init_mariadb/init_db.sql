CREATE DATABASE IF NOT EXISTS db_daily_task;
USE `db_daily_task`;
CREATE TABLE Tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task_type ENUM('Development', 'Test', 'Document') NOT NULL,
    task_name VARCHAR(255) NOT NULL,
    task_period_start DATETIME NOT NULL,
    task_period_end DATETIME,
    task_status ENUM('working', 'finished', 'canceled') NOT NULL,
    record_timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_update_timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);