<!-- Calling header page-->
<?php
$page_title = "Wisnewski's Cafe";
include('includes/header.php');
include('includes/nav.php');
include('includes/carousel.php');


?>

<!-- Start of content-->
<div id="sizecontroldiv" class="controlstyle">

  <a href="#smaller"><i class="fa fa-minus" aria-hidden="true"></i></a> <a href="#bigger"><i class="fa fa-plus" aria-hidden="true"></i></a><br><br>




  <div class="container pt-5 controlstyle">
    <div class="row">

      <div class="col-sm-1">

      </div>
      <div class="col-sm-10">
        <h1 class="heading_3 text-center text-colour">Finding the Crease</h1>
        <p class="text-center">
          <img class="img" src="image/logo2.jpg" alt="logo">
        </p>

      </div>
      <div class="col-sm-1">

      </div>
    </div>


  </div>

  <!-- Start of content 2 -->
  <div class="card text-center bg-colour text-colour">
    <div class="card-header text-colour bg-colour">
      Featured
    </div>
    <div class="card-body bg-colour text-colour">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text text-colour">With supporting text below as a natural lead-in to additional content.</p>
      <a href="contactus.php" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>



  <!-- Calling footer page-->
  <?php
  include 'includes/footer.php';
  ?>