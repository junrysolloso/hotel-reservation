<?php
    
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("Location: home.php");
    }

    include 'DBConnection.php';
    
    $C = htmlentities($_GET['c']);

    $query1 = mysqli_query($Conn,"SELECT FullName, Address, ContactNo, EmailAdd, CheckIn, CheckOut, NoPersons, NoRooms, SUM(TotalPay), ConfirmCode, ConfirmRef FROM reservation_info INNER JOIN booking_info ON reservation_info.BookId = booking_info.BookId INNER JOIN 
    client_info ON reservation_info.ClientId = client_info.ClientId INNER JOIN confirm_info ON reservation_info.confirmId = confirm_info.confirmId WHERE confirm_info.ConfirmCode = '$C'");
    while($row2 = mysqli_fetch_array($query1))
    {
        $Fname = $row2['FullName'];
        $Address = $row2['Address'];
        $CpNo = $row2['ContactNo'];
        $EmailAdd = $row2['EmailAdd'];
        
        $CheckIn = $row2['CheckIn'];
        $CheckOut = $row2['CheckOut'];
        $NoPersons = $row2['NoPersons'];
        $NoRooms = $row2['NoRooms'];
        $TotalPay = $row2['SUM(TotalPay)'];
        
        $ConfirmCode = $row2['ConfirmCode'];
        $ConfirmRef = $row2['ConfirmRef'];
    }
    
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap4-business-tycoon.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap4-business-tycoon.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
</head>
<body onload="window.print()">

<div class="container">
    <div class="card" style="margin-top: 120px;">
        <div class="card-header">
            <center>
                <h3 style="font-family: Agency FB"><strong>MINI HOTEL RESERVATION SYSTEM</strong></h3>
                <h5 style="font-family: Agency FB ;"><strong>--- RESERVATION INFORMATION ---</strong></h5>
            </center>
        </div>
        <div class="card-body" style="font-family: Agency FB ;">
            <div class="row">
                <div class="col-sm-4"><hr>
                   <strong class="fa fa-angle-double-right"> Client Details</strong>
                   <br><hr>
                    <?php
                        echo
                            "Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $Fname <br>
                             Contact No. &nbsp;: $CpNo <br>
                             Email Add. &nbsp;&nbsp;&nbsp;&nbsp;: $EmailAdd <br>
                             Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $Address";
                    ?>
                </div> 
                <div class="col-sm-4"><hr>
                   <strong class="fa fa-angle-double-right "> Booking Details</strong>
                   <br><hr>
                    <?php
                        echo
                            "From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $CheckIn <br>
                             To &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $CheckOut <br>
                             No. of persons &nbsp;&nbsp;: $NoPersons <br>
                             No. of rooms &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $NoRooms <br>
                             Total Paid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $TotalPay";
                    ?>
                </div> 
                <div class="col-sm-4"><hr>
                   <strong class="fa fa-angle-double-right"> Confirmation Details</strong>
                   <br><hr>
                    <?php
                        echo
                            "Confirmation code &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $ConfirmCode <br>
                             Reference No. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $ConfirmRef";
                    ?>
                </div> 
            </div>
                <strong>NOTE: </strong>
                This information is presented in the front desk upon arrival.
        </div>
        <center>
            <div class="card-footer" style="font-family: Agency FB ;">Copyright &copy; Mini Hotel Reservation System</div>
        </center>  
    </div>
    <hr>
    <center>
        <a href="PrintReport.php?c=<?php echo $C ;?>" class="btn btn-secondary BtnSm fa fa-print"></a>
    </center> 
    <hr>
</div>
    
    <?php 
        session_destroy();
        unset($_SESSION['user']);
    ?>
    
</body>
</html>