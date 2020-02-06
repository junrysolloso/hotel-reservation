<?php
    
    $Conn = mysqli_connect("Localhost","root","");
    if(!$Conn)
    {
     die(mysql_errno("Error while stablishing a connection : "));
    }
    else
    {
        mysqli_select_db($Conn,"ReservationSystem"); 
    }

?>