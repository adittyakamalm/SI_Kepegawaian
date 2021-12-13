      
      <div class="login">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                        <div class="logologin">
                            <a href="<?= base_url('home'); ?>">
                            <img src="<?= base_url('assets/images/spn.png'); ?>" alt="Lambang SPN">
                            </a>
                        </div>
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-4">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <?php echo $this->session->flashdata('failed')?>
                                        <form class="user" method="post" action="<?php echo base_url('auth'); ?> ">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="username" type="username" name="username" placeholder="Masukan username..." autocomplete="off"/>
                                                <label for="username">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="password" type="password" name="password" placeholder="Password" />
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                                <button class="btn btn-dark" type="submit">Login</button>
                                            </div>
                                            <!-- <p class="mt-3 text-center text-dark font-weight-bold">Tidak punya akun? <a href="<?= base_url('auth/register'); ?>" class="text-black">Daftar</a> </p> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
      </div>
            
        
