<?php
include './dbh.php';

if (isset($_POST['edit_examination'])) {
    $id = 1;
    for ($i=0; $i <= 3; $i++) { 
        $awareness = mysqli_real_escape_string($conn, $_POST['awareness'.$i]);
        $faculties = mysqli_real_escape_string($conn, $_POST['faculties'.$i]);
        $workshop = mysqli_real_escape_string($conn, $_POST['workshop'.$i]);
        $faculties_trained = mysqli_real_escape_string($conn, $_POST['faculties_trained'.$i]);
        $remarks = mysqli_real_escape_string($conn, $_POST['remarks'.$i]);

        $sql = "UPDATE examincation SET awareness = '$awareness', faculties = '$faculties', workshop = '$workshop', faculties_trained = '$faculties_trained', remarks = '$remarks' WHERE id = '$id';";
        mysqli_query($conn, $sql);
        $id++;
        header("Location: ../../edit_examination.php?edit=success");
    }
}

if (isset($_POST['edit_student_development'])) {
    $id = 1;
    for ($i=0; $i <= 3; $i++) { 
        $beneficiary_16_17 = mysqli_real_escape_string($conn, $_POST['beneficiary_16_17'.$i]);
        $amount_16_17 = mysqli_real_escape_string($conn, $_POST['amount_16_17'.$i]);
        $beneficiary_17_18 = mysqli_real_escape_string($conn, $_POST['beneficiary_17_18'.$i]);
        $amount_17_18 = mysqli_real_escape_string($conn, $_POST['amount_17_18'.$i]);
        $beneficiary_18_19 = mysqli_real_escape_string($conn, $_POST['beneficiary_18_19'.$i]);
        $amount_18_19 = mysqli_real_escape_string($conn, $_POST['amount_18_19'.$i]);
        $beneficiary_19_20 = mysqli_real_escape_string($conn, $_POST['beneficiary_19_20'.$i]);
        $amount_19_20 = mysqli_real_escape_string($conn, $_POST['amount_19_20'.$i]);
        $beneficiary_20_21 = mysqli_real_escape_string($conn, $_POST['beneficiary_20_21'.$i]);
        $amount_20_21 = mysqli_real_escape_string($conn, $_POST['amount_20_21'.$i]);
        $sql = "UPDATE student_development SET beneficiary_16_17 = '$beneficiary_16_17', amount_16_17 = '$amount_16_17', beneficiary_17_18 = '$beneficiary_17_18', amount_17_18 = '$amount_17_18', beneficiary_18_19 = '$beneficiary_18_19', amount_18_19 = '$amount_18_19', beneficiary_19_20 = '$beneficiary_19_20', amount_19_20 = '$amount_19_20', beneficiary_20_21 = '$beneficiary_20_21', amount_20_21 = '$amount_20_21' WHERE id = '$id';";
        mysqli_query($conn, $sql);
        $id++;
        header("Location: ../../edit_student_development.php?edit=success");
    }
}

if (isset($_POST['edit_status_grant'])) {
    $id = 1;
    for ($i=0; $i <= 3; $i++) { 
        $y1 = mysqli_real_escape_string($conn, $_POST['2018-19_t'.$i]);
        $y2 = mysqli_real_escape_string($conn, $_POST['2018-19_p'.$i]);
        $y3 = mysqli_real_escape_string($conn, $_POST['2019-20_tp'.$i]);
        $y4 = mysqli_real_escape_string($conn, $_POST['2019-20_rs'.$i]);
        $y5 = mysqli_real_escape_string($conn, $_POST['2019-20_rs_tp1'.$i]);
        $y6 = mysqli_real_escape_string($conn, $_POST['2019-20_rs_tp2'.$i]);



        $sql = "UPDATE status SET `2018-19_t` = '$y1', `2018-19_p` = '$y2', `2019-20_tp` = '$y3', `2019-20_rs` = '$y4', `2019-20_rs_tp1` = '$y5', `2019-20_rs_tp2` = '$y6' WHERE id = '$id';";
        mysqli_query($conn, $sql);
        $id++;
        header("Location: ../../edit_status_grant.php?edit=success");
    }
}


if (isset($_POST['edit_summer_internship'])) {
    $id = 1;
    for ($i=0; $i <= 3; $i++) { 
        $y1 = mysqli_real_escape_string($conn, $_POST['first_year'.$i]);
        $y2 = mysqli_real_escape_string($conn, $_POST['second_year'.$i]);
        $y3 = mysqli_real_escape_string($conn, $_POST['third_year'.$i]);
        $y4 = mysqli_real_escape_string($conn, $_POST['total'.$i]);



        $sql = "UPDATE summer_internships SET `first_year` = '$y1', `second_year` = '$y2', `third_year` = '$y3', `total` = '$y4' WHERE id = '$id';";
        mysqli_query($conn, $sql);
        $id++;
        header("Location: ../../edit_summer_internship.php?edit=success");
    }
}


if (isset($_POST['edit_neat'])) {
        $id = 1;
        $y1 = mysqli_real_escape_string($conn, $_POST['tot1']);
        $y2 = mysqli_real_escape_string($conn, $_POST['stu1']);
        $y3 = mysqli_real_escape_string($conn, $_POST['learn1']);


        $sql = "UPDATE neat SET toal_registration = '$y1', student_register = '$y2', learner_register = '$y3' WHERE id = '$id';";
        mysqli_query($conn, $sql);
        header("Location: ../../edit_neat.php?edit=success");
}

if (isset($_POST['edit_sih'])) {
    $id = 1;
    for ($i=0; $i < 3; $i++) { 
        $y1 = mysqli_real_escape_string($conn, $_POST['pss'.$i]);
        $y2 = mysqli_real_escape_string($conn, $_POST['industry'.$i]);
        $y3 = mysqli_real_escape_string($conn, $_POST['reached'.$i]);
        $y4 = mysqli_real_escape_string($conn, $_POST['participated'.$i]);
        $y5 = mysqli_real_escape_string($conn, $_POST['centres'.$i]);
        $y6 = mysqli_real_escape_string($conn, $_POST['successful'.$i]);


        $sql = "UPDATE sih SET `pss` = '$y1', `industry` = '$y2', `reached` = '$y3', `participated` = '$y4', `centres` = '$y5', `successful` = '$y6' WHERE id = '$id';";
        mysqli_query($conn, $sql);
        $id++;
        header("Location: ../../edit_sih.php?edit=success");
    }
}


if (isset($_POST['edit_pmsss'])) {
    $id = 1;
    for ($i=0; $i <= 3; $i++) { 
        $y1 = mysqli_real_escape_string($conn, $_POST['beneficiaries_1'.$i]);
        $y2 = mysqli_real_escape_string($conn, $_POST['year_2'.$i]);
        $y3 = mysqli_real_escape_string($conn, $_POST['beneficiaries_2'.$i]);


        $sql = "UPDATE pmsss SET `beneficiaries_1` = '$y1', `year_2` = '$y2', `beneficiaries_2` = '$y3' WHERE id = '$id';";
        mysqli_query($conn, $sql);
        $id++;
        header("Location: ../../edit_pmsss.php?edit=success");
    }
}


if (isset($_POST['edit_skill'])) {
    $id = 1;
    for ($i=0; $i <= 3; $i++) { 
        $y1 = mysqli_real_escape_string($conn, $_POST['a1'.$i]);
        $y2 = mysqli_real_escape_string($conn, $_POST['a2'.$i]);
        $y3 = mysqli_real_escape_string($conn, $_POST['a3'.$i]);
        $y4 = mysqli_real_escape_string($conn, $_POST['a4'.$i]);
        $sql = "UPDATE skill SET `AY_2017-18` = '$y1', `AY_2018-19` = '$y2', `AY_2019-20` = '$y3', `AY_2020-21` = '$y4' WHERE id = '$id';";
        mysqli_query($conn, $sql);
        $id++;
        header("Location: ../../edit_skill.php?edit=success");
    }
}

if (isset($_POST['edit_skill'])) {
    $id = 1;
    for ($i=0; $i <= 3; $i++) { 
        $y1 = mysqli_real_escape_string($conn, $_POST['a1'.$i]);
        $y2 = mysqli_real_escape_string($conn, $_POST['a2'.$i]);
        $y3 = mysqli_real_escape_string($conn, $_POST['a3'.$i]);
        $y4 = mysqli_real_escape_string($conn, $_POST['a4'.$i]);
        $sql = "UPDATE skill SET `AY_2017-18` = '$y1', `AY_2018-19` = '$y2', `AY_2019-20` = '$y3', `AY_2020-21` = '$y4' WHERE id = '$id';";
        mysqli_query($conn, $sql);
        $id++;
        header("Location: ../../edit_skill.php?edit=success");
    }
}


if (isset($_POST['edit_induction'])) {
    $id = 1;
    for ($i=0; $i < 3; $i++) { 
        $y1 = mysqli_real_escape_string($conn, $_POST['fdp'.$i]);
        $y2 = mysqli_real_escape_string($conn, $_POST['participants'.$i]);
        
        $sql = "UPDATE induction SET `fdp` = '$y1', `participants` = '$y2' WHERE id = '$id';";
        mysqli_query($conn, $sql);
        $id++;
        header("Location: ../../edit_induction.php?edit=success");
    }
}