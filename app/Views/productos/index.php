<?= $this->extend('templates/admin_template') ?>

<?= $this->section('content') ?>
<div class="row">
  <!-- funciones -->
  <script src="dist/js/products_functions.js"></script>
  <div class="col-3">
    <label>Top 5<input type="button" class="form-control btn btn-success" placeholder="" value="Top 5 Best Seller" onclick="top5()"></label>
  </div>
</div>
<table id="tbproducts" class="table table-bordered table-hover dataTable dtr-inline">
    
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
                    <th rowspan="1" colspan="1">Enable</th>
                    <th rowspan="1" colspan="1">Sale Count</th>
                    <th rowspan="1" colspan="1"></th>
                </tr>
                  </tfoot>
                </table>
<?= $this->endSection() ?>