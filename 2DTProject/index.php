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
        <h1 class="heading_3 text-center text-colour">Wisnewski's Cafe</h1>
        <p class="text-center">
          <img class="img" src="image/logo2.jpg" alt="logo">
        </p>

      </div>
      <div class="col-sm-1">

      </div>
    </div>


  </div>

  <!-- Start of content 2 -->
  <div class="container pb-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card">
          <img src="image/Card.jpg" class="card-img-top brighten_img" alt="Cafe food">
          <div class="card-body bg-colour">
            <h2 class="heading_3 text-colour">Menu</h2>
            <p class="para1 text-colour">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam rem eius, sit est ea nesciunt rerum ipsum? Est maiores quae dolorem, magni maxime consectetur doloribus accusamus perspiciatis nobis. Aliquid, excepturi?</p>
            <div>
              <a class="button" href="menu.php" role="button">Menus</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="image/Card-3.jpg" class="card-img-top brighten_img" alt="Cafe Food">
          <div class="card-body bg-colour">
            <h2 class="heading_3 text-colour">Make a reservation</h2>
            <p class="para1 text-colour">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div>
              <a class="button" href="booking.php" role="button">Make Reservation</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="image/Card-2.jpg" class="card-img-top brighten_img" alt="Sign">
          <div class="card-body bg-colour">
            <h2 class="heading_3 text-colour">Gallery</h2>
            <p class="para1 text-colour">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            <div>
              <a class="button" href="gallery.php" role="button">Gallery</a>
            </div>
          </div>
        </div>
      </div>
    </div>



  </div>

</div>



<!-- Calling footer page-->
<?php
include 'includes/footer.php';
?>