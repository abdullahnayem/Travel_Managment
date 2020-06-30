<?php
         $servername = "localhost";
         $username = "root";
         $password ="";
         $databasename="passwordholder";
         $con = new mysqli($servername,$username,$password,$databasename); 

if(connection_status())
{
    echo'Okay';
}

if(isset($_POST['SubmitButton']))
{
    echo "Value added on the database,refresh your data base";
    
    $username = $_POST['usernamefromform'];
    $userAddress = $_POST['useraddressfromform'];
     $mobile = $_POST['usermobilefromform'];
    $passweord = $_POST['userpasswordfromform'];
    
   $sql = mysqli_query($con,"insert into usertable (NAME,ADDRESS,MOBILE,PASS) values ('$username','$userAddress','$mobile','$passweord')");
}


?>