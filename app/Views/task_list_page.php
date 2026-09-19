<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= (isset($title)) ? esc($title) : 'All Tasks' ?></title>
    <style>
        body { font-family: sans-serif; margin: 40px; line-height: 1.6; }
        nav { margin-bottom: 20px; }
        nav a { margin-right: 15px; text-decoration: none; color: #007bff; }
        .badge { padding: 3px 8px; border-radius: 4px; font-size: 12px; color: #fff; text-transform: capitalize; }
        .pending { background: #ffc107; color: #212529; }
        .completed { background: #28a745; }
        ul { padding-left: 20px; }
        li { margin-bottom: 10px; }
        .task-meta { color: #6c757d; font-size: 14px; margin-left: 5px; }
    </style>
</head>
<body>
    <nav>
        <a href="<?= site_url('/') ?>">Welcome Dashboard</a>
        <strong>[ All Tasks ]</strong>
        <a href="<?= site_url('profile') ?>">My Profile</a>
        <a href="<?= site_url('about') ?>">About Developer</a>
    </nav>

    <h1>Tasks for Today Management System</h1>
    <h3>Comprehensive Archive Master List</h3>

    <?php if (isset($tasks) && !empty($tasks) && is_array($tasks)): ?>
        <ul>
            <?php foreach ($tasks as $task): ?>
                <li>
                    <strong><?= esc($task['title']) ?></strong>
                    <span class="badge <?= esc($task['status']) ?>"><?= esc($task['status']) ?></span>
                    <span class="task-meta">&bull; Scheduled: <?= esc(date('F j, Y', strtotime($task['task_date']))) ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No tasks found in the archive.</p>
    <?php endif; ?>
</body>
</html>
