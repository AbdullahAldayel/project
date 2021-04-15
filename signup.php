<style>
form { margin: 0px 10px; }

h2 {
  margin-top: 2px;
  margin-bottom: 2px;
}

.container { 
    max-width: 360px;
    margin-top:200px;

 }

.divider {
  text-align: center;
  margin-top: 20px;
  margin-bottom: 5px;
}

.divider hr {
  margin: 7px 0px;
  width: 35%;
}

.left { float: left; }

.right { float: right; }



</style>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <div class="container">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="post" action="checksignup.php" role="form">
						<div class="form-group">
							<h2>Create account</h2>
						</div>
						
						<div class="form-group">
							<label  class="control-label" >Email</label>
							<input name="signupemail" id="signupEmail" type="email" maxlength="50" class="form-control">
						</div>
						
						<div class="form-group">
							<label class="control-label" >Password</label>
							<input name="signuppassword" id="signupPassword" type="password" maxlength="25" class="form-control" placeholder="please choose a strong password" length="40">
						</div>
						
						<div class="form-group">
							<button id="signupSubmit" type="submit" class="btn btn-info btn-block">Create your account</button>
						</div>
						<p class="form-group">By creating an account, you agree to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p>
						<hr>
						<p></p>Already have an account? <a href="http://localhost/381Project/login.php">Sign in</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
