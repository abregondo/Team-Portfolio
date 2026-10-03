<?= $this->extend('layout/resume') ?>
<?= $this->section('content') ?>

<div class="resume-page">
    <header class="resume-header">
        <div class="resume-photo">
            <img src="<?= base_url('images/' . $member['image']) ?>" alt="<?= esc($member['name']) ?>">
        </div>
        <div>
            <h1><?= esc($member['name']) ?></h1>
            <p class="resume-role"><?= esc($member['role']) ?></p>
            <p class="resume-contact">
                <?= esc($member['email']) ?> · <?= esc($member['phone']) ?> · <?= esc($member['location']) ?>
            </p>
        </div>
    </header>

    <section class="resume-section">
        <h2>Objective</h2>
        <p>UI Designer and Frontend Developer with expertise in Figma and modern web technologies. Passionate about crafting visually engaging designs and transforming them into responsive, high-performance websites.</p>
    </section>

    <section class="resume-section">
        <h2>Education</h2>
        <?php foreach ($member['education'] as $edu): ?>
        <div class="resume-item">
            <h3><?= esc($edu['degree']) ?></h3>
            <p class="resume-meta"><?= esc($edu['school']) ?> | <?= esc($edu['year']) ?></p>
        </div>
        <?php endforeach; ?>
    </section>

    <section class="resume-section">
        <h2>Skills</h2>
        <div class="resume-skills">
            <?php foreach ($member['skills'] as $skill): ?>
                <span><?= esc($skill) ?></span>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="resume-section">
        <h2>Experience</h2>
        <?php foreach ($member['experience'] as $exp): ?>
        <div class="resume-item">
            <h3><?= esc($exp['title']) ?></h3>
            <p class="resume-meta"><?= esc($exp['org']) ?> | <?= esc($exp['year']) ?></p>
            <p><?= esc($exp['desc']) ?></p>
        </div>
        <?php endforeach; ?>
    </section>

    <section class="resume-section">
        <h2>Projects</h2>
        <div class="resume-item">
            <h3>Figma Design System</h3>
            <p>Built comprehensive design system in Figma for student projects, ensuring consistency across pages.</p>
        </div>
        <div class="resume-item">
            <h3>Group Portfolio</h3>
            <p>Designed and developed modern, responsive portfolio site with attention to visual hierarchy.</p>
        </div>
    </section>
</div>

<?= $this->endSection() ?>
