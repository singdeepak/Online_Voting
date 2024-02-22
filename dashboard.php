<?php
session_start();
if (!isset($_SESSION['userdata'])) {
    header("Location: index.php");
}

$userdata = $_SESSION['userdata'];
$groupdata = $_SESSION['groupdata'];


include 'header.php';
?>

<!-- MAIN-CONTENT-BEGIN -->
<div class="container">
    <div class="row">
        <div class="col">
            <a href="index.php" class="btn btn-secondary">Back</a>
            <a href="logout.php" class="btn btn-danger float-end">Logout</a>
        </div>
    </div>


    <div class="row my-4 justify-content-between">
        <div class="col-4 p-5 bg-secondary">
            <?php

            ?>
            <div class="row mb-3">
                <div class="col">
                    <img src="<?php echo "assets/uploads/" . $userdata['image']; ?>" class="img-fluid userimage" alt="">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col text-light">
                    <strong>Contact : </strong>
                    <span><?php echo $userdata['contact']; ?></span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col text-light">
                    <strong>Name : </strong>
                    <span><?php echo $userdata['name']; ?></span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col text-light">
                    <strong>Address : </strong>
                    <span><?php echo $userdata['address']; ?></span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col text-light">
                    <strong>Status : </strong>
                    <?php
                    if ($_SESSION['userdata']['status'] == 0) {
                    ?>
                        <span class="badge bg-danger">Not Voted</span>
                    <?php
                    } else { ?>
                        <span class="badge bg-success">Voted</span>
                    <?php }
                    ?>
                </div>
            </div>
        </div>


        <div class="col-6 bg-danger">
            <?php
            if($_SESSION['groupdata']){
                for($i=0; $i<count($groupdata); $i++){?>
                    <div class="row p-5">
                    <div class="col text-light">
                        <div class="row mb-3">
                            <div class="col">
                                <strong>Group Name : </strong>
                                <span><?php echo $groupdata[$i]['name']; ?></span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col text-light">
                                <strong>Votes : </strong>
                                <span><?php echo $groupdata[$i]['votes']; ?></span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                            <form action="api/api_votes.php" method="POST">
                                            <input type="hidden" name="gvotes" value="<?php echo $groupdata[$i]['votes']; ?>">
                                            <input type="hidden" name="gid" value="<?php echo $groupdata[$i]['id']; ?>">
                                            
                                            <?php
                                    if($_SESSION['userdata']['status'] == 0){?>
                                        <input type="submit" class="btn btn-secondary" value="vote" name="votebtn">
                                        <?php  }else{?>
                                            <input type="button" class="btn btn-success" value="voted" muted>
                                            <?php }
                                ?>
                            </form>
                            </div>
                        </div>
                        <hr>


                    </div>


                    <div class="col">
                        <img src="<?php echo "assets/uploads/".$groupdata[$i]['image']; ?>" class="img-fluid userimage float-end" alt="">
                    </div>
                </div>
                <?php }
            }
            ?>
        </div>
    </div>
</div>

<!-- MAIN-CONTENT-END -->

<?php include 'footer.php'; ?>