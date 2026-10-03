<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<!-- PERSONA INSPO - Professional Member Profile -->
<div class="persona-wrapper">

    <!-- HERO - like Patrick Bradley intro -->
    <section class="persona-hero">
        <div class="container persona-hero-container">
            <div class="persona-hero-text">
                <p class="persona-kicker">— IT STUDENT &nbsp;·&nbsp; <?= esc(strtoupper($member['role'])) ?></p>
                <h1 class="persona-name">
                    <?= esc(explode(' ', $member['name'])[0]) ?><br>
                    <span><?= esc(implode(' ', array_slice(explode(' ', $member['name']), 1))) ?></span>
                </h1>
                <p class="persona-bio"><?= esc($member['short_desc']) ?></p>
                <p class="persona-long"><?= esc($member['bio']) ?></p>

                <div class="persona-socials">
                    <span class="persona-social-icon" title="<?= esc($member['email']) ?>">✉</span>
                    <span class="persona-social-icon" title="<?= esc($member['phone']) ?>">☎</span>
                    <span class="persona-social-icon">◈</span>
                    <span class="persona-social-icon">⬔</span>
                </div>

                <div class="persona-cta">
                    <a href="<?= site_url('members/' . $member['slug'] . '/resume') ?>" class="btn persona-btn-primary">View Resume →</a>
                    <a href="<?= site_url('members') ?>" class="btn persona-btn-ghost">← Back to Team</a>
                </div>
            </div>

            <div class="persona-hero-image">
                <div class="persona-image-frame">
                    <img src="<?= base_url('images/' . $member['image']) ?>" alt="<?= esc($member['name']) ?>">
                </div>
                <div class="persona-image-badge">
                    <strong><?= esc($member['initials']) ?></strong>
                    <span>Available for work</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES - 3 cards like inspo -->
    <section class="persona-services">
        <div class="container">
            <div class="persona-section-head">
                <div>
                    <p class="persona-label">— SERVICES</p>
                    <h2>What I Do</h2>
                </div>
                <a href="<?= site_url('members/' . $member['slug'] . '/resume') ?>" class="persona-view-all">VIEW RESUME &nbsp;→</a>
            </div>

            <div class="persona-services-grid">
                <?php foreach ($member['services'] as $svc): ?>
                <div class="persona-service-card">
                    <div class="persona-service-icon"><?= esc($svc['icon']) ?></div>
                    <h3><?= esc($svc['title']) ?></h3>
                    <p><?= esc($svc['desc']) ?></p>
                    <span class="persona-service-arrow">→</span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- STATS - like 459K 300+ row -->
    <section class="persona-stats">
        <div class="container">
            <div class="persona-stats-grid">
                <?php foreach ($member['stats'] as $st): ?>
                <div class="persona-stat">
                    <span class="persona-stat-icon">◆</span>
                    <strong><?= esc($st['value']) ?></strong>
                    <span class="persona-stat-label"><?= esc($st['label']) ?></span>
                    <small><?= esc($st['sub']) ?></small>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- EXPERIENCE & EDUCATION - dark timeline -->
    <section class="persona-timeline-section">
        <div class="container">
            <div class="persona-two-col">
                <div>
                    <p class="persona-label">— EXPERIENCE</p>
                    <h2>Journey</h2>
                    <div class="persona-timeline">
                        <?php foreach ($member['experience'] as $exp): ?>
                        <div class="persona-timeline-item">
                            <h4><?= esc($exp['title']) ?></h4>
                            <small><?= esc($exp['org']) ?> · <?= esc($exp['year']) ?></small>
                            <p><?= esc($exp['desc']) ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div>
                    <p class="persona-label">— EDUCATION</p>
                    <h2>Background</h2>
                    <div class="persona-edu-list">
                        <?php foreach ($member['education'] as $edu): ?>
                        <div class="persona-edu-item">
                            <div class="persona-edu-dot"></div>
                            <div>
                                <h4><?= esc($edu['degree']) ?></h4>
                                <p><?= esc($edu['school']) ?></p>
                                <small><?= esc($edu['year']) ?></small>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="persona-skills-block">
                        <h3>Skills</h3>
                        <div class="persona-skill-tags">
                            <?php foreach ($member['skills'] as $skill): ?>
                                <span><?= esc($skill) ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS / VIDEOS - like inspo Videos -->
    <section class="persona-videos">
        <div class="container">
            <div class="persona-section-head">
                <div>
                    <p class="persona-label">— SELECTED WORK</p>
                    <h2>Projects</h2>
                </div>
                <a href="<?= site_url('projects') ?>" class="persona-view-all">VIEW ALL &nbsp;→</a>
            </div>

            <div class="persona-videos-grid">
                <?php foreach ($member['projects'] as $proj): ?>
                <div class="persona-video-card" style="background:#1a1a1a; border:1px solid #2a2a2a; border-radius:12px; overflow:hidden;">
                    <a href="<?= site_url('project/' . $proj['slug']) ?>" style="text-decoration:none; color:inherit; display:block;">
                        <div class="persona-video-thumb" style="background: <?= esc($proj['gradient']) ?>; border:none; border-radius:0;">
                            <span class="persona-play">▶</span>
                            <span class="persona-video-label"><?= esc($proj['label']) ?></span>
                        </div>
                        <div style="padding:16px;">
                            <p style="margin:0; color:#fff;"><strong><?= esc($proj['title']) ?></strong></p>
                            <p style="margin:4px 0 10px; color:#9ca3af; font-size:13px;"><?= esc($proj['desc']) ?></p>
                            <span style="color:#ff6a00; font-size:12px; font-weight:bold;">View Details →</span>
                        </div>
                    </a>
                    <?php if (!empty($proj['github'])): ?>
                        <div style="padding:0 16px 16px; border-top:1px solid #2a2a2a; margin-top:4px; padding-top:12px;">
                            <a href="<?= esc($proj['github']) ?>" target="_blank" rel="noopener" style="display:inline-flex; align-items:center; gap:6px; color:#ff6a00; font-size:12px; font-weight:bold; text-decoration:none;">⬢ GitHub →</a>
                        </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
    <section class="persona-bottom">
        <div class="container" style="text-align:center;">
            <h2>Let's Work Together</h2>
            <p>Open my full resume or get in touch</p>
            <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;margin-top:18px;">
                <a href="<?= site_url('members/' . $member['slug'] . '/resume') ?>" class="btn persona-btn-primary">Open Resume</a>
                <a href="mailto:<?= esc($member['email']) ?>" class="btn persona-btn-ghost">✉ <?= esc($member['email']) ?></a>
            </div>
        </div>
    </section>

</div>

<?= $this->endSection() ?>
