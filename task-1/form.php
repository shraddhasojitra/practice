<div class="modal" id="manage" tabindex="-1" role="dialog">
  <div class="modal-dialog"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Employe Management</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close " >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="text" name="fname" placeholder="Enter Fristname*" class="form-control" required>
            </div>  
            <div class="mb-3">
                <input type="text" name="lname" placeholder="Enter Lastname*" class="form-control" required>
            </div>
            <div class="mb-3">   
                <input type="text" name="email" placeholder="Enter Email*" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="text" name="password" placeholder="Enter Password*" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="text" name="cpassword" placeholder="Enter Confirm Password*" class="form-control" required>
            </div>
            <div class="mb-3">
                <textarea type="text" name="address" placeholder="Enter Address" class="form-control"></textarea>
            </div>    
            <div class="mb-3">
              <input type="file" name="img" class="form-control" placeholder="Upload Image" required>
            </div>
            <div class="mb-3">
            <select name="state" required>
                <option>--select State</option>
                <?php 
                  foreach($st as $st1)
                  {
                  ?>
                  <option value="<?php echo $st1["sid"];?>"><?php echo $st1["s_name"];?></option>
                  <?php 
                  }
                ?>
            </select>
            </div>
            <div class="mb-3">
            <select name="city" required>
                <option>--select city</option>
                <?php 
                  foreach($ct as $ct1)
                  {
                  ?>
                  <option value="<?php echo $ct1["ctid"];?>"><?php echo $ct1["ct_name"];?></option>
                  <?php 
                  }
                ?>
            </select>
            </div>
        
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="show data" name="manage">
        <button type="button" name="close" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>