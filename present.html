<?php
session_start();
$server="localhost";
$username="root";
$password="root";
$database="homeseeker";


$conn=mysqli_connect($server,$username,$password,$database);

if($conn->connect_error)
{
die("CONNECTION FAILED". $conn->connect_error);
}
    
if(isset($_POST['search']))
{
	$_SESSION['search']='true';
	$city11=$_POST['city11'];
	//header('Location:present.php');
	$sql = "SELECT * FROM detail where city='$city11'";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) {
   
  /*  while($row = mysqli_fetch_assoc($result)) {
        echo "Country: " . $row["country"].   "<br> - Title: " . $row["title"]. " " . $row["firstName"]. "<br>";
		echo "<br><br><br>";
    }*/
} else {
    echo "0 results";
}
$conn->close();

}
//$sql = "SELECT * FROM detail";




?>

<html>
<head>
  <meta charset="UTF-8">
  <title> Home Registration</title>
  
  
  
      <link rel="stylesheet" href="css/stylefull.css">

  <link href='http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <link href='http://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src='http://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>
</head>
<body style="background-color:#3366FF;">
<form class='form-horizontal' method="post" role='form'>
<br><br><br><br><br>
          <div class='form-group' method="post">
            <label style="color:#FFFFFF"; class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Enter your CITY</label>
            <div class='col-md-2'>
               <input class='form-control' id='id_first_name' name="city11" placeholder='Where you want HOME' type='text'>
            </div>
			<div class='col-md-offset-1 col-md-3'>
              <button class='btn-lg btn-primary' name="search" type='submit'>SEARCH</button>
            </div>
          </div>
		  <br><br><br>
		  </form>
<?php if(isset($_SESSION['search'])):?>
<?php session_destroy();?>
<?php while($row = mysqli_fetch_assoc($result)) {?>
  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h5>SELECT THE BEST HOMR FOR YOUR FAMILY</h5>
      </div>
      <div class='panel-body'>
        <form class='form-horizontal' method="post" role='form'>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Country</label>
            <div class='col-md-2'>
              <label class='form-control'><?php echo $row["country"];?> </label>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'  for='id_title'>Name</label>
            <div class='col-md-6'>
              <div class='col-md-2'>
                
              </div>
			  <label class='form-control'><?php echo $row["title"]; echo "."?>   <?php echo $row["firstName"];?>   <?php echo $row["lastName"];?>  </label>
			    
                </div>
              </div>
            
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'> MAXIMUM AGE GUESTS</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                 <label class='form-control'><?php echo $row["guests18plus"]; echo " - for above 18 yrs"?> </label>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                <label class='form-control'><?php echo $row["guests2to17"]; echo " - for 2 to 17 yrs"?> </label>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                 <label class='form-control'><?php echo $row["guestsSmall2"]; echo " - for below 2 yrs"?> </label>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Contact</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <label class='form-control'><?php echo $row["email"];?> </label>
                </div>
              </div>
              <div class='form-group internal'>
                <div class='col-md-11'>
                  <label class='form-control'><?php echo $row["phone"];?> </label>
                </div>
              </div>
            </div>
          </div>
         
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>City</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <label class='form-control'><?php echo $row["city"];?> </label>
                </div>
              </div>
            </div>
          </div>
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_street'>Location</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <label class='form-control'><?php echo $row["location"];?> </label>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_service'>Required Service</label>
            <div class='col-md-3'>
               <label class='form-control'><?php echo $row["services"];?> </label>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'  for='id_comments'>Permanant Address</label>
            <div class='col-md-6'>
               <label class='form-control'><?php echo $row["address"];?> </label>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
  <?php }?>
  <?php else:?>
  <?php endif; ?>
  
<script src="js/indexfull.js"></script>

</body>
</html>