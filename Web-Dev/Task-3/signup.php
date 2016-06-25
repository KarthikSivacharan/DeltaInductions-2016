<!DOCTYPE html>
<html>
    <head>
    
            <title> SignUp Complete </title>
        
            <style>
        
        
                 button {
                    
                    font-family: Century Gothic;
                    font-size: 25px;
                    padding:10px 20px 10px 20px;
                    border: none;
                    text-align: center;
                    background-color: #ff6600;
                    color:#ffffff;
                    margin:10px;
                    cursor: pointer;
                    
                }
                
                 h1, h2 {
              
                font-family: Century Gothic;
                margin:5px;
                
            }
        
                #login {
                    
                    
                    font-family: Century Gothic;
                    text-align: center;
                    margin: auto;
                    margin-top: 100px;
                    background-color:#ffffff;
                    width:600px;
                    padding:20px;
                }
                
                
            body{
                
                background-image: url("blue_spots_background_monochrome_69084_2048x1152.jpg");
               
                
            }
                 input {
                    
                    height:40px;
                    font-family: Century Gothic;
                    font-size: 20px;
                    display: inline-block;
                    margin: 30px;
                    text-align: center;
                    
                }
        
                form {
                    
                    font-family: Century Gothic;
                    font-size: 25px;
                }
                
                #error {
                    
                    font-family: Century Gothic;
                    font-size: 20px;
                    color:#ff0000;
                }
        
            </style>
    
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

          <form action="login.php" method="post">
               
              <input type="email" name="LoginUsername" placeholder="Email" required />
              <input type="password" name="LoginPassword" placeholder="Password" required />

              <button type="submit" value="submit">Log In</button>

          </form>
          
          
        </div>  
        
        
        
        
        
    </body>
</html>