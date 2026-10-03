<!-- EDIT THIS TEMPLATE - Copy to jazee.php / junard.php / lloyd.php and edit -->
<?= $this->extend('layout/resume') ?>
<?= $this->section('content') ?>

<div class="resume-page">
    <header class="resume-header">
        <!-- EDIT: Replace with member photo or initials -->
        <div class="resume-photo">
            <?php if (!empty($member['image'])): ?>
                <img src="<?= base_url('images/' . $member['image']) ?>" alt="<?= esc($member['name']) ?>">
            <?php else: ?>
                <span><?= esc($member['initials'] ?? 'NA') ?></span>
            <?php endif; ?>
        </div>
        <div>
            <!-- EDIT: Name and Role -->
            <h1><?= esc($member['name']) ?></h1>
            <p class="resume-role"><?= esc($member['role']) ?></p>
            <!-- EDIT: Contact info -->
            <p class="resume-contact">
                <?= esc($member['email']) ?> · <?= esc($member['phone']) ?> · <?= esc($member['location']) ?>
            </p>
        </div>
    </header>

    <section class="resume-section">
        <h2>Objective</h2>
        <!-- EDIT: Objective -->
        <p>Motivated Information Technology student passionate about <?= esc(implode(', ', array_slice($member['skills'], 0, 3))) ?>. Seeking opportunities to apply technical skills and collaborate on meaningful digital solutions.</p>
    </section>

    <section class="resume-section">
        <h2>Education</h2>
        <!-- EDIT: Education - duplicate .resume-item for more entries -->
        <?php foreach ($member['education'] as $edu): ?>
        <div class="resume-item">
            <h3><?= esc($edu['degree']) ?></h3>
            <p class="resume-meta"><?= esc($edu['school']) ?> | <?= esc($edu['year']) ?></p>
        </div>
        <?php endforeach; ?>
    </section>

    <section class="resume-section">
        <h2>Skills</h2>
        <!-- EDIT: Skills - add/remove <span> -->
        <div class="resume-skills">
            <?php foreach ($member['skills'] as $skill): ?>
                <span><?= esc($skill) ?></span>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="resume-section">
        <h2>Experience</h2>
        <!-- EDIT: Experience -->
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
        <!-- EDIT: Projects - replace with real projects -->
        <div class="resume-item">
            <h3>Group Portfolio Website</h3>
            <p>Multi-page portfolio built with CodeIgniter 4, PHP, MySQL — featured responsive design and member profiles.</p>
        </div>
        <div class="resume-item">
            <h3>Web-Based System (Capstone)</h3>
            <p>Database-driven system with authentication and CRUD operations.</p>
        </div>
    </section>
</div>

<?= $this->endSection() ?>
