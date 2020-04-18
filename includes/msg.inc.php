<?php
if (isset($_GET['register'])) {
    echo '
    <div class="alert alert-success" role="alert">
        Account Created Successfully
    </div>
    ';
}

if (isset($_GET['wrongpassword'])) {
    echo '
    <div class="alert alert-success" role="alert">
        Wrong Password
    </div>
    ';
}

if (isset($_GET['update'])) {
    echo '
    <div class="alert alert-success" role="alert">
        Successfully Updated
    </div>
    ';
}