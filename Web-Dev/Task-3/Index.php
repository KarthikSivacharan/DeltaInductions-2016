<!DOCTYPE>
<html>
    
    <head>
            <title> Sign Up </title>
        
            <link rel="stylesheet" type="text/css"  href="index.css"  >
    </head>
    
    <body>
        
        <?php
          
        $fname=$lname=$username=$email=$password="";
        
        ?>
    
        <div id="signin">
    
        <form action="signupuser.php" method = "post" >
        
               <input type="text" name="fname" value="<?php echo $fname; ?>" placeholder="First Name"  required/>

               <input type="text" name="lname" value="<?php echo $lname; ?>" placeholder="Last Name" required/>

               <input type="text" name="username" value="<?php echo $username; ?>" placeholder="UserName" required/>

                <input type="email" name="email" placeholder="Email" required />

               <input type="password" name="password" placeholder="Password" minlength="6" required/>

                <button type="submit" name="submit">Sign Up</button>

              
        
         </form>
            
            
        </div>
        
       

    
    </body>




</html>