<?php
session_start();

if (!isset($_SESSION['form_data'])) {
    echo "<p style='color:red;'>No form data found. Please fill out the form first.</p>";
    echo "<a href='register.php'>Go back to the form</a>";
    exit;
}

$data = $_SESSION['form_data'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Submission Success</title>
</head>
<body>
    <h2 style="color:green;">Form Submitted Successfully!</h2>
    <h3>Submitted Information:</h3>
    <ul>
        <li><strong>Username:</strong> <?= htmlspecialchars($data['username']) ?></li>
        <li><strong>Email:</strong> <?= htmlspecialchars($data['email']) ?></li>
        <li><strong>Age:</strong> <?= htmlspecialchars($data['age']) ?></li>
    </ul>

    <a href="register.php">Go back to form</a>
</body>
</html>

<?php
// حذف البيانات بعد عرضها
unset($_SESSION['form_data']);
?>
