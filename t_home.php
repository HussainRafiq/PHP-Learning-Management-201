
<script>
         function ob(){
		 var pass=document.getElementById("password").value;
		
			 var cpass=document.getElementById("cpass").value;
			
			
		if(pass==cpass){
		document.getElementById("resultpass").style.display="none";
		document.getElementById("resul").disabled=false;
		}
		else{
			document.getElementById("resultpass").style.display="block";

document.getElementById("resul").disabled=true;		}
        }</script>



<?php

session_start();

if(isset($_SESSION['jid'])){
	$id=$_SESSION['jid'];

		include('conn.php');
		$ab=new con();
		$q="select * from t_data join city on city.id=t_data.city where t_data.id=".$id;
			
						
	  $result=mysqli_query($ab->con,$q);
		 
		  while($row=mysqli_fetch_array($result)){
			 
			 $us=$row[1];
			 $f_name=$row[2];
			  $l_name=$row[3];
			  $des=$row[4];
			  $email=$row[5];
			  $pas=$row[6];
			  $num=$row[7];
			  $quali=$row[8];
			  $con=$row[10];
			  $pic=$row[11];
			  $pur=$row[12];
			  $cit=$row[14];
			  
		  
		  
		  		
					  
		  
		  
		  
		  
		
		
		
		  }
		  $result=mysqli_query($ab->con,'select count(t_id) from inter where t_id='.$id);
		  $row=mysqli_fetch_array($result);
		  $inter=$row[0];
		  $result1=mysqli_query($ab->con,'select count(t_id) from veiws where t_id='.$id);
		  $row1=mysqli_fetch_array($result1);
		  $veiw=$row1[0];
		  
		  
}else{
	
	
	?>
<script>window.location.href='student.php';</script>
<?php
	
}if(isset($_GET['out'])){
	
	session_destroy();
	
	?>
<script>window.location.href='student.php';</script>
<?php
	}
		  
$show='none';		
	if(isset($_GET['video'])){
$vid=$_GET['video'];

 $q1="select * from video where id=".$vid;
			
						
	  $result=mysqli_query($ab->con,$q1);
		 
		  while($row=mysqli_fetch_array($result)){
		  $ti_heading=$row[2];
		  $vid=$row[0];
		  $caple=$row[3];
		  $url=$row[4];
		  $status=$row[5];
		  
		  
		  }
		  $show='block';


}
		
		
		
			



?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "".$f_name." ".$l_name;?></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="design/headcss.css" />
<link rel="stylesheet" type="text/css" href="animate.css" />
<link rel="stylesheet" type="text/css" href="design/font.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>
<style>
html,body,h1,h2,h3,h4,h5 {
	/* [disabled]font-family: "Raleway", sans-serif; */
}
</style>
<body class="w3-light-grey ">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large animated lightSpeedIn" style="z-index:4">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onClick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
   <span style="animation-duration:3s" class="w3-bar-item w3-animate-right w3-left">H & A EDUCATIONAL PANEL</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left  animated fadeInLeftBig" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="" style="padding:0px; margin:0px;">
   <div class="w3-display-container">
          <img class="w3-animate-top" src="<?php echo $pic?>" style="width:100%; animation-duration:2s; height:350px;" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2 style="color:#FFF; font-family:algerian; text-transform:capitalize" class="w3-animate-left"><?php echo $f_name." ".$l_name ?></h2>
            <em> <?php echo $des?></em>
          </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block w3-blue-grey" style="overflow:auto;">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onClick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="?show=1" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
    
    <a href="?show=2" class="w3-bar-item w3-button w3-padding"><i class="fa fa-edit fa-fw"></i> My Profile</a>
    <a  href="?show=3" class="w3-bar-item w3-button w3-padding"><i class="fa fa-question-circle fa-fw"></i>  Question By Public</a>
     <a href="?show=4" class="w3-bar-item w3-button w3-padding"><i class="fa fa-television fa-fw"></i>  My Video Tutorial</a>
  
    
    <a href="?out=1" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i> Sign Out</a>
   <br><br>
  </div>
</nav>
<style>
#v{display:none;}
</style>
<script>
function hj(){
	document.getElementById("ov").style.display='block';
	document.getElementById("v").style.display='none';
	
	}function hj1(){
	document.getElementById("ov").style.display='none';
	document.getElementById("v").style.display='block';
	
	}


</script>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onClick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom   animated bounceInDown">
    
    <div class="w3-third">
      <div class="w3-container w3-indigo w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $veiw?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Views</h4>
      </div>
    </div>
    
   <a href="?edit=inter" ><div class="w3-third">
      <div class="w3-container w3-amber  w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-bullhorn w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $inter?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Intrested</h4>
      </div>
    </div></a>
  </div>
  
  
  <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
    <?php
	$show1='block';
		$show2='none';
		$show3='none';
		$show4='none';
    if(isset($_GET['show'])){
		$hoj=$_GET['show'];
		if($hoj==1){
		$show1='block';
		$show2='none';
		$show3='none';
		$show4='none';
		}else if($hoj==2){
		$show1='none';
		$show2='block';
		$show3='none';
		$show4='none';
		}if($hoj==3){
		$show1='none';
		$show2='none';
		$show3='block';
		$show4='none';}
if($hoj==4){
		$show1='none';
		$show2='none';
		$show3='none';
		$show4='block';}

	?>
	
	
	
	<?php	
		
		}
	
	
	
	
	?>
    
    
    
    
    
<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat:000000, lng:00000};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 5, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}







    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSL6wkvyfLwb9ULjk2p-RvgrDLC2xSZIw&callback=initMap">
    </script>
  <div class="w3-panel animated bounceInLeft" id="ove"   >
    <div class="w3-row-padding" style="margin:0 -16px;display:<?php echo $show1?>; ">
    
      <div class="w3-col" >
      <div class="w3-card w3-third w3-white">
        <h5 class="w3-margin">Your Purposal</h5>
       <p class="w3-margin" style="text-wrap:normal"><em><?php echo $pur?></em></p>
       <br />
        </div>
        <div class="w3-panel w3-rest w3-margin w3-card-4" style="display:block" >
        <H2>My Skills</H2>
        <?php
        $q1="select * from skill where t_id=".$id;
			
						
					  $result=mysqli_query($ab->con,$q1);
		 
		  while($row=mysqli_fetch_array($result)){
			 
			 $na=$row[1];
			 $per=$row[2];
			  if($per>75){
				  $col='green';
				  }else{
				   $col='red';
				 
				  }
		  
		?>
		<hr />
       <h3 style="text-transform:uppercase;" ><?php echo $na;?></h3>
          <div class="w3-light-gray w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-<?php echo $col;?>" style="width:<?php echo $per;?>%;">
              <div class="w3-center w3-text-white"><?php echo $per;?>%</div>
            </div>
          </div>
        
		
		
		
		<?php  
		  		
					  
		  
		  
		  
		  
		
		
		
		  }
		
		
		
		
		
		
		
		
		?>
        <br /><br />
        
        
        
          
         
      </div>
    </div>
  </div>
 
 <div id="edit" class="w3-panel w3-padding animated  bounceInLeft" style="display:<?php echo $show2?>">
    <div class="w3-padding  w3-light-grey" style="margin:0 -16px;">
      <br />
      <div class="w3-card w3-light-grey w3-padding" >
      <br />
      <h2>Your Personal Information</h2>
      <hr />
      <table style="text-transform:capitalize;" class="w3-table w3-striped w3-card-4 w3-light-green ">
      <tr><th>Profile Picture</th><td><img src="<?php echo $pic ?>" class=" w3-card w3-image " width="25%" /></td><td><a href="?edit=pic" ><span class="fa fa-edit w3-hover-text-light-blue"></span></a></td></tr>
      <tr><th>First Name</th><td><?php echo $f_name ?></td><td><a href="?edit=fname" ><span class="fa fa-edit w3-hover-text-light-blue"></span></a></td></tr>
      <tr><th>Last Name</th><td><?php echo $l_name ?></td><td><a href="?edit=lname" ><span class="fa fa-edit w3-hover-text-light-blue"></span></a></td></tr>
      <tr><th>Email</th><td><?php echo $email ?></td><td><a href="?edit=email" ><span class="fa fa-edit w3-hover-text-light-blue"></span></a></td></tr>
      <tr><th>Password</th><td><input type="password" style="border:0px; background-color:transparent;"  contenteditable="false" disabled="disabled" value="<?php echo $pas?>" /></td><td><a href="?edit=pass" ><span class="fa fa-edit w3-hover-text-light-blue"></span></a></td></tr>
      <tr><th>Phone Number</th><td><?php echo $num ?></td><td><a href="?edit=ph_no" ><span class="fa fa-edit w3-hover-text-light-blue"></span></a></td></tr>
    
      <tr><th>Qualification</th><td><?php echo $quali ?></td><td><span title="If you want to edit qualification contact to admin in contac us with your username." >-</span></td></tr>
      <tr><th>Designation</th><td><?php echo $des ?></td><td><span title="If you want to edit designation contact to admin in contac us with your username." >-</span></td></tr>
      <tr><th>City</th><td><?php echo $cit ?></td><td><a href="?edit=city" ><span class="fa fa-edit w3-hover-text-light-blue"></span></a></td></tr>
      
      </table>
      <br />
      <hr />
      
      <h2>Your Work Exprience</h2>
      <table style="text-transform:capitalize;" class="w3-table w3-striped w3-card-4 w3-light-green ">
      <tr><th>Work Experience</th><th>Duration</th></tr>
      	 <?php
        $q2="select * from w_ex where tid=".$id;
			
						
					  $result=mysqli_query($ab->con,$q2);
		 
		  while($row=mysqli_fetch_array($result)){
			 
			 $nam=$row[1];
			 $peri=$row[2];
		
		?>
		
       
       <tr><td><?php echo $nam;?></td><td colspan="2"><?php echo $peri;?></td></tr>
         
        
		
		
		
		<?php  
		  		
					  
		  
		  
		  
		  
		
		
		
		  }
		
		
		
		
		
		
		
		
		?>
<tr><th colspan="2" title="For add a more work exprience request to admin with your username." class="w3-btn w3-blue w3-centered w3-hover-blue-gray">Edit</th></tr>
      
      </table>
      <br />
      
      
      
      
      </div>
      <br />
      <div class="w3-card w3-padding w3-col  w3-light-grey">
    
      <h2>Skills & Purposal</h2>
     
      <table style="text-transform:capitalize;" class="w3-table w3-center   w3-striped w3-card-4 w3-light-green ">
      <tr><th>Purposal</th></tr>
       <tr><td> <p class="w3-margin"><em><?php echo $pur?>.</em><a href="?edit=pur"><span title="Edit the purposal." class=" w3-hover-text-blue  fa fa-2x fa-pencil"></span></a></p></td></tr>
      </table>
      
     
      <table style="text-transform:capitalize;" class="w3-table w3-center   w3-striped w3-card-4 w3-light-green ">
     <tr><th colspan="2">Skills</th></tr>
	 <?php
        $q1="select * from skill where t_id=".$id;
			
						
					  $result=mysqli_query($ab->con,$q1);
		 
		  while($row=mysqli_fetch_array($result)){
			 
			 $na=$row[1];
			 $per=$row[2];
			  if($per>75){
				  $col='green';
				  }else{
				   $col='red';
				 
				  }
		  
		?>
		<hr />
       
       <tr><td colspan="2"><h3 style="text-transform:uppercase;" ><?php echo $na;?></h3></td></tr>
          <tr><td><div class="w3-light-gray w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-<?php echo $col;?>" style="width:<?php echo $per;?>%;">
              <div class="w3-center w3-text-white"><?php echo $per;?>%</div>
            </div>
          </div></td></tr>
        
		
		
		
		<?php  
		  }
		
		?>
     
     <tr><th colspan="2" title="For add a more skills request to admin with your username." class="w3-btn w3-blue w3-centered w3-hover-blue-gray">Edit</th></tr>
      </table>
      <br />
      <br />
      </div>
      
      
      </div>
  </div>
  <script>
$(document).on("change", ".file_multi_video", function(evt) {
document.getElementById("vid").style.display='block';
  var $source = $('#video_here');
  $source[0].src = URL.createObjectURL(this.files[0]);
  $source.parent()[0].load();
});  </script>
<?php $ab=new con();
if(isset($_POST['go'])){

mysqli_query($ab->con,'insert into message values(null,0,'.$id.','.$_POST['hid'].',"'.$_POST['txt'].'","'.date("Y-m-d h:i:sa").'")') or die(mysqli_error($ab->con));
	
	echo'<p style="color:#060">Replied</p>';


}
?>



 <div class="w3-panel w3-card animated  bounceInLeft" id="vidop" style="display:<?php echo $show3?>"  >
    <div class="w3-row-padding" style="margin:0 -16px">
        <h2>Publc Question Board</h2> 
<?php $result =mysqli_query($ab->con,'select * from message where reply=0 ');
if(mysqli_num_rows($result)>0){
	$i=0;
	while($row=mysqli_fetch_array($result)){
	++$i;
	$qid=$row[0];
	$fid=$row[2];
	$date=$row[5];
	$txt=$row[4];
	
	$result5=mysqli_query($ab->con,'select username from st_data where id='.$fid);
 
 $row5=mysqli_fetch_array($result5);
	
	 $jname=$row5[0];
	 
	
	
	
	?>
	<div class="w3-card w3-margin w3-padding w3-left-align">
    <h4 class="" style=" text-transform:capitalize;"><span class="w3-text-green"><?php echo $jname?>'s Question : </span><?php echo $txt;?><br>
<span style="font-size:12px;">Time : <?php echo $date?></span></h4>
   <br>
    <h4>Enter your Reply</h4>

<form method="post" action="" id="form" >
<input type="hidden" name="hid" value="<?php echo $qid?>" />
<textarea name="txt"  class="w3-input w3-col w3-card" id="h"></textarea>
<input type="submit"  name="go" value="SEND" class="w3-button w3-green w3-margin-top" />
</form>
   <?php

$result1 =mysqli_query($ab->con,'select * from message where reply='.$qid);
if(mysqli_num_rows($result1)>0){
	
	echo '<h3>REPLIES</h3>';
	while($row1=mysqli_fetch_array($result1)){
	
	$qid=$row1[0];
	$gid=$row1[2];
	$date=$row1[5];
	$txt=$row1[4];
	if($gid==$id){
		$jname='Your Reply';
		$coli='blue';
		}else{
	$result2=mysqli_query($ab->con,'select f_name,l_name from t_data where id='.$gid);
 
 $row2=mysqli_fetch_array($result2);
	
	 $jname=$row2[0].' '.$row2[1];
	$coli='red';
	}
	 ?>
	 <div class="w3-card w3-padding w3-left-align">
    <h4 class="" style=" text-transform:capitalize;"><span class="w3-text-<?php echo $coli?>"><?php echo $jname?> : </span><?php echo $txt;?><br>
<span style="font-size:12px;">Time : <?php echo $date?></span></h4></div>
	 <?php
 
	
	
	
   ?>
   
   <?php
}}
?></div><?php
}}
   ?>
 










</div></div>















<div class="w3-panel w3-card animated bounceInLeft" id="vidop" style="display:<?php echo $show4?>"  >
    <div class="w3-row-padding" style="margin:0 -16px">
        <h2>Your Video Tutorial</h2>  
   
   
    <form action="" method="post" enctype="multipart/form-data">
    	<label for="files"   required  class=" w3-button w3-amber w3-hover-blue">Upload Your Tutorial</label>
<input type="file" name="file" id="files" class="file_multi_video"  onchange="readURL(this);" required  accept="video/*" style=" display:none;"><br />
 <div id="vid" class="w3-card w3-padding" style="display:none;">
<video width="400" controls class="w3-card">
  <source src="mov_bbb.mp4" id="video_here">
    Your browser does not support HTML5 video.
</video><br /><br />
	<input type="text" class="w3-card w3-col   w3-margin-top" max="100" required  name="title" placeholder="Write the heading of your tutorial." />
    
    <br /><textarea class="w3-card w3-col  w3-margin-top" name="cap"  placeholder="Write the caption of your tutorial."></textarea><br /><br />
<input type="submit" name="vido" value="UPLOAD" class="w3-button w3-green w3-margin-top" />    </div>
    
    </form>
   <script>
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
	  
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("kl").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "piccheck.php?vido=<?php echo $id;?>", true);
  xhttp.send();
   
   </script> 
    
    
    
   
    
    <div class="w3-col" id="kl" >
    <br />
     
    
    <br />
    </div>
    <br />
    
    
    
    
    
    
    </div>
  </div>
 
  </div>
  <!-- -->
<div class="" style="background-color:#999; border-radius:10px 10px 0px 0px; width:300px;  border: 7px solid #000;  position:fixed;
margin:0px;
padding:0px;
     bottom: 0;
     right: 100px;   margin:0px;" >
<div class="w3-black" style="  border:0px; margin:0px; "><h3 style="color:#FFF; padding-left:12px; padding-top:2px; font-family:Arial, Helvetica, sans-serif;  margin:0px;">Chat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="chan" onClick="clos()" class="w3-right fa fa-window-maximize w3-text-white" style="cursor:pointer"></span></h3></div>
<div id="clo" style="display:none" >
<script>
function clos(){
	var clo=document.getElementById("clo").style.display;
if(clo=='block'){
	document.getElementById("chan").className='w3-right fa fa-window-maximize w3-text-white';
	document.getElementById("clo").style.display='none'}else{
		document.getElementById("clo").style.display='block';
		document.getElementById("chan").className='w3-right fa fa-window-minimize w3-text-white';}

}
function ok(){
 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("s_m").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "t-g-m.php?tid=<?php echo $id?>", true);
  xhttp.send();
}
var count=1;
  
 function showm(input){
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("getin").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "infotm.php?tid=<?php echo $id?>&sid="+input, true);
  xhttp.send(); var count2=document.getElementById("count").value;
  if(count2>count){
  
var chatEl = document.getElementById("getin");
chatEl.scrollTop = chatEl.scrollHeight;
  }
  count=count2;
} 
  var abc;
function clik(input){
  document.getElementById("s_m").style.display='none';
 document.getElementById("shmi").style.display='block';


var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("shmi").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "tim.php?tid=<?php echo $id?>&sid="+input, true);
  xhttp.send();
   abc=setInterval('showm('+input+')',100);

}


function backi(){
  document.getElementById("s_m").style.display='block';
 document.getElementById("shmi").style.display='none';
 clearInterval(abc);
 count=1;
 
 }

  function ld1() {
	  var txt=document.getElementById("txt1").value;
	  var sid=document.getElementById("sid").value;
	  var tid=document.getElementById("tid").value;
	  if(txt==""){
		  alert("Don't send empty message!");
		  
		  }
	  else{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("ans").innerHTML = this.responseText;
    }
  };
  var url="sm.php?txt="+txt+"&sid="+sid+"&tid="+tid+"&ty=1";

  xhttp.open("GET",url , true);
  xhttp.send();
 
  document.getElementById("txt1").value="";
	  }
}
setInterval('ok()',100);

</script>

<div id="s_m" style="height:300px; overflow:auto; background-color:#FFF">










<!--<hr style="margin:0px;" />
<div class="w3-gray w3-hover-light-gray" style=" height:60px;"><img src="assets/profilestudent/21MV5BZDk1ZmU0NGYtMzQ2Yi00N2NjLTkyNWEtZWE2NTU4NTJiZGUzXkEyXkFqcGdeQXVyMTExNDQ2MTI@._V1_UY317_CR4,0,214,317_AL_.jpg" style="margin:7.5px;" width="45px" height="45px" /><span style="font-size:15px; font-family:'Arial Black', Gadget, sans-serif">SHARUKH KHAN</span></div>
<hr style="margin:0px;" />-->

</div>




<div  id="shmi" class="w3-light-grey" style="height:300px; display:none;"> 





</div>
<!--
<h5 class="w3-white " style="margin:0px;  "><img src="assets/profilestudent/21MV5BZDk1ZmU0NGYtMzQ2Yi00N2NjLTkyNWEtZWE2NTU4NTJiZGUzXkEyXkFqcGdeQXVyMTExNDQ2MTI@._V1_UY317_CR4,0,214,317_AL_.jpg" style="margin:7.5px;" width="30px" height="30px" /><span style="font-size:10px; "><strong>SHARUKH KHAN</strong></span></h5>

<div style="background-color:#CCC ; color:#FFF;  overflow:auto; height:200px;">
<br />
<div class="w3-left w3-light-blue" style="padding:0px 5px 0px 5px; border-radius:0px 10px 0px 10px; margin-left:10px; width:125px;"><p style="font-size:10px; margin-bottom:0px;"><strong>Usman Awaan :</strong> &nbsp;&nbsp;</p><p style="font-size:12px; text-wrap:normal; margin-top:0px; margin-bottom:0px;">HOW ARE YOU?HOW ARE YOU?</p>
<p style="margin-top:0px; font-size:7px;"><strong>22-july-2018 22:15</strong></p>
  
</div>
<br />

-->

</div>




</div>    












  
  
  
  
 
<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
<div id="vidin" class="w3-modal" style="display:<?php echo $show?>">
  <div class="w3-modal-content w3-card">
    <div class="w3-container">
      <span onClick="document.getElementById('vidin').style.display='none';window.location.href = 't_home.php';" 
      class="w3-button w3-hover-red w3-display-topright">&times;</span>
     <br />
     <h3 class="w3-green"><?php echo $ti_heading?></h3>
     <video width="100%" src="<?php echo $url?>" controls class="w3-card w3-margin-top  "></video><br />
     <h5><?php echo $caple?></h5>
     
     
    </div>
  </div>
</div>


 <?php
  if(isset($_POST['fn'])){
	  $nm1=$_POST['name1'];
	 mysqli_query($ab->con,'update t_data set f_name="'.$nm1.'" where id='.$id) or die(mysqli_error($ab->con));
	  
	
	echo "<script> window.location.href='t_home.php';
	 alert('updated');
	
	</script>";}
	if(isset($_POST['ln'])){
	  $nm1=$_POST['name2'];
	 mysqli_query($ab->con,'update t_data set l_name="'.$nm1.'" where id='.$id) or die(mysqli_error($ab->con));
	 
	echo "<script> alert('updated'); window.location.href = 't_home.php'</script>";
	  }if(isset($_POST['en'])){
	  $nm1=$_POST['name3'];
	 mysqli_query($ab->con,'update t_data set email="'.$nm1.'" where id='.$id) or die(mysqli_error($ab->con));
	 
	echo "<script> alert('updated');</script>";
		  }
 if(isset($_POST['phn'])){
	  $nm1=$_POST['name4'];
	 mysqli_query($ab->con,'update t_data set number="'.$nm1.'" where id='.$id) or die(mysqli_error($ab->con));
	 
	echo "<script> alert('updated'); window.location.href = 't_home.php'</script>";
		  }
		  if(isset($_POST['cn'])){
			 
	  $nm1=$_POST['name5'];
	 mysqli_query($ab->con,'update t_data set city='.$nm1.' where id='.$id) or die(mysqli_error($ab->con));
	  echo "<script> alert('updated'); window.location.href = 't_home.php'</script>";
	
		  }
 		  if(isset($_POST['pun'])){
			 
	  $nm1=$_POST['name6'];
	 mysqli_query($ab->con,'update t_data set purposal="'.$nm1.'" where id='.$id) or die(mysqli_error($ab->con));
	  echo "<script> alert('updated');</script>";
	
		  }
		  
		   if(isset($_POST['pasn'])){
			 
	  $nm1=$_POST['name8'];
	  $nm2=$_POST['name9'];
	  
	  echo "<script> alert('".$nm1."');</script>"; 
	  
	  
	 $result=mysqli_query($ab->con,'select * from t_data where password="'.$nm1.'"') or die(mysqli_error($ab->con));
	  if(mysqli_num_rows($result)>0){
		   mysqli_query($ab->con,'update t_data set password="'.$nm2.'" where id='.$id) or die(mysqli_error($ab->con));
		  
		  
		  
		  
	  echo "<script> alert('updated'); window.location.href = 't_home.php'</script>"; 
	  }else{
	   echo "<script> alert('You old password is incorrect.'); window.location.href = 't_home.php'</script>";
	
	  }  }else
	  
	   if(isset($_POST['upn'])){
			  
	 		$t=$_FILES['picture']['type'];
						if($t=="image/jpg" || $t=="image/jpeg" || $t == "image/png" || $t == "image/bmp"){
				
				
				
				$target = "assets/profilestudent/".basename(rand(10,1000).$_FILES['picture']['name']);
					
					
							if(move_uploaded_file($_FILES['picture']['tmp_name'],$target)){
					
					
					 mysqli_query($ab->con,'update t_data set pic="'.$target.'" where id='.$id) or die(mysqli_error($ab->con));
		  
		  
		  
		  
	
			 echo "<script> alert('updated');window.location.href = 't_home.php'</script>";		
					
					
							}else{
	   echo "<script> alert('Picture Is Not Supported.');window.location.href = 't_home.php'</script>";
	
	  }
							}
else{
	   echo "<script> alert('Picture Is Not Supported');window.location.href = 't_home.php'</script>";
	
	  }		  }
		
 
 
 
 
	
     if(isset($_GET['edit'])){
	$got='block';	 
		 
	?>	 
	<?PHP	 
	 $edit1=$_GET['edit'];
?>   

<div id="edit" class="w3-modal" style="display:<?php echo $got?>">

<div class="w3-quarter">
<br />
<script>function textonly(e){
var code;
if (!e) var e = window.event;
if (e.keyCode) code = e.keyCode;
else if (e.which) code = e.which;
var character = String.fromCharCode(code);
//alert('Character was ' + character);
    //alert(code);
    //if (code == 8) return true;
    var AllowRegex  = /^[\ba-zA-Z\s-]$/;
    if (AllowRegex.test(character)) return true;     
    return false; 
}</script>
</div>

  <div class="w3-modal-content w3-card w3-third w3-white w3-center ">
    <div class="w3-container w3-padding ">
      <span onClick="document.getElementById('edit').style.display='none'; window.location.href = 't_home.php';" 
      class="w3-button w3-hover-red w3-display-topright">&times;</span>
     <br />
  <?PHP	 if($edit1=='fname'){

		 ?>
		 <h1>Edit Your First Name</h1>
		 <form action="" method="post">
         <label>Enter Your First Name</label>
         <input type="text" onKeyPress="return textonly(event);" name="name1" class=" w3-input" />
         <input type="submit" name="fn"  class="w3-button w3-margin-top w3-green"/>
		 </form>
		 <?php
		 }
		 else if($edit1=='lname'){

		 ?>
		 <h1>Edit Your Last Name</h1>
		 <form action="" method="post">
         <label>Enter Your Last Name</label>
         <input type="text" name="name2" onKeyPress="return textonly(event);" class=" w3-input" />
         <input type="submit" name="ln"  class="w3-button w3-margin-top w3-green"/>
		 </form>
		 <?php
		 }
	 else if($edit1=='email'){

		 ?>
		 <h1>Edit Your Email</h1>
		 <form action="" method="post">
         <label>Enter Your Email</label>
         <input type="email" name="name3" class=" w3-input" />
         <input type="submit" name="en"  class="w3-button w3-margin-top w3-green"/>
		 </form>
		 <?php
		 }else if($edit1=='ph_no'){

		 ?>
		 <h1>Edit Your Phone Number</h1>
		 <form action="" method="post">
         <label>Enter Your Phone Number</label>
         <input type="text"  maxlength="11" name="name4" class=" w3-input" />
         <input type="submit" name="phn"  class="w3-button w3-margin-top w3-green"/>
		 </form>
		 <?php
		 }else if($edit1=='city'){

		 ?>
		 <h1>Edit Your City</h1>
		 <form action="" method="post">
         <label>Enter Your City</label>
         <select class="w3-input" name="name5" required>
                        <option disabled selected>Select Your City</option>
                        <?php
						$con=new con();
				$query="select * from city ORDER BY name ASC";
			
				$result=mysqli_query($ab->con,$query);		
			while($row=mysqli_fetch_array($result)){
							?>
							<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
							
							<?php
							
							
							}
						
						 ?>
                                                </select>
         <input type="submit" name="cn"  class="w3-button w3-margin-top w3-green"/>
		 </form>
		 <?php
		 }else if($edit1=='pur'){

		 ?>
		 <h1>Edit Your Purposal</h1>
		 <form action="" method="post">
         <label>Enter Your Purposal</label>
         <textarea  name="name6" class=" w3-input" ></textarea>
         <input type="submit" name="pun"  class="w3-button w3-margin-top w3-green"/>
		 </form>
		 <?php
		 }else if($edit1=='pass'){

		 ?>
		 <h1>Edit Your Password</h1>
		 <form action="" method="post">
         <label>Enter Your Old Password</label>
         <input type="password" class="w3-input "  name="name8" placeholder="Password" required>
         <label>Enter Your Password</label>	
						<input type="password" class="w3-input" id="password" name="name9" onKeyUp="ob()" placeholder="Password" required>
                        <label>Enter Your Confirm Password</label>	
						<input type="password" class="w3-input"  onKeyUp="ob()" id="cpass" placeholder="Retype Password" required>	
                        <div style="display:none"  id="resultpass">					
                  <p style="color:#F00">Enter a Confirm Password</p>
    
					</div>    
         <input type="submit" name="pasn" disabled="disabled" id="resul"  class="w3-button w3-margin-top w3-green"/>
		 </form>
		 <?php
		 }else if($edit1=='pic'){

		 ?>
         

		 <h1>Upload Your Image</h1>
		 <form action="" method="post" enctype="multipart/form-data">
         <label>Your Picture</label>
         
<input type="file"   class="filed form-control-file" class="w3-input "  onchange="readURL(this);" required name="picture" accept="image/*" style="">
<br />
 <img id="blah" height="100px" width="200px" class="img img-thumbnail " src="" alt="your image" />
         <br />
         <input type="submit" name="upn"  class="w3-button w3-margin-top w3-green"/>
		 </form>
         <script>
$("#files").change(function() {
  filename = this.files[0].name
  console.log(filename);
});
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
		 <?php
		 }else if($edit1=='inter'){
?>
<h1>People Show Interest Them</h1>
<table class="w3-table w3-striped ">
<tr class=""><th>NAME</th><th>Email</th></tr>

<?php		 $result=mysqli_query($ab->con,'select sid from inter where t_id='.$id);
		 while($row1=mysqli_fetch_array($result)){
		 $joni=$row1[0];
		 $result1=mysqli_query($ab->con,'select username,email from st_data where id='.$joni);
		 $row=mysqli_fetch_array($result1);
		 
		 ?>
         <tr><td><?php echo $row[0]?></td><td><?php echo $row[1]?></td></tr>
         
         
		 <?php
	
		 }
		 ?>
        </table>
         
         
         
         
	 <?php
     }
?>   
    
    </div>
  </div>
</div>
<?PHP	 
	 
	 
	 
	 
	 
	 
	 
	 }else{
	 $got='none';	 }
	 ?>
  












</body>

</html>
<?php

if(isset($_POST['vido'])){	
	$t=$_FILES['file']['type'];
	 

								if($t=="video/mp4" || $t=="video/mwv" ){
				
				
				
				$target = "assets/tutorial/".basename(rand(10,1000).$_FILES['file']['name']);
					
					
					 
			if(move_uploaded_file($_FILES['file']['tmp_name'],$target)){
				
				$ab=new con();
					
					$query = "insert into video values(null,".$id.",'".$_POST['title']."','".$_POST['cap']."','".$target."',0)";
						mysqli_query($ab->con,$query) or die(mysqli_error($con->con));
						
			  
			  echo'<script>alert("UPLOADED");</script>';
			  	}else{echo'<script>alert("Video Not Supported!1")</script>';	
				echo'<script>window.location.href="t_home.php";</script>';
}
				
			
					

			  }
	
	else{echo'<script>alert("Video Not Supported!2")</script>';	
				echo'<script>window.location.href="t_home.php";</script>';
}

	
	
	
	
	
	
	
	}
		
		
		
		
	
		




?>