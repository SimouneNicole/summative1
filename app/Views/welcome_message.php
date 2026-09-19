<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= (isset($title)) ? esc($title) : 'Welcome Dashboard' ?></title>
    <style>body{font-family:sans-serif;margin:40px;line-height:1.6;}nav{margin-bottom:20px;}nav a{margin-right:15px;text-decoration:none;color:#007bff;}.badge{padding:3px 8px;border-radius:4px;font-size:12px;color:#fff;}.pending{background:#ffc107;color:#212529;}.completed{background:#28a745;}</style>
</head>
<body>
    <nav>
        <strong>[ Welcome Dashboard ]</strong>
        <a href="<?= base_url('tasks') ?>">All Tasks</a>
        <a href="<?= base_url('profile') ?>">My Profile</a>
        <a href="<?= base_url('about') ?>">About Developer</a>
    </nav>
    <h1>Tasks for Today Management System</h1>
    <h3>Agenda Scheduled for Today (<?= date('F j, Y') ?>)</h3>

    <?php if (isset($tasks) && !empty($tasks) && is_array($tasks)): ?>
        <ul>
            <?php foreach ($tasks as $task): ?>
                <li>
                    <strong><?= esc($task['title']) ?></strong> 
                    <span class="badge <?= esc($task['status']) ?>"><?= esc($task['status']) ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Excellent work! You have no tasks scheduled for today.</p>
    <?php endif; ?>
</body>
</html>
