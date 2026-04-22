<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
        <a href="." class="navbar-brand fw-bold">
            <img src="<?= base_url() ?>utmj.png" alt="Logo" class="me-2" style="height: 75px;">
            Sistem Informasi Akademik - UTMJ
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="." class="nav-link <?= ($title == 'Dashboard') ? 'active' : '' ?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('students') ?>" class="nav-link <?= ($title == 'Mahasiswa') ? 'active' : '' ?>">Mahasiswa</a>
                </li>
            </ul>
        </div>
    </div>
</nav>