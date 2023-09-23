<?php

if(isset($_GET['sid'])){

$sid=$_GET['sid'];
$tid=$_GET['tid'];

include('conn.php');
$con=new con(); 
$result1=mysqli_query($con->con,"select username,pic from st_data where id=".$sid);
$row1=mysqli_fetch_array($result1);
$name=$row1[0];
$pic=$row1[1];

$result2=mysqli_query($con->con,"select count(id) from messenger where sid=".$sid." and tid=".$tid." ORDER BY id ASC;");
$row2=mysqli_fetch_array($result2);
$count=$row2[0];
?>
<input type="hidden" value="<?php echo $count ?>" id="count" />

<?php
$result5=mysqli_query($con->con,"select distinct date from messenger where sid=".$sid." and tid=".$tid." ORDER BY id ASC;");
while($row5=mysqli_fetch_array($result5)){
	$dating=$row5[0];
	?>
    <p class="w3-center w3-text-grey"><?php echo $dating?></p>
   
    <?php

$result=mysqli_query($con->con,"select * from messenger where sid=".$sid." and tid=".$tid." and date='".$dating."' ORDER BY id ASC;");
while($row=mysqli_fetch_array($result)){
$ty=$row[3];
$date=$row[4];
$time=$row[5];
$messege=$row[6];
if($ty==1){
$shn='You';
$side='w3-left';
$col='blue';
}else{
	$shn=$name;
	$side='w3-right';
	$col='green';
	}

?>	
	
	
<div class="w3-col">
<div class="<?php echo $side?> w3-card w3-light-<?php echo $col?> w3-margin"  id="focus" style="padding:0px 5px 0px 5px; border-radius:0px 10px 0px 10px; margin-left:10px; width:125px;"><p style="font-size:10px; margin-bottom:0px;"><strong><?php echo $shn?> :</strong> &nbsp;&nbsp;</p><p style="font-size:12px; text-wrap:normal; margin-top:0px; margin-bottom:0px;"><?php echo $messege?></p>
<p style="margin-top:0px; font-size:7px;"><strong><?php echo $date.' '.$time?></strong></p>
  
</div>

	
	</div>
	
	
	
	
	
<?php	
	




}

}

}












?>