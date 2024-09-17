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
                        <h2 class="card-title text-danger-emphasis"><strong>DAFTAR PENGEMBALIAN</strong></h2>
                        <div class="card-tools d-flex justify-content-start">
                            <!-- Button to add a new book -->
                            <a href="/pengembalian/create" class="btn btn-primary btn-sm">Tambah Pengembalian</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Table with Bootstrap styling -->
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>PengembalianID</th>
                                <th>UserID</th>
                                <th>BukuID</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 0; 
                                foreach ($pengembalian as $item){
                                $nomor++;
                            ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $item["UserID"]; ?></td>
                                <td><?php echo $item["BukuID"]; ?></td>
                                <td><?php echo $item["TanggalPengembalian"]; ?></td>
                                <td>
                                    <form>
                                        <input type="hidden" name="PengembalianID" value="<?= $item['PengembalianID']?>">
                                        <input type="hidden" name="UserID" value="<?= $item['UserID']?>">
                                        <input type="hidden" name="BukuID" value="<?= $item['BukuID']?>">
                                        <input type="hidden" name="TanggalPengembalian" value="<?= $item['TanggalPengembalian']?>">
                                        
                                    </form>
                                    <a href="/pengembalian/edit/<?= $item['PengembalianID'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/pengembalian/delete/<?= $item['PengembalianID'] ?>" class="btn btn-danger btn-sm">Hapus</a>
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
