<?php
echo view("includes/Header.php");
echo view("includes/Navbar.php");

?>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Student List </h1>
                <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
       
<?php foreach($info as $information):?>
    <tr>
        <td><?= $information['id']?></td>
        <td><?= $information['name']?></td>
        <td><?= $information['email']?></td>
        <td><?= $information['phone']?></td>
        <td><a href="jannatController/edit/<?=$information["id"] ?>"> Edit</a></td>
        <td><a href="jannatController/delete/<?=$information["id"] ?>"> Delete</a></td>
    </tr>
    
      <?php endforeach;?>
    </table>
    <!-- <a href ="/student/new"> Add New Student</a>-->
           <a href="/jannatController/new">Create New Student</a>
</div>
        </div>
    </div>
</section>

<?php
echo view("includes/Footer.php");

?>