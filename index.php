<?php include 'header.php'; ?>

<!-- MAIN-CONTENT-BEGIN -->
<div class="container">
    <div class="row mb-3">
        <div class="col">
            <h3 class="h3 text-capitalize text-center">login</h3>
        </div>
    </div>
    
    <form action="api/api_login.php" method="POST" autocomplete="off" name="myForm" onsubmit="return validate_form()">
        <div class="row mb-3">
            <div class="col" id="username">
                <input type="text" name="username" placeholder="Enter your username" class="form-control">
                <div class="formerror text-danger"></div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col" id="password">
                <input type="text" name="password" placeholder="Enter your password" class="form-control">
                <div class="formerror text-danger"></div>

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
                <input type="submit" class="btn btn-primary" value="Login" name="login">
                <input type="reset" class="btn btn-danger" value="Reset">
            </div>
        </div>
    </form>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <p>Don't Have an Account..? <strong><a href="http://localhost/online_voting/signup.php">Signup</a></strong></p>
        </div>
    </div>
</div>
<!-- MAIN-CONTENT-END -->

<?php include 'footer.php'; ?>