<?= $this->extend('templates/admin_template') ?>

<?= $this->section('content') ?>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add new Order</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Street name</label>
                    <input type="email" class="form-control" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Zip Code</label>
                    <input type="text" class="form-control" placeholder="Zip Code">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Adress</label>
                    <input type="text" class="form-control" placeholder="Adress">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" class="form-control" placeholder="Phone">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">State</label>
                    <input type="text" class="form-control" placeholder="State">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">City</label>
                    <input type="text" class="form-control" placeholder="City">
                  </div>
                  
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

<?= $this->endSection() ?>