<?php
	require_once('config.php');
	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
	$tbl_name="topic"; // Table name


	$sql="SELECT * FROM $tbl_name JOIN members ON members.member_id = topic.member_id";
	// ORDER BY id DESC is order result by descending
	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
?>

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
    <script src="script.js" type="text/javascript"></script>
       <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
</head>
<body>
    <!-- div header-->
    <div class="bannerForum"> </div>
    <!-- navigation bar -->
    <div class="wrap"> <span class="decor"></span>
        <nav class="navbar navbar-inverse narvar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <img class="resize" src="Images/BCBoardingLogo.png" alt="Logo"> </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="slopes.html">Slopes <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="slopes.html">Whistler</a></li>
                                <li><a href="#">Grouse</a></li>
                                <li><a href="#">Seymour</a></li>
                                <li><a href="#">Cypress</a></li>
                                <li><a href="#">Big White</a></li>
                                <li><a href="#">Sun Peaks</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="gear.html">Gear <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="gear.html">Necessities</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Shops</a></li>
                            </ul>
                        </li>
                        <li><a href="about_us.html">About us</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="forum.php"><span class="glyphicon glyphicon-user"></span> Forum</a></li>
                        <li><a href="membership.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--content-->
    <div class="contentMid">
        <button onclick="topFunction()" id="backToTop" title="Go to top">Back to Top</button>
       <div class="forumboxtitle">Community Forum Posts</div>
        <button class="newPost">Create a new post</button>
        <div class="forumContent">
            <button class="closeBtn"></button>
            <form novalidate onsubmit="return forumValidate()" action="add_topic.php"  method="post">                             
                    <label for="subject">Subject: </label>
                    <input name="subject" type="text" class="form-control" id="subject">
                <div class="errorMessage" id="errSubject"></div>
                    <label for="comment">Comment: </label>
                    <textarea name="comment" type="text" class="form-control" rows="5" id="commentBox"> </textarea>
                     <div class="errorMessage" id="errComment"></div>
                <input type="submit" value="Submit"> <input type="reset" name="Submit2" value="Reset" /> </form>
        </div>
        <div class="forumComment">
               <table class="forumTable" width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
                <tr>
                    <th width="4%" align="center" bgcolor="#E6E6E6">#</th>
                    <th width="53%" align="center" bgcolor="#E6E6E6">Comment</th>
                    <th width="6%" align="center" bgcolor="#E6E6E6">Name</th>
                    <th width="6%" align="center" bgcolor="#E6E6E6">Date/Time</th>
                </tr>
                   
                <?php
while($rows=mysqli_fetch_array($result)){ // Start looping table row
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['topic']; ?></td>
    
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['firstname'] . " " . $rows['lastname']; ?></td>

<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>

</tr>

<?php
// Exit looping and close connection
}
((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
?>
                
                
            </table>
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
