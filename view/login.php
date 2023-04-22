<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <?php 
    include '../controller/authController.php';
    ?>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="/img/User_Avatar.png" alt="" id="icon" alt="User Icon">
    </div>

    <!-- Login Form -->
    <form method="POST">
      <input type="text" id="user" class="fadeIn second" name="user" placeholder="User">     
      <input type="password" id="pass" class="fadeIn third" name="pass" placeholder="Password">
      <input type="submit" class="fadeIn fourth" name="btn_login" value="login">
      <input type="submit" class="fadeIn fourth" name="btn_regist" value="Registro">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="">***En User and Passowrd use admin***</a>
    </div>

  </div>
</div>
    
</body>
</html>
