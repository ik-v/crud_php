<?php
    require_once "./header.php";
    require_once "./dbcon.php";
?>

<div class="card card-body">
    <div class="d-flex my-2 justify-content-between align-items-center">
        <h1>Students</h1>
        <a href="./add-student.php" class="btn btn-success">Add student</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Full name</th>
                <th>Email</th>
                <th>Age</th>
                <th>User level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        
        $sql = mysqli_query($conection, "SELECT * FROM  users ORDER BY user_id DESC");

        if(@mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_assoc($sql)){
                ?>
                    <tr>
                        <td><?= $row['username']. ' ' . $row['name'];?></td>
                        <td><?= $row['email'];?></td>
                        <td>27 years old</td>
                        <td><?= $row['user_level'];?></td>
                        <td><div class="action btn-group">
                            <a href="get-student.php?get=<?= $row['user_id'];?>" class="btn-sm btn btn-info">Edit</a>
                            <a href="#edit" class="btn-sm btn btn-danger">Delete</a>
                        </div></td>
                    </tr>
                <?php
            }
        }else{
            print "You don't have any data...";
        }

        ?>
        </tbody>
    </table>
</div>

<?php require_once "./footer.php";?>