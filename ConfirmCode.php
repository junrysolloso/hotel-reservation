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
        $ConfirmCode = htmlentities($_GET['ConfirmCode']);
        $query = mysqli_query($Conn, "SELECT ConfirmCode FROM Confirm_Info WHERE ConfirmCode = '$ConfirmCode'");
        $Count = mysqli_num_rows($query);
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
                    <?php
                        if($Count > 0)
                        {
                            echo
                            '<div class="alert alert-info">
                               <div class="alert alert-success">
                                    <h2><strong>THANK YOU!</strong><p> </h2>
                                    <h6>Your all set. Please print the booking details that will be presented to the front desk.</h6>
                               </div>
                               <div class="alert alert-primary">
                                    <a href="PrintReport.php?c='.$ConfirmCode.'" class="btn btn-secondary fa fa-print"> Print</a>
                               </div>
                            </div>';
                            
                            mysqli_query($Conn, "UPDATE Confirm_Info SET ConfirmStatus = 'YES' WHERE ConfirmCode = '$ConfirmCode' ");
                        }
                        else
                        {   
                            echo
                            '<div class="alert alert-danger">
                                <h2><strong>OOOOPSS!</strong><p> </h2>
                                <h5>You entered an invalid confirmation code.</h5>
                            </div>';
                        }
                    ?> 
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