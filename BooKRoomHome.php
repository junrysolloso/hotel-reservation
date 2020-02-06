<?php

    session_start();
    $_SESSION['user'] = 1;

    include 'header.php';
    include 'TermsCondition.php';
    include 'ClientLogin.php';
    include 'AboutUs.php';
    include 'ContactUs.php';
    include 'CheckAvailRoom.php';
    include 'ShowAvailRoom.php';
    include 'RegisterClient.php';
    include 'BookRoom.php';
    include 'ShowImageSin.php';   
    include 'ShowImageDob.php';
    include 'ShowImageDel.php';
    include 'DBConnection.php';

    if(isset($_GET['submit']))
    {
        
        /*-------------GETTING VALUES---------------*/
        
        $CFullname = htmlentities($_GET['CFullname']);
        $CAddress = htmlentities($_GET['CAddress']);
        $CEmail = htmlentities($_GET['CEmail']);
        $CCpNo = htmlentities($_GET['CCpNo']);
        $CNoP = htmlentities($_GET['CNoP']);
        
        $NoRoomSin = htmlentities($_GET['NoRoomSin']);
        $NoRoomDob = htmlentities($_GET['NoRoomDob']);
        $NoRoomDel = htmlentities($_GET['NoRoomDel']);
        
        $BookFrom = htmlentities($_GET['BookFrom']);
        $BookTo = htmlentities($_GET['BookTo']);    
        
        /*-------------INSERTING VALUES TO DB---------*/
        
        mysqli_query($Conn, "INSERT INTO client_info (Fullname, Address, ContactNo, EmailAdd)
        VALUES ('$CFullname', '$CAddress', '$CCpNo', '$CEmail') ");
        
        $query1 = mysqli_query($Conn, "SELECT MAX(ClientId) FROM Client_Info");
        while ($row = mysqli_fetch_array($query1))
        {
            $ClientId = $row['MAX(ClientId)'];
            $ConfirmCode = $ClientId + 129999;
        }
        
        /*-------------BOOK SINGLE ROOM----------------*/
        
        error_reporting(0);
        if($_GET['CheckSin'] == 1)
        {
            $RoomType = 'SINGLE';
            $query1 = mysqli_query($Conn, "SELECT RoomCost FROM room_info WHERE RoomType = '$RoomType'");
            while ($row = mysqli_fetch_array($query1))
            {
                $RoomCostSin = $row['RoomCost'];
            }
            
            mysqli_query($Conn, "INSERT INTO booking_info (CheckIn, CheckOut, NoPersons, NoRooms, TotalPay)
            VALUES ('$BookFrom', '$BookTo', '$CNoP', '$NoRoomSin', '$RoomCostSin')");
            
            mysqli_query($Conn,"INSERT INTO confirm_info (ConfirmStatus, ConfirmCode)
            VALUES ('NO', '$ConfirmCode')");

            $query1 = mysqli_query($Conn, "SELECT MAX(BookId) FROM booking_info");
            while ($row = mysqli_fetch_array($query1))
            {
                $BookId = $row['MAX(BookId)'];
            }

            $query2 = mysqli_query($Conn, "SELECT MAX(ConfirmId) FROM confirm_info");
            while ($row = mysqli_fetch_array($query2))
            {
                $ConfirmId = $row['MAX(ConfirmId)'];
            }

            $query3 = mysqli_query($Conn, "SELECT RoomId FROM room_Info WHERE RoomType = '$RoomType' ");
            while ($row = mysqli_fetch_array($query3))
            {
                $RoomId = $row['RoomId'];
            }

            mysqli_query($Conn, "INSERT INTO reservation_info (ClientId, BookId, RoomId, ConfirmId)
            VALUES ('$ClientId', '$BookId', '$RoomId', '$ConfirmId')");
        }
        if($_GET['CheckDob'] == 1)
        {
            $RoomType = 'DOUBLE';
            $query1 = mysqli_query($Conn, "SELECT RoomCost FROM room_info WHERE RoomType = '$RoomType'");
            while ($row = mysqli_fetch_array($query1))
            {
                $RoomCostDob = $row['RoomCost'];
            }
            
            mysqli_query($Conn, "INSERT INTO booking_info (CheckIn, CheckOut, NoPersons, NoRooms, TotalPay)
            VALUES ('$BookFrom', '$BookTo', '$CNoP', '$NoRoomDob', '$RoomCostDob')");
            
            mysqli_query($Conn,"INSERT INTO confirm_info (ConfirmStatus, ConfirmCode)
            VALUES ('NO', '$ConfirmCode')");

            $query1 = mysqli_query($Conn, "SELECT MAX(BookId) FROM booking_info");
            while ($row = mysqli_fetch_array($query1))
            {
                $BookId = $row['MAX(BookId)'];
            }

            $query2 = mysqli_query($Conn, "SELECT MAX(ConfirmId) FROM confirm_info");
            while ($row = mysqli_fetch_array($query2))
            {
                $ConfirmId = $row['MAX(ConfirmId)'];
            }

            $query3 = mysqli_query($Conn, "SELECT RoomId FROM room_Info WHERE RoomType = '$RoomType' ");
            while ($row = mysqli_fetch_array($query3))
            {
                $RoomId = $row['RoomId'];
            }

            mysqli_query($Conn, "INSERT INTO reservation_info (ClientId, BookId, RoomId, ConfirmId)
            VALUES ('$ClientId', '$BookId', '$RoomId', '$ConfirmId')");
        }
        if($_GET['CheckDel'] == 1)
        {
            $RoomType = 'DELUXE';
            $query1 = mysqli_query($Conn, "SELECT RoomCost FROM room_info WHERE RoomType = '$RoomType'");
            while ($row = mysqli_fetch_array($query1))
            {
                $RoomCostDel = $row['RoomCost'];
            }
            
            mysqli_query($Conn, "INSERT INTO booking_info (CheckIn, CheckOut, NoPersons, NoRooms, TotalPay)
            VALUES ('$BookFrom', '$BookTo', '$CNoP', '$NoRoomDel', '$RoomCostDel')");
            
            mysqli_query($Conn,"INSERT INTO confirm_info (ConfirmStatus, ConfirmCode)
            VALUES ('NO', '$ConfirmCode')");

            $query1 = mysqli_query($Conn, "SELECT MAX(BookId) FROM booking_info");
            while ($row = mysqli_fetch_array($query1))
            {
                $BookId = $row['MAX(BookId)'];
            }

            $query2 = mysqli_query($Conn, "SELECT MAX(ConfirmId) FROM confirm_info");
            while ($row = mysqli_fetch_array($query2))
            {
                $ConfirmId = $row['MAX(ConfirmId)'];
            }

            $query3 = mysqli_query($Conn, "SELECT RoomId FROM room_Info WHERE RoomType = '$RoomType' ");
            while ($row = mysqli_fetch_array($query3))
            {
                $RoomId = $row['RoomId'];
            }

            mysqli_query($Conn, "INSERT INTO reservation_info (ClientId, BookId, RoomId, ConfirmId)
            VALUES ('$ClientId', '$BookId', '$RoomId', '$ConfirmId')");
        }
    }
    mysqli_free_result($query1);
    mysqli_free_result($query2);
    mysqli_free_result($query3);
    mysqli_close($Conn);
?>

<!DOCTYPE html>
<html>
<body>
   
    <!-------NAVIGATION CONTENT------->
   
    <?php include 'PageNavigation.php';?> 
  
    <!-------MAIN CONTENT-------> 
  
    <div class="container">
        <div class="Containerbox">
            <div class="row">
                <div class="col-sm-8 border-right">
                    <div class="containerC embed-responsive bg-light" style="width:100%; height:1000px">
                    <hr>
                    <form action = "ConfirmRef.php" method = "GET">
                        <div class="alert alert-info">
                            <div class="alert alert-primary">
                                <i>Enter your reference number that was sent to you by the smart.
                                    for confirming your payment.<br>
                                <strong>Note: </strong> If the reference number will not be sent
                                the booking will also be canceled.
                                </i>
                            </div>
                            <div class="alert alert-primary">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="fa fa-pencil"> Enter your reference number : </span>
                                        </div>
                                        <div class="input-group-text">
                                            <span class="fa fa-angle-double-right"> </span>
                                        </div>
                                        <input type="text" class="form-control" name="ConfirmRef" placeholder="Reference number">
                                        <button type="submit" class="btn btn-secondary fa fa-opencart" name="submit" value="send"> Enter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="carousel">
                        <img class="MySlides" width="100%" height="500px" src="img/room-types-650x370-guest-room-3.jpg">
                        <img class="MySlides" width="100%" height="500px" src="img/3206101.jpg">
                        <img class="MySlides" width="100%" height="500px" src="img/bg1.jpg">
                        <img class="MySlides" width="100%" height="500px" src="img/room-types-650x370-guest-room-3.jpg">
                        <img class="MySlides" width="100%" height="500px" src="img/SetWidth760-Grand-hotel-Union-Deluxe-Single-2-Room.jpg">
                    </div>   
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <h4 style="font-family: Tahoma">
                                COME AGAIN!
                            </h4>
                        </div>
                        <div class="col-sm-8">
                            <div class="btn-group float-right">
                                <a href="#ModalTerms" class="btn btn-secondary float-right fa fa-question" id="TermShow" > Terms of service</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    </div>
                </div>
                
                <!-------IMAGE THUMBNAILS------->
                
                <?php include 'ShowRoomThumbnails.php'; ?>
                
            </div>
        </div>
    </div>
    
    
    <!-------SCRIPT FOR MODAL------->
    
    <script src="js/ShowModal.js"></script>
    
    <!-------FOOTER CONTENT------->
    
    <?php include 'Footer.php'; ?>
    
    <!-------SCRIPT FOR AUTOSLIDE------->
    
    <script>
        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("MySlides");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none"; 
            }
            slideIndex++;
            if (slideIndex > x.length) {slideIndex = 1} 
            x[slideIndex-1].style.display = "block"; 
            setTimeout(carousel, 5000); // Change image every 2 seconds
        }
    </script>
    
</body>
</html>