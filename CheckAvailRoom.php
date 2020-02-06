

<!-------CHECK AVAILABLE ROOM CONTENT-------> 
    
    
<form action="ShowAvailRoomBook.php" method = "GET"> 
    <div class="modal-content" id="ModalCheck" data-dismiss="modal" role="dialog" style="width: 500px; height: auto; display: none">
        <div class="modal-header">
            <button class="close btn-sm fa fa-close HideCheck float-right"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                           <labe class="label-control fa fa-check"> Select Room Type</labe>
                        </div>
                       <div class="card-body">
                           <div class="input-group">
                               <div class="input-group-prepend">
                                   <div class="input-group-text">
                                       <label class="label-control fa fa-calendar"> From</label>
                                   </div>
                               </div>
                               <input type="date" class="form-control" name="CheckFrom" required>
                           </div>
                           <hr>
                           <div class="input-group">
                               <div class="input-group-prepend">
                                   <div class="input-group-text">
                                       <label class="label-control fa fa-calendar"> To</label>
                                   </div>
                               </div>
                               <input type="date" class="form-control" name="CheckTo" required>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary BtnSm fa fa-check-circle HiedeCheck" type="submit" value="send" onclick="this.form.submit()" name="submit"> Check</button>
        </div>
    </div>
</form>
    








