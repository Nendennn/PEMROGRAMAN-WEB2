<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <title>Document</title>
</head>
<body>
<h1>array_buah.php</h1>

<div id="container">

<?php 
$fruits = ["Apel", "Mangga", "Rambutan", "Melon", "Leci"];
?>

<?php foreach($fruits as $buah): ?>
    <article class="holder">
      <section class="card">
        <div class="card__text">
          <h2><?= $buah ?></h2>
        </div>
      </section>
    </article>
<?php endforeach; ?>

  </div>
</body>
</html>