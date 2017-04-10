<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Membership</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Style/base.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/lib/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="script.js" type="text/javascript">
    </script>
</head>

<body>
    <?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
   <!-- navigation bar -->
    <div class="wrap"> <span class="decor"></span>
        <nav class="navbar navbar-inverse narvar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <img class="resize" src="Images/BCBoardingLogo.png" alt="Logo"> </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="slopes.html">slopes <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="slopes.html">Whistler</a></li>
                                <li><a href="#">Grouse</a></li>
                                <li><a href="#">Seymour</a></li>
                                <li><a href="#">Cypress</a></li>
                                <li><a href="#">Big White</a></li>
                                <li><a href="#">Sun Peaks</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="gear.html">gears <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="gear.html">gear 1</a></li>
                                <li><a href="#">gear 2</a></li>
                                <li><a href="#">gear 3</a></li>
                            </ul>
                        </li>
                        <li><a href="about_us.html">About us</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="forum.php"><span class="glyphicon glyphicon-user"></span> forum</a></li>
                        <li><a href="membership.php"><span class="glyphicon glyphicon-log-in"></span> register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- div header-->
    <div class="bannerMember"> 
    <div class="contentMid">
        <div id="passreqs">
            <ul id="passreqlist">
                <li>Must contain atleast 1 capital letter </li>
                <li>Must contain atleast 1 lowercase letter</li>
                <li>Must contain atleast 1 number </li>
                <li> Must contain atleast 1 special charector</li>
                <li> Must contain atleast 8 characers</li>
            </ul>
        </div>
        <div class="form">
            <div class="registerForm">
            <form class="registrationform" name="form" onsubmit="return signupValidate()" action="register.php" method="post">
                    <p class="signintitle">Sign-up</p>
                <input  id="fname" name="firstName" type="text" placeholder="First Name"/>
                <div class="errorMessage" id="errFname"></div>
                <input  id="lname" name="lastName" type="text" placeholder="Last Name"/>
                <div class="errorMessage" id="errLname"></div>
                <input id="email" name="email" type="text"   placeholder="Email address" /> 
                <div  class="errorMessage" id="errEmail"></div>
                    <input  id="username" name="username" type="text" placeholder="Username"/>
                <div class="errorMessage" id="errUsername"></div>
                    <input id="password" name="password" type="password"  placeholder="Password" />
               <div  class="errorMessage" id="errPass"></div>
                <input id="cpassword" name="cpassword" type="password"  placeholder="Re-type Password" />
               <div  class="errorMessage" id="errCPass"></div>
                    
                
                    <input class="submit" type="submit" value="Register"> </form>
            </div>
            <div class ="signinForm">
            <form class="loginpage" name="loginpage" onsubmit="return loginValidate()" action="login.php" method="post">
                <p class="signintitle"> Log-In</p>
                <input name="login" type="text" id="logUsername" placeholder="Username" /> 
                <div  class="errorMessage" id="errUsernameLog"></div>
                <input name="password" type="password" id="logPass" placeholder="Password" /> 
               <div  class="errorMessage" id="errPassLog"></div>
                <input class="submit" type="submit" value="Login"> </form>
           </div>
        </div>
    </div>
        </div>
    <!-- footer -->
    <div class="footer">
        <div class="footerContent">
            <div class="row">
                <div class="col-sm-4">
                    <!--img-->
                    <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a </p>
                </div>
                <div class="col-sm-4">
                    <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a </p>
                </div>
                <div class="col-sm-4">
                    <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>