<?php
$id=1;


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="design/headcss.css" />
<link rel="stylesheet" type="text/css" href="animate.css" />
<link rel="stylesheet" type="text/css" href="design/font.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


</head>

<body style="height:1000px;">
 
 
 
 
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













</body>
</html>
