<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ini Judul -->
    <title>Mabim Fasilkom</title>
    <link rel="icon" href="assets/img/icon1.png"/>
    <!-- css internal -->
    <!-- <style>
      * {
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
      }
      body {
        margin: 0;
        height: 100vh;
        background: linear-gradient(135deg, #4f46e5, #06b6d4);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      /* content */
      .login-class {
        background: #ffffff;
        padding: 30px;
        width: 320px;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      }
      .judul-login {
        color: red;
      }
    </style> -->
    <!-- css external -->
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <!-- <h1>hello world</h1>
    <h2></h2> -->
    
    <div class="login-class">
      <div class="logo">
        <img src="assets/img/rfr1.png" width="150">
      </div>
      <h2 class="judul-login"  style="color: black">LOGIN</h2>
      <form action="login.php" method="post">
        <label>Username</label>
        <input type="text" name="username" id="username"/>
        <label>Password</label>
        <input type="password" name="password" id="password"/>

        <div class="error" id="errorMsg"></div>

        <input type="submit"  class="login-button" value="LOGIN"/>
      </form>
    </div>
    <script src="assets/js/script.js"></script>
  </body>
</html>