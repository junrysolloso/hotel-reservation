

<!-------MODAL CONTENT LOGIN------->

  
<form action="home.php" method="">
    <div class="modal-content" id="ModalLogin" role="dialog" data-dismiss="modal" style=" width: 400px; height: auto; display: none">
        <div class="modal-header text-info">
            <label class="label-control fa fa-user-circle"> User Login</label>
            <button class="close btn-sm HideLogin fa fa-close" type="button"></button>
        </div>
           <div class="modal-body">
                <label class="label-Control fa fa-user" for="U"> Email Address</label>
                <input type="text" class="form-control" placeholder="Username" name="EmailAdd" id="U" required>
                <label class="label-control fa fa-key" for="P"> Password</label>
                <input type="password" class="form-control" placeholder="Booking Password" name="Pword" id="P" required>
           </div>
        <div class="modal-footer">
            <div class="form-group">
                <button class="btn btn-secondary BtnSm fa fa-unlock" type="submit" name="login" value="send"> Login </button>
            </div>
        </div>
    </div>
</form>