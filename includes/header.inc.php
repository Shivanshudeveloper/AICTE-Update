<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <?php
    session_start();
    if ($_SESSION['type'] != "RO") {
      echo '
        <a class="navbar-brand" href="./index.php">Home</a>
      ';
    } else {
      echo '
        <a class="navbar-brand" href="#!">Home</a>
      ';
    }
  ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="./full.php">Financial Allocations</a>
      </li> -->
      <!-- <li class="nav-item active">
        <a class="nav-link" href="./view.php">View By Department</a>
      </li> -->
      <!-- <li class="nav-item active">
        <a class="nav-link" href="./examination.php">Student Grant Release</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./student_development.php">Student Development</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./status_grant.php">Status Grant Release</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" target="_blank" href="./Model.pdf">Model Curriculum</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./court_cases.php">Court Cases</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./summer_internship.php">Summer Internship</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./chronology.php">Chronology of Perspective Plan</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./margdarshak.php">Margdarshak Cel</a>
      </li> -->
      <?php 
        if ($_SESSION['type'] != "RO" && $_SESSION['type'] != "Institute") {
          echo '
          <li class="nav-item active">
            <a class="nav-link" href="./view.php">View By Department</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./court_cases.php">Court Cases</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./pmo.php">VVIP/PMO References</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./activity/">Activity Booklet</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./event.php">Events</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./faq.php">FAQs & Online Grievance Redressal</a>
          </li>
          ';
        } else if ($_SESSION['type'] == "Institute") {
          echo '
          <li class="nav-item active">
            <a class="nav-link" href="./allevent.php">All Events</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./faq.php">FAQs & Online Grievance Redressal</a>
          </li>
          ';
        }
        
        
        
        else {
          echo '
          <li class="nav-item active">
            <a class="nav-link" href="./allevent.php">All Events</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./faq.php">FAQs & Online Grievance Redressal</a>
          </li>
          ';
        }
      ?>
      
    </ul>
  </div>
  <a class="btn btn-outline-danger btn-sm float-right" href="./logout.php">Logout</a>
</nav>
<script src="./ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<?php include 'auth.php'; ?>