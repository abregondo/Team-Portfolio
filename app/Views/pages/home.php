<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<!-- PERSONA HERO - Homepage -->
<section class="persona-hero" style="min-height:70vh;">
    <div class="container persona-hero-container">
        <div class="persona-hero-text">
            <p class="persona-kicker">— WELCOME TO OUR PORTFOLIO</p>
            <h1 class="persona-name" style="font-size:56px;">We Are<br><span style="color:#ff6a00;">IT Students</span></h1>
            <p class="persona-long">Three Information Technology students passionate about technology, creativity, web development, UI design, and building meaningful digital solutions. Together, we turn ideas into reality.</p>
            <div class="persona-cta" style="margin-top:22px;">
                <a href="<?= site_url('members') ?>" class="btn persona-btn-primary">Meet Our Team →</a>
                <a href="<?= site_url('projects') ?>" class="btn persona-btn-ghost">View Projects</a>
            </div>
            <div class="persona-stats" style="padding:18px 0 0; border:none; background:transparent;">
                <div class="persona-stats-grid" style="grid-template-columns: repeat(3, 1fr); gap:12px;">
                    <div class="persona-stat" style="padding:14px;">
                        <span class="persona-stat-icon">◆</span>
                        <strong>3</strong><span class="persona-stat-label">Members</span>
                    </div>
                    <div class="persona-stat" style="padding:14px;">
                        <span class="persona-stat-icon">◆</span>
                        <strong>10+</strong><span class="persona-stat-label">Projects</span>
                    </div>
                    <div class="persona-stat" style="padding:14px;">
                        <span class="persona-stat-icon">◆</span>
                        <strong>100%</strong><span class="persona-stat-label">Passion</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="persona-hero-image">
            <div class="persona-image-frame" style="height:420px; background:#1a1a1a; display:flex; align-items:center; justify-content:center; flex-direction:column; gap:16px; padding:30px;">
                <div style="display:flex;gap:-10px;">
                    <img src="<?= base_url('images/jazee.jpg') ?>" style="width:90px;height:90px;border-radius:50%;border:3px solid #ff6a00;object-fit:cover;margin-right:-12px;">
                    <img src="<?= base_url('images/junard.jpg') ?>" style="width:90px;height:90px;border-radius:50%;border:3px solid #ff6a00;object-fit:cover;margin-right:-12px;">
                    <img src="<?= base_url('images/lloyd.jpg') ?>" style="width:90px;height:90px;border-radius:50%;border:3px solid #ff6a00;object-fit:cover;">
                </div>
                <p style="color:#ff6a00;font-weight:bold;font-size:13px;letter-spacing:1px;">OUR TEAM</p>
                <p style="color:#9ca3af;font-size:12px;text-align:center;">Jazee · Junard · Lloyd<br>One team, diverse skills</p>
            </div>
        </div>
    </div>
</section>

<!-- Quick Overview - Persona Services style -->
<section class="persona-services">
    <div class="container">
        <div class="persona-section-head">
            <div>
                <p class="persona-label">— EXPLORE</p>
                <h2>Explore Our Portfolio</h2>
            </div>
        </div>
        <div class="persona-services-grid">
            <a href="<?= site_url('about') ?>" style="text-decoration:none;">
                <div class="persona-service-card">
                    <div class="persona-service-icon">◈</div>
                    <h3>About Us →</h3>
                    <p>Who we are and what drives our passion for technology.</p>
                    <span class="persona-service-arrow">→</span>
                </div>
            </a>
            <a href="<?= site_url('members') ?>" style="text-decoration:none;">
                <div class="persona-service-card">
                    <div class="persona-service-icon">⬢</div>
                    <h3>Our Members →</h3>
                    <p>Meet Jazee, Junard & Lloyd — three talents, one vision.</p>
                    <span class="persona-service-arrow">→</span>
                </div>
            </a>
            <a href="<?= site_url('projects') ?>" style="text-decoration:none;">
                <div class="persona-service-card">
                    <div class="persona-service-icon">▣</div>
                    <h3>Projects →</h3>
                    <p>Crafted with code, design, and collaboration.</p>
                    <span class="persona-service-arrow">→</span>
                </div>
            </a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
