<!DOCTYPE html>
<html>
    
    <head>
        
        <title> Profile Picture </title>
        
        <link rel="stylesheet" type="text/css" href="signupuser.css">
        
    </head>


    <body>      
        
        <?php 
           
        session_start();
        
        function validate($data) {
            
            $data=trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            
            
        }
          
          
       $fname= validate($_POST['fname']);
       $lname=validate($_POST['lname']);
       $username=validate($_POST['username']);
       $email=validate($_POST['email']);
       $password=md5(validate($_POST['password'])); // md5 hashing
       $Image="";
        
        $_SESSION['username']=$username; //storing username in a session variable
        $_SESSION['email']=$email; // storing email in  session variable

                        

       $con = mysqli_connect("localhost","root","","Delta");
      

        if($con)
        {            
            
           $sql = "INSERT INTO users VALUES('$fname','$lname','$username','$email','$password','$Image')";
           $test = mysqli_query($con,$sql);
                        
            
        }

        
        else 
            
            die('Error Connecting DataBase - '.mysqli_connect_error());


?>
        
            <div id="signin">
                
                <h2> Hey! <?php echo $_POST['fname'] ?> </h2> <br/>
                <h3> Go on ! Show Us How You Look !</h3> 
                <h1 id="error"><?php echo $_SESSION['imgerror']; ?></h1>
                <img src="propic.jpg">
                
                <form action="loginuser.php" method="post" enctype="multipart/form-data">
                
                    <input type="file" name="propic" />
                    <button type="submit" value="submit"> Next </button>
                
                
                
                </form>
        
        
        
        
        
            </div>

        
</body>

</html>
