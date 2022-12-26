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
        <?php foreach ($studentdata as $student) : ?>
            <tr>
                <td><?= $student['id'] ?></td>
                <td><?= $student['name'] ?></td>
                <td><?= $student['email'] ?></td>
                <td><?= $student['phone'] ?></td>
                <td>
                   <a href="/student/edit/<?= $student['id']?>">Edit</a>
                   <a href="/student/delete/<?= $student['id']?>">Delete</a>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
    <a href ="/student/new"> Add New Student</a> 
            </div>
        </div>
    </div>
</section>

<?php
echo view("includes/Footer.php");

?>