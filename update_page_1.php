<?php include("header.php"); ?>
<?php include("dbcon.php"); ?>

<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        // Query to get student data by ID
        $query = "SELECT * FROM `students` WHERE `id` = '$id'";
        $result = mysqli_query($conection, $query); // Make sure $result is initialized

        // Check if the query was successful
        if(!$result){
            die("Query failed: " . mysqli_error($conection)); // Added $conection to mysqli_error
        } else {
            $row = mysqli_fetch_assoc($result); // Fetch the row as an associative array
        }
    }
?>

<?php
    if(isset($_POST['update_students'])){
        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $age = $_POST['age'];

        // Update query to save data
        $query = "UPDATE `students` 
                  SET `first_name` = '$fname', `last_name` = '$lname', `age` = '$age' 
                  WHERE `id` = '$id'"; // Fixed query syntax errors

        $result = mysqli_query($conection, $query); // Execute the query

        // Check if the query was successful
        if(!$result){
            die("Query failed: " . mysqli_error($conection)); // Added $conection to mysqli_error
        } else {
            header('Location: index.php?update_msg=You have successfully updated the data.');
            exit(); // Ensure the script stops after the redirect
        }
    }
?>

<form action="update_page_1.php?id=<?php echo $id;?>" method="post">
    <div class="form-group">
        <label for="f_name">First Name</label> <!-- Fixed typo: "labe" to "label" -->
        <input type="text" name="f_name" class="form-control" value="<?php echo htmlspecialchars($row['first_name']); ?>"> <!-- Added htmlspecialchars for safety -->
    </div>
    <div class="form-group">
        <label for="l_name">Last Name</label> <!-- Fixed typo: "labe" to "label" -->
        <input type="text" name="l_name" class="form-control" value="<?php echo htmlspecialchars($row['last_name']); ?>"> <!-- Added htmlspecialchars for safety -->
    </div>
    <div class="form-group">
        <label for="age">Age</label> <!-- Fixed typo: "labe" to "label" -->
        <input type="text" name="age" class="form-control" value="<?php echo htmlspecialchars($row['age']); ?>"> <!-- Added htmlspecialchars for safety -->
    </div>
    <input type="submit" class="btn btn-success" name="update_students" value="UPDATE">
</form>

<?php include("footer.php"); ?>
