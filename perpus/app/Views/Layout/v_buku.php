<?= $this->extend('template/ci4')?>

<?= $this->section('Dina')?>

<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <a href="../index2.html" class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
                <h1 class="mb-0"><b>Halaman Login</b></h1>
            </a>
        </div>
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="../index3.html" method="post">
                <!-- User ID -->
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input id="userId" type="text" class="form-control" placeholder="">
                        <label for="userId">User ID</label>
                    </div>
                    <div class="input-group-text"><span class="bi bi-person"></span></div>
                </div>
                <!-- Username -->
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input id="username" type="text" class="form-control" placeholder="">
                        <label for="username">Username</label>
                    </div>
                    <div class="input-group-text"><span class="bi bi-person"></span></div>
                </div>
                <!-- Email -->
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input id="loginEmail" type="email" class="form-control" placeholder="">
                        <label for="loginEmail">Email</label>
                    </div>
                    <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                </div>
                <!-- Password -->
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input id="loginPassword" type="password" class="form-control" placeholder="">
                        <label for="loginPassword">Password</label>
                    </div>
                    <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                </div>
                <!-- Full Name -->
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input id="fullName" type="text" class="form-control" placeholder="">
                        <label for="fullName">Nama Lengkap</label>
                    </div>
                    <div class="input-group-text"><span class="bi bi-person-badge"></span></div>
                </div>
                <!-- Address -->
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <textarea id="address" class="form-control" placeholder="" rows="3"></textarea>
                        <label for="address">Alamat</label>
                    </div>
                    <div class="input-group-text"><span class="bi bi-house-door"></span></div>
                </div>
                <!-- Remember Me & Submit Button -->
                <div class="row">
                    <div class="col-8 d-inline-flex align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Remember Me</label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </form>
            <div class="social-auth-links text-center mb-3 d-grid gap-2">
                <p>- OR -</p>
                <a href="#" class="btn btn-primary">
                    <i class="bi bi-facebook me-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-danger">
                    <i class="bi bi-google me-2"></i> Sign in using Google+
                </a>
            </div>
            <!-- /.social-auth-links -->
            <p class="mb-1"><a href="forgot-password.html">I forgot my password</a></p>
            <p class="mb-0"><a href="register.html" class="text-center">Register a new membership</a></p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<?= $this->endSection()?>
