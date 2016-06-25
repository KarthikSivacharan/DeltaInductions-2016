<!DOCTYPE>
<html>
    
    <head>
            <title> Sign Up </title>
    
            <style>
                
                input {
                    
                    height:40px;
                    font-family: Century Gothic;
                    font-size: 20px;
                    display: inline-block;
                    margin: 30px;
                    text-align: center;
                    
                }
                
                input:invalid {
                    
                    border:1.5px solid #ff0000;
                }
                
                input:valid {
                    
                    border:1.5px solid #00cc00;
                }
        
                form {
                    
                    font-family: Century Gothic;
                    font-size: 25px;
                }
                
                #signin {
                    
                    display: inline-block;
                    text-align: center;
                    margin-left: 35%;
                    margin-top: 2%;
                    background-color:#ffffff;
                    width:400px;
                    
                }
                
                #error 
                {
                    font-size: 15px;
                    color:#ff0000;
                    font-family: Century Gothic;
                    
                }
                
                button {
                    
                    font-family: Century Gothic;
                    font-size: 25px;
                    padding:10px 20px 10px 20px;
                    border: none;
                    text-align: center;
                    background-color: #ff6600;
                    color:#ffffff;
                    cursor:pointer;
                }
                
                body {
                    
                    background-image: url("blue_spots_background_monochrome_69084_2048x1152.jpg");
                }
                
            </style>
    </head>
    
    <body>
        
        <?php
          
        $fname=$lname=$username=$email=$password="";
        
        ?>
    
        <div id="signin">
    
        <form action="signupform.php" method = "post" >
        
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