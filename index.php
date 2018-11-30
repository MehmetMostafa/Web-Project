<?php
include_once"database.php";
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <div class="cont">
            <div>
                <font size="6" sty 
                      

            </div>
            <div class="insert">
            <div class="insert_item">
            <form action="display.php" method="POST">
            
                <input class="txt1" type="text" name="depart"  placeholder="current_station" heddin=null  required/><br>
                <input class="txt2" type="text" name="arrive"  placeholder="destnation" heddin=null  required/><br>
                <!--<input class="txt3" type="text" name="class"  placeholder="class" heddin=null /><br>-->
                  <select name="class">
                    
                    <option value="Express">Express</option>
                    <option value="VIP-1">VIP-First Grade</option>
                    <option value="VIP-2">VIP-Second Grade</option>
                    <option value="SLEEPING-1">Sleep_First Grade</option>
                    <option value="SLEEPING-2">Sleep_Second Grade</option>
                    <option value="DISTINCTIVE">Distinct</option>
                </select>
                <input class="btn" type="submit" value="SEARCH" name="GO" size=20px /><br>
              
            </form>
            </div>
            </div>
        </div>
        </div>>
          
    </body>
</html>