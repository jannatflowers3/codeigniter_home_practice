<?php  echo view('products/products_header.php');?>

  
  <!-- /.navbar -->
  <?php  echo view("layout/navbar.php");?>
  <?php   echo view("layout/leftsidebar.php");?>

 

  <!-- Content Wrapper. Contains page content -->
  <?php   echo view("products/top_nav.php");?>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-lg-12">
            <div class="card">
                <div class="card-title text-center">
                    <div class="card-body">
                        <h1> All Products</h1>
                    </div>
                </div>
            </div>

            <!-- table -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Products List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Product Details</th>
                    <th>Product Price</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($allproducts as $allproduct){?>
                  <tr>
                    <td><?= $allproduct['id']?></td>
                    <td><?= $allproduct['products_name']?></td>
                    <td><?= $allproduct['product_details']?></td>
                    <td><?= $allproduct['product_price']?></td>
                    <td><a  href="products/delete/<?= $allproduct['id']?>">Delete</a></td>
                  </tr>
               
                  <?php  }?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
                <a href="products/new/" class="btn btn-primary">Add Product</a>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php  // echo view("layout/footer.php");?>
  <?php   echo view("products/products_footer.php");?>