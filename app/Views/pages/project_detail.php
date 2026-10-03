<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section class="persona-hero" style="padding:50px 0;">
    <div class="container" style="max-width:800px;">
        <p class="persona-kicker">— PROJECT · <?= esc(strtoupper($project['label'])) ?></p>
        <h1 class="persona-name" style="font-size:42px;"><?= esc($project['title']) ?></h1>
        <p class="persona-long">By <?php if (!empty($project['owner_slug'])): ?><a href="<?= site_url('members/' . $project['owner_slug']) ?>" style="color:#ff6a00;text-decoration:none;"><?= esc($project['owner']) ?></a><?php else: ?><span style="color:#ff6a00;"><?= esc($project['owner']) ?></span><?php endif; ?> · <?= esc($project['label']) ?><?php if (!empty($isTeam)): ?> · <span style="background:#ff6a00;color:#fff;padding:3px 8px;border-radius:10px;font-size:11px;">TEAM</span><?php else: ?> · <span style="background:#1a1a1a;border:1px solid #2a2a2a;color:#9ca3af;padding:3px 8px;border-radius:10px;font-size:11px;">PERSONAL</span><?php endif; ?></p>
        <div class="persona-video-thumb" style="height:280px; margin:18px 0; background: <?= esc($project['gradient']) ?>; border-radius:12px; display:flex; align-items:center; justify-content:center; border:1px solid #2a2a2a;">
            <span class="persona-play" style="width:56px;height:56px;font-size:18px;">▶</span>
        </div>
        <p style="color:#d1d5db; line-height:1.8; font-size:15px;"><?= esc($project['desc']) ?></p>
        <p style="color:#9ca3af; line-height:1.7; margin-top:12px;"><?= esc($project['content']) ?></p>
        <div style="display:flex; gap:8px; flex-wrap:wrap; margin-top:18px;">
            <?php foreach ($project['tags'] as $tag): ?>
                <span style="background:#1a1a1a; border:1px solid #2a2a2a; color:#ff6a00; padding:6px 12px; border-radius:20px; font-size:12px; font-weight:bold;"><?= esc($tag) ?></span>
            <?php endforeach; ?>
        </div>
        <?php if (!empty($project['github'])): ?>
        <a href="<?= esc($project['github']) ?>" target="_blank" rel="noopener" class="btn persona-btn-primary" style="margin-top:18px; display:inline-flex; align-items:center; gap:8px;">⬢ View on GitHub →</a>
        <p style="color:#6b7280; font-size:11px; margin-top:6px;">GitHub: <?= esc($project['github']) ?> — edit in app/Controllers/Pages.php:9/17 to set real URL</p>
        <?php endif; ?>
        <div style="display:flex; gap:12px; flex-wrap:wrap; margin-top:24px;">
            <?php if (!empty($project['owner_slug'])): ?>
                <a href="<?= site_url('members/' . $project['owner_slug']) ?>" class="btn persona-btn-ghost">← Back to <?= esc(explode(' ', $project['owner'])[0]) ?></a>
            <?php else: ?>
                <a href="<?= site_url('projects') ?>" class="btn persona-btn-ghost">← Back to Team Projects</a>
            <?php endif; ?>
            <a href="<?= site_url('projects') ?>" class="btn persona-btn-primary">All Team Projects →</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
