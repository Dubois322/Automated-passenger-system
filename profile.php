<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h2>User Profile</h2>
    <!-- Display user profile details retrieved from the database -->
    <p>Welcome, [username]!</p>
    <p>Email: [email]</p>

    <h3>Update Profile</h3>
    <form action="update_profile.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <input type="submit" value="Update Profile">
    </form>
</body>
</html>
