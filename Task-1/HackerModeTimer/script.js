         
        function input()
         {
             
             launchdate = document.getElementById("launch").value; 
             d = Date.parse(launchdate);
         
         }
         
    
        var countdown = setInterval(timer,1000);
         
    
        function timer()
         {
             var currentdate = new Date();
             var timecorrection = currentdate.getTimezoneOffset()*60*1000 ; //Time zone correction returns value in minutes - So converting to Milliseconds 
             
             var currenttime = Date.parse(currentdate);
             var remtime = d - currenttime + timecorrection;
             
             var time = remtime/1000;
             
                if(remtime>0)
            
          {         var sec = (time)%60 ;
                    var minutes = (time/60)%60;
                    var hours = ((time/60)/60)%24;
                    var days = ((time/60)/60)/24;
             
                    document.getElementById("days").innerHTML = Math.floor(days);
                    document.getElementById("hours").innerHTML = Math.floor(hours);
                    document.getElementById("minutes").innerHTML = Math.floor(minutes);
                    document.getElementById("seconds").innerHTML = Math.floor(sec);
            
          }
             
                else 
                    
                 {
                     clearInterval(timer);
                     document.getElementById("timer").style.visibility = "hidden";
                     document.getElementById("launchinput").style.visibility = "hidden";
                     document.body.style.backgroundImage = "url(bg2.jpg)";
                 }
             
                 
         }
         
        
              
     
   