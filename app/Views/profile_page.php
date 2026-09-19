<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= (isset($title)) ? esc($title) : 'My Profile' ?></title>
    <style>
        body { font-family: sans-serif; margin: 40px; line-height: 1.6; }
        nav { margin-bottom: 20px; }
        nav a { margin-right: 15px; text-decoration: none; color: #007bff; }
        .card { background-color: #f8f9fa; padding: 24px; border-left: 5px solid #007bff; max-width: 500px; border-radius: 4px; }
        .card p { margin: 8px 0; }
        .label { font-weight: bold; color: #495057; display: inline-block; width: 130px; }
    </style>
</head>
<body>
    <nav>
        <a href="<?= site_url('/') ?>">Welcome Dashboard</a>
        <a href="<?= site_url('tasks') ?>">All Tasks</a>
        <strong>[ My Profile ]</strong>
        <a href="<?= site_url('about') ?>">About Developer</a>
    </nav>

    <h1>User Account Profile</h1>

    <?php if (!empty($user)): ?>
        <div class="card">
            <h3>Account Details</h3>
            <p><span class="label">User ID:</span> <?= esc($user['id'] ?? 'N/A') ?></p>
            <p><span class="label">Username:</span> <?= esc($user['username'] ?? 'N/A') ?></p>
            <p><span class="label">Full Name:</span> <?= esc($user['full_name'] ?? 'N/A') ?></p>
            <p><span class="label">Email Address:</span> <?= esc($user['email'] ?? 'N/A') ?></p>
            <p><span class="label">Member Since:</span> <?= !empty($user['created_at']) ? esc(date('F j, Y, g:i a', strtotime($user['created_at']))) : 'N/A' ?></p>
        </div>
    <?php else: ?>
        <div class="card">
            <h3>No User Profile Found</h3>
            <p>Please ensure the database contains a user record in the <code>users</code> table.</p>
        </div>
    <?php endif; ?>
</body>
</html>
