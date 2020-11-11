<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>php</title>
    </head>
    <body style="background-color:pink">
        <div style="color:blue">
            <center>
                <h1><it>print odd number from 1 to 100 using while</it></h1>
                <?php
                $i=1;
                while($i<=100){
                  if($i%2!=0)
                      echo$i;
                  echo"<br>";
                  $i++;
                }
                ?>
              
                
            </center>
            
        </div>
          
   
    </body>
</html>
