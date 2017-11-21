<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <table border = "1">
        <?php
            for ($aantalRijen = 0; $aantalRijen < 3; $aantalRijen++) {
                print("<tr>");
                    for ($aantalKolommen = 0; $aantalKolommen < 3; $aantalKolommen++){    
                        print("<td>" . "rij =" . $aantalRijen . " kolom =" . $aantalKolommen . "</td>");
                    }
                print("</tr>");                                  
            }
           
            
        ?> 
        </table>
        
    </body>
</html>
