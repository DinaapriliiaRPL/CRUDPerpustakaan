<?= $this->extend('template/ci4') ?>
<?= $this->section('content') ?>

<div class="card">
    <div class="card-header">
        <h2 class="card-title text-danger-emphasis"><strong>Tambah Peminjaman</strong></h2>
    </div>
    <div class="card-body">
        <form action="/peminjaman" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="UserID">UserID</label>
                <input type="text" name="UserID" id="UserID" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="BukuID">BukuID</label>
                <input type="text" name="BukuID" id="BukuID" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="StatusPeminjaman">Status Peminjaman</label>
                <select name="StatusPeminjaman" id="StatusPeminjaman" class="form-control" required>
                    <option value="Dipinjam">Dipinjam</option>
                    <option value="Dikembalikan">Dikembalikan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>

<script>
    $(function () {
        $('#TanggalPeminjaman').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            defaultDate: new Date()
        });
    });
</script>

<?= $this->endSection() ?>
