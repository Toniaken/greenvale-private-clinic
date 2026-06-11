<?php
session_start();

$error = "";

$admin_username = getenv("ADMIN_USERNAME");
$admin_password_hash = getenv("ADMIN_PASSWORD_HASH");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === $admin_username && password_verify($password, $admin_password_hash)) {
        $_SESSION["admin_logged_in"] = true;
        $_SESSION["admin_username"] = $username;

        header("Location: admin.php");
        exit;
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login - GreenVale Private Clinic</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section class="booking-section">
    <h2>Admin Login</h2>
    <p class="section-intro">Only authorised clinic staff can access appointment records.</p>

    <form method="POST" action="login.php">

        <?php if (!empty($error)) { ?>
            <p class="error"><?php echo htmlspecialchars($error); ?></p>
        <?php } ?>

        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" class="btn">Login</button>
    </form>
</section>

</body>
</html>