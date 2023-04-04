<?php
   require   'api/login.php'; 
  
 ?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
<title></title>
<link rel="stylesheet" href="style2.css">
</head>
		
	
<body>
<div class="container-login">

     <div id="main-wrapper">

		 <div class="login-form-title">Login</div>
	  <?php include('includes/errors.php'); ?>
	  
	 <form class="login-form" action="user.php" method="POST">

	 <input name = "email" type="email" class="input" placeholder="email"/><br>
    
	 <input name="password" type="password" class="input" placeholder="password"/><br>
	 <button class="login100-form-btn login100-form-bgbtn" name="g" type="submit" id="register_btn" value="Login">Login</button>
</form>

	 </div>

</div>
</body>
</html>