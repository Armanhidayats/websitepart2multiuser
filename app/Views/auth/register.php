<?= $this->extend('admin/index') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <!-- Custom styles for this template-->
    <link href="<?= Base_url();?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
   
    


        <!-- Outer Row -->
        <div class="row justify-content-center">

                <div class="col-xl-8 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-12">
                    <div class="card-body ">
                        <!-- Nested Row within Card Body -->
                        
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Daftar Akun KONI SUMSEL !</h1>
                                    </div>

                                    <?= view('Myth\Auth\Views\_message_block') ?>

                                    <form action="<?= route_to('register') ?>" method="post" class="user">
						            <?= csrf_field() ?>

                                       
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                 aria-describedby="emailHelp" name="email" value="<?= old('email') ?>" placeholder="Enter Email Address...">
                                                <div class="invalid-feedback">
								                    <?= session('errors.login') ?>
							                    </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>"
                                                  name="username" value="<?= old('username') ?>" placeholder="Username">
                                                <div class="invalid-feedback">
								                    <?= session('errors.login') ?>
							                    </div>
                                        </div>
                                

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password"
                                          placeholder="Password" <?php if(session('errors.password')) : ?>is-invalid<?php endif ?> autocomplete="off">
							            <div class="invalid-feedback">>
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="pass_confirm"
                                          placeholder=" confir Password"   <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?> autocomplete="off">
							            <div class="invalid-feedback">>
                                        </div>

                                         <br>

                                       


    
                                        <button type="submit" class="btn btn-danger btn-user btn-block " >
                                            Daftar
                    
                                        </button>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                

            </div>

<?= $this->endSection() ?>