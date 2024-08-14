<?php
$conn=mysqli_connect("localhost","root","bishan44","hungry_hippo");
$query="SELECT * FROM foods";
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
  <div class="flex">
    <?php foreach( $rows as $element): ?>
      <div class="card flex-item" style="width: 18rem;">
        <img src="<?php echo $element["imageURL"]?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $element["name"]?></h5>
          <?php echo $element["nutritionInfo"]?>
          <?php echo $element["category"]?>
          <?php if ($element["recommendedForKid"] == 1): ?>
            <p><span class="badge text-bg-secondary">Recommend for kidssss</span></p>
            <?php else:?>
            <p> <span class="badge text-bg-secondary">Nots recommend for kids</span></p>
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
