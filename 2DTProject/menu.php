<!-- Calling header page-->
<?php
$page_title = "Menu";
include 'includes/header.php';
include('includes/nav.php');
include('includes/Text-resizer.php');
?>

<!-- Start of content-->
<div class="container pt-5 pb-5">
  <h2 class="heading_2 text-center text-colour">Menus</h2>
  <hr>
  <!-- Start of card-->
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <img src="image/card-breakfast.jpg" class="card-img-top" alt="Breakfast">
        <div class="card-body bg-colour">
          <h2 class="text-colour">Breakfast</h2>
          <a class="button" href="Image/Menu.pdf" role="button">View Menu</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="image/card-lunch.jpg" class="card-img-top" alt="Lunch">
        <div class="card-body bg-colour">
          <h2 class="text-colour">Lunch</h2>
          <a class="button" href="Image/Menu.pdf" role="button">View Menu</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="image/card-dinner.jpg" class="card-img-top" alt="Dinner">
        <div class="card-body bg-colour">
          <h2 class="text-colour">Dinner</h2>
          <a class="button" href="Image/Menu.pdf.pdf" role="button">View Menu</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="image/card-dessert.jpg" class="card-img-top" alt="dessert">
        <div class="card-body bg-colour">
          <h2 class="text-colour">Dessert</h2>
          <a class="button" href="Image/Menu.pdf" role="button">View Menu</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="image/card-drinks.jpg" class="card-img-top" alt="drinks">
        <div class="card-body bg-colour">
          <h2 class="text-colour">Drinks</h2>
          <a class="button" href="Image/Menu.pdf" role="button">View Menu</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Calling footer page-->
<?php
include 'includes/footer.php';
?>