<?= $this->extend('template/ci4') ?>
<?= $this->section('content') ?>


<div class="card">
    <div class="card-header">
        <h2 class="card-title text-danger-emphasis"><strong>Edit Peminjaman</strong></h2>
    </div>
    <div class="card-body">
        <form action="/peminjaman/update/<?= $peminjaman['PeminjamanID'] ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="PUT"/>
            <div class="form-group">
                <label for="UserID">UserID</label>
                <input type="text" name="UserID" id="UserID" class="form-control" value="<?= $peminjaman['UserID'] ?>" required>
            </div>
            <div class="form-group">
                <label for="BukuID">BukuID</label>
                <input type="text" name="BukuID" id="BukuID" class="form-control" value="<?= $peminjaman['BukuID'] ?>" required>
            </div>
            <div class="form-group">
                <label for="TanggalPeminjaman">Tanggal Peminjaman</label>
                <input type="date" name="TanggalPeminjaman" id="TanggalPeminjaman" class="form-control" value="<?= $peminjaman['TanggalPeminjaman'] ?>" required>
            </div>
            <div class="form-group">
                <label for="StatusPeminjaman">Status Peminjaman</label>
                <select name="StatusPeminjaman" id="StatusPeminjaman" class="form-control" required>
                    <option value="Dipinjam" <?= $peminjaman['StatusPeminjaman'] == 'Dipinjam' ? 'selected' : '' ?> style="color: black;">Dipinjam</option>
                    <option value="Dikembalikan" <?= $peminjaman['StatusPeminjaman'] == 'Dikembalikan' ? 'selected' : '' ?> style="color: black;">Dikembalikan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
