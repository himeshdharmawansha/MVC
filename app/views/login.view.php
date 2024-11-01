<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= ROOT?>/assets/css/signup.css?v=1.1">
  <title>Login</title>
</head>
<body>
  <div class="loginsignup" >
    <div class="loginsignup-container">
      <div class="logo-container">
        <img class="logo" src="../assests/logo (1).png"/>
        <div class="logo_text">WELL BE</div>
      </div>
      <h1>Log In</h1>
      <form method="post">
        <div class="loginsignup-fields">
          <input name="username"  type="text" placeholder="Type your NIC number"/>
          <input name="password"  type="password" placeholder="Type your Password"/>
        </div>
        <button>LOGIN</button>
      </form>
      <?php
        if(isset($_SESSION['user_type']) && $_SESSION['user_type'] === "patient")
        {
          echo '<p class="loginsignup-login">Create an account <span><a href="' . ROOT . '/signup">Click here</a></span></p>';
        }
      ?>
      <div class='loginsignup-agree'>
        <input type='checkbox' name='' id='' />
        <p>By continuing, I agree to the terms of use & privacy policy.</p>
      </div>
    </div>
    
  </div>
</body>
</html>