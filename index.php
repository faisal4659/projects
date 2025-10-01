<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<!-- Start of Government Schemes Section -->
<section id="government-schemes" style="background-color: #f4f4f4; padding: 20px; margin-top: 30px;">
    <div class="container">
        <h2>Government Schemes for Farmers</h2>
        <p>Discover government schemes that can help you as a farmer. Apply today and make the most of these opportunities!</p>
        <a href="government-schemes.php" class="btn btn-primary">Explore Schemes</a>
    </div>
</section>
<!-- End of Government Schemes Section -->
<div class="login-page">
    <div class="text-center">
       <h1>Login Panel</h1>
       <h4>Inventory Management System</h4>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Username</label>
              <input type="name" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Password</label>
            <input type="password" name= "password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-danger" style="border-radius:0%">Login</button>
        </div>
    </form>
</div>
<?php include_once('layouts/footer.php'); ?>
