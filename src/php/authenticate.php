<?php
if (isset($_POST['register_user'])) {
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    
    $hash = password_hash($pwd, PASSWORD_DEFAULT);


    $uid = "USER_".uniqid().time();

    $sql = "INSERT INTO users(uid, first_name, last_name, department, email, type, password) VALUES ('$uid', '$first', '$last', '$department', '$email', 'AICTE', '$hash')";
    mysqli_query($conn, $sql);

    header('location: ../../login.php?register=success');

}

?>