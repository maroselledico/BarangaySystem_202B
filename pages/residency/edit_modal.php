<?php echo '<div id="editModal'.$row['pid'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Residency</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['pid'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                    <label>Resident: </label>
                    <input class="form-control input-sm" type="text" value="'.$row['residentname'].'" readonly/>
                </div>
                <div class="form-group">
                    <label>Name: </label>
                    <input name="txt_edit_name" class="form-control input-sm" type="text" value="'.$row['name'].'"/>
                </div>
                <div class="form-group">
                    <label>Address : </label>
                    <input name="txt_edit_add" class="form-control input-sm" type="text" value="'.$row['address'].'" />
                </div>
                <div class="form-group">
                    <label>Type of Purpose:</label>
                    <select name="txt_edit_purpose" class="form-control input-sm">
                        <option value="'.$row['purpose'].'" selected>'.$row['purpose'].'</option>
                        <option value="Purpose 1">Option 1</option>
                        <option value="Purpose 2">Option 2</option>
                        <option value="Purpose 3">Option 3</option>
                        <option value="Purpose 4">Option 4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Amount : </label>
                    <input name="txt_edit_amount" class="form-control input-sm" type="text" value="'.$row['samount'].'" />
                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_save" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>