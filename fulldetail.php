
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

session_start();
echo '<br><br>WELCOME';
//.$_SESSION['fname']';
echo '<br><a href="front9.php?action=logout">LOGOUT</a>';
}
if(isset($_POST['add']))

{
	
	 
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	$lname=$_POST['lname'];
	$phone=$_POST['phone'];
	$country=$_POST['country'];
	$title=$_POST['title'];
	$year18=$_POST['year18'];
	$year217=$_POST['year217'];
	$year2=$_POST['year2'];
	$city=$_POST['city'];
	$location=$_POST['location'];
	$services=$_POST['services'];
	$address=$_POST['address'];
	if($fname=='')
	{
		echo "<script>alert(' name is required')</script>";
	}
	else if($email=='')
	{
		echo "<script>alert('Enter ur email')</script>";
	}
	else if($phone=='')
	{
		echo "<script>alert('Phone No. is required')</script>";
	}
	else if($city=='')
	{
		echo "<script>alert('city is required')</script>";
	}
	else if($address=='')
	{
		echo "<script>alert('address is required')</script>";
	}
	else if($lname=='')
	{
		echo "<script>alert('lname is required')</script>";
	}
	else if($country=='')
	{
		echo "<script>alert('country is required')</script>";
	}
	else if($year18=='')
	{
		echo "<script>alert('year18 is required')</script>";
	}
	else if($year217=='')
	{
		echo "<script>alert('year217 is required')</script>";
	}
	else if($year2=='')
	{
		echo "<script>alert('year2 is required')</script>";
	}
	else if($location=='')
	{
		echo "<script>alert('location is required')</script>";
	}
	else if($services=='')
	{
		echo "<script>alert('services is required')</script>";
	}
	else{
	
		
		$query= "INSERT INTO detail (country,title,firstName,lastName,guests18plus,guests2to17,guestsSmall2,email,phone,city,location,services,address) VALUES('$country','$title','$fname','$lname','$year18','$year217','$year2','$email','$phone','$city','$location','$services','$address')";
		
		
		
		if(mysqli_query($conn,$query))
		{
			echo "<script>alert('Successfullllllllll')</script>";
		}
		 else
		 {
			 echo 'error:'.$query.'<br>'. mysqli_error($conn);
		 }
	}
}
if(isset($_POST['log']))
{
	
	header('Location:front9.php?action=logout');
}
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Campsite Registration</title>
  
  
  
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
<body>
  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h5>Submit your Ad Here</h5>
      </div>
      <div class='panel-body'>
        <form class='form-horizontal' method="post" role='form'>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Country</label>
            <div class='col-md-2'>
              <select class='form-control' name="country" id='id_accomodation'>
               <option> Afghanistan</option>
               <option>Albania</option>
               <option>Algeria</option>
               <option>Andorra</option>
               <option>Angola</option>
               <option>Antigua and Barbuda</option>
               <option>Argentina</option>
               <option>Armenia</option>
               <option>Aruba</option>
               <option>Australia</option>
               <option>Austria</option>
               <option>Azerbaijan</option>
			   <option> Bahrain</option>
               <option>Bangladesh</option>
               <option>Barbados</option>
               <option>Belarus</option>
               <option>Belgium</option>
               <option>Belize</option>
               <option>Benin</option>
               <option>Bhutan</option>
               <option>Bolivia</option>
               <option>Bosnia and Herzegovina</option>
               <option>Botswana</option>
               <option>Brazil</option>
			   <option> Cambodia</option>
               <option>Cameroon</option>
               <option>Canada</option>
               <option>Cabo Verde</option>
               <option>Central African Republic</option>
               <option>Chad</option>
               <option>Chile</option>
               <option>China</option>
			   <option>Denmark</option>
			   <option>Djibouti</option>
               <option>Egypt</option>
               <option>Fiji</option>
		       <option>Finland</option>
			   <option>Iceland</option>
			   <option>India</option>
			   <option>Ireland</option>
			   <option>Israel</option>
			   <option>vietnam</option>
			   <option>Yemen</option>
			   <option>Zimbabwe</option>
              </select>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'  for='id_title'>Name</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <select class='form-control' name="title" id='id_title'>
                    <option>Mr</option>
                    <option>Ms</option>
                    <option>Mrs</option>
                    <option>Miss</option>
                    <option>Dr</option>
                  </select>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_first_name' name="fname" placeholder='First Name' type='text'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_last_name' name="lname" placeholder='Last Name' type='text'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Guests</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control col-md-8' id='id_adults' name="year18" placeholder='18+ years' type='number'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_children' name="year217" placeholder='2-17 years' type='number'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_children_free' name="year2" placeholder='&lt; 2 years' type='number'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Contact</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_email' name="email" placeholder='E-mail' type='text'>
                </div>
              </div>
              <div class='form-group internal'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_phone' name="phone" placeholder='Phone: (xxx) - xxx xxxx' type='text'>
                </div>
              </div>
            </div>
          </div>
         
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>City</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <select class='form-control' name="city" id='id_equipment'>
                    <option>Ahemdabad</option>
                    <option>Chennai</option>
                    <option>Durgapur</option>
                    <option>Kolkata</option>
                    <option>Lucknow</option>
                    <option>Mumbai</option>
					 <option>Bhopal</option>
                    <option>Hyderabad</option>
                    <option>gwalior</option>
                    <option>Pune</option>
                    <option>Lucknow</option>
                    <option>Kanpur</option>
					 <option>Ahemdabad</option>
                    <option>varanasi</option>
                    <option>siliguri</option>
                    <option>shimla</option>
                    <option>hamirpur</option>
                    <option>Indore</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_street'>Location</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <select class='form-control' name="location" id='id_equipment'>
                    <option>54 Feet Road</option>
                    <option>City Center</option>
                    <option>Benachity</option>
                    <option>Bhringie Morh</option>
                    <option>DSP Region</option>
                    <option>Asansol</option>
					 <option>Tds</option>
                    <option>12th street</option>
                    <option>Benstate</option>
                    <option>vip care</option>
                    <option>Dipnet</option>
                    <option>Alexity</option>
					 <option>area colony</option>
                    <option>Cikore</option>
                    <option>sindhi colony</option>
                    <option>angoret</option>
                    <option>biliya</option>
                    <option>Kericom street</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_service'>Required Service</label>
            <div class='col-md-8'>
              <select class='multiselect' id='id_service' name="services" multiple='multiple'>
                <option value='Food and Lodging '>Food and Lodging</option>
                <option value='WiFi'>Wi Fi</option>
				 <option value='All'>ALL</option>
              </select>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'  for='id_comments'>Permanant Address</label>
            <div class='col-md-6'>
              <textarea class='form-control' id='id_comments' name="address" placeholder='Your Address........' rows='3'></textarea>
            </div>
          </div>
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <button class='btn-lg btn-primary' name="add" type='submit'>Add Your Home</button>
            </div>
            <div class='col-md-3'>
              <button class='btn-lg btn-danger' style='float:right' name="log" type='submit'>LOGOUT</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
<script src="js/indexfull.js"></script>

</body>
</html>
