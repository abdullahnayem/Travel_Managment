<?php
 $servername = "localhost";
        $username = "root";
         $password ="";
         $databasename="passwordholder";
            $con = new mysqli($servername,$username,$password,$databasename); 
            global  $username10;
            global $passweord10;if(isset($_POST['loginButton']))
{    
    $username10 = ($_POST['usernamefromform']);
    $passweord10 = ($_POST['userpasswordfromform']);
}
        
$sql3 = mysqli_query($con,"select * from  usertable");
$fl = false;
while($result = mysqli_fetch_array($sql3))
{
    if($username10 == $result['NAME'] && $passweord10 == $result['PASS'])
    {
        $fl = true;
    }
}
    if($fl==true)
    { 
        
           header("Location:add.php");        
    }
    else
    {
        echo 'Failed,Wrong Username/Password';
    }
?>