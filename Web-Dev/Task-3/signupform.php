<!DOCTYPE html>
<html>
    
    <head>
        
        <title> Profile Picture </title>
        
        <style>
        
            body{
                
                background-image: url("blue_spots_background_monochrome_69084_2048x1152.jpg");
               
                
            }
            
             #signin {
                    
                    
                    font-family: Century Gothic;
                    text-align: center;
                    margin: auto;
                    margin-top: 50px;
                    background-color:#ffffff;
                    width:400px;
            }
            
            img {
                
                height:250px;
                width: 250px;
                margin:50px;
            }
            
        h3, h2 {
              
                font-family: Century Gothic;
                margin:5px;
                
            }
        
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
            
         input {
                    
                   font-family: Century Gothic;
                                
                
            }
           
            
        </style>
        
    </head>


    <body>      
        
        <?php 
           
        session_start();
        
          
          
       $fname=$_POST['fname'];
       $lname=$_POST['lname'];
       $username=$_POST['username'];
       $email=$_POST['email'];
       $password=md5($_POST['password']); // md5 hashing
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
                
                <form action="signup.php" method="post" enctype="multipart/form-data">
                
                    <input type="file" name="propic" />
                    <button type="submit" value="submit"> Next </button>
                
                
                
                </form>
        
        
        
        
        
            </div>

        
</body>

</html>
