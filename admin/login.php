<?php
//$_pseudo='admin@newcall.fr';
//$_mot_de_passe='20220801@newcall';
  $_pseudo='dominique.amon@newcall.fr';
  $_mot_de_passe='123456';
  $mes='';
if(isset($_POST['btnOk']))
{
        $pseudo=$_POST['mail'];
        $mot_de_passe=$_POST['pwd'];
        if(empty($pseudo))//verifier si champ identifiant vide
    			$mes="<p class='erreur'>Veuillez saisir votre identifiant</p>";
    		elseif(empty($mot_de_passe))//verifier si champ vide
    			$mes="<p class='erreur'>Veuillez saisir votre mot de passe</p>";
else{
          if($pseudo==$_pseudo && $_mot_de_passe==$mot_de_passe){
              header("location:index.php");
              exit;
          }
          else {
              $mes="<p class='erreur'>Identifiant ou mot de passe incorrect</p>";
          }
        }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MyInfluencersSoftware - Admin Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-6 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block center">
                                <img style="padding-top: 200px; padding-left: 50px;" src="../admin/img/newCall_logo.png"
                                    alt="">
                            </div>
                            <div class="col-lg-6  d-lg-block center">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">My Influencers Software</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input name="mail" type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input name="pwd" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <a href="index.php" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                        <hr>
                                        <a href="index.php" class="btn btn-google btn-user btn-block">
                                            <i class="fa fa-linkedin fa-fw"></i> Login with Linkedin
                                        </a>
                                        <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                            <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                                        </a>
                                        <!--<a href="index.php" class="btn btn-instagram btn-user btn-block">
                                            <i class="fa fa-instagram fa-fw"></i> Login with Instagram
                                        </a>-->
                                    </form>
                                </div>

                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.php">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="register.php">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>