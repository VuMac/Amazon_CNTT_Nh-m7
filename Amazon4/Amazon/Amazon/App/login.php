<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="../css/stylelogin.css">
    <link rel="shortcut icon" href="../images/logo-favicon.png">
</head>
<body>
<div class="div" onclick="window.location.href='../App/index.php'">

            <img src="../images/Capture.PNG" alt="">
        </div>

    <div class=hehe>
        <form action="login-conn.php" method="post">

        <div class="haha"> <h2>Sign-In</h2></div>
         <?php if (isset($_GET['error'])) { ?>
             <p class="error"><?php echo $_GET['error']; ?></p>
         <?php } ?>

         <div class="haha"><label>Sign-In</label></div>
         <div class="hoho"><input type="text" name="uname" placeholder="User Name"><br></div>

         <div class="haha"><label>Password</label></div>
         <div class="hoho"><input type="password" name="password" placeholder="Password"><br></div>
         <div>
                  <?php
                  if (isset($_GET['error'])) {
                    echo "<h6 style='color:red'> {$_GET['error']} </h6>";
                  }
                  ?>
            </div>

         <div class="haha" style="height:52px;"><button type="submit" name="submit">Login</button></div>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
    </div>
</body>
</html>