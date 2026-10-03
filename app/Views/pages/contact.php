<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section class="persona-hero" style="padding:70px 0 60px; text-align:center;">
    <div class="container" style="max-width:700px;">
        <p class="persona-kicker">— CONTACT US</p>
        <h1 class="persona-name" style="font-size:48px; text-align:center;">Let's <span style="color:#ff6a00;">Connect</span></h1>
        <p class="persona-long" style="margin:18px auto; text-align:center; max-width:600px;">Have a question, project idea, or want to connect with our team? Feel free to reach out — we're always open to collaboration.</p>
        <div style="display:flex; gap:12px; justify-content:center; flex-wrap:wrap; margin-top:24px;">
            <a href="mailto:jazeekyla@gmail.com" class="btn persona-btn-primary">Contact Our Team →</a>
            <a href="<?= site_url('members') ?>" class="btn persona-btn-ghost">Meet the Team</a>
        </div>
    </div>
</section>

<section class="persona-services" style="padding:40px 0;">
    <div class="container">
        <div class="persona-services-grid">
            <div class="persona-service-card" style="text-align:center;">
                <div class="persona-service-icon" style="margin:0 auto 16px;">✉</div>
                <h3>Email</h3>
                <p>jazeekyla@gmail.com<br>junardbendoy73@gmail.com<br>lloydlato19@gmail.com</p>
            </div>
            <div class="persona-service-card" style="text-align:center;">
                <div class="persona-service-icon" style="margin:0 auto 16px;">☎</div>
                <h3>Phone</h3>
                <p>09976049076 (Jazee)<br>09853216099 (Junard)<br>Philippines</p>
            </div>
            <div class="persona-service-card" style="text-align:center;">
                <div class="persona-service-icon" style="margin:0 auto 16px;">📍</div>
                <h3>Location</h3>
                <p>Iligan City<br>Cagayan de Oro<br>Philippines — ST. Peter's College</p>
            </div>
        </div>
    </div>
</section>

<section class="persona-bottom" style="padding:50px 0;">
    <div class="container" style="text-align:center; max-width:600px;">
        <p class="persona-label" style="justify-content:center; display:flex;">— GET IN TOUCH</p>
        <h2 style="font-size:26px; margin-bottom:12px;">Ready to start a project?</h2>
        <p style="color:#9ca3af; font-size:14px; margin-bottom:22px;">Whether you have a project in mind or just want to say hello, we'd love to hear from you.</p>
        <a href="mailto:jazeekyla@gmail.com" class="btn persona-btn-primary">Send us an Email →</a>
        <p style="color:#6b7280; font-size:12px; margin-top:16px;">Usually replies within 24 hours</p>
    </div>
</section>

<?= $this->endSection() ?>
