<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup page</title>
    <style media="screen">
      .container{
        width: 40%;
        margin: auto;
        text-align: center;
        background: white;
        padding: 50px;
        margin-top: 50px;
      }
      body{
        font-size: 16px;
        background: grey;
        font-family: Verdana;
      }
      input{
        padding: 4px;
        margin: 10px;
        width: 200px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h2>Fill User-Registration details:</h2>
      <form action="register.php" method="post">
        <label>Username:</label>
        <input type="text" name="user" required><br>
        <label>Password :</label>
        <input type="password" name="pass" required><br>
        <label>User-mail:</label>
        <input type="email" name="mail" required><br>
        <label>User-Role:</label>
        <input type="text" name="role" required><br>
        <input type="submit" name="" value="Register">
        <a href="login.php">Already a user?<a>
      </form>
    </div>
  </body>
</html>
