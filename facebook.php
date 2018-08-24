<html>
<head>
	<link href="css/facebook.css" rel="stylesheet" type="text/css">
</head>
<body class="body">

<?php
	error_reporting(0);
    include 'dataco.php';
	 $message='';
	if(isset($_POST['login']))
	{
		$EmailError = $Newpassword = '';
		
		$Email=$_POST['Email'];
		$Newpassword=$_POST['password'];
		$sql="SELECT * FROM face WHERE Email='$Email' and Newpassword='$Newpassword'";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result))
			{
				
				while($row=mysqli_fetch_assoc($result))
				{
					$message='login success';
					$_SESSION["id"]=$row["id"];
				}
			}
			else
			{
				$message='login unsuccessful';
			}
			
		if (empty($Email))
				{
					$EmailError = "PLease Enter Email";
				}	
                    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) 
					{
                        $EmailError = "Invalid Email format"; 
					}  
						
		if(empty($Newpassword))
		{
			$Newpassword="PLease Enter password";
		}
		
		if($EmailError == '' && $Newpassword == '')
		{	
			
		}
		
	}
	
?>	

<div>
    <div class="div">
	<h1 class="h1">facebook</h1>
	<form action="" method="post"> 
	<table class="t">
	    <tr>
		<td class="color">Email or Phone</td>
		<td class="color">Password</td>
		</tr>
		<tr> 
		<td><input type="text" name="Email"><?php if(!empty($EmailError)){echo $EmailError;}?></td>
		<td><input type="password" name="password"><?php if(!empty($Newpassword)){ $Newpassword;}?></td>
		<td><input class="login" type="submit" name="login" value="Login"></td>
		</tr>
		<tr>
		<td><?php echo $message;?></td>
        <td class="color1">Forgotten account?</td>
		</tr>
	</table>
	</form>
    </div>
</div>


   <?php
        if(isset($_POST['websubmit']))
		{
			$fnameError = $snameError = $emailError = $NpasswordError = $DayError = $MonthError = $YearError = $genderError = '';
			
				$fname=$_POST['firstname'];
                $sname=$_POST['Surname'];
				$email=$_POST['email'];
				$Npassword=$_POST['Newpassword'];
				$Day=$_POST['Day'];
				$Month=$_POST['Month'];
				$Year=$_POST['Year'];
				$gender=$_POST['gender'];
				
				if(empty($fname))
				{
					$fnameError="*";
				}
				if(empty($sname))
				{
					$snameError="*";
				}
				if (empty($email))
				{
					$emailError = "PLease Enter email";
				}	
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
					{
                        $emailError = "Invalid email format"; 
					}  
						$sql = "SELECT * FROM ins WHERE email='$email'";
						$result= mysqli_query($conn,$sql);
						if (mysqli_num_rows($result))
						{
							$emailError = "email all ready";
						}
						
			    if(empty($Npassword))
                {
					$NpasswordError="*";
				}
                if(empty($Day))	
                {
					$DayError="*";
				}
                if(empty($Month))
                {
					$MonthError="*";
				}
				if(empty($Year))
				{
					$YearError="*";
				}
				if(empty($gender))
				{
				    $genderError="*";	
				}
					
			if($fnameError == '' && $snameError == '' && $emailError == '' && $NpasswordError == '' && $DayError == '' && $MonthError == '' && $YearError == '' && $genderError == '')
			{
				$query="INSERT INTO face(firstname,surname,email,Newpassword,Day,Month,Year,gender) VALUES('$fname','$sname','$email','$Npassword','$Day','$Month','$Year','$gender')";
				if(mysqli_query($conn,$query))
				{
					
				}
            
			}
		}

            $sql = "SELECT * FROM face";
            $result = mysqli_query($conn, $sql);

			if(mysqli_num_rows($result))
			{
				while($row = mysqli_fetch_assoc($result))
                {
					
				}					
			}
   ?>
   <form action="" method="post">
    <table class="table">
	<tr>
	<h1 class="hading">Create an account</h1>
	</tr>
	<tr>
	<h2 class="hading1">It's free and always will be.</h2>
	</tr>
	<tr>
	<td><input class="first" type="text" name="firstname" placeholder="First name"><?php if(!empty($fnameError)){echo $fnameError;}?>
	    <input class="sur" type="text" name="Surname" placeholder="Surname"><?php if(!empty($snameError)){echo $snameError;}?></td>
	</tr>
	<tr>
	<td><input class="mobile" type="text" name="email" placeholder="Mobile number or email address"><?php if(!empty($emailError)){echo $emailError;}?></td>
	</tr>
	<tr>
	<td><input class="new" type="password" name="Newpassword" placeholder="New password"><?php if(!empty($NpasswordError)){echo $NpasswordError;}?></td>
	</tr>
	<tr>
	<td class="birth">Birthday</td>
	</tr>
	
	<tr>
	<td><select name="Day" class="day">
	  <option value="">Day</option>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	  <option value="7">7</option>
	  <option value="8">8</option>
	  <option value="9">9</option>
	  <option value="10">10</option>
	  <option value="11">11</option>
	  <option value="12">12</option>
	  <option value="13">13</option>
	  <option value="14">14</option>
	  <option value="15">15</option>
	  <option value="16">16</option>
	  <option value="17">17</option>
	  <option value="18">18</option>
	  <option value="19">19</option>
	  <option value="20">20</option>
	  <option value="21">21</option>
	  <option value="22">22</option>
	  <option value="23">23</option>
	  <option value="24">24</option>
	  <option value="25">25</option>
	  <option value="26">26</option>
	  <option value="27">27</option>
	  <option value="28">28</option>
	  <option value="29">29</option>
	  <option value="30">30</option>
	  <option value="31">31</option>
	</select><?php if(!empty($DayError)){echo $DayError;}?>
	
	<select name="Month" class="month">
	  <option value="">Month</option>
	  <option value="Jan">Jan</option>
	  <option value="Fab">Fab</option>
	  <option value="Mar">Mar</option>
	  <option value="Apr">Apr</option>
	  <option value="May">May</option>
	  <option value="Jun">Jun</option>
	  <option value="Jul">Jul</option>
	  <option value="Aug">Aug</option>
	  <option value="Sept">Sept</option>
	  <option value="Oct">Oct</option>
	  <option value="Nov">Nov</option>
	  <option value="Des">Des</option>
	</select><?php if(!empty($MonthError)){echo $MonthError;}?>
	
	<select name="Year" class="year">
	  <option value="">Year</option>
	  <option value="2018">2018</option>
	  <option value="2017">2017</option>
	  <option value="2016">2016</option>
	  <option value="2015">2015</option>
	  <option value="2014">2014</option>
	  <option value="2013">2013</option>
	  <option value="2012">2012</option>
	  <option value="2011">2011</option>
	  <option value="2010">2010</option>
	  <option value="2009">2009</option>
	  <option value="2008">2008</option>
	  <option value="2007">2007</option>
	  <option value="2006">2006</option>
	  <option value="2005">2005</option>
	  <option value="2004">2004</option>
	  <option value="2003">2003</option>
	  <option value="2002">2002</option>
	  <option value="2001">2001</option>
	  <option value="2000">2000</option>
	  <option value="1999">1999</option>
	  <option value="1998">1998</option>
	  <option value="1997">1997</option>
	  <option value="1996">1996</option>
	  <option value="1995">1995</option>
	  <option value="1994">1994</option>
	  <option value="1993">1993</option>
	  <option value="1992">1992</option>
	  <option value="1991">1991</option>
	  <option value="1990">1990</option>
	  <option value="1989">1989</option>
	  <option value="1988">1988</option>
	</select><?php if(!empty($YearError)){echo $YearError;}?>
	</td>
	</tr> 
	<tr>
	<td class="male"><input type="radio" name="gender" value="Female">Female<img class="male"src="Users-User-Female-icon.png" >
	    <input type="radio" name="gender" value="Male" >Male<img class="male"src="woman.png" ><?php if(!empty($genderError)){echo $genderError;}?></td>
	</tr>
	<tr>
	<td class="p">By clicking Sign Up, you agree to our <a href="#">Terms, Data Policy</a> and<br><a href="#">Cookies Policy.</a> You may receive SMS notifications from us and<br>can opt out at any time.</td>
	</tr>
	<tr>
	<td><button class="button" type="submit" name="websubmit">Sign Up</button></td>
	</tr>
	<tr>
	<td class="pa"><a href="#">Create a Page</a> for a celebrity, band or business.</td>
	</tr>
	</table>
   </form>
	<div class="padding">
		<div class="margin">
		<h2 class="h3">Facebook helps you connect and share with the<br>people in your life.<h2> 
		</div>
		<div class="img">
		<img src="facebook.png" >
		</div>
		<div>
		<span class="span2"><a href="#">Why do I need to provide my<br>date of birth?</a></span>
		</div>
	</div>	
	<div class="back">
	    <div class="foo">
	       <nav>
		   <ul class="font">
		     English(UK)
			<a class="nav1" href="#">ਪੰਜਾਬੀ</a>
			<a class="nav1" href="#">हिन्दी </a>
			<a class="nav1" href="#">اردو</a>
			<a class="nav1" href="#">मराठी</a>
			<a class="nav1" href="#">ગુજરાતી</a>
			<a class="nav1" href="#">বাংলা</a>
			<a class="nav1" href="#">தமிழ்</a>
			<a class="nav1" href="#">తెలుగు</a>
			<a class="nav1" href="#">ಕನ್ನಡ</a>
			<a class="nav1" href="#">മലയാളം</a>                                                
		   <ul>
		   </nav>
		</div>
		<div>
			<nav>
			<ul class="ul">
			<a class="nav" href="#">sign up</a>
			<a class="nav" href="#">Log in</a>
			<a class="nav" href="#">Messenger</a>
			<a class="nav" href="#">Facebook Lite</a>
			<a class="nav" href="#">Mobile</a>
			<a class="nav" href="#">Find Friends</a>
			<a class="nav" href="#">People</a>
			<a class="nav" href="#">Pages</a>
			<a class="nav" href="#">Places</a>
			<a class="nav" href="#">Games</a>
			<a class="nav" href="#">Locations</a>
			<a class="nav" href="#">Celebrities</a>
			<a class="nav" href="#">Marketplace</a>
			<a class="nav" href="#">Groups</a>
			<a class="nav" href="#">Recipes</a><br>
			<a class="nav" href="#">Sports</a>
			<a class="nav" href="#">Look</a>
			<a class="nav" href="#">Moments</a>
			<a class="nav" href="#">Instagram</a>
			<a class="nav" href="#">Local</a>
			<a class="nav" href="#">About</a>
			<a class="nav" href="#">Create ad</a>
			<a class="nav" href="#">Developers</a>
			<a class="nav" href="#">Careers</a>
			<a class="nav" href="#">Privacy</a>
			<a class="nav" href="#">Cookies</a>
			<a class="nav" href="#">AdChoices</a>
			<a class="nav" href="#">Terms</a>
			<a class="nav" href="#">Help</a>
			</ul>
			</nav>
		</div>
		<div class="span">
		<span class="span1">Facebook © 2018</span>
		</div>
	</div>
      
</body>
</html>