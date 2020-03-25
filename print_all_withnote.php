<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AICTE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php include './includes/header.inc.php' ?>

<div class="m-5">
    <h2 class="font-weight-bold mb-2">
        All India Council for Technical Education
    </h2>
    <?php
        include_once './src/php/dbh.php';
        $sql1 = "SELECT * FROM information;";
        $result1 = mysqli_query($conn, $sql1);
        $table_name = '';
        echo '
        <button onclick="window.print();" class="btn btn-outline-secondary float-right mb-2">Print</button>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Notes</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>';
        while ($row1 = mysqli_fetch_assoc($result1)) {
            $table_name = $row1['tables'];
            echo '
                <div class="alert alert-primary" role="alert">
                    <center class="h2 font-weight-bold">
                        '.$row1['name'].'
                    </center>
                </div>
            ';
            echo '
                <div class="card mt-2">
                    <div class="card-body">
                        <h2 class="card-title">'.$row1['name'].'</h2>
                        <p class="card-text">
                        '.$row1['description'].'
                        <br>
                        </p>
                    </div>
                </div>'
                ;

            if ($table_name == "teacher_training.php") {
                echo '
                        <h2 class="text-center">
                            Teachers Training Policy
                        </h2>
                        <p>
                            This brings out character building, important facets of new teaching methodology, better and innovative means of transferring knowledge from one to another as against the existing refresher courses / domain specific courses being imparted. Towards this, eight online courses have been prepared in collaboration with NITTTRs which have since been included in gazette notification for 7th pay commission, as applicable mandatorily to new inductee teachers and teachers into service with less than five years of experience. Registration status is as follows:
                        </p>

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
                        <img src="1.jpg" class="img w-75">
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

                    echo '
                    <div class="row">
                        <div class="col">

                            <div class="card mt-2">
                                <div class="card-body">
                                    <h4 class="card-title">Proposed Target (Future Target F.Y. 2020-21)</h4>
                                    <p class="card-text">
                                    '.$row1['proposed'].'
                                    <br>
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col">

                            <div class="card mt-2">
                                <div class="card-body">
                                    <h4 class="card-title">Targets Met Till Date (Future Target F.Y. 2020-21)</h4>
                                    <p class="card-text">
                                    '.$row1['future'].'
                                    <br>
                                    </p>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <br />
                    <hr />
                    <br />
                        
                    ';
            } else {
                echo '
                    <div class="card mt-2">
                    <div class="card-body">
                        <iframe id="inlineFrameExample"
                            title="Inline Frame Example"
                            width="100%"
                            height="700"
                            frameBorder="0"
                            src="./iframe/'.$table_name.'">
                        </iframe>
                        </div>
                    </div>
                ';

                echo '
                    <div class="row">
                        <div class="col">

                            <div class="card mt-2">
                                <div class="card-body">
                                    <h4 class="card-title">Proposed Target (Future Target F.Y. 2020-21)</h4>
                                    <p class="card-text">
                                    '.$row1['proposed'].'
                                    <br>
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col">

                            <div class="card mt-2">
                                <div class="card-body">
                                    <h4 class="card-title">Targets Met Till Date (Future Target F.Y. 2020-21)</h4>
                                    <p class="card-text">
                                    '.$row1['future'].'
                                    <br>
                                    </p>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <br />
                    <hr />
                    <br />
                        
                ';
            }
            
        }


        $sql = "SELECT * FROM new_scheme;";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
                <div class="alert alert-primary" role="alert">
                    <center class="h2 font-weight-bold">
                        '.$row1['title'].'
                    </center>
                </div>
            ';
            echo 
                            '
                            <div class="card mt-2">
                                <div class="card-body">
                                    <h2 class="card-title">'.$row['title'].'</h2>
                                    <h2 class="card-title">'.$row['scheme'].'</h2>
                                    <p class="card-text">
                                    '.$row['description'].'
                                        <br>
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <h4 class="card-title">Proposed Target (Future Target F.Y. 2020-21)</h4>
                                    <div class="card mt-2">
                                        <div class="card-body">
                                            <p class="card-text">
                                            '.$row['proposed_target'].'
                                                <br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row mt-2">
                                <div class="col">
                                    <h4 class="card-title">Targets Met Till Date (Future Target F.Y. 2020-21)</h4>
                                    <div class="card mt-2">
                                        <div class="card-body">
                                            <p class="card-text">
                                            '.$row['future_target'].'
                                                <br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <hr />
                            <br />
                            
                            ';
        }

        echo '
                            <h2 class="text-center mt-2">
                                VVIP/PMO References
                            </h2>
                            
                            <table class="table mt-2" cellspacing="0" border="0">
                            <!-- <colgroup width="46"></colgroup>
                            <colgroup span="2" width="75"></colgroup>
                            <colgroup width="546"></colgroup>
                            <colgroup width="1894"></colgroup>
                            <colgroup width="253"></colgroup>
                            <colgroup width="215"></colgroup>
                            <colgroup width="174"></colgroup>
                            <colgroup width="447"></colgroup> -->
                            <thead class="thead-dark">
                                <tr>
                                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 height="40" align="center" valign=middle><b><font size=3 color="#2E75B6">S.No.</font></b></td>
                                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size=3 color="#2E75B6">Inward in MS Sectt. </font></b></td>
                                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size=3 color="#2E75B6">Recd. On</font></b></td>
                                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size=3 color="#2E75B6">From </font></b></td>
                                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="left" valign=top><b><font size=3 color="#2E75B6">Details of Correspondence </font></b></td>
                                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top><b><font size=3 color="#2E75B6">Letter No. / Date</font></b></td>
                                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size=3 color="#2E75B6">Dispatch To</font></b></td>
                                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size=3 color="#2E75B6">Date of Dispossed of Application </font></b></td>
                                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top><b><font size=3 color="#2E75B6">Remarks</font></b></td>
                                </tr>
                            </thead>
                            
                            <tr>
                                </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=7 height="1100" align="center" valign=middle sdval="1" sdnum="1033;"><font size=3 color="#000000">1</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=7 align="center" valign=middle><font size=3 color="#000000">1 (161/CM)</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=7 align="center" valign=middle><font size="3" color="#000000">08.01.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=7 align="center" valign=middle><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">From Shri B.S. Yadav , BIT Campus , Jhaansi </font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=7 align="center" valign=top><font size="3" color="#000000">F.No. 20-1/2020-TS.II Dt. 02.01.2020 </font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=7 align="center" valign=middle><font size="3" color="#000000">DD(PGRC)</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=7 align="center" valign=middle><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Replied</font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Smt. Krishna Devi , Sector -23 Rohini .</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Adv.(RIFD)/10.01.20</font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">From Shri Sudhir Mohan , Dehradun </font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Replied</font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">From Dr. Sahadeb Mandal , Physical Instructor , BIET , Jhansi</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Adv.(RIFD)/10.01.20</font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">From Sri Nabin Chandra Som , Jogendranagar , Tripura</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Sent</font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">From Shri Mrigendra Nath Mishra , Mishrauli , Gazipur </font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Replied</font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">From Shri H. Abdul Hadi , India Internation Inspring , Restriya Gaurav Awardee , Pondicherry.</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">RIFD</font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 height="200" align="center" valign=middle sdval="2" sdnum="1033;"><font size="3" color="#000000">2</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle><font size="3" color="#000000">2(153/CM)</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle><font size="3" color="#000000">08.01.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="left" valign=bottom><font size="3" color="#000000">VIP reference received from Shri A. Ganeshamurthy , MP ( Lok Sabha ) regarding absorption of Shri Ramesh as Assistant Director in AICTE -regarding</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=top><font size="3" color="#000000">F.No. 2-1/2020-TS-II Dt. 02.01.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle><font size="3" color="#000000">Dir(Admin)</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=top><font size="3" color="#000000">Replied on 17.01.2020</font></td>
                            </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 height="80" align="center" valign=middle sdval="3" sdnum="1033;"><font size="3" color="#000000">3</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle sdval="3" sdnum="1033;"><font size="3" color="#000000">3</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000">09.01.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000">Complaint received From CVC -reg. received in this office under vigilance section OM No. C. 13011/67/2019-Vig Dt. 20.12.2020 ( Complaint Made by Mr. Vijay Tiwari regarding Threat to Life with a reference to AICTE              2. Complaints made by Mr. Vijay Kumar Gude regarding college running with fake NBA accreditation in Hyderabd  (3) Complaint made by M/s Paras Engineers regarding non availability of Expert Visit Committee Report documents  adn Vidio CD in Durya Polytechnic for Engg &amp; Tech. ( Hapur Case)</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=top><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 02.01.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000">CVO </font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=top><font size="3" color="#000000">Under Process  all cases forward from CVO to AB</font></td>
                            </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 height="60" align="center" valign=middle sdval="4" sdnum="1033;"><b><font size="3" color="#000000">4</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle sdval="4" sdnum="1033;"><b><font size="3" color="#000000">4</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle><b><font size="3" color="#000000">15.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle><b><font size="3" color="#000000">B.K. Bhadri , Depuy Eduation Advisor (DL&amp;L)  MHRD , Shastri Bhawan , New Delhi </font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=top><b><font size="3" color="#000000">Honble Prime Minsters speech at Singapore - India Hackathon Event at IIT chennai - REgarding</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=top><b><font size="3" color="#000000">F.NO. 12-3/2019-TS-II Dt. 06.01.2019</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle><b><font size="3" color="#000000">CIO</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=top><font size="3" color="#000000"><br></font></td>
                            </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 height="120" align="center" valign=middle sdval="5" sdnum="1033;"><b><font size="3" color="#000000">5</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle sdval="5" sdnum="1033;"><b><font size="3" color="#000000">5</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000">15.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=top><b><font size="3" color="#000000">Two letter No.  M. 11018/04/2019-Coordination (FTS NO. 664212 &amp; FTS NO. 656769) dt. 26.12.2019 forwarding request from Shri Pradeep Kumar Pathak and Shri Rjni Kant to appoint member of any committee under MHRD.</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=top><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 08.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000">Adv.(P&amp;AP)/16.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=top><font size="3" color="#000000"><br></font></td>
                            </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 height="200" align="center" valign=middle sdval="6" sdnum="1033;"><b><font size="3" color="#000000">6</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle sdval="6" sdnum="1033;"><b><font size="3" color="#000000">6</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle><b><font size="3" color="#000000">15.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=top><b><font size="3" color="#000000">Clarification regarding the eligiblity of Dr. Tarakeshwar Patil as Assoicate Professor  in AICTE Approved Engineering Colleges -reg.</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=top><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 10.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle><b><font size="3" color="#000000">Adv.(RIFD)/ 16.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=top><font size="3" color="#000000">Replied on 10.02.2020 Letter No. 32-03/RIFD/VIP-Ref .l2ol9-2o I 13</font></td>
                            </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=12 height="240" align="center" valign=middle sdval="7" sdnum="1033;"><b><font size="3" color="#000000">7</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=12 align="center" valign=middle sdval="7" sdnum="1033;"><b><font size="3" color="#000000">7</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=12 align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">15.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=12 align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=12 align="center" valign=top><b><font size=4 color="#000000">Complaint aginst Blue Mountains Groups of College Kandoli, Dehradun -reg.</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=12 align="center" valign=top><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 08.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=12 align="center" valign=middle><b><font size="3" color="#000000">DD(PGRC)</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=12 align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=12 align="center" valign=top><font size="3" color="#000000">Replied</font></td>
                            </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="380" align="center" valign=middle sdval="8" sdnum="1033;"><b><font size="3" color="#000000">8</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="8" sdnum="1033;"><b><font size="3" color="#000000">8</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">15.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">Permanent absorption of existing incumbents working on deputtion basis and completed at lest one year service in AICTE -reg. </font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">F.NO. 20-03/2020/TS-II Dt, 08.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Dir(Admin)</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top><font size="3" color="#000000">Replied</font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 height="120" align="center" valign=middle sdval="9" sdnum="1033;"><b><font size="3" color="#000000">9</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle sdval="9" sdnum="1033;"><b><font size="3" color="#000000">9</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">15.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="left" valign=top><b><font size="3" color="#000000">VIP Reference of Dr. Harsh Vardhan , Honble Minister of Health &amp; Family Welfare , Science &amp; Technology and Earth Sciences for hearted support for IISF -2019-reg</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=top><b><font size="3" color="#000000">F.No. 1-11/2019-TC Dt. 07.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000">Adv.(P&amp;AP)/17.01.2020 By mail</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=top><b><font size="3" color="#000000"><br></font></b></td>
                            </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="320" align="center" valign=middle sdval="10" sdnum="1033;"><b><font size="3" color="#000000">10</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="10" sdnum="1033;"><b><font size="3" color="#000000">10</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">17.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">Withdrawal of affiliation order to dr. B.R. Ambedkar Institute of Technology by Pondichery  University -reg.</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">F.No. 2-6/2017-TC Dt. 10.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Adv.(AB)/PS /21.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top><font size="3" color="#000000"><br></font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 height="2212" align="center" valign=middle sdval="11" sdnum="1033;"><b><font size="3" color="#000000">11</font></b></td>
                                <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle sdval="11" sdnum="1033;"><b><font size="3" color="#000000">11</font></b></td>
                                <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">20.01.2019</font></b></td>
                                <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">From Dr. Mohanlal Sahu , District Surajpur , Chhattisgarh regarding National Education Consultant Committee.</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=top><b><font size="3" color="#000000">F.No. 20-1/2020-TS.II Dt. 13.01.2020  (283/CM)</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=top><b><font size="3" color="#000000">DD(PGRC)/ 21.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">P&amp;AP</font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">From Shri Bhaskar Sastry Vemparla , Amalapuram regarding request for benefits like concesion in Railway Travelling , Sanad from the Prime Minister of India.</font></b></td>
                                <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Returned (not pertain)</font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">From Dr. M. Periyasamy , Principal, Syed Ammal decrement in number of admission for Master of Engineering Courses in Engineering  Colleges - Threat of extinction of high quality research in Science and Technology and Engineering Streams - Seeking of Remedial measures.</font></b></td>
                                <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Adv.(P&amp;AP)</font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">From Ahmed Mohammad Ismail regarding Seeking justice from an Institue (MBA) for being deceitful.</font></b></td>
                                <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Returned (not pertain)</font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">From Shri H. Abdul Hadi , India Internation Inspring , Restriya Gaurav Awardee , Pondicherry regarding pay anomaly in the scale of pay of Shri Thiru H.  Abdul Hadi , Sr. Instructor from Motilal Nehru Government Polytechnic  College .</font></b></td>
                                <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">RIFD </font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 height="120" align="center" valign=middle sdval="12" sdnum="1033;"><b><font size="3" color="#000000">12</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle sdval="12" sdnum="1033;"><b><font size="3" color="#000000">12</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">22.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=top><b><font size="3" color="#000000">Committee on welfare of other Backward Class - Selection of Subject for Examination during the year 2019-20 -reg.</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=top><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 15.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000">Dir(Admin)</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=top><b><font size="3" color="#000000"><br></font></b></td>
                            </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 height="40" align="center" valign=middle sdval="13" sdnum="1033;"><b><font size="3" color="#000000">13</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle sdval="13" sdnum="1033;"><b><font size="3" color="#000000">13</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">22.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top><b><font size="3" color="#000000">Meeting held under the Chairmanship of Honble Minister of State to discuss issues raised by Shri Omprakash alias Bachhu Kadu , MLA Maharastra concerning persons with disability -reg.</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top><b><font size="3" color="#000000">F.NO. 20-03/2020/TS-II Dt. 14.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size="3" color="#000000">DD(PGRC)/ 22.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top><b><font size="3" color="#000000">Adv. (P&amp;AP)/</font></b></td>
                            </tr>
                            <tr>
                                </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 height="40" align="center" valign=middle sdval="14" sdnum="1033;"><b><font size="3" color="#000000">14</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle sdval="14" sdnum="1033;"><b><font size="3" color="#000000">14</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">22.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top><b><font size="3" color="#000000">Representation from Shri Sudhir Mohan &amp; Shri Jessy Roy -reg.</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 15.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size="3" color="#000000">DD(PGRC)/ 22.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top><b><font size="3" color="#000000">Replied </font></b></td>
                            </tr>
                            <tr>
                                </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="546" align="center" valign=middle sdval="15" sdnum="1033;"><b><font size="3" color="#000000">15</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="15" sdnum="1033;"><b><font size="3" color="#000000">15</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">23.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">Misc Complaint  From Shri Rambabu Chaturvedy addressed to Deputy Director (PGRC) , AICTE New Delhi regardig non-refund of fees by ITM/PGDM College Kharghar , New Mumbai. ( RV College of Engineering , Bengaluru)</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt, 17.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">DD(PGRC)/ 24.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">Replied </font></b></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="440" align="center" valign=middle sdval="16" sdnum="1033;"><b><font size="3" color="#000000">16</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="16" sdnum="1033;"><b><font size="3" color="#000000">16</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">27.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">Swachhta Pakhwada Awrds 2019-Reg. ( its is requested that requisite information may be provided to ESEB Cell directly under intimation to this Section)</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">F.NO. 20-03/2020/TS-II Dt. 14.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Dir(Admin)/27.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">Dir(E-gov)</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">replied</font></b></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="400" align="center" valign=middle sdval="17" sdnum="1033;"><b><font size="3" color="#000000">17</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="17" sdnum="1033;"><b><font size="3" color="#000000">17</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">27.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">12th Meeting of the Standing Committee / 24th  Meeting of the Eastern Zonal council - Submission of Items for inclusion in Agenda -reg.</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">F.NO. 20-03/2020/TS-II Dt. 14.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Adv.(P&amp;AP)/ 27.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="546" align="center" valign=middle sdval="18" sdnum="1033;"><b><font size="3" color="#000000">18</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="18" sdnum="1033;"><b><font size="3" color="#000000">18</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">27.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">28th Session of the congress on Crime prevention and Criminal Justie from 20-24 May 2019 held in Vienna Austria Reg. ( it is requested that requisite informtaion may be provided to UNESCO unit directly under intimation to this section.</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">F.NO. 20-03/2020/TS-II Dt. 14.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Adv.(P&amp;AP)/ 27.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="546" align="center" valign=middle sdval="19" sdnum="1033;"><b><font size="3" color="#000000">19</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="19" sdnum="1033;"><b><font size="3" color="#000000">19</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">27.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">Compliance of the order of the Honble Supreme Court in the matter of Shri Anuj Goyal Vs UOI and Others -reg. ( It is requested that requisite information may be provided to SC/ST Cell directly under intimation to this section.</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 14.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Dir(A)/ 27.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">CAO</font></b></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="240" align="center" valign=middle sdval="20" sdnum="1033;"><b><font size="3" color="#000000">20</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="20" sdnum="1033;"><b><font size="3" color="#000000">20</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">27.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">Brouchures for each scheme run by MHRD and its autonomous organizations -reg.</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 14.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">PS/ 27.01.2019</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Reply already sent</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 height="2060" align="center" valign=middle sdval="21" sdnum="1033;"><b><font size="3" color="#000000">21</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle sdval="21" sdnum="1033;"><b><font size="3" color="#000000">21</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle><b><font size="3" color="#000000">27.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">1. MHRD , CDN letter NO. M. 11018/12/2019-CDN dt. 09th Jan 2020 regarding flagship scheme status update needed - West Bengal.</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 21.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle><b><font size="3" color="#000000">DD(PGRC)/ 28.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                                <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">Col Venket (FDC)</font></b></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">2. MHRD , CDN Section Letter No. C.30020/01/2018-CDN dt. 10.01.2020 regarding  Public Procurement ( Preference to make in INdia) , Order 2017.</font></b></td>
                                <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">Admn/ SDC</font></b></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">MHRD , CDN Section letter No. M. 11018/12/2019-CDN dt. 13th Jan 2020 regarding letter of Dr. K. Vijayan , Thiruvananthapuram for appointment as member of advisor Committee under MHRD.</font></b></td>
                                <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">MS</font></b></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">4. MHRD , CDN section leetter Noi. M. 11018/12/2019-CDN dt. 12th Jan 2020 regarding Procuring goods &amp; service from MSEs though GeM Portal only.</font></b></td>
                                <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">Admn/ SDC</font></b></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">5. MHRD , SC/ST Cell OM No. 1-5/2017-SC/ST dated 14th January , 2020 regarding Login id &amp; password for e-utthaan portal.</font></b></td>
                                <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">Dir(e-gov)</font></b></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="546" align="center" valign=middle><b><font size="3" color="#000000">22		</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">22	</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">29.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">MHRD PN-1 Section Om No. 8-1/2020-PN-1 dated 14th Jan 2020 regading 25th Meeting of the Western Zonal Council - Submission of items for inclusion in Agenda  regarding examine sub cauterization of OBCs.</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 21.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">PS to MS/ 30.01.2020</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Reply Sent to Ministry at TS-II  10.02.2020 by Email.</font></b></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Reply</font></b></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 height="80" align="center" valign=middle sdval="23" sdnum="1033;"><font size="3" color="#000000">23</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle sdval="23" sdnum="1033;"><font size="3" color="#000000">23</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000">03.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000">A letter for PMO ID NO. PMOP/D/2020/0017950 dt. 16.01.2020 forwarding Presentation of Shri Pankaj and Others dated 13.01.2020 on the Public Gievances Section of MHRD - reg. </font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 25.02.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000">PS/ Mr. Tarun Sir/03.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000"><br></font></td>
                            </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="300" align="center" valign=middle sdval="24" sdnum="1033;"><font size="3" color="#000000">24</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="24" sdnum="1033;"><font size="3" color="#000000">24</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font size="3" color="#000000">03.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Comprehensive review to identify obsolete Laws/ Acts and their merger in the existing Laws / Acts -reg.</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 25.02.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font size="3" color="#000000">DD(Legal)/ PS/ 03.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top><font size="3" color="#000000"><br></font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=14 height="280" align="center" valign=middle sdval="25" sdnum="1033;"><font size="3" color="#000000">25</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=14 align="center" valign=middle sdval="25" sdnum="1033;"><font size="3" color="#000000">25</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=14 align="center" valign=middle><font size="3" color="#000000">03.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=14 align="center" valign=middle><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=14 align="center" valign=top><font face="Noto Sans Devanagari" color="#000000">उत्तर प्रदेश के राजकीय पॉलिटैक्निक संस्थानो मे स्थायी शिक्षको की कमी के कारण AICTE द्वारा आगामी सत्रह 2020-21 के लिए सीटें शून्य करने के एवं अतिथि व्याख्यातों को होने वाली समस्याओ के संबंध में।	</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=14 align="center" valign=top><font size="3" color="#000000">F.No. 20-3/2020-TS-II Dt. 25.02.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=14 align="center" valign=middle><font size="3" color="#000000">Adv.(AB) / PS 03.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=14 align="center" valign=middle><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=14 align="center" valign=top><font size="3" color="#000000"><br></font></td>
                            </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="340" align="right" valign=bottom sdval="26" sdnum="1033;"><font size="3" color="#000000">26</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="26" sdnum="1033;"><font size="3" color="#000000">26</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">03.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Kavita Chauhan , Section Officer (TS.II ) </font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Reference  from Honble Minister of STate for Home Affairs regarding extension of approval for Telangana Colleges.</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.No. 1-18/2017-TS.II (Pt.) Dt. 24.02.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Adv.(AB)/ PS 03.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="340" align="right" valign=bottom sdval="27" sdnum="1033;"><font size="3" color="#000000">27</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="27" sdnum="1033;"><font size="3" color="#000000">27</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">06.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Request for extension of time to shift Panchasheela polytechnic college , RR Nagar , Bengaluru , Karanataka</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.NO. 20-03/2020/TS-II  Dt. 02.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Adv.(AB)/ PS 06.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="220" align="right" valign=bottom sdval="28" sdnum="1033;"><font size="3" color="#000000">28</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="28" sdnum="1033;"><font size="3" color="#000000">28</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">09.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Renuka mishra Director (TE)F.no 19-4/2018-TS-II</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">settlement of terminal benefits of prof R A Yadav, Ex chairman AICTE regarding</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.no 19-4/2018-TS-II dated 28 feb 2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Dir(admin)/09.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="546" align="right" valign=bottom sdval="29" sdnum="1033;"><font size="3" color="#000000">29</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="29" sdnum="1033;"><font size="3" color="#000000">29</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">09.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">VIP reference received from shri pralhad joshi , MP ( Lok Sabha ) affairs, coal and mines regarding request for nomination of mr anand b havanavar the post of executive council member in visweshwarya technological university, belagavi, karnataka</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.no 20-10/2020-TS-II dated 28 feb 2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">ADV(PAP)/09.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Replied on 16.03.2020</font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="420" align="right" valign=bottom sdval="30" sdnum="1033;"><font size="3" color="#000000">30</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="30" sdnum="1033;"><font size="3" color="#000000">30</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">09.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Renuka mishra Director (TE)F.no 1-14/2020-Ts.II</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Minutes of the meeting to discuss issues related with higher educational institutes located in pakistan occupied kashmir on 26.02.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.no 1-14/2020-Ts.II dated 1-14/2020-Ts.II</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">ADV(PAP)/09.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="546" align="right" valign=bottom sdval="31" sdnum="1033;"><font size="3" color="#000000">31</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="31" sdnum="1033;"><font size="3" color="#000000">31</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">09.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">VIP reference recived from shri D V Sadananda gowda minister of chemicals &amp; fertilizers, regarding request for nomination of Dr B N Umesh for the post of Executive council member in VTU, belgaum, karnataka</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.no 20-6/2020-Ts.II dated 28-02.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">ADV(PAP)/09.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Replied on 16.03.2020</font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="320" align="right" valign=bottom sdval="32" sdnum="1033;"><font size="3" color="#000000">32</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="32" sdnum="1033;"><font size="3" color="#000000">32</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">09.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">chandra shekhar kumar joint secretary to government of india</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Notification regarding declaration of government Educational institutions as institutions of eminence</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.no F.11/9/2019-U3(A) dt 02.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">ADV(AB)/P&amp;AP 11.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="546" align="right" valign=bottom sdval="33" sdnum="1033;"><font size="3" color="#000000">33</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="33" sdnum="1033;"><font size="3" color="#000000">33</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">09.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Misc reference received <br>1) a letter from Pc Y adav vasundhara ghaziabad forwarded by sadanand Additional PS to minister of health and family welfare, nirman bhavan vide their letter reference no 1608703/2019-HFM dated 05.12.2019 ref complaint against dr saikat maitra government college of engineering &amp; ceramic technology, kolkata<br>2)a letter dated 15.01.2020 from civil society of odisha, cuttack forwarded by shir p l  karan, ldc president secretariat letter no 1/1/2020-mantri III regarding adoption of fradulent methods by engineering colleges &amp; technical institutions for imparting education &amp; capacity building trainin to SC/ST students<br>3)a letter dated 12.02.2020 received from shri radhe shyam garg, civil lines, janpad muradabad regarding son pawan garg advance admission money </font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.no 20-1/2020-Ts.II dt 26.02.2020</font></td>
                                <td align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><font size="3" color="#000000">Replied Sr. No. 3 on 13.03.2020 by  PGRC Cell</font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="340" align="right" valign=bottom sdval="34" sdnum="1033;"><font size="3" color="#000000">34</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="34" sdnum="1033;"><font size="3" color="#000000">34</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font face="Times New Roman" color="#000000">13.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font face="Times New Roman" color="#000000">Shri Ajeet Kumar, Under Secretary to the Govt. of India, MHRD, Department of Higher Education, Technical Section II</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font face="Times New Roman" color="#000000">Miscellaneous recipts - Reg. (Shri P S Marwah regarding CIPET Sree Budeda College of Engg. Kerala)</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font face="Times New Roman" color="#000000">F.No. 20-03/2020/TS-II Dated 04.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font face="Times New Roman" color="#000000">DD (PGRC)/13/03/2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Dak No.3572</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="546" align="right" valign=bottom sdval="35" sdnum="1033;"><font size="3" color="#000000">35</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="35" sdnum="1033;"><font size="3" color="#000000">35</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">16.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font face="Times New Roman" color="#000000">Shri Ajeet Kumar, Under Secretary to the Govt. of India, MHRD, Department of Higher Education, Technical Section II</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">VIP refrerence received from shri Vaiko , MP (RS) regarding reqeust to revoke the new notification and follow the exiting norms fo rthe admission in Engineering College - regarding </font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.No. 2-11/2020-TS-II Dt. 16.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Adv.(P&amp;AP)/PS 17.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="340" align="right" valign=bottom sdval="36" sdnum="1033;"><font size="3" color="#000000">36</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="36" sdnum="1033;"><font size="3" color="#000000">36</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">16.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font face="Times New Roman" color="#000000">Shri Ajeet Kumar, Under Secretary to the Govt. of India, MHRD, Department of Higher Education, Technical Section II</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Erratic Education System in our country -reg. </font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">No. f. 13-22/2020-TS Dt. 06.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Adv.(P&amp;AP)/PS 17.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="546" align="right" valign=bottom sdval="37" sdnum="1033;"><font size="3" color="#000000">37</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="37" sdnum="1033;"><font size="3" color="#000000">37</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">16.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font face="Times New Roman" color="#000000">Shri Ajeet Kumar, Under Secretary to the Govt. of India, MHRD, Department of Higher Education, Technical Section II</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">          (1) From Shri R.V Krishna Veerankaneyulu M.Sc Andhra Pradesh regarding in the direction of APSCHE - R.V. Krishna Veeranjaneyulu - former Associate Professor in S&amp; H Dept in Mathematice - Newtons Institute of Engineerin g- Alugurajapalli , Gunture .                                         (2) From Shri Neeraj Chandra , Meerut , UP regarding Galgotia College of Pharmacy , Greater Noida .                            (3) From Dr. V.N. Jagtap , Institute of Pharmacy , Pune regarding request to change  the ER 1991 to ER 2014.</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.No. 20-1/2020-TS.II Dt. 11.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">PS/DD(PGRC)/17.03.2020</font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                            </tr>
                        </table>
                    ';
    
    ?>


</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>