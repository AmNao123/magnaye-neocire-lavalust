<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Users</title>
</head>
<body>
    <h1>Update User</h1>

    <form method="POST" action="<?= site_url('/users/edit/' . $user['id']); ?>">
        <label>First Name:</label>
        <input type="text" name="firstname" value="<?= $user['firstname']; ?>" required><br><br>
        <label>Last Name:</label>
        <input type="text" name="lastname" value="<?= $user['lastname']; ?>" required><br></br>
        <label>Email:</label>
        <input type="email" name="email" value="<?= $user['email']; ?>" required><br></br>
        <label>Username:</label>
        <input type="text" name="username" value="<?= $user['username']; ?>" required><br></br>
        <button type="submit">Update User</button>
    </form>
</body>
</html>