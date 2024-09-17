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
                        <h2 class="card-title text-danger-emphasis"><strong>DAFTAR BUKU</strong></h2>
                        <div class="card-tools d-flex justify-content-start">
                            <!-- Button to add a new book -->
                            <a href="/buku/create" class="btn btn-primary btn-sm">Tambah Buku</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Table with Bootstrap styling -->
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 0; 
                                foreach ($dina as $key){
                                $nomor++;
                            ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $key["judul"]; ?></td>
                                <td><?php echo $key["penulis"]; ?></td>
                                <td><?php echo $key["penerbit"]; ?></td>
                                <td><?php echo $key["tahun_terbit"]; ?></td>
                                <td>
                                    <form action="/buku/edit" method="post" class="d-inline">
                                        <input type="hidden" name="id_buku" value="<?= $key['id_buku']?>">
                                        <input type="hidden" name="judul" value="<?= $key['judul']?>">
                                        <input type="hidden" name="penulis" value="<?= $key['penulis']?>">
                                        <input type="hidden" name="penerbit" value="<?= $key['penerbit']?>">
                                        <input type="hidden" name="tahun_terbit" value="<?= $key['tahun_terbit']?>">
                                        <button type="submit" class="btn btn-success btn-sm">Edit</button>
                                    </form>
                                    <form action="/buku/delete" method="post" class="d-inline">
                                        <input type="hidden" name="id_buku" value="<?= $key['id_buku']?>">
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
