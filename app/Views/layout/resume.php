<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Resume') ?></title>
    <link rel="stylesheet" href="<?= base_url('css/resume.css?v=' . @filemtime(FCPATH . 'css/resume.css')) ?>">
</head>
<body class="resume-body">
    <div class="resume-actions no-print">
        <a href="<?= site_url('members/' . ($member['slug'] ?? '')) ?>" class="btn btn-outline">← Back to Profile</a>
        <button onclick="window.print()" class="btn">Print / Save as PDF</button>
        <a href="<?= site_url('members') ?>" class="btn btn-outline">All Members</a>
    </div>
    <?= $this->renderSection('content') ?>
    <p class="no-print" style="text-align:center;color:#64748b;margin:20px;font-size:13px;">Tip: Click Print → Save as PDF to download</p>
</body>
</html>
