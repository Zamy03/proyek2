<?= $this->extend('layout/auth'); ?>

<?= $this->section('auth'); ?>


<?php echo form_open('auth/login'); ?>

<div class="">

  <section class="container">
    <div class="image-section">
      <div class="image_wrapper">
        <img src="<?= base_url('/image/shopping,png.jpg') ?>" alt="">
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
            <img src="<?= base_url('/image/Store.png') ?>" alt="logo">
          </a>
        </div>

        <h2>Sign In</h2>
        <p>Enter you credentials to access your account.</p>
        <div class="input-container">
          <div class="form-group">
            <?php echo form_label(lang('Auth.login_identity_label'), 'identity'); ?> <?php echo form_input($identity); ?>
          </div>
        </div>

        <div class="input-container">
          <div class="form-group">
            <?php echo form_label(lang('Auth.login_password_label'), 'password'); ?> <?php echo form_input($password); ?>
          </div>
        </div>

        <div class="remember-forgot">
          <div class="remember-me">
            <?php echo form_checkbox('remember', '1', false, 'id="remember"'); ?>
            <?php echo form_label(lang('Auth.login_remember_label'), 'remember'); ?>
          </div>

          <p><a href="forgot_password"><?php echo lang('Auth.login_forgot_password'); ?></a></p>
          <?php echo form_close(); ?>
        </div>


        <!-- <?php echo form_submit('submit', lang('Auth.login_submit_btn')); ?> -->
        <button class="login-btn">
          <span>SIGN IN</span>
        </button>



        <div>
          <span>Already have an account?</span>
          <a class="regis-btn" href="<?php echo site_url('signup') ?>">Sign Up</a>
        </div>

        <div class="or-divider">or</div>

        <button class="google-signin">
          <object data="<?= base_url('/image/google.svg') ?>" type=""></object>
          <span>Sign in with Google</span>
        </button>
      </div>
    </div>
  </section>
</div>



<?= $this->endSection(); ?>