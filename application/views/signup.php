<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
    <h1>Registration</h1>
    <?php  echo form_open('auth/signup'); ?>
        <label for="name">Name</label>
        <input type="text" name="name" required><br>
        <label for="name">E-mail</label>
        <input type="text" name="email" required><br>
        <label for="name">Password</label>
        <input type="text" name="password" required><br>
        <input type="submit" name="submit">
        
    <?php echo form_close(); ?>

    </div>

    
</body>
</html>


