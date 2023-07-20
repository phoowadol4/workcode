<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['gender']) && isset($_POST['age'])) {
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['age'] = $_POST['age'];

        // Redirect to Page 3
        header('Location: formtest.php');
        exit();
    }
}
?>
