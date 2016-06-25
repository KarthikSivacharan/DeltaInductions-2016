
    

<?php

    session_start();

    $LogUsername = $_POST['LoginUsername'];
    $LogPassword = md5($_POST['LoginPassword']);

    



   $con = mysqli_connect('localhost','root','','delta');
    
    if(!$con)
    {
        die('Error Connecting DataBase');
        
    }

    else {
            
        
      $sql = "SELECT * FROM users where email='$LogUsername' AND password='$LogPassword' ";
        
      $result = mysqli_query($con,$sql);
        
       $count = mysqli_num_rows($result); //if the password and email match there will one row assigne to count.
        
        if($count==1)
            
        {
          
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
      $image = $row['image'];
        
        }
        
        else 
        {    
            $_SESSION['error']="Oops! Invalid Details - Try Again!";
            header('location:signup.php');
            
        }
        
              
    }

  $dir = "Upload/";   // Directory where images get uploaded 

?>


<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $row['firstname']; ?></title>
        
        <style>
        
        
            body {
                
                background-color: #03a9f4;
            }
            
            #details {
                
                
                background-color: #ffffff;
                width:450px;
                height: 550px;
                text-align: center;
                float: right;
                margin-top:5% ;
                margin-right:10%;
            }
        
           h1 {
                
                font-family: Century Gothic;
                padding:5px;
                
            }
            h2 {
                
                font-family: Century Gothic;
                padding:5px;
                color:#ff6600;
                
            }
            
            img {
                
                width:400px;
                height:400px;
                margin-top: 40px;

            }
            
            #image {
                
                background-color: #ffffff;
                float:left;
                margin-top: 5%;
                margin-left:10%;
                width:450px;
                height: 550px;
                text-align: center;
                
                
            }
            
            
        </style>
        
    </head>
    
    <body>
        
       
        <div id="details">
        
        
            <h1> First Name </h1>
            <h2> <?php echo $row['firstname']; ?></h2>
            <h1> Last Name </h1>
            <h2><?php echo $row['lastname']; ?></h2>
            <h1> UserName </h1>
            <h2><?php echo $row['username']; ?></h2>
            <h1>Email</h1>
            <h2><?php echo $row['email']; ?></h2>
                             
        
        </div>
        
        <div id="image">
        
               
          <img src="<?php echo "$dir"."$image" ; ?>">  <!-- $image contains the name of the file - the image is stored in a separate folder named "Upload adn only the image name is stored in the database  -->
            
           <h1> Profile Picture</h1> 
            
        </div>
        
        
    </body>
    
</html>