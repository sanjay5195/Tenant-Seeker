<?php
$server="localhost";
$username="root";
$password="root";
$database="homeseeker";


$conn=mysqli_connect($server,$username,$password,$database);

if($conn->connect_error)
{
die("CONNECTION FAILED". $conn->connect_error);
}
else{

}
if(isset($_GET['logout']))
{
	session_unregister('email');
}
?>


<html>
<head>
<title>Tenant Seeker</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
 <div class="header">
    <div class="header1"><img src="tenant.jpg" width="229" height="36" /></div>
    <div class="header2">
      <div id="container">
        <div id="mainmenu">
          <ul>
            <li><a class="current a" href="present.php">&nbsp;SEARCH&nbsp;</a></li>
            <li><a href="about2.php" class="a">About Us</a></li>
            <li><a href="login9.php">Login</a></li>
            <li><a href="signup9.php">SignUp</a></li>
            <li><a href="about2.php">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="headerimage">
    <div class="headeriamge1">
      <div class="house"> <img src="images/homelogin.jpg" /></div>
    </div>
    <div class="headerimage2">
      <div class="buying"><a href="login9.php"> <img src="update.jpg" border="0" /></a> </div>
      <div class="selling"><a href="signup9.php"> <img src="adforrent.jpg" border="0" /></a> </div>
    </div>
  </div>
  <div class="content">
  <div class="innercontent">
      <div class="leftpannel">
        <div class="find">
          <div class="leftpan1"></div>
          <div class="leftpan2">
            <div class="leftmenu">
              <ul>
                <li><a href="area.php">Home for Rent</a></li>
                <li><a href="login9.php">Fore closures</a></li>
                <li><a href="area.php">City and Places</a></li>
                <li><a href="signup9.php">Agents and Brokers</a></li>
                <li><a href="area.php">Free home Ad</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="search">
          <div class="search1"></div>
          <div class="go">
            <div>
              <input type="text" />
            </div>
            <div class="go1"><a href="#"><img src="images/go.gif" border="0" /></a></div>
          </div>
        </div>
        <div>
          <div style="width:190px; height:31px; background:url(images/find.gif) repeat-x;"></div>
          <div style="background-color:#fffbf0; padding-top:15px; height:auto"></div>
        </div>
      </div>
      <div class="rightpannel">
        <div class="featured1">
          <div class="homecontainer">
            <div class="homecontainer1">
              <div class="home"><img src="images/home.gif" alt="home" width="93" height="18" /></div>
              <div class="dot">&nbsp;</div>
            </div>
            <div class="housing">
              <div class="housing1"><img src="images/homespgif.gif" alt="house" width="196" height="140" /></div>
			   </div>
			   <div class="housing">
			   <div class="housing1"><img src="images/source.gif" alt="house" width="196" height="140" /></div>
              
            </div>
			
          </div>
          <div class="forcontainer">
            <div class="homecontainer">
              <div class="homecontainer1">
                <div class="home"><img src="images/foreclosures.gif" alt="fore closures" width="93" height="18" /></div>
                <div class="dot">&nbsp;</div>
              </div>
              <div class="housing">
               
              <div class="housing1"><img src="images/homespgif.gif" alt="house" width="196" height="140" /></div>
			   
			   <div class="housing1"><img src="images/source.gif" alt="house" width="196" height="140" /></div>
                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
<div align=center>
<div class="footer" >
      <div class="text" >2017 All Rights Reserved</div>

    </div>
  </div>
</div>
<div align=center>@@@ Sanjay choudhary<a href='#'> sanjay Choudhary @@@</a></div></body>
  


</html>