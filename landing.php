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
              header("location:newsfeed.php");
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
    <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Social Digital Content - NewC@ll</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">
        <!--<div class="container-fluid pdng0">
		<div class="row merged">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="land-featurearea">
					<div class="land-meta">
						<h1>Winku</h1>
						<p>
							SOCIAL DIGITAL is free to use for as long as you want with two active projects.
						</p>
						<div class="">
							<span><img src="images/newcall_200x104.png" alt=""></span>
						</div>
						<a href="#" title="" class="folow-me">Follow Us on</a>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="login-reg-bg">
					<div id="sign" class="log-reg-area sign">
						<h2 class="log-title">Login</h2>
							<div>
							<button class="login rs1" type="button"><a href="user-admin.php"><span>LINKEDIN</span></a></button>
							</div>
							<div>
							<button class="login rs2" type="button"><a href="user-admin.php"><span>TWITTER</span></a></button>
							</div>
							<div>
							<button class="login rs3" type="button"><a href="user-admin.php"><span>INSTAGRAM</span></a></button>
							</div>
							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>Always Remember Me.
							  </label>
							</div>
							<a href="#reg" title="" class="forgot-pwd">Already have an account</a>
						<form method="post">
							<div class="form-group">
							  <input type="text" id="input" required="required"/>
							  <label class="control-label" for="input">Username</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">
							  <input type="password" required="required"/>
							  <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
							</div>
							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>Always Remember Me.
							  </label>
							</div>
							<a href="#" title="" class="forgot-pwd">Forgot Password?</a>
							<div class="submit-btns">
								<button class="mtr-btn signin" type="button"><span>Login</span></button>
								<button class="mtr-btn signup" type="button"><span>Register</span></button>
							</div>
						</form>
					</div>
					<div id="reg" class="log-reg-area reg">
						<h2 class="log-title">Register</h2>
							<div>
							<button class="login rs1" type="button"><span>LINKEDIN</span></button>		
							</div>
							<div>
							<button class="login rs2" type="button"><span>TWITTER</span></button>
							</div>
							<div>
							<button class="login rs3" type="button"><span>INSTAGRAM</span></button>
							</div>
							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>Always Remember Me.
							  </label>
							</div>
							<a href="#sign" title="" class="forgot-pwd">Already a member ?</a>
						<form method="post">
							<div class="form-group">
							  <input type="text" required="required"/>
							  <label class="control-label" for="input">First & Last Name</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">
							  <input type="text" required="required"/>
							  <label class="control-label" for="input">User Name</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">
							  <input type="password" required="required"/>
							  <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
							</div>
							<div class="form-radio">
							  <div class="radio">
								<label>
								  <input type="radio" name="radio" checked="checked"/><i class="check-box"></i>Male
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="radio"/><i class="check-box"></i>Female
								</label>
							  </div>
							</div>
							<div class="form-group">	
							  <input type="text" required="required"/>
							  <label class="control-label" for="input">Email@</label><i class="mtrl-select"></i>
							</div>
							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>Accept Terms & Conditions ?
							  </label>
							</div>
							<a href="#" title="" class="already-have">Already a member ?</a>
							<div class="submit-btns">
								<button class="mtr-btn signup" type="button"><span>Register</span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>-->

        <div class="container-fluid pdng0">
            <div class="row merged">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="login-reg-bg">
                        <div class="log-reg-area sign">
                            <h2 class="log-title">Login</h2>
                            <p>
                                Welcome <a href="#" title="">Take the tour</a> or <a href="#" title="">Join now</a>
                            </p>
                            <form method="post" action="">
                                <?php echo $mes ; ?>
                                <div class="form-group">
                                    <input name="mail" type="mail" id="input" required="required" />
                                    <label class="control-label" for="input">Username</label><i class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    <input name="pwd" type="password" required="required" />
                                    <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked="checked" /><i class="check-box"></i>Always
                                        Remember Me.
                                    </label>
                                </div>
                                <!--<a href="#" title="" class="forgot-pwd">Forgot Password?</a>-->
                                <div class="submit-btns">
                                    <button name="btnOk" class="btn btn-primary btn-user btn-block"
                                        type="submit"><span>Login</span></button>
                                    <!--<button class="mtr-btn signup" type="button"><span>Register</span></button>-->
                                </div>
                                <hr>
                                <a href="index.php" class="btn btn-google btn-user btn-block">
                                    <i class="fa fa-linkedin fa-fw"></i> Login with Linkedin
                                </a>
                                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                    <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                                </a>
                                <a href="index.php" class="btn btn-instagram btn-user btn-block">
                                    <i class="fa fa-instagram fa-fw"></i> Login with Instagram
                                </a>
                                <div class="text-center">
                                    <a class="small" href="">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="register_login.php">Create an Account!</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="log-reg-area reg">
                        <h2 class="log-title">Register</h2>
                        <p>
                            Welcome <a href="#" title="">Take the tour</a> or <a href="#" title="">Join now</a>
                        </p>
                        <form method="post">
                            <div class="form-group">
                                <input type="text" required="required" />
                                <label class="control-label" for="input">First & Last Name</label><i
                                    class="mtrl-select"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" required="required" />
                                <label class="control-label" for="input">User Name</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">
                                <input type="password" required="required" />
                                <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-radio">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="radio" checked="checked" /><i
                                            class="check-box"></i>Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="radio" /><i class="check-box"></i>Female
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" required="required" />
                                <label class="control-label" for="input"><a
                                        href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="afeac2cec6c3ef">[email&#160;protected]</a></label><i
                                    class="mtrl-select"></i>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" checked="checked" /><i class="check-box"></i>Accept Terms &
                                    Conditions ?
                                </label>
                            </div>
                            <a href="#" title="" class="already-have">Already have an account</a>
                            <div class="submit-btns">
                                <button class="mtr-btn signup" type="button"><span>Register</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/script.js"></script>

</body>
</php>