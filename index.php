<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <link rel =" stylesheet" href="f.css">

        
       
    </head>
    <body >
        <?php
        // put your code here
        ?>
        
             <h3 style="text-align: center;border: 1px solid black;background-color:blanchedalmond;border-radius: 2px;height: 50px;">Registration Form</h3>
                    <div class="inputbox">
            
              <form action="HelperofDatabase.php" method="post" >
                
            
           
                    <label>Username</label><br>
                    <input type ="text" name="usernamefromform" required="" ><br>

                      
                    <label>Address</label><br>

                    <input type="text" name="useraddressfromform" required=""><br>

                    

                    <label>Mobile No</label><br>
                    <input type ="text" name="usermobilefromform" required=""><br>

                    
           
                     <label>Password</label><br>
                    <input type="password" name="userpasswordfromform" required=""><br>

                   
                
                <br><br>
                <input type="Submit" name="SubmitButton" value="Registration" style="text-align: center">
                <h5>Already Registered? <a href="loginPage.php">Login</a></h5>
            </form>
</div>
    <div class="na">
        <nav>
            <ul >
                <li><a href="projecket.html" style="color: white">HOME</a></li> 
                <li><a href="loginPage.php" style="color: white">LOGIN&nbsp;</a></li> 
            </ul>
        </nav>
        </div>
                
    </body>
</html>
