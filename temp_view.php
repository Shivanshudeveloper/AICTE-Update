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
    <a href="./print_all.php" class="btn btn-primary float-right mb-2">
        Print Page
    </a>

    
        <!-- <div class="form-group">
            <label for="exampleFormControlSelect1">Departments</label>
            <select class="form-control" id="exampleFormControlSelect1">
                        <option selected disabled>Select Department</option>
                        <option value="Policy & Academic Planning Bureau">Policy and Academic Planning Bureau</option>
                        <option value="MIC">MIC</option>
                        <option value="Research, Institutional and Faculty Development (RIFD) Bureau">Research, Institutional and Faculty Development (RIFD) Bureau</option>
                        <option value="Approval Bureau">Approval Bureau</option>
                        <option value="RIFD">RIFD</option>
                        <option value="Finance Bureau">Finance Bureau</option>
                        <option value="Adminstration">Adminstration</option>
                        <option value="CMAT/GPAT Cell">CMAT/GPAT Cell</option>
                        <option value="PMSSS - Jammu & Kashmir Cell">PMSSS Cell</option>
                        <option value="Skill Development Cell">Skill Development Cell</option>
                        <option value="SWAYAM Project Cell">SWAYAM Project Cell</option>
                        <option value="Grievance Redressal Cell">Grievance Redressal Cell</option>
                        <option value="Legal Cell">Legal Cell</option>
                        <option value="Vigilance Cell">Vigilance Cell</option>
                        <option value="NEQIP Cell">NEQIP Cell</option>
                        <option value="Estate Management Cell">Estate Management Cell</option>
                        <option value="RTI Cell">RTI Cell</option>
                        <option value="Internal Audit Cell">Internal Audit Cell</option>
                        <option value="Parliament Cell">Parliament Cell</option>
                        <option value="Hindi Cell">Hindi Cell</option>
                        <option value="Direct Benefit Transfer (DBT) Cell">Direct Benefit Transfer (DBT) Cell</option>
                        <option value="Newsletter">Newsletter</option>
                        <option value="Library">Library</option>
                        <option value="General Office Number">General Office Number</option>
                        <option value="E-Gov">E-Gov</option>
            </select>
        </div> -->
            <div class="form-group">
        <form action="" method="POST">
                <label for="exampleFormControlSelect2">Schemes</label>
                <select class="form-control" name="scheme" id="scheme">
                    <?php 
                        include './src/php/dbh.php';
                        if ($_SESSION['department'] == "VCMOffice" || $_SESSION['department'] == "CMOffice" || $_SESSION['department'] == "MSOffice" || $_SESSION['department'] == "CCO") {
                            $sql = "SELECT * FROM information;";
                            
                            $result = mysqli_query($conn, $sql);
                            echo '
                                <option value="Show All Schemes">Show All Schemes</option>
                                <option value="AICTE Quality Improvement Schemes (AQIS)">AICTE Quality Improvement Schemes (AQIS)</option>
                                
                            ';
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '
                                    <option value="'.$row['name'].'">'.$row['name'].'</option>
                                ';
                            }
                        }
                        

                        if ($_SESSION['department'] == "VCMOffice" || $_SESSION['department'] == "CMOffice" || $_SESSION['department'] == "MSOffice" || $_SESSION['department'] == "CCO"){
                            $sql = "SELECT * FROM new_scheme;";
                        } else {
                            $department = $_SESSION['department'];
                            $sql = "SELECT * FROM new_scheme WHERE department = '$department';";
                        }

                        
                        $result = mysqli_query($conn, $sql);
                        echo '
                        <option value="Show All Schemes">Show All Schemes</option>
                        ';
                        while ($row = mysqli_fetch_assoc($result)) {

                            
                            echo '
                                <option value="'.$row['scheme'].'">'.$row['department'].' - '.$row['scheme'].'</option>
                            ';
                        }
                    
                    ?>
                </select>
            </div>
            <button name="scheme_btn" class="btn btn-primary">Search</button>
        </form>

        <?php
            include './src/php/dbh.php';
            if (isset($_POST['scheme_btn'])) {
                $scheme = mysqli_real_escape_string($conn, $_POST['scheme']);
                
                if ($scheme == "Show All Schemes") {
                    echo '
                    <a href="./print_all_withnote.php" class="btn mr-2 btn-primary float-right mb-2">
                        Print With Notes
                    </a>
                    ';

                    $sql = "SELECT * FROM information;";
                    $result = mysqli_query($conn, $sql);
                    // while ($row = mysqli_fetch_assoc($result)) {
                    //     $table = $row['tables'];
                    //     echo '
                    //     <div class="card mt-2">
                    //         <div class="card-body">
                    //             <h2 class="card-title">'.$row['name'].'</h2>
                    //             <p class="card-text">
                    //             '.$row['description'].'
                    //                 <br>
                                    
                    //             </p>
                    //         </div>
                    //     </div>
                    //     ';
                    //     if ($table != "no") {
                    //         echo '
                    //             <div class="card mt-2">
                    //             <div class="card-body">
                    //                 <iframe id="inlineFrameExample"
                    //                     title="Inline Frame Example"
                    //                     width="100%"
                    //                     height="750"
                    //                     src="./iframe/'.$table.'">
                    //                 </iframe>
                    //                 </div>
                    //             </div>
                    //         ';
                    //     } 


                    // echo '
                    // <div class="row">
                    //     <div class="col">
                    //         <div class="card mt-2">
                    //             <div class="card-body">
                    //                 <h4 class="card-title">Proposed Target (Future Target F.Y. 2020-21)</h4>
                    //                 <p class="card-text">
                    //                 '.$row['proposed'].'
                    //                 <br>
                    //                 </p>
                    //             </div>
                    //         </div>
                    //     </div>

                    //     <div class="col">

                    //         <div class="card mt-2">
                    //             <div class="card-body">
                    //                 <h4 class="card-title">Targets Met Till Date (Future Target F.Y. 2020-21)</h4>
                    //                 <p class="card-text">
                    //                 '.$row['future'].'
                    //                 <br>
                    //                 </p>
                    //             </div>
                    //         </div>
                        
                    //     </div>
                    // </div>
                    // <hr />
                        
                    //     ';
                    
                    // }


                        $sql = "SELECT * FROM new_scheme;";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            

                            echo 
                            '
                            <div class="card mt-2">
                                <div class="card-body">
                                    <h2 class="card-title">'.$row['title'].'</h2>
                                    <h2 class="card-title">'.$row['scheme'].'</h2>
                                    <a download href="'.$row['file_url'].'" class="card-link">File Download</a>
                                    <p class="card-text">
                                    '.$row['description'].'
                                        <br>
                                    </p>
                                </div>
                            </div>

                            <br>
                            <br />
                            <div class="row">
                                <div class="col">
                                    Proposed Target (Future Target F.Y. 2020-21)
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
                            <br />
                            <div class="row mt-2">
                                <div class="col">
                                    Targets Met Till Date (Future Target F.Y. 2020-21)
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
                            
                            ';
                        }




                    // echo '
                    //         <h2 class="text-center mt-2">
                    //             VVIP/PMO References
                    //         </h2>
                            
                    //         <table class="table mt-2" cellspacing="0" border="0">
                    //         <!-- <colgroup width="46"></colgroup>
                    //         <colgroup span="2" width="75"></colgroup>
                    //         <colgroup width="546"></colgroup>
                    //         <colgroup width="1894"></colgroup>
                    //         <colgroup width="253"></colgroup>
                    //         <colgroup width="215"></colgroup>
                    //         <colgroup width="174"></colgroup>
                    //         <colgroup width="447"></colgroup> -->
                    //         <thead class="thead-dark">
                    //             <tr>
                    //                 <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 height="40" align="center" valign=middle><b><font size=3 color="#2E75B6">S.No.</font></b></td>
                    //                 <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size=3 color="#2E75B6">Inward in MS Sectt. </font></b></td>
                    //                 <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size=3 color="#2E75B6">Recd. On</font></b></td>
                    //                 <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size=3 color="#2E75B6">From </font></b></td>
                    //                 <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="left" valign=top><b><font size=3 color="#2E75B6">Details of Correspondence </font></b></td>
                    //                 <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top><b><font size=3 color="#2E75B6">Letter No. / Date</font></b></td>
                    //                 <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size=3 color="#2E75B6">Dispatch To</font></b></td>
                    //                 <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size=3 color="#2E75B6">Date of Dispossed of Application </font></b></td>
                    //                 <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top><b><font size=3 color="#2E75B6">Remarks</font></b></td>
                    //             </tr>
                    //         </thead>
                            
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=7 height="1100" align="center" valign=middle sdval="1" sdnum="1033;"><font size=3 color="#000000">1</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=7 align="center" valign=middle><font size=3 color="#000000">1 (161/CM)</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=7 align="center" valign=middle><font size="3" color="#000000">08.01.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=7 align="center" valign=middle><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">From Shri B.S. Yadav , BIT Campus , Jhaansi </font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=7 align="center" valign=top><font size="3" color="#000000">F.No. 20-1/2020-TS.II Dt. 02.01.2020 </font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=7 align="center" valign=middle><font size="3" color="#000000">DD(PGRC)</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=7 align="center" valign=middle><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Replied</font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Smt. Krishna Devi , Sector -23 Rohini .</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Adv.(RIFD)/10.01.20</font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">From Shri Sudhir Mohan , Dehradun </font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Replied</font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">From Dr. Sahadeb Mandal , Physical Instructor , BIET , Jhansi</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Adv.(RIFD)/10.01.20</font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">From Sri Nabin Chandra Som , Jogendranagar , Tripura</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Sent</font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">From Shri Mrigendra Nath Mishra , Mishrauli , Gazipur </font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Replied</font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">From Shri H. Abdul Hadi , India Internation Inspring , Restriya Gaurav Awardee , Pondicherry.</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">RIFD</font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 height="200" align="center" valign=middle sdval="2" sdnum="1033;"><font size="3" color="#000000">2</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle><font size="3" color="#000000">2(153/CM)</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle><font size="3" color="#000000">08.01.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="left" valign=bottom><font size="3" color="#000000">VIP reference received from Shri A. Ganeshamurthy , MP ( Lok Sabha ) regarding absorption of Shri Ramesh as Assistant Director in AICTE -regarding</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=top><font size="3" color="#000000">F.No. 2-1/2020-TS-II Dt. 02.01.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle><font size="3" color="#000000">Dir(Admin)</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=top><font size="3" color="#000000">Replied on 17.01.2020</font></td>
                    //         </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 height="80" align="center" valign=middle sdval="3" sdnum="1033;"><font size="3" color="#000000">3</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle sdval="3" sdnum="1033;"><font size="3" color="#000000">3</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000">09.01.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000">Complaint received From CVC -reg. received in this office under vigilance section OM No. C. 13011/67/2019-Vig Dt. 20.12.2020 ( Complaint Made by Mr. Vijay Tiwari regarding Threat to Life with a reference to AICTE              2. Complaints made by Mr. Vijay Kumar Gude regarding college running with fake NBA accreditation in Hyderabd  (3) Complaint made by M/s Paras Engineers regarding non availability of Expert Visit Committee Report documents  adn Vidio CD in Durya Polytechnic for Engg &amp; Tech. ( Hapur Case)</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=top><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 02.01.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000">CVO </font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=top><font size="3" color="#000000">Under Process  all cases forward from CVO to AB</font></td>
                    //         </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 height="60" align="center" valign=middle sdval="4" sdnum="1033;"><b><font size="3" color="#000000">4</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle sdval="4" sdnum="1033;"><b><font size="3" color="#000000">4</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle><b><font size="3" color="#000000">15.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle><b><font size="3" color="#000000">B.K. Bhadri , Depuy Eduation Advisor (DL&amp;L)  MHRD , Shastri Bhawan , New Delhi </font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=top><b><font size="3" color="#000000">Honble Prime Minsters speech at Singapore - India Hackathon Event at IIT chennai - REgarding</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=top><b><font size="3" color="#000000">F.NO. 12-3/2019-TS-II Dt. 06.01.2019</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle><b><font size="3" color="#000000">CIO</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 align="center" valign=top><font size="3" color="#000000"><br></font></td>
                    //         </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 height="120" align="center" valign=middle sdval="5" sdnum="1033;"><b><font size="3" color="#000000">5</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle sdval="5" sdnum="1033;"><b><font size="3" color="#000000">5</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000">15.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=top><b><font size="3" color="#000000">Two letter No.  M. 11018/04/2019-Coordination (FTS NO. 664212 &amp; FTS NO. 656769) dt. 26.12.2019 forwarding request from Shri Pradeep Kumar Pathak and Shri Rjni Kant to appoint member of any committee under MHRD.</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=top><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 08.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000">Adv.(P&amp;AP)/16.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=top><font size="3" color="#000000"><br></font></td>
                    //         </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 height="200" align="center" valign=middle sdval="6" sdnum="1033;"><b><font size="3" color="#000000">6</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle sdval="6" sdnum="1033;"><b><font size="3" color="#000000">6</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle><b><font size="3" color="#000000">15.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=top><b><font size="3" color="#000000">Clarification regarding the eligiblity of Dr. Tarakeshwar Patil as Assoicate Professor  in AICTE Approved Engineering Colleges -reg.</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=top><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 10.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle><b><font size="3" color="#000000">Adv.(RIFD)/ 16.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=10 align="center" valign=top><font size="3" color="#000000">Replied on 10.02.2020 Letter No. 32-03/RIFD/VIP-Ref .l2ol9-2o I 13</font></td>
                    //         </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=12 height="240" align="center" valign=middle sdval="7" sdnum="1033;"><b><font size="3" color="#000000">7</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=12 align="center" valign=middle sdval="7" sdnum="1033;"><b><font size="3" color="#000000">7</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=12 align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">15.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=12 align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=12 align="center" valign=top><b><font size=4 color="#000000">Complaint aginst Blue Mountains Groups of College Kandoli, Dehradun -reg.</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=12 align="center" valign=top><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 08.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=12 align="center" valign=middle><b><font size="3" color="#000000">DD(PGRC)</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=12 align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=12 align="center" valign=top><font size="3" color="#000000">Replied</font></td>
                    //         </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="380" align="center" valign=middle sdval="8" sdnum="1033;"><b><font size="3" color="#000000">8</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="8" sdnum="1033;"><b><font size="3" color="#000000">8</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">15.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">Permanent absorption of existing incumbents working on deputtion basis and completed at lest one year service in AICTE -reg. </font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">F.NO. 20-03/2020/TS-II Dt, 08.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Dir(Admin)</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top><font size="3" color="#000000">Replied</font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 height="120" align="center" valign=middle sdval="9" sdnum="1033;"><b><font size="3" color="#000000">9</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle sdval="9" sdnum="1033;"><b><font size="3" color="#000000">9</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">15.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="left" valign=top><b><font size="3" color="#000000">VIP Reference of Dr. Harsh Vardhan , Honble Minister of Health &amp; Family Welfare , Science &amp; Technology and Earth Sciences for hearted support for IISF -2019-reg</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=top><b><font size="3" color="#000000">F.No. 1-11/2019-TC Dt. 07.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000">Adv.(P&amp;AP)/17.01.2020 By mail</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=top><b><font size="3" color="#000000"><br></font></b></td>
                    //         </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="320" align="center" valign=middle sdval="10" sdnum="1033;"><b><font size="3" color="#000000">10</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="10" sdnum="1033;"><b><font size="3" color="#000000">10</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">17.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">Withdrawal of affiliation order to dr. B.R. Ambedkar Institute of Technology by Pondichery  University -reg.</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">F.No. 2-6/2017-TC Dt. 10.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Adv.(AB)/PS /21.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top><font size="3" color="#000000"><br></font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 height="2212" align="center" valign=middle sdval="11" sdnum="1033;"><b><font size="3" color="#000000">11</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle sdval="11" sdnum="1033;"><b><font size="3" color="#000000">11</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">20.01.2019</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">From Dr. Mohanlal Sahu , District Surajpur , Chhattisgarh regarding National Education Consultant Committee.</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=top><b><font size="3" color="#000000">F.No. 20-1/2020-TS.II Dt. 13.01.2020  (283/CM)</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=top><b><font size="3" color="#000000">DD(PGRC)/ 21.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">P&amp;AP</font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">From Shri Bhaskar Sastry Vemparla , Amalapuram regarding request for benefits like concesion in Railway Travelling , Sanad from the Prime Minister of India.</font></b></td>
                    //             <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Returned (not pertain)</font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">From Dr. M. Periyasamy , Principal, Syed Ammal decrement in number of admission for Master of Engineering Courses in Engineering  Colleges - Threat of extinction of high quality research in Science and Technology and Engineering Streams - Seeking of Remedial measures.</font></b></td>
                    //             <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Adv.(P&amp;AP)</font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">From Ahmed Mohammad Ismail regarding Seeking justice from an Institue (MBA) for being deceitful.</font></b></td>
                    //             <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Returned (not pertain)</font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">From Shri H. Abdul Hadi , India Internation Inspring , Restriya Gaurav Awardee , Pondicherry regarding pay anomaly in the scale of pay of Shri Thiru H.  Abdul Hadi , Sr. Instructor from Motilal Nehru Government Polytechnic  College .</font></b></td>
                    //             <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">RIFD </font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 height="120" align="center" valign=middle sdval="12" sdnum="1033;"><b><font size="3" color="#000000">12</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle sdval="12" sdnum="1033;"><b><font size="3" color="#000000">12</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">22.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=top><b><font size="3" color="#000000">Committee on welfare of other Backward Class - Selection of Subject for Examination during the year 2019-20 -reg.</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=top><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 15.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000">Dir(Admin)</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 align="center" valign=top><b><font size="3" color="#000000"><br></font></b></td>
                    //         </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 height="40" align="center" valign=middle sdval="13" sdnum="1033;"><b><font size="3" color="#000000">13</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle sdval="13" sdnum="1033;"><b><font size="3" color="#000000">13</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">22.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top><b><font size="3" color="#000000">Meeting held under the Chairmanship of Honble Minister of State to discuss issues raised by Shri Omprakash alias Bachhu Kadu , MLA Maharastra concerning persons with disability -reg.</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top><b><font size="3" color="#000000">F.NO. 20-03/2020/TS-II Dt. 14.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size="3" color="#000000">DD(PGRC)/ 22.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top><b><font size="3" color="#000000">Adv. (P&amp;AP)/</font></b></td>
                    //         </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 height="40" align="center" valign=middle sdval="14" sdnum="1033;"><b><font size="3" color="#000000">14</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle sdval="14" sdnum="1033;"><b><font size="3" color="#000000">14</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">22.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top><b><font size="3" color="#000000">Representation from Shri Sudhir Mohan &amp; Shri Jessy Roy -reg.</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 15.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size="3" color="#000000">DD(PGRC)/ 22.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top><b><font size="3" color="#000000">Replied </font></b></td>
                    //         </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="546" align="center" valign=middle sdval="15" sdnum="1033;"><b><font size="3" color="#000000">15</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="15" sdnum="1033;"><b><font size="3" color="#000000">15</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">23.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">Misc Complaint  From Shri Rambabu Chaturvedy addressed to Deputy Director (PGRC) , AICTE New Delhi regardig non-refund of fees by ITM/PGDM College Kharghar , New Mumbai. ( RV College of Engineering , Bengaluru)</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt, 17.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">DD(PGRC)/ 24.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">Replied </font></b></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="440" align="center" valign=middle sdval="16" sdnum="1033;"><b><font size="3" color="#000000">16</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="16" sdnum="1033;"><b><font size="3" color="#000000">16</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">27.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">Swachhta Pakhwada Awrds 2019-Reg. ( its is requested that requisite information may be provided to ESEB Cell directly under intimation to this Section)</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">F.NO. 20-03/2020/TS-II Dt. 14.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Dir(Admin)/27.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">Dir(E-gov)</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><b><font size="3" color="#000000">replied</font></b></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="400" align="center" valign=middle sdval="17" sdnum="1033;"><b><font size="3" color="#000000">17</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="17" sdnum="1033;"><b><font size="3" color="#000000">17</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">27.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">12th Meeting of the Standing Committee / 24th  Meeting of the Eastern Zonal council - Submission of Items for inclusion in Agenda -reg.</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">F.NO. 20-03/2020/TS-II Dt. 14.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Adv.(P&amp;AP)/ 27.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="546" align="center" valign=middle sdval="18" sdnum="1033;"><b><font size="3" color="#000000">18</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="18" sdnum="1033;"><b><font size="3" color="#000000">18</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">27.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">28th Session of the congress on Crime prevention and Criminal Justie from 20-24 May 2019 held in Vienna Austria Reg. ( it is requested that requisite informtaion may be provided to UNESCO unit directly under intimation to this section.</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">F.NO. 20-03/2020/TS-II Dt. 14.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Adv.(P&amp;AP)/ 27.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="546" align="center" valign=middle sdval="19" sdnum="1033;"><b><font size="3" color="#000000">19</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="19" sdnum="1033;"><b><font size="3" color="#000000">19</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">27.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">Compliance of the order of the Honble Supreme Court in the matter of Shri Anuj Goyal Vs UOI and Others -reg. ( It is requested that requisite information may be provided to SC/ST Cell directly under intimation to this section.</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 14.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Dir(A)/ 27.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">CAO</font></b></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="240" align="center" valign=middle sdval="20" sdnum="1033;"><b><font size="3" color="#000000">20</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="20" sdnum="1033;"><b><font size="3" color="#000000">20</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;1033;M/D/YYYY"><b><font size="3" color="#000000">27.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">Brouchures for each scheme run by MHRD and its autonomous organizations -reg.</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 14.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">PS/ 27.01.2019</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Reply already sent</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 height="2060" align="center" valign=middle sdval="21" sdnum="1033;"><b><font size="3" color="#000000">21</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle sdval="21" sdnum="1033;"><b><font size="3" color="#000000">21</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle><b><font size="3" color="#000000">27.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">1. MHRD , CDN letter NO. M. 11018/12/2019-CDN dt. 09th Jan 2020 regarding flagship scheme status update needed - West Bengal.</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 21.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle><b><font size="3" color="#000000">DD(PGRC)/ 28.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=5 align="center" valign=middle><b><font size="3" color="#000000"><br></font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">Col Venket (FDC)</font></b></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">2. MHRD , CDN Section Letter No. C.30020/01/2018-CDN dt. 10.01.2020 regarding  Public Procurement ( Preference to make in INdia) , Order 2017.</font></b></td>
                    //             <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">Admn/ SDC</font></b></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">MHRD , CDN Section letter No. M. 11018/12/2019-CDN dt. 13th Jan 2020 regarding letter of Dr. K. Vijayan , Thiruvananthapuram for appointment as member of advisor Committee under MHRD.</font></b></td>
                    //             <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">MS</font></b></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">4. MHRD , CDN section leetter Noi. M. 11018/12/2019-CDN dt. 12th Jan 2020 regarding Procuring goods &amp; service from MSEs though GeM Portal only.</font></b></td>
                    //             <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">Admn/ SDC</font></b></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">5. MHRD , SC/ST Cell OM No. 1-5/2017-SC/ST dated 14th January , 2020 regarding Login id &amp; password for e-utthaan portal.</font></b></td>
                    //             <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">Dir(e-gov)</font></b></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="546" align="center" valign=middle><b><font size="3" color="#000000">22		</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">22	</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">29.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">MHRD PN-1 Section Om No. 8-1/2020-PN-1 dated 14th Jan 2020 regading 25th Meeting of the Western Zonal Council - Submission of items for inclusion in Agenda  regarding examine sub cauterization of OBCs.</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><b><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 21.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">PS to MS/ 30.01.2020</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Reply Sent to Ministry at TS-II  10.02.2020 by Email.</font></b></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font size="3" color="#000000">Reply</font></b></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 height="80" align="center" valign=middle sdval="23" sdnum="1033;"><font size="3" color="#000000">23</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle sdval="23" sdnum="1033;"><font size="3" color="#000000">23</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000">03.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000">A letter for PMO ID NO. PMOP/D/2020/0017950 dt. 16.01.2020 forwarding Presentation of Shri Pankaj and Others dated 13.01.2020 on the Public Gievances Section of MHRD - reg. </font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 25.02.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000">PS/ Mr. Tarun Sir/03.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle><font size="3" color="#000000"><br></font></td>
                    //         </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="300" align="center" valign=middle sdval="24" sdnum="1033;"><font size="3" color="#000000">24</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="24" sdnum="1033;"><font size="3" color="#000000">24</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font size="3" color="#000000">03.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Comprehensive review to identify obsolete Laws/ Acts and their merger in the existing Laws / Acts -reg.</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">F.No. 20-03/2020/TS-II Dt. 25.02.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font size="3" color="#000000">DD(Legal)/ PS/ 03.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top><font size="3" color="#000000"><br></font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=14 height="280" align="center" valign=middle sdval="25" sdnum="1033;"><font size="3" color="#000000">25</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=14 align="center" valign=middle sdval="25" sdnum="1033;"><font size="3" color="#000000">25</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=14 align="center" valign=middle><font size="3" color="#000000">03.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=14 align="center" valign=middle><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=14 align="center" valign=top><font face="Noto Sans Devanagari" color="#000000">उत्तर प्रदेश के राजकीय पॉलिटैक्निक संस्थानो मे स्थायी शिक्षको की कमी के कारण AICTE द्वारा आगामी सत्रह 2020-21 के लिए सीटें शून्य करने के एवं अतिथि व्याख्यातों को होने वाली समस्याओ के संबंध में।	</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=14 align="center" valign=top><font size="3" color="#000000">F.No. 20-3/2020-TS-II Dt. 25.02.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=14 align="center" valign=middle><font size="3" color="#000000">Adv.(AB) / PS 03.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=14 align="center" valign=middle><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=14 align="center" valign=top><font size="3" color="#000000"><br></font></td>
                    //         </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="340" align="right" valign=bottom sdval="26" sdnum="1033;"><font size="3" color="#000000">26</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="26" sdnum="1033;"><font size="3" color="#000000">26</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">03.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Kavita Chauhan , Section Officer (TS.II ) </font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Reference  from Honble Minister of STate for Home Affairs regarding extension of approval for Telangana Colleges.</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.No. 1-18/2017-TS.II (Pt.) Dt. 24.02.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Adv.(AB)/ PS 03.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="340" align="right" valign=bottom sdval="27" sdnum="1033;"><font size="3" color="#000000">27</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="27" sdnum="1033;"><font size="3" color="#000000">27</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">06.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Request for extension of time to shift Panchasheela polytechnic college , RR Nagar , Bengaluru , Karanataka</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.NO. 20-03/2020/TS-II  Dt. 02.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Adv.(AB)/ PS 06.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="220" align="right" valign=bottom sdval="28" sdnum="1033;"><font size="3" color="#000000">28</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="28" sdnum="1033;"><font size="3" color="#000000">28</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">09.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Renuka mishra Director (TE)F.no 19-4/2018-TS-II</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">settlement of terminal benefits of prof R A Yadav, Ex chairman AICTE regarding</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.no 19-4/2018-TS-II dated 28 feb 2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Dir(admin)/09.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="546" align="right" valign=bottom sdval="29" sdnum="1033;"><font size="3" color="#000000">29</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="29" sdnum="1033;"><font size="3" color="#000000">29</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">09.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">VIP reference received from shri pralhad joshi , MP ( Lok Sabha ) affairs, coal and mines regarding request for nomination of mr anand b havanavar the post of executive council member in visweshwarya technological university, belagavi, karnataka</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.no 20-10/2020-TS-II dated 28 feb 2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">ADV(PAP)/09.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Replied on 16.03.2020</font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="420" align="right" valign=bottom sdval="30" sdnum="1033;"><font size="3" color="#000000">30</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="30" sdnum="1033;"><font size="3" color="#000000">30</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">09.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Renuka mishra Director (TE)F.no 1-14/2020-Ts.II</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Minutes of the meeting to discuss issues related with higher educational institutes located in pakistan occupied kashmir on 26.02.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.no 1-14/2020-Ts.II dated 1-14/2020-Ts.II</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">ADV(PAP)/09.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="546" align="right" valign=bottom sdval="31" sdnum="1033;"><font size="3" color="#000000">31</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="31" sdnum="1033;"><font size="3" color="#000000">31</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">09.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">VIP reference recived from shri D V Sadananda gowda minister of chemicals &amp; fertilizers, regarding request for nomination of Dr B N Umesh for the post of Executive council member in VTU, belgaum, karnataka</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.no 20-6/2020-Ts.II dated 28-02.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">ADV(PAP)/09.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Replied on 16.03.2020</font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="320" align="right" valign=bottom sdval="32" sdnum="1033;"><font size="3" color="#000000">32</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="32" sdnum="1033;"><font size="3" color="#000000">32</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">09.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">chandra shekhar kumar joint secretary to government of india</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Notification regarding declaration of government Educational institutions as institutions of eminence</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.no F.11/9/2019-U3(A) dt 02.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">ADV(AB)/P&amp;AP 11.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="546" align="right" valign=bottom sdval="33" sdnum="1033;"><font size="3" color="#000000">33</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="33" sdnum="1033;"><font size="3" color="#000000">33</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">09.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Ajeet Kumar , Under Secretary (TE) - 011-23070426</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Misc reference received <br>1) a letter from Pc Y adav vasundhara ghaziabad forwarded by sadanand Additional PS to minister of health and family welfare, nirman bhavan vide their letter reference no 1608703/2019-HFM dated 05.12.2019 ref complaint against dr saikat maitra government college of engineering &amp; ceramic technology, kolkata<br>2)a letter dated 15.01.2020 from civil society of odisha, cuttack forwarded by shir p l  karan, ldc president secretariat letter no 1/1/2020-mantri III regarding adoption of fradulent methods by engineering colleges &amp; technical institutions for imparting education &amp; capacity building trainin to SC/ST students<br>3)a letter dated 12.02.2020 received from shri radhe shyam garg, civil lines, janpad muradabad regarding son pawan garg advance admission money </font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.no 20-1/2020-Ts.II dt 26.02.2020</font></td>
                    //             <td align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><font size="3" color="#000000">Replied Sr. No. 3 on 13.03.2020 by  PGRC Cell</font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="340" align="right" valign=bottom sdval="34" sdnum="1033;"><font size="3" color="#000000">34</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="34" sdnum="1033;"><font size="3" color="#000000">34</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font face="Times New Roman" color="#000000">13.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font face="Times New Roman" color="#000000">Shri Ajeet Kumar, Under Secretary to the Govt. of India, MHRD, Department of Higher Education, Technical Section II</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font face="Times New Roman" color="#000000">Miscellaneous recipts - Reg. (Shri P S Marwah regarding CIPET Sree Budeda College of Engg. Kerala)</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font face="Times New Roman" color="#000000">F.No. 20-03/2020/TS-II Dated 04.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font face="Times New Roman" color="#000000">DD (PGRC)/13/03/2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font size="3" color="#000000">Dak No.3572</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="546" align="right" valign=bottom sdval="35" sdnum="1033;"><font size="3" color="#000000">35</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="35" sdnum="1033;"><font size="3" color="#000000">35</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">16.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font face="Times New Roman" color="#000000">Shri Ajeet Kumar, Under Secretary to the Govt. of India, MHRD, Department of Higher Education, Technical Section II</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">VIP refrerence received from shri Vaiko , MP (RS) regarding reqeust to revoke the new notification and follow the exiting norms fo rthe admission in Engineering College - regarding </font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.No. 2-11/2020-TS-II Dt. 16.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Adv.(P&amp;AP)/PS 17.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="340" align="right" valign=bottom sdval="36" sdnum="1033;"><font size="3" color="#000000">36</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="36" sdnum="1033;"><font size="3" color="#000000">36</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">16.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font face="Times New Roman" color="#000000">Shri Ajeet Kumar, Under Secretary to the Govt. of India, MHRD, Department of Higher Education, Technical Section II</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Erratic Education System in our country -reg. </font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">No. f. 13-22/2020-TS Dt. 06.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">Adv.(P&amp;AP)/PS 17.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //         </tr>
                    //         <tr>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="546" align="right" valign=bottom sdval="37" sdnum="1033;"><font size="3" color="#000000">37</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="37" sdnum="1033;"><font size="3" color="#000000">37</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">16.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><font face="Times New Roman" color="#000000">Shri Ajeet Kumar, Under Secretary to the Govt. of India, MHRD, Department of Higher Education, Technical Section II</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">          (1) From Shri R.V Krishna Veerankaneyulu M.Sc Andhra Pradesh regarding in the direction of APSCHE - R.V. Krishna Veeranjaneyulu - former Associate Professor in S&amp; H Dept in Mathematice - Newtons Institute of Engineerin g- Alugurajapalli , Gunture .                                         (2) From Shri Neeraj Chandra , Meerut , UP regarding Galgotia College of Pharmacy , Greater Noida .                            (3) From Dr. V.N. Jagtap , Institute of Pharmacy , Pune regarding request to change  the ER 1991 to ER 2014.</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">F.No. 20-1/2020-TS.II Dt. 11.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000">PS/DD(PGRC)/17.03.2020</font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //             <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size="3" color="#000000"><br></font></td>
                    //         </tr>
                    //     </table>
                    // ';

                } elseif ($scheme == "AICTE Quality Improvement Schemes (AQIS)") {
                    
                    echo '
                    <div class="m-2">
                        <h2 class="font-weight-bold mb-2 text-center">
                            AICTE Quality Improvement Schemes (AQIS)
                        </h2>
                        <p>
                            AICTE Quality Improvement Schemes (AQIS) as a part of its functions provides financial assistance to various faculties, students and institutions for improvement in quality of education through various schemes as listed in the table below. This enables strengthening of the attributes for accreditation through NBA in respect of the institutes.
                            AQIS portal through which the financial assistance is provided is a double blind (totally secured) and completely online platform developed in house by AICTE for the purposes of the following -
                        </p>
                        <p>
                        Calling for online applications. <br>
                        AQIS inbuilt evaluation to ensure a ratio of 1 : 6 while evaluation. <br>
                        Bundling of applications (Region wise and stream wise). <br>
                        Allocation of bundles to minimum of 03 experts (Region wise and stream wise). <br>
                        Receipt of the response from the experts. <br>
                        Compilation of the result based on evaluation. <br>
                        Declaration of the result. <br>
                        </p>

                        <p>
                            <strong>
                            Note - All the schemes of AQIS are under revision through Dr DP Agrawal led committee, towards improving the efficacy, quality and standards of Higher education.
                            </strong>
                            <br>
                            <strong>
                            AQIS portal based proposed activities for the Year 2020 - 21. 
                            </strong>
                            For the purposes to ensure strengthening of the attributes for accreditation through NBA in respect of the institutes, following changes are being undertaken -
                            <br>
                            Calling for proposal. <br>
                            - Ensuring institutions under vigilance, directly are debarred from applying or their proposals gets highlighted in red.
                            <br>
                            Procedures for simplification of AQIS to include-
                            <br>
                                - Application criteria
                                <br>
                                - Evaluation criteria under discussion for change in both AQIS and Expert evaluation page.
                                <br>
                                - Inbuilt plagiarism check available to experts.
                                <br>
                            Outcome from each project.
                            <br>
                            How to take a measurable outcome.
                            <br>
                            Publishing of papers / journals
                            <br>
                            Strengthening of UG and PG projects.
                            <br>
                            Patenting.
                            <br>
                            Improvement in overall Teacher to student learning. 
                            <br>
                            Justification at the time of being granted fund, should be the basis for a measurable outcome.
                            <br>
                            - Outcomes to be defined objectively and not in terms of data.
                        </p>
                    </div>

                    <br />

                    <h2>
                        Status of Grants Released for AQIS
                    </h2>

                    <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Schemes</th>
                    <th scope="col">2016-17</th>
                    <th scope="col">2017-18</th>
                    <th scope="col">2018-19</th>
                    <th scope="col">2019-20</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Margdarshan</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="84.49" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="153.30" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="3580.00" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">RPS</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="13.76" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="1,178.62" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="494.06" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="523.47" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">RPS (Management)</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="138.33" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">RPS (NER)</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="665.46" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="76.53" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">RPS (NDF)</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="562.24" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">RPS (SC/ST)</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="284.00" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">Hostel (SC/ST)</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="2001" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="2087" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="3288" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="189.75" class="form-control">
                        </td>
                    </tr>


                    <tr>
                        <th scope="row">Pragati</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="441.24" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="1682.68" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="1289.11" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="1461.92" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">Saksham</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="36.27" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="109.76" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="60.02" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">PG</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="35438.91" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="34303.58" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="33723.19" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="30953.96" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">NDF</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="325.75" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="1120.07" class="form-control">
                        </td>
                    </tr>


                    <tr>
                        <th scope="row">ESS</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="600.88" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="872.03" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="3.17" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">ESS</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="600.88" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="872.03" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="3.17" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">SPDC (SC/ST)</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="25.31" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="140.83" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="415.06" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="264.67" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">MODROB</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="1579" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="3778" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="2440" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="Under eval" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">MODROB (Rural)</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="1337.82" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">GOC</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="80.07" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="518.52" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="349.21" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">UBA</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="36.86" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="13.32" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">Prerana</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="333.31" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="231.81" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="208.80" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">Samridhi</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="125.21" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="106.10" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="84.38" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">STTP</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="489.57" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="1133.65" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="992.34" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">FDP</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="1203.48" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="Under eval" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">AICTE - ISTE</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="357.91" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="251.40" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">FDP through Technical university for teachers </th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="180" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="15" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">FDP through Technical university for Librarians</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="18" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="1.5" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">STTP for Physical Trainers/Sports Game</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="9.77" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="10" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">QIP</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="1834" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="2330.11" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="2331.01" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="1205.08" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">INAE (DVP)</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="1.81" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="2.22" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="23.46" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="30" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">INAE (TRF)</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="18.8" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="63" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="15.15" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">INAE (TG)</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="0.71" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="11.03" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="16.96" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">MITACS</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="97.81" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">SSPCA</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="48.74" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="55.61" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">Travel Grant</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="0.70" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="20.14" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="35.38" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">ELCTE</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="10.41" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">SS NER</th>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="" class="form-control">
                        </td>
                        <td>
                            <input disabled class="text-dark border-0" type="text" value="497" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                        <h2 class="font-weight-bold">
                            Total
                        </h2>
                        </th>
                        <td>
                            <p class="h3 ml-5">
                                41438.91
                            </p>
                        </td>
                        <td>
                            <p class="h3 ml-5">
                                48502.86
                            </p>
                        </td>
                        <td>
                            <p class="h3 ml-5">
                                49189.06
                            </p>
                        </td>
                        <td>
                            <p class="h3 ml-5">
                                43837.58
                            </p>
                        </td>
                    </tr>


                </tbody>
            </table>
                    
                    ';
                }   elseif ($scheme == "Smart India Hackathon(SIH)") {
                    echo '
                    <h2 class="text-center m-2">
                    Smart India Hackathon(SIH)
                    </h2>
                        <p>
                            Smart India Hackathon has been a huge impact making initiative of MHRD on Higher Education students. The students work on pressing challenges posed by various collaborating Ministries & Departments, State Governments and public & private sector industries to come up with some world class solutions for those challenges. SIH instituted in 2017 with three successful editions as indicated below:  
                            Project deployment details for past editions:
                        </p>

                        <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Edition</th>
                            <th scope="col">No. of PSs</th>
                            <th scope="col">Ministries & departments / Industry</th>
                            <th scope="col">Students reached</th>
                            <th scope="col">Students participated</th>
                            <th scope="col">Nodal centres</th>
                            <th scope="col">Successful projects deployed</th>
                            </tr>
                        </thead>
                        <tbody>
                    ';

                    $sql = "SELECT * FROM sih;";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr>
                            <th scope="row">'.$row['year'].'</th>
                            <td>
                                '.$row['pss'].'
                            </td>
                            <td>
                            '.$row['industry'].'
                            </td>
                            <td>
                            '.$row['reached'].'
                            </td>
                            <td>
                            '.$row['participated'].'
                            </td>
                            <td>
                            '.$row['centres'].'
                            </td>
                            <td>
                            '.$row['successful'].'
                            </td>
                        </tr>
                        
                        ';
                    }
                    echo '
                    </tbody>
                    </table>

                    <h3>
                        About SIH:
                    </h3>

                    <p>
                    1.	A nationwide initiative of Govt. of India & a flagship event of MHRD’s Innovation Cell (MIC). <br>
                    2.	One of the World’s biggest open innovation model <br>
                    3.	To provide students a platform to solve some of the pressing problems of our country. <br>
                    4.	To inculcate the culture of innovation and mindset of problem solving <br>
                    5.  The winners of SIH are provided with cash prizes as well as opportunities like, to further develop their products, open their own start-ups, and participate in International competitions.<br>
                    </p>

                    <h3>
                    Objectives:
                    </h3>

                    <p>
                    1. To harness creativity & expertise of students <br>
                    2. To spark innovation culture in all institute level through campus hackathons<br>
                    3. To build funnel for Startup India campaign<br>
                    4. To crowdsource solutions for improving governance and quality of life<br>
                    5. To provide opportunity to citizens to provide innovative solutions to India daunting problems<br>

                    </p>


                    <h3>
                        Activities:
                    </h3>
                    <p>
                        1.	All Central and State Ministries/Departments, Private Companies and PSUs are contacted to submit problem statements (PSs).<br>
                        2.	The above mentioned organizations submit challenges faced by their organizations or relevant to society.<br>
                        3.	The submitted problem statements are reviewed by expert panel of MHRD’s Innovation Cell (MIC) and then selected PSs are published on SIH portal<br>
                        4.	College students directly submit their ideas on the portal or the top selected teams from their own college hackathons submit their ideas on the portal<br>
                        5.	The submitted ideas are then evaluated by expert evaluators panel.<br>
                        6.	The shortlisted ideas and the concerned teams then participate in the Grand Finale. <br>
                        7.	After Grand Finale, the winning teams are awarded prize money by the problem statement provider organizations<br>
                        8.	As post-hackathon activity, the good ideas are further shortlisted by expert evaluators, based on technology, business plan, market research etc. <br>
                        9.	The highly potential ideas are then taken up by various Ministries or Companies or funded by AICTE to deploy their projects under various Technology Business Incubators (TBIs).<br>
                        10.	All the teams who get the opportunity to develop their projects further, are encouraged to build their own start-ups or they hand over the projects to concerned Ministries for further deployment or implementation.<br> 
                    </p>


                    <h3>
                        Output of SIH so far:
                    </h3>
                    <p>
                        1.	Three consecutive editions of SIH have been held in 2017, 2018 and 2019. <br>
                        2.	The 4th edition, SIH2020, software edition is planned to be held on 18th-19th July, 2020 with a 36-hour non-stop digital product development competition and Hardware edition is planned from 18th-22nd July, 2020 with a 5 days’ physical product development competition.<br>
                        3.	SIH 2017 had only software edition whereas SIH 2018, 2019 and 2020 included both software and hardware versions.<br>
                        4.	SIH 2017 witnessed problem statements posed by only Union Government Ministries and its Departments, whereas State Governments along with Central Ministries participated in SIH 2018. The SIH 2019 edition got even bigger with involvement of Private Sectors, MSMEs and NGOs along with Central Ministries. SIH2020 is open to both Central and State Ministries and its Departments, MSMEs, Private Sectors, PSUs and NGOs has received 350+ problem statements so far. Students are submitting their ideas at present. <br>
                        5.	Participation of the number of organizations in SIH to seek solution for their unique problems witnessed about 6-fold increase in SIH2019 compared to 2017. <br>
                        6.	Number of students’ participation to submit ideas in SIH also witnessed about 5-fold increase in 2019 since 2017. In 2019, more than 2 Lakh students participated from more than 2200 colleges compared to 45000+ students’ participation in 2017. <br>
                        7.	In SIH 2019, number of problem statements received were 334 for Software and 198 for Hardware sub-editions compared to 340 and 68 in SIH 2018. <br>
                        8.	SIH2019 witnessed a ~28% increase in student-teams’ participation and ~133% increase in number of winning teams during Grand Finale compared to SIH2017.<br>
                        9.	SIH 2017 Grand Finale was organized all over India in total 26 Nodal Centers while, SIH 2018 was held in total 38 Centers and SIH 2019 was held in total 66 Nodal Centers.  <br>
                    </p>


                    <h3>
                        Outcome of SIH so far:
                    </h3>
                    <p>
                        1.	About 360 teams further developed their SIH project post-hackathon<br>
                        2.	About 57 projects got funding assistance<br>
                        3.	About 16 projects have been delivered to various ministries/departments<br>
                        4.	About 375 projects got incubation opportunities<br>
                        5.	About 381 more teams are seeking for funding opportunities to further develop their products<br>
                        6.	About 19 start-ups have been made by teams after participating SIH<br>
                        7.	About 71 start-ups are in the process of establishment<br>
                        8.	About 256 prototypes are in the process of further development<br>
                        9.	About 26 IPRs have been filed till now out of which 5 are filed for copyright, 20 are under trademark and 1 is filed under patent.<br>
                        10.	About 121 more teams are planning to file for IPR.<br>
                        11.	Total 57 teams from SIH 2017 and about 20 teams from SIH 2018 received funding from AICTE to further develop their products.<br>
                        12.	Employability has gone higher multiple folds for SIH participants compared to earlier.<br>
                        13.	The SIH participants who have built their own start-ups are also creating jobs by higher manpower in their start-ups. <br>
                    </p>


                    <h3>
                        SIH – Plan for FY20-21:
                    </h3>
                    <p>
                        1.	The Software and Hardware editions for each of the SIH 2020, SIH 2021 and SIH 2022 to be concentrated more on the quality of the problem statements and idea submission. <br>
                        2.	More focus will be given to the post-hackathon development of the products and start-ups from the SIH winning ideas by connecting them to various funding organizations under both government and non-government organizations.<br>
                        3.	The students will be given chance to exhibit their developed products to various investors once their post-hackathon deployment period gets over.<br>
                        4.	SIH is proposed to open not only to technology students but also to all other students under all Science, Healthcare, Pharmacy and Management students to make SIH an interdisciplinary competition. This way students from all Science, technology and Management disciplines will be able to participate and work together through SIH to give solutions against problems of our society related to various different fields.<br>
                        5.	The students from various disciplines will be encouraged to pitch their ideas to each other and make strong, interdisciplinary teams to work together.  <br>
                    </p>


                    <h3>
                        International Hackathons
                    </h3>
                    <h3>
                        About International Hackathons:
                    </h3>
                    <p>
                        1.	Two editions of Singapore India Hackathon were organized by MHRD’s Innovation Cell (MIC) with tremendous success in the year 2018 and 2019.<br>
                        2.	It’s an initiative by the Prime Minister of India, Shri Narendra Modi.<br>
                    </p>

                    <h3>
                        Objectives:
                    </h3>
                    <p>
                        1.	To get acquainted with the other’s culture, values, work culture and ethics<br>
                        2.	Exchange thoughtful leadership<br>
                        3.	Work and collaborate on projects with varied skilled individuals and create cross-country strong bonds and learn from other’s strengths<br>
                    </p>

                    <h3>
                        Activities:
                    </h3>
                    <p>
                        1.	Problem Statements (PSs) related to all the participating countries are selected<br>
                        2.	Interested students are shortlisted, after online test and going through a personal round of Interview, which is done over the phone or by video call.<br>
                        3.	The interview panels were formed with members having varied skills to test analytical power, communication, presentation skill, technical and project management skills etc. of students. <br>
                        4.	The panel of interviewers evaluates the shortlisted students.<br>
                        5.	Students get shortlisted based on the performance of ONLINE TEST and PERSONAL round of INTERVIEW.<br>
                        6.	Selected students participate in the Finale.<br>
                        7.	Winning teams from all the participating countries are given Prize Money by their respective countries. <br>
                    </p>

                    <h3>
                        Output of Singapore India Hackathon so far::
                    </h3>
                    <p>
                        1.	Two consecutive editions of Singapore India Hackathon have been held in 2018 and 2019.<br>
                        2.	Both the editions of Singapore India Hackathon were jointly organized by MHRD Innovation Cell, All India Council for Technical Education, Nanyang Technological University and NTUitive Pte Ltd., Singapore<br> 
                        3.	The 1st edition was organized on 12-14 November, 2018 in Singapore.<br>
                        4.	The 2nd edition was arranged from September 28th – 30th, 2019 at Indian Institute of Technology Madras (IITM), India. 
                        5.	The 2nd edition of the hackathon was focused on three-thematic areas including Good health and Well-being; Quality Education; Affordable and clean energy and was modelled around a fast-paced non-stop 36-hours competition to develop creative and innovative solutions for pressing problems of India and Singapore. <br>
                        6.	A total of 20 teams comprising of 120 students participated for solving 5 problem statements. <br>
                        7.	Each team was a mix of Indian and Singaporean students and comprised of 3 participants from each country. All the teams from both the countries worked in collaborative manner in the 2nd edition compared to competitive manner in the 1st edition.<br>
                        8.	Ten teams were awarded with a total prize money of 40,000 Singapore dollars. <br>
                        9.	Top three winner teams with most innovative solutions were felicitated by the Hon’ble Prime Minister of India, Shri Narendra Modi on 30th September, 2019.<br>
                    </p>


                    <h3>
                        International Hackathons – plan for coming FY20-21:
                    </h3>
                    <p>
                        1.	To make India’s International reach out along with exchange of ideas and culture even more extensively and following the vision of the Hon’ble Prime Minister of India, MIC is planning to organize the 1st version of 3 International Hackathons in the year 2020-2021 and the 2nd version of them in the year 2021-2022.<br>
                        2.	These 3 International Hackathons are: <br>
                        (a)	India ASEAN Hackathon including all the 10 ASEAN countries and India. The 1st version is planned to happen in September, 2020 in IIT Guwahati, India.<br>
                        (b)	India Portugal Hackathon including both the countries. The 1st version is planned to happen, based on the theme ‘National Security’, in October, 2020 in Lisbon, Portugal.<br>
                        (c)	BIMSTEC Countries Hackathon including all the 7 BIMSTEC countries. This is still under proposal stage and might be finalized in the due course.<br>
                        3.	The above mentioned International Hackathon will be organized by MIC in collaboration with AICTE.<br>
                        4.	These will be non-stop 36 hours’ competition among students from various countries to exchange ideas and their respective cultures. <br>
                        5.	Prize money will be given to all the winning students by their respective countries.<br>
                        6.	MHRD’s Innovation Cell might also like to propose a Hack-Olympic including about 25-40 countries all over the world and India. This is proposed to happen in the year 2021-2022 provided required funding is available. <br>
                    </p>


                    ';
                } 

                
                elseif ($scheme == "Institute Innovation Councils (IIC)") {
                    echo '
                        <h2>
                            Objective of Institutions’ Innovation Council(IIC):
                        </h2>
                        <p>
                            To create a vibrant local innovation ecosystem. 
                            Start-up supporting Mechanism in HEIs.
                            Prepare institute for Atal Ranking of Institutions on Innovation Achievements Framework. 
                            Establish Function Ecosystem for Scouting Ideas and Pre-incubation of Ideas. 
                            Develop better Cognitive Ability for Technology Students.
                        </p>


                        <h2>
                            IIC 1.0 (November 2018 – June 2019).
                        </h2>
                        <p>
                            IIC program was inaugurated on 21st November 2018 at AICTE HQ New Delhi by Minister of HRD and a network of 950+ IICs were established across country. Through various activities driven by MHRD’s Innovation Cell through IICs at HEIs level has made an impact with reach out to more than 7.5 lakh students and 63,000+ faculties to receive exposure on various aspects of Innovation and start-up..
                        </p>

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">IIC 1.0</th>
                                <th scope="col">Student Participation</th>
                                <th scope="col">Faculty Participation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">Total Outreach</th>
                                <td>710326</td>
                                <td>69474</td>
                                </tr>

                                <tr>
                                <th scope="row">IFLTs</th>
                                <td>397698</td>
                                <td>37983</td>
                                </tr>

                                <tr>
                                <th scope="row">Workshops (IPR, Design Thinking)</th>
                                <td>289207</td>
                                <td>28981</td>
                                </tr>

                                <tr>
                                <th scope="row">Field Visit (Idea Competition)</th>
                                <td>21404</td>
                                <td>2353</td>
                                </tr>
                                
                            </tbody>
                        </table>
                        
                        <br/>

                        <h2>
                            IIC 2.0 (July 2019 – June 2020)
                        </h2>
                        <p>
                            New IIC calendar plan with various new features has been introduced from July 2019. More than 500 new Institutes were approved to establish IICs at their campuses. To make comprehensive impact in field of innovation, IPRs and Entrepreneurship following measures were introduced in IIC2.0 Edition- <br>
                        •	Flexible Semester based IIC calendar plan for HEIs to plan and organize the activities in the campus. <br>
                        •	Introduction of IIC calendar Driven Activities, Self-Driven Activities and MIC Driven Activates with differential scoring mechanism to encourage healthy competition among HEIs.<br> 
                        •	Provision of regular council meeting (Quarterly) to plan for various activities under IIC.<br>
                        •	New upgraded portal for report submission, Information dissemination and query resolution.<br>
                        
                        </p>

                        <h2>
                        Major Activities:
                        </h2>
                        <p>
                        •	IIC Innovation Ambassador Training <br>
                        •	IIC Innovation Contest 2020<br>
                        •	Impact Lecture Series 2020: As part of IIC 2019-20 action plan, total 79 IIC-institutes from more than 480 IIC-institutes applied for impact lecture session have been finalized and eligible for funding support up to Rs. 40,000 to organize two Impact lectures on Innovation/IPR/Startup by inviting external experts to campus.<br>
                        •	Funding Support to PoC finalist of National PoC Contest 2019<br>
                        1st round of evaluation was carried out on 5th Feb 2020 at AICTE HQ, total 19 teams presented their case to the evaluation committee. As per the recommendation of the committee, revised funding proposals from 17 teams received and 2nd evaluation committee (a three members committee was setup) has evaluated the revised proposals and recommended the final list with funding amount for disbursement to PoCs through Technology Business Incubators for utilization towards product/innovation development and market research and incubation support etc. Total fund amount Rs. 57.84 lakhs will be disbursed to 17 PoC teams. <br>
                        •	2nd Cohort of International Acceleration Program – CIAP 2020 and South Korea- India Startup Exposure cum Training<br>
                        </p>    

                        <h2>
                        Outreach of IIC so far: <br>    
                        Students and faculty impacted through IIC activities 
                        </h2>
                        <p>
                        •	STUDENTS: 2,436,032 <br>
                        •	FACULTY: 264,742
                        </p> 
                        
                        <h2>
                        (*Students and faculties counts are not unique.)
                        </h2>
                        <p>
                        Total number of Activities in IIC 2.0<br>
                        •	Self-Driven Activities	4083<br>
                        •	IIC Driven Activities	5896<br>
                        •	MIC Driven Activities	2066<br>
                        </p>   

                        <h2>
                        Future Work:
                        </h2>

                        <h2>
                        Innovation Ambassador
                        </h2>
                        <p>
                        IIC Innovation Ambassadors will undertake Five volunteer activities during post training phase and will upload report at IIC portal. At the end during the occasion of celebration of National Innovation Festival 2020 at MIC, best IA performers will be recognized for their efforts.
                        </p>   

                        <h2>
                        IIC Innovation Contest 2020
                        </h2>
                        <p>
                        So far more than 2500 ideas have been received through IIC portal and we are targeting to reach 10,000 ideas, 5,000 Proof of Concepts (PoCs) and finally 2,000 Innovations/prototypes to be nominated at IIC portal for further regional mentoring sessions to be held in different cities during the month of May and June 2020. Further nurturing 200 startup teams by providing training, exhibition, recognition, international exposure and finally funding support through incubation linkage to the finalists.
                        </p>  


                    
                    ';
                }
                
                
                
                elseif ($scheme == "Faculty development cell") {
                    echo '
                        <div class="m-2">
                            <h2 class="font-weight-bold mb-2 text-center">
                                Faculty Development Cell
                            </h2>
                            <ul type="number">
                                <li>
                                    Faculty development cell
                                </li>
                                <li>
                                    Faculty Training have been increased to be of varying types to benefit one and all:
                                    <br>
                                    (a) 2 week FDPs.<br>
                                    (b)	1 week STTPs.<br>
                                    (c)	Co-organized by AICTE - ISTE.<br>
                                    (d)	Through NPTEL.<br>
                                    (e)	Through Professional bodies and self-financed (several options).<br>

                                </li>
                                <li>
                                    Residential funded Faculty Development Programs conducted countrywide in different engineering domains are close to 1000, each FDP for 1 week to 2-week duration.
                                </li>
                                <li>
                                    Nos. of approved proposals have increased from 78 in 2015 to approx. 1000 in 2020.
                                </li>
                                <li>
                                    Sanctioned amount has increased from few lakhs in 2015 to Rs.30 crore in 2020.
                                </li>
                                <li>
                                    Distribution of the sanctioned cases have reached far and wide across India.
                                </li>
                                <li>
                                    Special emphasis has been laid for the aspirational districts of the states.
                                </li>
                                <li>
                                    National Initiative for Teacher Training Policy (The only initiative of its kind) has been implemented through a gazette notification. Each and every teacher has to mandatorily undergo 08 modules ensuring continuous learning followed by Industrial mentorship and mentor based supervision for the purposes of probation / promotion. Towards this the Hon’ble MHRD Minister has successfully launched the portal also.
                                </li>
                                <li>
                                    MoU between AICTE - ISTE has been concluded for training of faculties with 300 trainings per year for training of 36,000 faculties over a period of three years. A total 12206 faculties have benefited in the first year itself (This includes self financing schemes also).
                                </li>
                                <li>
                                    AICTE – NPTEL MoU allows faculty to take online NPTEL courses, and the same has been made at par with AICTE FDPs for the purposes of CAS.
                                </li>
                                <li class="font-weight-bold">
                                    AICTE – NPTEL Registration status.
                                    <br>
                                    Total number of Faculty Enrolled			216937
                                    <br>
                                    Total number of Faculty Registered			53632
                                    <br>
                                    Total number of Faculty Present 			39947
                                    <br>
                                    Total number of Faculty Passed	  		    35406
                                    <br>
                                    Total number of Faculty applied for FDP		33567
                                    <br>
                                    Note - 317 FDPs have been approved for the purposes of CAS for the period (Jan - Jun 2020). 
                                </li>
                                <li>
                                    TEQIP funded Collaborative Research Project is implemented by evaluating 1100 applications granting 396 project worth Rs.47.5 Cr. in record time through online mechanism.
                                </li>
                                <li>
                                    First review of 361 project were done successfully under TEQIP phase III, thereby enabling release of 40% of the balance amount. Second review has been successfully completed on 21 and 22 Feb 2020 at the premises of AICTE enabling release of additional 40%. 
                                </li>
                                <li>
                                    Faculties are made to travel abroad presenting papers / attending seminars and interacting with the faculties of foreign institutes. The numbers have drastically increased with the result that best practices being learnt are being inculcated in our institutes.  
                                </li>
                                <li>
                                FACULTY QUALIFICATION UPGRADATION
                                <br>
                                1.	No. of QIP Centres have been increased from 83 in 2016 to 105 in 2019. Further increase is proposed and review for the same is under process. <br>
                                2.	No. of faculty deputed for Ph.D. under QIP increased from 466 in 2016 to 653 in 2019 a growth of 40% in faculty deputation.<br>
                                3.	QIP - Pharmacy Nodal Centre operations have been revived after six years of dormancy. 03 cycles have since been completed.<br>
                                4.	QIP - Polytechnic Ph.D. studies for last 10 years have been reviewed to ensure completion of the Ph.D. courses by the beneficiaries.<br>
                                5.	Year 2019-20 being the golden jubilee year for QIP (the oldest scheme of MHRD), the achievement is proposed to be highlighted country wide.<br>

                                </li>
                                <li>
                                INTERNATIONAL ISSUES
                                <br>
                                1.	Issue of residency VISA of Indian Engineers in Kuwait has been dispensed with diplomatically.<br>
                                2.	Kuwait delegation visited India followed by Indian delegation visited Kuwait. Kuwait delegation was again invited for NIRF 2019 function.<br>
                                3.	Issue of UAE recognition of degrees in Engineering College through lateral entry has been resolved.<br>
                                4.	Several individual cases of Indian Engineers in Kuwait resolved, saving them from deporting their families to India.<br>

                                </li>
                                <li>
                                    RESEARCH INITIATIVES
                                    <br>
                                    1.	454 RPS Projects have been sanctioned. For the Financial year 2020 – 21, another 140 proposals covering management, SC – ST and general RPS are proposed.<br>
                                    2.	RPS – NER (For faculty) 46 Projects have been granted. <br>
                                    3.	RPS - NDF (For Ph. D. Supervisors) 44 projects have been granted giving boost to NDF Scheme.<br>
                                </li>
                               
                            </ul>
                        </div>
                    
                    ';
                } elseif ($scheme == "Teachers Training Policy") {
                    
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
                    <div style="margin-left: 32%;" class="row font-weight-bold">
                        <div class="col-4">
                            Total
                        </div>
                        <div class="col">
                            23,623	
                        </div>
                        <div class="col">
                            1688
                        </div>
                    </div>
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
                    
                    
                }

                elseif ($scheme == "BRIEF ON UK INIDA EDUCATION RESEARCH INITIATIVE (UKIERI) PROGRAMME") {


                    echo '

                    <h2 class="m-2 text-center">
                    BRIEF ON UK INIDA EDUCATION RESEARCH INITIATIVE (UKIERI) PROGRAMME"
                    </h2>
                    <p>
                        MHRD, Govt. of India and BIS, Govt. of UK has signed an MoU for UKIERI Phase-III which is effective from April, 2016 to March 2021. Following four stands of education collaboration will be undertaken under this programme :
                    </p>    

                    <p>
                        Strand 1) Leadership and Faculty Development <br>

                        Strand 2) Integration of Skills in Education System <br>
                        
                        Strand 3) e-Partnership and Research Incubation <br>
                        
                        Strand 4) Enhancing Mobility <br>
                    </p>

                    <p>
                        Accordingly, an Implementation Agreement (IA) between AICTE and UKIERI was signed on 06th September, 2016, for collaborative activities under Phase-III of UKIERI project. Executive Committee in its 101st meeting held on 3rd August, 2016, vide item No.101.03.20 considered and approved the Implementation Agreement (IA) signed between AICTE and UKIERI. 
                        <br>
                        UKIERI Board has shortlisted Dudley College, U.K., for conducting the Leadership Development Programme in Phase III of project. Under the Leadership Development Programme, experts from Dudley College will give training to 500 aspiring leaders (from Govt. Institutions/Govt./State Universities/AICTE approved institutions) during UKIERI Phase-III Project.
                        <br>
                        The applications were invited from all over India online. After selecting, the training of 1st batch of 100 participants during the AY 2017-18 was held as per details given below : 
                        <br>
                    
                    </p>

                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Workshop</th>
                        <th scope="col">Dates</th>
                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                            <th scope="row">I</th>
                            <td>28th - 30th June, 2017</td>
                            </tr>
                            
                            <tr>
                            <th scope="row">II</th>
                            <td>31st – 2nd August, 2017</td>
                            </tr>

                            <tr>
                            <th scope="row">III</th>
                            <td>3rd – 6th October, 2017</td>
                            </tr>

                            <tr>
                            <th scope="row">IV</th>
                            <td>10th – 12th January, 2018</td>
                            </tr>
                        </tbody>
                    </table>

                    <p>
                    The training of 2st batch of 200 participants during the AY 2018-19 was held as per details given below :
                    </p>

                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Workshop</th>
                        <th scope="col">Batch</th>
                        <th scope="col">Dates</th>
                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                            <th scope="row">I</th>
                            <td>
                            Batch-I
                            <br>
                            Batch-II
                            </td>
                            
                            <td>
                            13th – 16th Nov. 2018
                            <br>
                            19th – 22nd Nov. 2018 
                            </td>
                            </tr>


                            <tr>
                            <th scope="row">II</th>
                            <td>
                            Batch-I
                            <br>
                            Batch-II
                            </td>
                            <td>
                            20th – 23rd Feb. 2019
                            <br>
                            26th Feb. – 1st March 2019 
                            </td>
                            </tr>


                            <tr>
                            <th scope="row">III</th>
                            <td>
                            Batch-I
                            <br>
                            Batch-II
                            </td>
                            <td>
                            11th - 13st June 2019
                            <br>
                            19th – 21st June 2019 
                            </td>
                            </tr>
                        </tbody>
                    </table>

                    <p>
                    Further as per the Agreement, Dudley College, UK, send the list of 24 participants from the Participants of the AY 2017-18 with the request to select 10 participants for 05-day study tour to Dudley College, UK under LDP Training Programme. The final 10 selected participants visited UK from 1st April to 06th April 2018.
                    </p>


                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Workshop</th>
                        <th scope="col">Batch</th>
                        <th scope="col">Dates</th>
                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                            <th scope="row">I</th>
                            <td>
                            Batch-I
                            <br>
                            Batch-II
                            </td>
                            
                            <td>
                            30th July – 2nd Aug. 2019
                            <br>
                            6th Aug. – 9th Aug. 2019
                            </td>
                            </tr>


                            <tr>
                            <th scope="row">II</th>
                            <td>
                            Batch-I
                            <br>
                            Batch-II
                            </td>
                            <td>
                            4th – 7th July 2019 
                            <br>
                            9th July – 12th July 2019
                            </td>
                            </tr>


                            <tr>
                            <th scope="row">III</th>
                            <td>
                            Scheduled to be held from 18th March to 26th March 2020, but due to threat of Coronavirus has been postponed till further orders 
                            </td>
                            </tr>
                        </tbody>
                    </table>

                    <p>
                    As per the Agreement, Dudley College, UK, send the list of 47 participants from the Participants of the AY 2018-19 with the request to select 20 participants for 05-day study tour to Dudley College, UK under LDP Training Programme. The final 20 selected participants visited UK from 14th to 19th October 2019.
                    </p>

                    <h2>
                    PROPOSED PLAN FOR 2020-21 
                    </h2>

                    <p>
                    As per Agreement with Dudley College, UK, the training of 200 participants will be held during the AY 2020-21. The process for selection of 200 participants is yet to be started by the Council.
                    <br>
                    Further, Dudley college also submitted proposal for Master Trainer Development Programme to 40 senior faculties who have already attended AICTE-UKIERI Technical Leadership Development Programme from AY 2017-18 to AY 2019-20.
                    </p>
                    
                            
                    
                    ';
                }

                else {

                    $sql = "SELECT * FROM information WHERE name = '$scheme';";
                    $result = mysqli_query($conn, $sql);
                    $resultChk = mysqli_num_rows($result);
                    if ($resultChk < 1) {

                        $sql = "SELECT * FROM new_scheme WHERE scheme = '$scheme';";
                        $result = mysqli_query($conn, $sql);
                        if ($row = mysqli_fetch_assoc($result)) {

                            echo 
                            '
                            <a href="printschemes.php?id='.$row['id'].'" class="btn btn-primary float-right">Print</a>
                            <a href="print_withnotes.php?id='.$row['id'].'" class="btn btn-primary mr-2 float-right">Print With Note</a>
                            <a href="edit_new_schemes.php?id='.$row['id'].'" class="btn btn-info mr-2 float-right">Edit</a>
                            <div class="card mt-2">
                                <div class="card-body">
                                    <h2 class="card-title">'.$row['title'].'</h2>
                                    <h2 class="card-title">'.$row['scheme'].'</h2>
                                    <a download href="'.$row['file_url'].'" class="card-link">File Download</a>
                                    <p class="card-text">
                                    '.$row['description'].'
                                        <br>
                                    </p>
                                </div>
                            </div>

                            <br>
                            <a href="./edit_view.php?e=proposed&id='.$row['id'].'" class="btn btn-info mt-2 float-right">Edit Proposed Target</a>
                            <br />
                            <br />
                            <div class="row">
                                <div class="col">
                                    Proposed Target (Future Target F.Y. 2020-21)
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
                            <a href="./edit_view.php?e=future&id='.$row['id'].'" class="btn btn-info mt-2 float-right">Edit Future Target</a>
                            <br />
                            <br />
                            <div class="row mt-2">
                                <div class="col">
                                    Targets Met Till Date (Future Target F.Y. 2020-21)
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
                            
                            ';
                        }

                    } else {
                        if ($row = mysqli_fetch_assoc($result)) {
                            $table = $row['tables'];
                            echo '
                            <center>
                                <a href="./'.$table.'?id='.$row['id'].'" class="btn mt-2 mb-2 btn-primary w-50">
                                    Print Table
                                </a>
                            </center>
                            ';
    
                            echo '
                            <div class="card mt-2">
                                <div class="card-body">
                                    <h2 class="card-title">'.$row['name'].'</h2>
                                    <p class="card-text">
                                    '.$row['description'].'
                                        <br>
                                        
                                    </p>
                                </div>
                            </div>
                            ';
                            }
    
                            if ($table != "notable.php") {
                                echo '
                                    <div class="card mt-2">
                                    <div class="card-body">
                                        <iframe id="inlineFrameExample"
                                            title="Inline Frame Example"
                                            width="100%"
                                            height="750"
                                            frameBorder="0"
                                            src="./iframe/'.$table.'">
                                        </iframe>
                                        </div>
                                    </div>
                                ';
                            }
                    }


                    
                    

                    
                }



            } 
            else {

                $sql = "SELECT * FROM information;";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $table = $row['tables'];
                        echo '
                        <div class="card mt-2">
                            <div class="card-body">
                                <h2 class="card-title">'.$row['name'].'</h2>
                                <p class="card-text">
                                '.$row['description'].'
                                    <br>
                                    
                                </p>
                            </div>
                        </div>
                        ';


                        echo '
                        <div class="card mt-2">
                        <div class="card-body">
                            <iframe id="inlineFrameExample"
                                title="Inline Frame Example"
                                width="100%"
                                height="750"
                                frameBorder="0"
                                src="./iframe/'.$table.'">
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
                                    '.$row['proposed'].'
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
                                    '.$row['future'].'
                                    <br>
                                    </p>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <hr />
                        
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
        }

                
                
                
        ?>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>