<html>
    <head> 
               

<style >
    #time{
         font-size:  30px;
         font-weight:    400;
         color: blue;
         
        
    }   
            
        </style>
    </head>
    
    <body>
        
        <div id = "refresh">
        
        <?php
         $holder1 =  "<span id = time>".date('h')."</span>";
         $holder2 =  "<span id = time>".date('i')."</span>";
         $holder3 =  "<span id = time>".date('s')."</span>";
          echo  $holder1; 
          echo ':';
          echo  $holder2; 
           
          echo ':' ;
          echo  $holder3; 
         
        
        ?>
        
    </div>
    </body>
    
    
</html>