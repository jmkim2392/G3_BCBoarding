<!DOCTYPE html>
<html lang="en">

<head>
    <title>BCBoarding</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Style/base.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/lib/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="script.js" type="text/javascript">
    </script>
   <script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFo39zzsmv0WNk7a5QCIgCNOSHUaFZfck&callback=initMap">
</script>
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC%7CShadows+Into+Light" rel="stylesheet"> </head>

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
    <div class="bannerSlopes"></div>
    <!-- content middle -->
    <div class="contentMid">
        <div class="row">
            
                <div class="BigWhiteContent slopesContent">
                    <button class="closeBtn"></button>
                    <div class="row">
                        <div class="col-sm-4" id="bigWhiteMap"></div>
                        <div class="col-sm-8">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33</div>
                    </div>
                </div>
                
                <div class="CypressContent slopesContent">
                    <button class="closeBtn"></button>
                    <div class="row">
                        <div class="col-sm-4" id="cypressMap"></div>
                        <div class="col-sm-8">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33</div>
                    </div>
                </div>
                
            <div class="col-md-6  SlopesCard BigWhite"> <img class="Location img-fluid SlopesCardImg" src="Images/Slopes/BigWhite.jpg" alt="LocationMap">
                <p class="SlopesText">Big White</p>
                <p class="SlopesPreview">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33</p>
            </div>
            <div class="col-md-6  SlopesCard Cypress"> <img class="Location img-fluid SlopesCardImg" src="Images/Slopes/Cypress1.jpg" alt="LocationMap">
                <p class="SlopesText">Cypress</p>
                <p class="SlopesPreview">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33</p>
            </div>
                
        </div>
        <div class="row">
             <div class="grouseContent slopesContent">
                    <button class="closeBtn"></button>
                    <div class="row">
                        <div class="col-sm-4" id="grouseMap"></div>
                        <div class="col-sm-8">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33</div>
                    </div>
                </div>
                
                <div class="seymourContent slopesContent">
                    <button class="closeBtn"></button>
                    <div class="row">
                        <div class="col-sm-4" id="seymourMap"></div>
                        <div class="col-sm-8">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33</div>
                    </div>
                </div>
            <div class="col-md-6 SlopesCard Grouse"> <img class="Location img-fluid SlopesCardImg" src="Images/Slopes/Grouse.png" alt="LocationMap">
                <p class="SlopesText">Grouse</p>
                <p class="SlopesPreview">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33</p>
            </div>
            <div class="col-md-6 SlopesCard Seymour"> <img class="Location img-fluid SlopesCardImg" src="Images/Slopes/Seymour.jpg" alt="LocationMap">
                <p class="SlopesText">Seymour</p>
                <p class="SlopesPreview">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33</p>
            </div>
        </div>
        <div class="row">
            <div class="sunPeaksContent slopesContent">
                    <button class="closeBtn"></button>
                    <div class="row">
                        <div class="col-sm-4" id="sunPeaksMap"></div>
                        <div class="col-sm-8">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33</div>
                    </div>
                </div>
                
                <div class="whistlerContent slopesContent">
                    <button class="closeBtn"></button>
                    <div class="row">
                        <div class="col-sm-4" id="whistlerMap"></div>
                        <div class="col-sm-8">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33</div>
                    </div>
                </div>
            <div class="col-md-6 SlopesCard SunPeaks"> <img class="Location img-fluid SlopesCardImg" src="Images/Slopes/SunPeaks1.jpg" alt="LocationMap">
                <p class="SlopesText">Sun Peaks</p>
                <p class="SlopesPreview">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33</p>
            </div>
            <div class="col-md-6 SlopesCard Whistler"> <img class="Location img-fluid SlopesCardImg" src="Images/Slopes/Whistler1.jpg" alt="LocationMap">
                <p class="SlopesText">Whistler</p>
                <p class="SlopesPreview">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33</p>
            </div>
        </div>
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
