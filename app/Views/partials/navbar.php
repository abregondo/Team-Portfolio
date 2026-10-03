<!-- =========================
     NAVIGATION - Multi-page
========================== -->
<nav class="navbar">
    <div class="container navbar-container">
        <a href="<?= site_url('/') ?>" class="logo">
            OUR PORTFOLIO
        </a>
        <div class="nav-links">
            <a href="<?= site_url('/') ?>" class="<?= ($active ?? '') === 'home' ? 'active' : '' ?>">Home</a>
            <a href="<?= site_url('about') ?>" class="<?= ($active ?? '') === 'about' ? 'active' : '' ?>">About</a>
            <a href="<?= site_url('members') ?>" class="<?= ($active ?? '') === 'members' ? 'active' : '' ?>">Members</a>
            <a href="<?= site_url('projects') ?>" class="<?= ($active ?? '') === 'projects' ? 'active' : '' ?>">Projects</a>
            <a href="<?= site_url('contact') ?>" class="<?= ($active ?? '') === 'contact' ? 'active' : '' ?>">Contact</a>
        </div>
    </div>
</nav>
