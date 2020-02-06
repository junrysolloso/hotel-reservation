     
     
<?php
    include 'DBConnection.php';
         
    $query1 = mysqli_query($Conn,"SELECT RoomAvail FROM Room_Info WHERE RoomType = 'SINGLE' ");
    while($row = mysqli_fetch_array($query1))
    {
        $RoomAvailSin = $row['RoomAvail'];
    }

    $query2 = mysqli_query($Conn,"SELECT RoomAvail FROM Room_Info WHERE RoomType = 'DOUBLE' ");
    while($row = mysqli_fetch_array($query2))
    {
        $RoomAvailDob = $row['RoomAvail'];
    }

    $query3 = mysqli_query($Conn,"SELECT RoomAvail FROM Room_Info WHERE RoomType = 'DELUXE' ");
    while($row = mysqli_fetch_array($query3))
    {
        $RoomAvailDel = $row['RoomAvail'];
    }

?>
     
     
     <!-------SHOW AVAILABLE ROOM CONTENT-------> 
    
    <div class="modal-content" id="ModalAvail" data-dismiss="modal" role="dialog" style="width: 600px; height: auto; display: none">
        <div class="modal-header">
            <label class="label-control fa fa-share text-primary"> Available</label>
            <button class="close btn-sm fa fa-close HideAvail float-right"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                           <labe class="label-control fa fa-arrow-circle-down"> Room Type</labe>
                        </div>
                        <div class="card-body">
                           <div class="input-group">
                               <div class="input-group-prepend">
                                  <div class="input-group-text">
                                      <span class="fa fa-angle-double-right"></span>
                                  </div>    
                               </div>
                               <label class="form-control fa fa-hotel"> SINGLE ROOM</label>
                               <label class="form-control fa fa-angle-right"> <?php echo $RoomAvailSin;?> Room(s) Available</label>
                           </div>
                           <hr>
                           <div class="input-group">
                               <div class="input-group-prepend">
                                   <div class="input-group-text">
                                       <span class="fa fa-angle-double-right"></span>
                                   </div>
                               </div>
                               <label class="form-control fa fa-hotel"> DOUBLE ROOM</label>
                               <label class="form-control fa fa-angle-right"> <?php echo $RoomAvailDob;?> Room(s) Available</label>
                           </div>
                           <hr>
                           <div class="input-group">
                               <div class="input-group-prepend">
                                   <div class="input-group-text">
                                       <span class="fa fa-angle-double-right"></span>
                                   </div>
                               </div>
                               <label class="form-control fa fa-hotel"> DELUXE ROOM</label>
                               <label class="form-control fa fa-angle-right"> <?php echo $RoomAvailDel;?> Room(s) Available</label> 
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary BtnSm fa fa-check-circle HideAvail" type="submit" name="ButtonCheck"> Close</button>
        </div>
    </div>