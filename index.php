<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>BCBoarding</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Style/base.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="script.js" type="text/javascript">
    </script>
</head>

<body>
   <!-- navigation bar -->
    <div class="wrap"> <span class="decor"></span>
        <nav class="navbar navbar-inverse narvar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href='slopes.php'>Slopes</a></li>
                        <li><a href="gear.php"> Gear </a></li>
                        <li><a href="about_us.php">About us</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
			if (isLoggedIn()){
                echo '<li style="color:white;" >Welcome '.$_SESSION['SESS_FIRST_NAME']. "<br/>";
				echo '<a href="logout.php" style="margin-top:-10px;">Logout</a><br/></li>';                
			} ?>
                        <li><a href="forum.php"><span class="glyphicon glyphicon-user"></span> forum</a></li>
                        <li><a href="membership.php"><span class="glyphicon glyphicon-log-in"></span> register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- div header-->
    <header id="home-banner">
        <div id="home-center">
            <h1 id="banner-text">BC Boarding</h1> <a id="home-button" href="#home-body">To Page</a> </div>
    </header>
    <!-- content middle -->
    <div id="home-body">
        <div id="gear" class="header-pic"><a href="gear.html" class="headers">Gear</a></div>
        <div id="slopes" class="header-pic"><a href="slopes.html" class="headers">Slopes</a></div>
        <div class="panel">
            <div class="contentMid">
                <div class="row">
                    <div class="col-md-4"> <img class="Location img-fluid" src="Images/toWhistler.JPG" alt="LocationMap"> </div>
                    <div class="col-md-8">
                        <h3>Location</h3>
                        <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <h3>Slope Info</h3>
                        <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 </p>
                    </div>
                    <div class="col-md-4"> <img class="Slopes img-fluid" src="Images/whistlermap.jpg" alt="Whistler Slopes"> </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Weather</h3>
                        <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Comments</h3>
                        <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="about" class="header-pic"><a href="about_us.html" class="headers">About Us</a></div>
    </div>
    <!-- footer -->
    <div class="footer">
        <div class="footerContent">
            <div class="row">
                <div class="col-sm-4">
                    <p>This is a comp 1536 project
                        <br> Copyright &copy; 2017 group 3
                        <br> All rights reserved</p>
                </div>
                <div class="col-sm-4">
                    <p>Contact Us</p>
                    <a href="gear.html"> <img class="icon" src="Images/icon/gmail.png" alt="Logo"></a>
                    <a href="gear.html"> <img class="icon" src="Images/icon/Outlook.png" alt="Logo"></a>
                </div>
                <div class="col-sm-4">
                    <p>Follow Us On </p>
                    <a href="gear.html"><img class="icon" src="Images/icon/Facebook.png" alt="Logo"></a>
                    <a href="gear.html"><img class="icon" src="Images/icon/Twitter.png" alt="Logo"></a>
                    <a href="gear.html"><img class="icon" src="Images/icon/Instagram.png" alt="Logo"></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>