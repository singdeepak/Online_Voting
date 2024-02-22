<?php include 'header.php'; ?>

<!-- MAIN-CONTENT-BEGIN -->
<div class="container">
    <div class="row mb-3">
        <div class="col">
            <h3 class="h3 text-center text-capitalize">signup</h3>
        </div>
    </div>

    <form action="api/api_signup.php" method="POST" autocomplete="off" enctype="multipart/form-data">
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" placeholder="Enter your name" class="form-control">
            </div>
            <div class="col">
                <input type="text" name="contact" placeholder="Enter your contact" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="password" placeholder="Password" class="form-control">
            </div>
            <div class="col">
                <input type="text" name="cpassword" placeholder="Confirm Password" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <textarea name="address" id="" cols="30" rows="3" class="form-control" placeholder="Enter your address"></textarea>
            </div>
        </div>


        <div class="row mb-3">
            <div class="col">
                <input type="file" class="form-control" name="image">
            </div>
        </div>


        <div class="row mb-3">
            <div class="col">
                <select name="role" class="form-select">
                    <option value="1">Voter</option>
                    <option value="2">Group</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="submit" class="btn btn-primary" value="Signup" name="submit">
                <input type="reset" class="btn btn-danger" value="Reset">
            </div>
        </div>
    </form>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <p>Already Have an Account..? <strong><a href="http://localhost/online_voting/index.php">Login</a></strong></p>
        </div>
    </div>
</div>
<!-- MAIN-CONTENT-END -->

<?php include 'footer.php'; ?>