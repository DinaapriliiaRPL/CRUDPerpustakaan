<?= $this->extend('template/ci4') ?>
<?= $this->section('content') ?>


<div class="card">
    <div class="card-header">
        <h2 class="card-title text-danger-emphasis"><strong>Edit Pengembalian</strong></h2>
    </div>
    <div class="card-body">
        <form action="/pengembalian/update/<?= $pengembalian['PengembalianID'] ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="PUT"/>
            <div class="form-group">
                <label for="UserID">UserID</label>
                <input type="text" name="UserID" id="UserID" class="form-control" value="<?= $pengembalian['UserID'] ?>" required>
            </div>
            <div class="form-group">
                <label for="BukuID">BukuID</label>
                <input type="text" name="BukuID" id="BukuID" class="form-control" value="<?= $pengembalian['BukuID'] ?>" required>
            </div>
            <div class="form-group">
                <label for="TanggalPengembalian">Tanggal Pengembalian</label>
                <input type="date" name="TanggalPengembalian" id="TanggalPengembalian" class="form-control" value="<?= $pengembalian['TanggalPengembalian'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
