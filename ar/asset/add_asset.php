<?php
include('auto_num.php');
?>
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
        <form action="insert_asset.php" method="post" role="form">
            <div class="form-group">
              <div class="row">
                <label class="col-sm-4 control-label text-left">Asset Code<span class="text-red">*</span></label>                      
  <div class="col-sm-8"><input type="text" class="form-control" name="code_asset"  value="<?php echo $code_asset;?>" readonly>
                    </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <label class="col-sm-4 control-label text-left">Asset Name<span class="text-red">*</span></label>         
                    <div class="col-sm-8"><input type="text" class="form-control" name="asset_name"  value="">
                    </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <label class="col-sm-4 control-label text-left">Asset Category<span class="text-red">*</span></label>         
                    <div class="col-sm-8"><input type="text" class="form-control" name="asset_category"  value="">
                    </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <label class="col-sm-4 control-label text-left">Department<span class="text-red">*</span></label>         
                    <div class="col-sm-8"><input type="text" class="form-control" name="department"  value="">
                    </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <label class="col-sm-4 control-label text-left">Purchase Date<span class="text-red">*</span></label>         
                    <div class="col-sm-8"><input type="text" class="form-control" name="purchase_date"  value="">
                    </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <label class="col-sm-4 control-label text-left">Price<span class="text-red">*</span></label>         
                    <div class="col-sm-8"><input type="text" class="form-control" name="price"  value="">
                    </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <label class="col-sm-4 control-label text-left">Supplier Name<span class="text-red">*</span></label>         
                    <div class="col-sm-8"><input type="text" class="form-control" name="supplier_name"  value="">
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