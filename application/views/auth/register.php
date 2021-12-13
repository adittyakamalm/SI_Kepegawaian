<div class="col-lg-6 mx-auto">
    <div class="container">
        <?php if($this->session->userdata('user_username')) { ?>
            <div class="alert alert-danger mt-3" role="alert">
                <p class="text-center">You are logged in!</p>
            </div>
        <?php } else { ?>
            <div class="form mt-3">
                <form class="user py-3 px-5" method="post" action="<?= base_url('auth/register'); ?>">
                    <h1 class="text-dark text-center unihealth-text">
                        Daftar Akun
                    </h1>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username here" style="opacity: 0.6" value="<?= set_value('username'); ?>" autocomplete="off">
                        <?= form_error('username', '<small class="text-danger pl-2"><i class="fas fa-exclamation-circle">', '</small></i>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password1" name="password1" placeholder="Enter your password here" style="opacity: 0.6" autocomplete="off">
                        <?= form_error('password1', '<small class="text-danger pl-2"><i class="fas fa-exclamation-circle">', '</small></i>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="password">Repeat Password</label>
                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat password" style="opacity: 0.6" autocomplete="off">
                        <?= form_error('password2', '<small class="text-danger pl-2"><i class="fas fa-exclamation-circle">', '</small></i>'); ?>
                    </div>
                    
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark px-4 py-2 mt-3" style="font-size: 18px;">
                            Sign Up
                        </button>
                    </div>

                    <p class="mt-3 text-center text-dark font-weight-bold">
                       Sudah punya akun? <a href="<?= base_url('auth'); ?>" class="text-black">Login Sekarang</a> 
                    </p>
                </form>
            </div>
        <?php } ?>
    </div>
</div>