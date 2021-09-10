<?php
session_start();

if(isset($_SESSION['login_user']))
{
$message = "Successfull logout/Session expired.Please login again.";
echo "<script type='text/javascript'>alert('$message');</script>";
}

session_destroy();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VESIT SPORTS</title>
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="stylesheet" href="/stylesheets/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="pane-container">
      <div class="left-pane">
        <div class="logo-container">
          <img class="logo" src="/img/logo2.png" alt="" height="40" width:"32" style="margin-left:2px">
          <span class="logo-font">VESIT SPORTS</span>
          <button onclick="galleria.html" class="galleria-button">Galleria</button>
          <button onclick="council.html" class="council-button">Council</button>
        </div>
        <div class="slogan-container">
          <span class="quote">“There may be people that have more talent than you, but there’s no excuse for anyone to work harder than you do.”</span>
        </div>
        <div class="welcome-container">
          <span class="welcome">Welcome to VESIT Sports website.Check timetable,follow live updates,check current standings and more.</span>
        </div>
        <div class="follow-container">
          <a href="https://www.facebook.com/vesit.sports/" class="fa fa-facebook"></a>
          <a href="https://www.instagram.com/vesit_sports/" class="fa fa-instagram"></a>
        </div>

      </div>
      <div class="right-pane">
        <div class="greeting-container">
          <span class="Hello">Hello!</span>
          <span  id="here-js" class="good-greeting">Good Afternoon</span>
        </div>

        <div class="form-container">
          <span class="login-greeting">Login your account</span>
          <form action="/php/action.php" method="post">
              <img class="img-container" src="img/vesit-logo.jpg" alt="">

              <div class="form-contents">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="   xyz@mail.com" name="email" value="" required autofocus>
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="   *****" name="password" value="" required>
                <button type="submit">Login</button>
          </form>
          <form action="/participant.html" method="post">
            <button type="submit">I'm a participant</button>
          </form>
                <span class="administrator">Having trouble while login?</span>
                <span class="administrator1">Contact administrator</span>
              </div>
        </div>
      </div>
    </div>
    <div class="footer-container">

    </div>
    <script  src="/scripts/greeting.js" type="text/javascript"></script>

  </body>
</html>
