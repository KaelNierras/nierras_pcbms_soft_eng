<!-- login.php -->
<form class="login-form" action="login/UserLogin.php" method="post">
    <h2 class="text-center">Login</h2>
    <?php
    if (@$_GET['Invalid'] == 1) {
        ?>
        <div class="mdi mdi-do-not-disturb mr-1 alert alert-danger text-center my-3" role="alert">
            Incorrect email and/or password.
        </div>
        <?php
    }
    ?>
    <?php
    if (@$_GET['Invalid'] == 2) {
        ?>
        <div class="mdi mdi-do-not-disturb mr-1 alert alert-danger text-center my-3" role="alert">
            Role is incorrect, please try again.
        </div>
        <?php
    }
    ?>
    <div class="form-group ">
        <input type="text" class="form-control" name="username" placeholder="Username" required="required">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
    </div>
    <label for="role">Role:</label>
    <select id="role" name="role" required>
        <option value="" disabled selected>Select a role</option>
        <option value="Personnel">Personnel</option>
        <option value="Cashier">Cashier</option>
        <option value="Manager">Manager</option>
    </select>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Log in</button>
    </div>
</form>
