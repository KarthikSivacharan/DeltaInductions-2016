    
            var flag =0;
            var d;
            
            function input() {
                
                var dys = document.getElementById("days").value;
                var hrs = document.getElementById("hrs").value;
                var min = document.getElementById("min").value;
                var sec = document.getElementById("sec").value;
                
                 convert = (dys*24*60*60) + (hrs*60*60) + (min*60)  + (1*sec);
               // document.getElementById("demo").innerHTML = convert; -- to print and check values
                
            }
            
            function countdown() {
                
                if(flag == 1 && convert >= 0)
                   
                {
 
                                       
                        var convsec = (convert%60);
                        var convmin = (convert/60)%60;
                        var convhrs = ((convert/60)/60)%24;
                        var convdays = ((convert/60)/60)/24;
                    
                        document.getElementById("Days").innerHTML = Math.floor(convdays);
                        document.getElementById("hours").innerHTML = Math.floor(convhrs);
                        document.getElementById("minutes").innerHTML = Math.floor(convmin);
                        document.getElementById("seconds").innerHTML = Math.floor(convsec);
                        
                         convert--;
                    }
            }
        
            function starttimer() {
                
                flag =1;
                d= setInterval(countdown,1000);
                
            }
            
            function stoptimer() {
                
                flag = 0;
                clearInterval(d);
            }
            
            function resettimer()
            
            {
                flag = 0;
                clearInterval(d);
                document.getElementById("Days").innerHTML = 00 ;
                document.getElementById("hours").innerHTML = 00 ;
                document.getElementById("minutes").innerHTML = 00 ;
                document.getElementById("seconds").innerHTML = 00 ;
                
                input();
                
            }
        
       