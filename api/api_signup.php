<?php
    if(isset($_POST['submit'])){
        include "../database/db.php";

        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $address = $_POST['address'];
        $image_name = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $role = $_POST['role'];

        if($password == $cpassword){
            move_uploaded_file($image_tmp_name, "../assets/uploads/".$image_name);
        $sql = "insert into user(name, contact, password, address, image, role, status, votes ) values ('{$name}', '{$contact}', '{$password}', '{$address}', '{$image_name}', '{$role}', 0, 0)";
            mysqli_query($conn, $sql);
        }else{
            echo '
                <script>
                    alert("Password not matched..!");
                    window.location = "../signup.php";
                </script>
            ';
        }
    }
?>