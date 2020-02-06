<?php

    include 'header.php';
    include 'BookRoom.php';
    include 'TermsCondition.php';
    include 'ClientLogin.php';
    include 'AboutUs.php';
    include 'ContactUs.php';
    include 'CheckAvailRoom.php';
    include 'ShowAvailRoom.php';
    include 'RegisterClient.php';
    include 'ShowImageSin.php';   
    include 'ShowImageDob.php';
    include 'ShowImageDel.php';
    include 'DBConnection.php';

    if(isset($_GET['login']))
    {
        $Email = htmlentities($_GET['EmailAdd']);
        $Pword = htmlentities($_GET['Pword']);
        
        $query = mysqli_query($Conn, "SELECT * FROM client_login WHERE EmailAdd = '$Email' AND Password = '$Pword' ");
        $Count = mysqli_num_rows($query);
        
        if($Count > 0)
        {
            echo "<script>alert('Your successfully signin.')</script>";
        }
    }
    elseif(isset($_GET['submit']))
    {
        $FName = htmlentities($_GET['Fname']);
        $Address = htmlentities($_GET['Address']);
        $CpNo = htmlentities($_GET['CpNo']);
        $EmailAdd = htmlentities($_GET['EmailAdd']);
        $ConfirmEmail = htmlentities($_GET['ConfirmEmail']);
        $Pword = htmlentities($_GET['Pword']);
        $ConPword = md5($Pword);
        
        if($EmailAdd == $ConfirmEmail )
        {
            mysqli_query($Conn, "INSERT INTO client_info (Fullname, Address, ContactNo, EmailAdd)
            VALUES ('$FName', '$Address', '$CpNo', '$EmailAdd')");

            $query = mysqli_query($Conn,"INSERT INTO client_login (EmailAdd, Password) VALUES ('$EmailAdd', '$ConPword')");

            if(!$query)
            {
                echo "<script>alert('Sorry! Cannot add user.')</script>";
            }
            else
            {
                echo "<script>alert('User Added')</script>";
            }        
        }
        else
        {
            echo "<script>alert('Email does not match.)</script>";
        }
    }
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
                                HOME
                            </h4>
                        </div>
                        <div class="col-sm-8">
                            <div class="btn-group float-right">
                                <a href="#ModalTerms" class="btn btn-secondary BtnSm float-right fa fa-question" id="TermShow" > Terms</a>
                                <a href="#ModalAvail" class="btn btn-secondary BtnSm float-right fa fa-list-alt" id="AvailShow" > Available</a>
                                <a href="#ModalBookDelMain" class="btn btn-secondary BtnSm float-right fa fa-check-circle" id="BookShowDelMain"> Book Now</a> 
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-info">
                                <p>
                                    Prior to the Internet, travelers could write, telephone the hotel directly, or use a travel agent to make a reservation. Nowadays, online travel agents have pictures of hotels and rooms, information on prices and deals, and even information.
                                </p>
                                <a href="https://en.wikipedia.org/wiki/Internet" class="btn btn-primary BtnSm"> Learn more <span class="fa fa-angle-double-right"></span></a>
                            </div>
                        </div> 
                         <div class="col-sm-4">
                            <div class="alert alert-info">
                                <p>
                                    We are a luxury brand whose family of associates puts the soul in hospitality every day. The needs of our guests, associates and owners are in the forefront of everything we do. Through authenticity security and information.
                                </p>
                                <a href="https://en.wikipedia.org/wiki/Hotel#Luxury" class="btn btn-primary BtnSm"> Learn more <span class="fa fa-angle-double-right"></span></a>
                            </div>
                        </div> 
                         <div class="col-sm-4">
                            <div class="alert alert-info">
                                <p>
                                    The vision of the Mini Hotel Reservation System is to automate the process that will replace the existing paper system in order to save money and serve guests better. The system will be used to enter reservations as well as check guests. 
                                </p>
                                <a href="https://en.wikipedia.org/wiki/Hotel" class="btn btn-primary BtnSm"> Learn more <span class="fa fa-angle-double-right"></span></a>
                            </div>
                        </div> 
                    </div>
                    </div>
                </div>
                
                <!-------IMAGE THUMBNAILS------->
                
                <?php include 'ShowRoomThumbnails.php'; ?>
                
            </div>
        </div>
    </div>
    
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
    
    <!-------SCRIPT FOR MODAL------->
    
    <script src="js/ShowModal.js"></script>
    
</body>
</html>