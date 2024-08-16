<?php
$conn=mysqli_connect("localhost","root","bishan44","hungry_hippo");
$query="SELECT * FROM foods order by createdAt DESC";
$result=mysqli_query($conn,$query);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hungry Hippo | Roshan Shrestha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</head>
<body class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Add-product.php">ADD PRODUCT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div class="flex">
    <?php foreach( $rows as $element): ?>
      <div class="card flex-item" style="width: 18rem;">
        <img src="<?php echo $element["imageURL"]?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $element["name"]?></h5>
          <?php echo $element["category"]?>
          <?php echo"<br>"?>
          <?php echo $element["nutritionInfo"]?>
          <?php if ($element["recommendedForKid"] == 1): ?>
            <p><span class="badge text-bg-secondary">Recommend for kids</span></p>
            <?php else:?>
            <p> <span class="badge text-bg-secondary">Not recommend for kids</span></p>
          <?php endif; ?>
          <?php  echo $rs= $element["price"]*135,"NRS" ?>
           <?php echo"<br>"?>
          <a href="#" class="btn btn-primary">EDIT</a>
          <a href="#" class="btn btn-danger">DELETE</a>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</body>
</html>
