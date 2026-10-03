<?= $this->extend('layout/resume') ?>
<?= $this->section('content') ?>

<div class="resume-page">
    <header class="resume-header">
        <div class="resume-photo">
            <img src="<?= base_url('images/' . $member['image']) ?>" alt="<?= esc($member['name']) ?>">
        </div>
        <div>
            <!-- EDIT: You can edit name/role below -->
            <h1><?= esc($member['name']) ?></h1>
            <p class="resume-role"><?= esc($member['role']) ?></p>
            <p class="resume-contact">
                <!-- EDIT: Contact info -->
                <?= esc($member['email']) ?> · <?= esc($member['phone']) ?> · <?= esc($member['location']) ?>
            </p>
        </div>
    </header>

    <section class="resume-section">
        <h2>Objective</h2>
        <!-- EDIT: Objective -->
        <p>Detail-oriented IT student specializing in backend and frontend development. Passionate about building efficient, database-driven systems and creating seamless user experiences. Eager to apply skills in PHP, CodeIgniter, and MySQL to real-world projects.</p>
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
        <!-- EDIT: Replace with Jazee's real projects -->
        <div class="resume-item">
            <h3>Capstone Web System</h3>
            <p>Led backend development: database design, authentication, and API integration using CodeIgniter & MySQL.</p>
        </div>
        <div class="resume-item">
            <h3>Group Portfolio (This Site)</h3>
            <p>Implemented backend logic and frontend integration for multi-page portfolio.</p>
        </div>
    </section>
</div>

<?= $this->endSection() ?>
