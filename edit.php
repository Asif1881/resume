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
                 echo "id: " . $row["id"]. " - skills: " . $row["name"]. "<br>";
                
          ?>

          <div class="ea-light-grey ea-round-xlarge ea-small">
                  <?php 

                 echo '<p><a href="mycv.php?del='.$row["id"].'"> <i class="fa fa-remove fa-fw ea-right ea-large ea-text-teal"></i> </a><a href="edit.php?edit='.$row["id"].'"> <i class="fa fa-edit fa-fw ea-right ea-large ea-text-teal"></i> </a></p>';


                 


            echo '<div class="w3-container w3-center w3-round-xlarge w3-teal" style="'.$row["expi_percent"].'%">'.$row["expi_percent"].'%</div>';
            
                    
}

                   ?>
          </div>

        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="ea-twothird">

      <?php 

      if(isset($_POST['addskill'])){
        $name = $_POST['name'];
        $level = $_POST['expi_percent'];
        $id = $_POST['id'];

        $sql = "update `skills` set `name` = '$name', `expi_percent` = '$level' WHERE `id` = '$id'";

        if (mysqli_query($conn, $sql)){
          echo "<script> window.location='welcome.php'; </script>";
        }
        
      }    
      //print_r($_POST);
      ?>



    
      <div class="ea-container ea-card right-1  ea-margin-bottom">
        
            <?php
          

        if (isset($_GET['edit'])){

                      $edit_id = $_GET['edit'];

    
          $sql = "SELECT * FROM `skills` WHERE id = $edit_id " ;
          $result = mysqli_query($conn, $sql);

             $row = mysqli_fetch_assoc($result);
            
                 
                 ?>

             
              

        <div class="ea-container">
          <form class="w3-container w3-card-4" method="post">
  <p>      
  <label class="w3-text-blue"><b>Skill Name</b></label>
  <input class="w3-input w3-border" name="name" type="text" value="<?php echo $row['name']; ?>"></p>
  <p>      
  <label class="w3-text-blue"><b>Skill Level</b></label>
  <input class="w3-input w3-border" name="expi_percent" type="number" value="<?php echo $row['expi_percent']; ?>"></p>
  <input type="hidden" name="id" value="<?php  echo $edit_id ?>">
  <p>      
  <button class="w3-btn w3-blue" name="addskill">Update</button></p>
</form>
          <hr>
        </div>  
  <?php  } ?>
 <br>
</body>
</html>
