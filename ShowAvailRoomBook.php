<?php

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
        
        $CheckFrom = htmlentities($_GET['CheckFrom']);
        $CHeckTo = htmlentities($_GET['CheckTo']);   
        
        $query1 = mysqli_query($Conn,"SELECT RoomAvail FROM booking_info INNER JOIN reservation_info
        ON reservation_info.BookId = booking_info.bookId INNER JOIN Room_Info ON 
        reservation_info.RoomId = Room_Info.RoomId WHERE RoomType = 'SINGLE' ");
        while($row = mysqli_fetch_array($query1))
        {
            $RoomAvailSin = $row['RoomAvail'];
        }

        $query2 = mysqli_query($Conn,"SELECT RoomAvail FROM booking_info INNER JOIN reservation_info
        ON reservation_info.BookId = booking_info.bookId INNER JOIN Room_Info ON 
        reservation_info.RoomId = Room_Info.RoomId WHERE RoomType = 'DOUBLE' ");
        while($row = mysqli_fetch_array($query2))
        {
            $RoomAvailDob = $row['RoomAvail'];
        }

       $query3 = mysqli_query($Conn,"SELECT RoomAvail FROM booking_info INNER JOIN reservation_info
        ON reservation_info.BookId = booking_info.bookId INNER JOIN Room_Info ON 
        reservation_info.RoomId = Room_Info.RoomId WHERE RoomType = 'DELUXE' ");
        while($row = mysqli_fetch_array($query3))
        {
            $RoomAvailDel = $row['RoomAvail'];
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
   
    <?php include 'PageNavigation.php' ;?> 
  
    <!-------MAIN CONTENT-------> 
  
    <div class="container">
        <div class="Containerbox">
            <div class="row">
                <div class="col-sm-8 border-right">
                    <div class="containerC embed-responsive bg-light" style="width:100%; height:1000px">
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
                                RESERVATION
                            </h4>
                        </div>
                        <div class="col-sm-8">
                            <div class="btn-group float-right">
                                <a href="#ModalTerms" class="btn btn-secondary BtnSm float-right fa fa-question" id="TermShow" > Terms</a>
                                <a href="#ModalBookDelMain" class="btn btn-secondary BtnSm float-right fa fa-check-circle" id="BookShowDelMain"> Book Now</a> 
                            </div>
                        </div>
                    </div>
                    <hr>
                    <?php
                        if($RoomAvailSin == 0)
                        {
                            echo
                            '<div class="alert alert-danger">
                                <strong>Welcome guests</strong>
                                <p>Sorry! our Single Room is not available for booking at current date.</p>
                                <p>Single Room will be available on : <?php echo $BookCheckOutSin ;?> </p>
                                <h5>Please Come again!</h5>
                            </div>';
                        }
                        elseif($RoomAvailDel == 0)
                        {
                            echo
                            '<div class="alert alert-danger">
                                <strong>Welcome guests</strong>
                                <p>Sorry! our Deluxe Room is not available for booking at current date.</p>
                                <p>Double Room will be available on : <?php echo $BookCheckOutSin ;?> </p>
                                <h5>Please Come again!</h5>
                            </div>';
                        }
                        elseif($RoomAvailDob == 0)
                        {
                            echo
                            '<div class="alert alert-danger">
                                <strong>Welcome guests</strong>
                                <p>Sorry! our Double Room is not available for booking at current date.</p>
                                <p>Deluxe Room will be available on : <?php echo $BookCheckOutSin ;?> </p>
                                <h5>Please Come again!</h5>
                            </div>';
                        }
                        else
                        {
                            echo
                            '<div class="alert alert-info">
                                <strong>Welcome guests</strong>
                                <p>our room is availabel for booking no conflict at current date.</p>
                                <h5>Hope you Enjoy!</h5>
                            </div>';
                        }
                    ?>
                    <hr>
                    <div class="card">
                        <div class="card-header">
                           <labe class="label-control fa fa-check-circle"> Available Rooms</labe>
                        </div>
                        <div class="card-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fa fa-calendar"> From : </span>
                                    </div> 
                                </div>
                                <label class="form-control"> <?php echo $CheckFrom;?></label>
                                <div class="input-group-text"> 
                                    <span class="fa fa-calendar"> To : </span>
                                </div>
                                <label class="form-control"> <?php echo $CHeckTo;?></label>
                            </div>
                            <hr>
                            <div class="input-group">
                               <div class="input-group-prepend">
                                  <div class="input-group-text">
                                      <span class="fa fa-angle-double-right"></span>
                                  </div>    
                               </div>
                               <label class="form-control fa fa-hotel"> SINGLE ROOM</label>
                               <label class="form-control fa fa-angle-right"> <?php echo $RoomAvailSin; ?> Room(s) Available</label>
                            </div>
                            <hr>
                            <div class="input-group">
                               <div class="input-group-prepend">
                                   <div class="input-group-text">
                                       <span class="fa fa-angle-double-right"></span>
                                   </div>
                               </div>
                               <label class="form-control fa fa-hotel"> DOUBLE ROOM</label>
                               <label class="form-control fa fa-angle-right"> <?php echo $RoomAvailDob; ?> Room(s) Available</label>
                            </div>
                            <hr>
                            <div class="input-group">
                               <div class="input-group-prepend">
                                   <div class="input-group-text">
                                       <span class="fa fa-angle-double-right"></span>
                                   </div>
                               </div>
                               <label class="form-control fa fa-hotel"> DELUXE ROOM</label>
                               <label class="form-control fa fa-angle-right"> <?php echo $RoomAvailDel; ?> Room(s) Available</label> 
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