<?= $this->extend('template/ci4')?>

<?= $this->section('content')?>

<div class="container">
    <h2 class="my-4">Tambah Buku</h2>
    <form action="<?= base_url('buku/store') ?>" method="post">
        <?= csrf_field() ?> 
        <div class="form-group">
            <label>Judul</label>
            <input type="text"class="form-control"name="judul" required>
        </div>
        <div class="form-group">
            <label>Penulis</label>
            <input type="text"class="form-control"name="penulis" required>
        </div>
        <div class="form-group">
            <label>Penerbit</label>
            <input type="text"class="form-control"name="penerbit" required>
        </div>
        <div class="form-group">
            <label>Tahun Terbit</label>
            <input type="text"class="form-control"name="tahun_terbit" required>
        </div>
        <br>
            <button type="submit"class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('buku') ?>"class="btn btn-secondary">Kembali</a>
        </br>
    </form>
</div>

<?= $this->endSection()?>