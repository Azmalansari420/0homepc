<?php include "header.php" ?>
<section class="login-page">
      <div class="login-container">
        <h2 class="login-title text-center mb-4">Login</h2>
        <?php echo $this->session->flashdata('login_msg') ?>
        <form method="POST" action="<?=base_url('auth/login') ?>">
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input
              type="email"
              class="form-control"
              name="email"
              placeholder="Enter your email"
              required
            />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              class="form-control"
              name="password"
              placeholder="Enter your password"
              required
            />
          </div>
          <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <p class="text-center mt-3">
          <a href="forget-password.php" style="color: #c31807"> Forget Password</a>
        </p>
      </div>
    </section>
<?php include "footer.php" ?>