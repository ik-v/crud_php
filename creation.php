<?php include("header.php") ?>
<?php include("dbcon.php") ?>

<div class="container">
    <div class="row justify-center">
        <div class="col-md-6">
            <div class="card card-body">
                <h3 class="text-center">Insertion</h3>

                <form action="" method="post">
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" placeholder="Enter your first name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" placeholder="Enter your last name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" placeholder="Age" min="0" max="200" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>