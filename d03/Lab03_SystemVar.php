<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>System variable</title>
    </head>
    <body>
        <h2>System Variable</h2>
        <hr>
        
        <?php
        echo "<b>SERVER_SOFTWARE: </b>".$_SERVER['SERVER_SOFTWARE']."<br>";
         echo "<b>SERVER_NAME: </b>".$_SERVER['SERVER_NAME']."<br>";
         echo "<b>SERVER_Protocol: </b>".$_SERVER['SERVER_PROTOCOL']."<br>";
         echo "<b>SERVER_Port: </b>".$_SERVER['SERVER_PORT']."<br>";
         echo "<b>Borwer: </b>".$_SERVER['HTTP_USER_AGENT']."<br>";
         echo "<b>Media type: </b>".$_SERVER['HTTP_ACCEPT']."<br>";
        ?>
    </body>
</html>
