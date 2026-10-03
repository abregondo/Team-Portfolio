<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section class="persona-services" style="padding:70px 0 40px;">
    <div class="container">
        <div class="persona-section-head">
            <div>
                <p class="persona-label">— ABOUT OUR GROUP</p>
                <h2>Who We Are</h2>
            </div>
        </div>
        <div style="display:grid; grid-template-columns:1.2fr 0.8fr; gap:40px; align-items:start;" class="persona-two-col">
            <div>
                <p style="color:#d1d5db; line-height:1.8; margin-bottom:16px;">We are a team of three Information Technology students working together to develop creative, functional, and user-friendly digital solutions.</p>
                <p style="color:#9ca3af; line-height:1.7; margin-bottom:16px;">Our team combines different skills in UI design, frontend development, backend development, and application development. By working together, we turn ideas into practical and engaging digital experiences.</p>
                <p style="color:#9ca3af; line-height:1.7; margin-bottom:24px;">This portfolio showcases our journey, our members, and the projects we have built together. Each page highlights a different aspect of our team — explore them to learn more!</p>
                <div style="display:flex; gap:12px; flex-wrap:wrap;">
                    <a href="<?= site_url('members') ?>" class="btn persona-btn-primary">Meet the Members →</a>
                    <a href="<?= site_url('projects') ?>" class="btn persona-btn-ghost">View Projects</a>
                </div>
            </div>
            <div style="display:grid; gap:16px;">
                <div class="persona-service-card" style="padding:22px;">
                    <div class="persona-service-icon" style="margin-bottom:12px;">◈</div>
                    <h3 style="font-size:15px;">UI Design</h3>
                    <p>Crafting visually engaging, user-centered interfaces.</p>
                </div>
                <div class="persona-service-card" style="padding:22px;">
                    <div class="persona-service-icon" style="margin-bottom:12px;">⚙</div>
                    <h3 style="font-size:15px;">Development</h3>
                    <p>Frontend & backend solutions that work seamlessly.</p>
                </div>
                <div class="persona-service-card" style="padding:22px;">
                    <div class="persona-service-icon" style="margin-bottom:12px;">⬢</div>
                    <h3 style="font-size:15px;">Collaboration</h3>
                    <p>Three minds, one goal — building meaningful products.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="persona-stats">
    <div class="container">
        <div class="persona-stats-grid">
            <div class="persona-stat"><span class="persona-stat-icon">◆</span><strong>3</strong><span class="persona-stat-label"> Members</span><small>  One team</small></div>
            <div class="persona-stat"><span class="persona-stat-icon">◆</span><strong>2022</strong><span class="persona-stat-label"> Since</span><small>  Studying IT</small></div>
            <div class="persona-stat"><span class="persona-stat-icon">◆</span><strong>10+</strong><span class="persona-stat-label"> Projects</span><small>  Built together</small></div>
            <div class="persona-stat"><span class="persona-stat-icon">◆</span><strong>SPC</strong><span class="persona-stat-label"> College</span><small>  ST. Peter's</small></div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
