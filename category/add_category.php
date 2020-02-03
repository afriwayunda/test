<!-- The Modal -->
<div class="modal fade" id="addAsset">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Asset Data</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
    <div class="modal-body">
        <form method="post" role="form" class="form-data" id="form-data">
            <div class="form-group">
              <div class="row">
                <label class="col-sm-4 control-label text-left">Category Name<span class="text-red">*</span></label>         
                    <div class="col-sm-8"><input type="text" class="form-control" name="category_name"  value="">
                    </div>
              </div>
            </div>
        </form>
    </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" name="submit" class="btn btn-primary" value="Save">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>