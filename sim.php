<?php

if(isset($_GET['sid'])){

$sid=$_GET['sid'];
$tid=$_GET['tid'];

include('conn.php');
$con=new con();
$result1=mysqli_query($con->con,"select f_name,l_name,pic from t_data where id=".$tid);
$row1=mysqli_fetch_array($result1);
$name=$row1[0].' '.$row1[1];
$pic=$row1[2];

?>
<h5 class="w3-white " style="margin:0px; text-transform:uppercase;  "><button onClick="backi()" class="w3-button" style="font-size:18px; height:30px; padding:3px;"><span class=" fa fa-arrow-left" ></span></button><img src="<?php echo $pic?>" style="margin:7.5px;" width="30px" height="30px" /><span style="font-size:10px; "><strong><?php echo $name?></strong></span></h5>
<div id="getin" class="w3-light-grey" style=" color:#FFF;  overflow:auto; height:200px;">


<?php
$result=mysqli_query($con->con,"select * from messenger where sid=".$sid." and tid=".$tid." ORDER BY id ASC;");
while($row=mysqli_fetch_array($result)){
$ty=$row[3];
$date=$row[4];
$time=$row[5];
$messege=$row[6];
if($ty==2){
$shn='You';
$side='w3-left';
$col='blue';
}else{
	$shn=$name;
	$side='w3-right';
	$col='green';
	}





}

?>
</div> 
<div class="w3-card">
<textarea  id="txt1" class="w3-card w3-threequater w3-card w3-light-grey" placeholder="Write Your Message" style="resize:none; height:50px;  "></textarea>
<input type="hidden" id="sid" value="<?php echo $sid?>" />
<input type="hidden" id="tid" value="<?php echo $tid?>" />
    
       <button onClick="ld1()" class="w3-button w3-green  w3-hover-light-green" style="float:right; padding:2px; width:90px; height:50px; font-size:25px;"><span class="fa fa-send"></span></button>
       
</div>
<?php
}
?>