<?php
echo view("includes/Header.php");
echo view("includes/Navbar.php");

?>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Student Edit Page</h1>
        
                <form action="/student/create" method="post">
<?= csrf_field(); ?>
                <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" value="<?= $studentEdit['name']?>" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" value="<?= $studentEdit['email']?>" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Phone:</label>
    <input type="password" class="form-control" id="pwd"  value="<?= $studentEdit['phone']?>" name="phone">
  </div>

  <div class="mb-3">
            <label for="address" class="form-label"> address</label>
            <textarea name="address" class="form-control" id="address" cols="30" rows="10"><?= $studentEdit['address']?></textarea>
        </div>
  <button type="submit" class="btn btn-info">Submit</button>
</form>
   
            </div>
        </div>
    </div>
</section>

<?php
echo view("includes/Footer.php");

?>