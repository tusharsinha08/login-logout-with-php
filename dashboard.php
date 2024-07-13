<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p>This is your dashboard.</p>
    <a href="logout.html">Logout</a><br>
    <a href="update.html">Update Information</a><br>
    <?php if ($_SESSION['username'] == 'admin') { ?>
        <a href="admin.php">View Registered Users</a>
    <?php } ?>
</body>
</html>
