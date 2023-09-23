<?php
include('conn.php');
$ab=new con();
session_start();


if(isset($_GET['out'])){
	
	session_destroy();
	
	?>
<script>window.location.href='student.php';</script>
<?php
	}


if(isset($_SESSION['id'])){
	$mid=$_SESSION['id'];$type=2;
	$q='select * from st_data where id='.$mid;

							$result=mysqli_query($ab->con,$q);
	$row=mysqli_fetch_array($result);
	
	$mus=$row[1];
	$mpic=$row[5];
	
	
	
	

}else{
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



<!DOCTYPE html>
<html>
<title><?php echo "".$mus;?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" type="text/css" href="animate.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="design/headcss.css" />
<link rel="stylesheet" type="text/css" href="animate.css" />
<link rel="stylesheet" type="text/css" href="design/font.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url(assets/headereimg.jpg);
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("/assets/headereimg.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("/assets/headereimg.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>



<!-- Navbar (sit on top) -->
<div class="w3-top w3-black animated lightSpeedIn">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">H & A Education Panel</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-question"></i> Question Board</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Our Teacher </a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    <button onClick="window.location.href='student_home.php?out=0'" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">Sign Out</button>
   
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium animated lightSpeedIn">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()"><i class="fa fa-question"></i> Question Board</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()"><i class="fa fa-th"></i> Our Teacher</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()"><i class="fa fa-envelope"></i> CONTACT</a>
   
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min " id="home">

  <div class=" w3-display-middle " style="white-space:nowrap;">
  <div class=" animated flip">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">H & A  <span class="w3-hide-small">EDUCATIONAL PANEL</span><span class="fa fa-book"></span></span>
  </div>
</div>
</div>


<!-- Container (About Section) -->
<div class="w3-content w3-animate-top w3-container w3-padding-64 w3-center " id="about">
    <h3 class="w3-center w3-animate-bottom  animated bounce">Welcome <?php echo $mus;?></h3>
       <IMG width="100PX;" height="100PX" style="animation-delay:1s; animation-duration:2s;" class="w3-animate-zoom animated bounceIn" src="<?php echo $mpic;?>">
   <hr>
       <h4>Enter your problems</h4>

<form method="post" action="" ><textarea name="txt" class="w3-input w3-col w3-card" id="h"></textarea>
<input type="submit" name="go" onClick="message()" value="SEND" class="w3-button w3-green w3-margin-top" />
</form>

<?php
if(isset($_POST['go'])){

mysqli_query($ab->con,'insert into message values(null,'.$type.','.$mid.',0,"'.$_POST['txt'].'","'.date("Y-m-d h:i:sa").'")') or die(mysqli_error($ab->conn));
	
	echo'<p style="color:#060">MESSAGE SENDED</p>';


}

$result =mysqli_query($ab->con,'select * from message where reply=0 and message.from='.$mid.' ORDER BY id DESC');
if(mysqli_num_rows($result)>0){
	echo '<h2>YOUR MESSAGES</h2>';
	while($row=mysqli_fetch_array($result)){
	
	$qid=$row[0];
	$fid=$row[2];
	$date=$row[5];
	$txt=$row[4];
	?>
	<div class="w3-card w3-margin w3-padding w3-left-align animated rotateInDownRight">
    <h4 class="" style=" text-transform:capitalize;"><span class="w3-text-green">Your Question : </span><?php echo $txt;?><br>
<span style="font-size:12px;">Time : <?php echo $date?></span></h4>
   <br>
   <?php

$result1 =mysqli_query($ab->con,'select * from message where reply='.$qid);
if(mysqli_num_rows($result1)>0){
	
	echo '<h3>REPLIES</h3>';
	while($row1=mysqli_fetch_array($result1)){
	
	$qid=$row1[0];
	$fid=$row1[2];
	$date=$row1[5];
	$txt=$row1[4];
	$result2=mysqli_query($ab->con,'select f_name,l_name,pic from t_data where id='.$fid);
 
 $row2=mysqli_fetch_array($result2);
	 $jpic=$row2[2];
	 $jname=$row2[0].' '.$row2[1];
	 
	 ?>
	 <div class="w3-card w3-padding w3-left-align animated rotateInDownLeft">
    <h4 class="" style=" text-transform:capitalize;"><span class="w3-text-red"><a href="?profile=<?php echo $fid?>"><?php echo $jname?></a> : </span><?php echo $txt;?><br>
<span style="font-size:12px;">Time : <?php echo $date?></span></h4></div>
	 <?php
 
	
	
	
   ?>
   
   <?php
}
}
   ?>
   
    
    
    
    
    
    
    </div>
    
    
    
	
	
	<?php
	
	
	
	
	}
	
	}








?>






<script>

</script>
</div>


    <!-- Hide this text on small devices -->


<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding" id="portfolio">
  <h3 class="w3-center">Our Teachers</h3>
 <br>
 <?php
 $result=mysqli_query($ab->con,'select f_name,l_name,id,qualification,designation,pic from t_data');
 
 while($row=mysqli_fetch_array($result)){
	 $did=$row[2];
	 $dname=$row[0].' '.$row[1];
	 $dqual=$row[3];
	 $ddes=$row[4];
	 $dpic=$row[5];
	 ?>
<a class="" href="?profile=<?php echo $did?>"><div class="animated bounceIn w3-card w3-third  w3-margin w3-hover-light-gray ">
<img src="<?php echo $dpic?>" style="height:200px;"  width="100%"  class="w3-border-grey w3-card w3-image">
<br>
<div class="w3-margin">
<h2 style="text-transform:capitalize"><strong><?php echo $dname?></strong></h2>
<hr>
<h4><strong>DESIGNATION : </strong><?php echo $ddes?></h4>
<hr>
<h4><strong>QUALFICATION : </strong><?php echo $dqual?></h4>
</div>



</div>
 
	 </a>
	 
	 
	 <?php
	 
	 }
 
 
 
 
 ?>
 
 


</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container " id="contact">
  
  <p class="w3-center"><em>I'd love your feedback!</em></p>

  <div class="w3-row  w3-section">
   
      <!-- Add Google Maps -->
      
    <div class="w3-col w3-center ">
      <div class=" w3-margin-bottom w3-center">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Karachi, Pakistan<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +92 3322081274<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: H&A@gmail.com<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
      <?php
$on='none';
if(isset($_POST['go1'])){
mysqli_query($ab->con,'insert into contact values(null,"'.$_POST['Name'].'","'.$_POST['Email'].'","'.$_POST['Message'].'")');
$on='block';




}
?>
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

      <form action="" method="post">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" onkeypress="return textonly(event);" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="email" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text"  placeholder="Message" required name="Message">
        <input  class="w3-button w3-black w3-right w3-section" name="go1" type="submit">
          <p style="color:#0F0; display:<?php echo $on;?>">Message Send</p>
        </input>
      </form>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
 
</footer>
 <div class="animated fadeInUp" style="background-color:#999;  animation-duration:2s; border-radius:10px 10px 0px 0px; width:300px;  border: 7px solid #000;  position:fixed;
margin:0px;
padding:0px;
     bottom: 0;
     right: 100px;   margin:0px;" >

<div class="w3-black" style="  border:0px; margin:0px;" ><h3 style="color:#FFF; padding-left:12px; padding-top:2px; font-family:Arial, Helvetica, sans-serif;  margin:0px;">Chat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="chan" onClick="clos()" class="w3-right fa fa-window-maximize w3-text-white" style="cursor:pointer"></span></h3></div>
<div id="clo" style="display:none; animation-duration:2s;" class="animated fadeInUp" >
<script>
function clos(){
	var clo=document.getElementById("clo").style.display;
if(clo=='block'){
	document.getElementById("chan").className='w3-right fa fa-window-maximize w3-text-white';
	document.getElementById("clo").style.display='none'}else{
		document.getElementById("clo").style.display='block';
		document.getElementById("chan").className='w3-right fa fa-window-minimize w3-text-white';}

}
var count=1;
function ok(){
 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("s_m").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "s-g-m.php?sid=<?php echo $mid?>", true);
  xhttp.send();
}

  
 function showm(input){
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("getin").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "infom.php?sid=<?php echo $mid?>&tid="+input, true);
  xhttp.send();
 var count2=document.getElementById("count").value;
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
  xhttp.open("GET", "sim.php?sid=<?php echo $mid?>&tid="+input, true);
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
  var url="sm.php?txt="+txt+"&sid="+sid+"&tid="+tid+"&ty=2";

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

</div>
<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
<?php
$dshow='none';



if(isset($_GET['profile'])){
$dshow='block';
$pid=$_GET['profile'];
$q='select count(t_id) from inter where t_id='.$pid.' and sid='.$mid;
$result=mysqli_query($ab->con,$q);
while($row=mysqli_fetch_array($result)){
if($row[0]>0){
	$intro='disabled';
}else{$intro='';}
}
$q='SELECT b.f_name,b.l_name,b.designation,b.email,b.number,b.qualification,city.name,b.country,b.pic,b.purposal FROM city join t_data as b on city.id=b.city where b.id='.$pid;
$result=mysqli_query($ab->con,$q);
while($row=mysqli_fetch_array($result)){

$lname=$row[0].' '.$row[1];
$ldes=$row[2];
$lemail=$row[3];
$lnumber=$row[4];
$lqual=$row[5];
$lcity=$row[6].' , '.$row[7];
$lpic=$row[8];
$lpurpo=$row[9];

}
$result=mysqli_query($ab->con,'select * from veiws where t_id='.$pid.' and sid='.$mid);
if(mysqli_num_rows($result)>0){
	}else{
mysqli_query($ab->con,'insert into veiws values('.$pid.','.$mid.')');

	}
	
	if(isset($_POST['inter'])){
	$result=mysqli_query($ab->con,'select * from inter where t_id='.$pid.' and sid='.$mid);
if(mysqli_num_rows($result)>0){
	}else{
mysqli_query($ab->con,'insert into inter values('.$pid.','.$mid.')');
?><script>window.location.href='student_home.php';</script>
<?php	}	
		
		
		}
	
	
	
	
?>



<div id="id01" class="w3-modal animated rollIn"  style="display:<?php echo $dshow?>;">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id01').style.display='none'; window.location.href='student_home.php'" 
      class="w3-button w3-display-topright">&times;</span>
      <div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="<?php echo $lpic?>" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2 style="text-transform:capitalize"><?php echo $lname?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $ldes?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $lcity?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $lemail?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $lnumber?></p>
            <p><i class="fa fa-edit fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $lqual?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
         <?php
           $q1="select * from skill where t_id=".$pid;
			
						
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
		   <p><?php echo $na;?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-<?php echo $col;?>" style="width:<?php echo $per;?>%"><?php echo $per;?>%</div>
          </div>
          
          <br>
		  
		  <?php
		  }
		?>
		 
		 
          

          
          <br>
        </div>
        <hR>
       
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
         <?php
        $q2="select * from w_ex where tid=".$pid;
			
						
					  $result=mysqli_query($ab->con,$q2);
		 
		  while($row=mysqli_fetch_array($result)){
			 
			 $nam=$row[1];
			 $peri=$row[2];
			 ?>
			 
			 
        <div class="w3-container">
          <h5 class="w3-opacity" style="text-transform:capitalize;"><b><?php echo $nam?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $peri?></h6>
          <hr>
        </div>
			 
			 <?php
			 
		  }
		?>
		
      
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Purposal</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><?php echo $lpurpo?></h5>
          
          <hr>
        </div>
  <script>
  function ld() {
	  var txt=document.getElementById("txt").value;
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
  var url="sm.php?txt="+txt+"&sid=<?php echo $mid;?>&tid=<?php echo $pid?>&ty=2";

  xhttp.open("GET",url , true);
  xhttp.send();
  document.getElementById("txt").value="";
	  }
}
  
  
  </script>
       
       
       <br>
       <h4 class="w3-left">Send A Personal Message:</h4>
       <textarea id="txt" class="w3-card w3-col"></textarea>
       <br>
       <button onClick="ld()" class="w3-button w3-green w3-margin"><span class="fa fa-send"></span>&nbsp;SEND</button>
       
       
       <br>
       <h2 id="ans"></h2>
       <form action="" method="post">
       
       <input type="submit" name="inter"  <?php echo $intro?>   class="w3-button w3-green w3-centered w3-col w3-card" value="Interested">
       
       </form> 
       <br>
    <!-- End Right Column -->
    </div>
  <!-- End Grid -->
  </div>
    <?php
  
     $q1="select * from video where status=1 and tid=".$pid;
			
						
					  $result=mysqli_query($ab->con,$q1);
		 if(mysqli_num_rows($result)>0){
			 echo '<h3>Video Tutorials</h3>';
		  while($row=mysqli_fetch_array($result)){
		  $ti_heading=$row[2];
		  $vid=$row[0];
		  $cap=$row[3];
		  $url=$row[4];
		  $status=$row[5];
		  ?>
          <div class="w3-quarter w3-card w3-margin" style="">
   
     <video class=" w3-card" src="<?php echo $url;?>" height="200px" width="100%"></video>
     <a href="?video=<?php echo $vid;?>"><h3 class="w3-margin"><?php echo $ti_heading;?></h3></a>
   
    </div>
			
			<?php	
			
			
			
			  
		  }
		  }
		  ?>
	
   	  

    
    
    
    
    
  
  
  <!-- End Page Container -->
</div>

    </div>
  </div>
</div>
</div>
<?php
}


?>
--><div id="vidin" class="w3-modal" style="display:<?php echo $show?>">
  <div class="w3-modal-content w3-card">
    <div class="w3-container">
      <span onclick="document.getElementById('vidin').style.display='none';window.location.href = 't_home.php';" 
      class="w3-button w3-hover-red w3-display-topright">&times;</span>
     <br />
     <h3 class="w3-green"><?php echo $ti_heading?></h3>
     <video width="100%" src="<?php echo $url?>" controls class="w3-card w3-margin-top  "></video><br />
     <h5><?php echo $caple?></h5>
     
     
    </div>
  </div>
</div>

</div>




</body>



</html>
