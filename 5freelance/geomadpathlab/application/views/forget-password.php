<?php include "header.php" ?>
<section class="forget-password-page">
      <div class="password-container">
    <h2 class="password-title text-center mb-4">Forget Password</h2>
    <form>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email" required />
      </div>
      <button type="submit" class="btn btn-primary w-100" onclick="window.location.href='change-password.php';">Send Reset Link</button>
    </form>
    <p class="text-center mt-3"><a href="#" style="color: #c31807;">Back to Login</a></p>
  </div>
    </section>
<?php include "footer.php" ?>