<?= $this->extend('template/ci4')?>

<?= $this->section('content')?>

<!-- Pastikan Anda sudah menghubungkan file CSS Bootstrap di dalam <head> -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <h2 class="mb-4">Edit User</h2>
    <form action="/user/update" method="post">
        <div class="form-group mb-3">
            <label for="Username" class="form-label">Username</label>
            <input type="text" name="Username" id="Username" class="form-control" value="<?=$user['Username']?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="Password" class="form-label">Password:</label>
            <input type="text" id="Password" name="Password" class="form-control" value="<?=$user['Password']?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="Email" class="form-label">Email:</label>
            <input type="text" id="Email" name="Email" class="form-control" value="<?=$user['Email']?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="NamaLengkap" class="form-label">NamaLengkap:</label>
            <input type="text" id="NamaLengkap" name="NamaLengkap" class="form-control" value="<?=$user['NamaLengkap']?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="Alamat" class="form-label">Alamat:</label>
            <input type="text" id="Alamat" name="Alamat" class="form-control" value="<?=$user['Alamat']?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <input type="hidden" name="UserID" value="<?=$user['UserID'] ?>">
    </form>
</div>

<?= $this->endSection()?>`

