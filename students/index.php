<?php
    require_once "./header.php";
    require_once "./dbcon.php";
?>

<div class="card card-body">
<<<<<<< HEAD
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
=======

    <?php if(isset($_GET['get-action'])):?>
        <div class="d-flex mb-2 justify-content-between align-items-center">
            <h1>Add Student</h1>
            <a href="students.php" class="btn btn-md btn-success">Back</a>
        </div>
        <?php require_once "./includes/Form.php";?>
    <?php else:?>
        <div class="d-flex mb-2 justify-content-between align-items-center">
            <h1>Students</h1>
            <select name="sex" id="">
                <option value="">Selection</option>
                <option value="Male">Man</option>
                <option value="Female">Woman</option>
            </select>
            <a href="?get-action=add-student" class="btn btn-md btn-success">Add student</a>
        </div>
        <table class="table table-striped font-light">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Grace Bisimwa</td>
                    <td>27 ans</td>
                    <td>Male</td>
                    <td>
                        <div class="actions">
                            <div class="btn-group btn-sm">
                                <a href="#?get=12" class="btn btn-sm btn-info">Edit</a>
                                <a href="#?get=12" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    <?php endif;?>
>>>>>>> 2e332e7b3b09de578fbb3e4e7d845d77d3c83b59
</div>

<?php require_once "./footer.php";?>