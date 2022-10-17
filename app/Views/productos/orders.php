<?= $this->extend('templates/admin_template') ?>

<?= $this->section('content') ?>
<!-- funciones -->
<script src="dist/js/orders_functions.js"></script>
<div class="row">
</div>
<table id="example2" class="table table-bordered table-hover dataTable dtr-inline">
    
                  <thead>
                  <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" >USer Id</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Phone</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Address</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Zip Code</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Discount</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Subtotal</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Total</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"></th>
                </tr>
                  </thead>
                  <tbody> 
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th rowspan="1" colspan="1">User id</th>
                    <th rowspan="1" colspan="1">Phone</th>
                    <th rowspan="1" colspan="1">Address</th>
                    <th rowspan="1" colspan="1">Zip Code</th>
                    <th rowspan="1" colspan="1">Discount</th>
                    <th rowspan="1" colspan="1">Subtotal</th>
                    <th rowspan="1" colspan="1">Total</th>
                </tr>
                  </tfoot>
</table>
<!-- Modal -->
<div class="modal" tabindex="-1" id="myModal">
  <div class="modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="">User Id</label>
        <input type="text" class="form-control" id="user_id" disabled>
        <label for="">Phone</label>
        <input type="text" class="form-control" id="phone" disabled>
        <label for="">City</label>
        <input type="text" class="form-control" id="city" disabled>
        <label for="">State</label>
        <input type="text" class="form-control" id="state" disabled>
        <label for="">Address</label>
        <input type="text" class="form-control" id="address" disabled>
        <label for="">Street name</label>
        <input type="text" class="form-control" id="street_name" disabled>
        <label for="">Zip code</label>
        <input type="text" class="form-control" id="zip_code" disabled>
        <label for="">Discount</label>
        <input type="text" class="form-control" id="discount" disabled>
        <label for="">Subtotal</label>
        <input type="text" class="form-control" id="subtotal" disabled>
        <label for="">Total</label>
        <input type="text" class="form-control" id="total" disabled>
        <br>
        <table id="tbdetails" class="table table-bordered table-hover dataTable dtr-inline">
        <thead>
                  <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" >Product</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Category</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Price</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Enabled</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Sale count</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"></th>
                </tr>
                    </thead>
                    <tbody> 
                    
                    </tbody>
                    <tfoot>
                    <tr>
                        <th rowspan="1" colspan="1">Product</th>
                        <th rowspan="1" colspan="1">Category</th>
                        <th rowspan="1" colspan="1">Price</th>
                        <th rowspan="1" colspan="1">Enabled</th>
                        <th rowspan="1" colspan="1">Sale count</th>
        </table>
      </div>
    </div>
  </div>
</div>


<div class="modal" tabindex="-1" id="myModal2">
  <div class="modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Currencys</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="">MXN</label>
        <input type="text" class="form-control" id="mxn" disabled>
        <label for="">USD</label>
        <input type="text" class="form-control" id="usd" disabled>
        <label for="">EUR</label>
        <input type="text" class="form-control" id="eur" disabled>
        <label for="">VES</label>
        <input type="text" class="form-control" id="ves" disabled>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>