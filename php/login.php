<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Elektron pochta yoki parolingiz noto`g`ri ')</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tizimga kirish</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="../img/wave.png">
	<div class="container">
		<div class="img">
			<img src="../img/bg.svg">
		</div>
		<div class="login-content">
			<form action="../index.html">
				<img src="../img/avatar.svg">
				<h3 class="title">Xush kelibsiz</h3>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Gmail pochtangiz</h5>
           		   		<input type="email" class="input" name="email" value="<?php echo $email; ?>" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Parolingiz</h5>
           		    	<input type="password" class="input"value="<?php echo $_POST['password']; ?>" required>
            	   </div>
            	</div>
            	<a href="register.php">Parolingiz esingizdan chiqdimi</a>
            	<input type="submit" class="btn" value="kirish">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
