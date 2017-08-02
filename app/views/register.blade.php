




<!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Add Record</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="{{ asset('added') }}">
            <div class="form-group">
              <label for="recieveby"><span class="glyphicon glyphicon-user"></span>Received by:</label>
              <input class="form-control" placeholder="Received by" name="recieveby" type="text" required>
            </div>
            <div class="form-group">
              <label for="for"><span class="glyphicon glyphicon-user"></span> For</label>
              <input class="form-control" placeholder="For" name="for" type="text" required>
            </div>
            <div class="form-group">
              <label for="office"><span class="glyphicon glyphicon-eye-open"></span>Office</label>
              <input class="form-control" placeholder="Office" name="office" type="text" required>
            </div>
            <div class="form-group">
              <label for="address"><span class="glyphicon glyphicon-eye-open"></span> Address</label>
               <input class="form-control" placeholder="Address" name="address" type="text" required>
            </div>
            <div class="form-group">
              <label for="sub"><span class="glyphicon glyphicon-eye-open"></span>Subject</label>
             <textarea  class="form-control" type="text" name="sub" rows="5" cols="40" placeholder="Subject..."></textarea><br>
            </div>
            
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> ADD</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
         
        </div>
      </div>
      
    </div>
  </div> 