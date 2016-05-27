
    function countdown() {
        
        var current = new Date();    
        var remainingtime =  Date.parse(launchdate) - Date.parse(current) ;
        var time = remainingtime/1000;
            
        var sec = (time)%60 ;
        var minutes = (time/60)%60;
        var hours = ((time/60)/60)%24;
        var days = ((time/60)/60)/24;
                          
        document.getElementById('days').innerHTML = Math.floor(days);
        document.getElementById('hours').innerHTML = Math.floor(hours);
        document.getElementById('minutes').innerHTML = Math.floor(minutes);
        document.getElementById('seconds').innerHTML = Math.floor(sec);
               
                
            if(remainingtime<=0)
                
                {
                        clearInterval(process);
                                                                     
                    }
            
            
     }
            

        var launchdate = new Date(2016,5,24,3,02);
                    
        countdown();
            
        var process = setInterval(countdown,1000);
    
        