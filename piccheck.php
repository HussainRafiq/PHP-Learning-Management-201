<?php
if(isset($_GET['vido'])){
$id=$_GET['vido'];
include('conn.php');
$ab=new con();
 $q1="select * from video where tid=".$id;
			
						
					  $result=mysqli_query($ab->con,$q1);
		 
		  while($row=mysqli_fetch_array($result)){
		  $ti_heading=$row[2];
		  $vid=$row[0];
		  $cap=$row[3];
		  $url=$row[4];
		  $status=$row[5];
		  if($status<=0){
			  $bgcol='red';
			  $warn='Your Video are in Investigate.';
			  }else{
				  $bgcol='green';
				  $warn='Your Video is Published.';
				  }
		  $i=0;
		  ?>
	<div class="w3-quarter w3-card w3-margin" style="">
    <p class="w3-<?php echo $bgcol;?> w3-text-white"><?php echo $warn;?></p>
     <video class=" w3-card" src="<?php echo $url;?>" height="200px" width="100%"></video>
     <a href="?video=<?php echo $vid;?>"><h3 class="w3-margin"><?php echo $ti_heading;?></h3></a>
   
    </div>
   	  
		  <?php
		  
		  
		  }




}
?>