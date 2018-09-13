<!DOCTYPE html>
<html>
<head>
    <title>Conference Room Booking App - Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/themes/1/conf-room1.min.css" rel="stylesheet" />
    <link href="../css/themes/1/jquery.mobile.icons.min.css" rel="stylesheet" />
    <link href="../../../lib/jqm/1.4.4/jquery.mobile.structure-1.4.4.min.css" rel="stylesheet" />
    <link href="../css/app.css" rel="stylesheet" />
    <script src="../../../lib/jquery/2.1.1/jquery-2.1.1.min.js"></script>
    <script src="../../../lib/jqm/1.4.4/jquery.mobile-1.4.4.min.js"></script>
</head>

<body>
<div data-role="page">
    <div data-role="header" data-theme="c">
        <h1>Book It</h1>
    </div><!-- /header -->
    <div role="main" class="ui-content">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
</div><!-- /page -->

</body>
</html>
