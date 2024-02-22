<?php
    session_start();
    
    if(isset($_POST['login'])){
        include "../database/db.php";

        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $sql = "select * from user where name = '{$username}' and password = '{$password}' and role = '{$role}'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $userdata = mysqli_fetch_array($result);
            $groups = mysqli_query($conn, "select * from user where role = 2");
            $groupdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);
            $_SESSION['userdata'] = $userdata;
            $_SESSION['groupdata'] = $groupdata;

            echo '
                <script>
                    window.location = "../dashboard.php";
                </script>
            ';
        }else{
            echo '
                <script>
                    alert("User not found with this credentials");
                    window.location = "../index.php";
                </script>
            ';
        }
    }
?>