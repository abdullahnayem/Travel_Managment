<?php

$conn = mysqli_connect('localhost','root','','passwordholder');
if(isset($_POST['submit']))
{

$s = date("sihdmy").str_replace(" ","_",$_FILES['image']['name']);
$destination = "images/".$s;
$filename =  $_FILES['image']['tmp_name'];
move_uploaded_file($filename, $destination);

$spotname= ($_POST['spotname']);
$Location=($_POST['location']);
$Description = $_POST['descr'];
$query = "INSERT INTO `add_place`(`SpotName:`, `Location:`, `Image:`, `Description:`) VALUES ('$spotname','$Location','$destination','$Description');
";
 $sql = mysqli_query($conn,$query);
 //echo $newdate;

 if($sql){
echo "done";
}
else
{
	echo "error";
}
 
}
?>