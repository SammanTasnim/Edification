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
  <header id="main-header">
    <div class="dash-nav">
      <ul>
        <li> <a href="dashboard.php">Home</a></li>
        <li> <a href="#">Your Courses</a></li>
        <li> <a href="all_courses.php">All Courses</a></li>
        <li> <a href="#">Contribute</a></li>
      </ul>
    </div>
    <div id="topbar" class="section-p1">
      <div class="searchbar">
        <input type="text" placeholder="search for courses/topics...">
        <img src="img/magnifying-glass.png" alt="" style="width: 30px;">
      </div>
      <div class="profile">
        <button class="drpdwn-btn">
          <img src="img/person_avatar_account_user_icon_191606.png" alt="" class="pro-icon" style="width: 50px;"> 
          <img src="img/down.png" alt="" class="dwn-icon">
        </button>
      </div>
    </div>
  </header>

  <section class="section-p1 dashboard">
    <div class="greet">
      <h3>Hello there!</h3>
      <p>It's good to see you</p>
    </div>
  </section>

  <footer class="footer">
    <p>© 2022 Edification</p>
    <a href="" class="footer-btn">About Us</a>
    <a href="" class="footer-btn">Contact Us</a>
    <a href="" class="footer-btn">FAQ</a>
    <a href="logout.php" class="footer-btn">Log out</a>
  </footer>
</body>
</html>



