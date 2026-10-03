<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section class="persona-services" style="padding:60px 0 20px;">
    <div class="container">
        <div class="persona-section-head">
            <div>
                <p class="persona-label">— OUR TEAM</p>
                <h2>Meet the Members</h2>
                <p style="color:#9ca3af; font-size:14px; margin-top:8px; max-width:600px;">Three students, different skills, one team. Click a card to view their professional profile.</p>
            </div>
            <span class="persona-view-all">3 PROFILES</span>
        </div>

        <div class="persona-services-grid">
            <?php $i=0; foreach ($members as $m): $idx=$i++; ?>
            <a href="<?= site_url('members/' . $m['slug']) ?>" style="text-decoration:none;">
                <div class="persona-service-card persona-member-card" style="text-align:left; padding:0; overflow:hidden;">
                    <div style="height:260px; overflow:hidden; background:#0a0a0a; display:flex; align-items:center; justify-content:center;">
                        <img src="<?= base_url('images/' . $m['image']) ?>" alt="<?= esc($m['name']) ?>" style="width:100%;height:100%;object-fit:cover;object-position:center 30%;filter:none;">
                    </div>
                    <div style="padding:22px;">
                        <div class="persona-service-icon" style="width:32px;height:32px;font-size:11px; margin-bottom:12px;">0<?= $idx+1 ?></div>
                        <h3 style="font-size:17px; margin-bottom:6px;"><?= esc($m['name']) ?></h3>
                        <p style="color:#ff6a00; font-weight:bold; font-size:12px; letter-spacing:0.5px; margin-bottom:10px;"><?= esc(strtoupper($m['role'])) ?></p>
                        <p style="color:#9ca3af; font-size:13px; line-height:1.5;"><?= esc($m['short_desc']) ?></p>
                        <div style="display:flex; gap:6px; flex-wrap:wrap; margin-top:14px;">
                            <?php foreach (array_slice($m['skills'], 0, 3) as $skill): ?>
                                <span class="persona-skill-pill"><?= esc($skill) ?></span>
                            <?php endforeach; ?>
                        </div>
                        <span class="persona-service-arrow" style="position:static; display:inline-block; margin-top:14px; font-size:12px;">View Profile →</span>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="persona-stats">
    <div class="container">
        <div class="persona-stats-grid">
            <div class="persona-stat"><span class="persona-stat-icon">◆</span><strong>3</strong><span class="persona-stat-label">Members</span><small>One team</small></div>
            <div class="persona-stat"><span class="persona-stat-icon">◆</span><strong>19</strong><span class="persona-stat-label">Skills</span><small>Combined</small></div>
            <div class="persona-stat"><span class="persona-stat-icon">◆</span><strong>9</strong><span class="persona-stat-label">Projects</span><small>Combined (3 each)</small></div>
            <div class="persona-stat"><span class="persona-stat-icon">◆</span><strong>SPC</strong><span class="persona-stat-label">Proudly</span><small>ST. Peter's</small></div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
