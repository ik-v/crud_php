<?php include("header.php") ?>
<?php include("dbcon.php") ?>

<div class="container">
    <div class="row justify-center">
        <div class="col-md-6">
            <div class="card card-body">
                <h3 class="text-center">
                    <?php if(isset($_GET['edit'])){
                    echo "Update this student";
                }else{
                    echo "Insertion";
                }?>
                </h3>
                <?php
                    $fname = '';
                    $lname = '';
                    $age = '';

                    $success = '';
                    $resp_up = '';
                    if(isset($_POST['submit'])){
                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $age = $_POST['age'];

                        $sql = mysqli_query($conection, "INSERT INTO students (`first_name`, `last_name`, age) VALUES ('$fname', '$lname', '$age')");

                        if($sql){
                            $success = "Your student is registered";
                        }
                    }

                    if(isset($_POST['update'])){
                        $id = $_POST['id'];

                        $fname = mysqli_real_escape_string($conection, trim(htmlentities($_POST['fname'])));
                        $lname = mysqli_real_escape_string($conection, trim(htmlentities($_POST['lname'])));
                        $age = mysqli_real_escape_string($conection, trim(htmlentities($_POST['age'])));
                        
                        if(empty($fname)){
                            $error = "First name is required";
                        }
                        if(empty($lname)){
                            $error = "Last name is required";
                        }
                        if(empty($age)){
                            $error = "Age is required";
                        }

                        if(empty($error)){
                            $update = mysqli_query($conection, "UPDATE `students` 
                                                SET `first_name` = '$fname', `last_name` = '$lname', `age` = '$age' 
                                                WHERE `id` = '$id'");
                            if($update){
                                $resp_up = "Student updated";
                            }
                        }else{
                            ?>
                            <div class="alert alert-danger"><?= $error;?></div>
                            <?php
                        }
                    }

                    if(isset($_GET['edit'])){
                        $id = $_GET['edit'];

                        $select_student = mysqli_query($conection, "SELECT * FROM students WHERE id = $id");

                        $row = mysqli_fetch_array($select_student);

                        $fname = $row['first_name'];
                        $lname = $row['last_name'];
                        $age = $row['age'];
                    }
                ?>
                <form action="" method="post">
                    <?php 
                        if($success) {
                            ?>
                            <div class="alert alert-success"><?= $success;?></div>
                            <?php
                        }

                        if($resp_up){
                            ?>
                            <div class="alert alert-warning"><?= $resp_up;?></div>
                            <?php
                        }
                        
                    ?>
                    <div class="form-group">
                        <?php
                            if(isset($_GET['edit'])):?>
                                <input type="hidden" name="id" value=<?=$id?> placeholder="Student id" class="form-control">
                        <?php 
                            endif;
                        ?>
                        <label for="fname">First Name</label>
                        <input type="text"value="<?= $fname;?>" name="fname" id="fname" placeholder="Enter your first name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" value="<?= $lname;?>" id="lname" placeholder="Enter your last name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" value=<?= $age;?> placeholder="Age" min="0" max="200" class="form-control">
                    </div>

                    <div class="form-group">
                        <?php if(isset($_GET['edit'])):?>
                            <button type="submit" name="update" class="btn btn-warning">Update</button>
                            <a href="creation.php" class="btn btn-info">Back</a>
                        <?php else:?>
                            <button type="submit" name="submit" class="btn btn-success">Register</button>
                        <?php endif;?>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>Names</th>
                        <th>Age</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $select = mysqli_query($conection, "SELECT * FROM students ORDER BY id DESC");

                        while($row = mysqli_fetch_assoc($select)){
                            ?>
                            <tr>
                                <td><?= $row['first_name']. ' '. $row['last_name'];?></td>
                                <td><span class="badge badge-sm badge-success"><?= $row['age'];?></span></td>
                                <td>
                                    <div class="actions">
                                        <div class="btn-group">
                                            <a href="creation.php?edit=<?=$row['id'];?>" class="btn btn-sm btn-info">Edit</a>
                                            <button type="button" class="btn btn-sm btn-danger">delete</button>
                                        </div>
                                    </div>
                                </td>
                                </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>