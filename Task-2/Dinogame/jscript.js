        xrect=565;
        yrect= 225;
        
        function animaterect() {
            
            
                var canvas = document.getElementById("obstacle");
                var context = canvas.getContext('2d');
                context.clearRect(xrect+1,yrect,30,70);
                context.beginPath();
                context.rect(xrect,yrect,30,70);
                context.fillStyle = 'yellow';
                context.fill();


                    if(xrect!= -30)
                        xrect-=1;
                    else
                        xrect=565;
            
            
       }
    
       
        
        function createplayer() {
            
                xplayer = 100;
                yplayer = 245;
                var player = document.getElementById("obstacle");
                ctext = player.getContext('2d');
                ctext.beginPath();
                ctext.rect(xplayer,yplayer,50,50);  
                ctext.fillStyle = 'black';
                ctext.fill();
        
        }
        
        createplayer();
        
        function runplayer() {
            
       
            
            if(yplayer>=0) 

                {
                    ctext.clearRect(xplayer,yplayer+2,50,50);    
                    player = document.getElementById("obstacle");
                    ctext = player.getContext('2d');
                    ctext.beginPath();
                    ctext.rect(xplayer,yplayer,50,50);  
                    ctext.fillStyle = 'black';
                    ctext.fill();  

                   yplayer-=2;
                   temp = yplayer; // storing yplayer temporarily for manipulation

                }

            else

                {     
                    if(temp!=245)

                    {
                        temp+=2;
                        ctext.clearRect(xplayer,temp-2,50,50);
                        ctext.beginPath();
                        ctext.rect(xplayer,temp,50,50);
                        ctext.fillStyle = 'black';
                        ctext.fill();


                   }

                    else


                       { 
                           clearInterval(startplayer); // to stop the player after jumping once
                          createplayer();

                       }

                 }

        }
        
        var start = setInterval(animaterect,1); // start the animaton of rectangle
        
        function startgame() {
                        
            
             startplayer = setInterval(runplayer,1);  
             c= setInterval(count,100);// start the animmation of player 
             

        }
        
         
        document.addEventListener("click",startgame); // to start the game by clicking action
        
        score = 0;
        
        function count() {
            
            
            
            if(((xrect-xplayer==50 && xrect-xplayer>0) && (yrect-yplayer<=20 ) ) || ( (xrect-xplayer<50 && xrect-xplayer >=0 ) && yrect-yplayer<=50 ) || (xplayer-xrect<=30 && xplayer-xrect > 0) && yrect-yplayer==50 )
            
            {
               
                var c = document.getElementById("obstacle");
                var ctx = c.getContext('2d');
                ctx.font = "30px Century Gothic";
                ctx.fillText("Game Over ! ", 210,50);
                
                clearInterval(start);
                clearInterval(startplayer);
                
                
                            
            }
            
            else 
                
                score++;
                document.getElementById("score").innerHTML = score;
        }
        
       
        
        
      