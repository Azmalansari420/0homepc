<?php include "header.php" ?>
 <section class="signup-page">
      <div class="signup-container">
        <h2 class="signup-title text-center mb-4">Sign Up</h2>
        <form method="POST" action="<?=base_url('auth/login') ?>">
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input
              type="text"
              class="form-control"
              id="name"
              placeholder="Enter your name"
              required
            />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="Enter your email"
              required
            />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              class="form-control"
              id="password"
              placeholder="Create a password"
              required
            />
          </div>
          <button type="submit" class="btn btn-primary w-100">Sign Up</button>
        </form>
        <p class="text-center mt-3">
          Already have an account? <a href="login.php" style="color: #c31807">Login</a>
        </p>
      </div>
    </section>
<?php include "footer.php" ?>

