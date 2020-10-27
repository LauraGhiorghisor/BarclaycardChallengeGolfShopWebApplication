
<!-- use the register method in methods.php -->
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>



                            <form class="user" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="firstname" id="exampleFirstName" placeholder="First Name" name="firstname"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="lastname" id="exampleFirstName" placeholder="Last Name" name="lastname"></div>
                                </div>
                                <div class="form-group"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" name="email"></div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password" name="password"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password" name="password_repeat"></div>
                                </div><button class=" btn btn-register btn-block text-white" type="submit" name="register">Register Account</button>

                                <hr><a class="btn btn-block text-white btn-google" role="button">&nbsp; Register with Google</a>
                                <a class="btn btn-block text-white btn-facebook" role="button">&nbsp; Register with Facebook</a>
                                <hr>
                            </form>



                            <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                            <div class="text-center"><a class="small" href="login.html">Already have an account? Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['register'])) {
		$stmt = $pdo->prepare('INSERT INTO users(email, password, firstname, surname)
					VALUES (:email, :password, :firstname, :surname)');
		$values = [
			'email' => $_POST['email'],
			'password' => $_POST['password'],
			'firstname' => $_POST['firstname'],
            'surname' => $_POST['lastname']
		];
		unset($_POST['submit']);
		$stmt->execute($values);
		echo 'Succesfully registered!';
	}
	?>







