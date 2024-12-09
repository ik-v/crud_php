<?php
    require_once "./header.php";
    require_once "./dbcon.php";
?>

<div class="card card-body">

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
</div>

<?php require_once "./footer.php";?>