<?php
session_start();



/*if(isset($_SESSION['jid'])){
	
	echo'<script>window.location.href="t_home.php";
								</script>';
	
	}
	else if(isset($_SESSION['id'])){
	
	echo'<script>window.location.href="student_home.php";
								</script>';
	
	}
	


*/
						include("conn.php");
						$con=new con();
						if(isset($_POST['lgt'])){
							
							$user=$_POST['username'];
							$pass=$_POST['password'];
							
							$q='select * from t_data where username="'.$user.'" and password="'.$pass.'"';
							
							$result=mysqli_query($con->con,$q);
							if(mysqli_num_rows($result)>0){
								$row=mysqli_fetch_array($result);
								$_SESSION['jid']=$row[0];
								
								
								
								echo'<script>window.location.href="t_home.php";
								</script>';
								}else{
									
									echo'<script>alert("Username or Password is wrong!")</script>';
			echo'<script>window.location.href="student.php";</script>';
			
									}
							
							
							
							
							
						}
						
						
						
						
						
						
						
						
						
						
						
						
						
						if(isset($_POST['lg'])){
							
							$user=$_POST['username'];
							$pass=$_POST['password'];
							
							$q='select * from st_data where username="'.$user.'" and password="'.$pass.'"';
							
							$result=mysqli_query($con->con,$q);
							if(mysqli_num_rows($result)>0){
								echo'<script>window.location.href="student_home.php";</script>';
								$row=mysqli_fetch_array($result);
								$_SESSION['id']=$row[0];
								
								}else{
									
									echo'<script>alert("Username or Password is wrong!")</script>';
			echo'<script>window.location.href="student.php";</script>';
			
									}
							
							
							
							
							
						}
						if(isset($_POST['regst'])){
							
							$user=$_POST['username'];
							$pass=$_POST['password'];
							$em=$_POST['email'];
							$city=$_POST['city'];
							$t=$_FILES['picture']['type'];
						if($t=="image/jpg" || $t=="image/jpeg" || $t == "image/png" || $t == "image/bmp"){
				
				
				
				$target = "assets/profilestudent/".basename(rand(10,1000).$_FILES['picture']['name']);
					
					
					
$q="select username from st_data where username='".$user."'";
					 $result=mysqli_query($con->con,$q);
		 if(mysqli_num_rows($result)>0){
				echo'<script>alert("Username Should Be Unique!")</script>';
			
			echo'<script>window.location.href="student.php";</script>';	  
			  
			
		 }else{
			if(move_uploaded_file($_FILES['picture']['tmp_name'],$target)){
					
				
					
					$query = "insert into st_data(username,email,password,city,pic,j_date) values('".$user."','".$em."','".$pass."',".$city.",'".$target."','".date("d M Y")."')";
						mysqli_query($con->con,$query) or die(mysqli_error($con->con));
						
			  
			  echo'<script>alert("Sign In!")</script>';
			  	}else{echo'<script>alert("Picture Not Supported!")</script>';}
				
				
				echo'<script>window.location.href="student.php";</script>';

					
					}


			  }
			  
			  
			  
			  
					
					
				


 



							
							
							
							
							}
						
if(isset($_POST['submit'])){
	$target = "assets/cvs/".basename(rand(10,1000).$_FILES['pic']['name']);
if(move_uploaded_file($_FILES['pic']['tmp_name'],$target)){
$q='insert into cv values(null,"'.$target.'","'.$_POST['email'].'",0)';
mysqli_query($con->con,$q);
echo '<script>alert("Request Generated");</script>';
}}
						
						
						
						
						
						 ?>
                        
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home Tution Finder</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="design/headcss.css" />
<link rel="stylesheet" type="text/css" href="animate.css" />
<link rel="stylesheet" type="text/css" href="design/font.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image:url(assets/headereimg.jpg);
  height: 100%;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

</style>
<script>

$("#files").change(function() {
  filename = this.files[0].name
  console.log(filename);
});

function jk(){
	
	var to=document.getElementById("files").value;

	if(to==""){
		document.getElementById("result").style.display="block";
		}else{
			
			form.submit();
		}
	
	
	
	
	
	
	
	}
	function ob(){
		 var pass=document.getElementById("password").value;
			 var cpass=document.getElementById("cpass").value;
			
		if(pass==cpass){
		document.getElementById("resultpass").style.display="none";
		document.getElementById("resul").disabled=false;
		}
		else{
			document.getElementById("resultpass").style.display="block";
				document.getElementById("resul").disabled=true;
		}
		
		
		
		}






</script>
<style type="text/css">
    body {
		font-family: 'Varela Round', sans-serif;
	}
	.modal-login {		
		color: #636363;
		width: 350px;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;   
        position: relative;
        justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
		margin: 30px 0 -15px;
	}
	.modal-login .form-control:focus {
		border-color: #70c5c0;
	}
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}	
	.modal-login .modal-footer {
		background: #ecf0f1;
		border-color: #dee4e7;
		text-align: center;
        justify-content: center;
		margin: 0 -20px -20px;
		border-radius: 5px;
		font-size: 13px;
	}
	.modal-login .modal-footer a {
		color: #999;
	}		
	.modal-login .avatar {
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -70px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: #60c7c1;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.modal-login .avatar img {
		width: 100%;
	}
	.modal-login.modal-dialog {
		margin-top: 80px;
	}
    .modal-login .btn {
        color: #fff;
        border-radius: 4px;
		background: #60c7c1;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
        border: none;
    }
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #45aba6;
		outline: none;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
</style>
</head>
<body>

<!-- Modal HTML -->
<div id="myModal" class="modal fade  animated flip">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="assets/download.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Member Login</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<input type="text" class="form-control"   name="username" placeholder="Username" required>		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required>	
					</div>        
					<div class="form-group">
						<button type="submit" name="lg" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="#">Forgot Password?</a>
                   <a href="#" id="closemodal" data-toggle="modal">Sign up </a>
     <!-- Button HTML (to register as a tutor Modal) -->
			</div>
		</div>
	</div>
</div>     

<script>
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }	
  </script>
<!-- Sign up Modal HTML -->
<div id="myModa2" class="modal fade  animated flip">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="assets/download.png"  alt="Avatar">
				</div>				
				<h4 class="modal-title">Member Registeration</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
						<label for="files"   required  class="btn btn-primary form-control btn-block btn-outlined">Select Your Image</label>
<input type="file"  id="files" class="filed form-control-file"  onchange="readURL(this);" required name="picture" accept="image/*" style="display: none">
 <img id="blah" height="100px" width="200px" class="img img-thumbnail " src="" alt="your image" />	
<div style="display:none" id="result">					
                  <p style="color:#F00">Upload Your Picture</p>
  </div>                  
                    
                    </div>  
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username Should Be Unique" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" id="password" onKeyUp="ob()" placeholder="Password" required>	
					</div>     
                    <div class="form-group">
						<input type="password" class="form-control" name="c_password" onKeyUp="ob()" id="cpass" placeholder="Retype Password" required>	
                        <div style="display:none"  id="resultpass">					
                  <p style="color:#F00">Enter a Confirm Password</p>
  </div>  
					</div>    
                    <div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Enter Yout Email Address" required>	
					</div>
                     <div class="form-group">
						<select class="form-control" name="city" required>
                        <option disabled selected>Select Your City</option>
                        <?php
						$con=new con();
				$query="select * from city ORDER BY name ASC";
			
				$result=mysqli_query($con->con,$query);		
			while($row=mysqli_fetch_array($result)){
							?>
							<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
							
							<?php
							
							
							}
						
						 ?>
                                                </select>	
					</div>   
					<div class="form-group">
						<button type="submit" onClick="jk()" id="resul" name="regst" disabled class="btn btn-primary btn-lg btn-block login-btn">Register</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="#">Welcome</a>
			</div>
		</div>
	</div>
</div>     


<!-- Sign up Modal HTML -->
<div id="myModa4" class="modal fade  animated flip">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="assets/download.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Tutor Registration</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="" method="post" enctype="multipart/form-data">
        	   <div class="form-group">
               <label for="fileupload">Upload your Resume here</label>
              <input type="file" class="form-control" name="pic" placeholder="" required>	
					</div>  
					
                    <div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Enter Your Email Address" required>	
					<em> NOTE : Will Confirm your regsitration with in 2 hour after investigating your cv</em></div>   
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-btn">Submit Request</button>
					</div>
				</form>
			</div>
						<div class="modal-footer">
			<p>WELCOME</p>
     <!-- Button HTML (to register as a tutor Modal) -->
			</div>

		</div>
	</div>
</div>
<div id="myModa3" class="modal fade  animated flip">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="assets/download.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Member Login</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username" required>		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required>	
					</div>        
					<div class="form-group">
						<button type="submit" name="lgt" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				
                   <a href="#" id="closemodal1" data-toggle="modal">Register </a>
     <!-- Button HTML (to register as a tutor Modal) -->
			</div>
		</div>
	</div>
</div>     

     <div class="w3-bar w3-top w3-black w3-large w3-hide-small  animated lightSpeedIn" style="z-index:4">
  
  <span class="w3-bar-item w3-animate-zoom w3-left">H & A Eductional Panel</span>
 
 <button style="animation-duration:2s;" class="w3-bar-item w3-button w3-animate-right w3-right w3-amber  animated lightSpeedIn w3-hover-text-light-grey" onclick="st1()"><i class="fa fa-sign-in"></i>  Login</button>
 
</div>




<div id="sign" style="display:none" class="w3-modal  animated flip ">
    <div class="w3-modal-content w3-animate-right"  style="width:500px; border-radius:10px" >
    <span onclick="document.getElementById('sign').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
<br />
<div  style="alignment-adjust:central; display:block; text-align:center" >
    <br /><br />
   <div class="text-center">
	<!-- Button HTML (to Trigger Modal) -->
    <a href="#myModal" class="trigger-btn btn-danger btn" data-toggle="modal">Login As A Student</a>
   
    
    
    <!-- Button HTML (to Sign up Modal) -->
    
    <a href="#myModa3" class="trigger-btn btn-primary btn" data-toggle="modal">Login As A Teacher</a>
    
</div><br /><br /></div></div></div>

    <!--st sign in-->
<!--st sign in-->
    <!--st sign in-->
    <!--st sign in-->
    <script>
   
    
    function st1(){
			
	document.getElementById("sign").style.display='block';
	document.getElementById("op").style.display='none';
	document.getElementById("st()").style.display='block';
	
	
	
	}
    
    </script>
    


<!--tution sign in-->
<!--tution sign in-->
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     </div>
                
    </div>
    <!--tution sign in-->
    <!--tution sign in-->
    
    
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    </div>
  </div>









<nav class=" w3-hide-medium w3-hide-large  ">
<div class="w3-bar w3-top w3-black " style="z-index:4">
  <div class="w3-dropdown-click">
    <button onclick="myFunction()" class="w3-button w3-animate-right w3-left w3-black  animated lightSpeedIn"><span class="fa fa-bars"></span>&nbsp;&nbsp;Menu</button>
    </div>
</div>
<div id="Demo" style="padding-top:43px;" class="w3-dropdown-content w3-bar-block w3-card w3-bar w3-card w3-animate-top">
       <span style="text-align:center;" class="w3-bar-item w3-animate-top w3-left">H & A Eductional Panel</span>
 
 <button style="animation-duration:2s; text-align:center;" class="w3-bar-item w3-button w3-animate-right w3-right w3-amber  w3-hover-text-light-grey" onclick="st1()"><i class="fa fa-sign-in"></i>  Login</button>   </div>
  
</nav>
<script>
function myFunction() {
    var x = document.getElementById("Demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>








<!--section for large-->
<section class="w3-amber w3-container bgimg-1 w3-col w3-hide-medium w3-hide-small   animated bounceIn " style="height: 100%; background-size:cover; background-image:url(assets/headereimg.jpg); margin-top:0px; "  >
<div class="w3-half w3-margin-top  animated bounceInUp" style=" float:left;margin:0px 0px 0px 50px;">
<div class="w3-margin-top  " style="height:60px; margin:0px;  "><br>
<br>
<br>


<p class="w3-animate-top animated rubberBand" style="animation-duration:2s; font-size:120px; padding:0px; font-family:lobster; font-weight:lighter; height:50px; padding:0px;">&nbsp&nbspH & A </span></p><br />

</div><br />
<br />
<div style="height:60px;"><br>
<br>
<br>

<p class="w3-animate-bottom  animated  swing" style="animation-duration:2s; font-size:100px; margin:0px; padding:0px; font-weight:lighter; font-family:lobster; height:50px; padding:0px;"> Eductional Panel</p>
</div>
<div class="w3-animate-right  animated tada" style=" animation-duration:3s; color:#CCC; margin:160px 0px 0px; height:60px;">
<p style="font-size:30px; width:500px; font-size-adjust:none; padding:70px; font-weight:bold; margin:0px; padding:0px;  font-family:lobster;" >Sign In or Login To Proceed.</p>
</div>
</div>
<div class="w3-quarter w3-animate-input  animated wobble" style="height:; animation-duration:1s; margin-top:450px; margin-left:70px;">
<button class="w3-button w3-blue-grey w3-border-gray w3-animate-right  animated jello" onclick="st1()" style="width:300px; animation-duration:5s; font-size:20px;">Login To Proceed Here&nbsp;&nbsp;&nbsp;<span class="fa fa-search"></span></button>
</div>
</section>
<!--section for medium-->

<section class="w3-amber w3-container bgimg-1 w3-col w3-hide-large  w3-hide-small  animated  bounceIn" style="height: 100%; background-size:cover; background-image:url(assets/headereimg.jpg);; margin-top:0px; "  >
<div class="w3-col" style=" text-align:center; width:100%; alignment-adjust:central; float:left;margin:50px 0px 50px 0px;">
<div class="w3-margin-top" style="height:60px;  margin:0px;"><br><br>

<br>

<p class="w3-animate-top w3-margin-top  animated rubberBand " style="animation-duration:2s; font-size:80px; padding:0px; font-family:lobster; font-weight:lighter; height:50px; padding:0px;"><strong>&nbsp&nbspH & A </strong></span></p>
</div><div style="height:60px;">
<br>
<br>
<br>
<p class="w3-animate-bottom  animated shake" style="animation-duration:2s; font-size:100px; margin:0px; padding:0px; font-weight:lighter; font-family:lobster; height:50px; padding:0px;"> Eductional Panel</p>

<br />
<br />
<br />
<br />

<button class="w3-button w3-animate-right w3-blue-grey w3-border-gray  animated wobble"  onclick="st1()" style="width:300px; animation-duration:2s;  font-size:20px;">Login To Proceed Here&nbsp;&nbsp;&nbsp;<span class="fa fa-search"></span></button>


</div>

</div>
</section>

<section class="w3-amber w3-container bgimg-1 w3-col w3-hide-large  w3-hide-medium w3_small  animated  bounceIn " style="height: 100%; background-size:cover; background-image:url(assets/headereimg.jpg);; margin-top:0px; "  >
<div class="w3-col" style=" text-align:center; width:100%; alignment-adjust:central; float:left;margin:50px 0px 50px 0px;">
<div style="height:20px; margin:0px;"><br>
<br>
<br>

<p class="w3-animate-top  animated  shake" style="animation-duration:2s; font-size:55px; padding:0px; font-family:lobster; font-weight:lighter; height:50px; padding:0px;">&nbsp&nbsp <strong>H & A</strong> <span class="fa fa-search w3-animate-zoom "></span></p>
</div><div style="height:20px;"><br />
<br>
<br><br>
<br>


<p class="w3-animate-bottom  animated  rubberBand" style="animation-duration:2s; font-size:50px; margin:0px; padding:0px; font-weight:lighter; font-family:lobster; height:50px; padding:0px;"> Eductional Panel</p>
<br /><br />


<button class="w3-button w3-animate-right w3-blue-grey w3-border-gray  animated  jello"  onclick="st1()" style="width:200px; animation-duration:2s;  font-size:15px;">Login To Proceed Here&nbsp;&nbsp;</button>

<script>
    function te(){
		
	document.getElementById("sign").style.display='block';

	document.getElementById("op").style.display='none';
	document.getElementById("tea").style.display='block';
	
	
	
	}
    </script>
</div>

</div>

</body>
</html>                            
<script type="text/javascript">
$('#closemodal').click(function() {
    $('#myModal').modal('hide');
	$('#myModa2').modal('show');
	
});

$('#closemodal1').click(function() {
    $('#myModa3').modal('hide');
	$('#myModa4').modal('show');
	
});




</script>