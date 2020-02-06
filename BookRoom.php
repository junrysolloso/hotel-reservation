
   
<!-------BOOK DELUXE MAIN CONTENT------->
   
     
<form action="BookRoomHome.php" method="GET">
    <div class="modal-content" id="ModalBookDelMain" data-dismiss="modal" role="dialog" style="width: 800px; height: auto; display:none">
        <div class="modal-header text-info">
            <label class="label-control fa fa-bookmark"> Booking</label>
            <button class="close btn-sm float-right fa fa-close HideBookDelMain" type="button"></button>
        </div>
           <div class="modalC-body">
              <div class="row">
                 <div class="col-sm-7">
                   <div class="alert alert-info">
                    <div class="alert alert-primary"><h2>1710-3030-5505-2218</h2></div>
                        <div class="alert alert-warning">
                            <h5>
                                Please send your payment via smartmoney using above number.<br>
                            </h5>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header fa fa-user">&nbsp;Personal Info</div>
                        <div class="card-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">&nbsp;Fullname</span>
                                </div>
                                <input type="text" class="form-control" name="CFullname" placeholder="Enter Fullname" required> 
                            </div>
                            <hr>
                            <div class="input-group">
                                <div input-group-prepend>
                                    <span class="input-group-text">&nbsp;Address</span>
                                </div>
                                <input type="text" class="form-control" name="CAddress" Placeholder="Enter Address" required>
                            </div>
                            <hr>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">&nbsp;Email Add</span>
                                </div>
                                <input type="text" class="form-control" name="CEmail" placeholder="Enter Valid Email" require>
                            </div>
                            <hr>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">&nbsp;Contact No.</span>
                                </div>
                                <input type="text" class="form-control" name="CCpNo" placeholder="Enter Phone No." required>
                            </div>              
                        </div>
                    </div>
                    <hr>
                    <div class="card">
                        <div class="card-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">&nbsp;Number of persons</span>
                                </div>
                                <select class="form-control" name="CNoP">
                                    <option value="0">0</option>  
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card">
                        <div class="card-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                   <span class="input-group-text fa fa-calendar">&nbsp;From</span>
                                </div> 
                                <input type="date" class="form-control" name="BookFrom" required>
                            </div>
                            <hr>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                   <span class="input-group-text fa fa-calendar">&nbsp;To</span>
                                </div>
                                <input type="date" class="form-control" name="BookTo" required>
                            </div>
                        </div>  
                    </div>
                </div>
                    
                 <div class="col-sm-5">
                    <div class="card">
                       <div class="card-header fa fa-check"> Select Room</div>
                        <div class="card-body"> 
                           <div class="input-group">
                               <div class="input-group-prepend">
                                  <div class="input-group-text">
                                      <input type="checkbox" name="CheckSin" value="1" alt="0">
                                  </div>    
                               </div>
                               <label class="form-control"> SINGLE</label>
                               <select class="form-control" name="NoRoomSin">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                               </select>
                               <div class="input-group-sm">
                                   <img class="img-thumbnail" src="img/SetWidth760-Grand-hotel-Union-Deluxe-Single-2-Room.jpg">
                               </div>
                           </div>
                           <hr>
                           <div class="input-group">
                               <div class="input-group-prepend">
                                   <div class="input-group-text">
                                       <input type="checkbox" name="CheckDob" value="1" alt="0"> 
                                   </div>
                               </div>
                               <label class="form-control"> DOUBLE</label>
                               <select class="form-control" name="NoRoomDob">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                               </select>
                               <div class="input-group-append">
                                   <img with="100px" height="100px" class="img-thumbnail" src="img/3206101.jpg">
                               </div>
                           </div>
                           <hr>
                           <div class="input-group">
                               <div class="input-group-prepend">
                                   <div class="input-group-text">
                                       <input type="checkbox" name="CheckDel" value="1" alt="0">
                                   </div>
                               </div>
                               <label class="form-control"> DELUXE</label>
                               <select class="form-control" name="NoRoomDel">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                               </select>
                               <div class="input-group-append">
                                   <img class="img-thumbnail" src="img/bg1.jpg"> 
                               </div>  
                           </div>
                        </div>
                    </div>
                 </div>           
              </div>  
           </div>
        <div class="modal-footer">
            <button class="btn btn-secondary BtnSm fa fa-check-circle" type="submit" name="submit" value="send"> Book</button>
            <button class="btn btn-secondary BtnSm fa fa-close HideBookDelMain"> Cancel</button>
        </div>
    </div>
</form>