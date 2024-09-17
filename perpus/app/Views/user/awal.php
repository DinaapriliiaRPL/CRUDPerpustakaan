<?= $this->extend('Template/ci4') ?>

<?= $this->section('content') ?>

<!-- Main container -->
<div class="container-fluid">
    <div class="row" style="height: 100vh;"> <!-- Full viewport height -->
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-2 bg-light d-flex flex-column" style="height: 100%;">
            <div class="sidebar-header p-3">
                <h4>Menu</h4>
            </div>
            <ul class="nav flex-column flex-grow-1">
                <li class="nav-item">
                    <a class="nav-link" href="/user">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/buku">Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/peminjaman">Peminjaman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pengembalian">Pengembalian</a>
                </li>
            </ul>
        </nav>

        <!-- Main content -->
        <main role="main" class="col-md-10 ml-sm-auto px-4">
            <!-- Card container -->
            <div class="card">
                <div class="card-header">
                    <!-- Card title -->
                    <div class="card-header text-center">
                        <!-- Center-aligned card title -->
                        <h2 class="card-title text-danger-emphasis"><strong>DAFTAR PENGGUNA</strong></h2>
                        <div class="card-tools d-flex justify-content-start">
                            <!-- Button to add a new book -->
                            <a href="/user/create" class="btn btn-primary btn-sm">Tambah Pengguna</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Table with Bootstrap styling -->
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>UserID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 0; 
                                foreach ($users as $user){
                                $nomor++;
                            ?>
                            <tr>
                            <td><?= $user['UserID'] ?></td>
                            <td><?= $user['Username'] ?></td>
                            <td><?= $user['Email'] ?></td>
                            <td><?= $user['NamaLengkap'] ?></td>
                            <td><?= $user['Alamat'] ?></td>
                                <td>
                                    <form action="/user/edit" method="post" class="d-inline">
                                        <input type="hidden" name="UserID" value="<?= $user['UserID']?>">
                                        <input type="hidden" name="Username" value="<?= $user['Username']?>">
                                        <input type="hidden" name="Password" value="<?= $user['Password']?>">
                                        <input type="hidden" name="Email" value="<?= $user['Email']?>">
                                        <input type="hidden" name="NamaLengkap" value="<?= $user['NamaLengkap']?>">
                                        <input type="hidden" name="Alamat" value="<?= $user['Alamat']?>">
                                        <button type="submit" class="btn btn-success btn-sm">Edit</button>
                                    </form>
                                    <form action="/user/delete" method="post" class="d-inline">
                                    <input type="hidden" name="UserID" value="<?= $user['UserID'] ?>">
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>

                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>

<?= $this->endSection() ?>

<!-- Link to Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">

<!-- Link to Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>

