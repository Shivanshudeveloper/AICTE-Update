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
<div class="container mb-2">

    <div class="row">
        <div class="col">
            <h2 class="font-weight-bold mb-2 float-left">
                All India Council for Technical Education
            </h2>
        </div>
        <div class="col-3 float-right">
            <a class="btn btn-info mt-1" href="./view.php">View By Department</a>
        </div>
    </div>

    

    <form>
        <div class="form-group">
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
                        <option value="Student’s Developmental Cell(StDC)">Student’s Developmental Cell(StDC)</option>
                        <option value="Vigilance Cell">Faculty Development Cell (FDC)</option>
                        <option value="Vigilance Cell">Institutional Development Cell(IDC)</option>
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
                        <option value="Induction Program Cell (IPC)">Induction Program Cell (IPC)</option>
                        <option value="Margdarshak Scheme">Margdarshak Scheme</option>
                        <option value="AICTE Training And Learning ( ATAL ) Academy Cell">AICTE Training And Learning ( ATAL ) Academy Cell</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Schemes</label>
            <select class="form-control" id="exampleFormControlSelect2">
            <option>Margdarshan</option>
            <option>RPS</option>
            <option>RPS (Management)</option>
            <option>RPS (NER)</option>
            <option>RPS (NDF)</option>
            <option>RPS (SC/ST)</option>
            <option>Pragati</option>
            <option>Saksham</option>
            <option>PG</option>
            <option>NDF</option>
            <option>ESS</option>
            <option>SPDC (SC/ST)</option>
            <option>MODROB</option>
            <option>MODROB (Rural)</option>
            <option>GOC</option>
            <option>UBA</option>
            <option>Prerana</option>
            <option>Samridhi</option>
            <option>STTP</option>
            <option>FDP</option>
            <option>AICTE - ISTE</option>
            <option>FDP through Technical university for teachers</option>
            <option>FDP through Technical university for Librarians</option>
            <option>STTP for Physical Trainers/Sports Game</option>
            <option>QIP</option>
            <option>INAE (DVP)</option>
            <option>INAE (TRF)</option>
            <option>INAE (TG)</option>
            <option>MITACS</option>
            <option>SSPCA</option>
            <option>Travel Grant</option>
            <option>ELCTE</option>
            <option>SS NER</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Title</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" col="10" rows="7"></textarea>
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01"
                aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="exampleFormControlTextarea1">Proposed Target (Future Target F.Y. 2020-21)</label>
                    <iframe id="inlineFrameExample"
                                title="Inline Frame Example"
                                width="100%"
                                height="420px"
                                src="./test.php">
                    </iframe>
                </div>
                <div class="col">
                    <label for="exampleFormControlTextarea1">Targets Met Till Date (Future Target F.Y. 2020-21)</label>
                    <iframe id="inlineFrameExample"
                                title="Inline Frame Example"
                                width="100%"
                                height="420px"
                                src="./test.php">
                    </iframe>
                </div>
            </div>
            
        </div>
        <hr>
       
        <!-- <div class="form-group">
            <div style="margin-left: 45%;" class="h3 font-weight-bold">
                Amount Released (In Lacs)
            </div>
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
                        <input type="text" value="84.49" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="153.30" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="3580.00" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th scope="row">RPS</th>
                    <td>
                        <input type="text" value="13.76" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="1,178.62" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="494.06" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="523.47" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">RPS (Management)</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="138.33" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">RPS (NER)</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="665.46" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="76.53" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">RPS (NDF)</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="562.24" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">RPS (SC/ST)</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="284.00" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">Hostel (SC/ST)</th>
                    <td>
                        <input type="text" value="2001" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="2087" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="3288" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="189.75" class="form-control">
                    </td>
                </tr>


                <tr>
                    <th scope="row">Pragati</th>
                    <td>
                        <input type="text" value="441.24" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="1682.68" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="1289.11" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="1461.92" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">Saksham</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="36.27" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="109.76" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="60.02" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">PG</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="34303.58" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="33723.19" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="30953.96" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">NDF</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="325.75" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="1120.07" class="form-control">
                    </td>
                </tr>


                <tr>
                    <th scope="row">ESS</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="600.88" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="872.03" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="3.17" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">ESS</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="600.88" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="872.03" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="3.17" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">SPDC (SC/ST)</th>
                    <td>
                        <input type="text" value="25.31" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="140.83" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="415.06" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="264.67" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">MODROB</th>
                    <td>
                        <input type="text" value="1579" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="3778" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="2440" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="Under eval" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">MODROB (Rural)</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="1337.82" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">GOC</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="80.07" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="518.52" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="349.21" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">UBA</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="36.86" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="13.32" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">Prerana</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="333.31" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="231.81" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="208.80" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">Samridhi</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="125.21" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="106.10" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="84.38" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">STTP</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="489.57" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="1133.65" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="992.34" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">FDP</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="1203.48" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="Under eval" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">AICTE - ISTE</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="357.91" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="251.40" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">FDP through Technical university for teachers </th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="180" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="15" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">FDP through Technical university for Librarians</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="18" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="1.5" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">STTP for Physical Trainers/Sports Game</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="9.77" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="10" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">QIP</th>
                    <td>
                        <input type="text" value="1834" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="2330.11" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="2331.01" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="1205.08" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">INAE (DVP)</th>
                    <td>
                        <input type="text" value="1.81" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="2.22" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="23.46" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="30" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">INAE (TRF)</th>
                    <td>
                        <input type="text" value="18.8" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="63" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="15.15" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">INAE (TG)</th>
                    <td>
                        <input type="text" value="0.71" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="11.03" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="16.96" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">MITACS</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="97.81" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">SSPCA</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="48.74" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="55.61" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">Travel Grant</th>
                    <td>
                        <input type="text" value="0.70" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="20.14" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="35.38" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">ELCTE</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="10.41" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">SS NER</th>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="497" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th scope="row">Total</th>
                    <td>
                        <input type="text" value="6000.82" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="48502.86" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="49189.06" class="form-control">
                    </td>
                    <td>
                        <input type="text" value="43837.58" class="form-control">
                    </td>
                </tr>


            </tbody>
        </table>
        </div> -->
        <center>
            <button class="btn w-50 btn-primary mb-3">Submit</button>
        </center>
    </form>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>