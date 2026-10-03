<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Our Portfolio | IT Students') ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/resume.css') ?>">
</head>
<body>

<?= $this->include('partials/navbar') ?>

<main>
    <?= $this->renderSection('content') ?>
</main>

<?= $this->include('partials/footer') ?>

</body>
</html>
