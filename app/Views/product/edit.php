<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('product/update/'.$product['product_id']); ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input name="product_name" value="<?= $product['product_name'];?>" class="form-control"  placeholder="Product Name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Description</label>
                    <input  name="product_description" value="<?= $product['product_description'];?>" class="form-control" placeholder="Product Description" required>
                  </div>
                </div> 
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
</div>