<?php

if(isset($_GET['sid'])){

$sid=$_GET['sid'];
$tid=$_GET['tid'];
$name=$_GET['name'];
include('conn.php');
$con=new con();
$result=mysqli_query($con->con,"select * from messenger where sid=".$sid." and tid=".$tid);
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

?>	
	
	



<div class="<?php echo $side?> w3-light-<?php echo $col?> w3-margin"  id="focus" style="padding:0px 5px 0px 5px; border-radius:0px 10px 0px 10px; margin-left:10px; width:125px;"><p style="font-size:10px; margin-bottom:0px;"><strong><?php echo $shn?> :</strong> &nbsp;&nbsp;</p><p style="font-size:12px; text-wrap:normal; margin-top:0px; margin-bottom:0px;"><?php echo $messege?></p>
<p style="margin-top:0px; font-size:7px;"><strong><?php echo $date.' '.$time?></strong></p>
  
</div>

	
	
	
	
	
	
	
<?php	
	




}
}
?>