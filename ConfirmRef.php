<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("Location: home.php");
    }

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
        
        $query2 = mysqli_query($Conn, "SELECT MAX(ConfirmId) FROM confirm_info");
        while ($row = mysqli_fetch_array($query2))
        {
            $ConfirmId = $row['MAX(ConfirmId)'];
        }
        
        $ConfirmRef = htmlentities($_GET['ConfirmRef']);
        mysqli_query($Conn, "UPDATE confirm_info SET ConfirmRef = '$ConfirmRef' WHERE ConfirmId = '$ConfirmId' ");
    }
    
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
                    
                    <div class="alert alert-primary">
                        <strong>THANK YOU!</strong><p> You are now successfully bookIn. Please go to your email for the confirmation code to confirm your booking.</p>
                        <p>The confirmation is valid for 24 hours only. If you do not confirm your booking via confirmation code the transaction will automatically be terminated.</p>
                        <h5>Thank you! We are greetful to served our valued customers.</h5>        
                    </div>
                    <hr>
                    <form action = "ConfirmCode.php" method = "GET">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-codepen"> Please enter your confirmation code : </span>
                                </div>
                                <div class="input-group-text">
                                    <span class="fa fa-angle-double-right"> </span>
                                </div>
                                <input type="text" class="form-control" name="ConfirmCode" placeholder="Enter 6 digit code here">
                                <button type="submit" class="btn btn-secondary fa fa-opencart" name="submit" value="send"> Confirm</button>
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