var obstacle = {
    
    x:"565",
    y:"225"
    
} ;

var dino = {
    
    x:"100" ,
    y:"245"
    
};


        obstacle.x=565;
        obstacle.y= 225;
        
        function animaterect() {
            
            
                var canvas = document.getElementById("obstacle");
                var context = canvas.getContext('2d');
                context.clearRect(obstacle.x+1,obstacle.y,30,70);
                context.beginPath();
                context.rect(obstacle.x,obstacle.y,30,70);
                context.fillStyle = 'yellow';
                context.fill();


                    if(obstacle.x!= -30)
                        obstacle.x-=1;
                    else
                        obstacle.x=565;
            
            
       }
    
       
        
        function createplayer() {
            
                dino.x = 100;
                dino.y = 245;
                var player = document.getElementById("obstacle");
                ctext = player.getContext('2d');
                ctext.beginPath();
                ctext.rect(dino.x,dino.y,50,50);  
                ctext.fillStyle = 'black';
                ctext.fill();
        
        }
        
        createplayer();
        
        function runplayer() {
            
       
            
            if(dino.y>=0) 

                {
                    ctext.clearRect(dino.x,dino.y+2,50,50);    
                    player = document.getElementById("obstacle");
                    ctext = player.getContext('2d');
                    ctext.beginPath();
                    ctext.rect(dino.x,dino.y,50,50);  
                    ctext.fillStyle = 'black';
                    ctext.fill();  
                    gravity = 1;
                   dino.y = dino.y - 2 + gravity;
                   temp = dino.y; // storing dino.y temporarily for manipulation
                    gravity = gravity + 0.015;

                }

            else

                {     
                    if(temp<=245)

                    {   gravity = 0.05;
                        temp = temp + 2 + gravity ;
                        gravity = gravity + 0.015;
                        ctext.clearRect(dino.x,temp-3,50,50);
                        ctext.beginPath();
                        ctext.rect(dino.x,temp,50,50);
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
                        
             var startsound = new Audio("beep-07.mp3");
             startsound.play();
             startplayer = setInterval(runplayer,1);  
             c= setInterval(count,100);// start the animmation of player 
             

        }
        
         
        document.addEventListener("click",startgame); // to start the game by clicking action
        
        score = 0;
        
        function count() {
            
                
            
            
            if(((obstacle.x-dino.x==50 && obstacle.x-dino.x>0) && (obstacle.y-dino.y<=20 ) ) || ( (obstacle.x-dino.x<50 && obstacle.x-dino.x >=0 ) && obstacle.y-dino.y<=50 ) || (dino.x-obstacle.x<=30 && dino.x-obstacle.x > 0) && obstacle.y-dino.y==50 )
            
            {
               
              
                
                var c = document.getElementById("obstacle");
                var ctx = c.getContext('2d');
                ctx.font = "30px Century Gothic";
                ctx.fillText("Game Over ! ", 210,50);
                              
                
                clearInterval(start);
                clearInterval(startplayer);
                 
                            
            }
            
            else 
                
               { score++;
                document.getElementById("score").innerHTML = score;
               }
            
            
                    
            
        }

        
       
       
      