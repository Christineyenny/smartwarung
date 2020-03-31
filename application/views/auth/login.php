<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 ftco-animate">
                <form action="<?php echo site_url('auth/verif
                
                
                
                
                ') ?>" class="billing-form" method="post">
                <h3 class="mb-4 billing-heading text-center">Login</h3>
                <div class="row align-items-end">
                    <div class="offset-md-3 col-md-6">
                        <div class="form-group">
                            <label >Username</label>
                            <input type="text" class="form-control" name="username" placeholder="">
                        </div>
                    </div>
                    <div class="w-100"></div>
                        <div class="offset-md-3 col-md-6">
                        <div class="form-group">
                            <label for="phone">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="">
                        </div>
                        </div>
                    </div>
                <div class="w-100"></div>
                <div class="offset-md-5 col-md-2">
                    <div class="form-group form-row d-inline">
                        <div class="col">
                            <input type="submit" class="btn btn-primary px-5 text-center d-block" value="Login">
                        </div>
                        <div class="col">
                            <a class="text-center py-3 d-block" href="<?php echo base_url('auth/register') ?>">Register</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                    </div>
                </div>
                <div class="w-100"></div>
            </form><!-- END -->
            </div>
            </div>
        </div>
    </div>
</section> <!-- .section -->