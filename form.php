<?php
    if(isset($_GET['get'])){
        $id = mysqli_real_escape_string($conection, htmlentities(trim($_GET['get'])));

        $sql = mysqli_query($conection, "SELECT * FROM users WHERE user_id = $id");

        if(@mysqli_num_rows($sql) === 1){
            $row = mysqli_fetch_array($sql);
            
            $username = $row['username'];
            $name = $row['name'];
            $email = $row['email'];
            $dob = $row['dob'];
            $user_lavel = $row['user_level'];
        }else{
            print "
            <div class='card card-body'>Bravo try again... :(</div>
            ";
        }
    }

?>
<form action="" method="post">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" value="<?= $username;?>" placeholder="Username" name="username" id="username" class="form-control">
    </div>
    <div class="form-group">
        <label for="name">name</label>
        <input type="text" placeholder="name" value="<?= $name;?>" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" placeholder="email" value="<?= $email;?>" name="email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="dob">Date fo brith</label>
        <input type="date" name="dob" id="dob" value="<?= $dob;?>" class="form-control">
    </div>

    <div class="form-group">
        <?php if(isset($_GET['get'])):?>
        <button type="submit" class="btn btn-warning">Update</button>
        <?php else:?>
            <button type="submit" class="btn btn-success">Register</button>
        <?php endif;?>
    </div>
</form>