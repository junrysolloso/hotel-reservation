<?php

    include 'header.php';
    include 'TermsCondition.php';
    include 'AboutUs.php';
    include 'ContactUs.php';
    include 'CheckAvailRoom.php';
    include 'ShowAvailRoom.php';
    include 'RegisterClient.php';
    include 'BookRoom.php';
    include 'ClientLogin.php';
    include 'ShowImageSin.php';   
    include 'ShowImageDob.php';
    include 'ShowImageDel.php';
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
                    <div class="containerC bg-light" style="width:100%; height:1000px">
                    <img width="100%" height="500px" src="img/3206101.jpg">
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <h4 style="font-family: Tahoma">
                                DOUBLE ROOM
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
                    <p>
                        <span class="fa fa-angle-double-right"> </span> Style / Interior : Classic<br>
                        <span class="fa fa-angle-double-right"> </span> Bedding : Double bed / Double deck<br>
                        <span class="fa fa-angle-double-right"> </span> Capacity : 6 persons<br>
                        <span class="fa fa-angle-double-right"> </span> Surface : 20 m²<br>
                        <span class="fa fa-angle-double-right"> </span> Bathroom : Bath and shower<br>
                        <span class="fa fa-angle-double-right"> </span> View : Garden view or city view<br>
                        <span class="fa fa-angle-double-right"> </span> Pets allowed : No<br>   
                        <span class="fa fa-angle-double-right"> </span> Price: P1000 / 12 hours add P500 for 24 hours
                    </p>

                    <hr>
                    <p>
                        The double room has a surface of 20 m² and is located in the historical part of the hotel. The elegant furnishing and sophisticated colors give the room a warm glow. The room is equipped with an espresso machine and marble bathroom with l'Occitane room amenities.
                    </p>
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
    
    <?php
        include 'Footer.php';
    ?>
</body>
</html>