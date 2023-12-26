<?= $this->extend('layout/auth'); ?>
<?= $this->section('auth'); ?>




<section class="container">
    <div class="image-section">
        <div class="image_wrapper">
            <img src="<?= base_url('/image/cloath.jpg') ?>" alt="">
        </div>

        <div class="content-container">
            <h1 class="section-heading">Selamat Datang Di <span>Shoju</span></h1>
            <p class="section-paragraph">Belanja mudah dengan sekali sentuhan</p>
        </div>
    </div>

    <div class="form-section">
        <div class="form-wrapper">
            <div class="logo-container">
                <a href="#" class="logo-container">
                    <img src="<?= base_url('/image/register.png') ?>" alt="logo">
                </a>
            </div>

            <h2>Sign Up</h2>
            <p>Enter you credentials to create your account.</p>
            <div class="input-container">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="#" id="password">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="#" id="password">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="#" id="password">
                </div>
            </div>



            <button class="signup-btn">
                <a href="<?php echo site_url('auth/create_user') ?>">SIGN UP</a>
            </button>

            <div>
                <span>you have account?</span>
                <a class="regis-btn" onclick="goBack()">Login</a>
            </div>

            <div class="or-divider">or</div>

            <button class="google-signin">
                <object data="<?= base_url('/image/google.svg') ?>" type=""></object>
                <span>Sign up with Google</span>
            </button>
        </div>
    </div>
</section>
<script>
    function goBack() {
        window.history.back();
    }
</script>

<?= $this->endSection(); ?>