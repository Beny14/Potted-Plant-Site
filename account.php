<?php
  include('header.php');
?>

<html>
<head>
   <link rel="stylesheet" href="css/styleAcount.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 p-5">

        <?php
          if (isset($_GET['error'])) {
            if ($_GET['error'] == 'emplyFields') {
              echo '<p class="text-danger">Fill all fields!</p>';
            }
            else if ($_GET['error'] == 'invalidEmailName') {
              echo '<p class="text-danger">Invalid username or email!</p>';
            }
            else if ($_GET['error'] == 'invalidEmail') {
              echo '<p class="text-danger">Invalid email!</p>';
            }
            else if ($_GET['error'] == 'invalidName') {
              echo '<p class="text-danger">Invalid username!</p>';
            }
            else if ($_GET['error'] == 'passwordCheck') {
              echo '<p class="text-danger">Your passwords do not match!</p>';
            }
            else if ($_GET['error'] == 'userTaken') {
              echo '<p class="text-danger">Username is already taken!</p>';
            }
          }
        ?>

        <div class="container" id="container">
        	<div class="form-container sign-up-container">
        		<form action="includes/signup.php" method="POST">
        			<h1 class="pb-5">Create Account</h1>
        			<input type="text" name="nume" placeholder="Name"/>
        			<input type="email" name="email" placeholder="Email"/>
        			<input type="password" name="password" placeholder="Password"/>
              <input type="password" name="password-rep" placeholder="Repeat Password"/>
        			<button type="submit" name="signup-submit" class="mt-3">Sign Up</button>
        		</form>
        	</div>
        	<div class="form-container sign-in-container">
        		<form action="includes/login.php" method="POST">
        			<h1 class="pb-5">Sign in</h1>
        			<input type="email" name="email" placeholder="Email"/>
        			<input type="password" name="password" placeholder="Password"/>
        			<a href="#" class="mt-3">Forgot your password?</a>
        			<button type="submit" name="login-submit" class="mt-5">Sign In</button>
        		</form>
        	</div>
        	<div class="overlay-container">
        		<div class="overlay">
        			<div class="overlay-panel overlay-left">
        				<h1>Welcome Back!</h1>
        				<p>To keep connected with us please login with your personal info</p>
        				<button class="ghost" id="signIn">Sign In</button>
        			</div>
        			<div class="overlay-panel overlay-right">
        				<h1>Hello, Friend!</h1>
        				<p>Enter your personal details and start journey with us</p>
        				<button class="ghost" id="signUp">Sign Up</button>
        			</div>
        		</div>
        	</div>
        </div>

      </div>
    </div>
  </div>

</body>
</html>

<?php
  include('footer.php');
?>
