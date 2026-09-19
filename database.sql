-- Database schema and seed data for Tasks for Today Management System
-- IT0049 - Technical Summative Assessment 1 (TSA1)

DROP TABLE IF EXISTS `tasks`;
DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL,
    `full_name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `tasks` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(255) NOT NULL,
    `status` ENUM('pending', 'ongoing', 'completed') NOT NULL,
    `task_date` DATE NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert into users
INSERT INTO `users` (`id`, `username`, `full_name`, `email`, `created_at`) VALUES
(1, 'Kat.1na', 'katarina Ivanov', 'katarina.ivanov@gmail.com', '2026-09-19 13:45:57');

-- Insert into tasks
INSERT INTO `tasks` (`id`, `title`, `status`, `task_date`, `created_at`) VALUES
(1, 'Meeting', 'ongoing', '2026-09-19', '2026-09-19 13:44:50'),
(2, 'Project deployment', 'completed', '2026-09-19', '2026-09-19 13:44:50'),
(3, 'Review Investor Feedback', 'completed', '2026-09-19', '2026-09-19 13:44:50'),
(4, 'Prepare Quarterly Reports', 'pending', '2026-09-18', '2026-09-19 13:44:50'),
(5, 'Pitch Deck', 'pending', '2026-09-18', '2026-09-19 13:44:50'),
(6, 'Meeting with Marketing', 'pending', '2026-09-14', '2026-09-19 13:44:50'),
(7, 'Review the monthly budget', 'ongoing', '2026-09-14', '2026-09-19 13:44:50');
