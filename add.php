<?php 
  session_start();
  if(!isset($_SESSION['name'])){
    header('location:index.php');
  }
 ?>

<?php include 'conn.php'; ?>

<!DOCTYPE html>
<html>
<title>Cv</title>
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
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        
        <div class="w3-container">
          

          <p class="ea-large"><b><i class="fa fa-asterisk fa-fw ea-margin-right ea-text-teal"></i>Skills</b><a href="add.php"><i class="fa fa-plus fa-fw ea-right ea-large ea-text-teal"></i></a></p>

           <?php
          
          $sql = "SELECT * FROM `skills`" ;
          $result = mysqli_query($conn, $sql);

             while($row = mysqli_fetch_assoc($result)) {
                 echo "id: " . $row["id"]. " - skills: " . $row["name"]. " " . $row["expi_percent"]. "<br>";
                }
          ?>

          


        </div>
      </div><br>

    </div>
    <hr>
    <br>

    <div class="ea-twothird">

      <?php 

      if(isset($_POST['addskill'])){
        $name = $_POST['sname'];
        $level = $_POST['level'];
        

        $sql = "INSERT INTO `skills` (`id`, `name`, `expi_percent`) VALUES (NULL, '$name', '$level')";

        if (mysqli_query($conn, $sql)){
          $last_id = mysqli_insert_id($conn);
          $code = "u-".$last_id;
          $sql1 = "update `skills` where id = $last_id ";
          if (mysqli_query($conn, $sql1)){
            echo "<script> window.location='welcome.php'; </script>";
          }
          
        }
        
      }    
      //print_r($_POST);
      ?>
<br>
<br>


    
      <div class="ea-container ea-card right-1  ea-margin-bottom">
        
        <div class="ea-container">
          <form class="welcome.php" method="post">
  <p>      
  <label class="w3-text-blue"><b>Skill Name</b></label>
  <input class="w3-input w3-border" name="sname" type="text"></p>
  <p>      
  <label class="w3-text-blue"><b>Skill Level</b></label>
  <input class="w3-input w3-border" name="level" type="number"></p>
  <p>      
  <button class="w3-btn w3-blue" name="addskill">Add</button></p>
</form>
          <hr>
        </div>  
  
 <br>
</body>
</html>
