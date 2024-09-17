<?= $this->extend('template/ci4')?>

<?= $this->section('content')?>

<div class="container">
    <h2 class="my-4">Tambah user</h2>
    <form action="<?= base_url('user/store') ?>" method="post">
        <?= csrf_field() ?>
        <div class="form-group">
            <label>username</label>
            <input type="text"class="form-control"name="Username" required>
        </div>
        <div class="form-group">
            <label>password</label>
            <input type="text"class="form-control"name="Password" required>
        </div>
        <div class="form-group">
            <label>email</label>
            <input type="text"class="form-control"name="Email" required>
        </div>
        <div class="form-group">
            <label>nama Lengkap</label>
            <input type="text"class="form-control"name="NamaLengkap" required>
        </div>
        <div class="form-group">
            <label>alamat</label>
            <input type="text"class="form-control"name="Alamat" required>
        </div>
        <br>
            <button type="submit"class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('user') ?>"class="btn btn-secondary">Kembali</a>
        </br>
    </form>
</div>

<?= $this->endSection()?>