<?= $this->extend('template/ci4')?>

<?= $this->section('content')?>

<!-- Pastikan Anda sudah menghubungkan file CSS Bootstrap di dalam <head> -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <h2 class="mb-4">Edit Buku</h2>
    <form action="/buku/update" method="post">
        <div class="form-group mb-3">
            <label for="judul" class="form-label">Judul:</label>
            <input type="text" id="judul" name="judul" class="form-control" value="<?= $judul ?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="penulis" class="form-label">Penulis:</label>
            <input type="text" id="penulis" name="penulis" class="form-control" value="<?= $penulis ?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="penerbit" class="form-label">Penerbit:</label>
            <input type="text" id="penerbit" name="penerbit" class="form-control" value="<?= $penerbit ?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="tahun_terbit" class="form-label">Tahun Terbit:</label>
            <input type="text" id="tahun_terbit" name="tahun_terbit" class="form-control" value="<?= $tahun_terbit ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <input type="hidden" name="id_buku" value="<?= $id_buku ?>">
    </form>
</div>

<?= $this->endSection()?>

