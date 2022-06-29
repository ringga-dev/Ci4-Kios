<?= $this->extend('base_ui/auth'); ?>
<?= $this->section('auth'); ?>

<!-- color switcher end -->

<div class="wrapper box-layout">
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">login</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- login register wrapper start -->
    <div class="login-register-wrapper">
        <div class="container">
            <div class="member-area-from-wrap">
                <div class="row">
                    <!-- Login Content Start -->
                    <div class="col-lg-12">
                        <div class="login-reg-form-wrap  pr-lg-50">
                            <h2>Sign In</h2>
                            <form action="<?= base_url('auth/auth_now?stts=login') ?>" method="post">
                                <div class="single-input-item">
                                    <input type="email" id="email" name="email" placeholder="Email" required />
                                </div>
                                <div class="single-input-item">
                                    <input type="password" id="pass" name="pass" placeholder="Enter your Password" required />
                                </div>
                                <div class="single-input-item">
                                    <button type="submit" class="sqr-btn">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Login Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- login register wrapper end -->
</div>
<?= $this->endSection(); ?>