<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("login-home.php");
   }
}

?>
<!DOCTYPE html>
<html>
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Log in - Nucleus | Subatomic Backend</title>

      <!-- Styles based on cleanbootstrap -->

      <link rel="stylesheet" type="text/css" href="clean_bootstrap/css/bootstrap.css" />
      <link rel="stylesheet" type="text/css" href="clean_bootstrap/css/theme.css" />

      <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'> -->

      <link href='http://fonts.googleapis.com/css?family=Cuprum:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

      <link rel="stylesheet" type="text/css" href="clean_bootstrap/css/lib/animate.css" media="screen, projection">
      <link rel="stylesheet" href="clean_bootstrap/css/sign-in.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="clean_bootstrap/css/services.css" type="text/css" media="screen" />
      <!-- <link rel="stylesheet" href="clean_bootstrap/css/lib/flexslider.css" type="text/css" media="screen" /> -->
      <!-- End Styles -->

      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</head>
<body style="padding-top: 0px;">


<!-- Clean Header Start -->
<div class="navbar navbar-inverse navbar-static-top">
      <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.php">
                <img src="images/logo_w.png">
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <!-- <li><a href="index.php">HOME</a></li> -->
                    <li><a href="about-us.html">ABOUT NUCLEUS</a></li>                  
                    
                    <li><a class="btn-header active" href="login.php">Log in</a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>
<!-- Clean Header End-->





<!-- Log in from Clean Bootstrap-->
<!-- Sign In Option 1 -->
    <div id="sign_in1">
        <div class="container">
            <div class="row">
                <div class="span12 header">
                    <h4>nucleus v0.4 welcomes you</h4>
                    <p>
                        Please identify yourself allowing nucleus to grant you access</p>

                    <div class="span4 social">
                        <a href="#" class="circle facebook">
                            <img src="clean_bootstrap/img/face.png" alt="">
                        </a>
                         <a href="#" class="circle twitter">
                            <img src="clean_bootstrap/img/twt.png" alt="">
                        </a>
                         <a href="#" class="circle gplus">
                            <img src="clean_bootstrap/img/gplus.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="span3 division">
                    <div class="line l"></div>
                    <span>or</span>
                    <div class="line r"></div>
                </div>

                <div class="span12 footer">
                    <form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                        <fieldset >

                            <input type='hidden' name='submitted' id='submitted' value='1'/>
                            <div><span class='alert alert-error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>


                            <input type="text" placeholder="username" name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" />
                            <span id='login_username_errorloc' class='error'></span>
                            <input type="password" placeholder="password" name='password' id='password' maxlength="50" />
                            <span id='login_password_errorloc' class='error'></span>
                            <input type="submit" placeholder="submit" name='Submit' value="log in">
                    </form>
                </div>

                <div class="span12 proof">
                    <div class="span5 remember">
                        <!-- <label class="checkbox">
                            <input type="checkbox"> Remember me
                        </label> -->
                        <a href="reset-pwd-req.php">Forgot password?</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
<!-- Log in from Clean Bootstrap END-->


<!-- Form Code Start -->

<!-- <form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
    <legend>Login</legend>

    <input type='hidden' name='submitted' id='submitted' value='1'/>

    <div class='short_explanation'>* required fields</div>

    <div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
    <div class='container'>
        <label for='username' >UserName*:</label><br/>
        <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
        <span id='login_username_errorloc' class='error'></span>
    </div>
    <div class='container'>
        <label for='password' >Password*:</label><br/>
        <input type='password' name='password' id='password' maxlength="50" /><br/>
        <span id='login_password_errorloc' class='error'></span>
    </div>

    <div class='container'>
        <input type='submit' name='Submit' value='Submit' />
    </div>
    <div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
</fieldset>
</form> -->
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>
</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->


 <!-- starts footer -->
    <footer id="footer">
        <div class="container">
            <!-- <div class="row info">
                <div class="span6 residence">
                    <ul>
                        <li>Subatomic </li>
                        <li>Waterlooplein,125 </li>
                        <li>1011 PG Amsterdam, Netherlands</li>
                    </ul>
                </div>
                <div class="span5 touch">
                    <ul>
                        <li><strong>General mail</strong><a href="#"> info@subatomic.nl</a></li>
                    </ul>
                </div>
            </div> -->
            <div class="row credits">
                <div class="span12">
                    <div class="row social">
                        <div class="span12">
                            <a href="http://www.facebook.com/subatomicnl" class="facebook">
                                <span class="socialicons ico1"></span>
                                <span class="socialicons_h ico1h"></span>
                            </a>
                            <a href="http://www.twitter.com/subatomicnl" class="twitter">
                                <span class="socialicons ico2"></span>
                                <span class="socialicons_h ico2h"></span>
                            </a>
                            <a href="http://gplus.to/subatomicnl" class="gplus">
                                <span class="socialicons ico3"></span>
                                <span class="socialicons_h ico3h"></span>
                            </a>
                            <a href="http://pinterest.com/subatomicnl" class="pinterest">
                                <span class="socialicons ico5"></span>
                                <span class="socialicons_h ico5h"></span>
                            </a>
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="span12">
                            nucleus v0.4<br> ©2013 Subatomic<br><br> Made with ♥ in Amsterdam<br> Crafted by <a href="http://twitter.com/bochelord" target="_blank">@bochelord</a>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </footer>




    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>

</body>
</html>