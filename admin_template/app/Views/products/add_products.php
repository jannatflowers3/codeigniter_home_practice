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
                        <h1>Add Products</h1>
                    </div>
                </div>
            </div>

            <!-- table -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add Products </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="/products/create" method="post">
<?= csrf_field();?>
  <div class="form-group" >

    <label for="name">Product Name</label>
    <input type="text" class="form-control" id="name" name = "productName" aria-describedby="emailHelp" placeholder="Enter Product Name">
   
  </div>
  <div class="form-group">
    <label for="name">Product Details</label>
    <input type="text" class="form-control" id="name" name = "productdetails"  aria-describedby="emailHelp" placeholder="Enter Product Name">
   
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" id="price" name = "productsPrice"  placeholder="Price">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
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