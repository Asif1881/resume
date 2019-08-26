<?php 
  session_start();
  if(!isset($_SESSION['name'])){
    header('location:index.php');
  }
 ?>

<?php include 'conn.php'; ?>

<!DOCTYPE html>
<html>
<title>Resume</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-onethird">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="Image.jpg" style="width:10%" alt="Avatar">
          <div style="margin-bottom: -45px;" class="w3-display-bottomleft w3-container w3-text-black">
            <h3 >Asif Ikbal</h3>
          </div>
        </div>
        <div style="margin-top: 30px;"class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-blue"></i>Web Developer</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-blue"></i>Dhaka, Bangladesh</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-blue"></i>asif35-1881@diu.edu.bd</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-blue"></i>01750376744</p>
          <hr>


          <p class="ea-large"><b><i class="fa fa-asterisk fa-fw ea-margin-right ea-text-blue"></i>Skills</b><a href="add.php"><i class="fa fa-plus fa-fw ea-right ea-large ea-text-blue"></i></a></p>

          <?php
          
          $sql = "SELECT * FROM `skills`" ;
          $result = mysqli_query($conn, $sql);

             while($row = mysqli_fetch_assoc($result)) {
                 echo "<p>id: " . $row["id"]. " - skills: " . $row["name"]. "</p>";
                 ?>
                 <div class="ea-light-grey ea-round-xlarge ea-small">
                  <?php 
$v=$row["expi_percent"];
                 echo '<p><a href="welcome.php?del='.$row["id"].'"> <i class="fa fa-remove fa-fw ea-right ea-large ea-text-blue"></i> </a><a href="edit.php?edit='.$row["id"].'"> <i class="fa fa-edit fa-fw ea-right ea-large ea-text-blue"></i> </a></p>';


                 


            echo '<div class="w3-container w3-center w3-round-xlarge w3-blue" style="'.$v.'%">'.$row["expi_percent"].'%</div>';
            
                    }


                   ?>
          </div>

       
          
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-threethird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Logo Design</b></h5>
          <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2017 - <span class="w3-tag w3-blue w3-round">Current</span></h6>
          <p>www.upwork.com</p>
          <hr>
        </div>
        
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Daffodil International University</b></h5>
          <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i>jan 2017 - jan 2020</h6>
          <p>BSc in Software Engineering</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Govt. Akbar Ali College</b></h5>
          <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Science</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Momena Ali Biggan School</b></h5>
          <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2008 - 2013</h6>
          <p>Science</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-blue w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

</body>
</html>
