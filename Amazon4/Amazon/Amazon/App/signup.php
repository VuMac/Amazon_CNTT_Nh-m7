<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="../css/stylelogin.css">
     <link rel="shortcut icon" href="../images/logo-favicon.png">
</head>
<body>
<div class="div" onclick="window.location.href='../App/index.php'">

<img src="../images/Capture.PNG" alt="">
</div>
     <div class=hehe>
     <form action="signup-check.php" method="post">
     	
            <div class="haha"><h2>SIGN UP</h2></div>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <div class="haha"><label>Name</label></div>
          <div class="hoho"><?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
               <?php }?>
               </div>
          <div class="haha"><label>User Name</label></div>
          <div class="hoho"><?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>
          </div>

     	<div class="haha"><label>Password</label></div>
     	<div class="hoho"><input type="password" 
                 name="password" 
                 placeholder="Password"><br>
          </div>
          <div class="haha"><label>Re Password</label></div>
          <div class="hoho"><input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>
                 </div>
     	<div class="haha" style="height:52px;"><button type="submit">Sign Up</button></div>
          <a href="./login.php" class="ca">Already have an account?</a>
         
     </form>
     </div>
</body>
</html>