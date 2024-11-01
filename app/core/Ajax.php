<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user_type'])) {
        // Save the user type in the session
        $_SESSION['user_type'] = $_POST['user_type'];
        echo "User type saved: " . $_SESSION['user_type'];
    }
?>