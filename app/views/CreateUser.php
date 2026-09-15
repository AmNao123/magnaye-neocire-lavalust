<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    <h1>Create User</h1>

    <form method="POST">
        <label>First Name:</label>
        <input type="text" name="firstname" required><br><br>
        <label>Last Name:</label>
        <input type="text" name="lastname" required><br></br>
        <label>Email:</label>
        <input type="email" name="email" required><br></br>
        <label>Username:</label>
        <input type="text" name="username" required><br></br>
        <button type="submit">Create User</button>
    </form>

    <br>

    <a href="<?= site_url('/users'); ?>">Back to Users</a>
</body>
</html>