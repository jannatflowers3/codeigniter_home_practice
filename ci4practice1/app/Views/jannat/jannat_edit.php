<?php
echo view("includes/Header.php");
echo view("includes/Navbar.php");

?>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>
                   Student Edit Page </h1>
        
                <form action="/jannatController/create" method="post">
<?= csrf_field();?>
                <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" value = "<?=$editstudent['name']?>" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" value = "<?= $editstudent['email']?>" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Phone:</label>
    <input type="number" class="form-control" value = "<?=$editstudent['phone'] ?>" id="pwd" name="phone">
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