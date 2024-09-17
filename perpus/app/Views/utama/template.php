<?= $this->extend('template/ci4') ?>

<?= $this->section('title') ?>
    Halaman Utama
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section id="buku">
        <h1>Daftar Buku</h1>
        <!-- Konten Buku di sini -->
    </section>
    <section id="user">
        <h1>Manajemen User</h1>
        <!-- Konten User di sini -->
    </section>
    <section id="peminjaman">
        <h1>Daftar Peminjaman</h1>
        <!-- Konten Peminjaman di sini -->
    </section>
<?= $this->endSection() ?>
