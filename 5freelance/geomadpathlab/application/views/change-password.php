<?php include "header.php" ?>
<section class="forget-password-page">
      <div class="password-container">
    <h2 class="password-title text-center mb-4">Change Password</h2>
    <form>
      <div class="mb-3">
        <label for="new-password" class="form-label">New Password</label>
        <input type="password" class="form-control" id="new-password" placeholder="Enter your new password" required />
      </div>
      <div class="mb-3">
        <label for="confirm-password" class="form-label">Confirm New Password</label>
        <input type="password" class="form-control" id="confirm-password" placeholder="Confirm your new password" required />
      </div>
      <button type="submit" class="btn btn-primary w-100" onclick="window.location.href='user-details.php';">Change Password</button>
    </form>
  </div>
    </section>
<?php include "footer.php" ?>