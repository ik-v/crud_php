<form action="" method="post">
    <div class="form-row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="fname">First name</label>
                <input type="text" placeholder="Enter the first name" name="fname" id="fname" value="<?= $fname;?>" class="form-control">
            </div>
        </div>   
        <div class="col-md-3">
            <div class="form-group">
                <label for="lname">Last name</label>
                <input type="text" placeholder="Enter the last name" name="lname" id="lname" value="<?= $lname;?>" class="form-control">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="agse">Age</label>
                <input type="age"  placeholder="Enter the age" min="0" max="90" name="lname" id="lname" value="<?= $lname;?>" class="form-control">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="sex">Sex</label>
                <select name="sex" id="sex" value="<?= $sex;?>" class="form-control">
                    <option value="">Select sex</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <button type="submit" class="btn btn-success">Register</button>
            </div>
        </div>
    </div>

</form>