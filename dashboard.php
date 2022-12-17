<?php
  include("header.php");
  include("footer.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300&family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- for background picture -->
  <style>
    body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 150px;
    right: 10px;
    bottom: 0;
    background-image: url('img/dashboard_backgroud.png');
    opacity: 0.35;
    background-repeat: no-repeat;
  }
  </style>

  <!-- header file alone with dropdown profile is in header file -->

  <section class="section-p1 dashboard">
    <div class="greet">
      <h1>Hello there!</h1>
      <h3>
        <p>It's good to see you</p>
      </h3>
    </div>
  </section>
</body>
</html>