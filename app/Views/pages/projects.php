<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section class="persona-services" style="padding:60px 0 20px;">
    <div class="container">
        <div class="persona-section-head">
            <div>
                <p class="persona-label">— OUR WORK</p>
                <h2>Featured Projects</h2>
                <p style="color:#9ca3af; font-size:14px; margin-top:8px;">Projects made by the team together — click to view details.</p>
            </div>
            <span class="persona-view-all"><?= count($projects) ?> TEAM PROJECTS</span>
        </div>

        <div class="persona-videos-grid">
            <?php foreach ($projects as $proj): ?>
            <div class="persona-video-card" style="background:#1a1a1a; border:1px solid #2a2a2a; border-radius:12px; overflow:hidden; padding:0;">
                <a href="<?= site_url('project/' . $proj['slug']) ?>" style="text-decoration:none; color:inherit; display:block;">
                    <div class="persona-video-thumb" style="height:200px; background: <?= esc($proj['gradient']) ?>; border:none; border-radius:0;">
                        <span class="persona-play" style="background:#0a0a0a; color:#ff6a00; border:1px solid #2a2a2a;">▶</span>
                        <span class="persona-video-label"><?= esc($proj['label']) ?></span>
                    </div>
                    <div style="padding:20px;">
                        <p style="color:#ff6a00; font-size:11px; font-weight:bold; letter-spacing:0.8px; margin-bottom:6px;"><?= esc(strtoupper($proj['owner'])) ?> · TEAM</p>
                        <h3 style="font-size:16px; margin-bottom:8px; color:#fff;"><?= esc($proj['title']) ?></h3>
                        <p style="color:#9ca3af; font-size:13px; line-height:1.6;"><?= esc($proj['desc']) ?></p>
                        <div style="display:flex; gap:6px; margin-top:14px; flex-wrap:wrap;">
                            <?php foreach ($proj['tags'] as $tag): ?>
                                <span style="background:#0a0a0a; border:1px solid #2a2a2a; color:#ff6a00; padding:5px 10px; border-radius:20px; font-size:11px; font-weight:bold;"><?= esc($tag) ?></span>
                            <?php endforeach; ?>
                        </div>
                        <span style="display:inline-block; margin-top:12px; color:#fff; font-size:12px; font-weight:bold;">View Details →</span>
                    </div>
                </a>
                <?php if (!empty($proj['github'])): ?>
                    <div style="padding:0 20px 20px; border-top:1px solid #2a2a2a; margin-top:4px; padding-top:12px;">
                        <a href="<?= esc($proj['github']) ?>" target="_blank" rel="noopener" style="display:inline-flex; align-items:center; gap:6px; color:#ff6a00; font-size:12px; font-weight:bold; text-decoration:none;">⬢ GitHub →</a>
                    </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="persona-stats">
    <div class="container">
        <div class="persona-stats-grid">
            <div class="persona-stat"><span class="persona-stat-icon">◆</span><strong>9</strong><span class="persona-stat-label">Projects</span><small>Total</small></div>
            <div class="persona-stat"><span class="persona-stat-icon">◆</span><strong>3</strong><span class="persona-stat-label">Owners</span><small>Per member</small></div>
            <div class="persona-stat"><span class="persona-stat-icon">◆</span><strong>2025</strong><span class="persona-stat-label">Latest</span><small>Updated</small></div>
            <div class="persona-stat"><span class="persona-stat-icon">◆</span><strong>∞</strong><span class="persona-stat-label">Ideas</span><small>To come</small></div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
