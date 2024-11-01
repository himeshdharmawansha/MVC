<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= ROOT?>/assets/css/signup.css?v=1.1">
  <title>Sign Up</title>
</head>
<body>
  <div class="loginsignup" >
    <div class="loginsignup-container">
      <div class="logo-container">
        <img class="logo" src="../assests/logo (1).png"/>
        <div class="logo_text">WELL BE</div>
      </div>
      <h1>Sign Up</h1>
      <div class="loginsignup-fields">
        <form method="post">
          <input name="username"  type="text" placeholder="Type your Name"/>
          <input name="password"  type="password" placeholder="Type your Password"/>
          <button>Sign Up</button>
        </form>
      </div>
      <p class="loginsignup-login">Already have an account?<span><a href="<?=ROOT?>/login">Click here</a></span></p>
      <div class='loginsignup-agree'>
        <input type='checkbox' name='' id='' />
        <p>By continuing, I agree to the terms of use & privacy policy.</p>
      </div>
    </div>
    
  </div>
</body>
</html>