<?php 


session_start();
require '../templates/connect.php';

ob_start();
require '../templates/topnav.html.php';
$topnav = ob_get_clean();


ob_start();
require '../templates/catnav.html.php';
$catnav = ob_get_clean();



if (isset($_POST['submit'])) {
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
    $details = [
        'email' => $_POST['email'],
    ];
    unset($_POST['submit']);
    $stmt->execute($details);
    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch();
        if ($_POST['password'] == $user['password']) {
            // session_start();

            $_SESSION['loggedin'] = $user['user_id'];
            $_SESSION['cart-counter'] = 0;
            $_SESSION['total']=0;
            // var_dump($_SESSION['loggedin']);
            $content = "sfdg";
                header("location: /index.php");
               
             
        }
        
        if ($_POST['email'] !== $user['email'] ) {
            $content= 'Sorry, your username and password could not be found Please try <a href="login.php"> again!</a>';
        }
    }
}
else $content = '

<div class="container">
<div class="row justify-content-center">
    <div class="col-md-9 col-lg-12 col-xl-10">
        <div class="card o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-login-image"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Welcome Back!</h4>
                            </div>
                            
                            <form class="user" form action="login.php" method="POST">
                                <div class="form-group"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email"></div>
                                <div class="form-group"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password"></div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                    </div>
                                </div><button class=" login-page btn btn-block text-white btn-user" type="submit" name="submit">Login</button>
                                <hr><a class="btn google  btn-block text-white btn-google " role="button"></span>&nbsp; Login with Google</a>
                                <a class="btn facebook btn-block text-white btn-facebook " role="button"></span>&nbsp; Login with Facebook</a>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                            <div class="text-center"><a class="small" href="register.html">Create an Account!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
';



ob_start();
require '../templates/footer.html.php';
$footer = ob_get_clean();




require '../templates/layout-no-carousel.html.php';
?>


