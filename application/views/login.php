<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
</head>
<body>
    <h2>Log In</h2>
    <?php echo form_open('auth/login'); ?>
    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <input type="submit" value="Log In">
    <?php echo form_close(); ?>

    <?php if (isset($error)) echo $error; ?>
</body>
</html>
