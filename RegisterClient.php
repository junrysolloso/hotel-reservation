<!-------MODAL CONTENT REGISTER-------> 
 
<form action="home.php" method="GET"> 
    <div class="modal-content" id="ModalReg" role="dialog" data-dismiss="modal" style=" width: 850px; height: auto; display: none">
        <div class="modal-header text-info">
            <label class="label-control fa fa-user-plus"> Register</label>
            <button class="close btn-sm HideReg fa fa-close" type="button"></button>
        </div>
           <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-header fa fa-user-circle"> Personal Information</div>
                            <div class="card-body">
                                <label class="label-Control fa fa-user" for="F"> Fullname</label>
                                <input type="text" class="form-control" placeholder="Fullname" name="Fname" id="F" required>
                                <label class="label-control fa fa-address-card" for="A"> Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="Address" id="A" required>
                                <label class="label-control fa fa-phone" for="CPno"> Contact Number</label>
                                <input type="text" class="form-control" placeholder="Contact Number" name="CpNo" id="Cpno" required>
                                <label class="label-control fa fa-mail-forward" for="Email"> Email Address</label>
                                <input type="text" class="form-control" placeholder="Email Address" name="EmailAdd" id="Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-header fa fa-user-circle"> As User</div>
                            <div class="card-body">
                                <label class="label-Control fa fa-user" for="U"> Retype Email</label>
                                <input type="email" class="form-control" placeholder="Email Address" name="ConfirmEmail" id="U" required>
                                <label class="label-control fa fa-key" for="P"> Booking Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="Pword" id="P" required>
                            </div>
                        </div>
                    </div>             
                </div>   
           </div>
        <div class="modal-footer">
            <div class="form-group">
                <button class="btn btn-secondary BtnSm fa fa-close HideReg"> Cancel</button>
                <button class="btn btn-secondary BtnSm fa fa-plus" type="submit" name="submit" value="send"> Save</button>
            </div>
        </div>
    </div>
</form> 