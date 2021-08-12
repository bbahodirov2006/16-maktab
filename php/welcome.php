<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hisob</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  </head>
  <body>
    <header>
      <div class="inner-width">
      
      <a href="index.html" class="logo"><img src="logo.png" alt="">Behruz</a>
        <i class="menu-toggle-btn fas fa-bars"></i>
        <nav class="navigation-menu">
          <a href="welcome.html"><i class="fas fa-home home"></i>UY</a>
          <a href="#"><i class="fas fa-align-left about"></i> About</a>
          <a href="#"><i class="fab fa-buffer works"></i> Works</a>
          <a href="#"><i class="fas fa-users team"></i> Team</a>
          <a href="#"><i class="fas fa-headset contact"></i> Contact</a>
          <a href="logout.php"><i class="close"></i> Chiqish</a>
        </nav>
      </div>
    </header>


    <script type="text/javascript">
      $(".menu-toggle-btn").click(function(){
        $(this).toggleClass("fa-times");
        $(".navigation-menu").toggleClass("active");
      });
    </script>
  <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <button name="submit" class="btn" href="login.php">Kirish</button>
</body>

    
</html>