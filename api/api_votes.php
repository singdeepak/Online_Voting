<?php
    session_start();
    if(isset($_POST['votebtn'])){
        $votes = $_POST['gvotes'];
        $total_votes = $votes + 1;
        $gid = $_POST['gid'];
        $uid = $_SESSION['userdata']['id'];
        
        include "../database/db.php";
        $sql1 = "update user set votes = '{$total_votes}' where id = '{$gid}'";
        $result1  = mysqli_query($conn, $sql1);
        $sql2 = "update user set status = 1 where id = {$uid}";
        $result2 = mysqli_query($conn, $sql2);
        if($result1 and $result2){
            $groups = mysqli_query($conn, "select * from user where role = 2");
            $groupdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);
            $_SESSION['userdata']['status'] = 1;
            $_SESSION['groupdata'] = $groupdata;
            header("Location: http://localhost/online_voting/dashboard.php");
        }else{
            header("Location: http://localhost/online_voting/dashboard.php");
        }
    }
?>