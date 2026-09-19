-- Database schema and seed data for Tasks for Today Management System
-- IT0049 - Technical Summative Assessment 1 (TSA1)

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(50) NOT NULL UNIQUE,
  `full_name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `created_at` DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `username`, `full_name`, `email`, `created_at`) VALUES
(1, 'simoune', 'Simoune Nicole', 'moonkirumi@gmail.com', NOW());

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(150) NOT NULL,
  `status` VARCHAR(20) NOT NULL DEFAULT 'pending',
  `task_date` DATE NOT NULL,
  `created_at` DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tasks` (`title`, `status`, `task_date`, `created_at`) VALUES
('Review system architecture documentation', 'completed', CURDATE(), NOW()),
('Implement CodeIgniter 4 Model and Controllers', 'completed', CURDATE(), NOW()),
('Test database queries and view rendering', 'pending', CURDATE(), NOW()),
('Prepare deployment environment configuration', 'pending', CURDATE(), NOW()),

('Setup project repository and framework', 'completed', DATE_SUB(CURDATE(), INTERVAL 2 DAY), NOW()),
('Configure database connection and tables', 'completed', DATE_SUB(CURDATE(), INTERVAL 1 DAY), NOW()),

('Perform final validation testing', 'pending', DATE_ADD(CURDATE(), INTERVAL 1 DAY), NOW()),
('Submit TSA1 technical assessment deliverable', 'pending', DATE_ADD(CURDATE(), INTERVAL 2 DAY), NOW());
