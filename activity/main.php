<?php
include './dbh.php';


if (isset($_POST['submit'])) {

    $f1 = $_POST['f1'];
    $f2 = $_POST['f2'];
    $f3 = $_POST['f3'];
    $f4 = $_POST['f4'];
    $f5 = $_POST['f5'];
    $f6 = $_POST['f6'];
    $f7 = $_POST['f7'];
    $f8 = $_POST['f8'];
    $f9 = $_POST['f9'];

    $sql = "UPDATE examination_reforms SET  GURUGRAM='$f9',UDAIPUR='$f8' ,PUNE = '$f7', KOLKATA = '$f6' ,THRISHUR = '$f1', HYDERABAD = '$f2', AHMEDABAD = '$f3', BHUBANESHWAR = '$f4', PATNA = '$f5' WHERE id = 1;";

    mysqli_query($conn, $sql);
    header("Location: er.php");
}

if (isset($_POST['submit2'])) {
    $f1 = $_POST['f1'];
    $f2 = $_POST['f2'];
    $f3 = $_POST['f3'];
    $f4 = $_POST['f4'];

    $sql = "UPDATE institution_innovation_cell SET TOTAL = '$f1', INDIA_FIRST = '$f2', WORKSHOPS = '$f3', INNOVATION = '$f3';";
    mysqli_query($conn, $sql);
    header("Location: inv.php");
}


$query = "SELECT * FROM examination_reforms;";
$query2 = "SELECT * FROM institution_innovation_cell;";
$query_swayam = "SELECT * FROM swayam;";

if (isset($_POST['swayam_1'])) {
    $result = mysqli_query($conn, $query2);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['student_enrollment'];
    }
}

if (isset($_POST['swayam_2'])) {
    $result = mysqli_query($conn, $query2);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['courses_completed'];
    }
}

if (isset($_POST['swayam_3'])) {
    $result = mysqli_query($conn, $query2);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['institutes'];
    }
}


if (isset($_POST['inv_1'])) {
    $result = mysqli_query($conn, $query2);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['TOTAL'];
    }
}

if (isset($_POST['inv_2'])) {
    $result = mysqli_query($conn, $query2);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['INDIA_FIRST'];
    }
}

if (isset($_POST['inv_3'])) {
    $result = mysqli_query($conn, $query2);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['WORKSHOPS'];
    }
}

if (isset($_POST['inv_4'])) {
    $result = mysqli_query($conn, $query2);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['INNOVATION'];
    }
}



if (isset($_POST['er_1'])) {
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['THRISHUR'];
    }
}

if (isset($_POST['er_2'])) {
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['HYDERABAD'];
    }
}

if (isset($_POST['er_3'])) {
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['AHMEDABAD'];
    }
}

if (isset($_POST['er_4'])) {
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['BHUBANESHWAR'];
    }
}

if (isset($_POST['er_5'])) {
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['PATNA'];
    }
}

if (isset($_POST['er_6'])) {
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['KOLKATA'];
    }
}

if (isset($_POST['er_7'])) {
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['PUNE'];
    }
}

if (isset($_POST['er_8'])) {
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['UDAIPUR'];
    }
}


if (isset($_POST['er_9'])) {
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['GURUGRAM'];
    }
}