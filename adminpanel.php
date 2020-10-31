<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <style media="screen">
      .container{
        width: 70%;
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
      <h2>Admin-Panel:</h2>

    <body>
        <h3><a href="index.php">Home Page</a></h3>
        <form action="addquestion.php" method="POST">
            <label for="testName">Enter test name:</label>
            <input type="text" name="testName"/><br>
            <label for="quesText">Question:</label>
            <input type="text" name = "quesText"/><br>
            <label for="op1Text">option 1:</label>
            <input type="text" name="op1Text"/><br>
            <label for="op2Text">option 2:</label>
            <input type="text" name="op2Text"/><br>
            <label for="op3Text">option 3:</label>
            <input type="text" name="op3Text"/><br>
            <input type="submit" value="Add question"/>
        </form>

    </div>
    </body>
</html>
