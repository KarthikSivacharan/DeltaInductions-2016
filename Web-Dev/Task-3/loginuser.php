<!DOCTYPE html>
<html>
    <head>
    
            <title> SignUp Complete </title>
        
            <link rel="stylesheet" type="text/css" href="loginuser.css">
    
    </head>

    
    <body>


<?php
    
     session_start();
        
       $UserName = $_SESSION['username'];
        $Email = $_SESSION['email'];  
    

    if(isset($_FILES['propic'])) 
    {
        
        $ImageName = $_FILES['propic']['name'];
        $ImageTemp = $_FILES['propic']['tmp_name'];
        $ImageType = $_FILES['propic']['type'];
        $ImageSize = $_FILES['propic']['size'];
        
        
         
        $_SESSION['error']=""; // to store an empty string to the session varibale which gets asigned a error string if error occurs during login
        
        
        
        
        if(!$ImageTemp){
            
            die('Please Select an Image');
            
        }
        
        else {
            
            move_uploaded_file($ImageTemp,"Upload/$ImageName");
           
            
            $con = mysqli_connect('localhost','root','','delta');
            
            if(!$con)
            {
                die('Error Connecting Database');
            }
            
            else
                
            
            {
               $sql = "UPDATE users SET image = '$ImageName' WHERE username = '$UserName' AND email = '$Email' ";
                
                mysqli_query($con,$sql);                
            
            
        }
        
        
        
        
        }
    }




?>
        
      <div id="login">    

          <h1> Hey! <?php echo $UserName ; ?></h1>  
          <h2> You Have Succesfully Created Your Account!</h2>  
          <h2> Login In To Continue. </h2>  
          <h2 id="error"><?php echo $_SESSION['error']; ?></h2>

          <form action="home.php" method="post">
               
              <input type="email" name="LoginUsername" placeholder="Email" required />
              <input type="password" name="LoginPassword" placeholder="Password" required />

              <button type="submit" value="submit">Log In</button>

          </form>
          
          
        </div>  
        
        
        
        
        
    </body>
</html>