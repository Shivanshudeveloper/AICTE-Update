<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AICTE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php include './header.inc.php' ?>

<div class="container mt-5 mb-5">
    <h2 class="font-weight-bold mb-2">
    </h2>
<?php 
include '../src/php/dbh.php';

echo '
                        <h2 class="text-center">
                            Teachers Training Policy
                        </h2>
                        

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Module No</th>
                                    <th scope="col">Module Name</th>
                                    <th scope="col">Registration on Swayam</th>
                                    <th scope="col">Registration on NITTT.AC.IN</th>
                                </tr>
                            </thead>
                            <tbody>

                        ';

                    $sql = "SELECT * FROM teachers_training;";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr>
                            <th scope="row">'.$row['id'].'</th>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['swayam'].'</td>
                            <td>'.$row['nittt'].'</td>
                        </tr>
                        ';
                    }
                    echo '
                    </tbody>
                    </table>
                    <br>

                    <center>
                        <img src="../1.jpg" class="img w-75">
                    </center>


                    <p>
                        This initiative which is first of its kind in the world is poised to be a game changer. A user friendly portal www.nittt.ac.in enabling fresh inductees and the teachers to log in and register was launched on 12 Jan 2020 by Shri Ramesh Pokhriyal `Nishank` the Hon’ble Minister MHRD in the presence of AICTE officials in a glittering ceremony in Dehradun. The portal is user friendly and self-explanatory with built in features of compatibility with Swayam platform.
                    </p>
                    <strong>
                    Activities carried out towards the implementation of Technical Teachers Training-
                    </strong>
                    <p>
                    Sensitisation program towards awareness on NITTT has been conducted at following places:
                    - Kota <br>
                    - Rajkot<br>
                    - Mumbai<br>
                    - Guwahati<br>
                    - New Delhi<br>
                    - Anantpur<br>
                    - Dehradun<br>
                    - Cuttack<br>

                    2. Capacity building of Inter NITTTRs is presently going on for modules.<br>
                    3. Identification of mentor per institute is going on for the mentor based and industrial training program.<br>
                    4. Process for identification and making of higher level modules is on.<br>
                    5. All the 08 modules have been offered on Swayam and have since commenced.<br>
                    6. Towards monitoring the status, Google form incorporating details of teachers enrolled till date has been sent to all AICTE approved institutes.<br>
                    7. Schedule of the examination for the modules – <br>
                    <br>

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Course Title</th>
                                <th scope="col">Course Hours</th>
                                <th scope="col">Start</th>
                                <th scope="col">End</th>
                                <th scope="col">Exam</th>
                            </tr>
                        </thead>
                        <tbody>

                        ';

                        $sql = "SELECT * FROM teachers_training_3;";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '
                            <tr>
                                <th scope="row">'.$row['title'].'</th>
                                <td>'.$row['hours'].'</td>
                                <td>'.$row['start'].'</td>
                                <td>'.$row['end'].'</td>
                                <td>'.$row['exam'].'</td>
                            </tr>
                            ';
                        }
                        echo '
                        </tbody>
                    </table>
                    
                    ';

                    echo '
                    <strong>
                    Proposed activities for the Year 2020 - 21
                    </strong>
                    <br>

                    <p>
                    1. Finalisation on higher level modules for teachers into service and more than 05 years of service (proposed 25 modules) List enclosed.
                    <br>
                    Status
                    E contents, videos, coordinators interaction, mapping with existing courses, equivalence under finalisation.    
                    
                    2. Finalisation on gist modules ‘Essentials of Pedagogy for Technical Teachers – I & II’ for teachers into service and more than 05 years of service.
                    <br>
                    Status
                    Curriculum for ‘Essentials of Pedagogy for Technical Teachers – I & II’ prepared. E contents, videos, coordinators interaction, mapping with existing courses, equivalence under finalisation. 
                    
                    3. Finalisation on rubrics for mentor’s courses. 
                    <br>
                    Status
                    Draft circulated, comments under implementation.
                    
                    4. Finalisation on identification of mentors per institute as per laid down parameters.
                    <br>
                    Status
                    NITTTRs along with respective Regional offices of AICTE already interacting with the institutes.
                    
                    5. Finalisation of Academic regulations.
                    <br>
                    Status
                    Draft of academic regulations circulated amongst the committee members.
                    
                    6. Finalisation on the certificates for the courses –
                    
                        (aa)	Individual module certificates.
                        (ab)	Collective certificates of completion of all the 08 modules.
                        (ac)	Certificate of completion of industrial training.
                        (ad)	Certificate of completion of mentor based training.
                        (ae)	Certificate of completion of the Technical Teachers Training. 
                        <br>
                    Status
                    Draft of certificates circulated amongst the committee members.
                    
                    Higher level modules for teachers into service and more than 05 years of service (proposed 25 modules) 
                    
                    
                    </p>

                    
                    </p>
                    ';

                    echo '
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Module Code</th>
                            <th scope="col">Module Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        ';

                        $sql = "SELECT * FROM teachers_training_2;";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '
                            <tr>
                                <th scope="row">'.$row['code'].'</th>
                                <td>'.$row['name'].'</td>
                            </tr>
                            ';
                        }
                        echo '
                        </tbody>
                    </table>
                    
                    ';