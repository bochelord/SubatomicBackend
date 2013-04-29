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
	<title>About Nucleus</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	   
    <!-- Styles based on cleanbootstrap -->

      <link rel="stylesheet" type="text/css" href="clean_bootstrap/css/bootstrap.css" />
      <link rel="stylesheet" type="text/css" href="clean_bootstrap/css/theme.css" />

    <link href='http://fonts.googleapis.com/css?family=Cuprum:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="clean_bootstrap/css/lib/animate.css" media="screen, projection">
    <link rel="stylesheet" href="clean_bootstrap/css/about.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="clean_bootstrap/css/lib/flexslider.css" type="text/css" media="screen" />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>


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
                    <li><a href="about.php">ABOUT NUCLEUS</a></li>                  
                    
                    <!-- <li><a class="btn-header active" href="login.php">Log in</a></li> -->
                </ul>
            </div>
        </div>
      </div>
    </div>
<!-- Clean Header End-->




    <div id="aboutus">
        <div class="container">
            <div class="section_header">
                <h3>About Nucleus v0.4</h3>
            </div>
            <div class="row">
                <div class="span6 intro">
                    <h6>There are many variations of passages Lorem Ipsum available, injected generators on the hidden.</h6>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, injected 
                        generators on the  embarrassing hidden in the middle all the dictionary making it look like readable English. Many desktop publishing packages and web page editors.
                        <br /><br />
                        There are many variations of passages of Lorem Ipsum available, but the ndictionary of over 200 Latin words, combined with a handful of models The generated Lorem Ipsum is therefore always free from repetition, the injected humour, or non-characteristic words etc.</p>
                </div>
                <div class="span6 flexslider">
                      <ul class="slides">
                        <li>
                          <img src="images/newyear_splash.png" />
                        </li>
                        <li>
                          <img src="images/subatomic_pins.jpg" />
                        </li>
                        <li>
                          <img src="clean_bootstrap/img/about_slide1.jpg" />
                        </li>
                      </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="team">
        <div class="container">
            <div class="section_header">
                <h3>Meet our Team</h3>
            </div>

            <div class="row people">
                <div class="row row1">
                    <div class="span6 bio_box">
                        
                        <div class="row">
                            <div class="span3">
                                <img src="clean_bootstrap/img/melinda-comp.png" alt="">
                            </div>
                            <div class="span2">
                                <img src="clean_bootstrap/img/MelindaElement.png">
                            </div>    
                        </div>
                        <div class="info">

                            <div class="row">
                                <div class="span2">
                                    <p class="name">Melinda Jacobs</p>
                                    <p class="area">CEO / Creative Director</p>
                                </div>
                                <div class="span2">
                                    <a href="#" class="facebook">
                                        <span class="socialicons ico1"></span>
                                        <span class="socialicons_h ico1h"></span>
                                    </a>
                                    <a href="#" class="twitter">
                                        <span class="socialicons ico2"></span>
                                        <span class="socialicons_h ico2h"></span>
                                    </a>
                                </div>

                            </div>
                            <p class="desc">Melinda is the CEO and Creative Director of Subatomic. Her power-element titanium ensures she’s tough enough to handle even the hardest challenges (which includes taking care of her pet husky).</p>   
                        </div>
                    </div>

                    <div class="span6 bio_box bio_boxr">
                        <div class="row">
                            <div class="span3">
                                <img src="clean_bootstrap/img/joanna-comp.png" alt="">
                            </div>
                            <div class="span2">
                                <img src="clean_bootstrap/img/JoannaElement.png">
                            </div>    
                        </div>

                        <div class="info">

                            <div class="row">
                                <div class="span2">
                                    <p class="name">Joanna Ioannidou</p>
                                    <p class="area">Office Manager</p>
                                </div>
                                <div class="span2">
                                    <a href="#" class="facebook">
                                        <span class="socialicons ico1"></span>
                                        <span class="socialicons_h ico1h"></span>
                                    </a>
                                    <a href="#" class="twitter">
                                        <span class="socialicons ico2"></span>
                                        <span class="socialicons_h ico2h"></span>
                                    </a>
                                </div>

                            </div>
                            <p class="desc">Joanna is the Office Manager at Subatomic. Her power-element rhodium defines her ‘rosy’ outlook on work and life and gives her all the capabilities needed. And coincidentally it’s also the colour of her favourite food: shrimps!</p>   
                        </div>
                    </div>
                </div>

                <div class="row row1">
                    <div class="span6 bio_box">
                        <div class="row">
                            <div class="span3">
                                <img src="clean_bootstrap/img/snezana-comp.png" alt="">
                            </div>
                            <div class="span2">
                                <img src="clean_bootstrap/img/SnezanaElement.png">
                            </div>    
                        </div>

                        <div class="info">

                            <div class="row">
                                <div class="span2">
                                    <p class="name">Snezana Nedeski</p>
                                    <p class="area">Operations Manager</p>
                                </div>
                                <div class="span2">
                                    <a href="#" class="facebook">
                                        <span class="socialicons ico1"></span>
                                        <span class="socialicons_h ico1h"></span>
                                    </a>
                                    <a href="#" class="twitter">
                                        <span class="socialicons ico2"></span>
                                        <span class="socialicons_h ico2h"></span>
                                    </a>
                                </div>

                            </div>
                            <p class="desc">Snezana handles operations expertly with a stable hand and demeanor, exemplified by her power element nitrogen. That said, she can unleash a burst of energy if need be and support the team when projects get into high gear.</p>   
                        </div>
                    </div>

                    <div class="span6 bio_box bio_boxr">
                        <div class="row">
                            <div class="span3">
                                <img src="clean_bootstrap/img/cammy-comp.png" alt="">
                            </div>
                            <div class="span2">
                                <img src="clean_bootstrap/img/CammyElement.png">
                            </div>    
                        </div>

                        <div class="info">

                            <div class="row">
                                <div class="span2">
                                    <p class="name">Cammy Tran</p>
                                    <p class="area">Account Manager</p>
                                </div>
                                <div class="span2">
                                    <a href="#" class="facebook">
                                        <span class="socialicons ico1"></span>
                                        <span class="socialicons_h ico1h"></span>
                                    </a>
                                    <a href="#" class="twitter">
                                        <span class="socialicons ico2"></span>
                                        <span class="socialicons_h ico2h"></span>
                                    </a>
                                </div>

                            </div>
                            <p class="desc">Our account manager Cammy is a veritable bubble of oxygen. Always ready to burst into action, kindling new contacts everywhere and keeping our clients warm and happy. After all, the Netherlands is cold enough.</p>   
                        </div>
                    </div>
                </div>

                <div class="row row1">
                    <div class="span6 bio_box">
                        <div class="row">
                            <div class="span3">
                                <img src="clean_bootstrap/img/vincent-comp.png" alt="">
                            </div>
                            <div class="span2">
                                <img src="clean_bootstrap/img/VincentElement.png">
                            </div>    
                        </div>

                        <div class="info">

                            <div class="row">
                                <div class="span2">
                                    <p class="name">Vincent Leeuw</p>
                                    <p class="area">Senior Game Designer</p>
                                </div>
                                <div class="span2">
                                    <a href="#" class="facebook">
                                        <span class="socialicons ico1"></span>
                                        <span class="socialicons_h ico1h"></span>
                                    </a>
                                    <a href="#" class="twitter">
                                        <span class="socialicons ico2"></span>
                                        <span class="socialicons_h ico2h"></span>
                                    </a>
                                </div>

                            </div>
                            <p class="desc">Vincent is the Senior Game Designer of Subatomic. His power-element magnesium (well OK, and a bit of carbon and oxygen) ensures a tight grip on game mechanics and how to apply them to any problem. Like rock climbing.</p>   
                        </div>
                    </div>

                    <div class="span6 bio_box bio_boxr">
                        <div class="row">
                            <div class="span3">
                                <img src="clean_bootstrap/img/jose-comp.png" alt="">
                            </div>
                            <div class="span2">
                                <img src="clean_bootstrap/img/JoseElement.png">
                            </div>    
                        </div>

                        <div class="info">

                            <div class="row">
                                <div class="span2">
                                    <p class="name">José Gómez de Lara</p>
                                    <p class="area">Interaction Designer</p>
                                </div>
                                <div class="span2">
                                    <a href="#" class="facebook">
                                        <span class="socialicons ico1"></span>
                                        <span class="socialicons_h ico1h"></span>
                                    </a>
                                    <a href="#" class="twitter">
                                        <span class="socialicons ico2"></span>
                                        <span class="socialicons_h ico2h"></span>
                                    </a>
                                </div>

                            </div>
                            <p class="desc">Plutonium is radioactive, but Jose does not care. As our UI/UX designer he wants interfaces to radiate and subtly influence users without them knowing. In a positive sense, of course.</p>   
                        </div>
                    </div>
                </div>

                <div class="row row1">
                    <div class="span6 bio_box">
                        <div class="row">
                            <div class="span3">
                                <img src="clean_bootstrap/img/sarah-comp.png" alt="">
                            </div>
                            <div class="span2">
                                <img src="clean_bootstrap/img/SarahElement.png">
                            </div>    
                        </div>

                        <div class="info">

                            <div class="row">
                                <div class="span2">
                                    <p class="name">Sarah Murphy</p>
                                    <p class="area">Graphic Designer</p>
                                </div>
                                <div class="span2">
                                    <a href="#" class="facebook">
                                        <span class="socialicons ico1"></span>
                                        <span class="socialicons_h ico1h"></span>
                                    </a>
                                    <a href="#" class="twitter">
                                        <span class="socialicons ico2"></span>
                                        <span class="socialicons_h ico2h"></span>
                                    </a>
                                </div>

                            </div>
                            <p class="desc">As an artist, Sarah knows all about pigments and styles and applies this with gusto to her work. Whether she’s working on photographic, paint or graphic design her work has a special attraction to it.</p>   
                        </div>
                    </div>

                    <div class="span6 bio_box bio_boxr">
                        <div class="row">
                            <div class="span3">
                                <img src="clean_bootstrap/img/gwyn-comp.png" alt="">
                            </div>
                            <div class="span2">
                                <img src="clean_bootstrap/img/GwynElement.png">
                            </div>    
                        </div>

                        <div class="info">

                            <div class="row">
                                <div class="span2">
                                    <p class="name">Gwyn</p>
                                    <p class="area">Head of HR</p>
                                </div>
                                <div class="span2">
                                    <a href="#" class="facebook">
                                        <span class="socialicons ico1"></span>
                                        <span class="socialicons_h ico1h"></span>
                                    </a>
                                    <a href="#" class="twitter">
                                        <span class="socialicons ico2"></span>
                                        <span class="socialicons_h ico2h"></span>
                                    </a>
                                </div>

                            </div>
                            <p class="desc">Gwyn is the head of human resources at Subatomic. Her power-element is Fluorine, because, like Fluorine steals electrons she tends to steal attention from everyone. Her ability to be cute keeps stress levels in the office low.</p>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="process">
        <div class="container">
            <div class="section_header">
                <h3>Our Process</h3>
            </div>
            <div class="row services_circles">
                <div class="span4 description">
                    <div class="text active">
                        <h4>Plan what you need.</h4>
                        <p>
                            There are many variations of passages of  this suffered alteration in some form, by injected look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to making this the first true generator  Internet.</p>
                    </div>
                    <div class="text">
                        <h4>Develop your product or service.</h4>
                        <p>
                            There are many variations of passages of  this suffered alteration in some form, by injected look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to 
                            making this the first true generator  Internet.</p>
                    </div>
                    <div class="text">
                        <h4>Design this theme to your needs.</h4>
                        <p>
                            There are many variations of passages of  this suffered alteration in some form, by injected look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to making this the first true generator  Internet.</p>
                    </div>
                </div>

                <div class="span7 areas">
                    <div class="circle active">
                        <img src="clean_bootstrap/img/plan.png" />
                        <span>Plan</span>
                    </div>
                    <div class="circle">
                        <img src="clean_bootstrap/img/develop.png" />
                        <span>Develop</span>
                    </div>
                    <div class="circle last_circle">
                        <img src="clean_bootstrap/img/design.png" />
                        <span>Design</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- starts footer -->
    <footer id="footer">
        <div class="container">
            <div class="row info">
                <div class="span6 residence">
                    <ul>
                        <li><img src="images/logo.png"></li>
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
            </div> 
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
                            <img src="images/logo_mini.png"><br>nucleus v0.4<br>©2013 Subatomic<br><br>Made with ♥ in Amsterdam<br> Crafted by <a href="http://twitter.com/bochelord" target="_blank">@bochelord</a>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </footer>



    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="clean_bootstrap/js/bootstrap.min.js"></script>
    <script src="clean_bootstrap/js/theme.js"></script>

    <script type="text/javascript" src="clean_bootstrap/js/flexslider.js"></script>
</body>


</html>