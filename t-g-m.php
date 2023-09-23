<?php
if(isset($_GET['tid'])){

$tid=$_GET['tid'];

include('conn.php');
$con=new con();
$result=mysqli_query($con->con,"select distinct sid from messenger where tid=".$tid."  ORDER BY id DESC");
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_array($result)){
$sid=$row[0];
$result1=mysqli_query($con->con,"select username,pic from st_data where id=".$sid);
$row1=mysqli_fetch_array($result1);
$name=$row1[0];
$pic=$row1[1];
?>
<hr style="margin:0px;" />

<span  onclick="clik(<?php echo $sid?>)" style="cursor:pointer; ">
<div  class="w3-gray w3-hover-light-gray w3-card" style=" height:60px;"><img src="<?php echo $pic?>" style="margin:7.5px;" width="45px" height="45px" /><span style="font-size:15px; text-transform:uppercase; font-family:'Arial Black', Gadget, sans-serif"><?php echo $name?></span></div></span>
<hr style="margin:0px;" />
<?php
}
}

}else{
	?>
    <script>
    window.location.href="student.php";
    </script>
	<?php
	}
?>