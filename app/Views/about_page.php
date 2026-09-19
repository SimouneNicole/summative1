<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= (isset($title)) ? esc($title) : 'About Developer' ?></title>
    <style>body{font-family:sans-serif;margin:40px;line-height:1.6;}nav{margin-bottom:20px;}nav a{margin-right:15px;text-decoration:none;color:#007bff;}.bio{background-color:#eef7ff;padding:20px;border-left:5px solid #007bff;}</style>
</head>
<body>
    <nav>
        <a href="<?= site_url('/') ?>">Welcome Dashboard</a>
        <a href="<?= site_url('tasks') ?>">All Tasks</a>
        <a href="<?= site_url('profile') ?>">My Profile</a>
        <strong>[ About Developer ]</strong>
    </nav>
    <h1>System Engineering Credits</h1>
    
    <div class="bio">
        <h3>Developer Profile Identity</h3>
        <p>This system was engineered by <strong>Simoune Nicole</strong>.</p>
        <p>Built with precision utilizing the robust model-view-controller paradigm natively powered by the <strong>CodeIgniter 4 PHP Framework</strong>.</p>
    </div>
</body>
</html>
