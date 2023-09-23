<?php
if(isset($_GET['txt']) && isset($_GET['sid']) && isset($_GET['tid'])){
$txt=$_GET['txt'];
$sid=$_GET['sid'];
$tid=$_GET['tid'];
$ty=$_GET['ty'];
include('conn.php');
$con=new con();
$q="insert into messenger values(null,".$tid.",".$sid.",".$ty.",'".date("F d, Y")."','".date("h:i:s A")."','".$txt."')";
mysqli_query($con->con,$q);







echo 'Sended'; 
}
else{
?>
<script>
window.location.href="student.php";
</script>
<?php
}
?>